<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
    <head>
        <meta content="no-siteapp" http-equiv="Cache-Control">
        <link media="handheld" rel="alternate">
        <!-- end 云适配 -->
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>创始团队-招聘服务-拉勾网-最专业的互联网招聘平台</title>
        <meta content="23635710066417756375" property="qc:admins">
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <meta content="QIQ6KC1oZ6" name="baidu-site-verification">
        <link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon">
        <link href="/lagouwang/Public/style/css/style.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/style/css/external.min.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/style/css/popup.css" type="text/css" rel="stylesheet">
        
        <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
        <link href="/lagouwang/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/lagouwang/Public/cropper/cropper.min.css" rel="stylesheet">
        <link href="/lagouwang/Public/sitelogo/sitelogo.css" rel="stylesheet">
        <script src="/lagouwang/Public/cropper/cropper.min.js"></script>
        <script src="/lagouwang/Public/sitelogo/sitelogo.js"></script>
        <script src="/lagouwang/Public/bootstrap/js/bootstrap.min.js"></script>
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
                                <a href="positions.html">我收到的简历</a></dd>
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
                            <dd>
                                <div class="c_text">展示强劲的创始团队，让求职者跟随而来吧！</div>
                                <img width="668" height="56" class="c_steps" alt="第三步" src="/lagouwang/Public/style/images/step3.png">
                                
                                            <h3>创始人头像</h3>
<div id="img">
<div class="ibox-content">
        <div class="row">
            <div id="crop-avatar" class="col-md-6">
                <div class="avatar-view" title="Change Logo Picture">
                    <img src="/lagouwang/Public/logo.jpg" alt="Logo">
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="avatar-form" action="/lagouwang/Home/Company/uplodimg" enctype="multipart/form-data" method="post">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="avatar-modal-label">Change Logo Picture</h4>
                </div>
                <div class="modal-body">
                    <div class="avatar-body">
                        <div class="avatar-upload">
                            <input class="avatar-src" name="avatar_src" type="hidden">
                            <input class="avatar-data" name="avatar_data" type="hidden">
                            <label for="avatarInput">图片上传</label>
                            <input class="avatar-input" id="avatarInput" name="avatar_file" type="file"></div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="avatar-wrapper"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="avatar-preview preview-lg"></div>
                                <div class="avatar-preview preview-md"></div>
                                <div class="avatar-preview preview-sm"></div>
                            </div>
                        </div>
                        <div class="row avatar-btns">
                            <div class="col-md-9">
                                <div class="btn-group">
                                    <button class="btn" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees"><i class="fa fa-undo"></i> 向左旋转</button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees"><i class="fa fa-repeat"></i> 向右旋转</button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-success btn-block avatar-save" type="submit"><i class="fa fa-save"></i> 保存修改</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
  </div>
</div>      
                                <form method="post" action="/lagouwang/Home/Company/doadd3">>
                                    <div id="memberDiv">
                                        <div class="formWrapper">

                                            <h3>创始人姓名</h3>
                                            <input type="text" placeholder="请输入创始人姓名" name="founder"  class="s_input1 valid" style="width:300px">
                                            <h3>当前职位</h3>
                                            <input type="text" placeholder="请输入当前职位，如：创始人兼CEO" name="fon_position" class="s_input1 valid" style="width:400px">
                                            <h3>新浪微博</h3>
                                            <input type="text" placeholder="请输入创始人新浪微博地址" name="weibo">
                                            <h3>创始人简介</h3>
                                            <textarea placeholder="请输入该创始人的个人履历等，建议按照时间倒序分条展示" maxlength="1000" name="fun_introduce"></textarea>
                                            <div class="word_count">你还可以输入
                                                <span>500</span>字</div></div>
                                    </div>
                                    <input type="submit" value="保存，下一步"class="btn_big fr">
                                    <a class="btn_cancel fr" href="/lagouwang/Home/Company/describe">跳过</a></form>
                            </dd>
                        </dl>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" value="52346c62232045a8ab1d45cb3e0540b7" id="resubmitToken">
                    <a rel="nofollow" title="回到顶部" id="backtop" style="display: inline;"></a>
                </div>
                <!-- end #container --></div>
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
        </body>

</html>