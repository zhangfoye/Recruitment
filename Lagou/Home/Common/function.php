<?php
date_default_timezone_set('Asia/Shanghai');
//发送短信验证码的函数
function sendMSM ($phone){
	Vendor('Alidayu.TopSdk','','.php');
	// include("./TopSdk.php");
	$code=rand(100000,999999);
	$appkey = '23659113';
	$secret = 'efccf967c3ebdc6eb690014f2e00ff34';
	$c = new \TopClient;
	$c->appkey = $appkey;
	$c->secretKey = $secret;
	$c->format = 'json';
	$req = new \AlibabaAliqinFcSmsNumSendRequest;
	$req->setExtend($code);
	$req->setSmsType('normal');
	$req->setSmsFreeSignName('测试一下'); //发送的签名
	$req->setSmsParam('{"code":"'.$code.'"}');//根据模板进行填写
	$req->setRecNum($phone);//接收着的手机号码
	// $req->setRecNum($mobile);//接收着的手机号码
	$req->setSmsTemplateCode('SMS_52200205');
	$resp = $c->execute($req);	
	// var_dump($resp);
	return $code;
	// return $resp;
}

//定义一个mail发送函数
function sendMail($address,$title,$message){
	//导入mail类文件
	//require("./PHPMailer/class.phpmailer.php");
	
	vendor('PHPMailer.class#phpmailer'); //Thinkphp的导入方式，放在/ThinkPHP/Extend/Vendor/
	
	//创建mail对象
	$mail = new PHPMailer();

	$mail->IsSMTP(); //设置使用SMTP服务器发送
	$mail->Host = "smtp.126.com";  //设置126邮箱服务 
	$mail->SMTPAuth = true;     // 设置需要验证
	$mail->Username = "xianggua59421@126.com";  // 发件人使用邮箱
	$mail->Password = "ctt59421"; // 设置发件人密码

	$mail->From = "xianggua59421@126.com";// 发件人邮箱
	$mail->FromName = "xianggua"; //发送者名称
	$mail->AddAddress($address); // 添加发送地址
	
	$mail->IsHTML(true); //指定支持html格式
	$mail->CharSet="UTF-8";
	
	$mail->Subject = $title;
	$mail->Body = $message;
	
	if($mail->Send()){
	   return true;
	}else{
	   return false;
	}
}

