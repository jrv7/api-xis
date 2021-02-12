<?php

namespace App\Models;

use App\Models\Admin\{UpdateHistory, Indexer, Table, TableFieldType};
use DB;

use Illuminate\Database\Eloquent\Model;

class XisModel extends Indexer {


    public static function boot() {
        parent::boot();

        self::creating(function($Model){
            // ... code here
        });

        self::created(function($Model){
            // ... code here
            $Model->updateStructure();
        });

        self::updating(function($Model){
            // ... code here
            if (!!! isset($Model->User)) {
                return true;
            }
            $History = new UpdateHistory;
            $History->user_id = $Model->User->id;
            $History->table_id = $Model->Table->id;

            $History->save();
            $History->InsertHistoryData($Model);

            // dd('DD after updating', $History);
            // dd("Atualizando a data de modificacao da tabela {$Model->Table->name}");
            $updated_at = \App\Models\Admin\Table::where('id', $Model->Table->id)
                ->get();

            if ($updated_at->isNotEmpty()) {
                $updated_at = $updated_at->first();
                $datahora = explode(' ', microtime());
                $datahora = date("Y-m-d H:i:s.", $datahora[1]) . ($datahora[0] * 1000000);
                $updated_at->updated_at = $datahora;
                // $updated_at->updated_at = time();
                $updated_at->save();
            }

            unset($Model->Table);
            unset($Model->User);
        });

        self::updated(function($Model){
            // ... code here
            // dd("Tabela {$Model} atualizada");
        });
    }

    public function updateStructure ()
    {
        $Tables = Table::where('is_structural', true)
            ->get();

        if ($Tables->isNotEmpty()) {
            foreach ($Tables as $table) {
                $table->last_structure_change = date('Y-m-d H:i:s');
                $table->save();
            }
        }

        return count($Tables);
    }

    public function getNumericFields () {
        if (!!! isset($this->Fields)) return [];

        return [
            env('DB_TYPE_BIGINT'),
            env('DB_TYPE_FLOAT'),
            env('DB_TYPE_CURRENCY'),
            env('DB_TYPE_PERCENTAGE'),
            env('DB_TYPE_FOREIGN'),
            env('DB_TYPE_INT')
        ];
    }

    public function getTextFields () {
        $field_types = TableFieldType::where('is_string', true)
            ->get();

        $return = [];
        if ($field_types->isNotEmpty()) {
            foreach ($field_types as $field_type) {
                $return[] = $field_type->id;
            }
        }
        
        return $return;
    }

    public function getDateFields () {
        if (!!! isset($this->Fields)) return [];

        return [
            env('DB_TYPE_DATE'),
            env('DB_TYPE_TIMESTAMP'),
            env('DB_TYPE_DATETIME'),
            env('DB_TYPE_TIME')
        ];
    }

    public function getPasswordFields () {
        if (!!! isset($this->Fields)) return [];

        return [
            env('DB_TYPE_PASSWORD')
        ];
    }

    public function getFieldsNames () {
        $return = [];

        foreach ($this->Fields as $field) {
            $return[] = $field->name;
        }

        return $return;
    }

    public function check_index () {
        $this->Indexer = \App\Models\Admin\Indexer::Start($this->id);

        if (!!! $this->Indexer->isIndexed()) {
            $this->MakeIndex();
            // dd('Necessario indexar', $this);
        }

        return true;
    }
}
