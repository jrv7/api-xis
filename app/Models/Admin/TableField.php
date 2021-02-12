<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TableField extends Model
{
    protected $table = 'db_table_fields';
    public $timestamps = true;
    
    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

    public function type()
    {
        return $this->belongsTo(TableFieldType::class, 'type_id');
    }

    public function joins()
    {
        return $this->hasMany(TableFieldJoin::class, 'local_field_id');
    }
}