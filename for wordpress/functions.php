<?php

// Подключение стилей и скриптов
add_action( 'wp_enqueue_scripts', 'big_conference_scripts' );
function big_conference_scripts(){
    wp_enqueue_style( 'vendor', get_template_directory_uri() . '/css/vendor.css', array(), null );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css', array('vendor'), null );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}

// Регистрация меню для переключения языков
function big_conference_theme_setup() {
	register_nav_menu( "language-menu", "Языковое меню" );
}
add_action( 'after_setup_theme', 'big_conference_theme_setup' );

// Изменяем атрибут id у тегов li в 'Языковом меню'
function filter_menu_item_id($menu_id, $item, $args, $depth) {
    return $args->theme_location === 'language-menu' ? '' : $menu_id;
}
add_filter( 'nav_menu_item_id', 'filter_menu_item_id', 10, 4 );

// Изменяем атрибут class у тегов li в 'Языковом меню'
function filter_nav_menu_css_classes( $classes, $item, $args, $depth) {
	if ($args->theme_location === 'language-menu') {
		$classes = [
			'language-nav__item'
		];
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );

// Изменяем атрибут class у тегов 'a' в 'Языковом меню'
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ){
	if ($args->theme_location === 'language-menu') {
        $atts['class'] = 'language-nav__link';

        if ($item->current) {
            $atts['class'] .= ' language-nav__link--active';
        }
    }
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
