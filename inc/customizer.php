<?php
/**
 * StanleyWP Theme Customizer
 *
 * @package StanleyWP
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function stanleywp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'stanleywp_customize_register' );

if (class_exists('kirki')) {
Kirki::add_config( 'stanleywp_theme', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
/* Project Settings */

// 	Kirki::add_panel( 'projects_panel', array(
//     'priority'    => 10,
//     'title'       => esc_attr__( 'Project', 'textdomain' ),
//     'description' => esc_attr__( 'Project description', 'textdomain' ),
// ) );
	Kirki::add_section( 'projects_section', array(
    'title'          => esc_attr__( 'Project Settings', 'stanleywp' ),
    'description'    => esc_attr__( 'Settings for my projects.', 'stanleywp' ),
    // 'panel'          => 'projects_panel',
    'priority'       => 160,
) );
	Kirki::add_field( 'stanleywp_theme', array(
	'type'     => 'text',
	'settings' => 'project_title',
	'label'    => __( 'Title', 'stanleywp' ),
	'section'  => 'projects_section',
	'default'  => esc_attr__( 'Projects', 'stanleywp' ),
	'priority' => 10,
) );
	Kirki::add_field( 'stanleywp_theme', array(
		'type'        => 'select',
		'settings'    => 'project_items',
		'label'       => __( 'Project Items', 'stanleywp' ),
		'section'     => 'projects_section',
		'default'     => '4',
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => array(
			'6' => esc_attr__( '2 Items', 'stanleywp' ),
			'4' => esc_attr__( '3 Items', 'stanleywp' ),
			'3' => esc_attr__( '4 Items', 'stanleywp' ),
			'2' => esc_attr__( '6 Items', 'stanleywp' ),
		),

) );
	Kirki::add_section( 'typography_section', array(
    'title'          => esc_attr__( 'Typography Settings', 'stanleywp' ),
    'description'    => esc_attr__( 'Settings for my typography.', 'stanleywp' ),
    // 'panel'          => 'projects_panel',
    'priority'       => 160,
) );
	Kirki::add_field( 'stanleywp_theme', array(
	'type'        => 'typography',
	'settings'    => 'typography_setting',
	'label'       => esc_attr__( 'Typography Body Text', 'stanleywp' ),
	'section'     => 'typography_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body',
		),
	),
) );
	Kirki::add_field( 'stanleywp_theme', array(
	'type'        => 'typography',
	'settings'    => 'typography__h1_setting',
	'label'       => esc_attr__( 'Typography H1', 'stanleywp' ),
	'section'     => 'typography_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '2.5rem',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => array( 'h1', '.h1'),
		),
	),
) );
	Kirki::add_field( 'stanleywp_theme', array(
	'type'        => 'typography',
	'settings'    => 'typography__h2_setting',
	'label'       => esc_attr__( 'Typography H2', 'stanleywp' ),
	'section'     => 'typography_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '2rem',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => array( 'h2', '.h2'),
		),
	),
) );
	Kirki::add_field( 'stanleywp_theme', array(
	'type'        => 'typography',
	'settings'    => 'typography__h3_setting',
	'label'       => esc_attr__( 'Typography H3', 'stanleywp' ),
	'section'     => 'typography_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '1.75rem',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => array( 'h3', '.h3'),
		),
	),
) );
	Kirki::add_field( 'stanleywp_theme', array(
	'type'        => 'typography',
	'settings'    => 'typography__h4_setting',
	'label'       => esc_attr__( 'Typography H4', 'stanleywp' ),
	'section'     => 'typography_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '1.5rem',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => array( 'h4', '.h4'),
		),
	),
) );
	Kirki::add_field( 'stanleywp_theme', array(
	'type'        => 'typography',
	'settings'    => 'typography__footer_setting',
	'label'       => esc_attr__( 'Typography Footer', 'stanleywp' ),
	'section'     => 'typography_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'footer',
		),
	),
) );
}
