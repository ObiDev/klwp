<?php

function register_my_menu_primary() {

  register_nav_menu( 'primary', __( 'Primary Menu', 'nazwa szablonu' ) );
}
add_action( 'after_setup_theme', 'register_my_menu_primary' );

?>