<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminMenuListActions extends XisSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'menu_list_actions';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'menu_id'           => self::getMenuId('bf4fc0f7f9966228b29a2b6e1813f0b7'), // 6,
                'target_menu_id'    => self::getMenuId('7475ae2fd02e1086cea4973630445a45'), // 41,
                'fa_icon'           => 'eye',
                'action_order'      => 1,
                'menu_crud_action'  => 'VIEW'
            ),
        ));

        // menu_id|target_menu_id|fa_icon   |action_order|menu_crud_action|status
        // -------|--------------|----------|------------|----------------|------
        //       6|            41|pencil-alt|1           |EDIT            |ok
        //       9|            22|eye       |1           |VIEW            |ok
        //       9|           507|pen       |1           |EDIT            |ok
        //      12|           503|eye       |1           |VIEW            |ok
        //      12|           506|pen       |1           |EDIT            |ok
        //      13|           504|eye       |1           |VIEW            |ok
        //      13|           505|pen       |1           |EDIT            |ok
        //      26|           501|eye       |1           |EDIT            |ok
    }
}
