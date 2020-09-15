<?php
    // Creates the Menus
    function gymfitness_menus() {
        // WordPress function
        register_nav_menus( array(
            'main-menu' => 'Main Menu',
            'social-menu' => 'Social Menu',
            'child-menu' => 'Child Menu'
        ) );
    }

    // Hook (init)
    add_action( 'init', 'gymfitness_menus');