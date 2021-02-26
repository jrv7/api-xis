<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\{Table, TableField, UpdateHistoryChange};

class UpdateHistory extends Model
{
    protected $table = 'db_update_history';
    public $timestamps = false;

    public function InsertHistoryData($Model, Table $Table)
    {
        $original_data = $Model->getOriginal();
        $new_data = $Model->toArray();

        $_changes = [];

        foreach ($original_data as $_field => $_old_value) {
            if (isset($new_data[$_field])) {
                if (md5($new_data[$_field]) != md5($_old_value)) {
                    $_changes[] = [
                        'field' => $_field,
                        'old_valule' => $_old_value,
                        'new_value' => $new_data[$_field]
                    ];


                    $Field = TableField::where('table_id', $this->table_id)
                        ->where('name', $_field)
                        ->get();

                    if ($Field->isNotEmpty()) {
                        $Field = $Field->first();

                        $_field_hash_id = ($Field->dbid ? $Field->dbid : $Field->id);

                        UpdateHistoryChange::insert([
                            'update_history_id' => $this->id,
                            'table_field_hash_id' => $_field_hash_id,
                            'old_value' => (strlen($_old_value) ? $_old_value : null),
                            'new_value' => $new_data[$_field]
                        ]);

                        // $HistoryChange = new UpdateHistoryChange;
                        // $HistoryChange->update_history_id = $this->id;
                        // $HistoryChange->table_field_hash_id = $_field_hash_id;
                        // $HistoryChange->old_value = $_old_value;
                        // $HistoryChange->new_value = $new_data[$_field];

                        // $HistoryChange->save();
                    }
                }
            }
        }
    }
}