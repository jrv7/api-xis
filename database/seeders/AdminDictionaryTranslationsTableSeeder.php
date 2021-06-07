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
                'dictionary_id' => self::getDictionaryWordId("ADMINISTRACAO"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Administração',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Log out"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Sair',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("USUARIOS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Usuários',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LISTAR_USUARIOS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de usuários',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("MENUS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LISTAR_MENUS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("MENU_LIST_ACTIONS_ADD"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Adicionar ação de listagem',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LISTAR_MENUS_RELACIONADOS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de menus relacionados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("DATABASE"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LISTAR_TABELAS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LIST_DATABASES"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de bases de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("RELACIONAR_TABELAS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Adicionar tabelas relacioadas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("DICTIONARY"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Traduções',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LIST_DICTIONARY_WORDS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de palavras',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("_STATIC_LAYOUTS_DICTIONARY_TRANSLATE_"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de traduções',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("PERFIS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Perfil de usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LISTAR_PERFIS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de perfis',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("TESTES"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu teste',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LIST_TESTS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de testes',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.ADMINISTRACAO"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Administração',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.USUARIOS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Usuários',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LISTAR_USUARIOS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de usuários',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_users"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar conta de usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("WORD.SEARCH"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Buscar',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("word.ADVANCED_SEARCH"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Busca avançada',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Basic search"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Busca simples',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Search..."),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Buscar...',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Search by field..."),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Buscar por campo',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Search by field"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Buscar por campo',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("password"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Senha',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.EDITAR_USUARIO"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_edit_users"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar conta de usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("users.name"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Nome',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("users.email"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'e-mail',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("users.superuser"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Super usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("users.remember_token"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lembrar acesso',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.users"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("WORD.false"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'NÃO',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_edit_users"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar conta de usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => '#ID',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Required.field"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Campo obrigatório',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("name"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'nome',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Yes"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'SIM',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("No"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'NÃO',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("email"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'e-mail',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("word.CHANGE_PASSWORD"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Alterar senha',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Advanced search"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Busca avançada',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Choose..."),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Escolha...',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("superuser"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Super usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.MENUS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LISTAR_MENUS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_menus"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_menus"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.menu_title"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Título do menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_title"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Título do menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.custom_first_method_get"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Método GET customizado',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("custom_first_method_get"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Primeiro método GET customizado',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.father_menu_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu pai',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Please select"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Escolha',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Select..."),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Escolha...',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.class_fa_icon"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Ícone (Font-Awesome)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("class_fa_icon"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Ícone (Font-Awesome)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.menu_url_hash"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Hash única',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_url_hash"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Hash única',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.route"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Rota',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.opt_show_menu"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Exibir na listagem',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.table_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.return_to_menu_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu para retornar após ação',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.custom_crud_view"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tela customizada (View)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("custom_crud_view"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tela customizada (View)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.custom_controller"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Controladora',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("custom_controller"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Controladora',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("father_menu_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu pai',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("opt_show_menu"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Exibir menu no sistema',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("return_to_menu_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu para retornar',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.EDITAR_MENU"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_edit_menus"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.menus"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("WORD.true"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'SIM',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_edit_menus"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.MENU_LIST_ACTIONS_ADD"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar ação de listagem',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_menu_list_actions"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar ação de listagem',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("target_menu_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu alvo',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("action_order"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Ordem da ação',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_menu_list_actions"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar ação de listagem',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_list_actions.menu_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_list_actions.target_menu_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu alvo',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_list_actions.fa_icon"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Ícone (Font-Awesome)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("fa_icon"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Ícone (Font-Awesome)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LISTAR_MENUS_RELACIONADOS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de menus relacionados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_menus_related"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Adiconar relação de menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_menus_related"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Adiconar relação de menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus_related.related_menu_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu relacionado',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus_related.menu_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menu relacionado',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.DATABASE"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LISTAR_TABELAS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_db_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_db_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Nova tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.name"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Nome',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.database_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.table_type_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tipo de tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.has_timestamps"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tem datas de criação/edição?',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.total_rows"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Número de linhas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("total_rows"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Número de linhas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.indexable"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Dados são indexáveis?',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.default_list_action_field_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Campo padrão para listagens',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("default_list_action_field_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Campo padrão para listagens',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("normal"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Normal',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("join_1_1"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'União (1x1)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("join_1_n"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'União (1xN)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("join_n_m"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'União (MxN)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_view"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'View',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("temporary"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Temporária',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("join_n_m_map"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'União (MxN mapeada)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("admin"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'admin',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("database_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_type_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tipo de tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("has_timestamps"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Contém datas de criação/atualização?',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("indexable"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Dados são indexáveis?',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.EDITAR_TABELA"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_edit_db_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.model"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Modelador',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.db_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name.db_table_fields"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Campos de tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.role_has_permissions_in_tables-by-roles"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Permissões de perfíl em tabelas (por perfil)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.role_has_permissions_in_tables-by-permissions"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Permissões de perfíl em tabelas (por permissão)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.Download"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Download',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("USER_ROLE_READ_ONLY"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Apenas-leitura',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("USER_ROLE_ADMIN"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Administrador',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.Delete"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Excluír',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.Update"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Atualizar',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.Create"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Inserir',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.View"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Visualizar',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.USER_ROLE_READ_ONLY"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Apenas-leitura',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Download"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Download',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Delete"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Excluír',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Update"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Atualizar',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Create"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Inserir',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("View"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Visualizar',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.USER_ROLE_ADMIN"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Administrador',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_edit_db_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LIST_DATABASES"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de bases de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_databases"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_databases"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Nova base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("databases.name"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Nome',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("databases.db_connection"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Conexão',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_connection"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Conexão',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("system_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Sistema',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.DB_VIEW_DATABASE"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_edit_databases"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("databases.system_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Sistema',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.databases"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name.db_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_edit_databases"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.RELACIONAR_TABELAS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar relação de tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_db_related_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar relação de tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_db_related_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Nova relação de tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.table_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tabela principal',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.related_table_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tabela relacionada',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.joint_field_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Campo de união',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.relation_order"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Ordem da relação',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("relation_order"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Ordem da relação',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.conditional_field_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Campo condicional',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.conditional_field_value"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Valor do campo condicional',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("conditional_field_value"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Valor do campo condicional',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("related_table_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tabela relacionada',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("joint_field_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Campo de união',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("conditional_field_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Campo condicional',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.DICTIONARY"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Traduções',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LIST_DICTIONARY_WORDS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de palavras',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_dictionary"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Adicionar palavra',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_dictionary"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Nova palavra',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("dictionary.word"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Palavra',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("word"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Palavra',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb._STATIC_LAYOUTS_DICTIONARY_TRANSLATE_"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Traduções',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_dictionary_translations"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Adicionar tradução',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_dictionary_translations"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Nova tradução',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("dictionary_translations.translation"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tradução',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("translation"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tradução',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("dictionary_translations.language_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Idioma',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("dictionary_translations.dictionary_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Palavra',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("PT-Br"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Português (Brasil)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("En"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Inglês',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Sp"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Espanhol',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Fr"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Francês',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("language_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Idioma',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("dictionary_id"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Palavra',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.PERFIS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Perfís de usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LISTAR_PERFIS"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Lista de perfís',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_roles"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Criar perfil',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_roles"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Novo perfil',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("roles.description"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Descrição',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("description"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Descrição',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("roles.display_name"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Nome de exibição',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("display_name"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Nome de exibição',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("roles.name"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Perfil',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.EDITAR_PERFIL"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar perfil',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_edit_roles"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar perfil',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.roles"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Perfil',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.role_has_permissions_in_tables-by-db_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Permissões de perfíl em tabelas (por tabela)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.tests_table"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tabela de testes',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.role_has_permissions_in_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Permissões de perfíl em tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_many_to_many_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'View de tabelas relacionadas (MxN)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_view_right_block"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'View tabelas realcionadas (tabela relacionada)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_list_actions"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Ações de listagem',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_triggers"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Gatilhos de tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_trigger_types"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tipos de gatilho de tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.menus"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_fields"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Campos de tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.sessions"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Sessões',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_db_table_filter_fields"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'View de campos filtro',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_db_table_fields"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'View de campos de tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_db_table_field_types"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'View de tipos de campos de tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_db_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'View de tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_remote_table_fields"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'View de campos extrangeiros',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.home"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Home',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_update_history"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Histórico de atualizações',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.permission_user"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Permissões de usuários',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.permission_role"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Permissões de perfís',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.roles"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Perfís de usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.password_resets"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Histórico de alteração de senha',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.role_menu_permission"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Permissões de perfís em menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_father_menus"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'View de menus pai',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.role_menu"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Permissões de perfil em menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_user_configurations"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Configurações de usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.user_has_roles"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Perfís de usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_field_joins"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Uniões de campo',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.menu_list_actions"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Ações de listagens',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.user_has_systems"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Sistemas do usuário',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.systems"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Sistemas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.users"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Usuários',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.menus_related"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Menus relacionados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_field_types"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tipos de tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.databases"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Bases de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.dictionary"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Traduções',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.permissions"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Permissões',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_update_history_changes"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Histórico de atualização em tabelas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.migrations"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Migrações de base de dados',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_update_history_ids"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'db_update_history_ids',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.importers"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Importadores',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_related_tables"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'db_related_tables',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.status"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Situações',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.languages"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Idiomas',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_relation_types"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'db_table_relation_types',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.dictionary_translations"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Traduções',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_types"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Tipos de tabela',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_edit_roles"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar perfil',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("WORD.EDITAR"),
                'language_id' => self::getLanguageId('PT-Br'), //1,
                'translation' => 'Editar',
            ),
            /**
             * 
             * 
             * 
             * 
             * 
             * 
             * 
             * 
             * 
             * Traducoes para o ingles
             * 
             * 
             * 
             * 
             * 
             * 
             * 
             * 
             */

            array (
                'dictionary_id' => self::getDictionaryWordId("ADMINISTRACAO"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Administration',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Log out"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Log out',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("USUARIOS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Users',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LISTAR_USUARIOS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Users list',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("MENUS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LISTAR_MENUS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Menus list',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("MENU_LIST_ACTIONS_ADD"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New list action',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LISTAR_MENUS_RELACIONADOS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'list of related menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("DATABASE"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Databases',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LISTAR_TABELAS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List tables',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LIST_DATABASES"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List databases',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("RELACIONAR_TABELAS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Create table relation',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("DICTIONARY"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Translations',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LIST_DICTIONARY_WORDS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List words',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("_STATIC_LAYOUTS_DICTIONARY_TRANSLATE_"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List translations',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("PERFIS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Profiles',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LISTAR_PERFIS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List profiles',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("TESTES"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Tests',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("LIST_TESTS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List tests',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.ADMINISTRACAO"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Administration',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.USUARIOS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Users',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LISTAR_USUARIOS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List users',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_users"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New user account',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("WORD.SEARCH"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Search',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("word.ADVANCED_SEARCH"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Advanced search',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Basic search"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Simple search',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Search..."),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Search...',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Search by field..."),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Search by field',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Search by field"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Search by field',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("password"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Password',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.EDITAR_USUARIO"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_edit_users"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update user account',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("users.name"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Name',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("users.email"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'e-mail',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("users.superuser"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Super user',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("users.remember_token"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Remember access',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.users"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'User',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("WORD.false"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'NO',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_edit_users"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update user account',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => '#ID',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Required.field"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Required',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("name"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'name',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Yes"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'YES',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("No"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'NO',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("email"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'e-mail',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("word.CHANGE_PASSWORD"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Change password',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Advanced search"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Advanced search',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Choose..."),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Select...',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("superuser"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Super user',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.MENUS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LISTAR_MENUS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_menus"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_menus"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.menu_title"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Title',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_title"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Title',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.custom_first_method_get"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Custom GET method',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("custom_first_method_get"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'First custom GET method',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.father_menu_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Father menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Please select"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Select',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Select..."),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Select...',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.class_fa_icon"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Icon (Font-Awesome)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("class_fa_icon"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Icon (Font-Awesome)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.menu_url_hash"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Unique hash',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_url_hash"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Unique hash',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.route"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Route',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.opt_show_menu"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Display in lists',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.table_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.return_to_menu_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Menu to return to',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.custom_crud_view"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Custom table (View)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("custom_crud_view"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Custom table (View)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus.custom_controller"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Controller',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("custom_controller"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Controller',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("father_menu_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Father menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("opt_show_menu"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Show as system menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("return_to_menu_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Menu to return to',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.EDITAR_MENU"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_edit_menus"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.menus"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("WORD.true"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'YES',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_edit_menus"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.MENU_LIST_ACTIONS_ADD"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New list action',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_menu_list_actions"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New list action',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("target_menu_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Target menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("action_order"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Action order',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_menu_list_actions"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New list action',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_list_actions.menu_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_list_actions.target_menu_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Target menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menu_list_actions.fa_icon"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Icon (Font-Awesome)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("fa_icon"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Icon (Font-Awesome)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LISTAR_MENUS_RELACIONADOS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List related menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_menus_related"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New related menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_menus_related"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New related menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus_related.related_menu_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Related menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("menus_related.menu_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Related menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.DATABASE"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Databases',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LISTAR_TABELAS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List tables',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_db_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_db_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New Table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.name"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Name',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.database_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Database',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.table_type_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table type',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.has_timestamps"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Has timestamps?',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.total_rows"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Total of lines',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("total_rows"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Total of lines',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.indexable"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Has indexable data?',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.default_list_action_field_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Default list field',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("default_list_action_field_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Default list field',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("normal"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Normal',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("join_1_1"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Join (1x1)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("join_1_n"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Join (1xN)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("join_n_m"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Join (MxN)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_view"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'View',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("temporary"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Temporary',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("join_n_m_map"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Join (MxN mapeada)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("admin"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'admin',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("database_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Database',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_type_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table type',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("has_timestamps"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Has timestamps?',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("indexable"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Has indexable data?',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.EDITAR_TABELA"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_edit_db_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_tables.model"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Model',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.db_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Tables',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name.db_table_fields"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table fields',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.role_has_permissions_in_tables-by-roles"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Role permissions on table (by profile)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.role_has_permissions_in_tables-by-permissions"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Role permissions on table (by permission)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.Download"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Download',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("USER_ROLE_READ_ONLY"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Read-only',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("USER_ROLE_ADMIN"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Admin',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.Delete"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Delete',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.Update"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.Create"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Insert',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.View"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'View',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.USER_ROLE_READ_ONLY"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Read-only',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Download"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Download',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Delete"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Delete',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Update"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Create"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Insert',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("View"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'View',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.USER_ROLE_ADMIN"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Admin',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_edit_db_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LIST_DATABASES"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List databases',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_databases"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New database',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_databases"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New database',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("databases.name"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'name',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("databases.db_connection"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Connection',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_connection"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Connection',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("system_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'System',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.DB_VIEW_DATABASE"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Database',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_edit_databases"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update database',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("databases.system_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'System',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.databases"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Database',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name.db_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Tables',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_edit_databases"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update database',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.RELACIONAR_TABELAS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New table relation',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_db_related_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New table relation',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_db_related_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New table relation',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.table_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Main table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.related_table_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Related table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.joint_field_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Joint field',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.relation_order"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Relation order',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("relation_order"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Relation order',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.conditional_field_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Conditional field',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_related_tables.conditional_field_value"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Conditional field value',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("conditional_field_value"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Conditional field value',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("related_table_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Related table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("joint_field_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Joint field',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("conditional_field_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Conditional field',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.DICTIONARY"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Translations',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LIST_DICTIONARY_WORDS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List words',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_dictionary"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New word',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_dictionary"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New word',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("dictionary.word"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Word',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("word"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Word',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb._STATIC_LAYOUTS_DICTIONARY_TRANSLATE_"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Translation',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_dictionary_translations"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New translation',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_dictionary_translations"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New translation',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("dictionary_translations.translation"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Translation',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("translation"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Translation',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("dictionary_translations.language_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Language',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("dictionary_translations.dictionary_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Word',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("PT-Br"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Portuguese (Brazil)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("En"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'English',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Sp"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Spanish',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("Fr"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'French',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("language_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Language',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("dictionary_id"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Word',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.PERFIS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'User profiles',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.LISTAR_PERFIS"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List profiles',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_new_roles"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New profile',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_add_new_roles"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'New profile',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("roles.description"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Description',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("description"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Description',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("roles.display_name"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Name',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("display_name"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Name',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("roles.name"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Profile',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("breadcrumb.EDITAR_PERFIL"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update profile',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("list_action_button_edit_roles"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update profile',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.roles"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Profile',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("table_name_singular.role_has_permissions_in_tables-by-db_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Role permissions on table (by table)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.tests_table"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Test table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.role_has_permissions_in_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Role permissions on table',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_many_to_many_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Related tables view (MxN)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_view_right_block"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Related tables view (related table)',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_list_actions"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List actions',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_triggers"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table triggers',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_trigger_types"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table trigger types',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.menus"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_fields"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table fields',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.sessions"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Sessions',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_db_table_filter_fields"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Filter fields view',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_db_table_fields"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table fields view',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_db_table_field_types"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table field types view',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_db_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Tables view',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Tables',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_remote_table_fields"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Foreign fields view',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.home"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Home',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_update_history"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update history',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.permission_user"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'User permissions',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.permission_role"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Role permissions',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.roles"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'User permissions',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.password_resets"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Password update history',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.role_menu_permission"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Role permissions on menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.vw_father_menus"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Father menu view',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.role_menu"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Role permissions on menu',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_user_configurations"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'User settings',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.user_has_roles"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'User roles',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_field_joins"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Field joins',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.menu_list_actions"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'List actions',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.user_has_systems"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'User systems',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.systems"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Systems',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.users"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Users',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.menus_related"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Related menus',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_field_types"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table types',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.databases"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Databases',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.dictionary"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Translations',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.permissions"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Permissions',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_update_history_changes"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table update history',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.migrations"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Database migrations',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_update_history_ids"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'db_update_history_ids',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.importers"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Importers',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_related_tables"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'db_related_tables',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.status"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Status',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.languages"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Languages',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_relation_types"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'db_table_relation_types',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.dictionary_translations"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Translations',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("db_table_name.db_table_types"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Table types',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("modal_edit_roles"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update role',
            ),
            array (
                'dictionary_id' => self::getDictionaryWordId("WORD.EDITAR"),
                'language_id' => self::getLanguageId('En'), //1,
                'translation' => 'Update',
            ),
        ));
    }
}