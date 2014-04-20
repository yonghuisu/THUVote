<?php
//私密信息配置

$G_ROOT = dirname(__FILE__);
$G_CONFIG["weiXin"] = array(
	'account' => 'xilinhand',
	'password' => 'Aa6039',
	'cookiePath' => $G_ROOT. '/cache/cookie', // cookie缓存文件路径
	'webTokenPath' => $G_ROOT. '/cache/webToken', // webToken缓存文件路径
);
require '../config.php';