<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\{Table};

class UpdateHistory extends Model
{
    protected $table = 'db_update_history';
    public $timestamps = false;

    public function InsertHistoryData($Model, Table $Table)
    {
        $original_data = $Model->getOriginal();
        dd($original_data);
    }
}