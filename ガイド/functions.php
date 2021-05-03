<?php

//スマホ表示分岐
function is_mobile(){
$useragents = array(
'iPhone', // iPhone
'iPad', // iPod touch
'Android.*Mobile', // 1.5+ Android *** Only mobile
'Windows.*Phone', // *** Windows Phone
'dream', // Pre 1.5 Android
'CUPCAKE', // 1.5+ Android
'blackberry9500', // Storm
'blackberry9530', // Storm
'blackberry9520', // Storm v2
'blackberry9550', // Storm v2
'blackberry9800', // Torch
'webOS', // Palm Pre Experimental
'incognito', // Other iPhone browser
'webmate' // Other iPhone browser

);
$pattern = '/'.implode('|', $useragents).'/i';
return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


//アイキャッチ画像設定
add_theme_support('post-thumbnails');


function my_excerpt_length($length) {
    return 80;
    }
add_filter('excerpt_length', 'my_excerpt_length');

function excerpt_more_alter($more){
    return "...";
    }
add_filter("excerpt_more", "excerpt_more_alter");

function custom_mime_types( $mimes ) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
  }
add_filter( 'upload_mimes', 'custom_mime_types' );