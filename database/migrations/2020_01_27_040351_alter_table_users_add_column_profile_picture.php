<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsersAddColumnProfilePicture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'users';
    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->text('profile_picture')->nullable();
        });

        return true;

        DB::table('db_table_field_types')->insert([
            'name' => 'image',
            'schema_table_type' => 'string',
            'is_image' => true,
        ]);

        $TableType = DB::table('db_table_field_types')->where('name', 'image')->get();

        if ($TableType) {
            $TableType = $TableType->first();

            $TableUsers = DB::table('db_tables')->where('name', 'users')->get();
    
            if ($TableUsers) {
                $TableUsers = $TableUsers->first();
    
                $insertFields = [
                    [
                        'table_id' => $TableUsers->id,
                        'type_id' => $TableType->id,
                        'name' => 'profile_picture',
                        'primary_key' => false,
                        'not_null' => false,
                        'unique' => false
                    ],
                ];
    
                foreach ($insertFields as $insertField) {
                    DB::table('db_table_fields')->insert($insertField);
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->dropColumn('profile_picture');
        });
    }
}
