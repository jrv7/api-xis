<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuHasActionMenu extends Model
{
    protected $table = 'menu_has_action_menus';
    public $timestamps = false;
    
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id', 'menu_id');
    }
    
    public function targetMenu()
    {
        return $this->belongsTo(Menu::class, 'target_menu_id', 'id');
    }
}