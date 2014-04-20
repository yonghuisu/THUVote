<?php
namespace Home\Model;
use Think\Model;
class MessageModel extends Model{
	// 定义自动验证
	protected $_validate    =   array(
			array('student_no','require','学号必须'),
			array('student_name','require','姓名必须'),
			array('content','require','必须要有留言内容'),
	);
	// 定义自动完成
	protected $_auto    =   array(
			array('create_time','time',1,'function'),
	);
}