<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ViewJoinedTable extends Model
{
    // use \App\Traits\HasCompositePrimaryKey;

	protected $connection = 'pgsql_admin';
    public $table = 'vw_joined_tables';
    // protected $primaryKey = ['left_table_id', 'right_table_id'];
    public $timestamps = false;

    protected $fillable = [
        'left_table_id',
        'left_table_name',
        'left_table_field_id',
        'left_table_field_name',
        'relation_type_id',
        'relation_type',
        'right_table_id',
        'right_table_name',
        'right_table_field_id',
        'right_table_field_name',
        'right_table_visible_field_id',
        'right_table_visible_field_name',
    ];

    public function _LeftTable () {
        return $this->hasOne(Table::class, 'id', 'left_table_id');
    }

    public function _RightTable () {
        return $this->hasOne(Table::class, 'id', 'right_table_id');
    }
}
