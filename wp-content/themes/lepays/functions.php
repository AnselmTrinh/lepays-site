<?php

// Ajoute une fonction pour charger les scripts et les styles
function load_scripts() {

    // Charge le fichier CSS principal
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );

    // Charge le fichier JavaScript principal
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );

}
// Ajoute l'action pour charger les scripts et les styles
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Ajoute une fonction pour créer un menu
function register_my_menu() {
    register_nav_menu( 'header-menu', __( 'Header Menu' ) );
}
// Ajoute l'action pour créer un menu
add_action( 'init', 'register_my_menu' );

// Ajoute une fonction pour créer une zone de widget
function my_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'theme_name' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
// Ajoute l'action pour créer une zone de widget
add_action( 'widgets_init', 'my_widgets_init' );

// Ajoute une fonction pour personnaliser la longueur de l'extrait
function custom_excerpt_length( $length ) {
    return 20;
}
// Ajoute un filtre pour personnaliser la longueur de l'extrait
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Ajoute une fonction pour personnaliser la fin de l'extrait
function custom_excerpt_more( $more ) {
    return '...';
}
// Ajoute un filtre pour personnaliser la fin de l'extrait
add_filter( 'excerpt_more', 'custom_excerpt_more' );

?>

<!-- elementor -->