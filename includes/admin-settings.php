<?php
function custom_youtube_embed_frontend_menu() {
    add_menu_page(
        'YouTube Embed Settings',
        'YouTube Embed',
        'manage_options',
        'custom-youtube-embed-frontend',
        'custom_youtube_embed_frontend_settings_page'
    );
}
add_action('admin_menu', 'custom_youtube_embed_frontend_menu');

function custom_youtube_embed_frontend_settings_page() {
    ?>
    
    <div class="wrap">
        <h1>YouTube Embed Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('custom_youtube_embed_frontend_group');
            do_settings_sections('custom-youtube-embed-frontend');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function custom_youtube_embed_frontend_settings_init() {
    register_setting('custom_youtube_embed_frontend_group', 'custom_youtube_embed_frontend_url');

    add_settings_section(
        'custom_youtube_embed_frontend_section',
        'YouTube Video Settings',
        'custom_youtube_embed_frontend_success_notice',
        'custom-youtube-embed-frontend'
    );

    add_settings_field(
        'custom_youtube_embed_frontend_field',
        'YouTube Video URL',
        'custom_youtube_embed_frontend_field_callback',
        'custom-youtube-embed-frontend',
        'custom_youtube_embed_frontend_section'
    );
}

add_action('admin_init', 'custom_youtube_embed_frontend_settings_init');

function custom_youtube_embed_frontend_field_callback() {
    $url = get_option('custom_youtube_embed_frontend_url');
    echo '<input type="text" name="custom_youtube_embed_frontend_url" value="' . esc_attr($url) . '" />';
}

function custom_youtube_embed_frontend_success_notice() {
    if (!isset($_GET['settings-updated'])) {
        return; // Exit if settings were not updated
    }
    ?>
    <div class="updated notice is-dismissible">
        <p><strong>Success!</strong> The YouTube video URL has been updated.</p>
    </div>
    <?php
}
