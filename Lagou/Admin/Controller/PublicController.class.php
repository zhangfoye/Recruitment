<?php
//网站后台执行登录、退出的控制器
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
   
   //加载登录界面
   public function login()
   {
       $this->display("login");
   }
   
   //执行登录验证
   public function doLogin()
   {
       //验证码的验证
      $verify = new \Think\Verify();
      if(!$verify->check($_POST['mycode'])){
          $this->assign("info","验证码错误！");
          $this->display("login");
          exit();
      }
      
      //执行会员登录验证
      $mod = M("manager");
      //获取当前登录用户信息
      $map = array();
      $map['username'] = $_POST['username'];
      $map['pass'] = md5($_POST['pass']);
      $user = $mod->where($map)->find();
      if($user){
          //登录成功！
          session("adminuser",$user); //将user信息以adminuser名放入到session中
          $this->assign("list",$user);
          $this->redirect("Index/index");
      }else{
        $this->assign("info","账号或密码错误！");
        $this->display("login");  
      }
       
   }
   
   //执行退出的方法
   public function doLogout()
   {
       session("adminuser",null); //清除登录者信息（session中）
       $this->redirect("Public/login");
   }
   
   //验证码输出
    public function verify()
    {
        $Verify = new \Think\Verify();
        $Verify->length = 4; //验证码位数
        //$Verify->useCurve = false; //是否使用混淆曲线 默认为true
        $Verify->useNoise = false; //是否添加杂点 默认为true
        
        //中文验证码的使用
        //$Verify->fontttf = 'STXINGKA.TTF'; 
        //$Verify->useZh = true; //是否使用中文验证码
        //$Verify->zhSet = '们以我到他会作时要动国产的一是工就年阶义发成部民可出能方进在了不和有大这'; //中文验证码集合
        
        $Verify->entry();
        
    }
	
	
	

	

}