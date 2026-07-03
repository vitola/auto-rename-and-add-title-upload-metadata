=== ARATUM Auto Rename and Add Title Upload Metadata ===
Contributors: Alex Vitola
Tags: media, images, rename, metadata, upload
Requires at least: 6.0
Tested up to: 7.0
Stable tag: 0.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatically renames uploaded images and extracts metadata for media titles and captions.

== Description ==

ARATUM Auto Rename and Add Title Upload Metadata automatically processes uploaded images in WordPress.

It performs three main actions:

* Renames uploaded image files using a unique timestamp
* Sets the media title based on the filename
* Fills the media caption using embedded image metadata (EXIF/IPTC), such as copyright, credit, creator or title

The plugin is lightweight, automatic, and requires no configuration.

== Installation ==

1. Upload the plugin folder to /wp-content/plugins/
2. Activate the plugin through the WordPress admin panel
3. Upload an image and the plugin will handle everything automatically

== Frequently Asked Questions ==

= Does this plugin overwrite existing titles or captions? =
Yes, it automatically sets title and caption on upload based on filename and metadata.

= Does it support all image formats? =
It supports standard WordPress image types (JPG, PNG, WEBP where metadata is available).

== Changelog ==

= 0.0.1 =
* Initial public-ready version
* Automatic file renaming using timestamp
* Media title generation from filename
* Caption extraction from EXIF/IPTC metadata
