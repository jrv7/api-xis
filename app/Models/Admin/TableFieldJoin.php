<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TableFieldJoin extends Model
{
    protected $table = 'db_table_field_joins';
    public $timestamps = false;
    
    public function type()
    {
        return $this->belongsTo(TableRelationType::class, 'relation_type_id');
    }

    public function leftField()
    {
        return $this->belongsTo(TableField::class, 'local_field_id', 'id');
    }

    public function rightField()
    {
        return $this->belongsTo(TableField::class, 'remote_field_id', 'id');
    }

    public function visibleField()
    {
        return $this->belongsTo(TableField::class, 'remote_visible_field_id', 'id');
    }
}