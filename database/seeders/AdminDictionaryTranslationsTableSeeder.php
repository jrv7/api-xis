<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDictionaryTranslationsTableSeeder extends XisSeeder
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
            array (
                'dictionary_id' => 1,
                'language_id' => 1,
                'translation' => 'Base de dados',
            ),
            array (
                'dictionary_id' => 2,
                'language_id' => 1,
                'translation' => 'Lista de tabelas',
            ),
            array (
                'dictionary_id' => 3,
                'language_id' => 1,
                'translation' => 'Listar Menus',
            ),
            array (
                'dictionary_id' => 4,
                'language_id' => 1,
                'translation' => 'Listar usuários',
            ),
            array (
                'dictionary_id' => 22,
                'language_id' => 1,
                'translation' => 'Tipo JOIN',
            ),
            array (
                'dictionary_id' => 23,
                'language_id' => 1,
            'translation' => 'Campo externo (ID)',
            ),
            array (
                'dictionary_id' => 24,
                'language_id' => 1,
                'translation' => 'Campo local',
            ),
            array (
                'dictionary_id' => 25,
                'language_id' => 1,
                'translation' => 'Função de busca',
            ),
            array (
                'dictionary_id' => 26,
                'language_id' => 1,
                'translation' => 'Campo visível',
            ),
            array (
                'dictionary_id' => 27,
                'language_id' => 1,
                'translation' => 'Back to',
            ),
            array (
                'dictionary_id' => 40,
                'language_id' => 1,
                'translation' => 'Nome de usuário',
            ),
            array (
                'dictionary_id' => 80,
                'language_id' => 1,
                'translation' => 'Campo DATA 2',
            ),
            array (
                'dictionary_id' => 73,
                'language_id' => 1,
                'translation' => 'Campo tipo STR',
            ),
            array (
                'dictionary_id' => 69,
                'language_id' => 1,
                'translation' => 'Palavra',
            ),
            array (
                'dictionary_id' => 71,
                'language_id' => 1,
            'translation' => 'Campo BIGINT (chave)',
            ),
            array (
                'dictionary_id' => 70,
                'language_id' => 1,
                'translation' => 'Campo INT',
            ),
            array (
                'dictionary_id' => 72,
                'language_id' => 1,
                'translation' => 'Campo STR',
            ),
            array (
                'dictionary_id' => 74,
                'language_id' => 1,
                'translation' => 'Campo STR',
            ),
            array (
                'dictionary_id' => 46,
                'language_id' => 1,
                'translation' => 'Título',
            ),
            array (
                'dictionary_id' => 48,
                'language_id' => 1,
                'translation' => 'Tabela da base de dados',
            ),
            array (
                'dictionary_id' => 50,
                'language_id' => 1,
                'translation' => 'Menu pai',
            ),
            array (
                'dictionary_id' => 51,
                'language_id' => 1,
                'translation' => 'Exibir no menu?',
            ),
            array (
                'dictionary_id' => 52,
                'language_id' => 1,
            'translation' => 'Ícone (Font-Awesome)',
            ),
            array (
                'dictionary_id' => 53,
                'language_id' => 1,
            'translation' => 'Tela customizada (VIEW)',
            ),
            array (
                'dictionary_id' => 54,
                'language_id' => 1,
                'translation' => 'Controlador customizado',
            ),
            array (
                'dictionary_id' => 82,
                'language_id' => 1,
                'translation' => 'Nome',
            ),
            array (
                'dictionary_id' => 84,
                'language_id' => 1,
                'translation' => 'ID',
            ),
            array (
                'dictionary_id' => 85,
                'language_id' => 1,
                'translation' => 'Base de dados',
            ),
            array (
                'dictionary_id' => 87,
                'language_id' => 1,
                'translation' => 'Tipo de tabela',
            ),
            array (
                'dictionary_id' => 89,
                'language_id' => 1,
                'translation' => 'Modelo',
            ),
            array (
                'dictionary_id' => 91,
                'language_id' => 1,
                'translation' => 'Total de linhas',
            ),
            array (
                'dictionary_id' => 92,
                'language_id' => 1,
            'translation' => 'Indexável? (elasticsearch)',
            ),
            array (
                'dictionary_id' => 41,
                'language_id' => 1,
                'translation' => 'e-Mail',
            ),
            array (
                'dictionary_id' => 42,
                'language_id' => 1,
                'translation' => 'Permissões de super-usuário?',
            ),
            array (
                'dictionary_id' => 148,
                'language_id' => 1,
                'translation' => 'Nome',
            ),
            array (
                'dictionary_id' => 149,
                'language_id' => 1,
                'translation' => 'Conector',
            ),
            array (
                'dictionary_id' => 158,
                'language_id' => 1,
                'translation' => 'ID',
            ),
            array (
                'dictionary_id' => 159,
                'language_id' => 1,
                'translation' => 'Nome',
            ),
            array (
                'dictionary_id' => 160,
                'language_id' => 1,
                'translation' => 'Conector',
            ),
            array (
                'dictionary_id' => 164,
                'language_id' => 1,
                'translation' => 'Título',
            ),
            array (
                'dictionary_id' => 165,
                'language_id' => 1,
                'translation' => 'Método GET customizado',
            ),
            array (
                'dictionary_id' => 166,
                'language_id' => 1,
                'translation' => 'Hash de segurança',
            ),
            array (
                'dictionary_id' => 167,
                'language_id' => 1,
                'translation' => 'Tabela da base de dados',
            ),
            array (
                'dictionary_id' => 168,
                'language_id' => 1,
                'translation' => 'Menu pai',
            ),
            array (
                'dictionary_id' => 169,
                'language_id' => 1,
                'translation' => 'ipo de página',
            ),
            array (
                'dictionary_id' => 170,
                'language_id' => 1,
                'translation' => 'Exibir no menu?',
            ),
            array (
                'dictionary_id' => 171,
                'language_id' => 1,
            'translation' => 'Ícone (Font-Awesome)',
            ),
            array (
                'dictionary_id' => 172,
                'language_id' => 1,
            'translation' => 'Página de retorno (após ação)',
            ),
            array (
                'dictionary_id' => 173,
                'language_id' => 1,
                'translation' => 'Página CRUD customizada',
            ),
            array (
                'dictionary_id' => 174,
                'language_id' => 1,
                'translation' => 'Controlador customizado',
            ),
            array (
                'dictionary_id' => 175,
                'language_id' => 1,
                'translation' => 'Sim',
            ),
            array (
                'dictionary_id' => 176,
                'language_id' => 1,
                'translation' => 'Não',
            ),
            array (
                'dictionary_id' => 177,
                'language_id' => 1,
                'translation' => 'Página de listagem',
            ),
            array (
                'dictionary_id' => 178,
                'language_id' => 1,
                'translation' => 'Página de criação',
            ),
            array (
                'dictionary_id' => 179,
                'language_id' => 1,
                'translation' => 'Página de visualização',
            ),
            array (
                'dictionary_id' => 180,
                'language_id' => 1,
                'translation' => 'ID',
            ),
            array (
                'dictionary_id' => 181,
                'language_id' => 1,
                'translation' => 'e-Mail',
            ),
            array (
                'dictionary_id' => 182,
                'language_id' => 1,
                'translation' => 'Senha',
            ),
            array (
                'dictionary_id' => 183,
                'language_id' => 1,
                'translation' => 'Data de criação',
            ),
            array (
                'dictionary_id' => 184,
                'language_id' => 1,
                'translation' => 'Permissões de super-usuário?',
            ),
            array (
                'dictionary_id' => 185,
                'language_id' => 1,
                'translation' => 'Data de edição',
            ),
            array (
                'dictionary_id' => 186,
                'language_id' => 1,
                'translation' => 'Chave para a função de "Lembrar senha" no login',
            ),
            array (
                'dictionary_id' => 187,
                'language_id' => 1,
                'translation' => 'Definir tipo de campo em Layouts.php',
            ),
            array (
                'dictionary_id' => 188,
                'language_id' => 1,
                'translation' => 'Base de dados',
            ),
            array (
                'dictionary_id' => 189,
                'language_id' => 1,
                'translation' => 'Tipo de tabela',
            ),
            array (
                'dictionary_id' => 190,
                'language_id' => 1,
                'translation' => 'Modelo',
            ),
            array (
                'dictionary_id' => 191,
                'language_id' => 1,
                'translation' => 'Campo padrão para a listagem',
            ),
            array (
                'dictionary_id' => 192,
                'language_id' => 1,
                'translation' => 'Total de linhas',
            ),
            array (
                'dictionary_id' => 193,
                'language_id' => 1,
            'translation' => 'Indexável? (elasticsearch)',
            ),
            array (
                'dictionary_id' => 198,
                'language_id' => 1,
                'translation' => 'Selecione',
            ),
            array (
                'dictionary_id' => 195,
                'language_id' => 1,
            'translation' => 'Icon (font-awesome)',
            ),
            array (
                'dictionary_id' => 46,
                'language_id' => 2,
                'translation' => 'Title',
            ),
            array (
                'dictionary_id' => 40,
                'language_id' => 2,
                'translation' => 'Username',
            ),
            array (
                'dictionary_id' => 41,
                'language_id' => 2,
                'translation' => 'Email',
            ),
            array (
                'dictionary_id' => 42,
                'language_id' => 2,
                'translation' => 'Superuser permissions?',
            ),
            array (
                'dictionary_id' => 41,
                'language_id' => 4,
                'translation' => 'Email',
            ),
            array (
                'dictionary_id' => 42,
                'language_id' => 4,
                'translation' => 'Permition de super-user',
            ),
            array (
                'dictionary_id' => 40,
                'language_id' => 4,
                'translation' => 'Compte',
            ),
            array (
                'dictionary_id' => 46,
                'language_id' => 4,
                'translation' => 'Title',
            ),
            array (
                'dictionary_id' => 48,
                'language_id' => 4,
                'translation' => 'DB Table',
            ),
            array (
                'dictionary_id' => 51,
                'language_id' => 4,
                'translation' => 'Montre dans le menu des options',
            ),
            array (
                'dictionary_id' => 27,
                'language_id' => 4,
                'translation' => 'Page à y\'returner',
            ),
            array (
                'dictionary_id' => 54,
                'language_id' => 4,
                'translation' => 'Controlateur',
            ),
            array (
                'dictionary_id' => 199,
                'language_id' => 1,
                'translation' => 'usuario@email.com.br',
            ),
            array (
                'dictionary_id' => 199,
                'language_id' => 2,
                'translation' => 'user@example.com',
            ),
            array (
                'dictionary_id' => 199,
                'language_id' => 4,
                'translation' => 'user@example.com.fr',
            ),
            array (
                'dictionary_id' => 200,
                'language_id' => 1,
                'translation' => 'Seu e-Mail será utilizado como seu identificador único',
            ),
            array (
                'dictionary_id' => 200,
                'language_id' => 2,
                'translation' => 'Your e-mail address will be used as your unique ID',
            ),
            array (
                'dictionary_id' => 200,
                'language_id' => 4,
                'translation' => 'Votre émail sera utilisé à des fins d\'identification',
            ),
            array (
                'dictionary_id' => 59,
                'language_id' => 1,
                'translation' => 'Administração',
            ),
            array (
                'dictionary_id' => 59,
                'language_id' => 2,
                'translation' => 'Administration',
            ),
            array (
                'dictionary_id' => 59,
                'language_id' => 4,
                'translation' => 'Administration',
            ),
            array (
                'dictionary_id' => 201,
                'language_id' => 1,
                'translation' => 'Tipo',
            ),
            array (
                'dictionary_id' => 202,
                'language_id' => 1,
                'translation' => 'Descrição',
            ),
            array (
                'dictionary_id' => 203,
                'language_id' => 1,
                'translation' => 'Nenhum registro encontrado.',
            ),
        ));
    }
}