<?php
/**
 * アーカイブページでのコンテンツ表示
 */
$title = get_the_title();
$title_e = esc_attr($title);
$url = get_permalink();
$date = get_the_time('Y年m月d日');

$link = <<<EOD
<li><a href="{$url}" title="{$title_e}"><time>{$date}</time><span>{$title}</span></a>
EOD;

print($link);
