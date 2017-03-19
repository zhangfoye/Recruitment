<?php
namespace Admin\Controller;

class AnnoController extends CommonController {
    public function index(){
		//获取所有学生信息并加载模板输出
		
		
       //实例model类
      $user = M("announcement");
       $map = array();
       if($_GET['title']){
           $map['title'] = array("like","%{$_GET['title']}%");
       }
       //获取数据条数，实例化分类类
       $total = $user->where($map)->count();
       $page = new \Think\Page($total,5);
       $page->setConfig('theme',"<ul class='pagination'><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li></ul>");
       //获取所有信息(当前页信息)
       $list = $user->where($map)->limit($page->firstRow.','.$page->listRows)->select();
       
       //放置到模板中
       $this->assign("list",$list);
       $this->assign("pageinfo",$page->show()); //将分页信息放置到模板中
       //var_dump($page->show());
       //加载模板输出
	   $nowPage = $page->nowPage;
       $this->assign("nowPage",$nowPage); //将分页信息放置到模板中
       $this->display("index");
    }
	
	public function insert(){
		
		
		$user = M("announcement");
		$list = array();
		$list['title'] = $_POST['title'];
		$list['content'] = $_POST['content'];
		$list['addtime']=time();
		$user->add($list);
		
		$this->redirect("index");
	}
	
	//执行信息删除
	public function del()
	{
		$user = M("announcement");
		$m = $user->delete($_GET['id']);
		if($m>0){
			echo 1;
		}else{
			echo 3;
		}
	}
	
	//执行信息修改表单
	public function edit(){
		$user = M("announcement");
		$this->assign("list",$user->find($_GET['id']));
		$this->display("edit");
	}
	
	//执行信息修改表单
	public function update(){
		$user = M("announcement");
		$user->create();
		$user->save();
		$this->index();
	}
}