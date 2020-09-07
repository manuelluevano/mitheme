<footer>
        <!-- <div class="ad container hidden-xs"> Oculto en equipos ultra paqueños -->
            <!-- <div class="row">
                <div class="col-md-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="" width="300px">
                </div>
            </div> -->
        <!-- </div> -->

        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
                    <!-- Si la funcion de dynamic_sidebar existe o si tenemos un sidebar, ejecutalo -->


        <nav class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>Inicio</li>
                            <li>Acerca de </li>
                            <li>Sobre nosotros</li>
                            <li>Contacto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Todos los derechos reservados &copy;</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php  wp_footer(); ?>


        <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>