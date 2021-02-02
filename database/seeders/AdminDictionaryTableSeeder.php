<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDictionaryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'dictionary';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 2,
                'word' => 'LISTAR_TABELAS'
            ),
            1 => 
            array (
                'id' => 3,
                'word' => 'LISTAR_MENUS'
            ),
            2 => 
            array (
                'id' => 4,
                'word' => 'LISTAR_USUARIOS'
            ),
            3 => 
            array (
                'id' => 5,
                'word' => 'ADICIONAR_MENU'
            ),
            4 => 
            array (
                'id' => 6,
                'word' => 'MENUS_RELACIONADOS'
            ),
            5 => 
            array (
                'id' => 7,
                'word' => 'IMPORTADORES'
            ),
            6 => 
            array (
                'id' => 8,
                'word' => 'RELACIONAR_TABELAS'
            ),
            7 => 
            array (
                'id' => 9,
                'word' => 'ADICIONAR_TABELA'
            ),
            8 => 
            array (
                'id' => 10,
                'word' => 'ADICIONAR_PERFIL'
            ),
            9 => 
            array (
                'id' => 11,
                'word' => 'LISTAR_PERFIS'
            ),
            10 => 
            array (
                'id' => 12,
                'word' => 'LISTAR_CAMPOS_TABELA'
            ),
            11 => 
            array (
                'id' => 13,
                'word' => 'LIST_DICTIONARY_WORDS'
            ),
            12 => 
            array (
                'id' => 14,
                'word' => 'HOME'
            ),
            13 => 
            array (
                'id' => 19,
                'word' => 'LISTAR_ARTIGOS'
            ),
            14 => 
            array (
                'id' => 20,
                'word' => 'LISTAR_PRODUTOS'
            ),
            15 => 
            array (
                'id' => 21,
                'word' => 'LISTAR_MODELOS'
            ),
            16 => 
            array (
                'id' => 22,
                'word' => 'DB_TABLE_FIELD_JOINS_RELATION_TYPE_ID'
            ),
            17 => 
            array (
                'id' => 23,
                'word' => 'DB_TABLE_FIELD_JOINS_REMOTE_FIELD_ID'
            ),
            18 => 
            array (
                'id' => 24,
                'word' => 'DB_TABLE_FIELD_JOINS_LOCAL_FIELD_ID'
            ),
            19 => 
            array (
                'id' => 25,
                'word' => 'DB_TABLE_FIELD_JOINS_MODEL_FOREIGN_FUNCTION'
            ),
            20 => 
            array (
                'id' => 26,
                'word' => 'DB_TABLE_FIELD_JOINS_REMOTE_VISIBLE_FIELD_ID'
            ),
            21 => 
            array (
                'id' => 27,
                'word' => 'MENUS_RETURN_TO_MENU_ID'
            ),
            22 => 
            array (
                'id' => 1,
                'word' => 'DATABASE'
            ),
            23 => 
            array (
                'id' => 28,
                'word' => ''
            ),
            24 => 
            array (
                'id' => 29,
                'word' => 'USUARIO2'
            ),
            25 => 
            array (
                'id' => 30,
                'word' => 'USUARIO2@XIS-COMMERCE.COM'
            ),
            26 => 
            array (
                'id' => 31,
                'word' => 'VALDENIR JUNIOR'
            ),
            27 => 
            array (
                'id' => 32,
                'word' => 'VALDENIR.JUNIOR.V7@GMAIL.COM'
            ),
            28 => 
            array (
                'id' => 36,
                'word' => 'Usuario2'
            ),
            29 => 
            array (
                'id' => 37,
                'word' => 'usuario2@xis-commerce.com'
            ),
            30 => 
            array (
                'id' => 38,
                'word' => 'Valdenir Junior'
            ),
            31 => 
            array (
                'id' => 39,
                'word' => 'valdenir.junior.v7@gmail.com'
            ),
            32 => 
            array (
                'id' => 40,
                'word' => 'USERS_NAME'
            ),
            33 => 
            array (
                'id' => 41,
                'word' => 'USERS_EMAIL'
            ),
            34 => 
            array (
                'id' => 42,
                'word' => 'USERS_SUPERUSER'
            ),
            35 => 
            array (
                'id' => 43,
                'word' => 'users_name'
            ),
            36 => 
            array (
                'id' => 44,
                'word' => 'users_email'
            ),
            37 => 
            array (
                'id' => 45,
                'word' => 'users_superuser'
            ),
            38 => 
            array (
                'id' => 46,
                'word' => 'MENUS_MENU_TITLE'
            ),
            39 => 
            array (
                'id' => 47,
                'word' => 'Home'
            ),
            40 => 
            array (
                'id' => 48,
                'word' => 'MENUS_DB_TABLE_ID'
            ),
            41 => 
            array (
                'id' => 49,
                'word' => 'home'
            ),
            42 => 
            array (
                'id' => 50,
                'word' => 'MENUS_MENU_ID'
            ),
            43 => 
            array (
                'id' => 51,
                'word' => 'MENUS_OPT_SHOW_MENU'
            ),
            44 => 
            array (
                'id' => 52,
                'word' => 'MENUS_CLASS_FA_ICON'
            ),
            45 => 
            array (
                'id' => 53,
                'word' => 'MENUS_CUSTOM_CRUD_VIEW'
            ),
            46 => 
            array (
                'id' => 54,
                'word' => 'MENUS_CUSTOM_CONTROLLER'
            ),
            47 => 
            array (
                'id' => 55,
                'word' => 'ADMINISTRACAO > PERFIS'
            ),
            48 => 
            array (
                'id' => 56,
                'word' => 'db_tables'
            ),
            49 => 
            array (
                'id' => 57,
                'word' => 'ADMINISTRACAO > DATABASE'
            ),
            50 => 
            array (
                'id' => 58,
                'word' => 'db_table_fields'
            ),
            51 => 
            array (
                'id' => 59,
                'word' => 'ADMINISTRACAO'
            ),
            52 => 
            array (
                'id' => 60,
                'word' => 'VIEW_ROLE'
            ),
            53 => 
            array (
                'id' => 61,
                'word' => 'USUARIOS'
            ),
            54 => 
            array (
                'id' => 62,
                'word' => 'ADICIONAR_USUARIO'
            ),
            55 => 
            array (
                'id' => 63,
                'word' => 'ADMINISTRACAO > USUARIOS'
            ),
            56 => 
            array (
                'id' => 64,
                'word' => 'EDITAR_USUARIO'
            ),
            57 => 
            array (
                'id' => 65,
                'word' => 'users'
            ),
            58 => 
            array (
                'id' => 66,
                'word' => '_STATIC_LAYOUTS_DICTIONARY_TRANSLATE_'
            ),
            59 => 
            array (
                'id' => 67,
                'word' => 'dictionary_translations'
            ),
            60 => 
            array (
                'id' => 68,
                'word' => 'ADMINISTRACAO > DICTIONARY'
            ),
            61 => 
            array (
                'id' => 69,
                'word' => 'DICTIONARY_WORD'
            ),
            62 => 
            array (
                'id' => 70,
                'word' => 'DICTIONARY_CAMPO_INT'
            ),
            63 => 
            array (
                'id' => 71,
                'word' => 'DICTIONARY_CAMPO_BIGINT'
            ),
            64 => 
            array (
                'id' => 72,
                'word' => 'DICTIONARY_CAMPO_STRING_0'
            ),
            65 => 
            array (
                'id' => 73,
                'word' => 'DICTIONARY_CAMPO_STRING_1'
            ),
            66 => 
            array (
                'id' => 74,
                'word' => 'DICTIONARY_CAMPO_STRING_2'
            ),
            67 => 
            array (
                'id' => 75,
                'word' => 'DICTIONARY_CAMPO_BOOL'
            ),
            68 => 
            array (
                'id' => 76,
                'word' => 'DICTIONARY_BOOLEAN_3'
            ),
            69 => 
            array (
                'id' => 77,
                'word' => 'DICTIONARY_CAMPO_CHAR'
            ),
            70 => 
            array (
                'id' => 78,
                'word' => 'DICTIONARY_CAMPO_TXT'
            ),
            71 => 
            array (
                'id' => 79,
                'word' => 'DICTIONARY_CAMPO_DATE'
            ),
            72 => 
            array (
                'id' => 80,
                'word' => 'DICTIONARY_CAMPO_DATE_2'
            ),
            73 => 
            array (
                'id' => 81,
                'word' => 'DICTIONARY_CAMPO_DATA_4'
            ),
            74 => 
            array (
                'id' => 82,
                'word' => 'DB_TABLES_NAME'
            ),
            75 => 
            array (
                'id' => 83,
                'word' => 'db_table_types'
            ),
            76 => 
            array (
                'id' => 84,
                'word' => 'DB_TABLES_ID'
            ),
            77 => 
            array (
                'id' => 85,
                'word' => 'DB_TABLES_DATABASE_ID'
            ),
            78 => 
            array (
                'id' => 86,
                'word' => 'admin'
            ),
            79 => 
            array (
                'id' => 87,
                'word' => 'DB_TABLES_TABLE_TYPE_ID'
            ),
            80 => 
            array (
                'id' => 88,
                'word' => 'normal'
            ),
            81 => 
            array (
                'id' => 89,
                'word' => 'DB_TABLES_MODEL'
            ),
            82 => 
            array (
                'id' => 90,
                'word' => 'App\\Models\\Admin\\TableType'
            ),
            83 => 
            array (
                'id' => 91,
                'word' => 'DB_TABLES_TOTAL_ROWS'
            ),
            84 => 
            array (
                'id' => 92,
                'word' => 'DB_TABLES_INDEXABLE'
            ),
            85 => 
            array (
                'id' => 93,
                'word' => 'App\\Models\\Admin\\DictionaryTranslation'
            ),
            86 => 
            array (
                'id' => 94,
                'word' => 'db_table_relation_types'
            ),
            87 => 
            array (
                'id' => 95,
                'word' => 'App\\Models\\Admin\\TableRelationType'
            ),
            88 => 
            array (
                'id' => 96,
                'word' => 'languages'
            ),
            89 => 
            array (
                'id' => 97,
                'word' => 'App\\Models\\Admin\\Language'
            ),
            90 => 
            array (
                'id' => 98,
                'word' => 'modelos'
            ),
            91 => 
            array (
                'id' => 99,
                'word' => 'csm'
            ),
            92 => 
            array (
                'id' => 100,
                'word' => 'App\\Models\\CMS\\Modelo'
            ),
            93 => 
            array (
                'id' => 101,
                'word' => 'produtos'
            ),
            94 => 
            array (
                'id' => 102,
                'word' => 'App\\Models\\CMS\\Produto'
            ),
            95 => 
            array (
                'id' => 103,
                'word' => 'etapas_vida'
            ),
            96 => 
            array (
                'id' => 104,
                'word' => 'App\\Models\\CMS\\EtapaVida'
            ),
            97 => 
            array (
                'id' => 105,
                'word' => 'status'
            ),
            98 => 
            array (
                'id' => 106,
                'word' => 'App\\Models\\Admin\\Status'
            ),
            99 => 
            array (
                'id' => 107,
                'word' => 'db_related_tables'
            ),
            100 => 
            array (
                'id' => 108,
                'word' => 'App\\Models\\temp\\TABLE_37693cfc748049e45d87b8c7d8b9aacd'
            ),
            101 => 
            array (
                'id' => 109,
                'word' => 'importers'
            ),
            102 => 
            array (
                'id' => 110,
                'word' => 'App\\Models\\temp\\TABLE_9bf31c7ff062936a96d3c8bd1f8f2ff3'
            ),
            103 => 
            array (
                'id' => 111,
                'word' => 'db_update_history_ids'
            ),
            104 => 
            array (
                'id' => 112,
                'word' => 'App\\Models\\Admin\\UpdateHistoryId'
            ),
            105 => 
            array (
                'id' => 113,
                'word' => 'App\\Models\\temp\\TABLE_c74d97b01eae257e44aa9d5bade97baf'
            ),
            106 => 
            array (
                'id' => 114,
                'word' => 'migrations'
            ),
            107 => 
            array (
                'id' => 115,
                'word' => 'App\\Models\\temp\\TABLE_70efdf2ec9b086079795c442636b55fb'
            ),
            108 => 
            array (
                'id' => 116,
                'word' => 'db_update_history_changes'
            ),
            109 => 
            array (
                'id' => 117,
                'word' => 'App\\Models\\Admin\\UpdateHistoryChange'
            ),
            110 => 
            array (
                'id' => 118,
                'word' => 'permissions'
            ),
            111 => 
            array (
                'id' => 119,
                'word' => 'App\\Models\\temp\\TABLE_6f4922f45568161a8cdf4ad2299f6d23'
            ),
            112 => 
            array (
                'id' => 120,
                'word' => 'dictionary'
            ),
            113 => 
            array (
                'id' => 121,
                'word' => 'App\\Models\\Admin\\Dictionary'
            ),
            114 => 
            array (
                'id' => 122,
                'word' => 'databases'
            ),
            115 => 
            array (
                'id' => 123,
                'word' => 'App\\Models\\Admin\\Database'
            ),
            116 => 
            array (
                'id' => 124,
                'word' => 'db_table_field_types'
            ),
            117 => 
            array (
                'id' => 125,
                'word' => 'App\\Models\\Admin\\TableFieldType'
            ),
            118 => 
            array (
                'id' => 126,
                'word' => 'menus_related'
            ),
            119 => 
            array (
                'id' => 127,
                'word' => 'App\\Models\\Admin\\MenusRelated'
            ),
            120 => 
            array (
                'id' => 128,
                'word' => 'App\\Models\\Admin\\User'
            ),
            121 => 
            array (
                'id' => 129,
                'word' => 'TESTES_ID'
            ),
            122 => 
            array (
                'id' => 130,
                'word' => 'TESTES_CAMPO_INT'
            ),
            123 => 
            array (
                'id' => 131,
                'word' => 'TESTES_CAMPO_CHARACTER'
            ),
            124 => 
            array (
                'id' => 132,
                'word' => 'TESTES_CAMPO_TEXTO'
            ),
            125 => 
            array (
                'id' => 133,
                'word' => 'TESTES_CAMPO_SENHA'
            ),
            126 => 
            array (
                'id' => 134,
                'word' => 'TESTES_CAMPO_FA_ICON'
            ),
            127 => 
            array (
                'id' => 135,
                'word' => 'TESTES_CAMPO_MD5'
            ),
            128 => 
            array (
                'id' => 136,
                'word' => 'TESTES_CAMPO_DATA'
            ),
            129 => 
            array (
                'id' => 137,
                'word' => 'TESTES_CAMPO_DATETIME'
            ),
            130 => 
            array (
                'id' => 138,
                'word' => 'TESTES_CAMPO_TIME'
            ),
            131 => 
            array (
                'id' => 139,
                'word' => 'TESTES_CAMPO_TIMESTAMP'
            ),
            132 => 
            array (
                'id' => 140,
                'word' => 'TESTES_CAMPO_FUNCTION'
            ),
            133 => 
            array (
                'id' => 141,
                'word' => 'TESTES_CAMPO_EXTRANGEIRO'
            ),
            134 => 
            array (
                'id' => 142,
                'word' => 'TESTES_CAMPOS_LISTA'
            ),
            135 => 
            array (
                'id' => 143,
                'word' => 'TESTES_CAMPO_LISTA_PRESET'
            ),
            136 => 
            array (
                'id' => 144,
                'word' => 'TESTES_CAMPO_STRING'
            ),
            137 => 
            array (
                'id' => 145,
                'word' => 'TESTES_CAMPO_FLOAT'
            ),
            138 => 
            array (
                'id' => 146,
                'word' => 'TESTES_CAMPO_CURRENCY'
            ),
            139 => 
            array (
                'id' => 147,
                'word' => 'TESTES_CAMPO_PORCENTAGEM'
            ),
            140 => 
            array (
                'id' => 148,
                'word' => 'DATABASES_NAME'
            ),
            141 => 
            array (
                'id' => 149,
                'word' => 'DATABASES_DB_CONNECTION'
            ),
            142 => 
            array (
                'id' => 150,
                'word' => 'pgsql_admin'
            ),
            143 => 
            array (
                'id' => 151,
                'word' => 'pgsql_cms'
            ),
            144 => 
            array (
                'id' => 152,
                'word' => 'mtg'
            ),
            145 => 
            array (
                'id' => 153,
                'word' => 'pgsql_mtg'
            ),
            146 => 
            array (
                'id' => 154,
                'word' => 'pravaler'
            ),
            147 => 
            array (
                'id' => 155,
                'word' => 'pgsql_pravaler'
            ),
            148 => 
            array (
                'id' => 156,
                'word' => 'postgres'
            ),
            149 => 
            array (
                'id' => 157,
                'word' => 'pgsql_postgres'
            ),
            150 => 
            array (
                'id' => 158,
                'word' => 'ID'
            ),
            151 => 
            array (
                'id' => 159,
                'word' => 'NAME'
            ),
            152 => 
            array (
                'id' => 160,
                'word' => 'DB_CONNECTION'
            ),
            153 => 
            array (
                'id' => 161,
                'word' => 'TRANSLATION'
            ),
            154 => 
            array (
                'id' => 162,
                'word' => 'DICTIONARY_ID'
            ),
            155 => 
            array (
                'id' => 163,
                'word' => 'LANGUAGE_ID'
            ),
            156 => 
            array (
                'id' => 164,
                'word' => 'MENU_TITLE'
            ),
            157 => 
            array (
                'id' => 165,
                'word' => 'CUSTOM_FIRST_METHOD_GET'
            ),
            158 => 
            array (
                'id' => 166,
                'word' => 'MENU_URL_HASH'
            ),
            159 => 
            array (
                'id' => 167,
                'word' => 'DB_TABLE_ID'
            ),
            160 => 
            array (
                'id' => 168,
                'word' => 'MENU_ID'
            ),
            161 => 
            array (
                'id' => 169,
                'word' => 'ROUTE'
            ),
            162 => 
            array (
                'id' => 170,
                'word' => 'OPT_SHOW_MENU'
            ),
            163 => 
            array (
                'id' => 171,
                'word' => 'CLASS_FA_ICON'
            ),
            164 => 
            array (
                'id' => 172,
                'word' => 'RETURN_TO_MENU_ID'
            ),
            165 => 
            array (
                'id' => 173,
                'word' => 'CUSTOM_CRUD_VIEW'
            ),
            166 => 
            array (
                'id' => 174,
                'word' => 'CUSTOM_CONTROLLER'
            ),
            167 => 
            array (
                'id' => 175,
                'word' => 'SIM'
            ),
            168 => 
            array (
                'id' => 176,
                'word' => 'NAO'
            ),
            169 => 
            array (
                'id' => 177,
                'word' => 'DEFAULT_URL'
            ),
            170 => 
            array (
                'id' => 178,
                'word' => 'CRUD_INSERT'
            ),
            171 => 
            array (
                'id' => 179,
                'word' => 'CRUD_VIEW'
            ),
            172 => 
            array (
                'id' => 180,
                'word' => 'ID_USER'
            ),
            173 => 
            array (
                'id' => 181,
                'word' => 'EMAIL'
            ),
            174 => 
            array (
                'id' => 182,
                'word' => 'PASSWORD'
            ),
            175 => 
            array (
                'id' => 183,
                'word' => 'CREATED_AT'
            ),
            176 => 
            array (
                'id' => 184,
                'word' => 'SUPERUSER'
            ),
            177 => 
            array (
                'id' => 185,
                'word' => 'UPDATED_AT'
            ),
            178 => 
            array (
                'id' => 186,
                'word' => 'REMEMBER_TOKEN'
            ),
            179 => 
            array (
                'id' => 187,
                'word' => 'SYS_CAMPO_NAO_DEFINIDO'
            ),
            180 => 
            array (
                'id' => 188,
                'word' => 'DATABASE_ID'
            ),
            181 => 
            array (
                'id' => 189,
                'word' => 'TABLE_TYPE_ID'
            ),
            182 => 
            array (
                'id' => 190,
                'word' => 'MODEL'
            ),
            183 => 
            array (
                'id' => 191,
                'word' => 'DEFAULT_LIST_ACTION_FIELD_ID'
            ),
            184 => 
            array (
                'id' => 192,
                'word' => 'TOTAL_ROWS'
            ),
            185 => 
            array (
                'id' => 193,
                'word' => 'INDEXABLE'
            ),
            186 => 
            array (
                'id' => 194,
                'word' => 'TARGET_MENU_ID'
            ),
            187 => 
            array (
                'id' => 195,
                'word' => 'FA_ICON'
            ),
            188 => 
            array (
                'id' => 196,
                'word' => 'ACTION_ORDER'
            ),
            189 => 
            array (
                'id' => 197,
                'word' => 'MENU_CRUD_ACTION'
            ),
            190 => 
            array (
                'id' => 198,
                'word' => 'SELECIONE'
            ),
            191 => 
            array (
                'id' => 199,
                'word' => '_USER_EMAIL_PLACEHOLDER_'
            ),
            192 => 
            array (
                'id' => 200,
                'word' => '_USER_EMAIL_HELPTEXT_'
            ),
            193 => 
            array (
                'id' => 201,
                'word' => 'DB_TABLE_TRIGGERS_TABLE_TRIGGER_TYPE_ID'
            ),
            194 => 
            array (
                'id' => 202,
                'word' => 'DB_TABLE_TRIGGERS_DESCRIPTION'
            ),
            195 => 
            array (
                'id' => 203,
                'word' => 'NOTHING_FOUND'
            ),
        ));
        
        echo "Setando o proximo valor para a sequencia incremental como: ";
        $tudo = \DB::table($tableName)
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get(['id']);

        if ($tudo->isNotEmpty()) {
            $total_tabela = $tudo->first()->id;
        } else {
            $total_tabela = 0;
        }

        $total_tabela++;

        echo $total_tabela;

        \DB::statement("alter sequence admin.dictionary_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}