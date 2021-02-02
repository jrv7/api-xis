<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionResetDbTableModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE OR REPLACE FUNCTION admin.reset_db_table_models()
                            RETURNS boolean
                            LANGUAGE plpgsql
                        AS $function$
                            BEGIN
                                UPDATE admin.db_tables SET
                                    model = \'Nothing\'
                                WHERE model LIKE \'%TABLE_%\';
                                RETURN FOUND;
                            END;
                        $function$
                        ;
       ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP FUNCTION admin.reset_db_table_models();");
    }
}
