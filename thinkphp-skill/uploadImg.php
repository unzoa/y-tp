<?php
if(!empty($_FILES)){
    $config= array(
        'rootPath'=>'./Public/', //保存根路径
        'savePath'=>'Upload/', //保存路径
        );
    $upload = new \Think\Upload($config);
    $z = $upload->uploadOne($_FILES['img']);
    if (!$z) {
        show_bug($upload->getError());
    }else{
        $bigimg=$z['savepath'].$z['savename'];
    }
}
?>