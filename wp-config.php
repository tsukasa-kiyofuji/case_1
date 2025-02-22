<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */


$mysql_url = parse_url(getenv("JAWSDB_URL") ?: 'mysql://w8pw5av6gw7s307s:vq5k2lpsk7k0r4s7@bmsyhziszmhf61g1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/s2wee4pazjgwq3gi');

define('DB_NAME', substr($mysql_url["path"], 1)); // データベース名
define('DB_USER', $mysql_url["user"]);             // ユーザー名
define('DB_PASSWORD', $mysql_url["pass"]);         // パスワード
define('DB_HOST', $mysql_url["host"]);             // ホスト名
define('DB_PORT', $mysql_url["port"] ?: 3306);     // ポート（省略可能）

