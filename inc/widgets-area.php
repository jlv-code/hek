<?php 

// Widgets Area
function widgets_area() {

	register_sidebar(array(
		'id' => 'home',
		'name' => 'Barra Banner Home',
		'description' => 'Barra banner home',
		'before_widget' => '<div class="Widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="Widget-title u-bg-darkgreen u-txt-lightgray">',
		'after_title' => '</div>',
		'empty_title'=> '',
	));

	register_sidebar(array(
		'id' => 'main',
		'name' => 'Barra Lateral Principal',
		'description' => 'Barra lateral principal',
		'before_widget' => '<div class="Widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="Widget-title u-bg-darkgreen u-txt-lightgray">',
		'after_title' => '</div>',
		'empty_title'=> '',
	));

	register_sidebar(array(
		'id' => 'audiovisuales',
		'name' => 'Barra Lateral Audiovisuales',
		'description' => 'Barra lateral audiovisuales',
		'before_widget' => '<div class="Widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="Widget-title u-bg-darkgreen u-txt-lightgray">',
		'after_title' => '</div>',
		'empty_title'=> '',
	));

	register_sidebar(array(
		'id' => 'danza',
		'name' => 'Barra Lateral Danza',
		'description' => 'Barra lateral danza',
		'before_widget' => '<div class="Widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="Widget-title u-bg-darkgreen u-txt-lightgray">',
		'after_title' => '</div>',
		'empty_title'=> '',
	));

	register_sidebar(array(
		'id' => 'espectaculos',
		'name' => 'Barra Lateral Espectáculos',
		'description' => 'Barra lateral espectáculos',
		'before_widget' => '<div class="Widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="Widget-title u-bg-darkgreen u-txt-lightgray">',
		'after_title' => '</div>',
		'empty_title'=> '',
	));

	register_sidebar(array(
		'id' => 'musica',
		'name' => 'Barra Lateral Música',
		'description' => 'Barra lateral música',
		'before_widget' => '<div class="Widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="Widget-title u-bg-darkgreen u-txt-lightgray">',
		'after_title' => '</div>',
		'empty_title'=> '',
	));

	register_sidebar(array(
		'id' => 'teatro',
		'name' => 'Barra Lateral Teatro',
		'description' => 'Barra lateral teatro',
		'before_widget' => '<div class="Widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="Widget-title u-bg-darkgreen u-txt-lightgray">',
		'after_title' => '</div>',
		'empty_title'=> '',
	));

}

add_action( 'widgets_init', 'widgets_area' );