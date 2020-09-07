
<?php 


// Agregamos el Soporte para Thumbnails
add_theme_support( 'post-thumbnails' );

// Agregamos un tamaño de imagen y permitimos que la imagen se corte si no cabe.
add_image_size( 'homepage-thumb', 745, 372, true );


// Registrar el menu 
register_nav_menus(array(
    'menu-top' => 'Menu Principal',
    'menu-footer' => 'Menu Footer'
));

// Registrar sidebar

register_sidebar(array(
    'name' => 'Header',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));


register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '<div class="widget"><div class="titulo-section">',
    'after_widget' => '</div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

register_sidebar(array(
    'name' => 'Formulario',
    'before_widget' => '<div class="widget boletin"><div class="titulo-section">',
    'after_widget' => '</div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));


register_sidebar(array(
    'name' => 'Footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

?>

