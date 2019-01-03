<?php
/**
 *
 * FAQ manager reloaded. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.0-b7] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2018, Ger, https://github.com/gerb
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
    'FM_ACP_SAVED'                  => 'FAQ salva',
	'FM_ANSWER'                     => 'Resposta',
    'FM_CAT_ADD'                    => 'Adicionar categoia',
    'FM_CAT_DELETED'                => 'Categoria com crianças deletadas',
    'FM_CAT_TITLE'                  => 'Título da categoria',
    'FM_CHILDREN_WILL_BE_DELETED'	=> 'Todas as entradas nesta categoria também serão deletadas!',
    'FM_DEFAULTS_IMPORT'            => 'Ler arquivos de idioma padrão no banco de dados FAQ',
    'FM_DEFAULTS_EXPLAIN'           => 'Se você continuar, todas as entradas de FAQ existentes serão removidas do banco de dados. O arquivo padrão <code>./language/**/help/faq.php</code> será importado para cada idioma ativado.<br>',
	'FM_FAQ_MANAGER'                => 'Gerenciar FAQ',
	'FM_FAQ_DELETED'                => 'Entrada de FAQ deletada',
	'FM_LANG'                       => 'Idioma para esta categoria e suas entradas',
	'FM_NO_CATEGORIES'              => 'Nenhuma categoria encontrada',
	'FM_QUESTION'                   => 'Questão',
	'FM_QUESTION_ADD'               => 'Adicionar nova questão a esta categoria',
));
