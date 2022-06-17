<?php
//Load css
function load_css() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false , 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), false , 'all');
    wp_enqueue_style('animate');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), false , 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('justified-gallery.min', get_template_directory_uri() . '/css/justified-gallery.min.css', array(), false , 'all');
    wp_enqueue_style('justified-gallery.min');

    wp_register_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), false , 'all');
    wp_enqueue_style('magnific-popup');

    wp_register_style('themify-icons', get_template_directory_uri() . '/css/themify-icons.css', array(), false , 'all');
    wp_enqueue_style('themify-icons');

    wp_register_style('style_main', get_template_directory_uri() . '/css/style_main.css', array(), false , 'all');
    wp_enqueue_style('style_main');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false , 'all');
    wp_enqueue_style('main');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), false , 'all');
    wp_enqueue_style('responsive');
    
    wp_register_style('et-line-icons', get_template_directory_uri() . '/css/et-line-icons.css', array(), false , 'all');
    wp_enqueue_style('et-line-icons');
    
}
add_action('wp_enqueue_scripts', 'load_css');

//Load js
function load_js() {

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', array('jquery'), NULL , false);
    wp_enqueue_script('jquery');

    wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array('jquery'), NULL , false);
    wp_enqueue_script('modernizr');
    
    wp_register_script('bootstrap.bundle', get_template_directory_uri() . '/js/bootstrap.bundle.js', array('jquery') , NULL , false);
    wp_enqueue_script('bootstrap.bundle');

    wp_register_script('jquery.easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), NULL , false);
    wp_enqueue_script('jquery.easing');
    
    wp_register_script('smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array('jquery') , NULL , false);
    wp_enqueue_script('smooth-scroll');

    wp_register_script('jquery.appear', get_template_directory_uri() . '/js/jquery.appear.js', array('jquery'), NULL , false);
    wp_enqueue_script('jquery.appear');
    
    wp_register_script('jquery.nav', get_template_directory_uri() . '/js/jquery.nav.js', array('jquery') , NULL , false);
    wp_enqueue_script('jquery.nav');

    wp_register_script('wow.min', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), NULL , false);
    wp_enqueue_script('wow.min');
    
    wp_register_script('page-scroll', get_template_directory_uri() . '/js/page-scroll.js', array('jquery') , NULL , false);
    wp_enqueue_script('page-scroll');

    wp_register_script('swiper.min', get_template_directory_uri() . '/js/swiper.min.js', array('jquery') , NULL , false);
    wp_enqueue_script('swiper.min');

    wp_register_script('jquery.count-to', get_template_directory_uri() . '/js/jquery.count-to.js', array('jquery') , NULL , false);
    wp_enqueue_script('jquery.count-to');

    wp_register_script('jquery.stellar', get_template_directory_uri() . '/js/jquery.stellar.js', array('jquery') , NULL , false);
    wp_enqueue_script('jquery.stellar');

    wp_register_script('jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery') , NULL , false);
    wp_enqueue_script('jquery.magnific-popup.min');

    wp_register_script('common.js', get_template_directory_uri() . '/js/common.js', array('jquery') , NULL , false);
    wp_enqueue_script('common.js');
}
add_action('wp_enqueue_scripts', 'load_js');


//To load menu options
add_theme_support("menus");
add_theme_support("post-thumbnails");
add_theme_support("widgets");

//Add image dimensions for a post
add_image_size('post-large', 800, 400, true);
add_image_size('post-small', 400, 200, false);

//For making the form submit
add_action("wp_ajax_enquiry", 'submit_enquiry_form');
add_action("wp_ajax_nopriv_enquiry", 'submit_enquiry_form');

function submit_enquiry_form(){
    $data = [];
    wp_parse_str($_POST['enquiry'], $data);
    $to = 'enquiry@digifixmedia.com';
    $subject = 'Enquiry details from ' . $data['name'];
    $header[] = "Content-type:text/html; Charset:UTF-8";
    $header[] = "From:enquiry@digifixmedia.com";
    $header[] = "Reply-to:" . $data['email'];

    $messageContent = '';
    foreach ($data as $index => $field) {
        $messageContent .= '<tr><td align="left">' . strtoupper($index) . '</td><td align="left">'. $field .'</td></tr>'; 
    }

    $message = '<!doctype html>
    <html>
      <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Simple Transactional Email</title>
        <style>
          img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%; 
          }
          body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0; 
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%; 
        }
        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; 
        }
        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top; 
        }
          /* -------------------------------------
              BODY & CONTAINER
          ------------------------------------- */
          .body {
            background-color: rgb(204 204 204 / 51%);
            width: 100%; 
        }
          /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
          .container {
            display: block;
            Margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px; 
        }
          /* This should also be a block element, so that it will fill 100% of the .container */
          .content {
            box-sizing: border-box;
            display: block;
            Margin: 0 auto;
            max-width: 580px;
            padding: 10px; 
        }
          /* -------------------------------------
              HEADER, FOOTER, MAIN
          ------------------------------------- */
          .main {
            background: #fff;
            border-radius: 3px;
            width: 100%; }
          .wrapper {
            box-sizing: border-box;
            padding: 20px; }
          .footer {
            clear: both;
            padding-top: 10px;
            text-align: center;
            width: 100%; }
            .footer td,
            .footer p,
            .footer span,
            .footer a {
              color: #999999;
              font-size: 12px;
              text-align: center; }
          /* -------------------------------------
              TYPOGRAPHY
          ------------------------------------- */
          h1,
          h2,
          h3,
          h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            Margin-bottom: 30px; }
          h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize; }
          p,
          ul,
          ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            Margin-bottom: 15px; }
            p li,
            ul li,
            ol li {
              list-style-position: inside;
              margin-left: 5px; }
          a {
            color: #3498db;
            text-decoration: underline; }
          /* -------------------------------------
              BUTTONS
          ------------------------------------- */
          .btn {
            box-sizing: border-box;
            width: 100%; }
            .btn > tbody > tr > td {
              padding-bottom: 15px; }
            .btn table {
              width: auto; }
            .btn table td {
              background-color: #ffffff;
              border-radius: 5px;
              text-align: center; }
            .btn a {
              background-color: #ffffff;
              border: solid 1px #3498db;
              border-radius: 5px;
              box-sizing: border-box;
              color: #3498db;
              cursor: pointer;
              display: inline-block;
              font-size: 14px;
              font-weight: bold;
              margin: 0;
              padding: 12px 25px;
              text-decoration: none;
              text-transform: capitalize; }
          .btn-primary table td {
            background-color: #3498db; }
          .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff; }
          /* -------------------------------------
              OTHER STYLES THAT MIGHT BE USEFUL
          ------------------------------------- */
          .last {
            margin-bottom: 0; }
          .first {
            margin-top: 0; }
          .align-center {
            text-align: center; }
          .align-right {
            text-align: right; }
          .align-left {
            text-align: left; }
          .clear {
            clear: both; }
          .mt0 {
            margin-top: 0; }
          .mb0 {
            margin-bottom: 0; }
          .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0; }
          .powered-by a {
            text-decoration: none; }
          hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            Margin: 20px 0; }
          /* -------------------------------------
              RESPONSIVE AND MOBILE FRIENDLY STYLES
          ------------------------------------- */
          @media only screen and (max-width: 620px) {
            table[class=body] h1 {
              font-size: 28px !important;
              margin-bottom: 10px !important; }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
              font-size: 16px !important; }
            table[class=body] .wrapper,
            table[class=body] .article {
              padding: 10px !important; }
            table[class=body] .content {
              padding: 0 !important; }
            table[class=body] .container {
              padding: 0 !important;
              width: 100% !important; }
            table[class=body] .main {
              border-left-width: 0 !important;
              border-radius: 0 !important;
              border-right-width: 0 !important; }
            table[class=body] .btn table {
              width: 100% !important; }
            table[class=body] .btn a {
              width: 100% !important; }
            table[class=body] .img-responsive {
              height: auto !important;
              max-width: 100% !important;
              width: auto !important; }}
          @media all {
            .ExternalClass {
              width: 100%; }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
              line-height: 100%; }
            .apple-link a {
              color: inherit !important;
              font-family: inherit !important;
              font-size: inherit !important;
              font-weight: inherit !important;
              line-height: inherit !important;
              text-decoration: none !important; } 
            .btn-primary table td:hover {
              background-color: #34495e !important; }
            .btn-primary a:hover {
              background-color: #34495e !important;
              border-color: #34495e !important; } }
        </style>
      </head>
      <body class="">
        <table border="0" cellpadding="0" cellspacing="0" class="body">
          <tr>
            <td>&nbsp;</td>
            <td class="container">
              <div class="content">
                <span class="preheader">Enquiry details from user</span>
                <table class="main">
    
                  <!-- START MAIN CONTENT AREA -->
                  <tr>
                    <td class="wrapper">
                      <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td>
                            <h1>Enquiry details from user</h1>
                            <table border="0" cellpadding="3" cellspacing="3">
                              <tbody>'.
                                $messageContent
                              .'</tbody>
                            </table>

          
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
    
                <!-- END MAIN CONTENT AREA -->
                </table>
    
                <!-- START FOOTER -->
                <div class="footer">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td class="content-block">
                        <span class="apple-link">www.digifixmedia.com | www.digifixmedia.in | www.digifixmedia.co.uk</span>
                        <br> Visit our site? <a href="http://www.digifixmedia.com">Digifixmedia</a>.
                      </td>
                    </tr>
                  </table>
                </div>
                <!-- END FOOTER -->
                
              <!-- END CENTERED WHITE CONTAINER -->
              </div>
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </body>
    </html>';

    try {
        if(wp_mail($to, $subject, $message, $header)) {
            wp_send_json_success('Your mail has been sent successfully');
        }
    } catch (Exception $e) {
        wp_send_json_error($e);
    }
}

//Add map -- Short code is used to insert the functionality through short code
function add_google_map(){
    ob_start();
    get_template_part( 'includes/section', 'google_map' );
    return ob_get_clean();
}
add_shortcode("google_map",'add_google_map');

//Contact us page
function get_contact_us_form(){
    echo get_template_part( 'includes/form', 'contact_us' );
}
add_shortcode("contact_us_form",'get_contact_us_form');