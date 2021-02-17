<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewManyToManyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW vw_many_to_many_tables AS 
        SELECT 
            mtf.id as m_field_id
            ,mtf.name as m_field_name
            ,mtfv.id as m_visible_field_id
            ,mtfv.name as m_visible_field_name
            ,mt.id AS m_table_id
            ,mt.name as m_table_name
            ,lt.id AS pivot_table_id
            ,lt.name AS pivot_table_name
            ,nt.name AS n_table_name
            ,nt.id AS n_table_id
            ,ntf.name as n_field_name
            ,ntf.id as n_field_id
            ,ntfv.id as n_visible_field_id
            ,ntfv.name as n_visible_field_name
        FROM db_tables mt
        INNER JOIN db_table_fields mtf ON mtf.table_id = mt.id
        INNER JOIN db_table_field_joins mtfj ON mtfj.remote_field_id = mtf.id
        INNER JOIN db_table_fields mtfv ON mtfv.id = mtfj.remote_visible_field_id
        INNER JOIN db_table_fields lmtf ON lmtf.id = mtfj.local_field_id
        INNER JOIN db_tables lt ON lt.id = lmtf.table_id
        INNER JOIN db_table_fields lntf ON lntf.table_id = lt.id
        INNER JOIN db_table_field_joins ntfj ON ntfj.local_field_id = lntf.id
        INNER JOIN db_table_fields ntf ON ntf.id = ntfj.remote_field_id
        INNER JOIN db_table_fields ntfv ON ntfv.id = ntfj.remote_visible_field_id
        INNER JOIN db_tables nt ON (
            nt.id = ntf.table_id
            AND nt.id <> mt.id
        )
        WHERE lt.table_type_id = 4"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vw_many_to_many_tables');
    }
}
