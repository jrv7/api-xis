<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    protected $table = 'roles';
    public $timestamps = false;

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'role_has_menus');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_has_roles', 'role_id');
    }
}