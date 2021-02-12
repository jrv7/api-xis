<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    public $timestamps = true;

    public function fatherMenu()
    {
        return $this->belongsTo(Menu::class, 'father_menu_id', 'id');
    }
}