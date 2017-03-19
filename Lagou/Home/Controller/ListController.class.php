<?php
namespace Home\Controller;
use Think\Controller;

class ListController extends CommonController
{
	public function index()
	{
		$tag = D("tag");
		$addr = $tag->where("pid=17")->select();
		$this->assign("addr",$addr);
		
		$exper = $tag->where("pid=18")->select();
		$this->assign("exper",$exper);
		
		$major = $tag->where("pid=19")->select();
		$this->assign("major",$major);
		
		$money = $tag->where("pid=20")->select();
		$this->assign("money",$money);
		
		$hy = $tag->where("pid=21")->select();
		$this->assign("hy",$hy);
		
		$info = D("position_info");
		$map = array();
			$p = $_POST['city'];
			$dizhi = $info->field("name")->select();
			//$name = $info->field("name")->select();
			//var_dump($_GET['tag_name']);
			//遍历数组
			foreach($dizhi as $k=>$v){
				$s = array_keys($v);
				//查看数组中是否有传过来的地址
				if(in_array('city',$s)){ 
				echo "22";
					$map['city'] = array("like","%{$_POST['city']}%");
					
					}else{
					$map['name'] = array("like","%{$_POST['city']}%");	
					}
			}	
		   
			if(!empty($_GET['tag_name'])){
				$map['name'] = array("like","%{$_GET['tag_name']}%");
			}
			
		   if(!empty($_GET['addr'])){
			   
			   $map['city'] = array("like","{$_GET['addr']}");
		   }
		    if(!empty($_GET['exper'])){
			   $expe = $tag->where("name='{$_GET['exper']}'")->find();
			   $map['expe'] = array("eq","{$expe['id']}");
		   }
		    if(!empty($_GET['major'])){
			   $major = $tag->where("name='{$_GET['major']}'")->find(); 
			   $map['degree'] = array("eq","{$major['id']}");
		   }
		    if(!empty($_GET['money'])){
				//从标签表中查出传过来的阶段值
			   $money = $tag->where("name='{$_GET['money']}'")->find();
			   $com = D("com_info");
			   //用阶段值查出来的id查公司信洗里的公司名
			   $dom = $com->where("phase={$money['id']}")->find();
			   //用公司名所对应的id查出这个阶段的公司
			   $map['comid'] = array("eq","{$dom['uid']}");
		   }
		    if(!empty($_GET['hy'])){
				//从标签表中查出传过来的行业值
			   $hy = $tag->where("name='{$_GET['hy']}'")->find();
			   $com = D("com_info");
			   //用行业值查出来的id查公司信洗里的公司名
			   $dom = $com->where("about={$hy['id']}")->find();
			   //用公司名所对应的id查出这个阶段的公司
			   $map['comid'] = array("eq","{$dom['uid']}");
		   }
		   
		    if(!empty($_GET['prop'])||$_GET['prop']==="0"){
			   $map['prop'] = array("eq","{$_GET['prop']}");
		   }
		   
		 
		//获取数据条数，实例化分类类
		$total = $info->where($map)->count();
		$page = new \Think\Page($total,3);
		//$page->setConfig('theme',"<ul class='pagination'><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li></ul>");
		//获取所有信息(当前页信息)
		$list = $info->where($map)->limit($page->firstRow.','.$page->listRows)->select();
		
		if(empty($list)){
			header('Cache-control: private, must-revalidate');
		}
		// for($i = 0;$i<count($list); $i++){
			// $qwe = $tag->where("id= {$list[expe]}")->find();
			// $list[$i]['exper'] = $tag['expe'];
		// }
		$this->assign("pageinfo",$page->show()); //将分页信息放置到模板中
		$this->assign("total",$total); //将分页信息放置到模板中
		//$list = $info->select();
		foreach($list as $k=>$v){
			if(strlen($v['wages']) > 2){
			$a = explode(',',$v['wages']);
			//拆分工资
			$list[$k]['a1'] = $a[0];
			
			$list[$k]['a2'] = $a[1];
			
			}
			$tag = D("tag");
			//在标签表中查出招聘信息的所需经验
			$fexpe = $tag->where("id= {$v['expe']}")->getField(name);
			//在标签表中查出招聘信息的所需学历
			$fdegree = $tag->where("id= {$v['degree']}")->getField(name);
			$list[$k]['fexpe'] = $fexpe;
			$list[$k]['fdegree'] = $fdegree;
			
			$user = D("com_user");
			//在公司用户表中查出所发招聘信息的公司名
			$comname = $user->where("id = {$v['comid']}")->getField(comname);
			//var_dump($comname);
			$list[$k]['comname'] = $comname;
			
			$pic = D("com_info");
			//在公司信息表中查出公司的头像
			$picname = $pic->where("uid = {$v['comid']}")->getField(logo);
			$list[$k]['picname'] = $picname;
		}
		
		
		
		//var_dump($list);
		$this->assign("list",$list);
		$this->assign("addr1",$_GET['addr']);
		$this->assign("exper1",$_GET['exper']);
		$this->assign("money1",$_GET['money']);
		$this->assign("major1",$_GET['major']);
		$this->assign("hy1",$_GET['hy']);
		
		
		$this->display("index");	
	}
	
	
}

















