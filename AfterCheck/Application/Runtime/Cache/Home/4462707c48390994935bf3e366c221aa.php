<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!--<link rel="shortcut icon" href="/docs-assets/ico/favicon.png"> -->

<title>TAES-Tsinghua Algorithm Evaluation System</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="{{ page.base_url }}docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
	<!-- 导航条
================================================== -->
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo U('Index/main');?>" style="font-family: '微软雅黑'">良师益友</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo U('Index/main');?>" style="font-family: '微软雅黑'">首页</a></li>
				<li><a href="<?php echo U('Vote/index');?>" style="font-family: '微软雅黑'">投票</a></li>
				<li><a href="<?php echo U('CelebrityHall/celebrityHall');?>" style="font-family: '微软雅黑'">名人堂</a></li>
				<li><a href="<?php echo U('Index/message');?>" style="font-family: '微软雅黑'">留言板</a></li>
			</ul>

			<?php if(is_login()): ?><ul class="nav navbar-nav navbar-right" style="margin-right: 0">
					<li><a href="<?php echo U('User/logout');?>" style="font-family: '微软雅黑'">退出</a></li>
				</ul>
			<?php else: ?>
				<ul class="nav navbar-nav navbar-right" style="margin-right: 0">
					<li><a href="<?php echo U('Index/index');?>" style="font-family: '微软雅黑'">登录</a>
					</li>
				</ul><?php endif; ?>
		</div>
		<!--/.nav-collapse -->
	</div>
	<!--container-->
</div>
<!--navbar-->

	<!-- /头部 -->
	
	<!-- 主体 -->
	
<div id="main-container" class="container">
    <div class="row">
        


<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->

	<div class="carousel-inner">
		<div class="item active">
			<img src="img/header.jpg" alt="">
			<div class="container">
				<div class="carousel-caption">
					<h1 style="font-family: '微软雅黑'">第X届良师益友投选活动</h1>
					<p style="font-family: '微软雅黑'">主办：清华大学研究生会 （学术部）</p>
					<p>
						<a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
					</p>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.carousel --> <!-- Marketing messaging and featurettes
    ================================================== --> <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

	<h1 style="font-family: '微软雅黑'">活动介绍</h1>

	<!-- Three columns of text below the carousel -->
	<div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="Generic placeholder thumbnail">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="Generic placeholder thumbnail">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="Generic placeholder thumbnail">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
      </div>
	<!-- /.row -->
</div>
<!-- /.container --> 
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
	<!-- /主体 -->

	<!-- 底部 -->
	<p></p>

<div class="container">
    <!-- FOOTER -->
    <hr class="featurette-divider">
    <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p class="text-muted credit">本站由 <a href="http://www.bootcss.com/">Bootstrap</a> 及 <a href="http://www.thinkphp.cn/">ThinkPHP</a> 强力驱动.</p>
    </footer>
</div>


<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/Aftercheck", //当前网站地址
		"APP"    : "/Aftercheck/index.php?s=", //当前项目地址
		"PUBLIC" : "/Aftercheck/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/holder.js"></script>

	<!-- /底部 -->
</body>
</html>