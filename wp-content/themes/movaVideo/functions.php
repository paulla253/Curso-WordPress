<?php

// Imagens dos posts
add_theme_support( 'post-thumbnails' );


// pegar o arquivo metabox.php
require get_template_directory() . '/inc/metabox.php';

// pegar o arquivo marca header
require get_template_directory() . '/inc/marca.php';

// Registrar Custom Navigation Walker
require_once('inc/wp-bootstrap-navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'movaVideo' ),
) );

//Registro do sidebar(id->sempre unicas).
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name'         => __( 'Minha Conta' ),
		'id'           => 'sidebar-login',
		'description'  => __( 'Formulario de login para o painel admin.' ),
		'before_title' => '<h2>',
		'after_title'  => '</h2>',
	) );

	register_sidebar(array(
		'name' => __( 'Regras do Portal'),
		'id' => 'sidebar-regras',
		'description' => __( 'Informações sobre regras do portal.'),
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

}