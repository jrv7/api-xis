<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertTableFieldUsersPicture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_fields';

    public function up()
    {
        $table = DB::table('db_tables')->where('name', 'users')->get();

        if ($table->isNotEmpty()) {
            $table = $table->first();

            $table_field_type = DB::table('db_table_field_types')->where('name', 'img')->get();
            if ($table_field_type->isNotEmpty()) {
                $table_field_type = $table_field_type->first();

                echo PHP_EOL . "Inserindo campo... ";
                DB::table(self::TABLENAME)->insert(
                    array(
                        'table_id' => $table->id,
                        'type_id' => $table_field_type->id,
                        'name' => 'profile_picture',
                        'placeholder' => '_USER_PROFILE_PICTURE_PLACEHOLDER_',
                        'help_text' => '_USER_PROFILE_PICTURE_HELPTEXT_',
                        'primary_key' => false,
                        'not_null' => false,
                        'unique' => false
                    )
                );
                echo "Ok";


                // App\Models\Admin\DbTable::find($table->id)
                //     ->update(['model' => 'Nothing']);
            } else echo PHP_EOL . "Table field type not found";
        } else echo PHP_EOL . "Users table not found";

        echo PHP_EOL;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
