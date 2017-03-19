<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
    <head>
        <meta content="no-siteapp" http-equiv="Cache-Control">
        <link rel="Shortcut Icon" href="//www.lgstatic.com/www/static/common/static/favicon_faed927.ico">
        <link media="handheld" rel="alternate">
        <!-- end 云适配 -->
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>基本信息-招聘服务-拉勾网-最专业的互联网招聘平台</title>
        <meta content="23635710066417756375" property="qc:admins">
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <meta content="QIQ6KC1oZ6" name="baidu-site-verification">
        <!-- <div class="web_root" style="display:none">http://www.lagou.com</div> -->
        <link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon">
        <link href="/lagouwang/Public/style/css/style.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/style/css/external.min.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/style/css/popup.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/css/mycss.css" type="text/css" rel="stylesheet">
        
       <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
        <link href="/lagouwang/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/lagouwang/Public/cropper/cropper.min.css" rel="stylesheet">
        <link href="/lagouwang/Public/sitelogo/sitelogo.css" rel="stylesheet">
        <script src="/lagouwang/Public/cropper/cropper.min.js"></script>
        <script src="/lagouwang/Public/sitelogo/sitelogo.js"></script>
        <script src="/lagouwang/Public/bootstrap/js/bootstrap.min.js"></script>
        <!-- <script type="text/javascript" src="/lagouwang/Public/style/js/jquery.1.10.1.min.js"></script> -->
    </head>
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
                <div style="" id="stepTip">
                    <a>
                    </a>
                    <img width="803" height="59" src="/lagouwang/Public/style/images/tiponce.jpg"></div>
                <div class="content_mid">
                    <dl class="c_section c_section_mid">
                        <dt>
                            <h2>
                                <em></em>填写公司信息</h2>
                        </dt>
                        <dd>

                           
                                <div class="c_text_1">基本信息为必填项，是求职者加速了解公司的窗口，认真填写吧！</div>
                                <img width="668" height="56" class="c_steps" alt="第一步" src="/lagouwang/Public/style/images/step1.png">
<h3>公司LOGO</h3>
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
            <form class="avatar-form" action="/lagouwang/Home/Company/uplodlogo" enctype="multipart/form-data" method="post">
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

                                    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>   
                                </div>
                                <h3>公司全称
                                    <span><?php echo ($info["comname"]); ?></span></h3>
                                     <form id="stepForm" action="/lagouwang/Home/Company/doadd1" method="post" enctype="multipart/form-data"> 
                                <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                                <input type="hidden" name="com_name" value="<?php echo ($info["comname"]); ?>">

                                <h3>公司简称</h3>
                                <!--非必填-->
                                <input type="text" placeholder="请输入公司简称，如:拉勾" value="" name="abbname" id="name" class="valid">
                              
                                <!--非必填改必填-->
                                <!-- 图片上传 -->

                                <!-- 图片上传 -->

                                <h3>公司网址</h3>
                                <input type="text" placeholder="请输入公司网址" value="" name="web" id="web" onblur="webfun()">
                                <span id="weberror" style="color:red"></span>
                                <h3>所在城市</h3>
                                <div>
                                    <select id="s_province" name="s_province" class="form-control" style="width: 110px;float: left;"></select>  
                                    <select id="s_city" name="s_city" class="form-control" style="width: 110px;float: left;"></select>  
                                    <select id="s_county" name="s_county" class="form-control" style="width: 120px;float: left;"></select>
                                </div>
                                <script class="resources library" src="/lagouwang/Public/js/area.js" type="text/javascript"></script>
                                <script type="text/javascript">_init_area();</script>
                                <h3>行业领域</h3>
                                    <div class="panel panel-default">
                                      <div class="panel-body">
                                         <?php if(is_array($aboutdata)): foreach($aboutdata as $k=>$vo): ?><label class="checkbox-inline">
                                          <input type="checkbox" name="about[]" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?>
                                        </label><?php endforeach; endif; ?>
                                         <span id = "about" style="color: red"></span>
                                      </div>
                                    </div>                         
                                <h3>公司规模</h3>
                                    <select name="scale" id="" class=" form-control" style="width: 300px">
                                        <option value="0">少于15人</option>
                                        <option value="1">15-50人</option>
                                        <option value="2">50-150人</option>
                                        <option value="3">150-500人</option>
                                        <option value="4">500-2000人</option>
                                        <option value="5">2000人以上</option>
                                    </select>
                                <h3>融资阶段</h3>
                                    <select name="phase" id="" class=" form-control" style="width: 300px">
                                    <?php if(is_array($phasedata)): foreach($phasedata as $k=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
                                    </select>
                                <h3>一句话介绍</h3>

                                <input type="text" name="introduce" placeholder="一句话概括公司亮点，如公司愿景、领导团队等，限50字" maxlength="50">
                                <span style="display:none;" class="error" id="beError"></span>
                                <input type="submit" value="保存，下一步" id="stepBtn" class="btn_big fr"></form>
                        </dd>
                    </dl>
                </div>
            </div></div>
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
<script type="text/javascript">
// $(document).ready(function(){
$('input[type=checkbox]').click(function(){

if($("input[name='about[]']:checked").length >2)
{
    $(this).removeAttr("checked");
    $("#about").html("");
    $("#about").append("最多选两 个"); 
    }
});
// // 验证网址
//     var web = $("input[name='web']");
//      function webfun (){
//       if(web.val().length!=0){    
//         var reg =  /^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&_~`@[\]\':+!]*([^<>\"\"])*$/;     
//         var r = web.val().match(reg);     
//         if(r==null)    
//             $("#weberror").html("");
//             $("#weberror").append("您输入的网址不合法");     
//         }    
//     };
//     web.focus(function(){
//         $("#weberror").html("");  
//     });

// });
</script>
</html>