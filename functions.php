<?php

// Registro del menú de WordPress
add_theme_support( 'nav-menus' );
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(

          'main' => 'Main'

        )

    );

}
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//  Barra Principal

     if(function_exists('register_sidebar'))

          register_sidebar(array(
          'name' => 'Main Sidebar',
           'before_widget' => '<hr>',
            'after_widget' => '',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));


	
/*Habilitar thumbnails*/

add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150, true);

	// Permitir comentarios encadenados
function enable_threaded_comments(){
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
       wp_enqueue_script('comment-reply');
    }
}
add_action('get_header', 'enable_threaded_comments');
	 
	 /*PARA PODER PONER WIDGETS*/
	 
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


?>
