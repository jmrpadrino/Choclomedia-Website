<?php
    require_once('includes/choclomedia-cpt.php');

    load_theme_textdomain( 'choclomedia', get_template_directory() . '/languages/' );
    /* Theme components */
    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    add_theme_support( 'post-thumbnails' );

    function add_theme_scripts() {

        if (!is_admin())   
        {  
            wp_deregister_script('jquery');  

            // Load a copy of jQuery from the Google API CDN  
            // The last parameter set to TRUE states that it should be loaded  
            // in the footer.  
            wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', FALSE, '1.11.0', TRUE);  

            wp_enqueue_script('jquery');  
        }
        // Including Bootstrap, Owlcarousel and PrettyPhoto files
        wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all' );
        wp_enqueue_style( 'owlslider', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.2.0', null );
        wp_enqueue_style( 'owltheme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.2.0', null );
        wp_enqueue_style( 'owltransition', get_template_directory_uri() . '/css/owl.transitions.css', array(), '2.2.0', null );
        wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array ( 'jquery' ), '3.3.7', true);
        wp_enqueue_script( 'owlsliderjs', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'sticky', get_stylesheet_directory_uri() . '/js/jquery.sticky.js', array('jquery'), null, true );
        wp_enqueue_script( 'nicescroll', get_stylesheet_directory_uri() . '/js/jquery.nicescroll.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js', array('jquery'), null, true );

        // Including theme styles
        wp_enqueue_style( 'choclomedia', get_template_directory_uri() . '/css/choclomedia.css', array(), '1.1', 'all');
        wp_enqueue_style( 'choclomedia_fonts', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans', array(), '', 'all');
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_register_script( "choclomedia", get_template_directory_uri() .'/js/choclomedia.js', array('jquery') );
        wp_localize_script( 'choclomedia', 'choclomediaAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        

        wp_enqueue_script( 'choclomedia', get_template_directory_uri() . '/js/choclomedia.js', array ( 'jquery' ), '1.1', true);


        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
    

    add_filter( 'posts_orderby' , 'custom_cpt_order' );
    function custom_cpt_order( $orderby ) {
        global $wpdb;

        // Check if the query is for an archive
        if ( is_archive() && get_query_var("post_type") == "service" ) {
            // Query was for archive, then set order
            return "$wpdb->posts.ID ASC";
        }

        return $orderby;
    }
    /* Theme Navigation */

    if (function_exists('register_nav_menus')) {
        register_nav_menus( array(
            'main-nav' => __( 'Navegacion Principal', 'choclomedia' ),
            'footer-nav' => __( 'Navegación Inferior', 'choclomedia' ),
            'lang-nav' => __( 'Lenguajes', 'choclomedia'),
        ) );
    };

    /* Theme Sidebar(s) */

    register_sidebar( array(
        'name'          => __( 'Un espacio para un widget', 'choclomedia' ),
        'id'            => 'subscribe',
        'description'   => __( 'Aparece en la sección del footer del sitio.', 'choclomedia' ),
        'before_widget' => '<aside id="%1$s" class="widget suscribe %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    /* Send ajax mail */
    function send_mail_via_ajax(){

        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $company = filter_input(INPUT_POST, 'company');
        $message = filter_input(INPUT_POST, 'message');

        // Google reCaptcha features
        $secret = "6LcxhBcUAAAAAMWBIzf87CwUD_Ix05ji4P0gYx5r";
        $response = null;

        $path = 'https://www.google.com/recaptcha/api/siteverify?';
        $path .= 'secret=' . $secret;
        $path .= '&remoteip=' . $_SERVER["REMOTE_ADDR"];
        $path .= '&v=php_1.0';
        $path .= '&response='. $_POST["g-recaptcha-response"];

        $response = file_get_contents( $path );

        $answers = json_decode($response, true);

        if ( $response != null && trim($answers ['success']) == true ) {

            ob_start();
    ?>
    <table border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#cccccc" style="width: 100%;">
        <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" style="margin-top:35px;margin-bottom:35px;font-family:Verdana !important;">
            <tr style="background-color: #232323;">
                <td align="center">
                    <h1 style="text-align:center;font-size:36px;color:#FBC501;text-transform:uppercase;font-weight:800;">Contacto Web</h1>
                </td>
            </tr>
            <tr>
                <td style="color:#222222!important; padding: 30px;">
                    <p><strong>Nombre:</strong> <?php echo $name ?></p>
                    <p><strong>Email:</strong> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
                    <p><strong>Compa&ntilde;&iacute;a:</strong> <?php echo $company ?></p>

                    <h2 style="color:#FBC501;text-transform:uppercase;font-weight:800;margin-top: 70px;">Mensaje</h2>
                    <p style="font-size:20px;"><?php echo $message ?></p>
                </td>
            </tr>
            <tr style="background-color: #FBC501; color: #000000; margin-top: 35px;">
                <td align="center">
                    <p style="margin-top:35px;margin-bottom:35px;">Este mensaje fue enviado desde la p&aacute;gina de Chocomedia el <?php echo date("d/m/Y") ?> a las <?php echo date("h:i") ?></p>
                </td>
            </tr>
        </table>
    </table>
    <?php
                $body = ob_get_clean();

            //$contacto = get_page_by_path('contact');
            //$mail_admin = get_post_meta($contacto->ID, 'em', true);
            //$to = 'colocar un solo email';
            $subject = 'Nuevo Correo - Choclomedia';
            $asunto = 'Nuevo Correo - Choclomedia';

            require_once ABSPATH . WPINC . '/class-phpmailer.php';

            $mail = new PHPMailer( true );

            //$mail->AddAddress($to);
            $mail->AddAddress('ceo@choclomedia.com', 'First Contact');
            $mail->AddAddress('jmrpadrino@gmail.com', 'Second Contact');
            $mail->FromName = 'Choclomedia - Contact';
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->IsHTML();
            $mail->CharSet = 'utf-8';
            $mail->Send();
            echo trim($answers ['success']);
            /*try {
                $mail->AddAddress($to);
                $mail->FromName = 'Sentry Wellhead Systems - Contact';
                $mail->Subject = $subject;
                $mail->Body = $body;
                $mail->IsHTML();
                $mail->CharSet = 'utf-8';
                $mail->Send();
                echo trim($answers ['success']);
            } catch (phpmailerException $e) {
              echo $e->errorMessage(); //Pretty error messages from PHPMailer
            } catch (Exception $e) {
                echo trim($answers ['success']);
              echo $e->getMessage(); //Boring error messages from anything else!
            }*/
        }else{
            echo trim($answers ['success']);
        }
    }
    add_action('wp_ajax_send_mail_via_ajax', 'send_mail_via_ajax');
    add_action('wp_ajax_nopriv_send_mail_via_ajax', 'send_mail_via_ajax');

?>