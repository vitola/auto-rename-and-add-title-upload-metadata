<?php

defined('ABSPATH') || exit;

final class AVUM_File_Renamer
{
    public static function init()
    {
        add_filter('sanitize_file_name', [self::class, 'rename'], 999);
    }

    public static function rename($filename)
    {
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (empty($extension)) {
            return $filename;
        }

        return gmdate('YmdHis') . '.' . $extension;
    }
}
