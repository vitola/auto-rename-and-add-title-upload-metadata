<?php

defined('ABSPATH') || exit;

final class ARATUM_File_Renamer
{
    public static function init()
    {
        add_filter('wp_handle_upload_prefilter', [self::class, 'rename']);
    }

    public static function rename($file)
    {
        if (empty($file['name'])) {
            return $file;
        }

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (empty($extension)) {
            return $file;
        }

        $file['name'] = gmdate('YmdHis') . '.' . $extension;

        return $file;
    }
}
