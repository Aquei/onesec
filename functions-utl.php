<?php

/**
 * 要素に属性文字列を付与
 * @param $name string 付与する属性名
 * @param $attr string 追加する元の属性文字列
 * @param $val array クラス属性値の配列
 * @return string クラス属性を追加した文字列
 */

function add_attr_val($attr, $name, $val=array('')){
	$val = (array) $val;
	$val_str = esc_attr(implode($val, ' '));
	$ptn = <<<EOD
@(?:\s|^){$name}=("|')(.*?)${1}@i
EOD;

	if(stripos($attr, "{$name}=") === FALSE || preg_match($ptn, $attr) === 0){
		return trim("{$attr} class=\"{$val_str}\"");
	}else{
		$rpl = " {$name}=${1}${2} {$val_str}${1}";
		return trim(preg_replace($ptn, $rpl, $attr));
	}
}
