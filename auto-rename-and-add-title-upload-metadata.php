<?php
/**
 * Plugin Name: ARATUM Auto Rename and Add Title Upload Metadata
 * Description: Automatically renames uploaded images using a timestamp, sets media title from filename, and fills caption from embedded metadata.
 * Version: 0.0.1
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: Alex Vitola
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: auto-rename-and-add-title-upload-metadata
 */

defined( 'ABSPATH' ) || exit;

define( 'ARATUM_VERSION', '0.0.1' );
define( 'ARATUM_PATH', plugin_dir_path( __FILE__ ) );
define( 'ARATUM_URL', plugin_dir_url( __FILE__ ) );

require_once ARATUM_PATH . 'includes/class-plugin.php';

ARATUM_Plugin::init();
