<?php
/**
 * Plugin Name: Alex Vitola Upload Metadata
 * Description: Automatically renames uploaded images using a timestamp, sets media title from filename, and fills caption from embedded metadata.
 * Version: 0.9.1
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: Alex Vitola
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: alexvitola-upload-metadata
 */

defined( 'ABSPATH' ) || exit;

define( 'AVUM_VERSION', '0.9.1' );
define( 'AVUM_PATH', plugin_dir_path( __FILE__ ) );
define( 'AVUM_URL', plugin_dir_url( __FILE__ ) );

require_once AVUM_PATH . 'includes/class-plugin.php';

AVUM_Plugin::init();
