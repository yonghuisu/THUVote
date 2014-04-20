<?php
define("TOKEN", "1343336983"); //配置API
define("Web_ROOT",'http://1343336983.duapp.com'); //你的域名地址
$weixin_name = '宁理微校联盟';//微信公众账号名字
$coolwb_wxh = 'guomaoxiehui';//微信帐号（wall前台显示）
$weixin_wxq = Web_ROOT.'/wall/';//这里填写你的微信墙的地址，可不修改
$huati='我爱你';//话题内容 如：#我爱你#,留空则不加前缀

/*链接数据库*/
$dbname = 'RjfoDJgmhKpspYnIdLbC';//数据库的名称

/*从环境变量里取出数据库连接需要的参数*/
$host = getenv('HTTP_BAE_ENV_ADDR_SQL_IP');
$port = getenv('HTTP_BAE_ENV_ADDR_SQL_PORT');
$user = getenv('HTTP_BAE_ENV_AK');
$pwd = getenv('HTTP_BAE_ENV_SK');

/*接着调用mysql_connect()连接服务器*/
$link = @mysql_connect("{$host}:{$port}",$user,$pwd,true);
if(!$link) {
	   die("Connect Server Failed: " . mysql_error($link));
	  }
/*连接成功后立即调用mysql_select_db()选中需要连接的数据库*/
if(!mysql_select_db($dbname,$link)) {
	   die("Select Database Failed: " . mysql_error($link));
	  }
mysql_query("SET NAMES UTF8");
//以上连接数据库
?>