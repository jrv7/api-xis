<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminMenuListActionsTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'menu_list_actions';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'menu_id' => self::getMenuId('71deca3bdc0f642e4ce1fa892929da7a'), // 33,
                'target_menu_id' => self::getMenuId('997423f712aa8fd8e10f38a9afbb3c48'), // 40,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'menu_id' => self::getMenuId('08bc460efd6d7b6b5501bf115c8c7ebe'), // 46,
                'target_menu_id' => self::getMenuId('ea134e4b4256fc2f0f88109021c9b07f'), // 45,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'menu_id' => self::getMenuId('b832bac46147eab1b8dde6852058f864'), // 37,
                'target_menu_id' => self::getMenuId('0d305d3368202beb084b757d11394e31'), // 48,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'menu_id' => self::getMenuId('24c007b328f19943bc53bf4715f9fe6b'), // 26,
                'target_menu_id' => self::getMenuId('c6177de3c5d54b9edc1e2e04fcfe43d5'), // 50,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'menu_id' => self::getMenuId('072d411b7681fc2091418482db2735ad'), // 51,
                'target_menu_id' => self::getMenuId('8f05329a3c2a90e9f2b6fa3f5e822273'), // 52,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'menu_id' => self::getMenuId('bf4fc0f7f9966228b29a2b6e1813f0b7'), // 6,
                'target_menu_id' => self::getMenuId('7475ae2fd02e1086cea4973630445a45'), // 41,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'menu_id' => self::getMenuId('2fdce19f21d3424597bbfc92a269bce3'), // 59,
                'target_menu_id' => self::getMenuId('e3d32941c8f66324f6f067f3718cfda8'), // 60,
                'fa_icon' => NULL,
                'action_order' => '0',
                'menu_crud_action' => 'view',
            ),
            array (
                'menu_id' => self::getMenuId('72225452abd48f8a7326234a890269f3'), // 42,
                'target_menu_id' => self::getMenuId('74a3c738207d3e025d296250ca5722e9'), // 65,
                'fa_icon' => 'edit',
                'action_order' => NULL,
                'menu_crud_action' => 'view',
            ),
            array (
                'menu_id' => self::getMenuId('1ad3958aac02f64f1e565851944c7def'), // 42,
                'target_menu_id' => self::getMenuId('e542fbfb68f5da1243c71110921bf20b'), // 65,
                'fa_icon' => 'pen',
                'action_order' => NULL,
                'menu_crud_action' => 'view',
            ),
        ));
        
        
    }
}