<?php

class Wright_Post_Notice
{
    public function initialize()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueue_styles']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    public function enqueue_styles()
    {
        wp_enqueue_style('wright-post-notice-admin', plugins_url('wright-post-notice/assets/css/admin.css'), [], '0.1.0');
    }

    public function enqueue_scripts()
    {
        wp_enqueue_script('wright-post-notice-admin', plugins_url('wright-post-notice/assets/js/admin.js'), ['jquery'], '0.1.0');
    }
}
