<?php
@header("Content-type: text/html; charset=utf-8");
 
/*链接数据库*/
require_once("../config.php");
	   $dbname ='RjfoDJgmhKpspYnIdLbC';//这里填写你BAE数据库的名称称
 
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