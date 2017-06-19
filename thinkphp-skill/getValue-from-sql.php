<?php
// 取到某行某字段
$userpic = D("user")->getFieldByid(session('id'),'img');

// 根据指定的字段查询getByxxx();返回行数据
$info = $student ->getBynumber($number,'number');
?>