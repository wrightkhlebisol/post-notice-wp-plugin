<?php

/*
 Plugin Name: Wright Post Notice
 Plugin URI: https://onedotstores.com
 Description: Dispay a custom message above our post.
 Version: 0.2.0
 Author: Wright
 Author URI: https://onedotstores.com
 License: GPLv2 or later 
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

require_once(plugin_dir_path(__FILE__) . 'class-wright-post-notice.php');
require_once(plugin_dir_path(__FILE__) . 'class-wright-post-notice-editor.php');
require_once(plugin_dir_path(__FILE__) . 'class-wright-post-notice-display.php');

function wright_post_notice_start()
{
    if (is_admin()) {
        $post_editor = new Wright_Post_Notice_Editor();
        $post_notice = new Wright_Post_Notice($post_editor);
    } else {
        $post_notice = new Wright_Post_Notice_Display();
    }
    $post_notice->initialize();
}

wright_post_notice_start();
