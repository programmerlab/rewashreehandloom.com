<?php

$section  = 'social';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'settings'    => 'social_links_enable',
	'label'       => esc_html__( 'Social links', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to show social links.', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => SOCIAL_LINKS_ENABLE,
) );

Kirki::add_field( 'infinity', array(
	'type'            => 'repeater',
	'label'           => esc_html__( 'Social items', 'infinity' ),
	'description'     => wp_kses( sprintf( __( 'You can find icon class <a target="_blank" href="%s">here</a>.', 'infinity' ), 'http://fontawesome.io/cheatsheet/' ), array(
		'a' => array(
			'href'   => array(),
			'target' => array()
		)
	) ),
	'section'         => $section,
	'priority'        => $priority ++,
	'settings'        => 'social_links',
	'default'         => array(
		array(
			'link_url'   => esc_url( 'https://facebook.com' ),
			'icon_class' => 'fa-facebook'
		),
		array(
			'link_url'   => esc_url( 'https://plus.google.com' ),
			'icon_class' => 'fa-google-plus'
		),
		array(
			'link_url'   => esc_url( 'https://twitter.com' ),
			'icon_class' => 'fa-twitter'
		),
		array(
			'link_url'   => esc_url( 'https://youtube.com/' ),
			'icon_class' => 'fa-youtube-play'
		),
	),
	'fields'          => array(
		'icon_class' => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Font Awesome Class', 'infinity' ),
			'default' => '',
		),
		'link_url'   => array(
			'type'    => 'text',
			'label'   => esc_html__( 'URL', 'infinity' ),
			'default' => '',
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

/* Design */
Kirki::add_field( 'infinity', array(
	'type'            => 'custom',
	'settings'        => 'social_group_title_' . $priority ++,
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => '<div class="group_title">' . esc_html( 'Design', 'infinity' ) . '</div>',
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
	'settings'        => 'social_links_color',
	'label'           => esc_html__( 'Icon Color', 'infinity' ),
	'description'     => esc_html__( 'Normal State', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => SOCIAL_LINKS_COLOR,
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'     => '.social-menu .menu-item > a',
			'property'    => 'color',
			'media_query' => '@media (min-width: 75rem)',
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
	'settings'        => 'social_links_color_hover',
	'description'     => esc_html__( 'Hover State', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => SOCIAL_LINKS_COLOR_HOVER,
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'     => '.social-menu .menu-item:hover > a',
			'property'    => 'color',
			'media_query' => '@media (min-width: 75rem)',
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
	'settings'        => 'social_links_bg_color',
	'label'           => esc_html__( 'Background Color', 'infinity' ),
	'description'     => esc_html__( 'Normal State', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => SOCIAL_LINKS_BG_COLOR,
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'     => '.header01 .social-menu, .header01  .social-menu .menu-item',
			'property'    => 'background-color',
			'media_query' => '@media (min-width: 75rem)',
		),
		array(
			'element'     => '.header01 .site-header .social-menu ul.menu:after, .header01 .site-header .social-menu .menu-item:after',
			'property'    => ( ! is_rtl() ? 'border-right-color' : 'border-left-color' ),
			'media_query' => '@media (min-width: 75rem)'
		),
		array(
			'element'     => '.header01 .site-header .social-menu:after',
			'property'    => 'background-color',
			'media_query' => '@media (min-width: 75rem)',
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
	'settings'        => 'social_links_bg_color_hover',
	'description'     => esc_html__( 'Hover State', 'infinity' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => SOCIAL_LINKS_BG_COLOR_HOVER,
	'transport'       => 'auto',
	'output'          => array(
		array(
			'element'     => '.header01 .site-header .social-menu .menu-item:hover',
			'property'    => 'background-color',
			'media_query' => '@media ( min-width: 75rem )'
		),
		array(
			'element'     => '
				.header01 .site-header .social-menu .menu-item:hover:before,
				.header01 .site-header .social-menu .menu-item:hover:after
			',
			'property'    => ( ! is_rtl() ? 'border-right-color' : 'border-left-color' ),
			'media_query' => '@media ( min-width: 75rem )'
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