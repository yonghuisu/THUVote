<?php if (!defined('THINK_PATH')) exit();?><FORM method="post" action="/localproject/index.php/Home/Vote/update">
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><INPUT type="hidden" name="id" value = "<?php echo ($vo["id"]); ?>"><br/>
学号：<INPUT type="text" name="student_no" value = "<?php echo ($vo["student_no"]); ?>"><br/>
姓名：<INPUT type="text" name="student_name" value="<?php echo ($vo["student_name"]); ?>"><br/>
教师id<INPUT type="text" name = "teacher_id" value="<?php echo ($vo["teacher_id"]); ?>"><br/>
教师姓名<INPUT type="text" name = "teacher_name" value="<?php echo ($vo["teacher_name"]); ?>"><br/><?php endforeach; endif; else: echo "" ;endif; ?>
 <INPUT type="submit" value="保存">
 </FORM>