<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        <!-- meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="renderer" content="webkit">
        <meta property="qc:admins" content="23635710066417756375" />
        <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />
        <meta charset="UTF-8">
        <meta content="PHP高级开发工程师-北京-00044,PHP高级开发工程师-北京-00044招聘,北京多格科技有限公司PHP高级开发工程师-北京-00044招聘" name="keywords">
        <meta content="PHP高级开发工程师-北京-00044 北京 本科 3-5年 全职 后端开发 互联网薪资,十点半上班,公司旅游,超长假期 懂球帝 北京多格科技有限公司 体育移动社区 拉勾网-最专业的互联网招聘平台" name="description">
        <title>PHP高级开发工程师-北京-0...招聘-懂球帝招聘-拉勾网</title>
        <link rel="Shortcut Icon" href="//www.lgstatic.com/www/static/common/static/favicon_faed927.ico">
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/mcustomscrollbar_ac2fb8b.css" />
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/layout_19d0413.css" />
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_f4bbb2e.css" />
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/widgets_ea16201.css" />
        <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_2_0644f78.css" />
        <script type="text/javascript" src="/lagouwang/Public/js1/jquery-1.8.2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/lagouwang/Public/css1/bootstrap.min.css">
         <!-- 地图 -->
        <link rel="stylesheet" href="/lagouwang/Public/css/main1119.css"/>
        <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=8246bcc06dd36922b8c12e21dea5e1c7"></script>
        <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
        <style type="text/css">
            #mapcontainer{
            width: 560px;
            height: 300px;
            /*border: 5px solid #D1D3D3;*/
            }
            #bt1,#clearMarker{
                width: 100px;
                height: 30px;
                line-height: 30px;
                background-color: #6CB9F2;
                font-size: 16px;
                color: #fff;
                float:left;
                margin-right:20px; 
                margin-bottom: 20px;
            }
        </style>
         </head>
    <body>
         <div id="lg_header">
    <?php if($_SESSION['user']!= null): ?><!--C端头部黑色导航-->
        <div id="lg_tbar">
            <div class="inner">
                <div class="lg_tbar_l">
                    <a rel="nofollow" href="/lagouwang/Home/Public/com_login" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_qiyeban">进入企业版</a></div>
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
                    <a rel="nofollow" href="/lagouwang/Home/Public/com_login" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_qiyeban">进入企业版</a></div>
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
       <!-- 页面主体START -->
        <div class="position-head" data-companyid="61249">
            <div class="position-content ">
                <div class="position-content-l">
                    <div class="job-name" title="PHP开发工程师">
                        <div class="company"><?php echo ($cominfo["com_name"]); ?>*<?php echo ($position_detail["depart"]); ?>招聘</div>
                        <span class="name"><?php echo ($position_detail["name"]); ?></span>
                        <div class="marEdit"></div>
                    </div>
                    <dd class="job_request">
                        <p>
                            <span class="salary"><?php echo (substr($position_detail["wages"],0,1)); ?>k-<?php echo (substr($position_detail["wages"],2,3)); ?>k</span>
                            <span>/<?php echo ($position_detail["city"]); ?> /</span>
                            <span><?php echo ($expe["name"]); ?> /</span>
                            <span><?php echo ($degree["name"]); ?> /</span>
                            <span><?php echo ($prop); ?></span></p>
                        <!-- 职位标签 -->
                        <ul class="position-label clearfix">
                            <li class="labels">PHP</li>
                            <li class="labels">MySQL</li>
                            <li class="labels">LAMP/LNMP</li></ul>
                        <p class="publish_time"><?php echo (date("Y-m-d H:i",$position_detail["addtime"])); ?>&nbsp; 发布于拉勾网</p></dd>
                </div>
                <div class="position-content-r clearfix">
                    <div class="position-deal clearfix">
                        <div class="resume-deliver">
                           <?php if($_SESSION['user']!= null): ?><!-- 未登录 -->
                            <a rel="nofollow" href="javascript:;" title="登录" onclick="Delivery()"class="passport_login_pop btn fr btn_apply">投个简历</a>
                            <?php else: ?>
                             <a rel="nofollow" href="javascript:;" title="登录" onclick="jump()"class="passport_login_pop btn fr btn_apply">投个简历</a><?php endif; ?>
                            <!-- 是否登录end -->
                            <!-- 职位是否过期end -->
                            <!-- 是否speedShow end --></div>
                        <!-- 是否 canDeliver end -->
                        <!-- 收藏按钮 -->
						<?php if($position_detail["state"] == '0'): ?><a class="jd_collection passport_login_pop " id="collect" rel="nofollow" onclick="collect(<?php echo ($position_detail["id"]); ?>)">
                            <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>&nbsp;收藏</a>
						<?php else: ?>
						<a class="jd_collection passport_login_pop " id="qx_collect" rel="nofollow" onclick="qx_collect(<?php echo ($position_detail["id"]); ?>)">
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>&nbsp;取消收藏</a><?php endif; ?>
                    </div>
					
                    <!-- 简历状态 -->
                    <ul class="resume-select clearfix">
                        <li class="resume no-resume-attachment">
                            <span>
                            <form id="resume">
                                <input type="radio" name="resume"value="0" >
                                <input type="hidden" name="firm_id" value="<?php echo ($cominfo["uid"]); ?>">
                                <input type="hidden" name="post_id" value="<?php echo ($position_detail["id"]); ?>">
                                <input type="hidden" name="jobs" value="<?php echo ($position_detail["name"]); ?>">
                                <input type="hidden" name="wages" value="<?php echo ($position_detail["wages"]); ?>">
                                <input type="hidden" name="firm_name" value="<?php echo ($cominfo["com_name"]); ?>">
                                <input type="hidden" name="work_address" value="<?php echo ($position_detail["city"]); ?>">
                                <input type="hidden" name="face_test_address" value="<?php echo ($position_detail["address"]); ?>">

                                <a class="passport_login_pop" rel="nofollow" href="/lagouwang/Home/Resume/index">
                                   </i>上传附件简历</a>
                            </span>
                        </li>
                        <li class="resume no-resume-online">
                            <span>
                                <a href="/lagouwang/Home/Resume/index" target="_blank" title="完善在线简历" rel="nofollow">
                                <input type="radio" name="resume"value="1" checked>
                                    完善在线简历</a>
                                    </form>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ceil">
            <div class="ceil-content">
                <span class="ceil-job"><?php echo ($position_detail["name"]); ?> /</span>
                <span class="ceil-salary"></span>
                <div class="ceil-right"></div>
            </div>
        </div>
        <div class="container clearfix" id="container">
            <div class="content_l fl">
                <dl class="job_detail" id="job_detail">
                    <dt class="clearfix join_tc_icon">
                    </dt>
                    <dd class="job-advantage">
                        <span class="advantage">职位诱惑：</span>
                        <p><?php echo ($position_detail["advantage"]); ?></p>
                    </dd>
                    <dd class="job_bt">
                        <h3 class="description">职位描述：</h3>
                        <div>
                            <?php echo ($position_detail["describe"]); ?>    
                        </div>
                    </dd>
                    <dd class="job-address clearfix">
                        <h3 class="address">工作地址</h3>
                        <div class="work_addr">
                           <?php echo ($position_detail["address"]); ?>
                            </div>
                        <div id="miniMap"></div>
                        <input type="hidden" name="positionLng" value="116.40366356" />
                        <input type="hidden" name="positionLat" value="40.00028462" />
                        <input type="hidden" name="positionAddress" value="慧忠里卧龙小区219栋别墅西单元" />
                        <input type="hidden" name="workAddress" value="北京" />
                        <div style="display: block; height: 340px;">
                            <div id="mapPopup" class="popup">
                                 <div id="mapcontainer"></div>
                            <div id="tip"style="display: none;"></div>
                            </div>
                        </div>
                    </dd>
                    <!-- 职位发布者 -->
                    <dd class="jd_publisher">
                        <h3>职位发布者:</h3>
                        <div class="border clearfix">
                          <img src="/lagouwang/Public/Upload/com_logo/<?php echo ($cominfo["logo"]); ?>" width="60" height="60">
                          <div class="publisher_name">
                            <a title="<?php echo ($cominfo["com_name"]); ?>">
                              <span class="name"><?php echo ($cominfo["com_name"]); ?></span>
                              <span class="chatme chat_me" data-lg-tj-id="1WG0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="jobs_code" data-lg-tj-track-type="1"></span>
                              <input type="hidden" class="hr_portrait" value="image1/M00/08/5B/Cgo8PFTUisGAQKuSAAAlgMswMlQ877.jpg">
                              <input type="hidden" class="hr_name" value="<?php echo ($cominfo["com_name"]); ?>">
                              <input type="hidden" class="hr_position" value="招聘负责人">
                              <input type="hidden" class="erma_codeu" value="619924">
                              <input type="hidden" class="erma_codep" value="2766232"></a>
                            <span class="pos">招聘负责人</span></div>
                          <div class="publisher_data">
                            <div>
                              <span class="data_title">聊天意愿
                                <i></i>
                              </span>
                              <span class="tip_text">1个月内职位发布者回复聊天的占比</span>
                              <!-- <span class="data">99%</span> -->
                              <span class="data">很弱</span>
                              <span class="tip">回复率
                                <i>--</i>&nbsp;用时
                                <i class="light_tip">31</i>分钟</span></div>
                            <em></em>
                            <div>
                              <span class="data_title">简历处理
                                <i></i>
                              </span>
                              <span class="tip_text">2个月内职位发布者简历处理的效率</span>
                              <span class="data">超快</span>
                              <span class="tip">处理率
                                <i class="light_tip">99%</i>&nbsp;用时
                                <i class="light_tip">1</i>天</span></div>
                            <em></em>
                            <div>
                              <span class="data_title">活跃时段
                                <i></i>
                              </span>
                              <span class="tip_text">1个月内职位发布者最活跃时段统计</span>
                              <span class="data">下午</span>
                              <span class="tip">下午
                                <i class="light_tip">4</i>点最活跃</span></div>
                          </div>
                        </div>
                    </dd>
                    <!-- 职位发布者 end --></dl>
                   
                <dl class="view_again module-container" data-lg-tj-track-code="jobs_again" data-lg-tj-track-type="1">
                    <div class="module-title">看了此职位的人还会看</div>
                    <a rel="nofollow" href="//www.lagou.com/recommend/reView/2613101.html" target="_blank" class="checkAll">查看更多</a>
                    <div class="view_again_area"></div>
                </dl>
                <!-- 推荐 -->
               
                <!-- 公司详情页、职位详情页 推荐--></div>
            <div class="content_r">
                <dl class="job_company" id="job_company">
                    <dt>
                        <a href="/lagouwang/Home/ComIndex/index/?uid=<?php echo ($cominfo["uid"]); ?>" target="_blank" data-lg-tj-track-code="jobs_logo">
                            <img class="b2" src="/lagouwang/Public/Upload/com_logo/<?php echo ($cominfo["logo"]); ?>" width="96" height="96" alt="<?php echo ($cominfo["com_name"]); ?>" />
                            <div>
                                <h2 class="fl"><?php echo ($cominfo["com_name"]); ?>
                                    <i class="icon-glyph-valid"></i>
                                    <span class="dn">拉勾认证企业</span></h2>
                            </div>
                        </a>
                    </dt>
                    <dd>
                        <ul class="c_feature">
                            <li>
                                <?php echo ($about["0"]["name"]); ?>,<?php echo ($about["1"]["name"]); ?>,
                                <span class="hovertips">领域</span></li>
                            <li>
                                <?php echo ($phase["name"]); ?>
                                <span class="hovertips">发展阶段</span></li>
                            <li>
                               <?php echo ($s); ?>
                                <span class="hovertips">规模</span></li>
                            <li>
                             
                                <a href="http://yunniao.cn/" target="_blank" title="http://yunniao.cn/" rel="nofollow"><?php echo ($cominfo["web"]); ?></a>
                                <span class="hovertips">公司主页</span></li>
                        </ul>
                    </dd>
                </dl>
                <!-- @require "job-detail/modules/event/activity1212-v2/main.less" -->
                
                <!--广告位-->
                <div key="ZHIWEIYE_YOUCEERWEIMA" class="job_ad_side lgad_jsonp ad_exposure"></div>
            </div>
        </div>
        <!-- 页面主体END -->
        <!-- footer -->
        <a id="backtop" title="回到顶部" rel="nofollow"></a>
        <!-- feedback -->
        <!-- @require "common/widgets/footer_c/modules/feedback/feedback.less" -->
        <div id="product-fk">
            <div id="feedback-icon">
                <div class="fb-icon"></div>
                <span>我要反馈</span></div>
        </div>
        <div id="footer">
            <div class="wrapper">
                <i class="footer_lagou_icon"></i>
                <div class="inner_wrapper">
                    <a class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">拉勾APP
                        <span>new</span>
                        <img data-delay-src="picture/cgp3o1h0u3yahbolaaeepk9-koc621.jpg" width="256" height="256"></a>
                    <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
                    <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信
                        <img data-delay-src="picture/cgpzwlznl0qazitpaabxepaojx0071.jpg" width="242" height="242"></a>
                    <a href="http://activity.lagou.com/topic/whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
                    <a href="//www.lagou.com/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
                    <a href="//www.lagou.com/about.html" target="_blank" rel="nofollow">联系我们</a>
                    <a href="https://activity.lagou.com/activity/dist/business/index.html" target="_blank" rel="nofollow">招聘解决方案</a>
                    <span class="tel">服务热线：
                        <em>4006-2828-35 (9:00 -18:00)</em></span>
                </div>
                <div class="copyright ">
                    <span>
                        <em>&copy;</em>2017 Lagou</span>
                    <a target="_blank" href="#" rel="nofollow">京ICP备14023790号-2</a>
                    <span>京公网安备11010802017116号</span></div>
            </div>
        </div>

    </body>
	<script type="text/javascript">
			function collect(id)
			{
				$.ajax({
					type:"POST",
					url:"/lagouwang/Home/PersonCenter/collect",
					data:"id="+id,
					dataType:"json",
					success:function(res){
						if(res.info=='Y'){
							$("#collect").replaceWith("<a class='jd_collection passport_login_pop' id='qx_collect' rel='nofollow' onclick='qx_collect(<?php echo ($position_detail["id"]); ?>)'><span class='glyphicon glyphicon-heart' aria-hidden='true'></span>&nbsp;取消收藏</a>");
							
						}
					}
				});
			}
			
			function qx_collect(id)
			{
				$.ajax({
					type:"POST",
					url:"/lagouwang/Home/PersonCenter/qx_collect",
					data:"id="+id,
					dataType:"json",
					success:function(res){
						if(res.info=='Y'){
							$("#qx_collect").replaceWith("<a class='jd_collection passport_login_pop' id='collect' rel='nofollow' onclick='collect(<?php echo ($position_detail["id"]); ?>)'><span class='glyphicon glyphicon-heart-empty' aria-hidden='true'></span>&nbsp;收藏</a>");
						}
					}
				});
			}
	
</script>
 <script type="text/javascript">
 					
    //实例化地图
    var geolocation;
    var clickListener, map = new AMap.Map('mapcontainer', {
        resizeEnable: true,
        center: [<?php echo ($address["mapaddress"]); ?>],
        zoom:18
    });  
        // 设置缩放级别和中心点
        map.setZoomAndCenter(17, [<?php echo ($address["mapaddress"]); ?>]);
        // 在新中心点添加 marker 
        var marker = new AMap.Marker({
            map: map,
            position: [<?php echo ($address["mapaddress"]); ?>]
        });
        var info = [];
        info.push("地址 :"+'<?php echo ($address["address"]); ?>');
        infoWindow = new AMap.InfoWindow({
            content: info.join("<br/>")  //使用默认信息窗体框样式，显示信息内容
        });
        infoWindow.open(map,[<?php echo ($address["mapaddress"]); ?>]);

    //bt1的click的绑定事件
   // var  marker;
    var bind = function() {

        remove(); //防止重复绑定
        clickListener = AMap.event.addListener(map, "click", function(e) {
            marker = new AMap.Marker({
                position: e.lnglat,
                map: map
            });
            var y = e.lnglat.getLng();
            var x = e.lnglat.getLat();
            center= [y,x];
            AMap.event.removeListener(clickListener);//移除事件，以绑定时返回的对象作为参数
            document.getElementById('clearMarker').style.display="block";
            openInfo();
        });
    };
    //bt2的click的绑定事件
    var remove = function() {
        if (clickListener) {
            AMap.event.removeListener(clickListener);//移除事件，以绑定时返回的对象作为参数
        }
    }; 

        var button1 = document.getElementById('bt1');
        var listener1 = AMap.event.addDomListener(button1, 'click', bind);//给div绑定单击事件  
        AMap.event.addDomListener(document.getElementById('clearMarker'), 'click', function() {
          //删除点标记
        map.remove(marker); 
        // 关闭信息窗体
        infoWindow.close();
        // 绑定点击事件
        button1.click();
    }, false);
    //打开信息窗体
     function openInfo() {
        // s_province s_city  s_county
        $address = $("#s_province").val()+$("#s_city").val()+$("#s_county").val()+$("#mapaddress").val();
        //构建信息窗体中显示的内容
        var info = [];
        info.push("地址 :"+$address);
        infoWindow = new AMap.InfoWindow({
            content: info.join("<br/>")  //使用默认信息窗体框样式，显示信息内容
        });
        infoWindow.open(map,center);
    }
    
    function Delivery(){
        alert($("#resume").serialize());
         $.ajax({
            type:'post',             //请求方式GET
            url :'/lagouwang/Home/PersonCenter/delivery',           //ajax请求地址
            data:$("#resume").serialize(), //请求传递的参数
            dataType:'json',        //预期服务器返回的数据类型
            async : true,           //是否异步
            success: function(data){
                alert(data);
                if(data=="1"){
                    alert("投递成功！请前往投递箱查看！")
                }
                if(data == "2"){
                    alert("您已经投过这条简历！");
                }
                if(data == "3"){
                    alert("没有简历");
                }
                if(data == "4"){
                    alert("请上传附件简历！");
                }
                if(data == "5"){
                    window.location.href="/lagouwang/Home/Public/login";

                }
                if(data == "6"){
                  alert("系统错误");
                }
            }
        });
    }
    //如果没有登录先跳转到登录
    function jump(){
        window.location.href="/lagouwang/Home/Public/login";
    }

    
</script>
</html>