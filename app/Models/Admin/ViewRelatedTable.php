<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\XisModel;
use Auth;

class ViewRelatedTable extends XisModel
{
    public $table = 'vw_related_tables';
    protected $primaryKey = 'right_table_id';
    public $timestamps = false;

    protected $fillable = [
        'right_table_name',
        'right_table_field_id',
        'right_table_field_name',
        'left_table_id',
        'left_table_name',
        'left_table_field_id',
        'left_table_field_name',
    ];

    public function _RightTable () {
        return $this->hasOne(Table::class, 'id', 'right_table_id');
    }

    public function _LeftTable () {
        return $this->hasOne(Table::class, 'id', 'left_table_id');
    }
}
