<?php
/**
 * Plugin Name: Custom YouTube Embed Frontend
 * Description: Allows users to embed a YouTube video and manage the link from the backend.
 * Version: 1.1
 * Author: Axel Dumas
 */

// Include global settings file
include_once plugin_dir_path(__FILE__) . 'includes/global-settings.php';
// Include the admin settings page
include_once plugin_dir_path(__FILE__) . 'includes/admin-settings.php';
// Include the shortcode file
include_once plugin_dir_path(__FILE__) . 'includes/shortcodes.php';

global $youtube_video_url;
$raw_url = get_option('custom_youtube_embed_frontend_url'); 
$youtube_video_url = process_youtube_url($raw_url);

function get_youtube_video_url() {
    global $youtube_video_url;
    return $youtube_video_url;
}
