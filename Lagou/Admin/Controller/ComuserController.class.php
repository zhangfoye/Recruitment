<?php
namespace Admin\Controller;
use Think\Controller;
class ComuserController extends Controller {
    public function index(){
		//获取所有学生信息并加载模板输出
		$manager = M("com_user");
		

		 $map = array();
       if($_GET['comname']){
           $map['comname'] = array("like","%{$_GET['comname']}%");
       }
       if(!empty($_GET['state'])||$_GET['state']==="0"){
           $map['state'] = array("eq","{$_GET['state']}");
       }
       //获取数据条数，实例化分类类
       $total = $manager->where($map)->count();
       $page = new \Think\Page($total,5);
       $page->setConfig('theme',"<ul class='pagination'><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li></ul>");
       //获取所有信息(当前页信息)
       $list = $manager->where($map)->limit($page->firstRow.','.$page->listRows)->select();
       
       //放置到模板中
       $this->assign("list",$list);
       $this->assign("pageinfo",$page->show()); //将分页信息放置到模板中
       $this->assign("total",$total); //将分页信息放置到模板中
	   
	   $nowPage = $page->nowPage;
       $this->assign("nowPage",$nowPage); //将分页信息放置到模板中
       //var_dump($page->show());
       //加载模板输出
       $this->display("index");
    	}
	
	
	
	//执行信息删除
	public function del()
	{
		$user = M("com_user");
		$m = $user->delete($_GET['id']);
		if($m>0){
			echo 1;
		}else{
			echo 3;
		}
	}
	
	//执行信息修改表单
	public function edit(){
		$user = M("com_user");
		$this->assign("list",$user->find($_GET['id']));
		$this->display("edit");
	}
	
	//执行信息修改表单
	//执行编辑
	public function update()
	{
		$mod = M("com_user");
		$list = $mod->find($_POST['id']);
		
				

					 $mod = M("com_user");
					$list['username'] = $_POST['username'];
					$list['comname'] = $_POST['comname'];
					
					$list['info'] = md5(time()).time();
					
					$list['phone'] = $_POST['phone'];
					$list['password'] = md5($_POST['password']);
					$list['email'] = $_POST['email'];
					$list['address'] = $_POST['address'];
					$list['state'] = $_POST['state'];
					// //加载添加表单
						
					$m = $mod->save($list);
					$this->redirect('index');				 
	}	
	
	
	//执行文件上传	
    public function insert()
    {
       
				
				 $mod = M("com_user");
				$list['username'] = $_POST['username'];
				$list['comname'] = $_POST['comname'];
				
				$list['info'] = md5(time()).time();
				
				
				$list['phone'] = $_POST['phone'];
				$list['password'] = md5($_POST['password']);
				$list['email'] = $_POST['email'];
				$list['state'] = $_POST['state'];
				$list['address'] = $_POST['s_province'].$_POST['s_city'].$_POST['s_county'];
				$list['addtime'] = time();
				
				// //加载添加表单
					
				$m = $mod->add($list);
				$this->redirect("index");
				
            }
	//验证当前账号存不存在
    public function existuser(){
    // dump($_POST);
      // exit;
           $mod = M("com_user");
           $info = $mod->where("phone = {$_POST['phone']}")->find();
           if($info){
            echo 1;
           }
           else{
            echo 2;
           }
    }
	
	public function detail(){
		var_dump($_GET['id']);
		$mod = D("position_info");
		$info = $mod->where("comid = {$_GET['id']}")->select();
		$this->assign("info",$info);
		$this->display("info");
	}
			
}     
    
	
	
