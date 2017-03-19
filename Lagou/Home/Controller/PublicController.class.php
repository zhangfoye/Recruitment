<?php
//网站后台执行登录、退出的控制器
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
   
   //加载个人登录界面
   public function login()
   {
       $this->display("login");
   }
   //加载企业登录界面
   public function com_login()
   {
       $this->display("com_login");
   }
   //执行个人登录验证
  public function doLogin()
   {

    
      $mod = M("users");
      //获取当前登录用户信息
      $map = array();
      $map['username'] = $_POST['phone'];
      $map['password'] = md5($_POST['password']);
      $user = $mod->where($map)->find();
     // echo json_encode($user);exit;
     // dump($user);exit();
     $info = array();
      if($user){
		  
          //登录成功！
			session("user",$user); //将user信息以adminuser名放入到session中
		  
			$resume = M("resume");
			$res = $resume->where("uid=".$_SESSION['user']['id'])->find();
			//var_dump($res);exit;
			if(!empty($res)){
				echo 1;
			}else{
			echo 3;
		}
         
      }else{
          echo 2;
      }
       
   }
    //执行个人登录验证
   public function com_doLogin()
   {
      $mod = M("com_user");
      //获取当前登录用户信息
      $map = array();
      $map['username'] = $_POST['phone'];
      $map['password'] = md5($_POST['password']);
      $user = $mod->where($map)->find();
     // echo json_encode($user);exit;
     // dump($user);exit();
     $info = array();
      if($user){
          //登录成功！
          session("com_user",$user); //将user信息以adminuser名放入到session中
         echo 1;
      }else{
          echo 2;
      }
       
   }
   //执行退出的方法
   public function doLogout()
   {
       session("user",null); //清除登录者信息（session中）
       $this->redirect("Public/login");
   }
   
   //验证码输出
    public function verify()
    {
        $Verify = new \Think\Verify();
        $Verify->length = 4; //验证码位数
        //$Verify->useCurve = false; //是否使用混淆曲线 默认为true
        $Verify->useNoise = false; //是否添加杂点 默认为true
        $Verify->entry();
        
    }
    public function register()
    {
      $this->display("index");
    }

    public function doRegister()
    {
      // dump($_POST);exit;
        if($_POST['password'] = $_POST['password1']){
          if($_POST['radio'] == 1){
          //找工作
            $mod = M("users");
            $data['username'] = $_POST['phone'];
            $data['phone'] = $_POST['phone'];
            $data['password'] = md5($_POST['password']);
            $data['addtime'] = time();
            $mod->create($data);
            $m = $mod->add();
            if($m > 0 ){
              echo 1;
              session("phonecode",null);
            }

        }
        if($_POST['radio'] === "0"){
          //找人
          $mod = M("com_user");
          $data['username'] = $_POST['phone'];
          $data['phone'] = $_POST['phone'];
          $data['password'] = md5($_POST['password']);
          $data['addtime'] = time();
          $mod->create($data);
          $m = $mod->add();
          if($m > 0 ){
              echo 2;
              session("phonecode",null);
          }
        }
      }   
    }

    public function getCode(){
      // dump($_POST);exit();
      
      $code = sendMSM($_POST['phone']);
      session("phonecode",$code);
      echo 1;
      // echo $code;
      // dump($_POST);
      // $mod = M()
      // dump($info);
      
    }
    public function phonecode(){
      if($_POST['phonecode'] != $_SESSION['phonecode']){
        echo 1;
      }else{
        echo 2;
      }
    }
    public function doverify(){
      //验证码的验证
      $verify = new \Think\Verify();
      $a = array();
      if(!$verify->check($_POST['code'])){
          $a['info'] = "N"; 
        $this->ajaxReturn($a);  
      }else{
        $a['info'] = "Y";
        $a['code'] = $_POST['code'];
        $this->ajaxReturn($a);
      }
    }
    //验证当前账号存不存在
    public function existuser(){
    // dump($_POST);
      // exit;
        if($_POST['radio'] == 1){
           $mod = M("users");
           $info = $mod->where("phone = {$_POST['phone']}")->find();
           if($info){
            echo 1;
           }
           else{
            echo 2;
           }
        }
    }

    public function code1(){
     $verify = new \Think\Verify();
      $a = array();
      if(!$verify->check($_POST['code'])){
          $a['info'] = "N"; 
        $this->ajaxReturn($a);  
      }else{
        $a['info'] = "Y";
        $a['code'] = $_POST['code'];
        $this->ajaxReturn($a);
      }
      
    }
}