<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminViewVwFatherMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'languages';

    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW admin.vw_father_menus AS 
                SELECT 
                    menus_pai.id_menu AS id_father_menu,
                    menus_pai.menu_title AS father_menu,
                    menus_pai.nivel AS menu_level
                FROM (
                    SELECT 
                        n0.id AS id_menu,
                        n0.menu_title,
                        '0'::text AS nivel
                    FROM admin.menus n0
                    WHERE n0.father_menu_id IS NULL
                    UNION
                    SELECT 
                        n1.id AS id_menu,
                        (n0.menu_title::text || ' > '::text) || n1.menu_title::text AS menu_title,
                        '1'::text AS nivel
                    FROM admin.menus n1
                    JOIN admin.menus n0 ON n0.id = n1.father_menu_id
                    WHERE n0.father_menu_id IS NULL
                    UNION
                    SELECT 
                        n2.id AS id_menu,
                        (((n0.menu_title::text || ' > '::text) || n1.menu_title::text) || ' > '::text) || n2.menu_title::text AS menu_title,
                        '2'::text AS nivel
                    FROM admin.menus n2
                    JOIN admin.menus n1 ON n1.id = n2.father_menu_id
                    JOIN admin.menus n0 ON n0.id = n1.father_menu_id
                ) menus_pai
                ORDER BY menus_pai.menu_title;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW admin.vw_father_menus");
    }
}