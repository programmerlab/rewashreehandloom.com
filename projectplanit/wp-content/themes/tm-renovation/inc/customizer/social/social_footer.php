<?php

$section  = 'social_footer';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'            => 'color-alpha',
	'settings'        => 'footer_social_links_color',
	'label'           => esc_html__( 'Icon Color', 'infinity' ),
	'description'     => esc_html__( 'Normal State', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => FOOTER_SOCIAL_LINKS_COLOR,
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'  => '.site-footer .social-menu .menu-item > a',
			'property' => 'color'
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'social_links_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'            => 'color-alpha',
	'settings'        => 'footer_social_links_color_hover',
	'description'     => esc_html__( 'Hover State', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => FOOTER_SOCIAL_LINKS_COLOR_HOVER,
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'  => '.site-footer .social-menu .menu-item:hover > a',
			'property' => 'color',
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'social_links_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'            => 'color-alpha',
	'settings'        => 'footer_social_links_bg_color',
	'label'           => esc_html__( 'Background Color', 'infinity' ),
	'description'     => esc_html__( 'Normal State', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => FOOTER_SOCIAL_LINKS_BG_COLOR,
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'  => '.site-footer .social-menu, .site-footer .social-menu:after, .site-footer .social-menu .menu-item',
			'property' => 'background-color',
		),
		array(
			'element'  => '.site-footer .social-menu .menu:after, .site-footer .social-menu .menu .menu-item:after',
			'property' => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
		),
	),
	'active_callback' => array(
		array(
			'settings' => 'social_links_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'            => 'color-alpha',
	'settings'        => 'footer_social_links_bg_color_hover',
	'description'     => esc_html__( 'Hover State', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => FOOTER_SOCIAL_LINKS_BG_COLOR_HOVER,
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'  => '.site-footer .social-menu .menu .menu-item:hover',
			'property' => 'background-color',
		),
		array(
			'element'  => '
				.site-footer .social-menu .menu .menu-item:hover:before,
				.site-footer .social-menu .menu .menu-item:hover:after',
			'property' => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
		)
	),
	'active_callback' => array(
		array(
			'settings' => 'social_links_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );