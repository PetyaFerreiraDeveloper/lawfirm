<?php
function lawfirm_register_nav()
{
  register_nav_menus(
    array(
      'header' => 'header',
      'footer' => 'footer',
      '404' => '404',
    )
  );
}

if (! function_exists('setup')):
  function setup()
  {
    lawfirm_register_nav();
    add_theme_support('post-thumbnails');
    add_image_size('team', 475, 475, array('center', 'center'));
  }

endif;

function lawfirm_scripts_header()
{
  wp_enqueue_style('init', get_stylesheet_uri());
};

function lawfirm_scripts_footer()
{
  wp_enqueue_script('init', get_template_directory_uri() . '/js/init.js', array('jquery'), null, true);
};

add_action('after_setup_theme', 'setup');
add_action('wp_enqueue_scripts', 'lawfirm_scripts_header');
// add_action('wp_footer', 'lawfirm_scripts_footer');
