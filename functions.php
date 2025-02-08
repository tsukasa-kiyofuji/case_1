<?php 

function mytheme_enqueue() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );

?>