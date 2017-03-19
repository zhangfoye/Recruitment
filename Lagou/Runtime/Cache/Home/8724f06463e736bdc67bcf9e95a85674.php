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
        
    <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/mcustomscrollbar_ac2fb8b_6.css"/>
    <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/layout_19d0413_6.css"/>
    <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/widgets_ea16201_6.css"/>
    <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_48273fc_2.css"/>
    <style type="text/css">
        .d_resume a{
            font-size:16px;
            color: #0D9572;
        }
        .d_resume a:hover{
            color:#666;
        }
        #pickdate,#picktime{            
            width: 150px;
        }
        .face{
            display: block;
        }
        .display{
                display: none;

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
        
        <!--end #header-->
        <input type="hidden" id="serverTime" value="1488334015093" />
        <!-- 页面主体START -->
        <div id="container">
            <div class="clearfix">
                <div class="new_section fl">
                    <dl class="c_delivery">
                        <dt>
                            <h1>
                                <em>
                                </em>
                                我的投递记录
                            </h1>
                            
                            <a href="javascript:;" class="d_refresh">
                                刷新
                            </a>
                        </dt>
                        <dd>
                            <div class="delivery_tabs">
                                <ul class="reset">
                                    <li class="current">
                                        <a href="#" class="all_border">
                                            全部
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            待处理
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            已查看
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            待定简历
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            邀请面试
                                        </a>
                                    </li>
                                    <li class="last">
                                        <a href="#">
                                            不合适
                                        </a>
                                    </li>
                                </ul>
                            </div>
                                <ul class="reset my_delivery">
                                    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><li data-id="836757548049809408" class="open">
                                        <input type="hidden" id="open" />
                                       <div class="d_item">
                                            <h2 title="<?php echo ($vo["jobs"]); ?>">
                                                <a href="#" data-index="3" target="_blank" title="<?php echo ($vo["jobs"]); ?>">
                                                    <em><?php echo ($vo["jobs"]); ?></em>
                                                    <span>（<?php echo ($vo["salary"]["0"]); ?>k-<?php echo ($vo["salary"]["1"]); ?>k）</span>
                                                    <!-- --></a>
                                            </h2>
                                            <div class="clear"></div>

                                            <a href="#" target="_blank" class="d_jobname" title="银河科技"><?php echo ($vo["firm_name"]); ?>
                                                <span>[<?php echo ($vo["work_address"]); ?>]</span></a>
                                            <div class="d_resume">使用简历：
                                                <span><?php echo ($type[$vo[resume_type]]); ?></span></div>
                                            <a class="btn_showprogress" onclick="aaa(<?php echo ($vo["id"]); ?>,'show')">
                                                <span><?php echo ($info[$vo['state']]); ?></span>
                                                <i>
                                                </i>
                                            </a>
                                            <span class="d_time">2017-03-14 17:23</span>
                                        </div>
    
                                        <div class="progress_status	dn show<?php echo ($vo["id"]); ?>" style="display: none" s="false">
                                            <ul class="status_list">
                                            
                                            <!-- 不合适 -->
                                            <?php switch($vo["state"]): case "5": ?><ul class="status_list" data-id="841580434993766400">
                                                <li class="top">
                                                    <div class="list_time">
                                                        <em>
                                                        </em>
                                                       <?php echo (date("Y-m-d H:i:s",$vo["time5"])); ?>
                                                    </div>
                                                    <div class="list_body">
                                                        <!-- 1.如果是通知面试，无举报入口 -->
                                                        <h3 class="contact_title" style="position:relative;z-index:2;left:1px;top:-1px;display:inline-block;">
                                                            简历被标记为不合适
                                                        </h3>
                                                        <div>
                                                           <?php echo ($vo["reason"]); ?>
                                                        </div>
                                                    </div>
                                                    </li>
                                                    <li>
                                                        <div class="list_time">
                                                            <em></em><?php echo (date("Y-m-d H:i:s",$vo["time2"])); ?></div>
                                                        <div class="list_body">
                                                            <h3 class="contact_title">hr&nbsp;查看了你的简历</h3></div>
                                                    </li>
                                                    <li class="bottom">
                                                        <div class="list_time">
                                                            <em></em><?php echo (date("Y-m-d H:i:s",$vo["time1"])); ?></div>
                                                        <div class="list_body">
                                                            <h3 class="contact_title">hr&nbsp;已成功接收你的简历</h3></div>
                                                    </li>
                                                </ul><?php break;?>
                                                <?php case "4": ?><!-- 待沟通 -->
                                                    <ul class="status_list" data-id="840040679346393088">
                                                        <li>
                                                            <div class="list_time">
                                                       
                                                                <em></em>
                                                                    <?php echo (date("Y-m-d H:i:s",$vo["time4"])); ?>
                                                                </div>
                                                            <div class="list_body">
                                                                <!-- 1.如果是通知面试，无举报入口 -->
                                                                <h3 class="contact_title">你的简历已经通过初筛，企业可能会在近期与你沟通，请保持联系方式畅通
                                                                    <a href="javascript:;" class="checkCommunication" data-id="840129650932703232" style="font-size:12px;">
                                                                        </a>
                                                                </h3>
                                                            </div>
                                                        </li>
                                                        <li>
                                                        <div class="list_time">
                                                            <em></em><?php echo (date("Y-m-d H:i:s",$vo["time2"])); ?></div>
                                                        <div class="list_body">
                                                            <h3 class="contact_title">hr&nbsp;查看了你的简历</h3></div>
                                                    </li>
                                                    <li class="bottom">
                                                        <div class="list_time">
                                                            <em></em><?php echo (date("Y-m-d H:i:s",$vo["time1"])); ?></div>
                                                        <div class="list_body">
                                                            <h3 class="contact_title">hr&nbsp;已成功接收你的简历</h3></div>
                                                    </li>
                                                    </ul><?php break;?>
                                                <!-- 面试邀请 -->
                                                <?php case "3": ?><ul class="status_list" data-id="840040904909131776">
                                                    <li class="top">
                                                        <div class="list_time">
                                                            <em></em><?php echo (date("Y-m-d H:i:s",$vo["time3"])); ?></div>
                                                        <div class="list_body">
                                                            <h3>hr给你发来面试邀请</h3>
                                                            <div class="check_content" style="margin-top:-10px;margin-left:1px">
                                                                <div>面试时间：
                                                                    <span><?php echo ($vo["face_time"]); ?></span></div>
                                                                <div>联系人：
                                                                    <span><?php echo ($vo["linkman"]); ?></span></div>
                                                                <div>联系电话：
                                                                    <span><?php echo ($vo["phone"]); ?></span></div>
                                                                <div>面试地点：
                                                                    <span><?php echo ($vo["face_address"]); ?></span></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list_time">
                                                            <em></em><?php echo (date("Y-m-d H:i:s",$vo["time4"])); ?></div>
                                                        <div class="list_body">
                                                            <!-- 1.如果是通知面试，无举报入口 -->
                                                            <h3 class="contact_title">你的简历已经通过初筛，企业可能会在近期与你沟通，请保持联系方式畅通
                                                            </h3>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list_time">
                                                            <em></em><?php echo (date("Y-m-d H:i:s",$vo["time2"])); ?></div>
                                                        <div class="list_body">
                                                            <h3 class="contact_title">hr&nbsp;查看了你的简历</h3></div>
                                                    </li>
                                                    <li class="bottom">
                                                        <div class="list_time">
                                                            <em></em><?php echo (date("Y-m-d H:i:s",$vo["time1"])); ?></div>
                                                        <div class="list_body">
                                                            <h3 class="contact_title">hr&nbsp;已成功接收你的简历</h3></div>
                                                    </li>
                                                </ul><?php break;?>
                                                <!-- 查看简历 -->
                                                <?php case "2": ?><ul class="status_list" data-id="840040679346393088">
                                                        <li class="top">
                                                            <div class="list_time">
                                                                <em></em><?php echo (date("Y-m-d H:i:s",$vo["time2"])); ?></div>
                                                            <div class="list_body">
                                                                <!-- 1.如果是通知面试，无举报入口 -->
                                                                <h3 class="contact_title">lemuoffer&nbsp;查看了你的简历</h3></div>
                                                        </li>
                                                        <li class="bottom">
                                                            <div class="list_time">
                                                                <em></em><?php echo (date("Y-m-d H:i:s",$vo["time1"])); ?></div>
                                                            <div class="list_body">
                                                                <!-- 1.如果是通知面试，无举报入口 -->
                                                                <h3 class="contact_title">lemuoffer&nbsp;已成功接收你的简历</h3></div>
                                                        </li>
                                                    </ul><?php break;?>
                                                <?php case "1": ?><ul class="status_list" data-id="841580434993766400">
                                                    <li class="top1">
                                                        <div class="list_time">
                                                            <em></em><?php echo (date("Y-m-d H:i:s",$vo["time1"])); ?></div>
                                                        <div class="list_body">
                                                            <!-- 1.如果是通知面试，无举报入口 -->
                                                            <h3 class="contact_title">wangyanli&nbsp;已成功接收你的简历</h3></div>
                                                    </li>
                                                </ul><?php break;?>
                                                 <?php default: endswitch;?>
                                            <!--  -->
                                        </div> 
                                       
                                    </li><?php endforeach; endif; ?>
                                </ul>
                        </dd>
                    </dl>
                </div>
                <div class="content_r">
                    <div class="deliveries_recommend" data-lg-tj-track-code="deliver_guess"
                    data-lg-tj-track-type="1">
                        <div id="position_recommend">
                            <ul class="position_head">
                                <li class="guess_selected">
                                    猜你喜欢
                                </li>
                            </ul>
                            <input type="hidden" value="true" id="hasRecommendPositionList">
                            <div class="similar_content" id="similar_current">
                                <div class="position_detail_content">
                                    <ul class="guess_like reset">
                                        <li class="guess_like_list_item  clearfix" data-positionid="570115">
                                            <a class="position_link clearfix" href="//www.lagou.com/jobs/570115.html"
                                            data-index="4" target="_blank" data-lg-tj-id="gp00" data-lg-tj-no="0005"
                                            data-lg-tj-cid="570115" data-lg-tj-abt="interest_cf|0">
                                                <div class="guess_like_list_item_logo" data-lg-tj-id="1ka0" data-lg-tj-no="0005"
                                                data-lg-tj-cid="570115">
                                                    <img src="/lagouwang/Public/picture/cgyxblunodcaqs-7aabn4-9nsoc293.png" alt="明略数据" width="56"
                                                    height="56" />
                                                </div>
                                                <div class="guess_like_list_item_pos">
                                                    <h2 title="html5" data-lg-tj-id="1kb0" data-lg-tj-no="0005" data-lg-tj-cid="570115">
                                                        html5
                                                    </h2>
                                                    <p data-lg-tj-id="1kc0" data-lg-tj-no="0005" data-lg-tj-cid="570115">
                                                        16k-24k
                                                    </p>
                                                    <p class="company_name">
                                                        <span class="company_name_span" data-lg-tj-id="1kd0" data-lg-tj-no="0005"
                                                        data-lg-tj-cid="570115">
                                                            明略数据
                                                        </span>
                                                        <span class="company_position_span" data-lg-tj-id="1ke0" data-lg-tj-no="0005"
                                                        data-lg-tj-cid="570115">
                                                            [北京·东小口]
                                                        </span>
                                                    </p>
                                                </div>
                                            </a>
                                            <!-- 鼠标划过时展示的公司信息 -->
                                            <div class="company_info dn">
                                                <div class="arr">
                                                    <span>
                                                    </span>
                                                </div>
                                                <p>
                                                    <span>
                                                        领域：
                                                    </span>
                                                    <span>
                                                        数据服务
                                                    </span>
                                                </p>
                                                <p>
                                                    <span>
                                                        创始人：
                                                    </span>
                                                    <span>
                                                        冯是聪
                                                    </span>
                                                </p>
                                                <p>
                                                    <span>
                                                        阶段：
                                                    </span>
                                                    <span>
                                                        B轮
                                                    </span>
                                                </p>
                                                <p>
                                                    <span>
                                                        规模：
                                                    </span>
                                                    <span>
                                                        150-500人
                                                    </span>
                                                </p>
                                                <div class="company_label">
                                                    <span>
                                                        技能培训
                                                    </span>
                                                    <span>
                                                        年底双薪
                                                    </span>
                                                    <span>
                                                        节日礼物
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="//www.lagou.com/jobs/mList.html" class="similar_position_footer"
                                    target="_blank" data-lg-tj-id="17a0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                                        更多猜你喜欢职位
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--广告位-->
                    <div key="ZHIWEITOUDIXIANGYAOQINGHANSHOUZANGJIADINGYUELAN_ZHIWEITOUDIXIANGYAOQINGHANSHOUZANGJIADINGYUELAN"
                    class="lgad_jsonp" style="margin-top: 20px;">
                    </div>
                </div>
            </div>
            <input type="hidden" value="7242094" name="userid" id="userid" />
            <!-- 用户确认反馈后-添加内容模板 -->
            <ul id="feedback_tem" style="display:none;">
                <li class="top">
                    <div class="list_time">
                        <em>
                        </em>
                        <span>
                        </span>
                    </div>
                    <div class="list_body">
                    </div>
                </li>
            </ul>
            <div style="display:none;">
                <div id="unReceivePop" class="popup" style="overflow:auto;">
                    <p>
                        hr可能通过电话或者邮件的方式通知你面试，你确定没有收到通知吗?
                    </p>
                    <div class="btn_div">
                        <a href="javascript:;" class="unreceive_save">
                            确定
                        </a>
                        <a href="javascript:;" class="unreceive_cancel">
                            取消
                        </a>
                    </div>
                </div>
                <div id="no_receive_communication" class="popup">
                    <p>
                        如果企业没有与你沟通，你可以尝试通过邮件联系HR，或者直接向拉勾反馈。
                    </p>
                    <span class="confirm">
                        是的，没有收到任何渠道的沟通
                    </span>
                    <span class="cancle">
                        再等等看
                    </span>
                </div>
                <div id="no_receive_confirm" class="popup">
                    <p>
                        感谢你的反馈，我们将会在核实后对职位发布者进行惩罚
                    </p>
                </div>
            </div>
        </div>
        <!-- 页面主体END -->
        <!-- footer -->
        <a id="backtop" title="回到顶部" rel="nofollow">
        </a>
        <div id="product-fk">
            <div id="feedback-icon">
                <div class="fb-icon">
                </div>
                <span>
                    我要反馈
                </span>
            </div>
        </div>

		

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


<script type="text/javascript">
    function aaa(id,res){

    $(".show"+id).css("display","none");
    var display =$('.'+res+id).attr('s');
    if(display == "false"){
    
    $('.'+res+id).css("display","block");
        $('.'+res+id).attr('s',"true");
    }else{
        $('.'+res+id).css("display","none");
        $('.'+res+id).attr('s',"false");

    }
}
</script>
<script type="text/javascript" src="/lagouwang/Public/js/jquery-1.8.3.min.js"></script>
<script src="/lagouwang/Public/date/datedropper.min.js"></script>
<script src="/lagouwang/Public/date/timedropper.min.js"></script>

</html>