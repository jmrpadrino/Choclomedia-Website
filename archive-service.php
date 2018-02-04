<?php get_header(); ?>
            <style>
                .article-container{
                    background-image: url(<?php echo get_template_directory_uri(); ?>/images/chocomedia-servicio-wordpress.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
            </style>
            <section class="article-container">
                <div class="article-header">
                    <div class="header-overlay"></div>
                    <h1><?php _e('Servicios','choclomedia'); ?></h1>
                    <p><?php _e('Aquí en <span class="choclo">Choclo</span><span class="media">media</span> reconocemos que hay muchos retos que enfrentan nuestros usuarios, nuestra familia. Es por eso que estamos felices de anunciar que estamos reinventando nuestra lista de servicios. Vamos a hacer el trabajo personalizado para ayudarle en su desarrollo de <strong>WordPress</strong>.', 'choclomedia'); ?></p>   
                </div>
            </section>
            <section class="archive-loop article-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <?php if ( have_posts() ): $cont = 1; while ( have_posts() ): the_post(); ?>                            
                            <article>
                                <div class="col-sm-4">
                                    <div class="archive-article-wrapper archive-post-item">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <?php 
                                                    if ( has_post_thumbnail() ){
                                                        $url = get_the_post_thumbnail_url( $post , 'medium' );
                                                    }else{
                                                        $url = 'http://placehold.it/700x450/222222?text=%20';
                                                    }
                                                ?>
                                                <div class="archive-thumbnail">
                                                    <img class="img-responsive" src="<?php echo $url; ?>" alt="<?php echo get_the_title(); ?>">
                                                </div>
                                                <div class="item-card link-card">
                                                    <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php the_title(); ?></a>
                                                </div>
                                                <div class="item-card copy-card">
                                                    <?php the_excerpt(); ?>
                                                </div>
                                                <div class="item-card archive-article-cta">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <a class="archive-cta cta-wants" href="#"><spanc class="fa fa-heart"></spanc> Lo quiero</a>
                                                        </li>
                                                        <li>
                                                            <a class="archive-cta " href="<?php the_permalink(); ?>"><spanc class="fa fa-eye"></spanc> Ver mas...</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php if ( $cont % 3 == 0 ){ ?>
                            <div class="clearfix"></div>
                            <?php } ?>
                            <?php $cont++; endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_template_part('templates/customer-section'); ?>
            <?php get_template_part('templates/contact-section'); ?>
<?php get_footer(); ?>