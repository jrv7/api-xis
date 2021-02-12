<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class RelatedTable extends Model
{
    protected $table = 'db_related_tables';
    public $timestamps = false;

    public function leftTable()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

    public function rightTable()
    {
        return $this->belongsTo(Table::class, 'related_table_id');
    }

    public function jointField()
    {
        return $this->belongsTo(TableField::class, 'joint_field_id');
    }

    public function jointMenu()
    {
        return $this->belongsTo(Menu::class, 'joint_menu_id');
    }
}