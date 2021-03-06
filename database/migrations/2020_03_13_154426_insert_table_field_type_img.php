<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertTableFieldTypeImg extends Migration
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
                'name' => 'img',
                'schema_table_type' => 'string',
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
