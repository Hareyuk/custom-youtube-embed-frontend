<?php
function process_youtube_url($url) {
    if (str_contains($url, 'youtu.be')) {
        $url = str_replace("youtu.be/", "youtube.com/embed/", $url);
    }
    if (str_contains($url, 'watch?v=')) {
        $url = str_replace("watch?v=", "embed/", $url);
    }
    if (str_contains($url, '&list=')) {
        $pos = strpos($url, '&list=');
        $textToRemove = substr($url, $pos);
        $url = str_replace($textToRemove, "", $url);
    }
    if (str_contains($url, '?si=')) {
        $pos = strpos($url, '?si=');
        $textToRemove = substr($url, $pos);
        $url = str_replace($textToRemove, '', $url);
    }
    if (str_contains($url, '&t=')) {
        $pos = strpos($url, '&t=');
        $textToRemove = substr($url, $pos);
        $url = str_replace($textToRemove, '', $url);
    }
    if (str_contains($url, '&amp;')) {
        $pos = strpos($url, '&amp;');
        $textToRemove = substr($url, $pos);
        $url = str_replace($textToRemove, '', $url);
    }
    if (str_contains($url, '&feature')) {
        $pos = strpos($url, '&feature');
        $textToRemove = substr($url, $pos);
        $url = str_replace($textToRemove, '', $url);
    }
    return $url;
}
