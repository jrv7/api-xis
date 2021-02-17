<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'db_tables';
    public $timestamps = true;
    
    public function database()
    {
        return $this->belongsTo(Database::class);
    }

    public function type()
    {
        return $this->belongsTo(TableType::class, 'table_type_id');
    }

    public function primaryKeys()
    {
        return $this->hasMany(TableField::class, 'table_id')
            ->where('primary_key', 1)
            ->orderBy('id', 'asc');
    }

    public function fields()
    {
        return $this->hasMany(TableField::class, 'table_id')
            ->orderBy('id', 'asc');
    }

    public function relatedTables()
    {
        return $this->hasMany(RelatedTable::class, 'table_id')
            ->orderBy('relation_order', 'asc');
    }

    public function listActions()
    {
        return $this->hasMany(TableListAction::class, 'table_id')
            ->orderBy('action_order', 'asc');
    }

    public function _JoinedTables () {
        return $this->hasMany(ViewJoinedTable::class, 'left_table_id', 'id');
    }

    public function _OneToManyTables () {
        return $this->hasMany(ViewRelatedTable::class, 'right_table_id', 'id');
    }

    public function _ReferencedTables () {
        return $this->_OneToManyTables();
    }

    public function manyToManyTables () {
        return $this->hasMany(VwManyToManyTable::class, 'm_table_id', 'id');
    }

    public function MakeItModel () {
        $counter = 0;
        CHECK_MODEL: {
            try {
                $this->MakeModelFile($this);

                if (!!! class_exists($this->model)) {
                    $counter++;
                    if ($counter < 5) {
                        goto CHECK_MODEL;
                    }

                    return new \Exception("Could not find Model file");
                }
            } catch (\Exception $e) {
                return $e;
            }
        }
        // dd('Criando um Model de ', $this->model);
        $model = $this->model;
        return new $model;
    }

    public function MakeModelFile ($Table) {
        if (!!! @class_exists($Table->model)) {
            // echo "Classe nao existe";
            $Database = $Table->database;
            // Primary Keys
            $foreignFields = $Table->fields;
            $pkeys = [];
            $simpleFields = [];
            $hiddenFields = [];
            $urlFields = [];
            foreach ($Table->fields()->where('is_appendable', false)->get() as $field) {
                if ($field->primary_key) {
                    $pkeys[] = $field->name;
                } else if ($field->is_hidden) {
                    $hiddenFields[] = $field->name;
                } else {
                    if (@in_array($field->name, ['created_at', 'updated_at'])) continue;
                    $simpleFields[] = $field->name;
                }

                if ($field->type->is_image) {
                    $urlFields[] = $field->name;
                }
            }

            $ModelFile = 'TABLE_' . mb_strtoupper($Table->database->name) . '_' . mb_strtoupper($Table->name) . '_' . md5($Table->id);

            $appends = [];
            if (count($Table->_ReferencedTables)) {
                foreach ($Table->_ReferencedTables as $refTable) {
                    // if ($refTable->_LeftTable->model == 'Nothing') {
                    //     $refTable->_LeftTable->MakeItModel();
                    // }
                    $appends[] = $refTable;
                }
            }

            // echo "<br>Model file: {$ModelFile}";

            $tmp = explode('\\', $Table->model);
            $ModelName = $tmp[count($tmp) - 1];

            $content = '<?php

namespace App\Models\Temp;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Admin\Indexer;
use App\Models\XisModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Config;
use Auth;
';
            if ($Table->has_soft_delete) {
                $content .= '
use Illuminate\Database\Eloquent\SoftDeletes;';
            }
            $content .= '

class ' . $ModelFile . ' extends XisModel {
    ' . (($Table->has_soft_delete) ? 'use SoftDeletes;' : '') . '

    private const TABLE_ID = ' . $Table->id . ';
    protected $connection = \'' . $Database->db_connection . '\';
    public $table = \'' . $Table->name . '\';';

            if ($Table->type->id != 4) {
                if (@count($pkeys) > 1) {
                    $content .= '
    protected $primaryKey = [\'' . implode("', '", $pkeys) . '\'];';
                } else if (isset($pkeys[0])) {
                    $content .= '
    protected $primaryKey = \'' . $pkeys[0] . '\';';
                }
            }

            $content .= '
    public $timestamps = ' . ($Table->has_timestamps ? 'true' : 'false') . ';

    protected $fillable = [
        \'' . implode("', '", $simpleFields) . '\',
    ];

    protected $hidden = [
        \'' . implode("', '", $hiddenFields) . '\',
    ];

    public function new ()
    {
        return new self;
    }
';
            if (count($appends)) {
                $appendedFields = [];
                foreach ($appends as $append) {
                    // Each append is an Instance of Table->_ReferencedTable
                    $appendedFields[] = "total_{$append->_LeftTable->name}";
                }

                $appendsContent = '
    protected $appendables = [
        \'' . implode("', '", $appendedFields) . '\',
    ];

    public function setAppendables()
    {
        foreach ($this->appendables as $appendable) {
            $this->setAttribute($appendable, $this->getAttribute($appendable));
        }
    }
';
                $content .= $appendsContent;
            }

            if (count($Table->_JoinedTables)) {
                foreach ($Table->_JoinedTables as $JoinedTable) {
                    $func_name = str_replace('_id', '', $JoinedTable->left_table_field_name);
                    $model_name = explode('\\', $JoinedTable->_RightTable->model);
                    $model_name = $model_name[count($model_name) - 1];
                    if ($model_name == 'Nothing') {
                        $model_name = 'TABLE_' . mb_strtoupper($JoinedTable->_RightTable->database->name) . '_' . mb_strtoupper($JoinedTable->_RightTable->name) . '_' . md5($JoinedTable->_RightTable->id);
                    }
                    if (!$model_name) {
                        $model_name = 'Nothing';
                    }
                    $content .= '
    /**
     * Function ' . $func_name . '
     * > OneToOne Related Model
     * Left Table: ' . $JoinedTable->left_table_name . '
     * Left Field: ' . $JoinedTable->left_table_field_name . '
     *
     * Right Table: ' . $JoinedTable->right_table_name . '
     * Right Field: ' . $JoinedTable->right_table_field_name . '
     * Visible Field: ' . $JoinedTable->right_table_visible_field_name . '
     */
    public function ' . $func_name . '()
    {
        return $this->hasOne(' . $model_name . '::class, \'' . $JoinedTable->right_table_field_name . '\', \'' . $JoinedTable->left_table_field_name . '\');
    }
';
                }
            }

            // Inserts all OneToMany Relations

            if (count($appends)) {
                foreach ($appends as $append) {
                    // Each $append is an instance of Table->_ReferencedTable
                    if (substr_count($append->_LeftTable->model, 'TABLE_')) {
                        $oneToManyModel = $append->_LeftTable->model;
                        $oneToManyModel = explode('\\', $oneToManyModel);
                        $oneToManyModel = $oneToManyModel[count($oneToManyModel) - 1];
                    } else {
                        $oneToManyModel = $append->_LeftTable->model;
                    }

                    if (!$oneToManyModel) {
                        $oneToManyModel = 'Nothing';
                    }

                    $appendGetters = '

    public function ' . str_replace(' ', '', ucwords(str_replace('_', ' ', $append->_LeftTable->name))) . '()
    {
        return $this->hasMany(' . $oneToManyModel . '::class, \'' . $append->left_table_field_name . '\', \'' . $append->right_table_field_name . '\');
    }
';
                    $content .= $appendGetters;
                }
            }

            if (count($appends)) {
                foreach ($appends as $append) {
                    // Each $append is an instance of Table

                    $appendGetters = '

    public function getTotal' . str_replace(' ', '', ucwords(str_replace('_', ' ', $append->_LeftTable->name))) . 'Attribute()
    {
        return $this->' . str_replace(' ', '', ucwords(str_replace('_', ' ', $append->_LeftTable->name))) . '->count();
    }
';
                    $content .= $appendGetters;
                }
            }

            if (count($urlFields)) {
                foreach ($urlFields as $urlField) {
                    $urlFieldGetters = '

    public function get' . str_replace(' ', '', ucwords(str_replace('_', ' ', $urlField))) . 'Attribute($value)
    {
        $table_id = self::TABLE_ID;
        return \Storage::disk(Config::get("api.filesystem_cloud"))->temporaryUrl("contents/{$table_id}/{$this->id}/public/{$value}", strtotime("+120 minutes"));
    }
';
                    $content .= $urlFieldGetters;
                }
            }

            $content .= '
}';
            if (!!! \Storage::disk('local')->put("/modelsOnTheFly/{$ModelFile}.php", $content)) {
                dd("Imposivel salvar arquivo de Model temporario {$ModelFile}");
            }

            $Table->model = "App\\Models\\Temp\\{$ModelFile}";
            if (@isset($Table->Fields)) unset($Table->Fields);
            if (@isset($Table->ForeignFields)) unset($Table->ForeignFields);
            if (@isset($Table->ListFields)) unset($Table->ListFields);
            if (@isset($Table->IDField)) unset($Table->IDField);
            if (@isset($Table->DefaultActionField)) unset($Table->DefaultActionField);
            $Table->save();

            return $Table->model;
            // dd("Making temp Model file {$Table->name} IV", $Table);

        } else return $Table->model;//return true;


        // $TModel = new $Table->model;
        return true;
        // dd($Table);
    }
}