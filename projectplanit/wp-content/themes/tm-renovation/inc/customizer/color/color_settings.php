<?php

$section  = 'color_settings';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'settings'  => 'site_color_primary',
	'label'     => esc_html__( 'Primary color', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => PRIMARY_COLOR,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '
				.site-maintenance .social-menu .menu li a:hover:before,
				.error404 .not-found h2,
				.hot-line .wpb_text_column:last-child h2,
				.we-are-layout2 .wpb_column:last-child .thememove-btn,
				.widget_product_search form.woocommerce-product-search:after,
				.archive.projects .project .read-more-link,
				.tm-project-details table .meta-title,
				.single-project .project-meta .meta-title,
				.comments-area .comment .metadata .comment-reply-link,
				.thememove-blog.meta-white-bg .post .entry-meta i,
				.post .read-more > a,
				.sidebar ul li a:before, .wpb_widgetised_column ul li a:before,
				.sidebar ul li.cat-item a:before,
				.sidebar .widget_rss .rsswidget:hover,
				.wpb_widgetised_column .widget_rss .rsswidget:hover,
				.wpb_widgetised_column ul li.cat-item a:before,
				.sidebar .widget_search span:before,
				.wpb_widgetised_column .widget_search span:before,
				.eg-renovation-member-wrapper .social li a:hover,
				.vc_tta-accordion .vc_tta-icon,
				.wrench-list.dark-bg a:hover,
				.wrench-list li:before,
				.header03 #site-navigation .menu > ul > li.menu-item-has-children:after,
				.header03 #site-navigation .menu > li.menu-item-has-children:after,
				.header03 .contact-info i,
				.header01 .extra-info i,
				.thememove-blog .post:hover .entry-title a
				',
			'property' => 'color',
		),
		array(
			'element'  => '
				.left-menu .menu-item:hover a,
				.introducing-our-team .vc_custom_heading,
				.our-services.list-layout > .wpb_column:first-child > .wpb_wrapper .thememove-icon i,
				.our-services.list-layout > .wpb_column:first-child > .vc_column-inner > .wpb_wrapper .thememove-icon i,
				.header02 .extra-info i,
				.pagination.posts-pagination .page-numbers.next,
				.pagination.loop-pagination .page-numbers.next,
				.pagination.posts-pagination .page-numbers.prev,
				.pagination.loop-pagination .page-numbers.prev,
				.post .post-share-buttons span,
				.single-project .post-share-buttons span,
				.post .entry-meta,
				.sidebar .widget_tag_cloud .tagcloud a:hover,
				.wpb_widgetised_column .widget_tag_cloud .tagcloud a:hover,
				.call-us .thememove-icon i,
				.price-table .vc_custom_heading,
				.our-services.style3 .wpb_column:hover .thememove-icon i,
				.our-services.style2 .thememove-icon i,
				.be-a-piece-of-us .thememove-btn,
				.be-a-piece-of-us .thememove-icon i,
				.thememove-testimonials .testimonials-list .owl-dot.active,
				.thememove-testimonials .testimonials-list .owl-dot:hover,
				.our-services .thememove-btn:hover,
				.we-are ul li:before,
				.our-features > div > .wpb_wrapper:after,
				.our-features > div > .vc_column-inner > .wpb_wrapper:after,
				.site-footer .widget-title:before,
				.site-footer .widget-title:after,
				.header03 .site-branding,
				.header03 .site-branding:before,
				.header01 .site-branding,
				.header01 .site-branding:before,
				.scrollup,
				table th,
				.our-features-layout3:hover > .wpb_column:before',
			'property' => 'background-color',
		),
		array(
			'element'  => '
				.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-heading,
				.esg-pagination.pagination-rect .esg-pagination-button:hover,
				.esg-pagination.pagination-rect .esg-pagination-button.selected,
				.eg-renovation-shop-wrapper .eg-renovation-shop-element-32,
				.eg-renovation-project-wrapper .eg-renovation-project-element-17,
				.eg-renovation-project-new-wrapper .eg-renovation-project-new-element-17,
				.renovation .esg-navigationbutton,
				.renovation .esg-filterbutton',
			'property' => 'background-color',
			'units'    => '!important',
		),
		array(
			'element'  => '
				.left-menu .menu-item:hover a,
				.sidebar .widget_tag_cloud .tagcloud a:hover,
				.wpb_widgetised_column .widget_tag_cloud .tagcloud a:hover,
				.be-a-piece-of-us .thememove-btn,
				.thememove-testimonials blockquote,
				.our-features > div > .wpb_wrapper,
				.our-features > div > .vc_column-inner > .wpb_wrapper,
				.search-box input[type="search"], .mini-cart .widget_shopping_cart_content,
				#site-navigation .menu li:hover > .sub-menu, #site-navigation .menu li:hover > .children,
				input:focus, textarea:focus, blockquote
			',
			'property' => 'border-color',
		),
		array(
			'element'  => '
				.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-body,
				.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-heading,
				.eg-renovation-client-wrapper:hover
			',
			'property' => 'border-color',
			'units'    => '!important',
		),
		array(
			'element'  => '
				.our-services.list-layout > .wpb_column:first-child > .wpb_wrapper .thememove-icon:after,
				.our-services.list-layout > .wpb_column:first-child > .vc_column-inner > .wpb_wrapper .thememove-icon:after,
				.pagination.posts-pagination .page-numbers.next:after,
				.pagination.loop-pagination .page-numbers.next:after,
				.pagination.posts-pagination .page-numbers.prev:after,
				.pagination.loop-pagination .page-numbers.prev:after,
				.post .post-share-buttons span:after,
				.single-project .post-share-buttons span:after,
				.post .entry-meta:after,
				.call-us .thememove-icon:after,
				.our-services.style3 .wpb_column:hover .thememove-icon:after,
				.our-services.style2 .thememove-icon:after,
				.be-a-piece-of-us .thememove-icon:after,
				.eg-renovation-shop-wrapper .eg-renovation-shop-element-32:after,
				.eg-renovation-project-wrapper .eg-renovation-project-element-17:after,
				.eg-renovation-project-new-wrapper .eg-renovation-project-new-element-17:after,
				.renovation .esg-navigationbutton:after,
				.renovation .esg-filters .esg-filterbutton.selected:before,
				.renovation .esg-filters .esg-filterbutton:hover:before,
				.renovation .esg-filters .esg-filterbutton:after,
				.our-services .wpb_column:hover .btn span:after,
				.header03 .site-branding:after,
				.header02 .extra-info i:after,
				.header01 .site-branding:after,
				.our-features-layout3:hover > .wpb_column:after',
			'property' => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
		),
		array(
			'element'  => '
				.our-services.list-layout > .wpb_column:first-child > .wpb_wrapper .thememove-icon:before,
				.our-services.list-layout > .wpb_column:first-child > .vc_column-inner > .wpb_wrapper .thememove-icon:before,
				.pagination.posts-pagination .page-numbers.next:before,
				.pagination.loop-pagination .page-numbers.next:before,
				.pagination.posts-pagination .page-numbers.prev:before,
				.pagination.loop-pagination .page-numbers.prev:before,
				.call-us .thememove-icon:before,
				.our-services.style3 .wpb_column:hover .thememove-icon:before,
				.our-services.style2 .thememove-icon:before,
				.be-a-piece-of-us .thememove-icon:before,
				.eg-renovation-shop-wrapper .eg-renovation-shop-element-32:before,
				.eg-renovation-project-wrapper .eg-renovation-project-element-17:before,
				.eg-renovation-project-new-wrapper .eg-renovation-project-new-element-17:before,
				.renovation .esg-navigationbutton:before,
				.our-services .wpb_column:hover .btn span:before,
				.our-features > div > .wpb_wrapper:before,
				.our-features > div > .vc_column-inner > .wpb_wrapper:before,
				.header02 .extra-info i + div:before',
			'property' => ( ! is_rtl() ? 'border-right-color' : 'border-left-color' ),
		),
		array(
			'element'  => '
				.header01 #site-navigation .menu > ul > li:hover,
				.header01 #site-navigation .menu > ul > li.current_page_item,
				.header01 #site-navigation .menu > li.current-menu-item,
				.header01 #site-navigation .menu > li:hover,
				.header01 #site-navigation .menu > ul > li > a:after,
				.header01 #site-navigation .menu > li > a:after',
			'property' => 'border-bottom-color',
		),
		array(
			'element'  => '
				.left-menu .menu-item:hover + li > a,
				.introducing-our-team .vc_custom_heading:before',
			'property' => 'border-top-color',
		),
		array(
			'element'     => '
				.header03 #site-navigation .menu > ul > li.current-menu-ancestor > a:before,
				.header03 #site-navigation .menu > li.current-menu-ancestor > a:before,
				.header03 #site-navigation .menu > ul > li:hover > a:before,
				.header03 #site-navigation .menu > li:hover > a:before',
			'property'    => 'background-color',
			'media_query' => '@media (min-width: 75rem)',
		),
		array(
			'element'     => '.header01 .site-header, .header03 .site-header',
			'property'    => 'background-color',
			'media_query' => '@media ( max-width: 74.9375rem )',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'settings'  => 'site_color_secondary',
	'label'     => esc_html__( 'Secondary color', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'auto',
	'default'   => SECONDARY_COLOR,
	'output'    => array(
		array(
			'element'  => '
				.hot-line.style2 .wpb_text_column:last-child h4,
				.eg-renovation-member-wrapper .esg-entry-content strong,
				.eg-renovation-member-2-wrapper .esg-entry-content strong,
				.left-menu .menu-item:hover a:after,
				.left-menu .menu-item:hover a,
				.sidebar .widget_tag_cloud .tagcloud a,
				.wpb_widgetised_column .widget_tag_cloud .tagcloud a,
				.sidebar .widget_rss .rsswidget,
				.wpb_widgetised_column .widget_rss .rsswidget,
				.sidebar .widget_recent_comments .comment-author-link a,
				.wpb_widgetised_column .widget_recent_comments .comment-author-link a,
				.archive.projects .project h3,
				.comments-area .comment .metadata .fn,
				.post .entry-meta i,
				.post .entry-meta a:hover,
				.post .entry-meta,
				.post-share-buttons span,
				.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-controls-icon,
				.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-icon,
				.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-title-text,
				.vc_tta-accordion .vc_tta-panel-title .vc_tta-title-text,
				.vc_tta-accordion .vc_tta-panel-body table th,
				.our-services .thememove-btn,
				.our-services .thememove-btn:hover,
				.our-services .wpb_column:hover .btn i
				',
			'property' => 'color',
		),
		array(
			'element'  => '
				.our-services.style3 .wpb_column:hover .thememove-icon i,
				.renovation .esg-filterbutton
			',
			'property' => 'color',
			'units'    => '!important',
		),
		array(
			'element'  => '
				.site-maintenance:before,
				.renovation#dark-filter .esg-filters .esg-filter-wrapper:before, .renovation#dark-filter .esg-filters .esg-filter-wrapper:after,
				.our-services.list-layout .wpb_column:first-child > .wpb_wrapper .wpb_text_column:before,
				.our-services.list-layout .wpb_column:first-child > .vc_column-inner > .wpb_wrapper .wpb_text_column:before,
				.hot-line > .wpb_wrapper:before,
				.hot-line > .vc_column-inner > .wpb_wrapper:before,
				.we-are-layout2 .wpb_column:last-child .thememove-btn,
				.single-project .gallery a:before,
				.pagination.posts-pagination .page-numbers.current,
				.pagination.loop-pagination .page-numbers.current,
				.pagination.posts-pagination .page-numbers:hover,
				.pagination.loop-pagination .page-numbers:hover,
				.about-us-page-title:before,
				.our-services.style3 .wpb_column .thememove-icon i,
				.our-services .thememove-btn i,
				.quick-quote .wpb_column:nth-child(2) > .wpb_wrapper:before,
				.quick-quote .wpb_column:nth-child(2) > .vc_column-inner > .wpb_wrapper:before,
				.quick-quote .wpb_column:nth-child(2):after,
				.header02 .mini-cart,
				.header02 .search-box,
				.our-features-layout3:hover > .wpb_column
			',
			'property' => 'background-color',
		),
		array(
			'element'  => '
				.renovation .esg-pagination .esg-pagination-button.selected,
				.renovation .esg-pagination .esg-pagination-button:hover,
				.renovation .esg-navigationbutton:hover
			',
			'property' => 'background-color',
			'units'    => '!important',
		),
		array(
			'element'  => '
				.we-are-layout2 .wpb_column:last-child .thememove-btn,
				.header02 .mini-cart .widget_shopping_cart_content,
				.header02 .search-box input[type="search"]',
			'property' => 'border-color',
		),
		array(
			'element'  => '
				.pagination.posts-pagination .page-numbers.current:before,
				.pagination.loop-pagination .page-numbers.current:before,
				.pagination.posts-pagination .page-numbers:hover:before,
				.pagination.loop-pagination .page-numbers:hover:before,
				.our-services.style3 .wpb_column .thememove-icon:before,
				.our-services .thememove-btn span:before,
				.renovation .esg-navigationbutton:hover:before,
				.header02 .mini-cart:before,
				.header02 .search-box:before
			',
			'property' => ( ! is_rtl() ? 'border-right-color' : 'border-left-color' ),
		),
		array(
			'element'  => '
				.renovation .esg-pagination .esg-pagination-button.selected:before,
				.renovation .esg-pagination .esg-pagination-button:hover:before
			',
			'property' => ( ! is_rtl() ? 'border-right-color' : 'border-left-color' ),
			'units'    => '!important',
		),
		array(
			'element'  => '
				.pagination.posts-pagination .page-numbers.current:after,
				.pagination.loop-pagination .page-numbers.current:after,
				.pagination.posts-pagination .page-numbers:hover:after,
				.pagination.loop-pagination .page-numbers:hover:after,
				.our-services.style3 .wpb_column .thememove-icon:after,
				.our-services .thememove-btn span:after,
				.renovation .esg-navigationbutton:hover:after,
				.header02 .mini-cart:after,
				.header02 .search-box:after
				',
			'property' => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
		),
		array(
			'element'  => '
				.renovation .esg-pagination .esg-pagination-button.selected:after,
				.renovation .esg-pagination .esg-pagination-button:hover:after
				',
			'property' => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
			'units'    => '!important',
		),
		array(
			'element'     => '
				.header01 .search-box i,
				.header01 .mini-cart .mini-cart__button .mini-cart-icon:before
			',
			'property'    => 'color',
			'media_query' => '@media (max-width: 74.9375rem)'
		),
		array(
			'element'     => '
				.quick-quote .wpb_column:nth-child(2) > .wpb_wrapper:after,
				.quick-quote .wpb_column:nth-child(2) > .vc_column-inner > .wpb_wrapper:after
			',
			'property'    => 'background-color',
			'media_query' => '@media (max-width: 74.9375rem)'
		),
		array(
			'element'     => '.quick-quote .wpb_column:nth-child(2) > .wpb_wrapper:after, .quick-quote .wpb_column:nth-child(2) > .vc_column-inner > .wpb_wrapper:after',
			'property'    => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
			'media_query' => '@media ( min-width: 75rem )'
		),
		array(
			'element'     => '.contact-info li:before',
			'property'    => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
			'media_query' => '@media ( min-width: 48rem )'
		),
		array(
			'element'     => '.contact-info:before, .contact-info li',
			'property'    => 'background-color',
			'media_query' => '@media ( min-width: 48rem )'
		),
	),
) );