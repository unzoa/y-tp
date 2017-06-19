<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    function ueditor(){
    	$u = D('ueditor');
    	if (!empty($_POST)) {
    		$content = I('content');
    		$array = array(
    			'content' => $content
    			);
    		$z = $u->add($array);
    		if($z){
    			echo "r";
    		}else{
    			echo "w";
    		}
    	}
    }
}
