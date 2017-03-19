<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
    
    <head>
        <meta content="no-siteapp" http-equiv="Cache-Control">
        <link media="handheld" rel="alternate">
        <!-- end 云适配 -->
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>拉勾网-最专业的互联网招聘平台</title>
        <meta content="23635710066417756375" property="qc:admins">
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <meta content="QIQ6KC1oZ6" name="baidu-site-verification">
        <link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon">
        <link href="/lagouwang/Public/style/css/style.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/style/css/external.min.css" type="text/css" rel="stylesheet">
        <link href="/lagouwang/Public/style/css/popup.css" type="text/css" rel="stylesheet">
        <!-- <script type="text/javascript" src="/lagouwang/Public/js/jquery-1.8.3.min.js"></script> -->
        <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
        <link href="/lagouwang/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/lagouwang/Public/cropper/cropper.min.css" rel="stylesheet">
        <link href="/lagouwang/Public/sitelogo/sitelogo.css" rel="stylesheet">
        <script src="/lagouwang/Public/cropper/cropper.min.js"></script>
        <script src="/lagouwang/Public/sitelogo/sitelogo.js"></script>
        <script src="/lagouwang/Public/bootstrap/js/bootstrap.min.js"></script>
      
        <!-- 配置文件 -->
        <script type="text/javascript" src="/lagouwang/Public/ueditor/ueditor.config.js"></script>
        <!-- 编辑器源码文件 -->
        <script type="text/javascript" src="/lagouwang/Public/ueditor/ueditor.all.js"></script>
        <!-- 实例化编辑器 -->
        <style type="text/css">.show{ display: block; } .hide{ display: none; }</style>
        <!-- 地图 -->
        <link rel="stylesheet" href="/lagouwang/Public/css/main1119.css"/>
        <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=8246bcc06dd36922b8c12e21dea5e1c7"></script>
        <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
        <style type="text/css">
            #mapcontainer{
            width: 560px;
            height: 300px;
            border: 5px solid #D1D3D3;
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
        <div id="body">
            <div id="header">
                <div class="wrapper">
                    <a class="logo" href="index.html">
                        <img width="229" height="43" alt="拉勾招聘-专注互联网招聘" src="/lagouwang/Public/style/images/logo.png"></a>
                    <ul id="navheader" class="reset">
                        <li>
                            <a href="index.html">首页</a></li>
                        <li>
                            <a href="companylist.html">公司</a></li>
                        <li>
                            <a target="_blank" href="">论坛</a></li>
                        <li>
                            <a rel="nofollow" href="jianli.html">我的简历</a></li>
                    </ul>
                    <dl class="collapsible_menu">
                        <dt>
                            <span>jason&nbsp;</span>
                            <span class="red" id="noticeDot-0"></span>
                            <i>
                            </i>
                        </dt>
                        <dd>
                            <a rel="nofollow" href="jianli.html">我的简历</a></dd>
                        <dd>
                            <a href="collections.html">我收藏的职位</a></dd>
                        <dd>
                            <a href="delivery.html">我投递的职位
                                <span id="noticeNo" class="red">(1)</span></a>
                        </dd>
                        <dd class="btm">
                            <a href="subscribe.html">我的订阅</a></dd>
                        <dd>
                            <a href="create.html">我要招人</a></dd>
                        <dd>
                            <a href="accountBind.html">帐号设置</a></dd>
                        <dd class="logout">
                            <a rel="nofollow" href="login.html">退出</a></dd>
                    </dl>
                    <div id="noticeTip">
                        <span class="bot"></span>
                        <span class="top"></span>
                        <a target="_blank" href="delivery.html">
                            <strong>1</strong>条新投递反馈</a>
                        <a class="closeNT" href="javascript:;"></a>
                    </div>
                </div>
            </div>
            <!-- end #header -->
            <div id="container">
                <div class="sidebar">
                    <a class="btn_create" href="create.html">发布新职位</a>
                    <dl class="company_center_aside">
                        <dt>我收到的简历</dt>
                        <dd>
                            <a href="">待处理简历</a></dd>
                        <dd class="current">
                            <a href="canInterviewResumes.html">待定简历</a></dd>
                        <dd>
                            <a href="haveNoticeResumes.html">已通知面试简历</a></dd>
                        <dd>
                            <a href="haveRefuseResumes.html">不合适简历</a></dd>
                        <dd class="btm">
                            <a href="autoFilterResumes.html">自动过滤简历</a></dd>
                    </dl>
                    <dl class="company_center_aside">
                        <dt>我发布的职位</dt>
                        <dd>
                            <a href="positions.html">有效职位</a></dd>
                        <dd>
                            <a href="positions.html">已下线职位</a></dd>
                    </dl>
                </div>
                <!-- end .sidebar -->
                <div class="content">
                    <dl class="company_center_content">
                        <dt>
                            <h1>
                                <em></em>发布新职位</h1>
                        </dt>
                        <dd>
                            <div class="ccc_tr">今日已发布
                                <span>0</span>个职位 还可发布
                                <span>5</span>个职位</div>
                            <form action="/lagouwang/Home/Position/create" method="post" id="jobForm">
                                <table class="btm">
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar">*</span></td>
                                            <td width="85">职位类别</td>
                                            <td>
                                                <div>
                                                    <select id="list1" name="list1" class="form-control" style="width: 120px;float: left;" onchange="doChange(this.value)">
                                                        <?php if(is_array($list1)): foreach($list1 as $k=>$vo): ?><option id="list1<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
                                                    </select>  
                                                    <select id="list2" name="list2" class="form-control" style="width: 120px;float: left;" onchange="doChange2(this.value)">
                                                        <option class="select1">--请选择--</option></select>  
                                                    <select id="list3" name="list3" class="form-control" style="width: 130px;float: left;">
                                                        <option class="select1">--请选择--</option></select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar">*</span></td>
                                            <td>职位名称</td>
                                            <td>
                                                <input type="text" placeholder="请输入职位名称，如：产品经理" value="" name="name" id="positionName"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>所属部门</td>
                                            <td>
                                                <input type="text" placeholder="请输入所属部门" value="" name="depart" id="department"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="btm">
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar">*</span></td>
                                            <td width="85">工作性质</td>
                                            <td>
                                                <select name="prop" id="" class=" form-control" style="width: 300px">
                                                    <option value="0">全职</option>
                                                    <option value="1">兼职</option>
                                                    <option value="2">实习</option></select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar">*</span></td>
                                            <td>月薪范围</td>
                                            <!--<h3><span>(最高月薪不能大于最低月薪的2倍)</span></h3> -->
                                            <td>
                                                <div class="salary_range">
                                                    <div>
                                                        <input type="text" placeholder="最低月薪" value="" id="salaryMin" name="wages1">
                                                        <span>k</span></div>
                                                    <div>
                                                        <input type="text" placeholder="最高月薪" value="" id="salaryMax" name="wages2">
                                                        <span>k</span></div>
                                                    <span>只能输入整数，如：9</span></div>
                                            </td>
                                        </tr>
                                      
                                          </tbody>
                                          </table>
                <table class="btm">
                    <tbody>
                        <tr>
                            <td width="25">
                                <span class="redstar">*</span></td>
                            <td width="85">工作经验</td>
                            <td>
                                <select name="expe" id="" class=" form-control" style="width: 300px">
                                    <?php if(is_array($expedata)): foreach($expedata as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="redstar">*</span></td>
                            <td>学历要求</td>
                            <!--<h3><span>(最高月薪不能大于最低月薪的2倍)</span></h3> -->
                            <td>
                                <select name="degree" id="" class=" form-control" style="width: 300px">
                                    <?php if(is_array($degreedata)): foreach($degreedata as $k=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="btm">
                    <tbody>
                        <tr>
                            <td width="25">
                                <span class="redstar">*</span></td>
                            <td width="85">职位诱惑</td>
                            <td>
                                <input type="text" placeholder="20字描述该职位的吸引力，如：福利待遇、发展前景等" value="" name="advantage" class="input_520" id="positionAdvantage"></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="redstar">*</span></td>
                            <td>职位描述</td>
                            <td>
                                <span class="c9 f14">(建议分条描述工作职责等。请勿输入公司邮箱、联系电话及其他外链，否则将自动删除)</span>
                                 <script id="editor" type="text/plain" name="content" style="width:560px;height:200px;"></script>
                                
                            </td>
                        </tr>
                         <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="redstar">*</span></td>
                            <td>工作地址</td>
                            <td>
                                <div>
                                    <select id="s_province" name="s_province" class="form-control" style="width: 110px;float: left;"></select>  
                                    <select id="s_city" name="s_city" class="form-control" style="width: 110px;float: left;"></select>  
                                    <select id="s_county" name="s_county" class="form-control" style="width: 120px;float: left;"></select>
                                    <script class="resources library" src="/lagouwang/Public/js/area.js" type="text/javascript"></script>
                                    <script type="text/javascript">_init_area();</script>
                                </div>
                                <input type="text" placeholder="请输入详细的工作地址" value="" name="address" class="input_520" id="address">
                                <input type="hidden" name="mapaddress" value="">
                                <!-- <input type="hidden" value="" name="positionLng" id="lng"> -->
                                <!-- <input type="hidden" value="" name="positionLat" id="lat"> -->
                                <div class="work_place f14">详细地址会显示在地图中</div>
                                <input id='bt1' type="button"value="选择地址" style="display: block"/>
                                <!-- <input id='bt2' type="button" class="button" value="取消选择"/> -->
                                <input type="button"value="重新选择" id="clearMarker" style="display: none" />
                                <div id="mapcontainer">
                                </div>
                                <div id="tip"style="display: none;"></div>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <span class="redstar">*</span></td>
                            <td>接受简历邮箱</td>
                            <td>
                                <input type="text" placeholder="接受简历邮箱" value="" name="email" id="department"></td>
                        </tr>
                        <td width="25"></td>
                        <td colspan="2">
                            <input type="submit" value="预览" id="jobPreview" class="btn_32">
                            <input type="submit" value="发布" id="formSubmit" class="btn_32"></td>
                        </tr>
                    </tbody>
                </table>
                </form>
                </dd>
                </dl>
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
    </body>
    <script type="text/javascript">
        function doChange(value) { 
            var list2 = document.getElementById("list2");
            $.ajax({
                type: 'post',
                //请求方式GET
                url: '/lagouwang/Home/Position/displayul',
                //ajax请求地址
                data: 'id=' + value,
                //请求传递的参数
                dataType: 'json',
                //预期服务器返回的数据类型
                async: true,
                //是否异步
                success: function(data) {
                    $(".select1").attr("disabled", true);
                    list2.length = 1; //截取下拉框中的下拉项长度为1
                    //遍历对应的城市信息
                    for (var i = 0; i < data.length; i++) {
                        list2.add(new Option(data[i].name, data[i].id));
                    }

                }

            });
        }
        function doChange2(value) {
            var list3 = document.getElementById("list3");
            $.ajax({
                type: 'post',
                //请求方式GET
                url: '/lagouwang/Home/Position/showli',
                //ajax请求地址
                data: 'id=' + value,
                //请求传递的参数
                dataType: 'json',
                //预期服务器返回的数据类型
                async: true,
                //是否异步
                success: function(data) {
                    list3.length = 1; //截取下拉框中的下拉项长度为1
                    //遍历对应的城市信息
                    for (var i = 0; i < data.length; i++) {
                        list3.add(new Option(data[i].name, data[i].id));
                    }
                }

            });
        }
 var ue = UE.getEditor('editor');
</script>
<script type="text/javascript">
    //实例化地图
    var geolocation;
    var clickListener, map = new AMap.Map('mapcontainer', {
        resizeEnable: true,
        // center: [116.39, 39.9]
    });  

    //浏览器定位
     map.plugin('AMap.Geolocation', function() {
        geolocation = new AMap.Geolocation({
            enableHighAccuracy: true,//是否使用高精度定位，默认:true
            timeout: 10000,          //超过10秒后停止定位，默认：无穷大
            buttonOffset: new AMap.Pixel(10, 20),//定位按钮与设置的停靠位置的偏移量，默认：Pixel(10, 20)
            zoomToAccuracy: true,      //定位成功后调整地图视野范围使定位位置及精度范围视野内可见，默认：false
            buttonPosition:'RB'
        });
        map.addControl(geolocation);
        geolocation.getCurrentPosition();
        AMap.event.addListener(geolocation, 'complete', onComplete);//返回定位信息
        AMap.event.addListener(geolocation, 'error', onError);      //返回定位出错信息
    });
    //解析定位结果
    function onComplete(data) {
        var str=['定位成功'];
        str.push('经度：' + data.position.getLng());
        str.push('纬度：' + data.position.getLat());
        if(data.accuracy){
             str.push('精度：' + data.accuracy + ' 米');
        }//如为IP精确定位结果则没有精度信息
        str.push('是否经过偏移：' + (data.isConverted ? '是' : '否'));
        // document.getElementById('tip').innerHTML = str.join('<br>');
    }
    //解析定位错误信息
    function onError(data) {
        document.getElementById('tip').innerHTML = '定位失败';
    }
    //定位结束
    
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
            document.getElementById('bt1').style.display="none";

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
        $address = $("#s_province").val()+$("#s_city").val()+$("#s_county").val()+$("#address").val();
        //构建信息窗体中显示的内容
        var info = [];
        info.push("地址 :"+$address);
        infoWindow = new AMap.InfoWindow({
            content: info.join("<br/>")  //使用默认信息窗体框样式，显示信息内容
        });
        $("input[name = 'mapaddress']").val(center);
        infoWindow.open(map,center);
    }
     
    // var button3 = document.getElementById('clearMarker');
    // var listener2 = AMap.event.addDomListener(button2, 'click', remove);//给div绑定单击事件    
</script>
</html>