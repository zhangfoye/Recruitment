<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<!-- meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="23635710066417756375" />
<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />
<meta charset="UTF-8">

<meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

<meta content="拉勾网是3W旗下的互联网领域垂直招聘网站" name="description">

<title>找工作-互联网招聘求职网-拉勾网</title>
<script type="text/javascript" src="/lagouwang/Public/js/jquery-1.8.3.min.js"></script>

<link rel="Shortcut Icon" href="//img.lagou.com/passport/static/common/static/favicon_faed927.ico">
<!-- H5	 -->
<!--[if lt IE 9]>
  	<script src="js/html5shiv.min.js"></script>
  	<script src="js/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_d4facea.css" />

</head>
<body>
<!-- 页面主体START -->
<header class="sso_header">
	<a href="#" class="logo ">
	</a>
</header>
<section class="content_box cleafix">
	<div class="left_area fl">
		<form id="loginForm">
			<div class="form_body"  data-view="loginView">
				<div class="input_item clearfix" data-propertyname="username" data-controltype="Phone">
					<input type="text" class="input input_white" id="" name="phone" placeholder="请输入已验证手机/邮箱" onblur="phonefun()">
				</div>
				<span id="phone" style="color:red"></span>
				<div class="input_item clearfix" data-propertyname="password" data-controltype="Password">
					<input type="password" class="input input_white" id="" name="password" placeholder="请输入密码" onblur="passwordfun()">
				</div>
				<span id="password" style="color:red"></span>

				<div class="input_item clearfix"  data-propertyname="request_form_verifyCode" data-controltype="VerifyCode" style="display:none;">
					<input type="text" class="input input_white fl" style="width:130px; display:block;" name="code" placeholder="请证明你不是机器人" onblur="codefun()">
					<img src="<?php echo U('Home/Public/verify','','');?>" alt="" class="yzm" onclick="this.src='/lagouwang/Home/Public/verify/id/'+Math.random()"id="codeimg">
					<a rel="nofollow" href="javascript:;" onclick="Refresh()"class="reflash"></a>
				</div>
				<span id="code" style="color:red"></span>

				<div class="input_item clearfix">
					<a rel="nofollow" href="#" class="forgot_pwd">忘记密码？</a>
				</div>
				<div class="input_item clearfix" data-propertyname="submit" data-controltype="Botton">
					<input type="button" class="btn btn_green btn_active btn_block btn_lg" value="登&nbsp;录"onclick="dologin()">
				</div>
				<div class="input_item clearfix">
					<h5 class="reg_now">还没有拉勾帐号？<a rel="nofollow" href="/lagouwang/Home/Public/register" data-lg-tj-id="1ja0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">立即注册</a></h5>
				</div>
				<input type="hidden" value = "" id = "isVisiable_request_form_verifyCode" />
			</div>
		</form>
	</div>

	<div class="divider fl">
		<img src="/lagouwang/Public/picture/divider-login_3362138.jpg" alt="分割线">
	</div>
	<div class="right_area fl">
		<h5>使用以下帐号直接登录:</h5>
		<ul class="vender_login clearfix">
			<li><a rel="nofollow" href="/oauth20/auth_sinaWeiboProvider.html" title="使用新浪微博帐号登录" class="vender_icon icon_sina" target="_blank" data-lg-tj-id="1jb0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></a></li>
			<li><a rel="nofollow" href="/oauth20/auth_qqProvider.html" title="使用腾讯QQ帐号登录" class="vender_icon icon_tencent" target="_blank" data-lg-tj-id="1jc0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></a></li>
			<li class="last_child"><a rel="nofollow" href="/oauth20/auth_weixinProvider.html" class="vender_icon icon_wechat" title="使用微信帐号登录" target="_blank" data-lg-tj-id="1jd0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></a></li>
		</ul>
		<div class="qrcode">
			<img src="/lagouwang/Public/picture/qrcode_0ec6bff.jpg" alt="二维码">
			<p>[ 扫码下载拉勾APP ]</p>
		</div>
	</div>
</section>
<footer>
	<h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer>
<!-- 页面主体END --><!-- jquery lib -->
<script type="text/javascript">
	//刷新验证码
	function Refresh(){
		$("#codeimg").click();
	}
	// 获取表单值
	var phone = $("input[name='phone']");
	var code = $("input[name='code']");
	var password = $("input[name='password']");

	//验证手机号
	function phonefun(){
	  if(!(/^1[3|4|5|8][0-9]\d{8}$/.test(phone.val()))){ 
	  	$("#phone").html("");
       	$("#phone").append("请输入正确的手机号码");
       	return false;  
    	} else{
    	return true;
    	}
	}
	phone.focus(function(){
       	$("#phone").html("");  
	});
	// 验证密码
	 function passwordfun (){
	  if(!(/^[a-z0-9_-]{3,16}$/.test(password.val()))){ 
	  	$("#password").html("");
       	$("#password").append("3-16位数字字母下滑线");  
        return false;
    	} else {
    	return true;
    	}
	};
	password.focus(function(){
       	$("#password").html("");  
	});
	// 验证验证码是否正确
	function codefun (){
		// alert(1);
		// alert(<?php echo (session('code')); ?>);
	  $.ajax({
            type:'post',             //请求方式GET
            url :'/lagouwang/Home/Public/doverify',           //ajax请求地址
            data:"code="+code.val(), //请求传递的参数
            dataType:'json',        //预期服务器返回的数据类型
            async : false,           //是否异步
            success: function(data){
            	if(data.info == "N"){
	  				$("#code").html("");
            		$("#code").append("验证码输入错误");
            		// alert(data);
            		b = false;
            		$("#codeimg").click();
            	}
            	if(data.info=="Y"){
            		// alert(111111);
            		$("#phonecode").css("display","block");
            		// $("#phonecod").css("display","none");
            		b =  true;
            	}
            }
        });
	  // return b;
	  	if(b){
	  		return true;
	  	}else{
	  		return false;
	  	}
	}
	code.focus(function(){
		$("#code").html("");  
	});
	function code1(){
		 $.ajax({
            type:'post',             //请求方式GET
            url :'/lagouwang/Home/Public/code1',           //ajax请求地址
            data:"code="+code.val(), //请求传递的参数
            dataType:'json',        //预期服务器返回的数据类型
            async : false,           //是否异步
            success: function(data){
            	// alert(data);
            	if(data == 1){
	  				$("#code").html("");
            		$("#code").append("验证码输入错误");
            		a = false;
            		$("#codeimg").click();
            	}
            	if(data == 2){
            		a = true;
            	}
            }
        });
		 if(a){
	  		return true;
	  	}else{
	  		return false;
	  	}
	}
	function dologin(){
			// alert(phonefun());
			
			// alert(passwordfun());
			// alert(code1());
		// if(codefun() && phonefun()&& passwordfun()){
		if(phonefun()&& passwordfun()){

		 $.ajax({
            type:'post',             //请求方式GET
            url :'/lagouwang/Home/Public/doLogin',           //ajax请求地址
            data:$(loginForm).serialize(), //请求传递的参数
            dataType:'json',        //预期服务器返回的数据类型
            async : true,           //是否异步
            success: function(data){
            	if(data == 1){
            		// alert(document.referrer);
            		if(document.referrer == "http://localhost/lagouwang/Home/Public/register"){
            			window.location.href="/lagouwang/Home/Index/index";

            		}else{
              			 window.history.back(-1); 

            		}
                }
                    	if(data == 2){
                    		alert("账号或密码错误");
                    }
						if(data == 3){
						window.location.href="/lagouwang/Home/Public/basic";
					}
				
            },  //ajax成功后的回调函数
            error : function(){
            $("#password").append("输入错误");
            $("#codeimg").click();
            }   //ajax失败后的回调函数
       		});
	}
 }
</script>
</html>