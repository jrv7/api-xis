<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    public $timestamps = false;

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'role_has_menus');
    }
}