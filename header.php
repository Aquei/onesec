<?php
/**
 * meta tag
 */

//charset
$charset = esc_attr(get_bloginfo('charset'));
print("<!DOCTYPE html><meta charset=\"{$charset}\">");

//モバイルフレンドリー
print('<meta name="viewport" content="width=device-width,initial-scale=1.0">');


wp_head()
?><body <?php body_class();?>>
