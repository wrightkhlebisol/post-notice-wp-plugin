<?php

class Wright_Post_Notice_Editor
{
    public function initialize()
    {
        add_action('add_meta_boxes', [$this, 'add_meta_box']);
    }

    public function add_meta_box()
    {
        add_meta_box(
            'wright-post-notice',
            'Post Notice',
            [$this, 'post_notice_display'],
            'post',
            'normal',
            'high'
        );
    }

    public function post_notice_display()
    {
        require_once(plugin_dir_path(__FILE__) . 'views/wright-post-notice-editor.php');
    }
}
