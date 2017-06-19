<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/csj/favicon.ico">
	<title>tp-Ajax</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>index.js"></script>
	
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
	<div id="wx_pic" style="margin:0 auto;display:none;">
		<img src="<?php echo (HIMG); ?>wx_logo.jpg">
	</div>
</head>
<script type="text/javascript">
	$(document).ready(function(){
			$('#get').click(function(){
				var text = $('#text').val();
				if (text.length==0) {
					alert('aaa');
				}else{
					$.ajax({
						type:"GET",
						async:true,
						url:"<?php echo U('Home/Index/getTest');?>",
						data:{name:text},
						error:function(msg){alert(msg)},
						success:function(data){alert(data)}
					})
				}
			})

			$('#post').click(function(){
				var text = $('#text').val();
				if (text.length==0) {
					alert('aaa');
				}else{
					$.post('<?php echo U("Home/Index/postTest");?>',{name:text},function(data,status){
						alert('数据：'+data+"\n状态："+status);
					})
				}
			})
		})
</script>
<body>
	<input type="text" id="text"></input>
	<button id="get" type="button">get</button>
	<button id="post" type="button">post</button>
</body>
</html>