<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDictionaryTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'dictionary_translations';

    public function up()
    {
        // Tabela dictionary_translations
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('dictionary_id')->references('id')->on('dictionary');
            $table->bigInteger('language_id')->references('id')->on('languages');
            $table->string('translation', 255);
            $table->primary(array('dictionary_id', 'language_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::connection('pgsql_admin')->dropIfExists(self::TABLENAME);
    }
}
