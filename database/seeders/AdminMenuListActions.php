<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuListActions extends Seeder
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
            0 => array (
                'menu_id'           => 6,
                'target_menu_id'    => 41,
                'fa_icon'           => 'pencil-alt',
                'action_order'      => 1,
                'menu_crud_action'  => 'EDIT'
            ),
            1 => array (
                'menu_id'           => 9,
                'target_menu_id'    => 22,
                'fa_icon'           => 'eye',
                'action_order'      => 2,
                'menu_crud_action'  => 'VIEW'
            ),
            2 => array (
                'menu_id'           => 9,
                'target_menu_id'    => 507,
                'fa_icon'           => 'pen',
                'action_order'      => 3,
                'menu_crud_action'  => 'EDIT'
            ),
            3 => array (
                'menu_id'           => 12,
                'target_menu_id'    => 503,
                'fa_icon'           => 'eye',
                'action_order'      => 4,
                'menu_crud_action'  => 'VIEW'
            ),
            4 => array (
                'menu_id'           => 12,
                'target_menu_id'    => 506,
                'fa_icon'           => 'pen',
                'action_order'      => 5,
                'menu_crud_action'  => 'EDIT'
            ),
            5 => array (
                'menu_id'           => 13,
                'target_menu_id'    => 504,
                'fa_icon'           => 'eye',
                'action_order'      => 6,
                'menu_crud_action'  => 'VIEW'
            ),
            6 => array (
                'menu_id'           => 13,
                'target_menu_id'    => 505,
                'fa_icon'           => 'pen',
                'action_order'      => 7,
                'menu_crud_action'  => 'EDIT'
            ),
            7 => array (
                'menu_id'           => 26,
                'target_menu_id'    => 501,
                'fa_icon'           => 'eye',
                'action_order'      => 8,
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
