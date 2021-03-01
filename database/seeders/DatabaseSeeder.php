<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class DatabaseSeeder extends XisSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminViewVwOrganizedMenus::class);
        $this->call(AdminViewVwJoinedTables::class);
        $this->call(AdminUsersTableSeeder::class);
        $this->call(AdminStatusTableSeeder::class);
        $this->call(AdminSystemsTableSeeder::class);
        $this->call(AdminDatabasesTableSeeder::class);
        $this->call(AdminDbTableTypesTableSeeder::class);
        $this->call(AdminDbTablesTableSeeder::class);
        $this->call(AdminDbTableFieldTypesTableSeeder::class);
        $this->call(AdminDbTableFieldsTableSeeder::class);
        $this->call(AdminDbTableFieldJoinsTableSeeder::class);
        $this->call(AdminDbRelatedTablesTableSeeder::class);
        $this->call(AdminDbTableRelationTypesTableSeeder::class);
        $this->call(AdminDbTableUserConfigurationsTableSeeder::class);
        $this->call(AdminDictionaryTableSeeder::class);
        $this->call(AdminLanguagesTableSeeder::class);
        $this->call(AdminDictionaryTranslationsTableSeeder::class);
        $this->call(AdminHomeTableSeeder::class);
        $this->call(AdminImportersTableSeeder::class);
        $this->call(AdminMenusTableSeeder::class);
        // $this->call(AdminMenuListActionsTableSeeder::class);
        $this->call(AdminMenusRelatedTableSeeder::class);
        $this->call(AdminPasswordResetsTableSeeder::class);
        $this->call(AdminRolesTableSeeder::class);
        $this->call(AdminPermissionsTableSeeder::class);
        $this->call(AdminPermissionRoleTableSeeder::class);
        $this->call(AdminPermissionUserTableSeeder::class);
        $this->call(AdminRoleMenuTableSeeder::class);
        $this->call(AdminRoleMenuPermissionTableSeeder::class);
        $this->call(AdminStatusTypesTableSeeder::class);
        $this->call(AdminStatusHasTypesTableSeeder::class);
        $this->call(AdminDbTableTriggerTypesTableSeeder::class);
        // $this->call(AdminDbTableTriggersTableSeeder::class);
        $this->call(AdminRoleUserTableSeeder::class);
        $this->call(AdminLayouts::class);
        $this->call(AdminDbTableListActions::class);
        // $this->call(AdminDbTableViewRightBlock::class);
        // $this->call(AdminOauthClientsSeeder::class);
        // $this->call(AdminOauthAccessTokens::class);
        // $this->call(AdminOauthPersonalAccessTokens::class);
        // $this->call(AdminOauthRefreshTokens::class);
        $this->call(AdminGiveRolePermissionsToMenus::class);
        $this->call(AdminMenuListActions::class);
        $this->call(AdminDbTableFieldJoinsTableSeeder::class);
        $this->call(AdminMenuHasActionMenusTableSeeder::class);
        $this->call(AdminRolesHasPermissionsInTablesSeeder::class);
        $this->call(AdminUsersDefaultMenuTableSeeder::class);
        // Views 
        $this->call(AdminViewVwManyToManyTables::class);
    }
}
