<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class XisSeeder extends Seeder
{
    public static function getTableId($table_name, $database_id = 1)
    {
        $_table = \DB::table('db_tables')
            ->where('database_id', $database_id)
            ->where('name', $table_name)
            ->get();

        if ($_table->isNotEmpty()) {
            return $_table->first()->id;
        } else {
            return self::getTableId('home', 1);
        }
    }

    public static function getTableTypeId($table_type_name)
    {
        $_table_type = \DB::table('db_table_types')
            ->where('name', $table_type_name)
            ->get();

        if ($_table_type->isNotEmpty()) {
            return $_table_type->first()->id;
        } else {
            return self::getFieldTypeId('normal');
        }
    }

    public static function getTableFieldId($table_name, $field_name)
    {
        $_table_field = \DB::table('db_table_fields')
            ->selectRaw('db_table_fields.id')
            ->join('db_tables AS t', 't.id', '=', 'db_table_fields.table_id')
            ->where('t.name', $table_name)
            ->where('db_table_fields.name', $field_name)
            ->get();

        if ($_table_field->isNotEmpty()) {
            return $_table_field->first()->id;
        } else {
            return null;
        }
    }

    public static function getFieldTypeId($field_type_name)
    {
        $_field_type = \DB::table('db_table_field_types')
            ->where('name', $field_type_name)
            ->get();

        if ($_field_type->isNotEmpty()) {
            return $_field_type->first()->id;
        } else {
            return self::getFieldTypeId('bigint');
        }
    }

    public static function getUniqueDbHash($table, $prefix, $size = 32)
    {
        do {
            $newHash = substr(mb_strtoupper("{$prefix}" . md5(time() . microtime() . rand(0, 255))), 0, $size);
            $check_dbhash = \DB::table($table)
                ->where('dbhash', $newHash)
                ->first();
        } while ($check_dbhash);

        return $newHash;
    }

    public static function getMenuId($menuUrlHash)
    {
        $Menu = \DB::table('menus')
            ->where('menu_url_hash', $menuUrlHash)
            ->get();

        if ($Menu->isNotEmpty()) {
            return $Menu->first()->id;
        } else {
            return null;
        }
    }

    public static function getPermissionId($name)
    {
        $Data = \DB::table('permissions')
            ->where('name', $name)
            ->get();

        if ($Data->isNotEmpty()) {
            return $Data->first()->id;
        } else {
            return null;
        }
    }

    public static function getRoleId($name)
    {
        $Data = \DB::table('roles')
            ->where('name', $name)
            ->get();

        if ($Data->isNotEmpty()) {
            return $Data->first()->id;
        } else {
            return null;
        }
    }

    public static function getTableRelationTypeId($name)
    {
        $Data = \DB::table('db_table_relation_types')
            ->where('name', $name)
            ->get();

        if ($Data->isNotEmpty()) {
            return $Data->first()->id;
        } else {
            return null;
        }
    }

    public static function getSystemId($name)
    {
        $Data = \DB::table('systems')
            ->where('dbhash', $name)
            ->get();

        if ($Data->isNotEmpty()) {
            return $Data->first()->id;
        } else {
            return null;
        }
    }

    public static function getDatabaseId($name)
    {
        $Data = \DB::table('databases')
            ->where('name', $name)
            ->get();

        if ($Data->isNotEmpty()) {
            return $Data->first()->id;
        } else {
            return null;
        }
    }
}