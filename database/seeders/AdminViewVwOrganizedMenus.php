<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminViewVwOrganizedMenus extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::statement("CREATE OR REPLACE VIEW vw_organized_menus AS 
            SELECT
                gm.id AS grandfather_menu_id, 
                gm.menu_title AS grandfather_menu_title, 
                fm.id AS father_menu_id, 
                fm.menu_title AS father_menu_title, 
                m.id, 
                m.menu_title 
            FROM menus m 
            LEFT JOIN menus fm ON fm.id = m.father_menu_id 
            LEFT JOIN menus gm ON gm.id = fm.father_menu_id;"
        );
    }
}