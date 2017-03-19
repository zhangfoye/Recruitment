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
                    <a rel="nofollow" href="/lagouwang/Home/Comindex/index" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_qiyeban">进入企业版</a></div>
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
        
       
        <script type="text/javascript" async="" src="/lagouwang/Public/style/js/conversion.js">
        </script>
        <script src="/lagouwang/Public/style/js/allmobilize.min.js" charset="utf-8" id="allmobilize">
        </script>
        <style type="text/css">
        </style>
        <meta content="no-siteapp" http-equiv="Cache-Control">
        <link media="handheld" rel="alternate">
        <!-- end 云适配 -->
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>
            我收藏的职位-招聘服务-拉勾网-最专业的互联网招聘平台
        </title>
        <meta content="23635710066417756375" property="qc:admins">
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <meta content="QIQ6KC1oZ6" name="baidu-site-verification">
        <!-- <div class="web_root" style="display:none">h</div> -->
        <script type="text/javascript">
            var ctx = "h";
            console.log(1);
        </script>
        <link href="/lagouwang/Public/images/favicon.ico" rel="Shortcut Icon">
        <link href="/lagouwang/Public/style/css/style.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/style/css/external.min.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/style/css/popup.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/lagouwang/Public/style/js/jquery.1.10.1.min.js">
        </script>
        <script src="/lagouwang/Public/style/js/jquery.lib.min.js" type="text/javascript">
        </script>
        <script type="text/javascript" src="/lagouwang/Public/style/js/ajaxfileupload.js">
        </script>
        <script src="/lagouwang/Public/style/js/additional-methods.js" type="text/javascript">
        </script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="style/js/excanvas.js">
            </script>
        <![endif]-->
        <script type="text/javascript">
            var youdao_conv_id = 271546;
        </script>
        <script src="/lagouwang/Public/style/js/conv.js" type="text/javascript">
        </script>
        <script src="/lagouwang/Public/style/js/ajaxCross.json" charset="UTF-8">
        </script>
   
        
            <div id="header">
                <div class="wrapper">
                    
                    <dl class="collapsible_menu">
						
                        <dd>
                            <a rel="nofollow" href="jianli.html">
                                我的简历
                            </a>
                        </dd>
                        <dd>
                            <a href="collections.html">
                                我收藏的职位
                            </a>
                        </dd>
                        <dd class="btm">
                            <a href="subscribe.html">
                                我的订阅
                            </a>
                        </dd>
                        <dd>
                            <a href="create.html">
                                我要招人
                            </a>
                        </dd>
                        <dd>
                            <a href="accountBind.html">
                                帐号设置
                            </a>
                        </dd>
                        <dd class="logout">
                            <a rel="nofollow" href="login.html">
                                退出
                            </a>
                        </dd>
                    </dl>
                    <div class="dn" id="noticeTip">
                        <span class="bot">
                        </span>
                        <span class="top">
                        </span>
                        <a target="_blank" href="delivery.html">
                            <strong>
                                0
                            </strong>
                            条新投递反馈
                        </a>
                        <a class="closeNT" href="javascript:;">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end #header -->
            <div id="container">
                <div class="clearfix" style="width:700px;">
                    <div class="content_l">
                        <dl class="c_collections">
                            <dt>
                                <h1>
                                    <em>
                                    </em>
                                    我收藏的职位
                                </h1>
                            </dt>
                            <dd>
                                <form id="collectionsForm">
                                    <ul class="reset my_collections">
									<?php if(is_array($position_collect)): foreach($position_collect as $key=>$list): ?><li data-id="133340">
                                            <a title="" target="_blank" href="#">
                                                <img alt="" src="/lagouwang/Public/style/images/<?php echo ($list["logo"]); ?>">
                                            </a>
                                            <div class="co_item">
                                                <h2 title="酒店业务助理">
                                                    <a target="_blank" href="#">
                                                        <em>
                                                            <?php echo ($list["name"]); ?>
                                                        </em>
                                                        <span>
                                                            <?php echo (substr($list["wages"],0,1)); ?>k-<?php echo (substr($list["wages"],2,3)); ?>k
                                                        </span>
                                                    </a>
                                                </h2>
                                                <span class="co_time">
                                                    发布时间：<?php echo (date("Y-m-d H:i",$list["addtime"])); ?>
                                                </span>
                                                <div class="co_cate">
                                                    <?php echo ($list["com_name"]); ?> / <?php echo ($list["city"]); ?> / <?php echo ($list["expe"]); ?> / <?php echo ($list["degree"]); ?>
                                                </div>
                                                <span class="co_youhuo c7">
                                                    <?php echo ($list["advantage"]); ?>
                                                </span>
                                                <a class="collection_link" target="_blank" href="#">
                                                    投个简历
                                                </a>
                                                <i>
                                                </i>
                                                <a class="collectionCancel collection_link collected" id="qx_collect" onclick="qx_collect(<?php echo ($list["id"]); ?>)">
                                                    取消收藏
                                                    <span>
                                                        已取消收藏
                                                    </span>
                                                </a>
                                            </div>
                                        </li><?php endforeach; endif; ?>
                                    </ul>
                                </form>
                            </dd>
                        </dl>
                    </div>
                    
                </div>
				
				<div class="content_r" style="float:right;width:250px;">
                        <div class="mycenterR" id="myInfo">
                            <h2>
                                我的信息
                            </h2>
                            <a href="collections.html">
                                我收藏的职位
                            </a>
                            <br>
                            <a target="_blank" href="subscribe.html">
                                我订阅的职位
                            </a>
                        </div>
                        <!--end #myInfo-->
                        <div class="greybg qrcode mt20">
                            <img width="242" height="242" alt="拉勾微信公众号二维码" src="/lagouwang/Public/style/images/qr_delivery.png">
                            <span class="c7">
                                扫描拉勾二维码，微信轻松搜工作
                            </span>
                        </div>
                </div>
			</div>	
			

                <script src="/lagouwang/Public/style/js/collections.min.js">
                </script>
                <script>
				
					function qx_collect(id)
					{
					$.ajax({
						type:"POST",
						url:"/lagouwang/Home/PersonCenter/qx_collect",
						data:"id="+id,
						dataType:"json",
						success:function(res){
						if(res.info=='Y'){	
							window.location.href="/lagouwang/Home/PersonCenter/collection";
							//$("#qx_collect").css("display","none");
						}
					}
				});
			}
			
            </script>
                
           
            <!-- end #container -->
        
        <!-- end #body -->
        
        <script src="/lagouwang/Public/style/js/core.min.js" type="text/javascript">
        </script>
        <script src="/lagouwang/Public/style/js/popup.min.js" type="text/javascript">
        </script>
        <!-- -->
        <script type="text/javascript">
           
        </script>
 
		

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