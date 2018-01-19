<?php
/**
 * 一般的な投稿フォーマット
 */

$id_ = get_the_ID();
$post_class_ = join(" ", get_post_class());
$title = get_the_title();
$date = get_the_time('Y-m-d');
$date_s = get_the_time(get_option('date_format'));
$author = get_the_author_link( get_the_author_meta( 'ID' ) );
$content = apply_filters( 'the_content', get_the_content() );
$content = str_replace( ']]>', ']]&gt;', $content );

$tags_ = get_the_tag_list('<div><h4 style="margin-bottom:0;">タグ</h4><ul style="margin-top:0;"><li>', '<li>', '</ul></div>');
$prev = get_previous_posts_link();
$next = get_next_posts_link();

#$nav = "<div>{$nav}</div>";

$article = <<<EOD
<article id="post-{$id_}" class="{$post_class_}">
	<header><h1>{$title}</h1><div><time datetime="{$date}">{$date_s}</time>, <span class="author">{$author}</span></div></header>
	<section>{$content}{$link}</section>
	<footer>{$tags_}{$prev}{$next}</footer>
</article>
EOD;

print($article);
