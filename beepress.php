<?php
/*
Plugin Name: 蜜蜂采集
Plugin URI: http://xingyue.artizen.me?source=wp
Description: 蜜蜂采集(BeePress) 是一款能够帮助你导入微信公众号文章、知乎专栏文章、简书文章、今日头条文章的插件(支持规则配置采集其他网站文章)，可以实现单篇或者批量导入、自动同步文章、采集指定公众号所有历史文章(公众号自动同步和历史文章功能不再提供)，支持将图片资源保存到本地。
Version: 6.9.9
Author: Bee
Author URI: http://xingyue.artizen.me?source=wp
License: GPL
*/

/**
 * 初始化
 */
define('BEEPRESS_VERSION', '6.9.9');
if(!class_exists('simple_html_dom_node')){
	require_once("simple_html_dom.php");
}
if(!class_exists('BeePressUtils')){
	require_once("beepress-utils.php");
}
$utils = new BeePressUtils();


require_once "beebox/beebox.php";

require_once( ABSPATH . 'wp-admin/includes/file.php' );
require_once( ABSPATH . 'wp-admin/includes/image.php' );
require_once( ABSPATH . 'wp-admin/includes/media.php' );
require_once( ABSPATH . 'wp-admin/includes/post.php' );

