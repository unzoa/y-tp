<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/ipass/favicon.ico">
	<title>i.P.A.S.S-测评</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>ipass.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo (BCSS); ?>bootstrap.css">
	<script type="text/javascript" src="<?php echo (BJS); ?>bootstrap.min.js"></script>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo (HJS); ?>ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container-fluid">
	<div class="row navconbg">
    <div class="col-sm-8 col-sm-offset-2">
      <nav class="navbar navbar-default bs_nav" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="padding-top: 0;padding-bottom:0 ">
              <span class="sr-only">Toggle navigation</span>
              <span class="username" style="margin-top: 2px">
            		<img src="<?php echo (SITE_URL); ?>Jcrop/<?php echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #ffe84d solid;margin-right: 3px;margin-left: -2px;">
            		<span style="color: #ffe84d"><?php echo ($username); ?></span>
            	</span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Home/index/index');?>">
            	<!-- Brand -->
            	<img src="<?php echo (HIMG); ?>logo.png" class="logopic" style="width: 30px">
            </a>
          </div>

          <style type="text/css">
          .logopic{margin-top: 5px}
          .username{display: none;}
          @media (max-width: 767px){
          	.username{display: block;}
          	.logo{display: none;}
          	.logopic{margin-top: 0px}
          }
          </style>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse bs_collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo U('Home/Index/lb');?>">测评系统</a></li>
              <li><a href="<?php echo U('Home/Index/mytest');?>">我的测评</a></li>
              <li><a href="<?php echo U('Home/index/archive');?>">我的档案</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      	          	<span class="logo">
      	          		<img src="<?php echo (SITE_URL); ?>Jcrop/<?php echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #fff solid;margin-right: 3px;margin-left: -2px">
      			        <?php echo ($username); ?>
      			        <span class="caret"></span>
      	          	</span>

      	          <span class="username">设置<span class="caret"></span></span> 
      	          
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/ipass/Jcrop/index.html?id=<?php echo (session('stid')); ?>">修改头像</a></li>
                  <!-- <li><a href="<?php echo U('Home/index/usersetting');?>">账户设置</a></li> -->
                  <li class="divider"></li>
                  <li><a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo U('Home/Index/logout');?>">退出</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
      </nav>
    </div>
  </div>
</div>
</body>
</html>