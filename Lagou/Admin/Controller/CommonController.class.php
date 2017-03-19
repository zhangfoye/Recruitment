<?php
//公共控制器类
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    
    public function _initialize()
    {
        //echo "bbbbbbbbbbbbbbbb";
        //判断是否登录
        if(empty(session("adminuser"))){
            $this->redirect("public/login");
            exit;
        }
        
        
    }
}