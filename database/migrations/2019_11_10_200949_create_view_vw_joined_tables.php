<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewVwJoinedTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'languages';

    public function up()
    {
        // DB::statement("CREATE OR REPLACE VIEW admin.vw_joined_tables AS
        //                 SELECT tl.id AS left_table_id,
        //                     tl.name AS left_table_name,
        //                     tlf.id AS left_table_field_id,
        //                     tlf.name AS left_table_field_name,
        //                     tlfj.relation_type_id,
        //                     trt.name AS relation_type,
        //                     tr.id AS right_table_id,
        //                     tr.name AS right_table_name,
        //                     trf.id AS right_table_field_id,
        //                     trf.name AS right_table_field_name,
        //                     trfv.id AS right_table_visible_field_id,
        //                     trfv.name AS right_table_visible_field_name,
	    //                     tlfj.model_foreign_function AS right_table_object
        //                 FROM db_tables tl
        //                     JOIN db_table_fields tlf ON tlf.table_id = tl.id
        //                     JOIN (db_table_field_joins tlfj
        //                     JOIN db_table_relation_types trt ON trt.id = tlfj.relation_type_id) ON tlfj.local_field_id = tlf.id
        //                     JOIN db_table_fields trf ON trf.id = tlfj.remote_field_id
        //                     JOIN db_tables tr ON tr.id = trf.table_id
        //                     INNER JOIN db_table_fields trfv ON trfv.id = tlfj.remote_visible_field_id;"
        // );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	// DB::statement('DROP VIEW admin.vw_joined_tables');
    }
}
