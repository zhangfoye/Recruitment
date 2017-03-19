<?php
namespace Home\Controller;
use Think\Controller;

class PersonCenterController extends CommonController
{
	// public function index()
	// {
	// 	$this->display("delivery");
	// }
	
	
	public function position_detail()
	{
		$mod = M("position_info");
		$position_detail = $mod->where("id=".$_GET['uid'])->find();
		
		$com = M("com_info");
		$cominfo = $com->where("uid = {$position_detail['comid']}")->find();
      

      $tag = M("tag");
      $expe = $tag->where("id = {$position_detail['expe']}")->find();
      $degree = $tag->where("id = {$position_detail['degree']}")->find();
      $prop = [0=>"全职",1=>"兼职",2=>"实习"];
      $prop1 = $prop[$position_detail['prop']]; 
      // dump($cominfo['about']);exit;
      if(strlen($cominfo['about']) > 3){
         $a = explode(',',$cominfo['about']); 
         $about = $tag->where("id in ({$a[0]},{$a[1]})")->select();
      }else{
         $a = rtrim($cominfo['about'], ",");
         $about = $tag->where("id = {$a}")->select();
      }
      // dump($about);exit;
      $phase = $tag->where("id = {$cominfo['phase']}")->find();
      $scale  = [0=>"小于15人",1=>"15-50人",2=>"50-150人",3=>"150-500人",4=>"500-2000人",5=>"2000人以上"];
      $s = $scale[$cominfo['scale']];
      
       //查询公司位置
      
      $address = $mod->where("comid = {$cominfo['uid']}")->field('address,mapaddress')->find();
      $this->assign("address",$address);
      $this->assign("expe",$expe);
      $this->assign("degree",$degree);
      $this->assign("prop",$prop1);
      $this->assign("s",$s);
      $this->assign("phase",$phase);
      $this->assign("about",$about);
      $this->assign("info",$info);
      $this->assign("cominfo",$cominfo);
	  $this->assign("position_detail",$position_detail);
		$this->display("position_detail");
	}
	//收藏操作
	public function collect()
	{
		$mod = M("position_info");
		
		$m = M("collections");
		//将公司id添加到collections表里
		$comid = $mod->where('id='.$_POST['id'])->getField('comid');
		$id = $mod->where('id='.$_POST['id'])->getField('id');
		// $info['firm_id'] = $comid;
		// $info['post_id'] = $id;
		// $info['collect_time'] = date("Y-m-d H:i:s",time());
		//批量添加
		$info[] = array("user_id" => $_SESSION['user']['id'],"firm_id" => $comid,"post_id" => $id,"collect_time" => time());
		if(!$m->create()){
			$this->error($mod->getError());
		}
		$m->addAll($info);
		
		if(!$mod->create()){
			$this->error($mod->getError());
		}
		
		$data = array('state' => '1');
		if($mod->where('id='.$_POST['id'])->setField($data)){
			$res['info'] = 'Y';
			echo json_encode($res);
		}else{
			$res['info'] = 'N';
			echo json_encode($res);
		}
		//$this->display("collections");
	}
	//取消收藏操作
	public function qx_collect()
	{
		$mod = M("position_info");
		$m = M("collections");
		
		$m->where("post_id=".$_POST['id'])->delete();
		if(!$mod->create()){
			$this->error($mod->getError());
		}
		
		$data = array('state' => '0');
		if($mod->where('id='.$_POST['id'])->setField($data)){
			$res['info'] = 'Y';
			echo json_encode($res);
		}else{
			$res['info'] = 'N';
			echo json_encode($res);
		}
		//$this->display("collections");
	}
	
	//收藏夹页面操作
	public function collection()
	{
		$mod = M("position_info");
		$colle = M("collections");
		$com = M("com_info");
		$tag = M("tag");
		$colle_info = $colle->where("user_id={$_SESSION['user']['id']}")->select();
		foreach($colle_info as $k => $v){
			$position_collect[$k] = $mod->where("state='1' and id={$v['post_id']}")->find();
			$com_info = $com->where("uid = {$position_collect[$k]['comid']}")->find();
			$position_collect[$k]['com_name'] = $com_info['com_name'];
			$position_collect[$k]['logo'] = $com_info['logo'];
			
			$expe = $tag->where("id={$position_collect[$k]['expe']}")->find();
			$degree = $tag->where("id={$position_collect[$k]['degree']}")->find();
			$position_collect[$k]['expe'] = $expe['name'];
			$position_collect[$k]['degree'] = $degree['name'];
		}
		//var_dump($position_collect);exit;
		$this->assign("expe",$expe);
		$this->assign("degree",$degree);
		$this->assign("info",$info);
		//$this->assign("cominfo",$cominfo);
		$this->assign("position_collect",$position_collect);
		$this->display("collections");
	}

	//预览简历
	public function preview()
	{
		// dump($_GET);
		$mod = M("resume");
		$m = M("users");
		$mod1 = M("proj_experice");
		//修改状态
		$d = M("deliver");
		if($d->where("id={$_GET['id']}")->field("state")->find() == "1"){
         // $mod->startTrans();
		$data['state'] = 2;
		$data['time2'] = time();
		$data['id'] = $_GET['did'];
		$d->create($data);
		$dd = $d->save($data);
		if($dd>0){
         echo 1;
		}
			}
      
		$info = $mod->where("id=".$_GET['id'])->find();
		$user_info = $m->where("id=".$info["uid"])->find();
		$proj_info = $mod1->where("uid=".$info["uid"])->find();
		$this->assign("user_info",$user_info);
		$this->assign("proj_info",$proj_info);
		$this->assign("info",$info);
		$this->display("preview");
   }

   //显示列表
   public function index()
   {
      // dump($_SESSION);
      if(empty($_SESSION['user'])){
         $this->redirect("Public/com_login");
      }else{
      	 $mod1 = M("deliver_box");
         $ddd = $mod1->where("uid= {$_SESSION['user']['id']}")->select();
         // dump($ddd);
		 $deliver = M("deliver");   
         $mod = M("position_list");
         
         foreach ($ddd as $key => $value) {
		 $d = $deliver->where("boxid = {$ddd[$key]['id']}")->find();
			foreach ($d as $k => $v) {
			 	$ddd[$key][$k] = $v;
			 }
			
	         $s = explode(',',$ddd[$key]['salary']); 
	     	 $ddd[$key]['salary'] = $s;
         }
          // dump($ddd);
         // dump($data);
         $type = [1=>"在线简历",2=>"附件简历"];
         $info  = [1=>"投递成功",2=>"被查看",3=>"邀面试",4=>"待沟通",5=>"不合适"];
         $this->assign("info",$info);
         $this->assign("type",$type);
         $this->assign("data",$ddd);
         $this->display("delivery");
      }
      
   }

     //执行投递功能
    public function delivery()
   {
      // dump($_SESSION);
      if(empty($_SESSION['user'])){
         echo 5;exit;
      }
      //判断当前用户有没有简历
      $resume = M("resume");
      // dump($resume->where("uid = {$_SESSION['user']['id']}")->find());exit;
      // 如果有简历才可以投简历
      $s = $resume->where("uid = {$_SESSION['user']['id']}")->find();
      if(!empty($s)){
               // if($resume->where("uid = {$_}"))
               $box = M("deliver_box");
               $deliver = M("deliver");
                $mod = M("position_list");
               //如果没有投递过这条招聘信息
               if(empty($box->where("uid = {$_SESSION['user']['id']}")->find())){
                   // 如果用的是附件简历
                     if($_POST['resume'] === "0"){
                        if($s['resume_name'] == null){
                           echo 4 ;
                           exit;
                        }
                     }
                  $box->startTrans();
                  //写入投递箱
                  $data['resume_type'] = $_POST['resume'];
                  $data['firm_id'] = $_POST['firm_id'];
                  $data['post_id'] = $_POST['post_id'];
                  $data['state'] = 1;
                  $data['jobs'] = $_POST['jobs'];
                  $data['salary'] = $_POST['wages'];
                  $data['firm_name'] = $_POST['firm_name'];
                  $data['work_address'] = $_POST['work_address'];
                  
                  $data['uid'] = $_SESSION['user']['id'];
                  // dump($data);exit;
                   if($box->create($data)){
                     $b = $box->add();
                  }
                  //写入投递列表
                  $info['com_id'] = $_POST['firm_id'];
                  $info['post_id'] = $_POST['post_id'];
                  $info['resume_id'] = $s['id'];
                  $info['dbox_id'] = $b;
                  $info['state'] = 1;
                  $info["did"] = $d;
                  $mod->create($info);
                  $m = $mod->add();
                 
                  //写入中间表
                  
                  $d['face_address'] = $_POST['face_test_address'];
                  $d['time1'] = time();
                  $d['boxid'] = $b;
                  $d['plistid'] = $m;
                  // 状态改为发送成功
                  $d['state'] = 1;

                  $deliver-> create($d);
                  $d = $deliver->add();
                   if($m && $b && $d){
                     $box->commit();
                     echo 1;
                  }else{
                     echo 6;
                      $box->rollback();

                  }

               }else{
                  // 如果已经投过这条招聘信息
                  echo 2;
                     // $info['info'] = "N";
                     // $this->ajaxReturn($info);
               }   
               
            }else{
               // 没有简历
               echo 3;
            }
      } 
   
}

















