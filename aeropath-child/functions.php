
<?php
// Load the Astra stylesheet and our custom styles.
function aeropath_load_styles() {
    wp_enqueue_style(
        'astra-parent',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'aeropath-styles',
        get_stylesheet_uri(),
        array('astra-parent'),
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}

add_action('wp_enqueue_scripts', 'aeropath_load_styles');

// Load the JavaScript used by the inquiry form.
function aeropath_load_scripts() {
    wp_enqueue_script(
        'aeropath-script',
        get_stylesheet_directory_uri() . '/script.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'aeropath_load_scripts');


// Add a description for the homepage.
function aeropath_meta_description() {
    if (is_front_page()) {
        echo '<meta name="description" content="Explore aviation training programs, including pilot training, aviation safety, and airport operations at AeroPath Training.">';
    }
}

add_action('wp_head', 'aeropath_meta_description');


/* Add Google Tag Manager to the website */
function aeropath_google_tag_manager() {
    ?>
    <script>
        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;
            j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
            f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5W9FKNGG');
    </script>
    <?php
}
add_action('wp_head', 'aeropath_google_tag_manager');


/* Google Tag Manager fallback */
function aeropath_gtm_body() {
    ?>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5W9FKNGG"
                height="0"
                width="0"
                style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <?php
}
add_action('wp_body_open', 'aeropath_gtm_body');
