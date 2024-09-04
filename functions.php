<?php
function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");


function my_script_init() {
    wp_enqueue_style("reset-css", get_template_directory_uri() . "/css/reset.css");
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
    wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/lib/swiper-bundle.min.js', array(), null, true);
  }
  add_action("wp_enqueue_scripts", "my_script_init");

?>