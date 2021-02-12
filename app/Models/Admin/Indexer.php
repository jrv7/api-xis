<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\XisModel;
use Auth;

class Indexer extends Model
{
	protected $connection = 'pgsql_admin';
    public $table = 'db_indexer';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
		'table_id',
		'indexed_at',
    ];

    public function _Table () {
    	return $this->hasOne(Table::class, 'id', 'table_id');
    }

    public function _GuidelineIds () {
    	if (!!! $this->table_id)
    		return 0;

    	return $this->hasMany(IndexerGuidelineId::class, 'indexer_id', 'id');
    }

    public function _Guidelines () {
    	if (!!! $this->table_id)
    		return 0;

    	return $this->hasMany(IndexerGuideline::class, 'indexer_id', 'id');
    }

    public function _Lines () {
    	if (!!! $this->table_id)
    		return 0;

    	return $this->hasMany(IndexerLine::class, 'indexer_id', 'id');
    }

    public function NextGuideLine () {
    	return $this->_Guidelines()->count() + 1;
    }

    public static function Start ($table_id) {

        $return = self::where('table_id', $table_id)->get();

        if ($return->isNotEmpty()) {
            $return = $return->first();
        } else {
            $return = new Indexer;
            $return->table_id = $table_id;
            $return->save();
        }

        return $return;
    }

    public function isIndexed () {
    	if (strtotime($this->_Table()->get()->first()->updated_at) > strtotime($this->indexed_at)) {
    		// dd("Tabela atualizada apos a ultima indexacao");
    		return false;
    	} if ($this->_Table()->get()->first()->getTotalRows() > $this->_Guidelines()->count()) {
    		return false;
    		// dd("Numero de linhas divergente");
    	}

    	// dd("Verificando a necessidade de indexar", $this->_Table()->get()->first());
    	return true;
    }

    public function MakeIndex () {
    	if (!!! @isset($this->Indexer)) dd("Indexer not defined for Table '{$this->name}'");
        if (!!! isset($this->Fields)) dd("\n- Campos nao definidos para o Modelo");


		$Table = new $this->model;
    	$indexable_data = $Table->all();
    	// Apagando todos os indexes dessa tabela
    	// Essa funcao pode ser muito demorada
    	// Deve ser usada apenas para tabelas pequenas
    	//
    	// Deve ser desenvolvida uma forma de indexar apenas linhas especificas
    	// da tabela (apenas linhas com dados alterados desde a ultima indexacao talvez ?!?)
		$this->Indexer->_Guidelines()->delete();

    	foreach ($indexable_data as $line) {
    		// Insere a Guideline
    		unset($Guideline);
    		$Guideline = new \App\Models\Admin\IndexerGuideline;
    		$Guideline->indexer_id = $this->Indexer->id;
    		$Guideline->id = $this->Indexer->NextGuideLine();

    		$Guideline->save();

    		$IndexedData = [];

            // dd($this->Fields);

            if (isset($this->Fields)) if (count($this->Fields)) foreach ($this->Fields as $field) {
                if ($field->primary_key) {
                    if (!!! $line->{$field->name}) continue;
	    			// Insere as chaves da linha indexada
		    		unset($GuidelineID);
		    		$GuidelineID = new \App\Models\Admin\IndexerGuidelineId;
		    		$GuidelineID->indexer_id = $this->Indexer->id;
		    		$GuidelineID->indexer_guideline_id = $Guideline->id;
		    		$GuidelineID->table_field_id = $field->id;
		    		$GuidelineID->id_value = $line->{$field->name};

		    		$GuidelineID->save();
    			}

    			$IndexedData[] = @trim( @strtolower($line->{$field->name}) );
    			// echo "<br>Indexando a informacao: {$field->name} = '{$line->{$field->name}}'";
    		}

    		unset($IndexLine);
    		$IndexLine = new \App\Models\Admin\IndexerLine;
    		$IndexLine->indexer_id = $this->Indexer->id;
    		$IndexLine->guideline_id = $Guideline->id;
    		$IndexLine->index_data = "|@|" . implode("|@|", $IndexedData) . "|@|";

    		$IndexLine->save();
    	}

    	$this->Indexer->indexed_at = $this->Indexer->_Table()->get()->first()->updated_at ? $this->Indexer->_Table()->get()->first()->updated_at : date('Y-m-d H:i:s');
    	$this->Indexer->save();

    	return true;
    	// dd('Creating guidelines', $indexable_data);
    }
}
