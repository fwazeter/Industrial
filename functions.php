<?php

/**
 * Set theme version to global variable.
 * @package vibe
 * @since 0.0.1
 */
define( 'INDUSTRIAL_VERSION', wp_get_theme()->get( 'Version' ) );

// Theme Support
require_once 'inc/theme-support.php';

// Enqueue stylesheets
require_once 'inc/enqueues.php';

// Register Block Patterns
//require_once 'inc/block-patterns/block-patterns.php';