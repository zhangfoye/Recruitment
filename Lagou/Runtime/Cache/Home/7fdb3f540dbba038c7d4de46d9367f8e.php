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
        
    <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/mcustomscrollbar_ac2fb8b_2.css"/>
    <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/layout_19d0413_2.css" /> <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/widgets_ea16201_2.css"/>
    <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_57412b3.css"/>
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
                    <em id="changeCity_btn">[切换城市]</em></div>
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
        
    <input type="hidden" value="28417" id='companyId'>
    <div class="top_info">
        <div class="top_info_wrap">
            <img src="/lagouwang/Public/Upload/com_logo/<?php echo ($info["logo"]); ?>" alt="<?php echo ($info["com_name"]); ?>"
            width="164" heihgt="164" />
            <div class="company_info">
                <div class="company_main">
                    <h1>
                        <a href="#" class="hovertips" target="_blank" rel="nofollow"
                        title="<?php echo ($info["com_name"]); ?>">
                            <?php echo ($info["com_name"]); ?>
                        </a>
                    </h1>
                    <a href="" class="icon-wrap" target="_blank" rel="nofollow"
                    title="">
                        <i>
                        </i>
                    </a>
                    <a class="identification" title="拉勾认证企业">
                        <i>
                        </i>
                        <span>
                            拉勾认证
                        </span>
                    </a>
                    <div class="company_word">
                        <?php echo ($info["introduce"]); ?>
                    </div>
                </div>
                <div class="company_data">
                    <ul>
                        <li>
                            <strong>
                                23个
                            </strong>
                            <br />
                            <span class="tipsys" original-title="该公司的在招职位数量">
                                <span>
                                    招聘职位
                                </span>
                                <span class="tip">
                                </span>
                            </span>
                        </li>
                        <li>
                            <strong>
                                90%
                            </strong>
                            <span class="tipsys" original-title="该公司所有职位收到的简历中，在投递后7天内处理完成的简历所占比例">
                                <span>
                                    简历及时处理率
                                </span>
                                <span class="tip">
                                </span>
                            </span>
                        </li>
                        <li>
                            <strong>
                                1天
                            </strong>
                            <br />
                            <span class="tipsys" original-title="该公司的所有职位管理者完成简历处理的平均用时">
                                <span>
                                    简历处理用时
                                </span>
                                <span class="tip">
                                </span>
                            </span>
                        </li>
                        <li id="mspj" style="cursor:pointer;">
                            <strong>
                                195个
                            </strong>
                            <br />
                            <span class="tipsys" original-title="该公司收到的面试评价数量">
                                <span>
                                    面试评价
                                </span>
                                <span class="tip">
                                </span>
                            </span>
                        </li>
                        <li>
                            <strong>
                                今天
                            </strong>
                            <br />
                            <span class="tipsys" original-title="该公司职位管理者最近一次登录时间">
                                <span>
                                    企业最近登录
                                </span>
                                <span class="tip">
                                </span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- @require "company-c/modules/common/main.less" @require "company-c/modules/tabs/main.less"
    -->
    <div id="company_navs" class="company_navs">
        <div class="company_navs_wrap">
            <ul data-pjax>
                <li class="current">
                    <a href="//www.lagou.com/gongsi/28417.html" data-lg-tj-id="9100" data-lg-tj-no="0001"
                    data-lg-tj-cid="idnull">
                        公司主页
                    </a>
                </li>
                <li>
                    <a href="/lagouwang/Home/ComIndex/recruit_detail" data-lg-tj-id="9100" data-lg-tj-no="0002"
                    data-lg-tj-cid="idnull">
                        招聘职位（23）
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="company_navs_shadow">
    </div>
    <div id="main_container">
        <div id="container_left">
    <div id="containerCompanyDetails">
        <!-- @require "company-c/modules/common/main.less" @require "company-c/modules/positions/main.less" -->
        <div class="posfilterlist_container item_container" data-lg-tj-track-code="hpage_indexlist" id="posfilterlist_container">
            <div class="item_ltitle">近两月共有
                <span class="list_total">4</span>个在招职位</div>
            <div class="item_content">
                <div class="item_con_filter" style="display: block;">
                    <span class="con_filter_type">职位：</span>
                    <ul class="con_filter_ul">
                        <li class="con_filter_li no_select selected" data-lg-tj-id="9300" data-lg-tj-no="
                        0001
                        " data-lg-tj-cid="idnull">全部</li>
                        <li class="con_filter_li no_select" data-lg-tj-id="9300" data-lg-tj-no="
                        0002
                        " data-lg-tj-cid="idnull">技术</li>
                        <li class="con_filter_li no_select" data-lg-tj-id="9300" data-lg-tj-no="
                        0006
                        " data-lg-tj-cid="idnull">市场与销售</li>
                    </ul>
                </div>
                <div class="item_con_list_container">
                    <div id="positionsLoading" style="margin-top: 20px; display: none;">加载中...</div>
                    <div class="list-content">
                        <ul class="item_con_list">
                            <li class="con_list_item default_list" data-positionid="2424658" data-salary="15k-25k" data-company="无讼网络科技" data-positionname="高级Java软件工程师">
                                <div class="item_title_date">
                                    <a href="https://www.lagou.com/jobs/2424658.html" data-index="0" target="_blank" class="item_title position_link" data-lg-tj-id="9400" data-lg-tj-no="0100" data-lg-tj-cid="24457">高级Java软件工程师 [ 北京 ]</a>
                                    <input type="hidden" class="erma_codep" value="2424658">
                                    <input type="hidden" class="hr_portrait" value="i/image/M00/01/D5/Cgp3O1Z45xeAfo0RAAFNG7QD8lY042.png">
                                    <input type="hidden" class="hr_name" value="hr">
                                    <input type="hidden" class="hr_position" value="人力资源">
                                    <input type="hidden" class="erma_codeu" value="350803">
                                    <input type="hidden" class="erma_codep" value="2424658">
                                    <div class="chat_me" data-lg-tj-id="1WH0" data-lg-tj-no="0100" data-lg-tj-cid="2424658" data-lg-tj-track-code="hpage_code" data-lg-tj-track-type="1">
                                        <!-- @require "common/widgets/chat-pop/main.less" --></div>
                                    <span class="item_date">2017-03-13 发布</span></div>
                                <p class="item_detail">
                                    <span class="item_salary">15k-25k</span>
                                    <span class="item_desc">经验5-10年 / 本科 / 全职</span></p>
                                <i class="left_border"></i>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <div id="container_right">
            <!-- @require "company-c/modules/common/main.less" @require "company-c/modules/basic-info/main.less"
            -->
            <div class="item_container" id="basic_container">
                <div class="item_ltitle">
                    公司基本信息
                </div>
                <div class="item_content">
                    <ul>
                        <li>
                            <i class="type">
                            </i>
                            <span>
                                <?php echo ($about["1"]["name"]); ?>,<?php echo ($about["0"]["name"]); ?>
                            </span>
                        </li>
                        <li>
                            <i class="process">
                            </i>
                            <span>
                                <?php echo ($phase["name"]); ?>
                            </span>
                        </li>
                        <li>
                            <i class="number">
                            </i>
                            <span>
                                <?php echo ($s); ?>
                            </span>
                        </li>
                        <li>
                            <i class="address">
                            </i>
                            <span>
                                <?php echo ($info["address"]); ?>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- @require "company-c/modules/common/main.less" @require "company-c/modules/managers/main.less"
            -->
            <div class="company_managers item_container" id="company_managers">
                <div class="item_ltitle">
                    管理团队
                </div>
                <div class="company_mangers_item">
                    <div class="managelist_wrap">
                        <ul class="manager_list">
                            <li class="item_has rotate_item  rotate_active ">
                                <img class="item_manger_photo_show" src="/lagouwang/Public/Upload/fon_img/<?php echo ($info["fon_img"]); ?>"
                                alt="创始人头像" width="118" height="118" />
                                <p class="item_manager_name">
                                    <span>
                                        <?php echo ($info["founder"]); ?>
                                    </span>
                                </p>
                                <p class="item_manager_title">
                                    <?php echo ($info["fon_position"]); ?>
                                </p>
                            </li>
                        </ul>
                    </div>
                   
                </div>
            </div>
            <!-- @require "company-c/modules/common/main.less" @require "company-c/modules/tags/main.less"
            -->
            <div class="tags_container item_container" id="tags_container">
                <div class="item_ltitle">
                    公司标签
                </div>
                <div class="tags_warp">
                    <div class="item_content">
                        <ul class="item_con_ul clearfix">
                           
                           <?php if(is_array($tag)): foreach($tag as $key=>$vo): ?><li class="con_ul_li">
                                    <?php echo ($vo); ?>
                                </li><?php endforeach; endif; ?> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feedback -->
    <!-- @require "common/widgets/footer_c/modules/feedback/feedback.less"
    -->

		

        <!-- 页面主体END -->
        <!-- footer <-->
        <a id="backtop" title="回到顶部"  href="#" rel="nofollow" style="display: inline; bottom: 140px; background-position-x: 0px;"></a>
        <div id="product-fk" style="bottom: 80px;">
            <div id="feedback-icon">
                <div class="fb-icon"></div>
                <span>
                    我要反馈
                </span>
            </div>
        </div>
        <div id="footer">
            <div class="wrapper">
                <i class="footer_lagou_icon">
                </i>
                <div class="inner_wrapper">
                    <a class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">
                        拉勾APP
                        <span>
                            new
                        </span>
                        <img data-delay-src="/lagouwang/Public/picture/cgp3o1h0u3yahbolaaeepk9-koc621.jpg" width="256"
                        height="256">
                    </a>
                    <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">
                        拉勾微博
                    </a>
                    <a class="footer_qr" href="javascript:void(0)" rel="nofollow">
                        拉勾微信
                        <img data-delay-src="/lagouwang/Public/picture/cgpzwlznl0qazitpaabxepaojx0071.jpg" width="242"
                        height="242">
                    </a>
                    <a href="http://activity.lagou.com/topic/whatisnew.html" target="_blank"
                    rel="nofollow">
                        版本更新
                    </a>
                    <a href="//www.lagou.com/qa.html?t=1" target="_blank" rel="nofollow">
                        帮助中心
                    </a>
                    <a href="//www.lagou.com/about.html" target="_blank" rel="nofollow">
                        联系我们
                    </a>
                    <a href="https://activity.lagou.com/activity/dist/business/index.html"
                    target="_blank" rel="nofollow">
                        招聘解决方案
                    </a>
                    <span class="tel">
                        服务热线：
                        <em>
                            4006-2828-35 (9:00 -18:00)
                        </em>
                    </span>
                </div>
                <div class="copyright  has_logo">
                    <a rel="nofollow" href="http://v.pinpaibao.com.cn/authenticate/cert/?site=www.lagou.com&at=official">
                        <img class="secu-img" src="/lagouwang/Public/picture/security_association_da335dd.png" alt="安全联盟">
                    </a>
                    &nbsp;
                    <span>
                        <em>
                            &copy;
                        </em>
                        2017 Lagou
                    </span>
                    <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action"
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




</html