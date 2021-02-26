<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\{Table, UpdateHistory};

class UpdateHistoryChange extends Model
{
    protected $table = 'db_update_history_changes';
    protected $primaryKey = ['update_history_id', 'table_field_hash_id'];
    public $timestamps = false;
}