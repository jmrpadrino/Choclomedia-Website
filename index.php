<?php get_header(); ?>
            <header>
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <a class="brand-link" href="<?php echo home_url(); ?>">
                                    <img class="brand-logo" src="<?php echo get_template_directory_uri(); ?>/images/choclomedia-logo.png" alt="Choclomedia - Logo">
                                </a> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h1 class="website-title"><?php _e('Somos diseño y desarrollo de <span class="yellow-words">páginas web</span> en <span class="yellow-words">Quito</span>.','choclomedia');?></h1>
                                <p class="website-title"><?php _e('Sabemos que nos merecemos una <span class="yellow-words">mejor oportunidad</span>, por eso usamos la <span class="yellow-words">mejor tecnología web</span>, para impulsar su proyecto.','choclomedia'); ?></p>
                                <p class="website-title findout"><?php _e('Haremos crecer su empresa, entérese como','choclomedia'); ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="text-center"><a class="goDown" href="#<?php _e('beneficios','choclomedia'); ?>"><span class="fa fa-chevron-down fa-3x bounce"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section id="<?php _e('beneficios','choclomedia'); ?>">
                <div class="beneficios">
                    <div class="hero-beneficios">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-2 text-right">
                                    <span class="son"><?php _e('Son','choclomedia'); ?></span>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <span class="cinco">5</span>
                                </div>
                                <div class="col-sm-8">
                                    <span class="beneficios-copy"><?php _e('los beneficios <br/> que obtendrás <br /> con','choclomedia'); ?> <span class="choclo">Choclo</span><span class="media">media</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-beneficios">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div id="beneficios" class="owl-carousel owl-theme">
                                        <div class="slide">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <span class="benefits-number">1</span>
                                                </div>
                                                <div class="col-md-10">
                                                    <p class="benefits-paragraph"><?php _e('Obtienes una base de clientes más grande.', 'choclomedia'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="row">
                                                <div class="col-sm-2 text-right">
                                                    <span class="benefits-number">2</span>
                                                </div>
                                                <div class="col-md-10">
                                                    <p class="benefits-paragraph"><?php _e('Educas a los consumidores sobre tú negocio.', 'choclomedia'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="row">
                                                <div class="col-sm-2 text-right">
                                                    <span class="benefits-number">3</span>
                                                </div>
                                                <div class="col-sm-10">
                                                    <p class="benefits-paragraph"><?php _e('Costo de promoción y comercialización eficaz.', 'choclomedia'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="row">
                                                <div class="col-sm-2 text-right">
                                                    <span class="benefits-number">4</span>
                                                </div>
                                                <div class="col-sm-10">
                                                    <p class="benefits-paragraph"><?php _e('Mejoras la comunicación con tus clientes.', 'choclomedia'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="row">
                                                <div class="col-sm-2 text-right">
                                                    <span class="benefits-number">5</span>
                                                </div>
                                                <div class="col-sm-10">
                                                    <p class="benefits-paragraph"><?php _e('Mantienes ventaja sobre tus competidores.', 'choclomedia'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="row">
                                                <div class="col-sm-12 <text-center></text-center>">
                                                    <a class="discover-link" href="#<?php _e('contacto','choclomedia'); ?>">
                                                        <span class="discover"><?php _e('Descubre', 'choclomedia'); ?></span>
                                                        <span class="howto"><?php _e('c&oacute;mo impulsar tu organizaci&oacute;n', 'choclomedia'); ?></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="<?php _e('servicios','choclomedia'); ?>" class="services">
                <div class="services-frame">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <article>
                                    <header>
                                        <h2 class="section-title"><?php _e('Servicios', 'choclomedia'); ?></h2>
                                    </header>
                                    <p class="service-paragraph"><?php echo _e('Nuestros servicios de diseño y desarrollo de páginas web siempre serán de una calidad excepcional, debido a que nos esforzamos por lograr la excelencia en todo lo que hacemos, con el fin de agregar un valor significativo a su negocio.', 'choclomedia'); ?></p>
                                    <a class="CTAHablemos" href="<?php echo esc_url( home_url( _x('servicios','choclomedia') ) ); ?>" alt="<?php _e('Hablemos','choclomedia'); ?>"><?php echo _e('Conozca nuestros servicios','choclomedia'); ?></a>
                                </article>      
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="features">
                <article>
                    <div class="features-frame">
                        <div class="container choclo-right">
                            <div class="row">
                                <div class="col-md-12">
                                    <header>
                                        <h2 class="section-title"><?php echo _e('<span class="orange">Su página web</span> <br />a medida','choclomedia'); ?></h2>
                                    </header>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><?php _e('Hacemos diseño y desarrollo de paginas web dinámico y de vanguardia para organizaciones y negocios de todo tipo.', 'choclomedia'); ?></p>
                                    <p class="yellow-text"><strong><?php _e('Podemos adaptar requisitos complejos a una solución profesional fácil de administrar.', 'choclomedia'); ?></strong></p>
                                    <a class="CTAHablemos" href="#<?php _e('contacto','choclomedia'); ?>" alt="<?php _e('Díganos que necesita?','choclomedia'); ?>"><?php echo _e('Díganos que necesita?','choclomedia'); ?></a>
                                </div>
                                <div class="col-md-6">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/features.png" alt="Choclomedia products">
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <?php get_template_part('templates/customer-section'); ?>
            <?php get_template_part('templates/contact-section'); ?>
<?php get_footer(); ?>
