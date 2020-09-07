<!-- Header -->
    <?php include 'header.php';?>

    <div class="container">
        <div class="row">
            <section class="main col-md-8">
                <div class="row titulo-section">
                    <div class="col-md-12">
                        <h3>Lo más reciente</h3>
                    </div>
                </div>

                <section class="row posts">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <!-- Articulo -->
                    <article class="col-md-6 post">
                            <div class="contenedor">
                                <div class="thumb">
                                    <a href=" <?php the_permalink(); ?> ">
                                    <?php 
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'homepage-thumb' );
                                            }
                                     ?></a>
                                </div>

                                <div class="info">
                                    <h2 class="titulo"><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
                                    <p class="fecha"> <?php echo get_the_date(); ?></p>
                                    <div class="extracto"> <?php echo the_excerpt(); ?> </div>
                                    <div class="categorias">
                                        <?php the_category();?>
                                    </div>
                                </div>
                            </div>
                    </article>
                    <?php endwhile; else:  ?>
                    <!-- No hay articulos -->
                    <article class="col-md-6 post">
                            <div class="contenedor">
                                <div class="info">
                                    <h2 class="titulo">El post que buscas no existe</h2>
                                    <div class="extracto"> <p>Revisa que la URL sea correcta</p> </div>
                                </div>
                            </div>
                    </article>
                    <?php endif; ?>

                       


                    <section class="row paginacion">
                        <div class="col-md-12">
                            <div class="pagination"><?php wp_pagenavi(); ?></div>
                        </div>
                    </section>
                </section>
            </section>

            <!-- Sidebar -->
            <?php include 'sidebar.php'?>

        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php';?>



