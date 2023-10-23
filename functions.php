<?php

if ( ! defined( 'ASCENDOOR_FSE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ASCENDOOR_FSE_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ascendoor_fse_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Ascendoor FSE 1.0.0
	 *
	 * @return void
	 */
	function ascendoor_fse_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ascendoor-fse, use a find and replace
		* to change 'ascendoor-fse' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'ascendoor-fse', get_template_directory() . '/languages' );

	}

endif;
add_action( 'after_setup_theme', 'ascendoor_fse_support' );

if ( ! function_exists( 'ascendoor_fse_get_fonts_url' ) ) :
	/**
	 * Return Google fonts URL.
	 */
	function ascendoor_fse_get_fonts_url() {
		$fonts_url = '';

		$font_families = array(

			'Nunito:wght@300;400;500;600;700;800&display=swap',
			'Roboto:wght@300;400;500;700&display=swap',
			'Literata:wght@300;400;500;600;700&display=swap',
			'Adamina&display=swap',
		);

		if ( ! empty( $font_families ) ) {

			$query_args = array(
				'family'  => implode( '&family=', $font_families ),
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		return $fonts_url;
	}
endif;


/**
 * Enqueue scripts and styles.
 */
function ascendoor_fse_scripts() {

	// Append .min if SCRIPT_DEBUG is false.
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// Main style.
	wp_enqueue_style( 'ascendoor-fse-style', get_template_directory_uri() . '/style.css', array(), ASCENDOOR_FSE_VERSION );

	// Fontawesome style.
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome' . $min . '.css', array(), '4.7.0' );

	// Google fonts.
	wp_enqueue_style( 'ascendoor-fse-google-fonts', wptt_get_webfont_url( ascendoor_fse_get_fonts_url() ), array(), null );

	// Custom js.
	wp_enqueue_script( 'ascendoor-fse-custom-script', get_template_directory_uri() . '/assets/js/custom' . $min . '.js', array( 'jquery' ), ASCENDOOR_FSE_VERSION );

}
add_action( 'wp_enqueue_scripts', 'ascendoor_fse_scripts' );

function ascendoor_fse_editor_styles() {

	add_editor_style(
		array(
			ascendoor_fse_get_fonts_url(),
		)
	);

}
add_action( 'admin_init', 'ascendoor_fse_editor_styles' );

/**
 * Webfont Loader.
 */
require get_template_directory() . '/inc/wptt-webfont-loader.php';

/*
 * Admin Notice
 */
function ascendoor_fse_notice() {

	$theme_data = wp_get_theme();

	$go_to_pro         = 'https://ascendoor.com/themes/ascendoor-fse-pro/';
	$demo_url          = 'https://demos.ascendoor.com/ascendoor-fse/';
	$theme_info        = $theme_data->get( 'ThemeURI' );
	$documentation_url = 'https://docs.ascendoor.com/docs/ascendoor-fse/';
	$theme_support     = $theme_data->get( 'AuthorURI' ) . 'contact/';

	?>
	<div class="notice notice-success is-dismissible">
		<p><?php esc_html_e( 'Thank you for installing the Ascendoor FSE theme!', 'ascendoor-fse' ); ?></p>
		<p>
			<a class="button-primary" href="<?php echo esc_url( $go_to_pro ); ?>" target="_blank"><?php esc_html_e( 'Go to pro', 'ascendoor-fse' ); ?></a>
			<a class="button-secondary" href="<?php echo esc_url( $demo_url ); ?>" target="_blank"><?php esc_html_e( 'Theme Demo', 'ascendoor-fse' ); ?></a>
			<a class="button-secondary" href="<?php echo esc_url( $theme_info ); ?>" target="_blank"><?php esc_html_e( 'Theme Information', 'ascendoor-fse' ); ?></a>
			<a class="button-secondary" href="<?php echo esc_url( $documentation_url ); ?>" target="_blank"><?php esc_html_e( 'Theme Documentation', 'ascendoor-fse' ); ?></a>
			<a class="button-secondary" href="<?php echo esc_url( $theme_support ); ?>" target="_blank"><?php esc_html_e( 'Support?', 'ascendoor-fse' ); ?></a>
		</p>
	</div>

	<?php
}

add_action( 'admin_notices', 'ascendoor_fse_notice' );

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length' );

/**
 * Add block patterns.
 */
require get_template_directory() . '/pattern-category.php';
