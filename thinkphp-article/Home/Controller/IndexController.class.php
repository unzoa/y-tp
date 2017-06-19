<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    function index(){
        $this->redirect('Story/index');
    }
}
?>