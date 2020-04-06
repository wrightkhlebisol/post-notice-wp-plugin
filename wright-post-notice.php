<?php

/*
 Plugin Name: Wright Post Notice
 Plugin URI: https://onedotstores.com
 Description: Dispay a custom message above our post.
 Version: 0.1.0
 Author: Wright
 Author URI: https://onedotstores.com
 License: GPLv2 or later 
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

require_once(plugin_dir_path(__FILE__) . 'class-wright-post-notice.php');

function wright_post_notice_start()
{
    $post_notice = new Wright_Post_Notice();
    $post_notice->initialize();
}

wright_post_notice_start();
