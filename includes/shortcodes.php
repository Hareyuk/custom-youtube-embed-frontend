<?php
function custom_youtube_embed_frontend_shortcode() {
    $url = get_youtube_video_url();
    if (!$url) {
        return '<p>No video URL set.</p>';
    }

    return 
    '
    <figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio" style="margin-top:0;margin-bottom:0"><div class="wp-block-embed__wrapper">
    <iframe title="Youtube Video Player" style="width: 100%; height: 100%; aspect-ratio: 16 / 9; margin: 0 auto;" src="' . esc_url($url) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" data-ruffle-polyfilled=""></iframe>
    </div></figure>
    ';
}
add_shortcode('custom_youtube_embed', 'custom_youtube_embed_frontend_shortcode');