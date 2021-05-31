<?php

if(is_page('rankingall') || is_page('mitsui-numle-l')) {
    $args = array(
        'posts_per_page' => '10',
        'category_name' => 'rankall',
        'post_type' => 'card',
        'meta_key' => 'rankall-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingprice')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankprice',
        'post_type' => 'card',
        'meta_key' => 'rankprice-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingpoint')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankpoint',
        'post_type' => 'card',
        'meta_key' => 'rankpoint-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingspeed')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankspeed',
        'post_type' => 'card',
        'meta_key' => 'rankspeed-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingetc')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'ranketc',
        'post_type' => 'card',
        'meta_key' => 'ranketc-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingbusiness')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankbusi',
        'post_type' => 'card',
        'meta_key' => 'rankbusiness-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankinglady')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'ranklady',
        'post_type' => 'card',
        'meta_key' => 'ranklady-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingstudent')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankstudent',
        'post_type' => 'card',
        'meta_key' => 'rankstudent-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingvisa')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankvisa',
        'post_type' => 'card',
        'meta_key' => 'rankvisa-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingmaster')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankmaster',
        'post_type' => 'card',
        'meta_key' => 'rankmaster-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingjcb')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankjcb',
        'post_type' => 'card',
        'meta_key' => 'rankjcb-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankinggold')) {
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankgold',
        'post_type' => 'card',
        'meta_key' => 'rankgold-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingmil')) {
    
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankmil',
        'post_type' => 'card',
        'meta_key' => 'rankmil-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingsyuhu')) {
    
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'ranksyuhu',
        'post_type' => 'card',
        'meta_key' => 'ranksyuhu-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}elseif(is_page('rankingstatus')) {
    
    $args = array(
        'posts_per_page' => '-1',
        'category_name' => 'rankstatus',
        'post_type' => 'card',
        'meta_key' => 'rankstatus-number',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}

