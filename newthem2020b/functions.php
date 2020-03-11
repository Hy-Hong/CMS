<?php 
    // create function for feature
    function add_feature(){
        add_theme_support('post-thumbnails');
        
    }
    add_action('after_setup_theme','add_feature');
    
    // create menu
    function new_menu(){
        register_nav_menus(array(
            // add into Menu Settings of theme
            'primary' =>_('Primary Menu'),
            'footer' =>_('Footer Menu'),
        ));
    };
    add_action('after_setup_theme','new_menu');
?>