<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/ipass/favicon.ico">
	<title>i.P.A.S.S</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>ipass.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo (BCSS); ?>bootstrap.css">
	<script type="text/javascript" src="<?php echo (BJS); ?>bootstrap.min.js"></script>
    <!-- awesome -->
    <link rel='stylesheet' href='<?php echo (HCSS); ?>font-awesome.min.css'>
    <link rel='stylesheet' href='<?php echo (HCSS); ?>font-awesome-ie7.min.css'>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo (HJS); ?>ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo (HJS); ?>ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<script type="text/javascript">
    window.document.title = '测评 - i.P.A.S.S';
</script>
<script type="text/javascript">
	var id = <?php echo ($id); ?>;
	var stenid = <?php echo ($stenid); ?>;
	url = "http://139.214.116.156:8060/student/testlist2.asp?act=test&lbid="+id+"&stenid="+stenid;
	
	function src(){
		document.getElementById('lbtest').src = url;
	}
</script>
<style type="text/css">
html,body{height:100%;padding:0;margin:0;}
/*清除ios默认按钮样式*/
input[type="button"], input[type="submit"], input[type="reset"],input[type="date"] ,select{
    -webkit-appearance: none;
}
</style>
<body onload="src()">
<iframe id='lbtest' src="" style="border: 0;width: 100%;height: 100%;margin-bottom: 20px"></iframe>
<!-- <div class="row" style="margin:0;background-color: #333;color: #faf1ce;padding: 20px;text-align: center;">
<i class="icon-phone-sign">
	<a href="tel:02467755317" class="cfff"> 联系我们:024-67755317</a>
</i>
</div> -->
</body>
</html>