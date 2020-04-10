<?php

class Wright_Post_Notice_Editor
{
    public function initialize()
    {
        add_action('add_meta_boxes', [$this, 'add_meta_box']);
        add_action('save_post', [$this, 'save_post_notice']);
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

        $post_notice = $_POST['wright-post-notice-editor'];
        $post_notice = stripslashes(strip_tags($post_notice));
        update_post_meta($post_id, 'wright-post-notice', $post_notice);
    }

    public function user_can_save($post_id)
    {
        $is_valid_nonce = (isset($_POST['wright-post-notice-nonce'])) && wp_verify_nonce(
            $_POST['wright-post-notice-nonce'],
            'tutsplus-post-notice-save'
        );
        $is_autosave = wp_is_post_autosave($post_id);
        $is_revision = wp_is_post_revision($post_id);

        return !($is_autosave || $is_revision) && $is_valid_nonce;
    }
}
