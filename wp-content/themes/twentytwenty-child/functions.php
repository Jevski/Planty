

<?php

function add_extra_item_to_nav_menu( $items, $args ) {
    //var_dump($args);exit;
    if (is_user_logged_in() && $args->menu == 'nav') {
        $items .= '<li><a href="'. get_permalink( get_option('admin_page_id') ) .'"> Admin</a></li>';
    }
    elseif (!is_user_logged_in() && $args->menu == 'nav') {
        $items .= '<li><a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '"> Sign in  /  Register</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);
 
function theme_enqueue_styles() {
wp_enqueue_style('child-style', get_template_directory_uri() . '/style.css');

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');

//- supprimer les liens Rencontrer et admin
//- Retravailler le menu nav et ne mettre que le lien de menu "Nous rencontrer" 
?>
