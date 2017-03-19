<?php
//公共控制器类
namespace Home\Controller;
use Think\Controller;
class ComCommonController extends Controller {
    
    public function _initialize()
    {
    	// dump($_SESSION);
    	
    date_default_timezone_set('PRC');

        if(empty(session("com_user"))){
                $this->redirect("public/com_login");
            exit;
        }

    }
}