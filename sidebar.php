<aside class="sidebar col-md-4">
                <div class="widget redes-sociales">
                    <div class="titulo-section">
                        <h3>Siguenos</h3>
                        <div class="redes-sociales">
                            <a class="yt" href="https://youtube.com"><i class="fab fa-youtube icono"></i>
                                <span class="seguidores">130k</span>
                            </a>
                            
                            <a class="fb" href="https://facebook.com/movil-ml" target="_blank"><i class="fab fa-facebook-square icono"></i>
                                <span class="seguidores">21k</span>
                            </a>
                            <a class="wt" href=""><i class="fab fa-whatsapp icono"></i>
                                <span class="seguidores">16k</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget boletin">
                    <div class="titulo-section">
                        <h3>Suscribete</h3>
                        <form action="" class="formulario">
                            <label for="email">Suscribete a nuestro boletín</label>
                            <input type="email" id="email" placeholder="Correo electronico" required>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
<!-- 
                <div class="widget ad">
                    <div class="contenedor-ad">
                        <a href=""> <img src="<?php bloginfo('template_url'); ?>/img/ad2.jpg" alt="" width="300px"> </a>
                    </div>
                </div> -->
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Formulario') ) : endif; ?>

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : endif; ?>
                    <!-- Si la funcion de dynamic_sidebar existe o si tenemos un sidebar, ejecutalo -->
            </aside>