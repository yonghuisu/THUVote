<?php
header("content-Type: text/html; charset=utf-8");
require_once(dirname(__FILE__) . "/wechat.php");
include("db.php");
define("MOREN", "title|欢迎关注{$weixin_name}#pic|@title|回话题加你想说的话，审核通过后即可上墙~");//丢包后默认回复
define("FLAG", "@");//星标标识，默认为 @,用户对话里包含此标识则设置为星标，用于留言
//配置结束

$w = new Wechat(TOKEN, DEBUG);
if (isset($_GET['echostr'])) 
{
    $w->valid();
    exit();
}

//回复用户
$w->reply("reply_cb");
exit();

function reply_cb($request, $w)//消息回复主函数
{
    $to = $request['ToUserName'];
    $from = $request['FromUserName'];
	$time = $w->get_creattime();
    if ($w->get_msg_type() == "location") //发送位置接口
	{
		$lacation = "x@".(string)$request['Location_X']."@".(string)$request['Location_Y'];
		$lacation = urlencode(str_replace('\.','\\\.',$lacation));
		$lacation = urldecode(xiaojo($lacation,$from,$to));
		return  $lacation;
    }
    else if ($w->get_msg_type() == "image")//返回图片地址
	{ 
		$PicUrl = $request['PicUrl'];
		$pic = urldecode(xiaojo("&".$PicUrl,$from,$to));
		//$w->set_funcflag();
		return $pic;
    }
	else if ($w->get_msg_type() == "voice") //用户发语音时回复语音或音乐,请在此配置默认语音回复
	{
    
		return array(
			"title" =>  "你好",
			"description" =>  "亲爱的主人",           
			"murl" =>  "http://weixen-file.stor.sinaapp.com/b/xiaojo.mp3",//语音地址，建议自定义一个语音
			"hqurl" =>  "http://weixen-file.stor.sinaapp.com/b/xiaojo.mp3",
		);
    }
	else if ($w->get_msg_type() == "event")//事件检测
	{ 
		if ($w->get_event_type() == "subscribe")//首次关注回复请在后台设置关键词为 "subscribe" 的图文、文本或语音规则
		{
             $sql_flag="replace`weixin_flag` (`openid`,`flag`,`vote`,`nickname`) VALUES ('$from','-1','1','$nicheng')";
        		mysql_query($sql_flag);
			return media(urldecode( MOREN));		
		}
		elseif($w->get_event_type() == "unsubscribe")
		{
            
           $sql_flag="replace`weixin_flag` (`openid`,`flag`,`vote`,`nickname`) VALUES ('$from','-1','1','$nicheng')";
        		mysql_query($sql_flag);
			$unsub = media(urldecode( MOREN));
			return $unsub;
		}
		elseif($w->get_event_type() == "click")
		{
			$menukey = $w->get_event_key();
			$menu = xiaojo($menukey,$from,$to);
			return $menu;
		}
		else
		{
			$menukey = $w->get_event_key();
			return $menukey;
		}
    }
    $content = trim($request['Content']);
   	$firsttime = $content;
	if ($content !== "") //发纯文本
    {
        //$w->set_funcflag(); //如果有必要的话，加星标，方便在web处理
		$content = $w->biaoqing($content); //表情处理
		if(strstr($content,FLAG))//如果有星标的标记则设为星标(用于留言)
		{ 
			$w->set_funcflag();
		}

				/*话题判断函数开始*/
				function startsWith($haystack,$needle,$case=false) {
				if($case){return (strcmp(substr($haystack, 0, strlen($needle)),$needle)===0);}
				return (strcasecmp(substr($haystack, 0, strlen($needle)),$needle)===0);
				}
				/*话题判断函数结束*/
              	include("db.php");
				if(startsWith($content, $huati)){
				require "moni/config.php";
				require "moni/include/WeiXin.php";
				$weiXin = new WeiXin($G_CONFIG['weiXin']);
				$lastMsg = $weiXin->getLatestMsgs();
				print_r($lastMsg);
				$weiXin->getPicture($lastMsg[0]['fakeid']);
				if($lastMsg[0][type] == '1'){
				$messageid = $lastMsg[0]['id'];
				$fakeid = $lastMsg[0]['fakeid'];
				$nicheng = $lastMsg[0]['nick_name'];
				$content = $lastMsg[0]['content'];
				$nicheng = strip_tags($nicheng);
				$content = strip_tags($content);
				$content = @str_replace(array('"','\'','゛','&nbsp;'), array('','','',''), $content);
				$nicheng = @str_replace(array('"','\'','゛','&nbsp;'), array('','','',''), $nicheng);
				$imgurl = Web_ROOT.'/weixin/'.$fakeid.'.jpg';
				$result = mysql_query("SELECT * FROM  `weixin_wall` WHERE  `fakeid` = '$fakeid'");
				$row = mysql_fetch_array($result,MYSQL_ASSOC);
				/* $sql = "INSERT INTO `weixin_wall` (`id`,`messageid`,`fakeid`,`num`,`content`,`nickname`,`avatar`,`ret`,`status`) VALUES (NULL,'$messageid','$fakeid ','-1','$content','$nicheng','$imgurl','0','0')";
mysql_query($sql); */
				$result = mysql_query("SELECT * FROM  `weixin_wall` WHERE  `fakeid` = '$fakeid'");
				$row = mysql_fetch_array($result,MYSQL_ASSOC);
				$sql_num="SELECT * FROM  `weixin_wall_num` ";
				$query_num=mysql_query($sql_num) or die(mysql_error());
				$q=mysql_fetch_row($query_num);
				$num=$q[0];
				$sql = "INSERT INTO `weixin_wall` (`id`,`messageid`,`fakeid`,`num`,`content`,`nickname`,`avatar`,`ret`,`status`) VALUES (NULL,'$messageid','$fakeid ','$num','$content','$nicheng','$imgurl','1','0')";
				mysql_query($sql);
				$sql_num="UPDATE `weixin_wall_num` SET `num` = `num`+1";
				$query_num=mysql_query($sql_num) or die(mysql_error());
				}
                $sql_name="UPDATE  `weixin_flag` SET `nickname` = '$nicheng'  WHERE  `openid` =  '{$from}';";
        		mysql_query($sql_name);
 
   				
                  $reply = "title|发送成功#pic|#url|{$weixin_wxq}@title|你已经成功发送，	请等待上墙！PS:点击我，查看微信墙！";	
                }
        
        /*
        
		if($reply=="")
		{
			$reply = MOREN ;
		}*/
        $reply = media(urldecode( $reply));
		return  $reply;

    }
	else
	{
		return  MOREN;
	}
    
}

?>