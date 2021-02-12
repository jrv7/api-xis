<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TableListAction extends Model
{
    protected $table = 'db_table_list_actions';
    public $timestamps = false;

    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'target_menu_id');
    }
}