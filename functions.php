<?php
  function maattt_supports() {
    add_theme_support('title-tag');
  }

  function maattt_register_assets() {
    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '1.0');
    wp_enqueue_style('all', get_theme_file_uri('/assets/css/all.css'), array(), '1.0');
    wp_enqueue_style('modal', get_theme_file_uri('/assets/css/modal.css'), array(), '1.0');
    wp_enqueue_style('button-menu', get_theme_file_uri('/assets/css/buttons.css'), array(), '1.0');

    wp_enqueue_script('all', get_template_directory_uri() . '/assets/javascript/all.js', array(), '1.0', true);
  }

  function maattt_title_separator() {
    return '|';
  }

  function get_posts_years() {
    global $wpdb;
    $result = array();
    $years = $wpdb->get_results(
      $wpdb->prepare("SELECT YEAR(post_date) FROM {$wpdb->posts} WHERE post_status = 'publish' GROUP BY YEAR(post_date) DESC"), 
      ARRAY_N
    );
    if (is_array($years) && count($years) > 0) {
      foreach ($years as $year) {
        $result[] = $year[0];
      }
    }
    return $result;
  }

  add_action('after_setup_theme', 'maattt_supports');
  add_filter('document_title_separator', 'maattt_title_separator');
  add_action('wp_enqueue_scripts', 'maattt_register_assets');