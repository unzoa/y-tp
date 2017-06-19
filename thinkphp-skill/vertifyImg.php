<?php
// 验证码
// <input type="text" name="captcha" id="" class="" placeholder="输入验证码">

//制作专门方法实现验证码
function verifyImg(){
    $config=array(
        'imageH' =>40,
        'imageW' =>130,
        'fontSize' =>18,
        'length' =>4,
        'useCurve'  =>  false,
        );
    $verify=new \Think\Verify($config);
    $verify->entry();
}
//使用验证码
function reg(){
	if (!empty($_POST)) {
        $verify=new \Think\Verify();
        if (!$verify->check($_POST['captcha'])) {
            echo "<script>alert('验证码错误');</script>";
        }else{
        }
    }
}
?>