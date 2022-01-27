<?php

/**
 * Add theme_supports not enabled by theme.json
 * and needed for theme utility.
 *
 * May not be needed in the future for 5.9:
 * @url https://github.com/WordPress/gutenberg/blob/16633fff2c055102fc52115e6d936de0cedeb5e5/lib/compat/wordpress-5.9/default-theme-supports.php
 *
 * @since 0.0.1
 */
if ( ! function_exists( 'wf_theme_support' ) ) :

    /**
     * Add support for core block visual styles.
     * Styles load in both the editor and the front end.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#default-block-styles
     *
     * @return void
     */
    function wf_theme_support() {

        add_theme_support( 'wp-block-styles' );

    }
endif;
add_action( 'after_setup_theme', 'wf_theme_support' );