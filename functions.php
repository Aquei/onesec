<?php

include_once "functions-utl.php";

/**
 * テーマがサポートする機能
 */
add_theme_support( 'title-tag' ); //タイトルタグをサポート
add_theme_support( 'custom-logo' ); //theme logoのサポート
add_theme_support( 'automatic-feed-links' ); //フィードリンク
//style

function add_default_style(){
	//wp_register_style('onesec', get_template_directory_uri() . '/style.css' );
	//wp_enqueue_style('onesec');
	
	$style = trim(explode('*/', file_get_contents(get_template_directory() . '/style.css', 2))[1]);
	print("<style>{$style}</style>");
}
add_action('wp_head', 'add_default_style');

function add_inline_style(){
	if(is_archive() || is_home()){
		$style = trim(file_get_contents(get_template_directory(). '/styles/archive.css'));
	}else if(is_singular()){
		$style = trim(file_get_contents(get_template_directory(). '/styles/singular.css'));
	}

	if($style){
		print("<style>{$style}</style>");
	}
}
add_action('wp_head', 'add_inline_style');


function add_onesec_btn_class($attr){
	return add_attr_val($attr, "class", array('onesec-btn'));
}

add_filter('previous_posts_link_attributes', 'add_onesec_btn_class');
add_filter('next_posts_link_attributes', 'add_onesec_btn_class');
