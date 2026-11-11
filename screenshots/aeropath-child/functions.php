
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
        '1.0'
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

