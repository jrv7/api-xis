<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminViewVwRemoteTableVisibleFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'languages';

    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW admin.vw_remote_table_visible_fields AS 
            SELECT 
                tf.id AS joint_remote_field_id,
                (tb.name::text || ' > '::text) || tf.name::text AS joint_remote_field_name
            FROM admin.db_table_fields tf
            JOIN admin.db_tables tb ON tb.id = tf.table_id
            ORDER BY tb.name, tf.name;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW admin.vw_remote_table_visible_fields");
    }
}
