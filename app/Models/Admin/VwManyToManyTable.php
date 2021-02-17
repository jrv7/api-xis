<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\XisModel;
use Auth;

class VwManyToManyTable extends XisModel
{
    public $table = 'vw_many_to_many_tables';
    protected $primaryKey = 'm_field_id';
    public $timestamps = false;

    public function mTable () {
        return $this->hasOne(Table::class, 'id', 'm_table_id');
    }

    public function nTable () {
        return $this->hasOne(Table::class, 'id', 'n_table_id');
    }

    public function pivotTable () {
        return $this->hasOne(Table::class, 'id', 'pivot_table_id');
    }

    public function mField () {
        return $this->hasOne(TableField::class, 'id', 'm_field_id');
    }

    public function nField () {
        return $this->hasOne(TableField::class, 'id', 'n_field_id');
    }
}
