<?php

defined('ABSPATH') || exit;

class AVUM_Media_Metadata
{
    public static function init()
    {
        add_action('add_attachment', [self::class, 'handle_attachment']);
    }

    public static function handle_attachment($attachment_id)
    {
        $post = get_post($attachment_id);

        if (!$post || $post->post_type !== 'attachment') {
            return;
        }

        /**
         * =========================
         * PEGAR ARQUIVO ORIGINAL (IMPORTANTE)
         * =========================
         */
        $file = get_attached_file($attachment_id);

        if (!$file || !file_exists($file)) {
            return;
        }

        /**
         * =========================
         * TÍTULO (CORRIGIDO - SEM "-scaled")
         * =========================
         */
        $filename = pathinfo($file, PATHINFO_FILENAME);

        // remove sufixo -scaled se existir
        $filename = preg_replace('/-scaled$/', '', $filename);

        if (!empty($filename)) {
            wp_update_post([
                'ID' => $attachment_id,
                'post_title' => sanitize_text_field($filename)
            ]);
        }

        /**
         * =========================
         * CAPTION (LEGENDAS EXIF/IPTC)
         * =========================
         */
        $legenda = '';

        if (function_exists('wp_read_image_metadata')) {
            $meta = wp_read_image_metadata($file);

            if (is_array($meta)) {

                if (!empty($meta['copyright'])) {
                    $legenda = $meta['copyright'];
                }

                if (empty($legenda) && !empty($meta['credit'])) {
                    $legenda = $meta['credit'];
                }

                if (empty($legenda) && !empty($meta['creator'])) {
                    $legenda = $meta['creator'];
                }

                if (empty($legenda) && !empty($meta['title'])) {
                    $legenda = $meta['title'];
                }
            }
        }

        if (!empty($legenda)) {
            wp_update_post([
                'ID' => $attachment_id,
                'post_excerpt' => sanitize_text_field($legenda)
            ]);
        }
    }
}
