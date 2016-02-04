<?php
/*
Plugin Name: Yucca Kharcha
Plugin URI: http://example.com/yucca_kharcha
Description: Creats a basic dairy keeping of daily basis expenses of Yucca 1904.
Version: 0.1
Author: Anand Kumar Chaudhary
Author URI: http://goo.gl/MV9AHC
*/
if (!defined('ABSPATH'))
  {
    exit;
  }
  add_filter('piklist_post_types', 'yucca_kharcha_post_type');
  function yucca_kharcha_post_type($post_types)
  {
    $post_types['yucca_kharcha'] = array(
      'labels' => piklist('post_type_labels', 'Yucca 1904 Kharcha')
      ,'title' => __('Enter a new kharcha')
      ,'menu_icon' => 'dashicons-groups'
      ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
      ,'supports' => false
      ,'public' => true
      ,'has_archive' => true
      ,'rewrite' => array(
        'slug' => 'yucca-kharcha'
      )
      ,'capability_type' => 'post'
      ,'edit_columns' => array(
        'title' => __('Amount')
        ,'author' => __('Member')
      )
      ,'hide_meta_box' => array(
        'slug'
        ,'author'
      )
      ,'status' => array(
        'draft' => array(
          'label' => 'New'
          ,'public' => true
        )
        ,'lock' => array(
          'label' => 'Lock'
          ,'public' => true
        )
      )
    );
    
    return $post_types;
  }
