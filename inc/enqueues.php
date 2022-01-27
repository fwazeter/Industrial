<?php
/**
 * Enqueue Styles for theme front end.
 *
 * @package industrial
 * @since 0.0.1
 */
if ( ! function_exists( 'wf_styles' ) ) :

    /**
     * Enqueue Styles.
     *
     * @return void
     */
    function wf_styles() {

        // Register theme stylesheet
        wp_register_style(
            'wf-style',
            get_theme_file_uri( 'style.css' ),
            array(),
            INDUSTRIAL_VERSION
        );

        // Add styles inline.
        wp_add_inline_style( 'wf-style', wf_get_font_face_styles() );

        // Enqueue theme stylesheet
        wp_enqueue_style( 'wf-style');
    }
    add_action( 'wp_enqueue_scripts', 'wf_styles' );

endif;

if ( ! function_exists( 'wf_editor_styles' ) ) :

    /**
     * Enqueue editor styles.
     *
     * @return void
     */
    function wf_editor_styles() {

        // Add styles inline.
        wp_add_inline_style( 'wp-block-library', wf_get_font_face_styles() );
    }
    add_action( 'admin_init', 'wf_editor_styles' );

endif;

if ( ! function_exists( 'wf_get_font_face_styles' ) ) :

    /**
     * Get font face styles.
     * Called by wf_styles() & wf_editor_styles().
     *
     * @return string
     */
    function wf_get_font_face_styles(): string {

        return "
		@font-face{
				font-family: 'Questrial';
				font-weight: 400;
				font-style: normal;
				font-stretch: normal;
				src: url('" . get_theme_file_uri( 'assets/fonts/Questrial-Regular.woff2' ) . "') format('woff2');
		}
		";
    }
endif;

function wf_register_block_styles() {
    wp_enqueue_script(
        'rich-editor',
        get_theme_file_uri( 'inc/block-styles/reels.js' ),
        array( 'wp-blocks', 'wp-dom' ),
        INDUSTRIAL_VERSION,
        true
    );
}
add_action( 'enqueue_block_editor_assets', 'wf_register_block_styles' );


/**
 * Removing wp-emoji extra unnecessary loading.
 *
 * @since 0.0.3
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );