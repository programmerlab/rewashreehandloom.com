<?php
/**
 * Copyright Style
 * ============
 */
$section  = 'copyright_color';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'            => 'color-alpha',
	'settings'        => 'copyright_style_text_color',
	'label'           => esc_html__( 'Text Color', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => COPYRIGHT_STYLE_TEXT_COLOR,
	'transport'       => 'auto',
	'output'          => array(
		'element'  => '.copyright',
		'property' => 'color',
	),
	'active_callback' => array(
		array(
			'settings' => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'            => 'color-alpha',
	'settings'        => 'copyright_style_link_color',
	'label'           => esc_html__( 'Link Color', 'infinity' ),
	'description'     => esc_html__( 'Normal State', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => COPYRIGHT_STYLE_LINK_COLOR,
	'transport'       => 'auto',
	'output'          => array(
		'element'  => '.copyright a',
		'property' => 'color',
	),
	'active_callback' => array(
		array(
			'settings' => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'            => 'color-alpha',
	'settings'        => 'copyright_style_link_color_hover',
	'description'     => esc_html__( 'Hover State', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => COPYRIGHT_STYLE_LINK_COLOR_HOVER,
	'transport'       => 'auto',
	'output'          => array(
		'element'  => '.copyright a:hover',
		'property' => 'color',
	),
	'active_callback' => array(
		array(
			'settings' => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'settings'  => 'copyright_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your footer', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => COPYRIGHT_BG_COLOR,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '.copyright',
			'property' => 'background-color',
		),
	)
) );