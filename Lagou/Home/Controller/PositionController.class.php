<?php
namespace Home\Controller;

class PositionController extends ComCommonController {
   public function index()
   {
   		$mod = M("tag");
   		$expedata = $mod->where("pid = 18")->select();
   		$degreedata = $mod->where("pid = 19")->select();

   		//分类
   		$list = M("type");
   		$list1 = $list->where("pid = 0")->select();
   		$this->assign("list1",$list1);
   		$this->assign("expedata",$expedata);
   		$this->assign("degreedata",$degreedata);
   		// dump($expedata);
   		$this->display("create");
   }


   public function listbox()
   {
   		$mod = M("type");
   	 	$list1 = $mod->where("pid = 0")->select();
   		echo json_encode($list1);
   }

   public function displayul()
   {
   		// echo $_POST['id'];
   		$mod = M("type");
   		$list2 = $mod->where("pid = ".$_POST['id'])->select();
   		echo json_encode($list2);

   }

   public function showli()
   {
   		$mod = M("type");
   		$list3 = $mod->where("pid =".$_POST['id'])->select();
   		echo json_encode($list3);

   }

   public function create(){
      // dump($_POST);exit;
   		if($_POST){
   			$mod = M("position_info");
	   		$data['comid'] =$_SESSION['com_user']['id']; 
	   		$data['type'] = $_POST['list3'];
	   		$data['wages'] = $_POST['wages1'].",".$_POST['wages2'];
	   		$data['city'] = $_POST['s_province'].$_POST['s_city'].$_POST['s_county'];
	   		$data['name'] = $_POST['name'];
	   		$data['depart'] = $_POST['depart'];
	   		$data['prop'] = $_POST['prop'];
	   		$data['expe'] = $_POST['expe'];
	   		$data['degree'] = $_POST['degree'];
	   		$data['advantage'] = $_POST['advantage'];
	   		$data['describe'] = "<br>".$_POST['content'];
	   		$data['address'] = $_POST['s_province'].$_POST['s_city'].$_POST['s_county'].$_POST['address'];
            $data['mapaddress'] = $_POST['mapaddress'];
	   		$data['email'] = $_POST['email'];
            $data['addtime'] = time();
	   		// dump($data);exit;
	   		$mod->create($data);
	   		// dump($mod);
	   		$m = $mod->add();
	   		if($m > 0){
	   			 $this->redirect("ComIndex/index");
	   		}
         }
   	}
   
//显示投递列表
   public function operation()
   {
      // dump($_SESSION);
      if(empty($_SESSION['com_user'])){
         $this->redirect("Public/com_login");
      }else{

         $mod = M("position_list");
         $info = $mod->where("com_id = {$_SESSION['com_user']['id']}")->select();
         // dump($info);
         $mod1 = M("deliver_box");
         $deliver = M("deliver");
         $resume = M("resume");
         foreach ($info as $key => $value) {
           $resumed = $resume->where("id= {$info[$key]['resume_id']}")->field("grad_college,grad_degree,expected_city,nickname,sex,expected_salary,head_img_name")->find();
           $plist = $mod1->where("id = {$info[$key]['dbox_id']}")->field("jobs")->find();
         $d = $deliver->where("plistid = {$info[$key]['id']}")->find();
           //把两条数据放到同一个数组
         foreach ($resumed as $k => $v) {
            $plist[$k] = $v;
            $plist['id'] = $info[$key]['id'];
            $plist['post_id'] = $info[$key]['post_id'];
            $plist['resume_id'] = $info[$key]['resume_id'];
            // $plist['face_address'] = $d['face_address'];
            // $plist['did'] = $d['id'];
            // $plist['state'] = $d['state'];
         }
         foreach ($d as $ke => $va) {
            $plist[$ke] = $va;
         }
         $data[] = $plist;

         }
         $info  = [1=>"投递成功",2=>"被查看",3=>"邀面试",4=>"待沟通",5=>"不合适"];
         // dump($info[2]);
         // $data['state'] = $info[3];
         
         // dump($data); 
         $this->assign("info",$info);
         $this->assign("data",$data);
         $this->display("delivery");
      }
      
   } 
   
   public function dooperation()
   {
     
         $mod  = M("deliver");
         $state = $mod->where("id = {$_POST['id']}")->field("state")->find();
         // dump($state);exit;
         if($state == "3"){
            echo 2;//已经发过面试邀请
         }else{

         dump($_POST);
         $data['face_time'] = $_POST['date']."  ".$_POST['time'];
         $data['linkman'] = $_POST["linkman"];
         $data['id'] = $_POST['id'];
         $data["face_address"] = $_POST['face_address'];
         $data['time3'] = time();
         $data['state'] = 3;
         $data['phone'] = $_POST['phone'];
         $mod -> create($data);
         // dump($data);
         // dump($mod);
         // exit;
         $m = $mod->save();
         if ($m>0) {
            echo 1;
         }
      }
   }

   public function no(){
      $mod = M("deliver");
      // dump($_POST);
      $_POST['reason'] =$_POST['no']; 
      $_POST['state'] = 5;
      $_POST['time5'] = time();
      $mod->create();
      $m = $mod->save();
      if($m>0){
         echo 1;
      }
   }

   public function wait(){
      $mod = M("deliver");
      $_POST['state'] = 4;
      $_POST['time4'] = time();
      $mod->create();
      $m = $mod->save();
      if($m>0){
         echo 1;
      }
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
		
}