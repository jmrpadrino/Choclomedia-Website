<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php _e('Somos una empresa en crecimiento dedicada al diseño y desarrollo de p&aacute;ginas web en Quito.','choclomedia'); ?>">
        <meta name="author" content="Choclomedia.com">
        <title><?php _e('P&aacute;ginas web en Quito | Diseño Desarrollo WordPress'); ?> | Choclomedia</title>
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-128.png" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#222222" />
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/images/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/images/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/images/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/images/mstile-310x310.png" />
        <link rel="alternate" href="https://foodtruckquito.com.ec/" hreflang="es" />
        <link rel="alternate" href="https://foodtruckquito.com.ec/en/" hreflang="en" />
        <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body id="top">        
        <nav>          
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-nav-initial-state">
                            <nav class="navbar-fixed-top">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#choclomedia-collapse" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="choclomedia-collapse">
                                    <ul class="desktop-navigation navbar-nav">
                                        <li class="desktop-navigation-item brand-name"><span class="choclo">Choclo</span><span class="media">media</span></li>
                                        <li class="desktop-navigation-item"><a href="<?php echo home_url(); ?>"><?php _e('Inicio', 'choclomedia'); ?></a></li>
                                        <li class="desktop-navigation-item dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _e('Servicios','choclomedia'); ?> <span class="fa fa-chevron-down"></span></a>
                                            <ul class="dropdown-menu">
                                                <?php 
                                                    $args = array(
                                                        'post_type' => 'service',
                                                        'posts_per_page' => 7,
                                                        'orderby' => 'post_date',
                                                        'order' => 'ASD'
                                                    );
                                                    $services = get_posts( $args );
                                                    foreach( $services as $servicio ){
                                                        $service_link = get_post_permalink( $servicio->ID, false );
                                                        echo '<li><a href="' . $service_link . '" alt="'. $servicio->post_title .'">' . $servicio->post_title . '</a></li>';   
                                                    }
                                                ?>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="<?php echo esc_url( home_url( _x('servicios','choclomedia') ) ); ?>" alt="<?php _e('Servicios','choclomedia'); ?>"><?php echo _e('Todos los Servicios','choclomedia'); ?></a></li>
                                            </ul>
                                        </li>
                                        <li class="desktop-navigation-item"><a href="#<?php _e('clientes','choclomedia'); ?>"><?php _e('Clientes', 'choclomedia'); ?></a></li>
                                        <li class="desktop-navigation-item"><a href="#<?php _e('contacto','choclomedia'); ?>"><?php _e('Contacto', 'choclomedia'); ?></a></li>
                                        <li class="separator"></li>
                                        <li class="desktop-navigation-item visible-xs"><a class="lang-link" href="http://choclomedia.com/es/">ESP</a></li>
                                        <li class="desktop-navigation-item visible-xs"><a class="lang-link" href="en/">ENG</a></li>
                                    </ul>
                                    <div class="top-contact text-right pull-right">
                                        <span class="lang-icon fa fa-globe"></span>
                                        <?php dynamic_sidebar( 'subscribe' ); ?>
                                        <a class="top-contact-link" href="#<?php _e('contacto','choclomedia'); ?>" alt="Contact Choclomedia">
                                            <i class="fa fa-send"></i>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <main>