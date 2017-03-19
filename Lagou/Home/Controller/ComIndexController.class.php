<?php
// namespace Home\Controller;
namespace Home\Controller;
use Think\Controller;
class ComIndexController extends ComCommonController {

   public function index()
   {
     if(!empty($_SESSION['com_user'])){
         $mod = M("com_user");
         $info = $mod->where("id = {$_SESSION['com_user']['id']}")->find();
         if($info['state'] == "1"){
            $this->redirect("Company/bindstep1");
         }
         if($info['state'] == '3'){
            $this->redirect("Company/add1");
         }
     }
       
      // 显示公司主页
      $mod = M("com_info");
      if(!empty($_GET['uid'])){
          $info = $mod->where("uid = {$_GET['uid']}")->find();
      }else{
          $info = $mod->where("uid = {$_SESSION['com_user']['id']}")->find();

      }
      // dump($info);
      if(!empty($info)){

      $tag = M("tag"); 
      //领域
      if(strlen($info['about']) > 3){
         $a = explode(',',$info['about']); 
         $about = $tag->where("id in ({$a[0]},{$a[1]})")->select();
      }else{
         $a = rtrim($info['about'], ",");
         $about = $tag->where("id = {$a}")->select();
      }
      // 标签
      $comtag = M("com_tag");
      $info['tag'] = rtrim($info['tag'], ",");
      $t = $comtag->where("id in ({$info['tag']})")->select();
      foreach ($t as $value) {
        $tagname[] = $value['name'];
      }
      // 融资阶段
      $phase = $tag->where("id = {$info['phase']}")->find();
      $scale  = [0=>"小于15人",1=>"15-50人",2=>"50-150人",3=>"150-500人",4=>"500-2000人",5=>"2000人以上"];
      $s = $scale[$info['scale']];
      //查询公司位置
      $mapaddress = M("position_info");
      // dump($info['uid']);
      $address = $mapaddress->where("comid = ".$info['uid'])->field('address,mapaddress')->find();

      //查看招聘信息
      $list = M("position_info");
      if(!empty($_GET['id'])){
         $l = $list -> where("comid = {$_GET['uid']}")->select();

      }else{
         $l = $list -> where("comid = {$_SESSION['com_user']['id']}")->select();
      }
      $t = M("tag");
      $prop = [0=>"全职",1=>"兼职",2=>"实习"];
      foreach ($l as $key => $value) {
      $expe = $t->where("id = ".$l[$key]['expe'])->select();
      $degree = $t->where("id = ".$l[$key]['degree'])->select();
      $w = explode(',',$l[$key]['wages']); 
      $value['wages'] = $w;
      // 学历
      foreach ($degree as $d => $dv) {
         $value['degree'] = $dv['name'];
      }
      //经验
      foreach ($expe as $k => $v) {
      $value["expe"] = $v['name'];
      $vo[]= $value;

        }
      }
      $this->assign("prop",$prop);
      $this->assign("list",$l);
      $this->assign("voa",$vo);
      $this->assign("address",$address);
      $this->assign("tag",$tagname);
      $this->assign("s",$s);
      $this->assign("phase",$phase);
      $this->assign("about",$about);
      $this->assign("info",$info);
      $this->display("index");
      }else{
         $this->redirect("Company/index");
      }
   	
   }


   public function listbox()
   {
   		$mod = M("type");
   	 	$list1 = $mod->where("pid = 0")->select();
   		echo json_encode($list1);
   }

   public function displayul()
   { 
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
      // 发布新职位
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
	   		$data['describe'] = $_POST['content'];
	   		$data['address'] = $_POST['mapaddress'];
	   		$data['email'] = $_POST['email'];
	   		$mod->create($data);
	   		$m = $mod->add();
	   		if($m > 0){
	   			
	   		}
         }
   	}
}