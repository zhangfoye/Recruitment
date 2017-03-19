<?php
namespace Admin\Controller;
use Think\Controller;
class FriendlinkController extends Controller {
    public function index(){
		//获取所有学生信息并加载模板输出
		$manager = M("friendlink");
		$map = array();
       if($_GET['name']){
           $map['name'] = array("like","%{$_GET['name']}%");
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
		$user = M("friendlink");
		$m = $user->delete($_GET['id']);
		if($m>0){
			echo 1;
		}else{
			echo 3;
		}
	}
	
	//执行信息修改表单
	public function edit(){
		$user = M("friendlink");
		$this->assign("list",$user->find($_GET['id']));
		$this->display("edit");
	}
	
	//执行信息修改表单
	//执行编辑
	public function update()
	{
		$mod = M("friendlink");
		$list = $mod->find($_POST['id']);
		if($list>0){
			//$m = $this->assign("file",$list);
			// var_dump($list);
			$pic = $list['picname'];
			$file = $_FILES['picname'];
			//var_dump($file);
			if($file['error'] == 4){
				$list['picname'] = $pic;
			}else{
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath  =     './Public/admin/linkpic/'; // 设置附件上传根目录
			$upload->savePath  =     ''; // 设置附件上传（子）目录
			$upload->autoSub   =   false; //关闭上传文件的子目录创建
			// 上传文件 
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息
				$this->error($upload->getError());
				//$list['picname']=$pic;
			}else{// 上传成功
				// $this->success('上传成功！');
				//遍历上传后的图片并执行图片缩放
				$image = new \Think\Image(); 
				foreach($info as $file){
					
					echo $file['savepath'].$file['savename']."<br/>";
					$image->open('./Public/admin/images/'.$file['savename']);
					 // 按照原图的比例生成一个最大为200*200的缩略图另存为带s_前缀的图片
					 $image->thumb(200, 200)->save('./Public/admin/linkpic/s_'.$file['savename']);
					 $image->thumb(100, 100)->save('./Public/admin/linkpic/ss_'.$file['savename']);
					
					 // $data['picname']=$file['savename'];
					 // $data['name']=$_POST['name'];
					// $data['size']=$file['size'];
					$list['picname']=$file['savename'];
					unlink("./public/admin/linkpic/".$pic);
					unlink("./public/admin/linkpic/s_".$pic);
					
				}	
				}
			}

					 $mod = M("friendlink");
					$list['href'] = $_POST['href'];
					$list['name'] = $_POST['name'];
				
					// //加载添加表单
						
					$m = $mod->save($list);
					$this->redirect('index');				 
	}	
	//$this->redirect('index');
}
	
	//执行文件上传	
    public function insert()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './public/Admin/linkpic/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->autoSub   =   false; //关闭上传文件的子目录创建
        // 上传文件 
        $info   =   $upload->upload();
		//var_dump($info);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $this->success('上传成功！');
            //遍历上传后的图片并执行图片缩放
            $image = new \Think\Image(); 
            foreach($info as $file){
				
                echo $file['savepath'].$file['savename']."<br/>";
                $image->open('./public/Admin/linkpic/'.$file['savename']);
                 // 按照原图的比例生成一个最大为200*200的缩略图另存为带s_前缀的图片
                 $image->thumb(200, 200)->save('./public/Admin/linkpic/s_'.$file['savename']);
				
				 $mod = M("friendlink");
				 $list['picname']=$file['savename'];
				$list['href'] = $_POST['href'];
				$list['name'] = $_POST['name'];
				$list['addtime'] = time();
				
				// //加载添加表单
					
				$m = $mod->add($list);
				$this->redirect("index");
				
            }
        }     
    }
	
	
}