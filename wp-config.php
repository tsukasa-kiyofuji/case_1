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

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^n7A#z*7QYSM&U$4p(5`|n{P(lL-~;w {>V=R_Epc,}42FiO^pbgN,!uW-:RTWUT' );
define( 'SECURE_AUTH_KEY',  '&+o )<t{CbZ(Of^)RMC{QsJDBfwZN7#pgHK*I)Pcn|#6fY@`8@%.8iQ##qBwBOi}' );
define( 'LOGGED_IN_KEY',    'y*O%o[9;+6./5wUc0]s(y),H+dp%P6c,hl-Qe41xfj*o,8MZ5)`>cYxgSDE8oBs7' );
define( 'NONCE_KEY',        ')r*A]&O6ok_1B|,iIyVq+0yRP7E]k9OD4g,KG#q` X{SYxIVl^9d]+cO%/fUKub3' );
define( 'AUTH_SALT',        'YO;?Hr%,*VtJUO!qJ7tfV6o;rb|boN?JPJKnWm]@KRUppa(foBYG<ll=K %lqV:#' );
define( 'SECURE_AUTH_SALT', 'D#=<3M:yinP4&]VNQ8ZGe]m!xRy;_~}s%=4fD_!3,#uBOyV+5Xd:1=KW6NE&<}7z' );
define( 'LOGGED_IN_SALT',   'vG?(4=&-<Z+/|gk_yEK`o)PAq4BUSEh^KYu3jxZYO~!eE=}0Xd*Wam&&Twb{J$(f' );
define( 'NONCE_SALT',       ']?}9n!C^Pz`wD_r]&[Sx/. L/nuaZd_xu4K/} Y~.BgX=cW5$2n1le9<yX1@4NF,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

$mysql_url = parse_url('mysql://w8pw5av6gw7s307s:vq5k2lpsk7k0r4s7@bmsyhziszmhf61g1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/s2wee4pazjgwq3gi');
define('DB_NAME', 's2wee4pazjgwq3gi');         // データベース名
define('DB_USER', 'w8pw5av6gw7s307s');         // ユーザー名
define('DB_PASSWORD', 'vq5k2lpsk7k0r4s7');     // パスワード
define('DB_HOST', 'bmsyhziszmhf61g1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');  // ホスト名

