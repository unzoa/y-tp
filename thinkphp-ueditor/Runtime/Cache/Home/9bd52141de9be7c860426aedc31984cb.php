<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
<script type="text/javascript" src="<?php echo (U_); ?>ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo (U_); ?>ueditor.all.js"></script>
<script type="text/javascript">
	window.onload = function(){
		UE.getEditor('content');
	}
</script>

<form method="post" action="<?php echo U('Home/Index/ueditor');?>" enctype="multipart/form-data">
	<textarea name="content" id="content" style="width:100%;"></textarea>
	<input type="submit" value="send"></input>
</form>
	
</body>
</html>