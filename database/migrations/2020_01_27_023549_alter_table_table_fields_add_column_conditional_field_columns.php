<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableTableFieldsAddColumnConditionalFieldColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_fields';
    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('conditional_field_id')->unsigned()->references('id')->on('db_table_fields')->nullable();
            $table->text('conditional_field_value')->nullable();
        });

        return true;
        
        $TableTableFields = DB::table('db_tables')
            ->where('name', 'db_table_fields')
            ->get();

        if ($TableTableFields) {
            $TableTableFields = $TableTableFields->first();

            $insertFields = [
                [
                    'table_id' => $TableTableFields->id,
                    'type_id' => 10,
                    'name' => 'conditional_field_id',
                    'primary_key' => false,
                    'not_null' => false,
                    'unique' => false
                ],
                [
                    'table_id' => $TableTableFields->id,
                    'type_id' => 3,
                    'name' => 'conditional_field_value',
                    'primary_key' => false,
                    'not_null' => false,
                    'unique' => false
                ]
            ];

            foreach ($insertFields as $insertField) {
                DB::table('db_table_fields')->insert($insertField);
            }

            // Inserir conexao de campo extrangeiro
            $localField = DB::table('db_table_fields')
                ->where('table_id', $TableTableFields->id)
                ->where('name', 'conditional_field_id')
                ->get();
            if ($localField) {
                $localField = $localField->first();
            }

            $RemoteTable = DB::table('db_tables')->where('name', 'vw_remote_table_fields')->get();
            if ($RemoteTable) {
                $RemoteTable = $RemoteTable->first();

                $remoteFieldId = DB::table('db_table_fields')
                    ->where('table_id', $RemoteTable->id)
                    ->where('name', 'joint_remote_field_id')
                    ->get();
                if ($remoteFieldId) {
                    $remoteFieldId = $remoteFieldId->first();
                }

                $remoteFieldName = DB::table('db_table_fields')
                    ->where('table_id', $RemoteTable->id)
                    ->where('name', 'joint_remote_field_name')
                    ->get();
                if ($remoteFieldName) {
                    $remoteFieldName = $remoteFieldName->first();
                }
            }

            if ($localField && $remoteFieldId && $remoteFieldName) {
                // Insere a relacao extrangeira
                DB::table('db_table_field_joins')->insert([
                    'relation_type_id' => 2,
                    'local_field_id' => $localField->id,
                    'remote_field_id' => $remoteFieldId->id,
                    'remote_visible_field_id' => $remoteFieldName->id,
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->dropColumn('conditional_field_id');
            $table->dropColumn('conditional_field_value');
        });
    }
}
