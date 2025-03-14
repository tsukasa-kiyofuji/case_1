<?php 

function mytheme_enqueue() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );


function custom_post_type_gallery() {
    register_post_type('gallery',
        array(
            'labels'      => array(
                'name'          => __('作品たち', 'textdomain'),
                'singular_name' => __('作品', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
            'menu_position' => 5,
            'menu_icon'   => 'dashicons-format-gallery',
            'supports'    => array('title', 'editor', 'thumbnail'),
            'rewrite'     => array('slug' => 'gallery'),
            'show_in_rest' => true, // ブロックエディター対応
        )
    );
}
add_action('init', 'custom_post_type_gallery');



?>