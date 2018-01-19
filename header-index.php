<?php
get_header();

/**
 * ブログのタイトル等を表示するセクション
 */

/**
 * タイトル
 */
$home_url = home_url( '/' );
if(function_exists( 'the_custom_logo' ) && $logo_id = get_theme_mod('custom_logo')){
	//サイトのロゴを表示する
	$attr = [
		'alt' => esc_attr(get_bloginfo('name')),
		'sizes' => '(min-width:1080px) calc(100vw - 758px), 100vw'
	];
	$img = wp_get_attachment_image($logo_id, 'thumbnail', false, $attr);
	$h1 = "<h1><a href=\"${home_url}\" class=\"thin\">${img}</a></h1>";
}else{
	$title = esc_html(get_bloginfo('name'));
	$h1 = "<h1><a href=\"${home_url}\" class=\"thin\">${title}</a></h1>";
}

/**
 * サイトの説明
 */
$description = esc_html(get_bloginfo('description'));
$h2 = $description?"<h2 class=\"thin\">${description}</h2>":"";


/**
 * 表示
 */
echo <<<EOD
<header class="main">${h1}${h2}</header>
EOD;
