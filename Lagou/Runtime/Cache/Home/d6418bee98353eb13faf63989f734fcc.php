<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
    <head>
        <meta content="no-siteapp" http-equiv="Cache-Control">
        <link media="handheld" rel="alternate">
        <!-- end 云适配 -->
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>公司标签-招聘服务-拉勾网-最专业的互联网招聘平台</title>
        <meta content="23635710066417756375" property="qc:admins">
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <meta content="QIQ6KC1oZ6" name="baidu-site-verification">
        <link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon">
        <link href="/lagouwang/Public/style/css/style.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/style/css/external.min.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/style/css/popup.css" type="text/css" rel="stylesheet">
        <style type="text/css">
        </style>
        <body>
            <div id="body">
                <div id="header">
                    <div class="wrapper">
                        <a class="logo" href="index.html">
                            <img width="229" height="43" alt="拉勾招聘-专注互联网招聘" src="/lagouwang/Public/style/images/logo.png"></a>
                        <ul id="navheader" class="reset">
                            <li>
                                <a href="index.html">首页</a></li>
                            <li class="current">
                                <a href="companylist.html">公司</a></li>
                            <li>
                                <a target="_blank" href="">论坛</a></li>
                            <li>
                                <a rel="nofollow" href="">简历管理</a></li>
                            <li>
                                <a rel="nofollow" href="create.html">发布职位</a></li>
                        </ul>
                        <dl class="collapsible_menu">
                            <dt>
                                <span>jason&nbsp;</span>
                                <span class="red dn" id="noticeDot-1"></span>
                                <i>
                                </i>
                            </dt>
                            <dd>
                                <a href="positions.html">我发布的职位</a></dd>
                            <dd>
                                <a href="">我收到的简历</a></dd>
                            <dd class="btm">
                                <a href="myhome.html">我的公司主页</a></dd>
                            <dd>
                                <a href="jianli.html">我要找工作</a></dd>
                            <dd>
                                <a href="accountBind.html">帐号设置</a></dd>
                            <dd class="logout">
                                <a rel="nofollow" href="login.html">退出</a></dd>
                        </dl>
                    </div>
                </div>
                <!-- end #header -->
                <div id="container">
                    <div class="content_mid">
                        <dl class="c_section c_section_mid">
                            <dt>
                                <h2>
                                    <em></em>填写公司信息</h2>
                                <a class="c_addjob" href="create.html">
                                    <i>
                                    </i>发布新职位</a>
                            </dt>
                            <dd id="step2Form">
                                <div class="c_text">简短明了的标签信息让求职者更加方便检索，更快找到你们！</div>
                                <img width="668" height="56" class="c_steps" alt="第二步" src="/lagouwang/Public/style/images/step2.png">
                                <form id="stepForm" action="/lagouwang/Home/Company/doadd2" method="post"> 
                                <!-- <input type="text" placeholder="请输入自定义标签" name="label" id="label"> -->
                                <div class="clear"></div>
                              		
                                    <div class="panel panel-default">
                                    <h3>薪酬激励</h3>
                                      <div class="panel-body">
                                         <?php if(is_array($list1)): foreach($list1 as $k=>$vo): ?><label class="checkbox-inline">
                                          <input type="checkbox" name="list[]" value="<?php echo ($vo["id"]); ?>"><span class="tag"><?php echo ($vo["name"]); ?></span>
                                        </label><?php endforeach; endif; ?>
                                         <span id = "about" style="color: red"></span>
                                      </div>
                                    </div>
                                    <div class="panel panel-default">
                                    <h3>员工福利</h3>
                                      <div class="panel-body">
                                         <?php if(is_array($list2)): foreach($list2 as $k=>$vo): ?><label class="checkbox-inline">
                                          <input type="checkbox" name="list[]" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?>
                                        </label><?php endforeach; endif; ?>
                                         <span id = "about" style="color: red"></span>
                                      </div>
                                    </div>
                                    <div class="panel panel-default">
                                    <h3>员工关怀</h3>
                                      <div class="panel-body">
                                         <?php if(is_array($list3)): foreach($list3 as $k=>$vo): ?><label class="checkbox-inline">
                                          <input type="checkbox" name="list[]" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?>
                                        </label><?php endforeach; endif; ?>
                                         <span id = "about" style="color: red"></span>
                                      </div>
                                    </div>
                                    <div class="panel panel-default">
                                    <h3>其他</h3>
                                      <div class="panel-body">
                                         <?php if(is_array($list4)): foreach($list4 as $k=>$vo): ?><label class="checkbox-inline">
                                          <input type="checkbox" name="list[]" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?>
                                        </label><?php endforeach; endif; ?>
                                         <span id = "about" style="color: red"></span>
                                      </div>
                                    </div>
                      
                                <input type="submit" value="保存，下一步"class="btn_big fr">
                                </form>
                                <!-- <a class="btn_cancel fr" href="/lagouwang/Home/Company/founder">跳过</a></dd> -->
                        </dl>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" value="" id="resubmitToken">
                    <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
                </div>
			</div>
            <!-- end #body -->
            <div id="footer">
                <div class="wrapper">
                    <a rel="nofollow" target="_blank" href="about.html">联系我们</a>
                    <a target="_blank" href="http://www.lagou.com/af/zhaopin.html">互联网公司导航</a>
                    <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
                    <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信
                        <i></i>
                    </a>
                    <div class="copyright">&copy;2013-2014 Lagou
                        <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
                </div>
            </div>
           <!--  -->
        </body>

</html>