<?php get_header(); ?>
    <div class="container error404">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1 class="error-404-title">404</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt="error 404">
                <h2 class="error-404-subtitle">No no, eso aqui no existe!</h2>
                <p>Lo que busca fue movido, borrado o nunca existió!</p>
                <a class="goto-button" href="#" onclick="window.history.back()">Regresar</a>
                <p>ó</p>
                <p>Le invitamos a ver algunos de nuestros trabajos.</p>
                <p><span class="fa fa-chevron-down fa-3x bounce"></span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                
            </div>
        </div>
    </div>
<?php get_template_part('templates/customer-section'); ?>
<?php get_template_part('templates/contact-section'); ?>
<?php get_footer(); ?>