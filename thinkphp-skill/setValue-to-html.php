<?php
// 单独显示某行
$this->archive = M('archive')->where('child_id="'.session('archive').'"')->select();
// {$archive[0][name]}

// 富文本解析
// {$story1[0][intro]|html_entity_decode}

// 多重volist
// <volist id="t" name='lbtype'>
// 	<h3>{$t.name}</h3>
// 	<volist name="lblist" id="l">
// 		<if condition = "$l['type'] eq $t['id']">
// 			{$l.name_ch}
// 		</if>
// 	</volist>
// </volist>

// session
session('myname',$name);
session(null);

// 链表查询，给A表添加B，C表的字段值
$user =  M('user')->where('id="'.$id.'"')->select();
for ($i=0; $i < count($user); $i++) {
    $level = D('level')->getFieldByid($user[$i]['level_id'],'name');
    $user[$i]['level']=$level;
}
$this->assign("user",$user);

?>