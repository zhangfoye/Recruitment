<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
			$mod = M("users");
			
			
			$type_mod = M("type");
			//技术
			$js_info = $type_mod->where("hot_word='js'")->select();
			$js_s = $type_mod->where("pid=44")->select();
			
			foreach($js_s as $k=>$v){
				$js_s[$k]['hd'] = $type_mod->where("pid=".$v['id'])->select();
			}
			
			
			$this->assign("js_s",$js_s);
			$this->assign("js_info",$js_info);
			
			//产品
			$cp_info = $type_mod->where("hot_word='cp'")->select();
			$cp_s = $type_mod->where("pid=45")->select();
			foreach($cp_s as $k=>$v){
				$cp_s[$k]['cp'] = $type_mod->where("pid=".$v['id'])->select();
			}
			$this->assign("cp_s",$cp_s);
			$this->assign("cp_info",$cp_info);
			
			//设计
			$sj_info = $type_mod->where("hot_word='sj'")->select();
			$sj_s = $type_mod->where("pid=46")->select();
			foreach($sj_s as $k=>$v){
				$sj_s[$k]['sj'] = $type_mod->where("pid=".$v['id'])->select();
			}
			$this->assign("sj_s",$sj_s);
			$this->assign("sj_info",$sj_info);
			
			//运营
			$yy_info = $type_mod->where("hot_word='yy'")->select();
			$yy_s = $type_mod->where("pid=47")->select();
			foreach($yy_s as $k=>$v){
				$yy_s[$k]['yy'] = $type_mod->where("pid=".$v['id'])->select();
			}
			$this->assign("yy_s",$yy_s);
			$this->assign("yy_info",$yy_info);
			//市场与销售
			$sc_info = $type_mod->where("hot_word='sc'")->select();
			$sc_s = $type_mod->where("pid=48")->select();
			foreach($sc_s as $k=>$v){
				$sc_s[$k]['sc'] = $type_mod->where("pid=".$v['id'])->select();
			}
			$this->assign("sc_s",$sc_s);
			$this->assign("sc_info",$sc_info);
			//职能
			$zn_info = $type_mod->where("hot_word='zn'")->select();
			$zn_s = $type_mod->where("pid=49")->select();
			foreach($zn_s as $k=>$v){
				$zn_s[$k]['zn'] = $type_mod->where("pid=".$v['id'])->select();
			}
			$this->assign("zn_s",$zn_s);
			$this->assign("zn_info",$zn_info);
			//金融
			$jr_info = $type_mod->where("hot_word='jr'")->select();
			$jr_s = $type_mod->where("pid=50")->select();
			foreach($jr_s as $k=>$v){
				$jr_s[$k]['jr'] = $type_mod->where("pid=".$v['id'])->select();
			}
			$this->assign("jr_s",$jr_s);
			$this->assign("jr_info",$jr_info);
			
			//招聘信息遍历
			$mod = M("position_info");
			//$position_info = $mod->select();
			
			$map = array();
			$job = $mod->field('name')->select();
			//var_dump($job);exit;
			foreach($job as $k=>$v){
				$s = array_keys($v);
				//查看数组中是否有传过来的地址
				if(in_array('name',$s)){ 
				//echo "22";
					$map['name'] = array("like","%{$_GET['job']}%");
				}
			}
			$position_info = $mod->where($map)->select();
			
			foreach($position_info as $k=>$v){
				//var_dump($v);exit;
				if(strlen($v['wages']) > 2){
					$a = explode(',',$v['wages']);
					$position_info[$k]['left'] = $a[0];
					$position_info[$k]['right'] = $a[1];
			
				}
					$tag = D("tag");
					$com_info = M("com_info");
					$fexpe = $tag->where("id= {$v['expe']}")->getField(name);
					$fdegree = $tag->where("id= {$v['degree']}")->getField(name);
					$position_info[$k]['fexpe'] = $fexpe;
					$position_info[$k]['fdegree'] = $fdegree;
					
			$user = D("com_info");
			//在公司用户表中查出所发招聘信息的公司名
			$comname = $user->where("uid = {$v['comid']}")->getField(com_name);
			//var_dump($comname);
			$position_info[$k]['comname'] = $comname;
			}
			//var_dump($position_info);exit;
			$this->assign("position_info",$position_info);
			//加载页面
			$this->display("index");
		
	}

	public function recruit()
    {
      $mod = M("position_info");
      $info = $mod->where("id = {$_GET['id']}")->find();

      $com = M("com_info");
      $cominfo = $com->where("uid = {$info['comid']}")->find();
      dump($cominfo);
      dump($info);

      $tag = M("tag");
      $expe = $tag->where("id = {$info['expe']}")->find();
      $degree = $tag->where("id = {$info['degree']}")->find();
      $prop = [0=>"全职",1=>"兼职",2=>"实习"];
      $prop1 = $prop[$info['prop']]; 
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
      // dump($info);
      // dump($cominfo);
       //查询公司位置
      $mapaddress = M("position_info");
      $address = $mapaddress->where("comid = {$cominfo['uid']}")->field('address,mapaddress')->find();
      $this->assign("address",$address);
      $this->assign("expe",$expe);
      $this->assign("degree",$degree);
      $this->assign("prop",$prop1);
      $this->assign("s",$s);
      $this->assign("phase",$phase);
      $this->assign("about",$about);
      $this->assign("info",$info);
      $this->assign("cominfo",$cominfo);
      $this->display("recruit");
    }
	
	// public function sousuo(){
		// //var_dump($_GET["job"]);
		// $mod = M("position_info");
			// $map = array();
			// $job = $mod->field('name')->select();
			// //var_dump($job);exit;
			// foreach($job as $k=>$v){
				// $s = array_keys($v);
				// //查看数组中是否有传过来的地址
				// if(in_array('name',$s)){ 
				// //echo "22";
					// $map['name'] = array("like","%{$_GET['job']}%");
				// }
			// }
			// $list = $mod->where($map)->select();
			// $this->assign("list",$list);
			// $this->display("index");
		
	// }
}
