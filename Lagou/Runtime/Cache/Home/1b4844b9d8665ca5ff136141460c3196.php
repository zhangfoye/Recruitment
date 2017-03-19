<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        <!-- meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="renderer" content="webkit">
        <meta property="qc:admins" content="23635710066417756375" />
        <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />
        <meta charset="UTF-8">
        <meta content="互联网招聘,找工作,招聘网,人才网" name="keywords">
        <meta content="拉勾网是最权威的互联网行业招聘网站,提供全国真实的互联网招聘信息,工资不面议当面谈,找工作,招聘网,寻人才就来拉勾网,互联网行业找工作首选拉勾网"
        name="description">
        <title>
            拉勾网-最专业的互联网招聘平台_找工作_招聘_人才网_求职
        </title>
        <link rel="Shortcut Icon" href="//www.lgstatic.com/www/static/common/static/favicon_faed927.ico">
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/mcustomscrollbar_ac2fb8b.css"/>
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/layout_19d0413.css" />
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_80d78ab.css"/>
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/widgets_ea16201.css"/>
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_2_2caf777.css"/>
        <link rel="Shortcut Icon" href="//www.lgstatic.com/www/static/common/static/favicon_faed927.ico">
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_f4bbb2e.css" />
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_2_0644f78.css" />
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_48273fc.css" />
        <link rel="Shortcut Icon" href="//www.lgstatic.com/www/static/common/static/favicon_faed927.ico">
        
    </head>
    
    <body>
       <div id="lg_header">
    <?php if($_SESSION['user']!= null): ?><!--C端头部黑色导航-->
        <div id="lg_tbar">
            <div class="inner">
                <div class="lg_tbar_l">
                    <a rel="nofollow" href="/lagouwang/Home/ComIndex/index" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_qiyeban">进入企业版</a></div>
                <ul class="lg_tbar_r">
                    <!-- if has unread message, add class unreaded -->
                    <li class="msg_dropdown" data-lg-tj-track-code="index_message">
                        <a class="msg_group" href="javascript: void 0;" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">消息
                            <em class="msg_amount hide" id="headMsgAmount"></em></a>
                        <div class="lg_msg_popup">
                            <div class="lg_msg_pu_body" id="lgPopupMsgBody"></div>
                            <div class="lg_msg_pu_footer">
                                <a href="//www.lagou.com/message/settingsdetail.html" target="_blank" class="lg_msg_setting fl">
                                    <i class="lg_msg_avatar setting_i" data-lg-tj-id="18B0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></i>&nbsp;</a>
                                <a href="//www.lagou.com/message/msgdetail.html" class="lg_msg_more fr" data-lg-tj-id="18A0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a></div>
                        </div>
                    </li>
                    <li>
                        <a href="/lagouwang/Home/Resume/index" class="bl" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-tj-track-code="index_resume">我的简历</a></li>
                    <li>
                        <a href="/lagouwang/Home/PersonCenter/index" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-tj-track-code="index_deliver" data-lg-tj-track-type="1">投递箱</a>
                        <em class="noticeDot dn" id="noticeDot_delivery"></em>
                    </li>
                    <li>
                        <a href="/lagouwang/Home/PersonCenter/collection" class="bl" data-lg-tj-id="5900" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-tj-track-code="index_favorite" data-lg-tj-track-type="1">收藏夹</a></li>
                    <li class="user_dropdown" data-lg-tj-track-code="index_user">
                        <span class="unick bl"><?php echo ($_SESSION['user']['username']); ?></span>
                        <em class="noticeDot dn" id="noticeDot_name"></em>
                        <i>
                        </i>
                        <ul>
                            <li>
                                <a href="#" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的订阅</a></li>
                            <li>
                                <a href="#" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">职位邀请</a>
                                <em class="noticeDot dn" id="noticeDot_invitation"></em>
                            </li>
                            <li>
                                <a href="#" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a></li>
                            <li>
                                <a href="/lagouwang/Home/Public/com_login" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a></li>
                            <li>
                                <a href="/lagouwang/Home/Public/doLogout" data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--end #lg_tbar-->
        <?php else: ?>
        <div id="lg_tbar">
            <div class="inner">
                <div class="lg_tbar_l">
                    <a rel="nofollow" href="/lagouwang/Home/ComIndex/index" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_qiyeban">进入企业版</a></div>
                <ul class="lg_tbar_r">
                    <li>
                        <a href="/lagouwang/Home/Public/login" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a></li>
                    <li>
                        <a href="/lagouwang/Home/Public/register" class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a></li>
                </ul>
            </div>
        </div><?php endif; ?>
    <!--C端头部白色导航-->
    <div id="lg_tnav">
        <div class="inner">
            <div class="lg_tnav_l">
                <a href="//www.lagou.com/" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    <h1>拉勾网</h1></a>
                <div class="suggestCity">
                    <strong>全国站</strong>
                    </div>
            </div>
            <ul class="lg_tnav_wrap">
                <li>
                    <a href="/lagouwang/Home/Index/index" class="current" data-lg-tj-id="5i00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a></li>
                <li>
                    <a href="/lagouwang/Home/Company/lists" data-lg-tj-id="5j00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_company">公司</a></li>
            </ul>
        </div>
    </div>
</div>
<!--end #lg_tnav-->
<!--end #header-->
        
	<script src="/lagouwang/Public/js1/jquery.min.js"></script>
        <!--end #header-->
        <input type="hidden" id="serverTime" value="1488253525578" />
        <!-- 页面主体START -->
        <div class="container clearfix" id="container">
            <div id="sidebar" class="sidebar" data-lg-tj-track-code="index_navigation"
            data-lg-tj-track-type="1">
                <div class="mainNavs">
                    <div class="menu_box" id="js">
                        <div class="menu_main job_hopping">
                            <h2>
                                技术
                                <!-- 跳槽月 -->
                                <span>
                                </span>
                            </h2>
							<?php if(is_array($js_info)): foreach($js_info as $key=>$vo): ?><a href="/lagouwang/Home/List/index/tag_name/<?php echo ($vo["name"]); ?>" data-lg-tj-id="4A00" data-lg-tj-no="0001"
                            data-lg-tj-cid="idnull">
                                <?php echo ($vo["name"]); ?>
                            </a><?php endforeach; endif; ?>
                        </div>
                        <div class="menu_sub dn" id="js_detail">
						<?php if(is_array($js_s)): foreach($js_s as $key=>$vo): ?><dl>
                                <dt>
                                    <a href="/lagouwang/Home/List/index" data-lg-tj-id="4H00" data-lg-tj-no="0001"
                                    data-lg-tj-cid="idnull">
                                        <?php echo ($vo["name"]); ?>
                                    </a>
                                </dt>
                                <dd>
								<?php if(is_array($vo["hd"])): foreach($vo["hd"] as $key=>$v): ?><a style='display:block;float:left;' href="/lagouwang/Home/List/index" data-lg-tj-id="4O00" data-lg-tj-no="0101"
                                    data-lg-tj-cid="idnull">
                                        <?php echo ($v["name"]); ?>
                                    </a><?php endforeach; endif; ?>
                                </dd>
                            </dl><?php endforeach; endif; ?>
							
                        </div>
                    </div>
					<script type="text/javascript">
						
							$("#js").mouseover(function(){
								//$("#js_detail").css("display","block");
								$("#js").toggleClass("menu_box");
								$("#js").addClass("menu_box current");
								$("#js_detail").toggleClass("menu_sub dn");
								$("#js_detail").addClass("menu_sub");
						
							});
							
							$("#js").mouseout(function(){
								//$("#js_detail").css("display","none");
								$("#js").toggleClass("menu_box current");
								$("#js").addClass("menu_box");
								$("#js_detail").toggleClass("menu_sub");
								$("#js_detail").addClass("menu_sub dn");
							});
						
					</script>
                    <div class="menu_box" id="cp">
                        <div class="menu_main job_hopping">
                            <h2>
                                产品
                                <!-- 跳槽月 -->
                                <span>
                                </span>
                            </h2>
							<?php if(is_array($cp_info)): foreach($cp_info as $key=>$vo): ?><a href="#" data-lg-tj-id="4B00"
                            data-lg-tj-no="0001" data-lg-tj-cid="idnull">
                                <?php echo ($vo["name"]); ?>
                            </a><?php endforeach; endif; ?>
                        </div>
						
						
                        <div class="menu_sub dn" id="cp_detail" style="position:absolute;top:130px;">
                            <?php if(is_array($cp_s)): foreach($cp_s as $key=>$vo): ?><dl>
                                <dt>
                                    <a href="#" data-lg-tj-id="4I00"
                                    data-lg-tj-no="0001" data-lg-tj-cid="idnull">
                                        <?php echo ($vo["name"]); ?>
                                    </a>
                                </dt>
                                <dd>
								<?php if(is_array($vo["cp"])): foreach($vo["cp"] as $key=>$v): ?><a style='display:block;float:left;' href="#" data-lg-tj-id="4P00"
                                    data-lg-tj-no="0101" data-lg-tj-cid="idnull">
                                        <?php echo ($v["name"]); ?>
                                    </a><?php endforeach; endif; ?>   
                                </dd>
                            </dl><?php endforeach; endif; ?>
                            
                        </div>
                    </div>
					
					<script type="text/javascript">
						
							$("#cp").mouseover(function(){
								//$("#cp_detail").css("display","block");
								$("#cp").toggleClass("menu_box");
								$("#cp").addClass("menu_box current");
								$("#cp_detail").toggleClass("menu_sub dn");
								$("#cp_detail").addClass("menu_sub");
						
							});
							
							$("#cp").mouseout(function(){
								//$("#cp_detail").css("display","none");
								$("#cp").toggleClass("menu_box current");
								$("#cp").addClass("menu_box");
								$("#cp_detail").toggleClass("menu_sub");
								$("#cp_detail").addClass("menu_sub dn");
							});
						
					</script>
					
                    <div class="menu_box" id="sj">
                        <div class="menu_main job_hopping">
                            <h2>
                                设计
                                <!-- <i class="design">拉勾形象征集</i> -->
                                <!-- 跳槽月 -->
                                <span>
                                </span>
                            </h2>
							<?php if(is_array($sj_info)): foreach($sj_info as $key=>$vo): ?><a href="//www.lagou.com/zhaopin/UIshejishi/" data-lg-tj-id="4C00" data-lg-tj-no="0001"
                            data-lg-tj-cid="idnull">
                                <?php echo ($vo["name"]); ?>
                            </a><?php endforeach; endif; ?>
                        </div>
                        <div class="menu_sub dn" id="sj_detail" style="position:absolute;top:200px;">
                            <?php if(is_array($sj_s)): foreach($sj_s as $key=>$vo): ?><dl>
                                <dt>
                                    <a href="#" data-lg-tj-id="4J00" data-lg-tj-no="0001"
                                    data-lg-tj-cid="idnull">
                                        <?php echo ($vo["name"]); ?>
                                    </a>
                                </dt>
                                <dd>
								<?php if(is_array($vo["sj"])): foreach($vo["sj"] as $key=>$v): ?><a style='display:block;float:left;' href="#" data-lg-tj-id="4Q00"
                                    data-lg-tj-no="0101" data-lg-tj-cid="idnull" >
                                        <?php echo ($v["name"]); ?>
                                    </a><?php endforeach; endif; ?> 
                                </dd>
                            </dl><?php endforeach; endif; ?>
                       
                        </div>
                    </div>
					
					<script type="text/javascript">
						
							$("#sj").mouseover(function(){
								//$("#cp_detail").css("display","block");
								$("#sj").toggleClass("menu_box");
								$("#sj").addClass("menu_box current");
								$("#sj_detail").toggleClass("menu_sub dn");
								$("#sj_detail").addClass("menu_sub");
						
							});
							
							$("#sj").mouseout(function(){
								//$("#cp_detail").css("display","none");
								$("#sj").toggleClass("menu_box current");
								$("#sj").addClass("menu_box");
								$("#sj_detail").toggleClass("menu_sub");
								$("#sj_detail").addClass("menu_sub dn");
							});
						
					</script>
					
                    <div class="menu_box" id="yy">
                        <div class="menu_main job_hopping">
                            <h2>
                                运营
                                <!-- 跳槽月 -->
                                <span>
                                </span>
                            </h2>
							<?php if(is_array($yy_info)): foreach($yy_info as $key=>$vo): ?><a href="#" data-lg-tj-id="4D00"
                            data-lg-tj-no="0001" data-lg-tj-cid="idnull">
                                <?php echo ($vo["name"]); ?>
                            </a><?php endforeach; endif; ?>
                        </div>
                        <div class="menu_sub dn" id="yy_detail" style="position:absolute;top:330px;">
                            <?php if(is_array($yy_s)): foreach($yy_s as $key=>$vo): ?><dl>
                                <dt>
                                    <a href="#" data-lg-tj-id="4K00" data-lg-tj-no="0001"
                                    data-lg-tj-cid="idnull">
                                       <?php echo ($vo["name"]); ?>
                                    </a>
                                </dt>
                                <dd>
								<?php if(is_array($vo["yy"])): foreach($vo["yy"] as $key=>$v): ?><a style='display:block;float:left;' href="#" data-lg-tj-id="4R00"
                                    data-lg-tj-no="0101" data-lg-tj-cid="idnull" >
                                        <?php echo ($v["name"]); ?>
                                    </a><?php endforeach; endif; ?>  
                                </dd>
                            </dl><?php endforeach; endif; ?>
                            
                        </div>
                    </div>
					
					<script type="text/javascript">
						
							$("#yy").mouseover(function(){
								//$("#cp_detail").css("display","block");
								$("#yy").toggleClass("menu_box");
								$("#yy").addClass("menu_box current");
								$("#yy_detail").toggleClass("menu_sub dn");
								$("#yy_detail").addClass("menu_sub");
						
							});
							
							$("#yy").mouseout(function(){
								//$("#cp_detail").css("display","none");
								$("#yy").toggleClass("menu_box current");
								$("#yy").addClass("menu_box");
								$("#yy_detail").toggleClass("menu_sub");
								$("#yy_detail").addClass("menu_sub dn");
							});
						
					</script>
					
                    <div class="menu_box" id="sc">
                        <div class="menu_main job_hopping">
                            <h2>
                                市场与销售
                                <!-- 跳槽月 -->
                                <span>
                                </span>
                            </h2>
							<?php if(is_array($sc_info)): foreach($sc_info as $key=>$vo): ?><a href="#" data-lg-tj-id="4E00"
                            data-lg-tj-no="0001" data-lg-tj-cid="idnull">
                                <?php echo ($vo["name"]); ?>
                            </a><?php endforeach; endif; ?>
                        </div>
                        <div class="menu_sub dn" id="sc_detail" style="position:absolute;top:330px;">
                            <?php if(is_array($sc_s)): foreach($sc_s as $key=>$vo): ?><dl>
                                <dt>
                                    <a href="#" data-lg-tj-id="4L00"
                                    data-lg-tj-no="0001" data-lg-tj-cid="idnull">
                                        <?php echo ($vo["name"]); ?>
                                    </a>
                                </dt>
                                <dd>
								<?php if(is_array($vo["sc"])): foreach($vo["sc"] as $key=>$v): ?><a style='display:block;float:left;' href="#" data-lg-tj-id="4S00"
                                    data-lg-tj-no="0101" data-lg-tj-cid="idnull" >
                                        <?php echo ($v["name"]); ?>
                                    </a><?php endforeach; endif; ?>  
                                </dd>
                            </dl><?php endforeach; endif; ?>
                            
                        </div>
                    </div>
					<script type="text/javascript">
						
							$("#sc").mouseover(function(){
								//$("#cp_detail").css("display","block");
								$("#sc").toggleClass("menu_box");
								$("#sc").addClass("menu_box current");
								$("#sc_detail").toggleClass("menu_sub dn");
								$("#sc_detail").addClass("menu_sub");
						
							});
							
							$("#sc").mouseout(function(){
								//$("#cp_detail").css("display","none");
								$("#sc").toggleClass("menu_box current");
								$("#sc").addClass("menu_box");
								$("#sc_detail").toggleClass("menu_sub");
								$("#sc_detail").addClass("menu_sub dn");
							});
						
					</script>
					
                    <div class="menu_box" id="zn">
                        <div class="menu_main job_hopping">
                            <h2>
                                职能
                                <!-- 跳槽月 -->
                                <span>
                                </span>
                            </h2>
							<?php if(is_array($zn_info)): foreach($zn_info as $key=>$vo): ?><a href="#" data-lg-tj-id="4F00" data-lg-tj-no="0001"
                            data-lg-tj-cid="idnull">
                                <?php echo ($vo["name"]); ?>
                            </a><?php endforeach; endif; ?>
                        </div>
                        <div class="menu_sub dn" id="zn_detail" style="position:absolute;top:550px;">
                            <?php if(is_array($zn_s)): foreach($zn_s as $key=>$vo): ?><dl>
                                <dt>
                                    <a href="#" data-lg-tj-id="4M00" data-lg-tj-no="0001"
                                    data-lg-tj-cid="idnull">
                                        <?php echo ($vo["name"]); ?>
                                    </a>
                                </dt>
                                <dd>
								<?php if(is_array($vo["zn"])): foreach($vo["zn"] as $key=>$v): ?><a style='display:block;float:left;' href="#" data-lg-tj-id="4T00" data-lg-tj-no="0101"
                                    data-lg-tj-cid="idnull">
                                        <?php echo ($v["name"]); ?>
                                    </a><?php endforeach; endif; ?>   
                                </dd>
                            </dl><?php endforeach; endif; ?>
                            
                        </div>
                    </div>
					<script type="text/javascript">
						
							$("#zn").mouseover(function(){
								//$("#cp_detail").css("display","block");
								$("#zn").toggleClass("menu_box");
								$("#zn").addClass("menu_box current");
								$("#zn_detail").toggleClass("menu_sub dn");
								$("#zn_detail").addClass("menu_sub");
						
							});
							
							$("#zn").mouseout(function(){
								//$("#cp_detail").css("display","none");
								$("#zn").toggleClass("menu_box current");
								$("#zn").addClass("menu_box");
								$("#zn_detail").toggleClass("menu_sub");
								$("#zn_detail").addClass("menu_sub dn");
							});
						
					</script>
					
                    <div class="menu_box" id="jr">
                        <div class="menu_main job_hopping">
                            <h2>
                                金融
                                <i class="fina">
                                </i>
                                <!-- 跳槽月 -->
                                <span>
                                </span>
                            </h2>
							<?php if(is_array($jr_info)): foreach($jr_info as $key=>$vo): ?><a href="#" data-lg-tj-id="4G00" data-lg-tj-no="0001"
                            data-lg-tj-cid="idnull">
                                <?php echo ($vo["name"]); ?>
                            </a><?php endforeach; endif; ?>
                        </div>
                        <div class="menu_sub dn" id="jr_detail" style="position:absolute;top:680px;">
                            <?php if(is_array($jr_s)): foreach($jr_s as $key=>$vo): ?><dl>
                                <dt>
                                    <a href="#" data-lg-tj-id="4N00" data-lg-tj-no="0001"
                                    data-lg-tj-cid="idnull">
                                        <?php echo ($vo["name"]); ?>
                                    </a>
                                </dt>
                                <dd>
								<?php if(is_array($vo["jr"])): foreach($vo["jr"] as $key=>$v): ?><a style='display:block;float:left;' href="#" data-lg-tj-id="4U00"
                                    data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="">
                                        <?php echo ($v["name"]); ?>
                                    </a><?php endforeach; endif; ?>    
                                </dd>
                            </dl><?php endforeach; endif; ?>
                            
                        </div>
                    </div>
					<script type="text/javascript">
						
							$("#jr").mouseover(function(){
								//$("#cp_detail").css("display","block");
								$("#jr").toggleClass("menu_box");
								$("#jr").addClass("menu_box current");
								$("#jr_detail").toggleClass("menu_sub dn");
								$("#jr_detail").addClass("menu_sub");
						
							});
							
							$("#jr").mouseout(function(){
								//$("#cp_detail").css("display","none");
								$("#jr").toggleClass("menu_box current");
								$("#jr").addClass("menu_box");
								$("#jr_detail").toggleClass("menu_sub");
								$("#jr_detail").addClass("menu_sub dn");
							});
						
					</script>
					
                </div>
                <!-- <a class="subscribe" href="//www.lagou.com/s/subscribe.html" target="_blank">订阅职位</a> -->
                <div class="subscribe">
                    <a href="//www.lagou.com/s/subscribe.html" target="_blank" rel="nofollow"
                    data-lg-tj-id="4g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                        <span>
                            订阅职位
                        </span>
                        <i id="n_rss" href="//www.lagou.com/s/subscribe.html" target="_blank"
                        rel="nofollow">
                            &nbsp;
                        </i>
                    </a>
                </div>
                <!-- <div class="suggestCity"><strong>全国站</strong><span id="changeCity_btn">[切换城市]</span></div> -->
            </div>
            <div class="content">
                <div id="search_box" class="search_box" data-lg-tj-track-code="index_search"
                data-lg-tj-track-type="1">
                    <form id="searchForm" class="searchForm" name="searchForm" action="/lagouwang/Home/Index/index" method="get">
                        <input type="text" id="search_input" name="job" style="height:22px;" class="search_input" tabindex="1"
                        maxlength="64" autocomplete="off" value="" placeholder="搜索职位" />
                        
                        <input type="submit" id="search_button" style="position:relative;top:-38px;" class="search_button" value="搜索"
                        data-lg-tj-id="4V00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" />
                    </form>
                    <input type="hidden" id="search_py" value="" />
                    <input type="hidden" id="isIndex" value="true" />
                </div>
                <div class="guess_wrapper dn">
                    <span>
                        猜你要搜
                    </span>
                    <ul>
                    </ul>
                </div>
                <dl class="hotSearch" data-lg-tj-track-code="index_hotsearch" data-lg-tj-track-type="1">
                </dl>
                <div id="home_banner" class="home_banner" data-lg-tj-track-code="index_bannerad"
                data-lg-tj-track-type="1">
                    <ul class="banner_bg">
                        <li class="banner_bg_1 current">
                            <a class="tj_exposure" rel="nofollow" href="#"
                            target="_blank" data-lg-tj-id="4k00" data-lg-tj-no="0001" data-lg-tj-cid="3198">
                                <img id="mid" src="/lagouwang/Public/picture/cgp3o1idt5kam5zsaahcv4ia9rc123.png" width="612" height="160"
                                alt="全民升职季正式" />
                            </a>
                        </li>
                        <!-- <li class="banner_bg_2"> -->
                            <!-- <a class="tj_exposure" rel="nofollow" href="#" -->
                            <!-- target="_blank" data-lg-tj-id="4k00" data-lg-tj-no="0002" data-lg-tj-cid="3233"> -->
                                <!-- <img src="/lagouwang/Public/picture/cgqkkviwfoeafi-faaop1z295y8754.jpg" width="612" height="160" -->
                                <!-- alt="五星电器" /> -->
                            <!-- </a> -->
                        <!-- </li> -->
                        <!-- <li class="banner_bg_3"> -->
                            <!-- <a class="tj_exposure" rel="nofollow" href="#" -->
                            <!-- target="_blank" data-lg-tj-id="4k00" data-lg-tj-no="0003" data-lg-tj-cid="3220"> -->
                                <!-- <img src="/lagouwang/Public/picture/cgqkkvi0a0saimu6aagkjqtm72o527.jpg" width="612" height="160" -->
                                <!-- alt="创新互联网科技公司" /> -->
                            <!-- </a> -->
                        <!-- </li> -->
                    </ul>
                    <div class="banner_control">
                        
                        <ul class="thumbs" id="list">
                            <li class="thumbs_2 current">
                                <i>
                                </i>
                                <img id="mid1" style="border:2px solid gray;" src="/lagouwang/Public/picture/cgp3o1idt5kam5zsaahcv4ia9rc123.png" width="113" height="42"
                                />
                            </li>
                            <li class="thumbs_2">
                                <i>
                                </i>
                                <img id="mid2" style="border:2px solid gray;" src="/lagouwang/Public/picture/cgqkkviwfoeafi-faaop1z295y8754.jpg" width="113" height="42"
                                />
                            </li>
                            <li class="thumbs_2">
                                <i>
                                </i>
                                <img id="mid3" style="border:2px solid gray;" src="/lagouwang/Public/picture/cgqkkvi0a0saimu6aagkjqtm72o527.jpg" width="113" height="42"
                                />
                            </li>
                        </ul>
						
                    </div>
					<script type="text/javascript">
					
						//获取标签节点
						var mid = document.getElementById("mid");
						var list = document.getElementById("list").getElementsByTagName("img");
						//遍历
						for(var i=0;i<list.length;i++){
						   list[i].onmouseover = function(){
								mid.src = this.src;
							   }
						   }
						
						</script>
                </div>
	           
                <ul class="job_tab" id="jobTab">
                    <li class="current hotTab" data-lg-tj-id="4X00" data-lg-tj-no="idnull"
                    data-lg-tj-cid="idnull">
                        热门职位
                    </li>
                    <li class="newTab" data-lg-tj-id="gD00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                        最新职位
                    </li>
                </ul>
                <div class="job_list clearfix" id="jobList">
                    <div class="hot_posHotPosition position_list init_joblist" data-lg-tj-track-code="index_hotjob"
                    data-lg-tj-track-type="1">
                        <ul class="clearfix">
						<?php if(is_array($position_info)): foreach($position_info as $key=>$vo): ?><li class="position_list_item default_list" data-jobId="2168236" data-positionid="2168236"
                            data-salary="10k-20k" data-company="广东亿迅" data-positionname="JAVA" data-companyid="62627">
                                <div class="pli_top">
                                    <div class="fl pli_top_l">
                                        <div class="position_name">
                                            <h2 class="fl">
                                                <a href="/lagouwang/Home/PersonCenter/position_detail/uid/<?php echo ($vo["id"]); ?>" target="_blank" class="position_link fl wordCut"
                                                data-index="0" data-lg-tj-id="rx00" data-lg-tj-no="0001" data-lg-tj-cid="2168236">
                                                    <?php echo ($vo["name"]); ?>
                                                    <span>
                                                        [<?php echo ($vo["city"]); ?>]
                                                    </span>
                                                </a>
                                            </h2>
                                            <!-- 此处需要和后台确认 -->
                                            <span class="fl">
                                                <?php echo (date("Y-m-d",$vo["addtime"])); ?>
                                            </span>
                                            <input type="hidden" class='hr_portrait' value='i/image/M00/99/A2/Cgp3O1ihD0KAULlHAAAXVeZ02xA831.jpg'>
                                            <input type="hidden" class='hr_name' value='尚小姐'>
                                            <input type="hidden" class='hr_position' value='招聘主管'>
                                            <input type="hidden" class='erma_codeu' value='1781090'>
                                            <input type="hidden" class='erma_codep' value='2168236'>
                                            <div class="chat_me" data-lg-tj-id="1WD0" data-lg-tj-no="0001" data-lg-tj-cid="2168236"
                                            data-lg-tj-track-code="index_code" data-lg-tj-track-type="1">
                                            </div>
                                        </div>
                                        <div class="position_main_info">
                                            <span class="salary fl">
                                                <?php echo ($vo["left"]); ?>K-<?php echo ($vo["right"]); ?>K
                                            </span>
                                            <span>
                                                <!-- <i class="experience"></i>&nbsp;  -->
												<?php echo ($vo["fexpe"]); ?>
                                            </span>
                                            /
                                            <span>
                                                <?php echo ($vo["fdegree"]); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="fr pli_top_r">
                                        <div class="company_name wordCut">
                                            <a href="#" target="_blank" data-lg-tj-id="vz00"
                                            data-lg-tj-no="0001" data-lg-tj-cid="62627">
                                               <?php echo ($vo["comname"]); ?>
                                            </a>
                                        </div>
                                        <div class="industry wordCut">
											
                                        </div>
										<div class="industry wordCut" style="position:absolute;bottom:0px;">
                                           
                                            <?php echo ($vo["advantage"]); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="pli_btm">
                                    <div class="pli_btm_l fl">
                                        <span class="wordCut" style="position:absolute;bottom:0px;">
                                            <?php echo ($vo["name"]); ?>
                                        </span>
                                        
                                    </div>
                                    <div class="pli_btm_r fl wordCut">
                                        <?php echo ($vo["introduce"]); ?>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; ?>    
                        </ul>
                        <a href="#" class="list_more fr" target="_blank"
                        data-lg-tj-id="4s00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_checkmore"
                        data-lg-tj-track-type="1">
                            查看更多
                        </a>
                    </div>
                </div>
                <div id="linkbox" class="linkbox show-linkbox">
                    <dl>
                        <dt>
                            友情链接
                        </dt>
                        <dd>
                            <a href="http://www.lagou.com/" target="_blank">
                                拉勾网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://pro.lagou.com" target="_blank">
                                大鲲
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.lagou.com" target="_blank">
                                招聘
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.liqucn.com/" target="_blank">
                                app下载
                            </a>
                            <a href="http://www.wangxiao.cn" target="_blank">
                                中大网校
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.woshipm.com/" target="_blank">
                                人人都是产品经理
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.job910.com/" target="_blank">
                                教师招聘
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.xjhr.com/" target="_blank">
                                新疆人才网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.chinairn.com/" target="_blank">
                                研究报告
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.yixieshi.com/" target="_blank">
                                互联网的一些事
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.cnrencai.com/" target="_blank">
                                人才招聘网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.lagou.com/" target="_blank">
                                找工作
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://tool.liuxue86.com/" target="_blank">
                                字典
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://kaoshi.yjbys.com/" target="_blank">
                                中国考试网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://baike.1688.com/" target="_blank">
                                生意经商业百科
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://dzh.mop.com/" target="_blank">
                                猫扑大杂烩
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://tuku.jia.com" target="_blank">
                                装修效果图
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.lagou.com/" target="_blank">
                                招聘网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.examw.com/" target="_blank">
                                中华考试网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.58pic.com/tupian/zhaopinsucai.html" target="_blank">
                                招聘素材
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.lagou.com/hangzhou/" target="_blank">
                                杭州招聘
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.lagou.com/shanghai/" target="_blank">
                                上海招聘
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://china.findlaw.cn/" target="_blank">
                                法律咨询
                            </a>
                            <a href="http://www.24en.com" target="_blank">
                                爱思英语网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.xuzhoujob.com/" target="_blank">
                                徐州英才网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.thinkphp.cn/" target="_blank">
                                thinkphp
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.kuakao.com/" target="_blank">
                                考研网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.yinhangzhaopin.com/" target="_blank">
                                银行招聘网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.yuwenmi.com/" target="_blank">
                                语文学习网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://jobs.zhaopin.com/" target="_blank">
                                智联招聘
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.job592.com/" target="_blank">
                                职业圈
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://finance.gucheng.com/" target="_blank">
                                股城财经
                            </a>
                            <a href="http://www.64365.com" target="_blank">
                                法律咨询网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.jianzhi8.com/" target="_blank">
                                兼职吧
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.pincai.com/" target="_blank">
                                招聘网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://ishare.iask.sina.com.cn/" target="_blank">
                                爱问共享资料
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.xbaixing.com/" target="_blank">
                                百姓网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.liepin.com/" target="_blank">
                                招聘
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.kuaiji.com/" target="_blank">
                                会计网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://jianli.zhaopin.com/" target="_blank">
                                简历模版
                            </a>
                            <a href="http://www.cfw.cn/" target="_blank">
                                服装人才网
                            </a>
                            <a href="http://www.zbj.com/" target="_blank">
                                创意服务外包
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.xilu.com" target="_blank">
                                西陆军事
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.eoffcn.com" target="_blank">
                                中公公务员网校
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.laoren.com" target="_blank">
                                老人网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.cjol.com/" target="_blank">
                                找工作
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.job5156.com/" target="_blank">
                                招聘网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.qianzhan.com" target="_blank">
                                前瞻网
                            </a>
                            <a href="http://www.goodjobs.cn" target="_blank">
                                安徽招聘网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.tzrl.com" target="_blank">
                                台州人才网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.job256.com" target="_blank">
                                苏州人才网&nbsp;
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.zgjsks.com" target="_blank">
                                教师网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.huibo.com" target="_blank">
                                重庆人才网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.canet.com.cn/" target="_blank">
                                中国会计网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.qlrc.com/" target="_blank">
                                齐鲁人才网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.youbian.com/" target="_blank">
                                邮编生活网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.91job.com" target="_blank">
                                义乌人才网
                            </a>
                            <span>
                                |
                            </span>
                            <a href="http://www.php100.com/" target="_blank">
                                PHP100中文网
                            </a>
                            <a href="http://www.pxto.com.cn" target="_blank">
                                培训网
                            </a>
                            <a href="//www.lagou.com/af/flink.html" target="_blank" class="more" rel="nofollow">
                                更多
                            </a>
                        </dd>
                    </dl>
                    <a rel="nofollow" href="javascript:;" class="expansion">
                        展开
                        <i>
                        </i>
                    </a>
                </div>
                <!-- <link rel="import" href="../../modules/chat-pop/main.html?__inline"> -->
            </div>
        </div>
        <!-- 页面主体END -->
        <!-- footer <-->
        
		

        <!-- 页面主体END -->
        <!-- footer <-->
        <a id="backtop" title="回到顶部"  href="#" rel="nofollow" style="display: inline; bottom: 140px; background-position-x: 0px;"></a>
        <div id="product-fk" style="bottom: 80px;">
        </div>
		
        <div id="footer">
		
            <div class="wrapper">
                <div class="inner_wrapper">
					<a href="#" target="_blank"
                    rel="nofollow">
                        版本更新
                    </a>
                    <a href="#" target="_blank" rel="nofollow">
                        帮助中心
                    </a>
                    <a href="#" target="_blank" rel="nofollow">
                        联系我们
                    </a>
                    <a href="#"target="_blank" rel="nofollow">
                        招聘解决方案
                    </a>
					<a href="#" target="_blank"
                    rel="nofollow">
                        版本更新
                    </a>
                    <a href="#" target="_blank" rel="nofollow">
                        帮助中心
                    </a>
                    <a href="#" target="_blank" rel="nofollow">
                        联系我们
                    </a>
                    <a href="#"target="_blank" rel="nofollow">
                        招聘解决方案
                    </a>
                    <a href="#" target="_blank"
                    rel="nofollow">
                        进行留言
                    </a>
                    <a href="#" target="_blank" rel="nofollow">
                        咨询指导
                    </a>
                    <a href="#" target="_blank" rel="nofollow">
                        联系电话：0351-2646360
                    </a>
                    
                </div>
                <div class="copyright  has_logo">
                        2017 Lagou
                    </span>
                    <a target="_blank" href="#"
                    rel="nofollow">
                        京ICP备14023790号-2
                    </a>
                    <span>
                        京公网安备11010802017116号
                    </span>
                </div>
            </div>
			
        </div>

</body>


</html>