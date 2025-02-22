<<<<<<< HEAD
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
=======
<?php
// index.php
// このファイルはHerokuでの動作に必要です
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
>>>>>>> 48589d3bdcb210114e740bbc6976b5f6995f0ccb
