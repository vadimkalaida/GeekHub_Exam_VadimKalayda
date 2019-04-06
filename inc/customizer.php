<?php
/**
 * mitalent Theme Customizer
 *
 * @package mitalent
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mitalent_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	//SITE LOGO
  $wp_customize->add_section( 'site_logo_section' , array(
    'title'      => __( 'Site Logo Section', 'mitalent' ),
    'priority'   => 30,
  ) );
  $wp_customize->add_setting( 'site_logo' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo', array(
    'label'      => __( 'Site Logo', 'mitalent' ),
    'section'    => 'site_logo_section',
    'settings'   => 'site_logo',
  ) ) );



  //(PAGE: HOME) HEADER SOC LINKS
  $wp_customize->add_section( 'header_soc_links_section' , array(
    'title'      => __( '(PAGE: HOME)Header Soc Links Section', 'mitalent' ),
    'priority'   => 30,
  ) );
  // Soc link 1
  $wp_customize->add_setting( 'header_link1' , array(
    'default'   => 'https://www.facebook.com/',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_link1', array(
    'label'      => __( 'Soc Link 1', 'mitalent' ),
    'section'    => 'header_soc_links_section',
    'settings'   => 'header_link1',
  ) ) );
  //Soc link 1 icon
  $wp_customize->add_setting( 'header_link1_icon' , array(
    'default'   => 'fa fa-facebook-official',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_link1_icon', array(
    'label'      => __( 'Soc Link 1 Icon(FONT AWESOME CODE)', 'mitalent' ),
    'section'    => 'header_soc_links_section',
    'settings'   => 'header_link1_icon',
  ) ) );
  // Soc link 2
  $wp_customize->add_setting( 'header_link2' , array(
    'default'   => 'https://www.instagram.com/?hl=en',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_link2', array(
    'label'      => __( 'Soc Link 2', 'mitalent' ),
    'section'    => 'header_soc_links_section',
    'settings'   => 'header_link2',
  ) ) );
  //Soc link 2 icon
  $wp_customize->add_setting( 'header_link2_icon' , array(
    'default'   => 'fa fa-instagram',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_link2_icon', array(
    'label'      => __( 'Soc Link 2 Icon(FONT AWESOME CODE)', 'mitalent' ),
    'section'    => 'header_soc_links_section',
    'settings'   => 'header_link2_icon',
  ) ) );
  // Soc link 3
  $wp_customize->add_setting( 'header_link3' , array(
    'default'   => 'https://www.youtube.com/',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_link3', array(
    'label'      => __( 'Soc Link 3', 'mitalent' ),
    'section'    => 'header_soc_links_section',
    'settings'   => 'header_link3',
  ) ) );
  //Soc link 3 icon
  $wp_customize->add_setting( 'header_link3_icon' , array(
    'default'   => 'fa fa-youtube-play',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_link3_icon', array(
    'label'      => __( 'Soc Link 3 Icon(FONT AWESOME CODE)', 'mitalent' ),
    'section'    => 'header_soc_links_section',
    'settings'   => 'header_link3_icon',
  ) ) );
  // Soc link 4
  $wp_customize->add_setting( 'header_link4' , array(
    'default'   => 'https://twitter.com/',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_link4', array(
    'label'      => __( 'Soc Link 4', 'mitalent' ),
    'section'    => 'header_soc_links_section',
    'settings'   => 'header_link4',
  ) ) );
  //Soc link 4 icon
  $wp_customize->add_setting( 'header_link4_icon' , array(
    'default'   => 'fa fa-twitter',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_link4_icon', array(
    'label'      => __( 'Soc Link 4 Icon(FONT AWESOME CODE)', 'mitalent' ),
    'section'    => 'header_soc_links_section',
    'settings'   => 'header_link4_icon',
  ) ) );



  //(PAGE: HOME) HEADER BOTTOM LEFT PART NUMBER 
  $wp_customize->add_section( 'header_left_part_section' , array(
    'title'      => __( '(PAGE: HOME)Header Content Left Part', 'mitalent' ),
    'priority'   => 30,
  ) );
  // Number
  $wp_customize->add_setting( 'header_bottom_left_number' , array(
    'default'   => '02',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_bottom_left_number', array(
    'label'      => __( 'Number', 'mitalent' ),
    'section'    => 'header_left_part_section',
    'settings'   => 'header_bottom_left_number',
  ) ) );



  //(PAGE: HOME) HEADER BOTTOM CENTER PART IMAGE 
  $wp_customize->add_section( 'header_center_part_section' , array(
    'title'      => __( '(PAGE: HOME)Header Content Center Part', 'mitalent' ),
    'priority'   => 30,
  ) );
  // Image
  $wp_customize->add_setting( 'header_content_center_image' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_content_center_image', array(
    'label'      => __( 'Image', 'mitalent' ),
    'section'    => 'header_center_part_section',
    'settings'   => 'header_content_center_image',
  ) ) );
  // Headline
  $wp_customize->add_setting( 'header_content_center_headline' , array(
    'default'   => 'Georgina Alson',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_content_center_headline', array(
    'label'      => __( 'Headline', 'mitalent' ),
    'section'    => 'header_center_part_section',
    'settings'   => 'header_content_center_headline',
  ) ) );
  // Headline
  $wp_customize->add_setting( 'header_content_center_text' , array(
    'default'   => 'young model 2020',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_content_center_text', array(
    'label'      => __( 'Text', 'mitalent' ),
    'section'    => 'header_center_part_section',
    'settings'   => 'header_content_center_text',
  ) ) );



  //(PAGE: HOME) TALENT SECTION
  $wp_customize->add_section( 'talent_section' , array(
    'title'      => __( '(PAGE: HOME) Talent', 'mitalent' ),
    'priority'   => 30,
  ) );
  // Item1
  $wp_customize->add_setting( 'talent_item1' , array(
    'default'   => 'Actor',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'talent_item1', array(
    'label'      => __( 'Item 1', 'mitalent' ),
    'section'    => 'talent_section',
    'settings'   => 'talent_item1',
  ) ) );
  // Item2
  $wp_customize->add_setting( 'talent_item2' , array(
    'default'   => 'Musician',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'talent_item2', array(
    'label'      => __( 'Item 2', 'mitalent' ),
    'section'    => 'talent_section',
    'settings'   => 'talent_item2',
  ) ) );
  // Item3
  $wp_customize->add_setting( 'talent_item3' , array(
    'default'   => 'Comedian',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'talent_item3', array(
    'label'      => __( 'Item 3', 'mitalent' ),
    'section'    => 'talent_section',
    'settings'   => 'talent_item3',
  ) ) );
  // Item4
  $wp_customize->add_setting( 'talent_item4' , array(
    'default'   => 'Model',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'talent_item4', array(
    'label'      => __( 'Item 4', 'mitalent' ),
    'section'    => 'talent_section',
    'settings'   => 'talent_item4',
  ) ) );



  //(PAGE: HOME) LATEST NEWS SECTION
  $wp_customize->add_section( 'latest_news_section' , array(
    'title'      => __( '(PAGE: HOME) Latest News', 'mitalent' ),
    'priority'   => 30,
  ) );
  // Item1
  $wp_customize->add_setting( 'latest_news_headline' , array(
    'default'   => 'Latest News',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'latest_news_headline', array(
    'label'      => __( 'Headline', 'mitalent' ),
    'section'    => 'latest_news_section',
    'settings'   => 'latest_news_headline',
  ) ) );



  //(PAGE: ALL) FOOTER SECTION
  $wp_customize->add_section( 'footer_section' , array(
    'title'      => __( '(PAGE: ALL) Footer', 'mitalent' ),
    'priority'   => 30,
  ) );
  // BOTTOM LEFT PART TEXT
  $wp_customize->add_setting( 'footer_bottom_left_text' , array(
    'default'   => '© 2018 MI Talent. Designed by Tranmautritam for Mass Impressions.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_bottom_left_text', array(
    'label'      => __( 'Bottom Left Part Text', 'mitalent' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_bottom_left_text',
  ) ) );
  // SOC LINK1
  $wp_customize->add_setting( 'footer_link1' , array(
    'default'   => 'https://www.facebook.com/',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_link1', array(
    'label'      => __( 'Soc Link1', 'mitalent' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_link1',
  ) ) );
  // SOC LINK1 ICON
  $wp_customize->add_setting( 'footer_link1_icon' , array(
    'default'   => 'fa fa-facebook-official',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_link1_icon', array(
    'label'      => __( 'Soc Link1 Icon(FONT AWESOME 4.7 CODE)', 'mitalent' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_link1_icon',
  ) ) );
  // SOC LINK2
  $wp_customize->add_setting( 'footer_link2' , array(
    'default'   => 'https://www.instagram.com/?hl=en',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_link2', array(
    'label'      => __( 'Soc Link2', 'mitalent' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_link2',
  ) ) );
  // SOC LINK2 ICON
  $wp_customize->add_setting( 'footer_link2_icon' , array(
    'default'   => 'fa fa-instagram',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_link2_icon', array(
    'label'      => __( 'Soc Link2 Icon(FONT AWESOME 4.7 CODE)', 'mitalent' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_link2_icon',
  ) ) );
  // SOC LINK3
  $wp_customize->add_setting( 'footer_link3' , array(
    'default'   => 'https://www.youtube.com/',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_link3', array(
    'label'      => __( 'Soc Link3', 'mitalent' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_link3',
  ) ) );
  // SOC LINK3 ICON
  $wp_customize->add_setting( 'footer_link3_icon' , array(
    'default'   => 'fa fa-youtube-play',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_link3_icon', array(
    'label'      => __( 'Soc Link3 Icon(FONT AWESOME 4.7 CODE)', 'mitalent' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_link3_icon',
  ) ) );
  // SOC LINK4
  $wp_customize->add_setting( 'footer_link4' , array(
    'default'   => 'https://twitter.com/',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_link4', array(
    'label'      => __( 'Soc Link4', 'mitalent' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_link4',
  ) ) );
  // SOC LINK4 ICON
  $wp_customize->add_setting( 'footer_link4_icon' , array(
    'default'   => 'fa fa-twitter',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_link4_icon', array(
    'label'      => __( 'Soc Link4 Icon(FONT AWESOME 4.7 CODE)', 'mitalent' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_link4_icon',
  ) ) );
}
add_action( 'customize_register', 'mitalent_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function mitalent_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function mitalent_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mitalent_customize_preview_js() {
	wp_enqueue_script( 'mitalent-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'mitalent_customize_preview_js' );
