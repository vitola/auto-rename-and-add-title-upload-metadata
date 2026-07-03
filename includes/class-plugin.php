<?php

defined('ABSPATH') || exit;

final class ARATUM_Plugin
{
    public static function init()
    {
        require_once ARATUM_PATH . 'includes/class-file-renamer.php';
        require_once ARATUM_PATH . 'includes/class-media-metadata.php';

        ARATUM_File_Renamer::init();
        ARATUM_Media_Metadata::init();
    }
}
