<div id="wright-post-notice-preview">
</div>
<br>
<textarea name="wright-post-notice-editor"><?php echo get_post_meta(get_the_ID(), 'wright-post-notice', true) ?></textarea>
<?php wp_nonce_field('wright-post-notice-save', 'wright-post-notice-nonce', $referer, $echo) ?>