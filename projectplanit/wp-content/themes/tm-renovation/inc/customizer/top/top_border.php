<?php
/**
 * Top Area Border
 * ============
 */
$section  = 'top_border';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'            => 'dimension',
	'settings'        => 'top_border_width',
	'label'           => esc_html__( 'Border width', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => TOP_BORDER_WIDTH,
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'  => '.site-top',
			'property' => 'border-width',
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'top_border_style',
	'label'           => esc_html__( 'Border style', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => TOP_BORDER_STYLE,
	'transport'       => 'auto',
	'choices'         => array(
		'solid'  => esc_html__( 'Solid', 'infinity' ),
		'dashed' => esc_html__( 'Dashed', 'infinity' ),
		'dotted' => esc_html__( 'Dotted', 'infinity' ),
		'double' => esc_html__( 'Double', 'infinity' ),
	),
	'output'          => array(
		array(
			'element'  => '.site-top',
			'property' => 'border-style',
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'            => 'color-alpha',
	'settings'        => 'top_border_color',
	'label'           => esc_html__( 'Border color', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => TOP_BORDER_COLOR,
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'  => '.site-top',
			'property' => 'border-color',
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );