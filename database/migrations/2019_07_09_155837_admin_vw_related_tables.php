<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminVwRelatedTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'languages';

    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW admin.vw_related_tables AS
                SELECT DISTINCT ON (tr.id, t.id) tr.id AS right_table_id,
                    trt.name AS join_type,
                    tr.name AS right_table_name,
                    tfr.id AS right_table_field_id,
                    tfr.name AS right_table_field_name,
                    t.id AS left_table_id,
                    t.name AS left_table_name,
                    tf.id AS left_table_field_id,
                    tf.name AS left_table_field_name
                FROM db_tables t
                    JOIN db_table_fields tf ON tf.table_id = t.id
                    JOIN (
                        db_table_field_joins tfj
                        INNER JOIN db_table_relation_types trt ON trt.id = tfj.relation_type_id
                    ) ON tfj.local_field_id = tf.id
                    JOIN db_table_fields tfr ON tfr.id = tfj.remote_field_id
                    JOIN db_tables tr ON tr.id = tfr.table_id
                ORDER BY tr.id, t.id;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW admin.vw_related_tables");
    }
}
