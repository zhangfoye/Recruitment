<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>基本信息-我的简历</title>
	<link rel="stylesheet" type="text/css" href="/lagouwang/Public/basic_css/default.css">
	<link rel="stylesheet" href="/lagouwang/Public/basic_css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="/lagouwang/Public/basic_css/style.css"> <!-- Resource style -->
	<script src="/lagouwang/Public/basic_js/modernizr.js"></script> <!-- Modernizr -->
</head>
<body>
	<div class="jq22-container" style="background-color:#00B38A;">
		<header class="jq22-header bgcolor-11">
			<h1>基本信息-我的简历<span>A jQuery &amp; CSS3 Contact Form</span></h1>
		</header>
		<!--<div class="jq22-content bgcolor-8">
			
		</div>-->
		<div style="background-color:white;width:700px;margin:0 auto;">
		<form class="cd-form floating-labels" style="background-color:white;width:800px;"action="/lagouwang/Home/Resume/basic_insert" method="post">
			<fieldset>
				<legend></legend>
				<div class="icon">
					<input class="user" type="text" name="nickname" placeholder="姓名" id="cd-name" required>
			    </div> 

			    <div class="icon">
					<input class="company" type="text" name="phone" id="cd-company" placeholder="电话" required>
			    </div>
				
				<div>
					<ul class="cd-form-list">
						<li>
							<input type="radio" name="grad_degree" value="1" id="cd-radio-1">
							<label for="cd-radio-1">研究生</label>
						</li>
							
						<li>
							<input type="radio" name="grad_degree" value="2" id="cd-radio-2" checked>
							<label for="cd-radio-2">本科</label>
						</li>

						<li>
							<input type="radio" name="grad_degree" value="3" id="cd-radio-3">
							<label for="cd-radio-3">大专</label>
						</li>
						
						<li>
							<input type="radio" name="grad_degree" value="4" id="cd-radio-4">
							<label for="cd-radio-4">大专以下</label>
						</li>
					</ul>
				</div>
				
			    <div class="icon">
 					<input class="email error" type="email" name="email" id="cd-email" placeholder="邮箱" required>
			    </div>
				
				<div class="icon">
				<select id="s_province" name="s_province" class="form-control" style="width: 220px;float: left;"></select>  
				<select id="s_city" name="city" class="form-control" style="width: 220px;margin-left:30px;float: left;"></select>  
				<script class="resources library" src="/lagouwang/Public/js/area.js" type="text/javascript"></script>
				<script type="text/javascript">_init_area();</script>
			    </div><br>
				
				<div>
			      	<input type="submit" value="保 存 信 息">
			    </div>
			</fieldset>
		</form>
		</div>
	</div>
	
	<script src="/lagouwang/Public/js/jquery-1.10.2.js"></script>
	<script src="/lagouwang/Public/basic_js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>