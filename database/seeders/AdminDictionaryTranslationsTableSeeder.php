<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDictionaryTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'dictionary_translations';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'dictionary_id' => 1,
                'language_id' => 1,
                'translation' => 'Base de dados',
            ),
            1 => 
            array (
                'dictionary_id' => 2,
                'language_id' => 1,
                'translation' => 'Lista de tabelas',
            ),
            2 => 
            array (
                'dictionary_id' => 3,
                'language_id' => 1,
                'translation' => 'Listar Menus',
            ),
            3 => 
            array (
                'dictionary_id' => 4,
                'language_id' => 1,
                'translation' => 'Listar usu&aacute;rios',
            ),
            4 => 
            array (
                'dictionary_id' => 22,
                'language_id' => 1,
                'translation' => 'Tipo JOIN',
            ),
            5 => 
            array (
                'dictionary_id' => 23,
                'language_id' => 1,
            'translation' => 'Campo externo (ID)',
            ),
            6 => 
            array (
                'dictionary_id' => 24,
                'language_id' => 1,
                'translation' => 'Campo local',
            ),
            7 => 
            array (
                'dictionary_id' => 25,
                'language_id' => 1,
                'translation' => 'Fun&ccedil;&atilde;o de busca',
            ),
            8 => 
            array (
                'dictionary_id' => 26,
                'language_id' => 1,
                'translation' => 'Campo vis&iacute;vel',
            ),
            9 => 
            array (
                'dictionary_id' => 27,
                'language_id' => 1,
                'translation' => 'Back to',
            ),
            10 => 
            array (
                'dictionary_id' => 40,
                'language_id' => 1,
                'translation' => 'Nome de usu&aacute;rio',
            ),
            11 => 
            array (
                'dictionary_id' => 80,
                'language_id' => 1,
                'translation' => 'Campo DATA 2',
            ),
            12 => 
            array (
                'dictionary_id' => 73,
                'language_id' => 1,
                'translation' => 'Campo tipo STR',
            ),
            13 => 
            array (
                'dictionary_id' => 69,
                'language_id' => 1,
                'translation' => 'Palavra',
            ),
            14 => 
            array (
                'dictionary_id' => 71,
                'language_id' => 1,
            'translation' => 'Campo BIGINT (chave)',
            ),
            15 => 
            array (
                'dictionary_id' => 70,
                'language_id' => 1,
                'translation' => 'Campo INT',
            ),
            16 => 
            array (
                'dictionary_id' => 72,
                'language_id' => 1,
                'translation' => 'Campo STR',
            ),
            17 => 
            array (
                'dictionary_id' => 74,
                'language_id' => 1,
                'translation' => 'Campo STR',
            ),
            18 => 
            array (
                'dictionary_id' => 46,
                'language_id' => 1,
                'translation' => 'T&iacute;tulo',
            ),
            19 => 
            array (
                'dictionary_id' => 48,
                'language_id' => 1,
                'translation' => 'Tabela da base de dados',
            ),
            20 => 
            array (
                'dictionary_id' => 50,
                'language_id' => 1,
                'translation' => 'Menu pai',
            ),
            21 => 
            array (
                'dictionary_id' => 51,
                'language_id' => 1,
                'translation' => 'Exibir no menu?',
            ),
            22 => 
            array (
                'dictionary_id' => 52,
                'language_id' => 1,
            'translation' => '&Iacute;cone (Font-Awesome)',
            ),
            23 => 
            array (
                'dictionary_id' => 53,
                'language_id' => 1,
            'translation' => 'Tela customizada (VIEW)',
            ),
            24 => 
            array (
                'dictionary_id' => 54,
                'language_id' => 1,
                'translation' => 'Controlador customizado',
            ),
            25 => 
            array (
                'dictionary_id' => 82,
                'language_id' => 1,
                'translation' => 'Nome',
            ),
            26 => 
            array (
                'dictionary_id' => 84,
                'language_id' => 1,
                'translation' => 'ID',
            ),
            27 => 
            array (
                'dictionary_id' => 85,
                'language_id' => 1,
                'translation' => 'Base de dados',
            ),
            28 => 
            array (
                'dictionary_id' => 87,
                'language_id' => 1,
                'translation' => 'Tipo de tabela',
            ),
            29 => 
            array (
                'dictionary_id' => 89,
                'language_id' => 1,
                'translation' => 'Modelo',
            ),
            30 => 
            array (
                'dictionary_id' => 91,
                'language_id' => 1,
                'translation' => 'Total de linhas',
            ),
            31 => 
            array (
                'dictionary_id' => 92,
                'language_id' => 1,
            'translation' => 'Index&aacute;vel? (elasticsearch)',
            ),
            32 => 
            array (
                'dictionary_id' => 41,
                'language_id' => 1,
                'translation' => 'e-Mail',
            ),
            33 => 
            array (
                'dictionary_id' => 42,
                'language_id' => 1,
                'translation' => 'Permiss&otilde;es de super-usu&aacute;rio?',
            ),
            34 => 
            array (
                'dictionary_id' => 148,
                'language_id' => 1,
                'translation' => 'Nome',
            ),
            35 => 
            array (
                'dictionary_id' => 149,
                'language_id' => 1,
                'translation' => 'Conector',
            ),
            36 => 
            array (
                'dictionary_id' => 158,
                'language_id' => 1,
                'translation' => 'ID',
            ),
            37 => 
            array (
                'dictionary_id' => 159,
                'language_id' => 1,
                'translation' => 'Nome',
            ),
            38 => 
            array (
                'dictionary_id' => 160,
                'language_id' => 1,
                'translation' => 'Conector',
            ),
            39 => 
            array (
                'dictionary_id' => 164,
                'language_id' => 1,
                'translation' => 'T&iacute;tulo',
            ),
            40 => 
            array (
                'dictionary_id' => 165,
                'language_id' => 1,
                'translation' => 'M&eacute;todo GET customizado',
            ),
            41 => 
            array (
                'dictionary_id' => 166,
                'language_id' => 1,
                'translation' => 'Hash de seguran&ccedil;a',
            ),
            42 => 
            array (
                'dictionary_id' => 167,
                'language_id' => 1,
                'translation' => 'Tabela da base de dados',
            ),
            43 => 
            array (
                'dictionary_id' => 168,
                'language_id' => 1,
                'translation' => 'Menu pai',
            ),
            44 => 
            array (
                'dictionary_id' => 169,
                'language_id' => 1,
                'translation' => 'ipo de p&aacute;gina',
            ),
            45 => 
            array (
                'dictionary_id' => 170,
                'language_id' => 1,
                'translation' => 'Exibir no menu?',
            ),
            46 => 
            array (
                'dictionary_id' => 171,
                'language_id' => 1,
            'translation' => '&Iacute;cone (Font-Awesome)',
            ),
            47 => 
            array (
                'dictionary_id' => 172,
                'language_id' => 1,
            'translation' => 'P&aacute;gina de retorno (ap&oacute;s a&ccedil;&atilde;o)',
            ),
            48 => 
            array (
                'dictionary_id' => 173,
                'language_id' => 1,
                'translation' => 'P&aacute;gina CRUD customizada',
            ),
            49 => 
            array (
                'dictionary_id' => 174,
                'language_id' => 1,
                'translation' => 'Controlador customizado',
            ),
            50 => 
            array (
                'dictionary_id' => 175,
                'language_id' => 1,
                'translation' => 'Sim',
            ),
            51 => 
            array (
                'dictionary_id' => 176,
                'language_id' => 1,
                'translation' => 'N&atilde;o',
            ),
            52 => 
            array (
                'dictionary_id' => 177,
                'language_id' => 1,
                'translation' => 'P&acute;gina de listagem',
            ),
            53 => 
            array (
                'dictionary_id' => 178,
                'language_id' => 1,
                'translation' => 'P&aacute;gina de cria&ccedil;&atilde;o',
            ),
            54 => 
            array (
                'dictionary_id' => 179,
                'language_id' => 1,
                'translation' => 'P&aacute;gina de visualiza&ccedil;&atilde;o',
            ),
            55 => 
            array (
                'dictionary_id' => 180,
                'language_id' => 1,
                'translation' => 'ID',
            ),
            56 => 
            array (
                'dictionary_id' => 181,
                'language_id' => 1,
                'translation' => 'e-Mail',
            ),
            57 => 
            array (
                'dictionary_id' => 182,
                'language_id' => 1,
                'translation' => 'Senha',
            ),
            58 => 
            array (
                'dictionary_id' => 183,
                'language_id' => 1,
                'translation' => 'Data de cria&ccedil;&atilde;o',
            ),
            59 => 
            array (
                'dictionary_id' => 184,
                'language_id' => 1,
                'translation' => 'Permiss&otilde;es de super-usu&aacute;rio?',
            ),
            60 => 
            array (
                'dictionary_id' => 185,
                'language_id' => 1,
                'translation' => 'Data de edi&ccedil;&atilde;o',
            ),
            61 => 
            array (
                'dictionary_id' => 186,
                'language_id' => 1,
                'translation' => 'Chave para a fun&ccedil;&atilde;o de "Lembrar senha" no login',
            ),
            62 => 
            array (
                'dictionary_id' => 187,
                'language_id' => 1,
                'translation' => 'Definir tipo de campo em Layouts.php',
            ),
            63 => 
            array (
                'dictionary_id' => 188,
                'language_id' => 1,
                'translation' => 'Base de dados',
            ),
            64 => 
            array (
                'dictionary_id' => 189,
                'language_id' => 1,
                'translation' => 'Tipo de tabela',
            ),
            65 => 
            array (
                'dictionary_id' => 190,
                'language_id' => 1,
                'translation' => 'Modelo',
            ),
            66 => 
            array (
                'dictionary_id' => 191,
                'language_id' => 1,
                'translation' => 'Campo padr&atilde;o para a listagem',
            ),
            67 => 
            array (
                'dictionary_id' => 192,
                'language_id' => 1,
                'translation' => 'Total de linhas',
            ),
            68 => 
            array (
                'dictionary_id' => 193,
                'language_id' => 1,
            'translation' => 'Index&aacute;vel? (elasticsearch)',
            ),
            69 => 
            array (
                'dictionary_id' => 198,
                'language_id' => 1,
                'translation' => 'Selecione',
            ),
            70 => 
            array (
                'dictionary_id' => 195,
                'language_id' => 1,
            'translation' => 'Icon (font-awesome)',
            ),
            71 => 
            array (
                'dictionary_id' => 46,
                'language_id' => 2,
                'translation' => 'Title',
            ),
            72 => 
            array (
                'dictionary_id' => 40,
                'language_id' => 2,
                'translation' => 'Username',
            ),
            73 => 
            array (
                'dictionary_id' => 41,
                'language_id' => 2,
                'translation' => 'Email',
            ),
            74 => 
            array (
                'dictionary_id' => 42,
                'language_id' => 2,
                'translation' => 'Superuser permissions?',
            ),
            75 => 
            array (
                'dictionary_id' => 41,
                'language_id' => 4,
                'translation' => 'Email',
            ),
            76 => 
            array (
                'dictionary_id' => 42,
                'language_id' => 4,
                'translation' => 'Permition de super-user',
            ),
            77 => 
            array (
                'dictionary_id' => 40,
                'language_id' => 4,
                'translation' => 'Compte',
            ),
            78 => 
            array (
                'dictionary_id' => 46,
                'language_id' => 4,
                'translation' => 'Title',
            ),
            79 => 
            array (
                'dictionary_id' => 48,
                'language_id' => 4,
                'translation' => 'DB Table',
            ),
            80 => 
            array (
                'dictionary_id' => 51,
                'language_id' => 4,
                'translation' => 'Montre dans le menu des options',
            ),
            81 => 
            array (
                'dictionary_id' => 27,
                'language_id' => 4,
                'translation' => 'Page à y\'returner',
            ),
            82 => 
            array (
                'dictionary_id' => 54,
                'language_id' => 4,
                'translation' => 'Controlateur',
            ),
            83 => 
            array (
                'dictionary_id' => 199,
                'language_id' => 1,
                'translation' => 'usuario@email.com.br',
            ),
            84 => 
            array (
                'dictionary_id' => 199,
                'language_id' => 2,
                'translation' => 'user@example.com',
            ),
            85 => 
            array (
                'dictionary_id' => 199,
                'language_id' => 4,
                'translation' => 'user@example.com.fr',
            ),
            86 => 
            array (
                'dictionary_id' => 200,
                'language_id' => 1,
                'translation' => 'Seu e-Mail ser&aacute; utilizado como seu identificador &uacute;nico',
            ),
            87 => 
            array (
                'dictionary_id' => 200,
                'language_id' => 2,
                'translation' => 'Your e-mail address will be used as your unique ID',
            ),
            88 => 
            array (
                'dictionary_id' => 200,
                'language_id' => 4,
                'translation' => 'Votre &eacute;mail sera utilis&eacute; &agrave; des fins d\'identification',
            ),
            89 => 
            array (
                'dictionary_id' => 59,
                'language_id' => 1,
                'translation' => 'Administra&ccedil;&atilde;o',
            ),
            90 => 
            array (
                'dictionary_id' => 59,
                'language_id' => 2,
                'translation' => 'Administration',
            ),
            91 => 
            array (
                'dictionary_id' => 59,
                'language_id' => 4,
                'translation' => 'Administration',
            ),
            92 => 
            array (
                'dictionary_id' => 201,
                'language_id' => 1,
                'translation' => 'Tipo',
            ),
            93 => 
            array (
                'dictionary_id' => 202,
                'language_id' => 1,
                'translation' => 'Descri&ccedil;&atilde;o',
            ),
            94 => 
            array (
                'dictionary_id' => 203,
                'language_id' => 1,
                'translation' => 'Nenhum registro encontrado.',
            ),
        ));
        
        
    }
}