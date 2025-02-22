<?php

// 自作のjQueryを優先させる
function my_enqueue_scripts() {
    // 自作のjQueryスクリプトを登録
    wp_register_script('my-custom-script', get_template_directory_uri() . '/js/my-script.js', array('jquery'), null, true);
    
    // 自作のjQueryスクリプトをキューに追加
    wp_enqueue_script('my-custom-script');
}

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


// slickテーマをwordpressで使用可能にする
function enqueue_slick_assets() {
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_slick_assets');


// .jsでphpコードを使用可能にする
function my_theme_enqueue_scripts() {
    // jsフォルダ内のmy-script.jsを読み込む
    wp_enqueue_script('my-script', get_template_directory_uri() . '/js/my-script.js', array('jquery'), null, true);

    // JavaScriptにテーマのURLを渡す
    wp_localize_script('my-script', 'myTheme', array(
        'templateUrl' => get_template_directory_uri(), // テーマのURL
    ));
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

?>