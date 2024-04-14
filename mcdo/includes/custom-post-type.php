<?php

function careers_custom_post(){
    $careersPost_label = array(
        'name'          => __('Careers Post','textdomain'),
        'singular_name' => __('Careers Post','textdomain'),
        'add_new'       => __('Add Careers Post', 'textdomain'),
        'add_new_item'  => __('Add new Careers Post', 'textdomain'),
        'edit_item'     => __('Edit Careers Post', 'textdomain'),
        'all_items'     => __('Careers Post', 'textdomain'),
    );

    $careersPost_args = array(
        'labels'            => $careersPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('careersPost', $careersPost_args);
}

add_action('init', 'careers_custom_post');