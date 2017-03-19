<?php
namespace Home\Controller;

class CompanyController extends ComCommonController {
    public function index(){
        // dump($_SESSION);
        // if($_SESSION['com_user']){
        if(!empty($_SESSION['com_user'])){
         $mod = M("com_user");
         $info = $mod->where("id = {$_SESSION['com_user']['id']}")->find();
         // 如果公司有没有招聘资格，跳转到验证页面
         if($info['state'] == "1"){
            $this->redirect("bindstep1");
         }
         // 如果公司没有添加公司信息
         if($info['state'] == '3'){
            $this->redirect("add1");
         }
         // 如果公司添加了招聘信息
         if($info['state'] == "4"){
            $this->redirect("ComIndex/index");
         }         
    }
}
    
    public function bindstep1()
    {
           
        $this->display("bindstep1");
    }

    public function bindstep2()
    {
    	$this->display("bindstep2");

    }

     public function bindstep3()
    {
    	$this->display("bindstep3");
    }

    public function apply1()
    {
        $data['phone'] = $_POST['phone'];
        $data['email'] = $_POST['email'];
        $_SESSION['apply']= $data;
        $this->redirect("bindstep2");
    }
    //发送验证邮件
    public function apply2()
    {
        // dump($_SESSION);
        $data['id'] = $_SESSION['com_user']['id'];
        // $data['username'] = $_SESSION['user']['username'];
        $data['comname'] = $_POST['comname'];
        // $data['addtime'] = time();
        $data['phone'] = $_SESSION['apply']['phone'];
        $data['email'] = $_SESSION['apply']['email'];
        $data['state'] = 2;
        $data['info']= md5(time()).time(); //随意定义一个激活账号使用码。
        
        $mod = M("com_user");
        $mod->create($data);
        // dump($mod);exit;
        $m = $mod->save();
        echo $m;
        if($m > 0){
           $message=<<<str
你好！{$username}
    <h2>欢迎注册本网站</h2>
    激活账号请点击如下地址:<br/><br/>
    <a href="http://localhost/lagouwang/Home/Company/apply3?time={$data['addtime']}&mail={$data['email']}&info={$data['info']}">http://localhost/lagouwang/Home/Company/apply3?&mail={$data['email']}&info={$data['info']}</a>
    <br/><br/>
    www.***.com 
str;

            $b = sendMail($data['email'],"激活账号",$message);

            $info['email'] = $data['email'];
            $info['id'] = $m;
              $this->assign("info",$info);
            }
            $this->display("bindstep3");
            }
  
       // 显示验证成功页 
     public function apply3()
    {

        $mod = M("com_user");
        $comuser = $mod->where("info = '{$_GET['info']}'")->find();
        $this->assign("emial",$comuser['email']);
        if($comuser['state'] == 2){
              if($comuser['info'] = $_GET['info']){
            $data['state'] = 3;
            $data['id'] = $comuser['id'];
            $mod->create($data);
            $m = $mod->save();
            if($m > 0) {
                // echo "验证成功";
                $info['info'] = "恭喜您验证成功";
                $info['id'] = $comuser['id'];
                $this->assign("info",$info);
                $this->display("bindstep4");
            }
          }
        }else{
             $info['info'] = "您已经验证成功不需要重复验证";
             $info['id'] = $comuser['id'];
             $this->assign("info",$info);
               // dump($info);exit;
             $this->display("bindstep4");
        }
      
      
    }

    // 重新发送邮件页
    public function apply4()
    {
        $this->display("bindstep4");
    }
    // 重新发送邮件
    public function sendMail()
    {
        $mod = M("com_user");
        $info = $mod->where("id={$_GET['id']}")->find();
          $message=<<<str
你好！{$username}
    <h2>欢迎注册本网站</h2>
    激活账号请点击如下地址:<br/><br/>
    <a href="http://localhost/lagouwang/Home/Company/apply3?time={$info['addtime']}&mail={$info['email']}&info={$info['info']}">http://localhost/lagouwang/Home/Company/apply3?&mail={$info['email']}&info={$info['info']}</a>
    <br/><br/>
    www.***.com 
str;
    dump($info);
        $b = sendMail($info['email'],"激活账号",$message);
        $info['email'] = $info['email'];
        $info['id'] = $_GET['id'];
        $this->assign("info",$info);
        $this->display("bindstep3");

    }

    // 完善公司信息
    public function add1()
    {
     
        // $mod= M("com_info");
        // $id = $_SESSION['com_user']['id'];
        // $a = $mod->where("uid =".$id)->field("uid")->find();
        // // dump($a);exit;
        // if(!empty($a)){
        //     $this->redirect("ComIndex/index");
        // }else{
            //没有完善过继续完善
        if(!empty($_SESSION['com_user']['id'])){
            $mod = M("com_user");
            $info = $mod->where("id={$_SESSION['com_user']['id']}")->find();
            $this->assign("info",$info);

            $tag = M("tag");
            //行业领域
            $aboutdata = $tag->where("pid = 21")->select();
             $this->assign("aboutdata",$aboutdata);
           //融资阶段
            $phasedata = $tag->where("pid = 20")->select();

            $this->assign("phasedata",$phasedata);
            $this->display("index01");
        }
        // }

    }
    public function doadd1(){
        // 添加基本信息
        $mod = M("com_info");
        $data['phone'] = $_SESSION['com_user']['phone'];
        $data['uid'] = $_SESSION['com_user']['id'];
        $data['com_name'] = $_POST['com_name']; 
        $data['abbname'] = $_POST['abbname'];
        $data['web'] = $_POST['web'];
        $data['address'] = $_POST['s_province'].$_POST['s_city'].$_POST['s_county'];
        $data['about'] = $_POST['about']['0'].",".$_POST['about']['1'];
        $data['scale'] = $_POST['scale'];
        $data['phase'] = $_POST['phase'];
        $data['introduce'] = $_POST['introduce'];
        session("com_data",$data);
        $this->redirect("tag");
    }
    //上传公司头像
    public function uplodlogo()
    {
        if(!empty($_SESSION['a']["logo"])){
            unlink('./Public/Upload/com_logo/'.$_SESSION['com_data']["com_logo"]);
        }
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
        $upload->rootPath  =      './Public/Upload/com_logo/'; // 设置附件上传目录   
        $upload->autoSub = false;
         // 上传文件     
        $info   =  $upload->upload();   
        if(!$info) {
            // 上传错误提示错误信息        
            $this->error($upload->getError());    
         }else{

         }
         $list = json_decode($_POST['avatar_data']);
          foreach ($list as $value) {
            $data[] = $value;
            }
            $image = new \Think\Image();
            $image->open('./Public/Upload/com_logo/'.$info['avatar_file']['savename']);
            $a = $image->crop($data[2],$data[3],$data[0],$data[1])->save('./Public/Upload/com_logo/s_'.$info['avatar_file']['savename']);
            session('logo','s_'.$info['avatar_file']['savename']);
            // 删除上传前的
            unlink('./Public/Upload/com_logo/'.$info['avatar_file']['savename']);     
            $result['result'] = '/lagouwang/Public/Upload/com_logo/s_'.$info['avatar_file']['savename'] ;
            $this->ajaxReturn($result);
    }
     public function uplodimg()
    {
        if(!empty($_SESSION['com_data']["fon_img"])){
            unlink('./Public/Upload/fon_img/'.$_SESSION['com_data']["fon_img"]);
        }
        
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
        $upload->rootPath  =      './Public/Upload/fon_img/'; // 设置附件上传目录   
        $upload->autoSub = false;
         // 上传文件     
        $info   =  $upload->upload();   
        if(!$info) {
            // 上传错误提示错误信息        
            $this->error($upload->getError());    
         }else{

         }
         $list = json_decode($_POST['avatar_data']);
          foreach ($list as $value) {
            $data[] = $value;
            }
            $image = new \Think\Image();
            $a = $image->open('./Public/Upload/fon_img/'.$info['avatar_file']['savename']);
            $image->crop($data[2],$data[3],$data[0],$data[1])->save('./Public/Upload/fon_img/s_'.$info['avatar_file']['savename']);
            unlink('./Public/Upload/fon_img/'.$info['avatar_file']['savename']);
            $_SESSION['com_data']["fon_img"] = 's_'.$info['avatar_file']['savename'];
            $result['result'] = '/lagouwang/Public/Upload/fon_img/s_'.$info['avatar_file']['savename'] ;
            $this->ajaxReturn($result);
    }

    //显示公司标签页
    public function tag()
    {
         // dump($_SESSION);
        if(count($_SESSION['com_data']) == "10"){
        $mod = M("com_tag");
        $list1 = $mod->where("pid = 1")->select();
        $this->assign("list1",$list1);

        $list2 = $mod->where("pid = 2")->select();
        $this->assign("list2",$list2);

        $list3 = $mod->where("pid = 3")->select();
        $this->assign("list3",$list3);

        $list4 = $mod->where("pid = 4")->select();
        $this->assign("list4",$list4);
        $this->display("tag");
        }
        
    }
    // 添加标签
    public function doadd2()
    {
        if(count($_SESSION['com_data'])>0){
            $mod = M("com_info");
            foreach ($_POST['list'] as $value) {
                $tag .=$value.",";
            }
            $_SESSION['com_data']['tag'] = $tag;
            $this->redirect("founder");
       }
    }
    //创始人页
    public function founder()
    {
        // dump($_SESSION);
        if(count($_SESSION['com_data'])>0){
            $this->display('founder');
        }   
    }
    // 添加创始人信息
    public function doadd3()
    {
        if(count($_SESSION['com_data'])>0){
            $mod = M("com_info");
            foreach ($_POST as $key => $value) {
                $_SESSION['com_data']["$key"] = $value;
            }
            $this->redirect("describe");
        }
    }
    // 显示公司介绍页
    public function describe()
    {
        // dump($_SESSION);exit;
        if(count($_SESSION['com_data'])>0){
            $this->display("index03");
        }
    }
    // 添加公司介绍
    public function doadd4()
    {
        // dump($_SESSION);exit;
        if(count($_SESSION['com_data'])>0){
            foreach ($_SESSION['com_data'] as $key => $value) {
                $data["$key"] = $value;
            }
            $data['describe'] = $_POST['describe'];
            $data['logo'] = $_SESSION['logo'];
            // 把公司状态改为4(信息已完善)
            $u = M("com_user");
            $ud['id'] = $_SESSION['com_user']['id'];
            $ud['state'] = 4;
            $u->create($ud);
            $u->save(); 
            // $data['state'] = 1;
            $mod = M("com_info");
              if($mod->create($data)){
                $m = $mod->add();
                if($m >0){
                    echo "添加成功";
                    //把session清空
                    session("com_data",null);
                    session("logo",null);

                    $this->redirect("success");
                }
            }
        }
    }
    // 跳出添加成功页面
    public function success()
    {   
        $mod = M("com_info");
        // 用当前用户ID查出他的公司id
        $this->assign("uid",$_SESSION['com_user']['id']);
        $this->display("success");
    }
	
	//公司列表页
	public function lists()
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
		
		$com_info = D("com_info");
		$map = array();
		   
			if(!empty($_GET['addr'])){
				$map['address'] = array("like","{$_GET['addr']}");
			}
		    
		    if(!empty($_GET['money'])){
				//从标签表中查出传过来的阶段值
				$money = $tag->where("name='{$_GET['money']}'")->find();
				//$com = D("com_info");
				//用阶段值查出来的id查公司信洗里的公司名
				$dom = $com_info->where("phase={$money['id']}")->find();
				//用公司名所对应的id查出这个阶段的公司
				$map['phase'] = array("eq","{$dom['uid']}");
			}
		    if(!empty($_GET['hy'])){
				//从标签表中查出传过来的行业值
				$hy = $tag->where("name='{$_GET['hy']}'")->find();
				//$com = D("com_info");
				//用行业值查出来的id查公司信洗里的公司名
				$dom = $com_info->where("about={$hy['id']}")->find();
				//用公司名所对应的id查出这个阶段的公司
				$map['about'] = array("eq","{$dom['uid']}");
			}
		    
		   
		 
		//获取数据条数，实例化分类类
		$total = $com_info->where($map)->count();
		//var_dump($total);
		$page = new \Think\Page($total,3);
		//$page->setConfig('theme',"<ul class='pagination'><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li></ul>");
		//获取所有信息(当前页信息)
		$com_info = $com_info->where($map)->limit($page->firstRow.','.$page->listRows)->select();
		//var_dump($com_info);exit;
		if(empty($list)){
			header('Cache-control: private, must-revalidate');
		}
		// for($i = 0;$i<count($list); $i++){
			// $qwe = $tag->where("id= {$list[expe]}")->find();
			// $list[$i]['exper'] = $tag['expe'];
		// }
		$this->assign("pageinfo",$page->show()); //将分页信息放置到模板中
		$this->assign("total",$total); //将分页信息放置到模板中
		$this->assign("list",$list);
		$this->assign("addr1",$_GET['addr']);
		$this->assign("exper1",$_GET['exper']);
		$this->assign("money1",$_GET['money']);
		$this->assign("major1",$_GET['major']);
		$this->assign("hy1",$_GET['hy']);
		
		//$mod = M("com_info");
		//$tag = M("tag");
		//$com_list = $mod->select();
		//var_dump($com_list);exit;
		foreach($com_info as $k => $v){
			$about1 = explode(",","{$com_info[$k]['about']}");
			$about = $tag->where("id={$about1['0']}")->find();
			$phase1 = explode(",","{$com_info[$k]['phase']}");
			$phase = $tag->where("id={$phase1['0']}")->find();
			$com_info[$k]['about'] = $about['name'];
			$com_info[$k]['phase'] = $phase['name'];
			
		}
		//var_dump($com_info);
		$this->assign("com_info",$com_info);
		$this->display("gongsi");
	}
}