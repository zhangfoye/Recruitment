<?php
namespace Admin\Controller;

class TagsController extends CommonController {
    public function index(){
		
       //实例model类
      $tag = M("tag");
      $map = array();
       if($_GET['name']){
           $map['name'] = array("like","%{$_GET['name']}%");
       }
       //获取数据条数，实例化分类类
       $total = $tag->where($map)->count();
       $page = new \Think\Page($total,10);
       $page->setConfig('theme',"<ul class='pagination'><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li></ul>");
       //获取所有信息(当前页信息)
	   $tp['string'] = "concat(path,id)";
       $list = $tag->where($map)->limit($page->firstRow.','.$page->listRows)->field('id,name,pid,path,addtime')->order($tp['string'])->select();
		   if(is_array($list)){
				foreach($list as $k => $v){
					$m = substr_count($v['path'],",")-1;
					$list[$k]['name'] = str_repeat("&nbsp;&nbsp;",$m*9).$v['name'];				
				}	
			}
       //放置到模板中
       $this->assign("list",$list);
       $this->assign("pageinfo",$page->show()); //将分页信息放置到模板中
       $this->assign("total",$total); //将分页信息放置到模板中
         $nowPage = $page->nowPage;
       $this->assign("nowPage",$nowPage); //将分页信息放置到模板中
       //加载模板输出
       $this->display("index");
	}
	
	//添加表单
	public function add(){
		$pid = 0;
		$path  = "0,";
		if(!empty($_GET['id']) && !empty($_GET['path'])){
			 $pid = $_GET['id'];
			 $path= $_GET['path'].$pid.",";
		}
		$this->assign("pid",$pid);
		$this->assign("path",$path);
		$this->display("add");
		
	}
	//执行添加
	public function insert(){
		$tag = M("tag");
		$pid = 0;
		$path  = "0,";

		if(!empty($_GET['pid']) && !empty($_GET['path'])){
			 $pid = $_GET['pid'];
			 $path= $_GET['path'];
		}
		$tag->name = $_GET['name'];
		$tag->pid = $pid;
		$tag->path = $path;
		$tag->addtime = time();//追加添加时间
		$m = $tag->add();//执行添加
		if($m>0){
			$list = $tag->find($m);
			$list['addtime'] = date("Y-m-d",$list['addtime']);
			$this->redirect("index");
		}else{
			 $this->error($tag->getError());
		}
	}
	//编辑表单
	public function edit($id=0)
	{
		$mod = M("tag");
		$tag = $mod->find($id);
		$this->ajaxReturn($tag,"json");
	}
	//执行修改
	public function update()
	{
		
		$mod = M("tag");
		$data['name'] = $_POST['editname'];
		$data['id'] = $_POST['editid'];
		$m = $mod->save($data);
		
		if($m > 0){
			 $this->ajaxReturn($data,"json");		
		}else{
			$this->ajaxReturn('44');
		}
	}
	//执行删除
	public function del(){
		$type = M("tag");
		$m = $type->where("pid=".$_GET['id'])->count();
		if($m>0){
			echo 2;
		}else{
		$d = $type->delete($_GET['id']);
		if($d>0){
			echo 1;
		}else{
			echo 3;
		}
		
	
	}	

}

}
