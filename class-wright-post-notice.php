<?php

class Wright_Post_Notice
{
    public function __construct(Wright_Post_Notice_Editor $editor)
    {
        $editor->initialize();
    }

    public function initialize()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueue_styles']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    public function enqueue_styles()
    {
        $screen = get_current_screen();
        if ('post' != $screen->id) {
            return;
        }
        wp_enqueue_style('wright-post-notice-admin', plugins_url('wright-post-notice/assets/css/admin.css'), [], '0.2.0');
    }

    public function enqueue_scripts()
    {
        $screen = get_current_screen();
        if ('post' != $screen->id) {
            return;
        }

        wp_enqueue_script('wright-post-notice-admin', plugins_url('wright-post-notice/assets/js/admin.js'), ['jquery'], '0.2.0');
    }
}
