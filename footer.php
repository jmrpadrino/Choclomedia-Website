        </main>
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 copyright">Copyright &copy; Choclomedia 2017. <?php _e('Todos los derechos reservados', 'choclomedia'); ?>.</div>
                        <div class="col-sm-6">
                            <nav>
                                <ul class="footer-navigation pull-right">
                                    <li class="desktop-navigation-item"><a href="<?php echo home_url(); ?>"><?php _e('Inicio', 'choclomedia'); ?></a></li>
                                    <li class="desktop-navigation-item"><a href="<?php echo esc_url( home_url( _x('servicios','choclomedia') ) ); ?>" alt="<?php _e('Servicios','choclomedia'); ?>"><?php echo _e('Servicios','choclomedia'); ?></a></li>
                                    <li class="desktop-navigation-item"><a href="#<?php _e('clientes','choclomedia'); ?>"><?php _e('Clientes', 'choclomedia'); ?></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-93026422-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>