<?php get_header(); ?>
<?php the_post(); ?>
<?php 
    if ( has_post_thumbnail() ){
        $url = get_the_post_thumbnail_url( $post , 'post-thumbnail' );
    }else{
        $url = 'http://placehold.it/700x450/222222?text=%20';
    }
?>
            <style>
                .article-header{
                    background-image: url(<?php echo $url; ?>);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
            </style>
            <article class="article-container">
                <div class="article-header">
                    <div class="header-overlay"></div>
                    <?php the_title('<h1>','</h1>'); ?>
                    <?php the_excerpt(); ?>     
                </div>
                <div class="article-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <?php get_template_part('templates/customer-section'); ?>
            <?php get_template_part('templates/contact-section'); ?>
<?php get_footer(); ?>