<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	
        $this->display();
    }
    function postTest(){
    	echo $_POST['name'];
    }
    function getTest(){
    	$a[]="Anna";
		$a[]="Brittany";
		$a[]="Cinderella";
		$a[]="Diana";
		$a[]="Eva";
		$a[]="Fiona";
		$a[]="Gunda";
		$a[]="Hege";
		$a[]="Inga";
		$a[]="Johanna";
		$a[]="Kitty";
		$a[]="Linda";
		$a[]="Nina";
		$a[]="Ophelia";
		$a[]="Petunia";
		$a[]="Amanda";
		$a[]="Raquel";
		$a[]="Cindy";
		$a[]="Doris";
		$a[]="Eve";
		$a[]="Evita";
		$a[]="Sunniva";
		$a[]="Tove";
		$a[]="Unni";
		$a[]="Violet";
		$a[]="Liza";
		$a[]="Elizabeth";
		$a[]="Ellen";
		$a[]="Wenche";
		$a[]="Vicky";

		$name = $_GET['name'];
		if (strlen($name)>0) {
			$hint = '';
			for ($i=0; $i <count($a) ; $i++) { 
				if (strtolower($name)==strtolower(substr($a[$i],0,strlen($name)))){
					if ($hint == '') {
						$hint = $a[$i];
					}else{
						$hint = $hint.','.$a[$i];
					}
				}
			}
		}
		// 如果未找到提示，则把输出设置为 "no suggestion"
		// 否则设置为正确的值
		if ($hint == "")
		  {
		  $response="no suggestion";
		  }
		else
		  {
		  $response=$hint;
		  }

		//输出响应
		echo $response;
    }

}