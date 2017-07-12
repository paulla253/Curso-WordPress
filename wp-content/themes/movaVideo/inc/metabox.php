<?php

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'      => __( 'Informações adicionais', 'textdomain' ),
		'post_types' => 'post',
		'fields'     => array(
			array(
				'id'   => 'subtitulo',
				'name' => __( 'SubTitulo', 'textdomain' ),
				'type' => 'text',
			),
			array(
				'id'   => 'resumo',
				'name' => __( 'Resumo', 'textdomain' ),
				'type' => 'textarea',
			),
		),
	);
	return $meta_boxes;
}