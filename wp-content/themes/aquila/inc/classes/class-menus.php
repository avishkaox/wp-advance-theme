<?php

/**
 * Enqueue theme assets
 * 
 * @package Aquila
 */


namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Menus
{
    use Singleton;

    protected function __construct()
    {
        //load class
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        // Actions and filters can be added here

        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus()
    {
        // Register menus
        register_nav_menus([
            'aquila-header-menu' => esc_html__('Header Menu', 'aquila'),
            'aquila-footer-menu' => esc_html__('Footer Menu', 'aquila'),
        ]);
    }

    public function get_menu_id($location)
    {
        // Get the menu ID by location
        $locations = get_nav_menu_locations();
        
        $menu_id = $locations[$location] ?? null;

        return $menu_id;
    }
}
