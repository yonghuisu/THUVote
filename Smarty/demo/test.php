<?php
include_once('../libs/Smarty.class.php');
$smarty = new Smarty;
$var = 'hello';
$smarty->assign('abc',$var);
$smarty->display('test.html');
