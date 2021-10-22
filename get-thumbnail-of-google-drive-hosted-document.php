<?php
    // Does not depend on Drive SDK
    // but can be used with Drive SDK such as using the Drive SDK to get the ID.
    // This code IS NOT for mime type thumbnails.
    // This is for the Google generated thumbnail used when you are in grid view on Google Drive that actually shows a screenshot of the document.
    public static function getThumbLink($file) {
        $gid = $file->google_id;
        return 'https://drive.google.com/thumbnail?authuser=0&sz=w220&id=' . $gid;
    }
?>
