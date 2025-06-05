<?php

/**
 * Bootstraps the Aquila theme.
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;
// Add this line to include the trait file
require_once AQUILA_DIR_PATH . '/inc/traits/trait-singleton.php';

use AQUILA_THEME\Inc\Traits\Singleton;



class AQUILA_THEME
{
    use Singleton;

    protected function __construct()
    {
        Assets::get_instance();
        Menus::get_instance();
        //load class
        $this->set_hooks();

    }

    protected function set_hooks()
    {
        // Actions and filters can be added here

        add_action( 'after_setup_theme', [$this, 'setup_theme'] );
    }

    public function setup_theme()
    {
        // Add theme support and other setup code here
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo', [
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ] );


        add_theme_support('custom-background', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ]);
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);

        add_editor_style();
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );

        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 1240; // Set a default content width
        }
    }
}
