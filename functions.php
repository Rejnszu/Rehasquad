<?php

function rehasquad_theme_support()
{
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
}

add_action("after_setup_theme", "rehasquad_theme_support");

function rehasquad_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('rehasquad-bootstrap-style', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('rehasquad-fontawsome-style', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css", array(), '1.0', 'all');
    wp_enqueue_style('rehasquad-style', get_template_directory_uri() . "/style.css", array("rehasquad-bootstrap-style"), $version, 'all');
}

add_action('wp_enqueue_scripts', 'rehasquad_register_styles');


function rehasquad_register_scripts()
{
    wp_enqueue_script('rehasquad-jq-script', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', true);
    wp_enqueue_script('rehasquad-jqcColor-script', "https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js", array(), '2.1.2', true);
    wp_enqueue_script('rehasquad-popper-script', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '1.0', true);
    wp_enqueue_script('rehasquad-bootstrap-script', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js", array(), '1.0', true);
    wp_enqueue_script('rehasquad-main-script', get_template_directory_uri() . "/rehasquad.js", array(), '1.0', true);
    $translation_array = array('templateUrl' => get_template());
    wp_localize_script('rehasquad-main-script', 'object_name', $translation_array);
}

add_action('wp_enqueue_scripts', 'rehasquad_register_scripts');

function cptui_register_my_cpts_komunikat()
{

    /**
     * Post Type: Komunikaty.
     */

    $labels = [
        "name" => __("Komunikaty", "RehaSquad"),
        "singular_name" => __("Komunikat", "RehaSquad"),
    ];

    $args = [
        "label" => __("Komunikaty", "RehaSquad"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "komunikat", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "custom-fields", "page-attributes"],
    ];

    register_post_type("komunikat", $args);
}

add_action('init', 'cptui_register_my_cpts_komunikat');
