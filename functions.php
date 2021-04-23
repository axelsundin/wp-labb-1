<?php

add_theme_support( 'post-thumbnails' ); // gör utvald bild tillgängligt i temat
add_theme_support( 'menus' ); // gör menyer tillgängliga i temat
add_theme_support( 'widgets' ); // gör widgetar tillgängliga i temat

register_sidebar( // widget för sökformulär
    array(
        'id' => 'customsearch',
        'name' => 'Sökformulär',
        'before_widget' => '<form id="searchform" class="searchform" action="'.get_bloginfo('wpurl').'">', //action gör att sökningar görs på hela siden isället för url'en man står på
        'after_widget' => '</form>',
        'before_title' => '<span class="hidden">',
        'after_title' => '</span>'
        )
);

register_sidebar( // widget för sidomenyer
        array(
        'id' => 'customcategories',
        'name' => 'Kategorilista'
        )
);

register_sidebar( // widget för sociala medier
    array(
    'id' => 'socialmedia',
    'name' => 'Social media-lista',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
    )
);

register_nav_menus( // gör att de registrerade menyerna kan användas
    array(
    'huvudmeny' => 'Huvudmeny',
    'meny-undersidor' => 'Meny Undersidor'
    )
);

?>