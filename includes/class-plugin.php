<?php

defined('ABSPATH') || exit;

final class AVUM_Plugin
{
    public static function init()
    {
        require_once AVUM_PATH . 'includes/class-file-renamer.php';
        require_once AVUM_PATH . 'includes/class-media-metadata.php';

        AVUM_File_Renamer::init();
        AVUM_Media_Metadata::init();
    }
}
