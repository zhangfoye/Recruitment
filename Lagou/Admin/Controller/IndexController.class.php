<?php
namespace Admin\Controller;

class IndexController extends CommonController {
    
    public function index(){
    	//dump($_SESSION);
    	$mod = M("manager");
    	$userid = $_SESSION['adminuser']['id'];
    	$user = $mod->where("id = {$userid}")->getField("username,picname");
    	// dump($user);
    	$this->assign("user",$user);
       	$this->display("index");
		//$this->redirect("manager/index");
    }
}