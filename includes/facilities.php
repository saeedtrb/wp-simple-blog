<?php 
/*
 Registe sidebar
 */
if( function_exists( "register_sidebar" ) ){
    $sidebars = array(
        array(
            "name"          => "ستون کناری",
            "id"            => "main-side",
            'before_title'  => '<header><h5 class="widget-title">',
            'after_title'   => '</h5></header>',
            'before_widget' => '<div class="well bg-wihte widget-container">',
            'after_widget'  => '</div>',
        )
    );

    foreach ( $sidebars as $sidebar ){
        register_sidebar( $sidebar );
    }
}
/*
Register Menus
 */
function st_register_menu(){
    $menus = array(
        array(
            'main-menu' => "منو اصلی",
        )
    );

    foreach ( $menus as $menu ){
        register_nav_menus( $menu );
    }

}

if ( function_exists( 'add_theme_support' ) ){
	add_theme_support('post-thumbnails');
}
add_action( 'init' , 'st_register_menu');
?>