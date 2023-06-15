<?php
/**
 * portfolio Theme Customizer
 *
 * @package portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'portfolio_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'portfolio_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'portfolio_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function portfolio_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function portfolio_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function portfolio_customize_preview_js() {
	wp_enqueue_script( 'portfolio-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'portfolio_customize_preview_js' );

// Gabriela Trujillo Customize
function gabriela_customize_register( $wp_customize ) {
	// Social Media Links
	$wp_customize->add_section('social_media_options', array(
        'title' => 'Social Media Links',
        'priority' => 140,
	));
	// GitHub Link
	$wp_customize->add_setting( 'github_link', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'github_link', array(
		'type' => 'url',
		'section' => 'social_media_options',
		'label' => __( 'GitHub Link' ),
	));
	// LinkedIn Link
	$wp_customize->add_setting( 'linkedin_link', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'linkedin_link', array(
		'type' => 'url',
		'section' => 'social_media_options',
		'label' => __( 'LinkedIn Link' ),
	));
	// Instagram Link
	$wp_customize->add_setting( 'instagram_link', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'instagram_link', array(
		'type' => 'url',
		'section' => 'social_media_options',
		'label' => __( 'Instagram Link' ),
	));
	// Email Link
	$wp_customize->add_setting( 'email', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'email', array(
		'type' => 'url',
		'section' => 'social_media_options',
		'label' => __( 'Email' ),
	));
}
add_action( 'customize_register', 'gabriela_customize_register' );