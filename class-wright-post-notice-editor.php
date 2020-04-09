<?php

class Wright_Post_Notice_Editor
{
    public function initialize()
    {
        add_action('add_meta_boxes', [$this, 'add_meta_box']);
        add_action('save_post' . [$this, 'save_post_notice']);
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

    public function save_post_notice($post_id)
    {
        if (!$this->user_can_save($post_id)) {
            return;
        }
    }

    public function user_can_save($post_id)
    {
    }
}
