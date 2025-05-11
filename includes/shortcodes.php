<?php
function custom_youtube_embed_frontend_shortcode() {
    $url = get_youtube_video_url();
    if (!$url) {
        return '<p>No video URL set.</p>';
    }
    return '
    <iframe width="560" height="315" loading="lazy" src="' . esc_url($url) . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
    </iframe>
    ';
    #return '<iframe width="560" height="315" src="' . esc_url($url) . '" frameborder="0" allowfullscreen></iframe>';
}
add_shortcode('youtube_embed', 'custom_youtube_embed_frontend_shortcode');