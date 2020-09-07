<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/04730c9c8a.js" crossorigin="anonymous"></script>
    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Oswald:wght@200;400;700&display=swap" rel="stylesheet">

    <!-- CSS  -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
    <title>
        <?php if(is_home()){
                        echo get_bloginfo('name');  //Obtiene el titulo de las configuiraciones de wordpress

                }else if(is_single()){
                        echo the_title();           //Obtiene el nombre de cada uno de los singles 

                }else{
                        echo get_bloginfo('name');  
                    }?>
    </title>

    <?php wp_head(); ?>    <!-- Agrega un espacio en la parte de arriba para las herramientas de edición -->
</head>

<body>

<header>
        <div class="container">
            <div class="row align-items-center">
                <div class="logo col-xs-12 col-md-6">
                    <a href="index.php" alt="Logo Movil-ML"><img src="<?php bloginfo('template_url'); ?>/img/Logo-ML.png" alt="Movil-ML"></a>
                </div>
                <div class="redes-sociales col-xs-12 col-md-6">
                    <a class="yt" href="https://youtube.com"><i class="fab fa-youtube"></i></a>
                    <a class="fb" href="https://facebook./movil-ml" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a class="wt" href="https://wa.me/+523321476165?text=Buenos%20dias%20me%20interesa%20el%20producto%20"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="menu de navegacion">
                    <span class="navbar -toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto d-flex justify-content-around">
                        <!-- <li class="nav-item">
                            <a href="" class="nav-link">HTML</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">CSS</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">JAVASCRIPT</a>
                        </li> -->

                        <!-- Submenu -->
                        <!-- <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" id="menu-categorias"
                            data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false">JQUERY</a>

                            <div class="dropdown-menu" aria-labelledby="menu-categorias">
                                <a href="" class="dropdown-item">HTML</a>
                                <a href="" class="dropdown-item">CSS</a>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a href="" class="nav-link">Contacto</a>
                        </li> -->
                    <!-- </ul> --> 

                    <?php wp_nav_menu(array(
                        'container' => false,
                        'menu_class' => '<div class="collapse navbar-collapse" id="navbar"> </div>',
                        'items_wrap' => '<ul class="navbar-nav mr-auto d-flex justify-content-around">%3$s</ul>',
                        'theme_location' => 'menu-top'

                    ));?>
 
                    <form action="" class="form-inline my-2 my-lg-0">
                        <input type="text" class="form-control mr-sm-2" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-primary my-2 my-sm-0">Buscar</button>
                    </form>
                </div> 
            </div>
        </nav>

        <div class="ad container hidden-xs">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="google ads" width="300px">
                </div>
            </div>
        </div>

    </header>