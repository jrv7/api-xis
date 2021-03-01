<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class RoleHasPermissionInTable extends Model
{
    protected $table = 'role_has_permissions_in_tables';
    public $timestamps = false;
    
    /**
     * Function role
     * > OneToOne Related Model
     * Left Table: role_has_permissions_in_tables
     * Left Field: role_id
     *
     * Right Table: roles
     * Right Field: id
     * Visible Field: display_name
     */
    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    /**
     * Function permission
     * > OneToOne Related Model
     * Left Table: role_has_permissions_in_tables
     * Left Field: permission_id
     *
     * Right Table: permissions
     * Right Field: id
     * Visible Field: display_name
     */
    public function permission()
    {
        return $this->hasOne(Permission::class, 'id', 'permission_id');
    }

    /**
     * Function table
     * > OneToOne Related Model
     * Left Table: role_has_permissions_in_tables
     * Left Field: table_id
     *
     * Right Table: db_tables
     * Right Field: id
     * Visible Field: name
     */
    public function table()
    {
        return $this->hasOne(Table::class, 'id', 'table_id');
    }
}