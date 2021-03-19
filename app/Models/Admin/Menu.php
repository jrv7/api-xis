<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    public $timestamps = true;

    public function system()
    {
        return $this->belongsTo(System::class, 'system_id');
    }

    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

    public function fatherMenu()
    {
        return $this->belongsTo(Menu::class, 'father_menu_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'father_menu_id', 'id');
    }

    public function actions()
    {
        return $this->hasMany(MenuHasActionMenu::class);
    }

    public function isActionOf()
    {
        return $this->belongsToMany(Menu::class, 'menu_has_action_menus', 'target_menu_id', 'menu_id');
    }
}