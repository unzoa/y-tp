<!-- ===============保存更新=================== -->
<!-- 保存方法 -->
D('archive') ->add($array2);

<!-- 更新数据字段 -->
D('student')->where('id="'.session('stid').'"')->save($array);

<!-- 删除 -->
$del = D('ipass_story')->where("id=$id")->delete();