<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
<script type="text/javascript" src="/lagouwang/Public/style/js/jquery.1.10.1.min.js"></script>
<link rel="Shortcut Icon" href="//img.lagou.com/passport/static/common/static/favicon_faed927.ico">
<!-- H5	 -->
<!--[if lt IE 9]>
  	<script src="js/html5shiv.min.js"></script>
  	<script src="js/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_0d4b51f.css" />
</head>
<body>

<!-- 页面主体START -->
<header class="sso_header">
	<a href="http://www.lagou.com" class="logo"></a>
</header>
<input type="hidden" value = "false" id = "isVisiable_request_form_verifyCode" />
<input type="hidden" value = "true" id = "is_must_show_verify_code" />
<section class="content_box cleafix">
	<div class="left_area fl">
		<form action="" method="" id="register">
			<ul class="form_head clearfix">
				<li class="active" data-lg-tj-id="18J0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
					<i class="icon icon_phone"></i>
					手机号码注册
				</li>
				
			</ul>
			<div class="form_body"  data-view="phoneRegister">
				<div class="input_item clearfix" data-propertyname="phone" data-controltype="Phone">
					<input type="text" class="input input_white" id="" name="phone" placeholder="请输入常用手机号码" onblur="phonefun()">
				</div>
				<span id="phone" style="color:red"></span>
				<div class="input_item clearfix" id="codecode" style="display: block;">
					<input type="text" class="input input_white fl" style="width:130px; display:block;" name="code" placeholder="请证明你不是机器人" onblur="codefun()">
					<img src="<?php echo U('Home/Public/verify','','');?>" alt="" class="yzm" onclick="this.src='/lagouwang/Home/Public/verify/id/'+Math.random()" id="codeimg">
					<a rel="nofollow" onclick="Refresh()" class="reflash"></a>
				</div>
				<span id="code" style="color:red"></span>
				
				<div class="input_item" id="phonecode" style="display: none;">
					<div class="input_group clearfix">
						<input type="text" class="input input_white first_child" id="" name="phonecode" placeholder="请输入短信验证码" onblur="phonecodefun()">
						<!-- <input type="button" class="btn btn_green btn_active btn_lg last_child btn_disabled" value="25秒后重试"id="codetime" style="display: none;"> -->
						<input type="button" class="btn btn_green btn_active btn_lg last_child" value="获取验证码" onclick="sendcode()" id="getcode" style="display: block;">
						
					</div>
				</div>
				<span id="phonecod" style="color:red"></span>
				<div class="input_item clearfix" >
					<input type="password" class="input input_white" id="" name="password" placeholder="请输入密码" onblur="passwordfun()">
				</div>
				<span id="password" style="color:red"></span>

				<div class="input_item clearfix" >
					<input type="password" class="input input_white" id="" name="password1" placeholder="确认密码" onblur="password1fun()">
				</div>
				<span id="password1" style="color:red"></span>

				<div class="input_item clearfix">
					<input type="radio"  class="" value="1" name="radio" checked>找工作
					<input type="radio"  class="" value="0" name="radio">招人
				</div>
				<div class="input_item clearfix" style="margin-top:16px;">
					<label for="checkbox">
			            <input type="checkbox" value="1" id="checkbox"name="checkbox" checked="checked">我已阅读并同意
			            <a rel="nofollow" href='http://www.lagou.com/privacy.html' target='_blank' style='color:#00b38a' data-lg-tj-id="18L0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">《拉勾用户协议》</a>
			        </label>
				</div>
				<div class="input_item clearfix" >
					<input type="button" onclick="doRegister()"class="btn btn_green btn_active btn_block btn_lg" value="注&nbsp;册">
				</div>
			</div>
		</form>

	</div>
	<div class="divider fl">
		<img src="/lagouwang/Public/picture/divider_a3c3658.jpg" alt="分割线">
	</div>
	</div>
	<div class="right_area fl">
		<h5>已有拉勾帐号:</h5>
		<a href="/lagouwang/Home/Public/Login" class="login_now" data-lg-tj-id="18N0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">直接登录</a>
		<h5>使用以下帐号直接登录:</h5>
		<ul class="vender_login clearfix">
			<li><a rel="nofollow" href="" title="使用新浪微博帐号登录" class="vender_icon icon_sina" target="_blank"></a></li>
			<li><a rel="nofollow" href="" title="使用腾讯QQ帐号登录" class="vender_icon icon_tencent" target="_blank" ></a></li>
			<li class="last_child"><a rel="nofollow" href="" class="vender_icon icon_wechat" title="使用微信帐号登录" target="_blank" ></a></li>
		</ul>
		<div class="qrcode">
			<img src="/lagouwang/Public/picture/qrcode_0ec6bff.jpg" alt="二维码">
			<p>[ 扫码下载拉勾APP ]</p>
		</div>
	</div>
</section>
<!-- 页面主体END -->
<footer>
	<h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer>
<script type="text/javascript" >
	//刷新验证码
	function Refresh(){
		$("#codeimg").click();
	}
	// 获取表单值
	var phone = $("input[name='phone']");
	var code = $("input[name='code']");
	var phonecode = $("input[name='phonecode']");
	var password = $("input[name='password']");
	var password1 = $("input[name='password1']");
	var radio = $("input[name = 'radio']");
	//验证手机号
	function phonefun(){
	  if(!(/^1[3|4|5|8][0-9]\d{8}$/.test(phone.val()))){ 
	  	$("#phone").html("");
       	$("#phone").append("请输入正确的手机号码");  
    	} else {
    		$.ajax({
            type:'post',             //请求方式GET
            url :'/lagouwang/Home/Public/existuser',           //ajax请求地址
            data:"phone="+phone.val()+"&radio="+radio.val(), //请求传递的参数
            dataType:'json',        //预期服务器返回的数据类型
            async : false,           //是否异步
            success: function(data){
            		if(data == 1){
            			$("#phone").html("");
       					$("#phone").append("账号已存在"); 
       					b = false;
            		}else{
            			b = true;
            		}
                    },  //ajax成功后的回调函数
            });
            if(b){
		  		return true;
		  	}else{
		  		return false;
		  	}
    	}		
	};
	
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
	//验证密码和确认密码是否一致
	 function password1fun (){
		if(password.val() != password1.val()){
			$("#password1").html("");
			$("#password1").append("两次输入的密码不一致");
			return false;
		}else{
	  		return true;
		}
	};
	password1.focus(function(){
       	$("#password1").html("");  
	});
	//手机验证码验证
  	 function phonecodefun (){
		  $.ajax({
                type:'post',             //请求方式GET
                url :'/lagouwang/Home/Public/phonecode',           //ajax请求地址
                data:"phonecode="+phonecode.val(), //请求传递的参数
                dataType:'json',        //预期服务器返回的数据类型
                async :false,           //是否异步
                success: function(data){
                	// alert(data);
                	if(data == 1){
	  					$("#phonecod").html("");
                		$("#phonecod").append("短信验证码输入错误");
                		$("#codeimg").click();
                		b =  false;
                	}else{
                		b = true;
                	}
                }, 
         	});
		  	if(b){
		  		return true;
		  	}else{
		  		return false;
		  	}
		}
	phonecode.focus(function(){
	       	$("#phonecod").html("");  
	});
	// 验证验证码是否正确
	 function codefun (){
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
	  	if(b){
	  		return true;
	  	}else{
	  		return false;
	  	}
	}
	code.focus(function(){
		$("#code").html("");  
	});
	//验证结束
	//获取短信验证码
	function sendcode (){
		var phone = $("input[name='phone']").val();
		// alert(phone);
		$.ajax({
            type:'post',             //请求方式GET
            url :'/lagouwang/Home/Public/getCode',           //ajax请求地址
            data:"phone="+phone, //请求传递的参数
            dataType:'json',        //预期服务器返回的数据类型
            async : true,           //是否异步
            success: function(data){
            	// alert(data);
            	var time=60;
            	$("#getcode").removeAttr("onclick");
            	$("#getcode").addClass("btn_disabled");
            	var a = setInterval(function(){ 
					time --;
					$("#getcode").val(time+"秒后重试");
					if(time == 0){ 
						clearInterval(a);
						$("#getcode").val("获取验证码");
						$("#getcode").attr("onclick","sendcode()");
						$("#getcode").removeClass("btn_disabled");
					}
				}, 1000); 
                },  //ajax成功后的回调函数
            });
	}
	//执行登录
	function doRegister(){
		if(phonefun() && phonecodefun()&& passwordfun() && password1fun()){
		if($('#checkbox').is(':checked')){
			// alert(2);
			 $.ajax({
            type:'post',             //请求方式GET
            url :'/lagouwang/Home/Public/doRegister',           //ajax请求地址
            data:$(register).serialize(), //请求传递的参数
            dataType:'json',        //预期服务器返回的数据类型
            async : true,           //是否异步
            success: function(data){
            	// alert(data);
            	if(data == "1"){
            		window.location.href="/lagouwang/Home/Public/login";

            	}
            	if(data  == "2"){
            		window.location.href="/lagouwang/Home/Public/com_login";

            	}
				
            },  //ajax成功后的回调函数
            error : function(){
                alert("ajax请求失败！");
            }   //ajax失败后的回调函数
       		});
			}
			}else{
			$("#password1").append("输入错误");
            $("#codeimg").click();
		}
	}
</script>
</body>
</html>