<?php
/**
 * Includes functions that handle registration/enqueuing of meta tags, styles,
 * and scripts in the document head and footer.
 **/
namespace SST\Theme\Includes\Meta;


/**
 * Enqueue front-end css and js.
 **/
function enqueue_frontend_assets() {
	$theme = wp_get_theme();
	$theme_version = $theme->get( 'Version' );

	// Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900', array(), $theme_version );

	// Library CSS files
	wp_enqueue_style( 'bootstrap', SST_THEME_JS_URL . '/lib/bootstrap/css/bootstrap.min.css', array(), $theme_version );
	wp_enqueue_style( 'nivo-slider', SST_THEME_JS_URL . '/lib/nivo-slider/css/nivo-slider.css', array(), $theme_version );
	wp_enqueue_style( 'owl-carousel', SST_THEME_JS_URL . '/lib/owlcarousel/owl.carousel.css', array(), $theme_version );
	wp_enqueue_style( 'owl-transitions', SST_THEME_JS_URL . '/lib/owlcarousel/owl.transitions.css', array(), $theme_version );
	wp_enqueue_style( 'font-awesome', SST_THEME_JS_URL . '/lib/font-awesome/css/font-awesome.min.css', array(), $theme_version );
	wp_enqueue_style( 'animate', SST_THEME_JS_URL . '/lib/animate/animate.min.css', array(), $theme_version );
	wp_enqueue_style( 'venobox', SST_THEME_JS_URL . '/lib/venobox/venobox.css', array(), $theme_version );

	// Theme CSS
	wp_enqueue_style( 'style-slider', SST_THEME_CSS_URL . '/nivo-slider-theme.css', array(), $theme_version );
	wp_enqueue_style( 'style', SST_THEME_CSS_URL . '/style.css', array(), $theme_version );
	wp_enqueue_style( 'style-responsive', SST_THEME_CSS_URL . '/responsive.css', array(), $theme_version );
	wp_enqueue_style( 'style-base', SST_THEME_CSS_URL . '/style.min.css', array(), $theme_version );
	wp_enqueue_style( 'ebusiness', SST_THEME_CSS_URL . '/ebusiness.css', array(), $theme_version );



	// JS
	wp_enqueue_script( 'jquery', SST_THEME_JS_URL . '/lib/jquery/jquery.min.js', array(), $theme_version, true );
	wp_enqueue_script( 'bootstrap', SST_THEME_JS_URL . '/lib/bootstrap/js/bootstrap.min.js', array(), $theme_version, true );
	wp_enqueue_script( 'owl-carousel', SST_THEME_JS_URL . '/lib/owlcarousel/owl.carousel.min.js', array(), $theme_version, true );
	wp_enqueue_script( 'venobox', SST_THEME_JS_URL . '/lib/venobox/venobox.min.js', array(), $theme_version, true );
	wp_enqueue_script( 'jquery-knob', SST_THEME_JS_URL . '/lib/knob/jquery.knob.js', array(), $theme_version, true );
	wp_enqueue_script( 'wow', SST_THEME_JS_URL . '/lib/wow/wow.min.js', array(), $theme_version, true );
	wp_enqueue_script( 'parallax', SST_THEME_JS_URL . '/lib/parallax/parallax.js', array(), $theme_version, true );
	wp_enqueue_script( 'easing', SST_THEME_JS_URL . '/lib/easing/easing.min.js', array(), $theme_version, true );
	wp_enqueue_script( 'jquery-nivo', SST_THEME_JS_URL . '/lib/nivo-slider/js/jquery.nivo.slider.js', array(), $theme_version, true );
	wp_enqueue_script( 'jquery-appear', SST_THEME_JS_URL . '/lib/appear/jquery.appear.js', array(), $theme_version, true );
	wp_enqueue_script( 'isotope', SST_THEME_JS_URL . '/lib/isotope/isotope.pkgd.min.js', array(), $theme_version, true );
	wp_enqueue_script( 'contactform', SST_THEME_JS_URL . '/contactform/contactform.js', array(), $theme_version, true );
	wp_enqueue_script( 'main', SST_THEME_JS_URL . '/main.js', array(), $theme_version, true );
	wp_enqueue_script( 'google-analytics', 'https://www.googletagmanager.com/gtag/js?id=UA-141734660-1', array(), $theme_version, false );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_frontend_assets', 11 );
