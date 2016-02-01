<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @package phpBB Extension - External Site Auth Provider
 * @copyright (c) Igor Peshkov (dark_diesel) <https://plus.google.com/+IgorPeshkov>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, contact with developer
 *
 */

/**
 * DO NOT CHANGE
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
    'AUTH_EXTERNALSITE' => 'External Site Authorisation',
    'AUTH_EXTERNALSITE_USER_TABLE' => 'External Site user table',
    'AUTH_EXTERNALSITE_USER_TABLE_EXPLAIN' => 'Table of database that contains users from external site. <strong>Should be stored at the same server with forum database!</strong><br/> <strong>Example:</strong> <samp>user</samp>',
    'AUTH_EXTERNALSITE_USER_NAME_FLD' => 'User Name column at user table',
    'AUTH_EXTERNALSITE_USER_NAME_FLD_EXPLAIN' => 'Set column name at external site user table that contains unique user name<br/> <strong>Example:</strong> <samp>NickName</samp>',
    'AUTH_EXTERNALSITE_USER_PASSWORD_FLD' => 'User Password column at user table',
    'AUTH_EXTERNALSITE_USER_PASSWORD_FLD_EXPLAIN' => 'Set column name at external site user table that contains user password<br/> <strong>Example:</strong> <samp>Password</samp>',
    'AUTH_EXTERNALSITE_USER_EMAIL_FLD' => 'User Email column at user table',
    'AUTH_EXTERNALSITE_USER_EMAIL_FLD_EXPLAIN' => 'Set column name at external site user table that contains user email<br/> <strong>Example:</strong> <samp>Email</samp>',
));
