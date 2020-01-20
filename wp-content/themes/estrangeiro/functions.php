<?php

/** CHAMA ARQUIVOS CSS E JS */

function my_wp_scripts(){
    /** CSS */
    wp_enqueue_style('1', sprintf('%s/assets/css/font-awesome.min.css', get_template_directory_uri()));
    wp_enqueue_style('2', sprintf('%s/assets/css/elegent-icons.css', get_template_directory_uri()));
    wp_enqueue_style('3', sprintf('%s/assets/css/bootstrap.min.css', get_template_directory_uri()));
    wp_enqueue_style('4', sprintf('%s/assets/css/owl.carousel.css', get_template_directory_uri()));
    wp_enqueue_style('5', sprintf('%s/assets/css/style.css', get_template_directory_uri()));
    wp_enqueue_style('6', sprintf('%s/assets/css/header.css', get_template_directory_uri()));
    wp_enqueue_style('7', sprintf('%s/assets/css/themes.css', get_template_directory_uri()));
    wp_enqueue_style('8', sprintf('%s/assets/css/responsive.css', get_template_directory_uri()));
   

    /** SCRIPTS */
    wp_enqueue_script('1', sprintf('%s/assets/js/modernizr-2.8.3.min.js', get_template_directory_uri()), null, null, true);
    wp_enqueue_script('1', sprintf('%s/assets/js/plugins.js', get_template_directory_uri()), null, null, true);
    wp_enqueue_script('1', sprintf('%s/assets/js/main.js', get_template_directory_uri()), null, null, true);
   }

add_action('wp_enqueue_scripts', 'my_wp_scripts');