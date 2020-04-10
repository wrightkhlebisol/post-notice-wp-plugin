<?php

class Wright_Post_Notice_Display
{
    public function initialize()
    {
        add_filter('the_content', [$this, 'display_notice']);
    }

    public function display_notice($content)
    {
        $notice = get_post_meta(get_the_ID(), 'wright-post-notice', true);
        if ('' != $notice) {
            $notice_html = '<div id="wright-post-notice">';
            $notice_html .= $notice;
            $notice_html .= ' </div>';

            $content = $notice_html . $content;
        }

        return $content;
    }

    public function enqueue_styles()
    {
        wp_enqueue_style('wright-post-notice', plugins_url('wright-post-notice/assets/css/public.css'), [], '1.0.0');
    }
}
