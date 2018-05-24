<?php
/**
 * underscores_demo Theme Customizer
 *
 * @package underscores_demo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function underscores_demo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'underscores_demo_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'underscores_demo_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'underscores_demo_customize_register' );

function preloved_customizer_register($wp_customize)
{

//------Home------\\
	//About Text 1
	$wp_customize->add_section('preloved_home_section',
		array(
			'title' => __('Home'),
			'priority' => 30
		));


	$wp_customize->add_section('section',array(
		'title'=>'section',
		'priority'=>10,
		'panel'=>'some_panel',
	));

	$wp_customize->add_setting('setting_demo',array(
		'defaule'=>'a',
	));


	$wp_customize->add_control('contrl_demo',array(
		'label'=>'Text',
		'type'=>'text',
		'section'=>'section',
		'settings'=>'setting_demo',
	));




	$wp_customize->add_setting('preloved_home_text', array());
	$wp_customize->add_section('preloved_hero_section',
		array(
			'title' => __('Hero Section'),
			'section' => 'preloved_home_section',
			'priority' => 30
		)
	);

	//Home Main Heading
	$wp_customize->add_setting('preloved_home_main_heading', array());
	$wp_customize->add_control('preloved_home_heading_ctrl',
		array(
			'type' => 'text',
			'label' => __('Home Main Heading'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_main_heading'
		)
	);

	//Home Main Text
	$wp_customize->add_setting('preloved_home_main_text', array());
	$wp_customize->add_control('preloved_home_text_ctrl',
		array(
			'type' => 'textarea',
			'label' => __('Home Main Text'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_main_text'
		)
	);

	//Home Textbox Heading 1
	$wp_customize->add_setting('preloved_home_textbox1_heading', array());
	$wp_customize->add_control('preloved_home_textbox1_heading_ctrl',
		array(
			'type' => 'text',
			'label' => __('Home Textbox 1 Heading'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_textbox1_heading'
		)
	);

	//Home Textbox 1
	$wp_customize->add_setting('preloved_home_textbox1', array());
	$wp_customize->add_control('preloved_home_textbox1_ctrl',
		array(
			'type' => 'textarea',
			'label' => __('Home Textbox 1'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_textbox1'
		)
	);

	//Home Textbox Heading 2
	$wp_customize->add_setting('preloved_home_textbox2_heading', array());
	$wp_customize->add_control('preloved_home_textbox2_heading_ctrl',
		array(
			'type' => 'text',
			'label' => __('Home Textbox 2 Heading'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_textbox2_heading'
		)
	);

	//Home Textbox 2
	$wp_customize->add_setting('preloved_home_textbox2', array());
	$wp_customize->add_control('preloved_home_textbox2_ctrl',
		array(
			'type' => 'textarea',
			'label' => __('Home Textbox 2'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_textbox2'
		)
	);

	//Home Image
	$wp_customize->add_setting('preloved_home_textbox1_image', array());
	$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize,
			'preloved_home_textbox_image_ctrl',
			array(
				'section' => 'preloved_home_section',
				'label' => __('Home Textbox1 Image'),
				'settings' => 'preloved_home_textbox1_image'
			)
		)
	);

	//Home Image2
	$wp_customize->add_setting('preloved_home_textbox2_image', array());
	$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize,
			'preloved_home_image2_ctrl',
			array(
				'section' => 'preloved_home_section',
				'label' => __('Home Textbox2 Image'),
				'settings' => 'preloved_home_textbox2_image'
			)
		)
	);

}

add_action('customize_register','preloved_customizer_register','panel');


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function underscores_demo_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function underscores_demo_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function underscores_demo_customize_preview_js() {
	wp_enqueue_script( 'underscores_demo-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'underscores_demo_customize_preview_js' );
