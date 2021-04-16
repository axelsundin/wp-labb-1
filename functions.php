<?php

add_theme_support( 'post-thumbnails' ); // gör utvald bild tillgängligt i temat
add_theme_support( 'menus' ); // gör menyer tillgängliga i temat
add_theme_support( 'widgets' ); // gör widgetar tillgängliga i temat

// get_sidebar(); // tänk get_header() eller get_footer() ...

// register_sidebar(); // skapar område att skapa widget på

/*dynamic_sidebar(); // tänk wp_nav_menu() */

register_nav_menus( // gör att de registrerade menyerna kan användas
    array(
    'huvudmeny' => 'Huvudmeny',
    'meny-undersidor' => 'Meny Undersidor'
    )
);

?>