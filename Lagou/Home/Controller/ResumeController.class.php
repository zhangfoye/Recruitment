<?php
namespace Home\Controller;
use Think\Controller;
class ResumeController extends CommonController
{
	public function index()
	{
		$mod = M("resume");
		$m = M("users");
		$user_info = $m->where("id=".$_SESSION['user']['id'])->find();
		$info = $mod->where("uid=".$_SESSION['user']['id'])->find();
		$this->assign("user_info",$user_info);
		$this->assign("info",$info);

		$mod = M("proj_experice");
		$proj_exper_info = $mod->where("uid=".$_SESSION['user']['id'])->find();
		$this->assign("proj_exper_info",$proj_exper_info);

		$this->display("resume");
	}

	//加载编辑页面
	public function edit($id)
	{

		$mod = M("resume");
		$sx_info['data'] = $mod->where("id=".$id)->find();
		echo json_encode($sx_info);
		//$this->assign("sx_info",$sx_info);
		//$this->display("resume");
	}

	public function update()
	{
		$mod = M("resume");
		if(!$mod->create()){
			$this->error($mod->getError());
		}
		
		if($mod->save()){
			$res['info'] = "Y";
			$res['data'] = $mod->where("id=".$_POST['id'])->find();
			//$this->success("修改成功！");
			echo json_encode($res);	
		}else{
			$res['info'] = "N";
			//$this->error("修改失败！");
			echo json_encode($res);
		}
	}
	//简历的预览
	public function preview()
	{
		$mod = M("resume");
		$m = M("users");
		$mod1 = M("proj_experice");
		$user_info = $m->where("id=".$_SESSION['user']['id'])->find();
		$info = $mod->where("uid=".$_SESSION['user']['id'])->find();
		$proj_info = $mod1->where("uid=".$_SESSION['user']['id'])->find();
		$this->assign("user_info",$user_info);
		$this->assign("proj_info",$proj_info);
		$this->assign("info",$info);
		$this->display("preview");
	}

	
	//添加求职者信息
	public function proj_exper_insert()
	{
		
		$mod = M("proj_experice");
		if(!$mod->create()){
			$this->error($mod->getError());
		}
		if($mod->add()){
			
			$this->redirect("index");
			// $res['info'] = "Y";
			// $res['data'] = $mod->find($mod->add());
		}else{
			$this->error("添加失败！");
			// $res['info'] = "N";
		}
		//echo json_encode($res);
		$this->display("resume");
	}

	//加载项目经验编辑页面
	public function proj_exper_edit($id)
	{

		$mod = M("proj_experice");
		$proj_exper_info['data'] = $mod->where("id=".$id)->find();
		echo json_encode($proj_exper_info);
		//$this->assign("sx_info",$sx_info);
		//$this->display("resume");
	}

	public function proj_exper_update()
	{
		$mod = M("proj_experice");
		if(!$mod->create()){
			$this->error($mod->getError());
		}
		
		if($mod->save()){
			$res['info'] = "Y";
			$res['data'] = $mod->where("id=".$_POST['id'])->find();
			//$this->success("修改成功！");
			echo json_encode($res);	
		}else{
			$res['info'] = "N";
			//$this->error("修改失败！");
			echo json_encode($res);
		}
	}
	//上传个人头像
	public function uploadimg()
    {
        /*if(!empty($_SESSION['com_data']["fon_img"])){
            unlink('./Public/Upload/'.$_SESSION['com_data']["fon_img"]);
        }*/
        
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
        $upload->rootPath  =      './Public/Upload/head_img/'; // 设置附件上传目录   
        $upload->autoSub = false;
         // 上传文件     
        $info   =  $upload->upload();   
        if(!$info) {
            // 上传错误提示错误信息        
            $this->error($upload->getError());    
         }else{

       		$mod = M("resume");
       		if(!$mod->create()){
       			$this->error($mod->getError());
       		}
			
			$image = new \Think\Image();
            $a = $image->open('./Public/Upload/head_img/'.$info['headPic']['savename']);
            $image->thumb(150,150,\Think\Image::IMAGE_THUMB_CENTER)->save('./Public/Upload/head_img/s_'.$info['headPic']['savename']);
            unlink('./Public/Upload/head_img/'.$info['headPic']['savename']);
			
			$data = array('head_img_name' => "{$info['headPic']['savename']}");
			$mod->where("id=".$_POST['id'])->setField($data);
       		// $info_list = $mod->where("id=".$_POST['id'])->find();
       		// $info_list["head_img_name"] = $info['headPic']['savename'];
			$info_list = $mod->where("id=".$_POST["id"])->find();
			//var_dump($info_list);exit;
       		//$this->assign("info_list",$info_list);
			//
			$this->redirect("index");
			//unlink("./Public/Upload/head_img/".$info['headPic']['savename']);
         	
    	}
    }
	
	public function fj_upload()
	{
		$upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
        $upload->exts      =     array('doc', 'docx');// 设置附件上传类型 
        $upload->rootPath  =      './Public/Upload/fj_doc/'; // 设置附件上传目录   
        $upload->autoSub = false;
         // 上传文件     
        $info = $upload->upload();
		//$fj_name = $info['fj_resume']['name'];
        if(!$info) {
            // 上传错误提示错误信息        
            $this->error($upload->getError());    
         }else{
			$mod = M("resume");
			$data = array("resume_name" => "{$info['fj_resume']['name']}");
			if($mod->where("id=".$_POST['id'])->setField($data)){
			$this->redirect("index");
				}else{
			$this->error("上传失败！");
			}
			
		 
		}
			 
	}
	
    public function basic_insert()
    {
    	//var_dump($_POST['grad_degree']);exit;
    	$mod = M("resume");
    	$_POST['uid'] = $_SESSION['user']['id'];
    	if(!$mod->create()){
    		$this->error($mod->getError());
    	}

    	if($mod->add()){
			$this->redirect("Index/index");
    	}else{
    		$this->error("添加失败！");
    		
    	}
    }
	
	//简历的下载
	public function download()
	{
		//设置类型
		header("content-type:application/octet-stream");
		//告诉客户端浏览器返回的文件大小是按照字节进行计算的
		header("Accept-Ranges: bytes");
		//设置下载的名字
		header("content-disposition:attachment;filename=1.doc");
		//设置大小
		header("content-length:1M");
		readfile("./Public/Upload/1.doc");
	}

}







