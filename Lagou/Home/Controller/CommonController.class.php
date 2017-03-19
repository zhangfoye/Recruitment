<?php
//公共控制器类
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    
    public function _initialize()
    {
    date_default_timezone_set('PRC');

        if(empty(session("user"))){
                $this->redirect("public/login");
            exit;
        }else{
        }

    }
}