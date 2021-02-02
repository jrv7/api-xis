<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertValuePictureCollectionInTableDbTableFieldTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_field_types';

    public function up()
    {
        DB::table(self::TABLENAME)->insert(
            array(
                'name' => 'pic_collection',
                'schema_table_type' => 'bigInteger',
                'is_searchable' => false
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Nothing
    }
}
