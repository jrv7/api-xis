<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('field_bigint');
            $table->string('field_string', 255);
            $table->text('field_text')->nullable();
            $table->double('field_float')->nullable();
            $table->decimal('field_currency')->nullable();
            $table->char('field_character')->nullable();
            $table->double('field_percentage')->nullable();
            $table->boolean('field_boolean')->nullable();
            $table->text('field_preset')->nullable();
            $table->bigInteger('field_foreign')->nullable();
            $table->text('field_function')->nullable();
            $table->date('field_date')->nullable();
            $table->timestamp('field_timestamp')->nullable();
            $table->string('field_password', 255)->nullable();
            $table->string('field_str_fa_icon', 255)->nullable();
            $table->string('field_md5', 32)->nullable();
            $table->text('field_from_list')->nullable();
            $table->dateTime('field_datetime')->nullable();
            $table->integer('field_int')->nullable();
            $table->string('field_appendable')->nullable();
        });

        /**
         * 
            bigint	        bigInteger
            string	        string
            text	        text
            float	        double
            currency	    decimal
            character	    char
            percentage	    double
            boolean	        boolean
            preset	        enum
            foreign	        bigInteger
            function	    text
            date	        date
            timestamp	    timestamp
            password	    string
            str_fa_icon	    string
            md5	            string
            from_list	    enum
            datetime	    dateTime
            int	            integer
            time	        time
            appendable	    string
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests_table');
    }
}
