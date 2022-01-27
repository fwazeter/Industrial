<?php
/**
 * Block themes do not use php templates, however
 * an index.php is included as a fallback & to
 * avoid WordPress thinking the theme is broken.
 *
 * @package wires
 * @since 0.0.1
 */

if ( current_user_can( 'activate_plugins' ) ) {
	esc_html_e(
		'This theme was built for WordPress full site editing. 
        You need to install and activate the Gutenberg plugin to make it work.', 'wires' );
}
