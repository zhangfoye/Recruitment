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
         
   <link rel="canonical" href="http://www.lagou.com/zhaopin/PHP/" /> 
   <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/page.css" /> 
   <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/mcustomscrollbar_ac2fb8b_10.css" /> 
   <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/layout_19d0413_10.css" /> 
   <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main_86662c9.css" /> 
   <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/widgets_ea16201_10.css" /> 
   <link rel="stylesheet" type="text/css" href="/lagouwang/Public/css/main.html_aio_0a9a6a1.css" /> 
   <!-- 页面主体START --> 
   <div id="content-container"> 
    <div class="search-wrapper  "> 
     <div id="searchBar" class="search-bar"> 
      <div class="tab-wrapper"> 
       <a id="tab_pos" class="active" rel="nofollow" href="javascript:;">职位 ( <span>500+</span> ) </a> 
       <a id="tab_comp" class="disabled" rel="nofollow" href="javascript:;">公司 ( <span>0</span> ) </a> 
      </div> 
      <div class="input-wrapper" data-lg-tj-track-code="search_search" data-lg-tj-track-type="1"> 
		<form action="/lagouwang/Home/List/index" method="post">
       <div class="keyword-wrapper"> 
        <input type="text"  name="city" id="keyword" autocomplete="off" maxlength="64" placeholder="搜索职位"  /> 
		<input type="submit" value="搜索">
		</form>
	   </div> 
       
      
	  </div> 
      <div class="r_search_tit" data-lg-tj-track-code="search_relevant" data-lg-tj-track-type="1"> 
       <span>相关搜索：</span> 
       <ul class="r_search_con"> 
        <li class="r_search"><a rel="nofollow" class="r_search_a" href="//www.lagou.com/jobs/list_thinkphp?oquery=PHP&amp;fromSearch=true&amp;labelWords=relative">thinkphp</a></li> 
        <li class="r_search"><a rel="nofollow" class="r_search_a" href="//www.lagou.com/jobs/list_yii2?oquery=PHP&amp;fromSearch=true&amp;labelWords=relative">yii2</a></li> 
        <li class="r_search"><a rel="nofollow" class="r_search_a" href="//www.lagou.com/jobs/list_laravel?oquery=PHP&amp;fromSearch=true&amp;labelWords=relative">laravel</a></li> 
        <li class="r_search"><a rel="nofollow" class="r_search_a" href="//www.lagou.com/jobs/list_运营总监php?oquery=PHP&amp;fromSearch=true&amp;labelWords=relative">运营总监php</a></li> 
        <li class="r_search"><a rel="nofollow" class="r_search_a" href="//www.lagou.com/jobs/list_php主管?oquery=PHP&amp;fromSearch=true&amp;labelWords=relative">php主管</a></li> 
        <li class="r_search"><a rel="nofollow" class="r_search_a" href="//www.lagou.com/jobs/list_php经理?oquery=PHP&amp;fromSearch=true&amp;labelWords=relative">php经理</a></li> 
        <li class="r_search"><a rel="nofollow" class="r_search_a" href="//www.lagou.com/jobs/list_php架构师?oquery=PHP&amp;fromSearch=true&amp;labelWords=relative">php架构师</a></li> 
        <li class="r_search"><a rel="nofollow" class="r_search_a" href="//www.lagou.com/jobs/list_php后台?oquery=PHP&amp;fromSearch=true&amp;labelWords=relative">php后台</a></li> 
        <li class="r_search"><a rel="nofollow" class="r_search_a" href="//www.lagou.com/jobs/list_php后端?oquery=PHP&amp;fromSearch=true&amp;labelWords=relative">php后端</a></li> 
       </ul> 
      </div> 
     </div> 
    </div> 
    <!-- 搜索输入框模块 --> 
    <div id="main_container"> 
     <!-- 左侧 --> 
     <div class="content_left"> 
      <!-- 依次填入左侧各个模块 --> 
      <!--当前为公司标签时，隐藏筛选条件栏--> 
      <div id="positionHead" class=""> 
       <!-- 公司卡片 --> 
       <!-- 筛选 --> 
       <ul id="filterBox" class="filter-wrapper"> 
        <input id="filterOption" type="hidden" value="1" /> 
        <li class="li-taller brief dn" id="filterBrief"> <span class="title">工作地点：</span> <a rel="nofollow" href="javascript:;" class="active">全国</a> <span class="title">工作经验：</span> <a rel="nofollow" href="javascript:;" class="active">不限</a> <span class="title">学历要求：</span> <a rel="nofollow" href="javascript:;" class="active">不限</a> <span class="title">融资阶段：</span> <a rel="nofollow" href="javascript:;" class="active">不限</a> <span class="title">行业领域：</span> <a rel="nofollow" href="javascript:;" class="active">不限</a> </li> 
        <div class="details" id="filterCollapse"> 
				<li class="multi-chosen">
                    <span class="title">
                        工作地点：
                    </span>
                    <a rel="nofollow" data-lg-tj-id="8t00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">
                        不限
                    </a>
                    <?php if(is_array($addr)): foreach($addr as $key=>$addr): ?><a href="javascript:searchaddr('<?php echo ($addr["name"]); ?>');" rel="nofollow" data-lg-tj-id="8t00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">
                            <?php echo ($addr["name"]); ?>
                        </a><?php endforeach; endif; ?>
                </li>
                <li class="multi-chosen">
                    <span class="title">
                        工作经验：
                    </span>
                    <a rel="nofollow" data-lg-tj-id="8t00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">
                        不限
                    </a>
                    <?php if(is_array($exper)): foreach($exper as $key=>$exper): ?><a href="javascript:searchexper('<?php echo ($exper["name"]); ?>');" rel="nofollow" data-lg-tj-id="8t00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">
                            <?php echo ($exper["name"]); ?>
                        </a><?php endforeach; endif; ?>
                </li>
                <li class="multi-chosen">
                    <span class="title">
                        学历要求：
                    </span>
                    <a rel="nofollow" data-lg-tj-id="8t00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">
                        不限
                    </a>
                    <?php if(is_array($major)): foreach($major as $key=>$major): ?><a href="javascript:searchmajor('<?php echo ($major["name"]); ?>');" rel="nofollow" data-lg-tj-id="8t00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">
                            <?php echo ($major["name"]); ?>
                        </a><?php endforeach; endif; ?>
                </li>
                <li class="multi-chosen">
                    <span class="title">
                        融资阶段：
                    </span>
                    <a rel="nofollow" data-lg-tj-id="8t00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">
                        不限
                    </a>
                    <?php if(is_array($money)): foreach($money as $key=>$money): ?><a href="javascript:searchmoney('<?php echo ($money["name"]); ?>');" rel="nofollow" data-lg-tj-id="8t00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">
                            <?php echo ($money["name"]); ?>
                        </a><?php endforeach; endif; ?>
                </li>
                <li class="multi-chosen">
                    <span class="title">
                        行业领域：
                    </span>
                    <a rel="nofollow" data-lg-tj-id="8t00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">
                        不限
                    </a>
                    <?php if(is_array($hy)): foreach($hy as $key=>$hy): ?><a href="javascript:searchhy('<?php echo ($hy["name"]); ?>');" rel="nofollow" data-lg-tj-id="8t00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">
                            <?php echo ($hy["name"]); ?>
                        </a><?php endforeach; endif; ?>
                </li>
        </div> 
       </ul> 
       <div class="btn-collapse-wrapper"> 
        <a rel="nofollow" class="btn-collapse " title="点击收起筛选项" href="javascript:"></a> 
       </div> 
       <!-- 排序 --> 
       <ul class="order" id="order"> 
        <li class="wrapper"> 
         <div class="item order"> 
          <span class="title">排序方式：</span> 
          <a rel="nofollow"  class="active" data-lg-tj-id="8x00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">默认</a> 
          <a rel="nofollow" href="#" data-lg-tj-id="8x00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">最新</a> 
         </div> 
         <div class="item order"> 
		<form action="/lagouwang/Home/List/index"  method="get">
			
          <span class="title">工作性质：</span> 
          
          <select name="prop" style="WIDTH: 120px;line-height:100px" >
		  
                        <option value="">
                            不限
                        </option>
                        <option value="0">
                            全职
                        </option>
                        <option value="1">
                            兼职
                        </option>
                        <option value="2">
                            实习
                        </option>
            <select>
          <button type="submit" style="background-color:#00A57F;width:43px;height:27px;color:#FCFCFC">搜索<tton>
		
		 </form>
         </div> 
		 
         <div class="item page"> 
		 
          <!-- <a class="prev_disabled prev ban" rel="nofollow" href="javascript:;"> &lt; </a>  -->
          <!-- <a class="next " href="//www.lagou.com/zhaopin/PHP/2 

/"> &gt; </a>  -->
          <!-- <div class="page-number">  -->
           <!-- <span class="curNum">1</span> /  -->
           <!-- <span class="span totalNum">30</span>  -->
          <!-- </div>  -->
         </div>
       </ul> 

       <!--活动位--> 
      </div> 
      <!-- 公司列表 --> 
      <div class="company_list dn" id="company_list"> 
       <ul class="item_con_list"> 
       </ul> 
       <div class="recommend-comp-city hide-recom dn" style="display: block;"> 
        <a rel="nofollow" href="javascript:;" class="expansion">展开<i></i></a> 
        <div class="r_company_tit">
         推荐公司：
        </div> 
        <ul class="r_company_con"> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/9251.html">美柚</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/1373.html">喜马拉雅fm</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/14229.html">微盟</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/49369.html">淘粉吧</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/107435.html">熊猫TV</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/2768.html">易到用车</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/40738.html">小红唇</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/97631.html">汽车超人</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/109.html">蚂蜂窝</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/36996.html">三好网</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/4760.html">唯品会</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/1686.html">爱奇艺</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/23014.html">快法务</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/1575.html">百度招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/81491.html">蚂蚁金服</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/62.html">今日头条</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/2474.html">滴滴</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/20909.html">AcFun</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/23489.html">点点客</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/59251.html">映客</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/3712.html">京东</a></li> 
        </ul> 
        <div class="r_city_tit">
         推荐城市：
        </div> 
        <ul class="r_city_con"> 
         <li class="r_search_item"><a href="https://www.lagou.com/beijing/">北京找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/beijing/">北京招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/shanghai/">上海找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/shanghai/">上海招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/hangzhou/">杭州找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/hangzhou/">杭州招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/guangzhou/">广州找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/guangzhou/">广州招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/shenzhen/">深圳找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/shenzhen/">深圳招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/chengdu/">成都找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/chengdu/">成都招聘</a></li> 
        </ul> 
       </div> 
       <!-- 分页 --> 
       <div class="item_con_pager"></div> 
       <input type="hidden" name="abtCode" value="dm-csearch-useSalarySorter|0" /> 
      </div> 
      <!-- 职位列表 --> 
      <div class="s_position_list " id="s_position_list"> 
       <!-- 精确搜索某个城市的职位为空时 --> 
       <!-- 分站城市 --> 
       <ul class="item_con_list"> 
	   <?php if(is_array($list)): foreach($list as $key=>$list): ?><li class="con_list_item default_list" data-index="0" data-positionid="2403132" data-salary="25k-30k" data-company="懂球帝" data-positionname="PHP高级开发工程师-北京-00044" data-companyid="22684" data-hrid="263946"> 
         <div class="list_item_top"> 
          <div class="position"> 
           <div class="p_top"> 
            <a class="position_link" href="/lagouwang/Home/PersonCenter/position_detail/uid/<?php echo ($list["id"]); ?>" target="_blank" data-index="0" data-lg-tj-id="8E00" data-lg-tj-no="0101"data-lg-tj-cid="2403132" data-lg-tj-abt="dm-csearch-useSalarySorter|0"> 
			<h2><?php echo ($list["name"]); ?>-<?php echo ($list["city"]); ?></h2></a> 
            <span class="format-time"><?php echo (date("y-m-d",$list["addtime"])); ?></span> 
           </div> 
           <div class="p_bot"> 
            <div class="li_b_l"> 
             <span class="money"><?php echo ($list["a1"]); ?>k-<?php echo ($list["a2"]); ?>k</span> 
             <!--<i></i>--><?php echo ($list["fexpe"]); ?> / <?php echo ($list["fdegree"]); ?> 
            </div> 
           </div> 
          </div> 
          <div class="company"> 
           <div class="company_name"> 
            <a href="//www.lagou.com/gongsi/22684.html" target="_blank" data-lg-tj-id="8F00" data-lg-tj-no="
                                                                                                0101
                                                                                        " data-lg-tj-cid="22684" data-lg-tj-abt="dm-csearch-useSalarySorter|0"><?php echo ($list["comname"]); ?></a> 
            <!--  <div class="chat_me" data-lg-tj-id="1WI0" data-lg-tj-no="
                                                                                                0101
                                                                                        " data-lg-tj-cid="22684" data-lg-tj-track-code="search_code" data-lg-tj-track-type="1"></div> --> 
           </div> 
           <div class="industry">
              “<?php echo ($list["advantage"]); ?>”
           </div> 
          </div> 
          <div class="com_logo"> 
           <a href="//www.lagou.com/gongsi/22684.html" target="_blank" data-lg-tj-id="8G00" data-lg-tj-no="
                                                                                                0101
                                                                                        " data-lg-tj-cid="22684" data-lg-tj-abt="dm-csearch-useSalarySorter|0"><img src="/lagouwang/Public/Upload/com_logo/<?php echo ($list["picname"]); ?>" alt="<?php echo ($list["name"]); ?>" width="60" height="60" /></a> 
          </div> 
         </div> 
         <div class="list_item_bot"> 
        
          <div class="li_b_r">
          
          </div> 
         </div> </li><?php endforeach; endif; ?>
       </ul> 
       <div class="recommend-comp-city hide-recom dn" style="display: block;"> 
        <a rel="nofollow" href="javascript:;" class="expansion">展开<i></i></a> 
        <div class="r_company_tit">
         推荐公司：
        </div> 
        <ul class="r_company_con"> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/9251.html">美柚</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/1373.html">喜马拉雅fm</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/14229.html">微盟</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/49369.html">淘粉吧</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/107435.html">熊猫TV</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/2768.html">易到用车</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/40738.html">小红唇</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/97631.html">汽车超人</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/109.html">蚂蜂窝</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/36996.html">三好网</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/4760.html">唯品会</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/1686.html">爱奇艺</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/23014.html">快法务</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/1575.html">百度招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/81491.html">蚂蚁金服</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/62.html">今日头条</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/2474.html">滴滴</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/20909.html">AcFun</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/23489.html">点点客</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/59251.html">映客</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/gongsi/3712.html">京东</a></li> 
        </ul> 
        <div class="r_city_tit">
         推荐城市：
        </div> 
        <ul class="r_city_con"> 
         <li class="r_search_item"><a href="https://www.lagou.com/beijing/">北京找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/beijing/">北京招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/shanghai/">上海找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/shanghai/">上海招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/hangzhou/">杭州找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/hangzhou/">杭州招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/guangzhou/">广州找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/guangzhou/">广州招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/shenzhen/">深圳找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/shenzhen/">深圳招聘</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/chengdu/">成都找工作</a></li> 
         <li class="r_search_item"><a href="https://www.lagou.com/chengdu/">成都招聘</a></li> 
        </ul> 
       </div> 
       <!-- 分页 --> 
       <div class="item_con_pager"> 
        <div class="jogger style pagination"> 
         <!-- <!-- 上一页处理 -->  
         <!-- <a  class="page_no pager_prev_disabled" data-index="">上一页</a>  -->
         <!-- <!-- 如果前面页数过多,显示"..." --> 
         <!-- <!-- 显示当前页附近的页 -->  
         <!-- <!-- 当前页号不需要设置链接 -->  
         <!-- <a  class="page_no pager_is_current" data-index="1">1</a>  -->
         <!-- <!-- 当前页号不需要设置链接 --> 
         <!-- <a  class="page_no" data-index="2">2</a>  -->
         <!-- <!-- 当前页号不需要设置链接 --> 
         <!-- <a  class="page_no" data-index="3">3</a>  -->
         <!-- <!-- 如果后面页数过多,显示"..." --> 
         <!-- <a  data-index="30">30</a>  -->
         <!-- <!-- 下一页处理 -->  
         <!-- <a  class="page_no" data-index="2">下一页</a>  -->
        <?php echo ($pageinfo); ?>
		</div> 
		
       </div> 
       <input id="isSEO" type="hidden" value="true" /> 
       <input id="pageNoSEO" type="hidden" value="1" /> 
       <input id="pageSizeSEO" type="hidden" value="15" /> 
       <input id="totalPageCountSEO" type="hidden" value="2051" /> 
       <input id="resultLengthSEO" type="hidden" value="15" /> 
       <input type="hidden" name="abtCode" value="dm-csearch-useSalarySorter|0" /> 
      </div> 
      <!-- 数据为空 template --> 
     </div> 
     <!-- 右侧 --> 
     <!-- 依次填入右侧各个模块 --> 
     <div class="content_right"> 
      <!-- 最近浏览 --> 
      <div class="history dn" data-lg-tj-track-code="search_history"> 
       <h2 class="title">最近浏览过</h2> 
       <ul class="history_position_list" id="history_position_list"> 
       </ul> 
      </div> 
      <!-- 广告位  --> 
      <div class="lgad_container" data-lg-tj-track-code="search_banner" data-lg-tj-track-type="1"> 
       <!--qq群广告位--> 
       <div key="SPACE_KEY_ZHIWEISOUSUOYE_QQQUN" keywordselector="#keyword" style="margin-bottom: 15px;"></div> 
       <!--广告位--> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI1" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI2" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI3" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI4" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI5" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI6" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI7" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI8" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI9" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI10" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div> 
       <div key="ZHIWEISOUSUOYE_GUANGGAOWEI11" class="lgad_jsonp ad_exposure" style="margin-bottom: 15px;"></div>
      </div> 
      <!-- 待验证 广告位 --> 
     </div> 
    </div> 
   </div> 
   <!-- 页面主体END --> 
   <!-- footer --> 
   <a id="backtop" title="回到顶部" rel="nofollow"></a> 
   <form class="searchform" name="myform1" action="/lagouwang/Home/List/index" method="get">
						<!-- 保持条件 -->
					 	<?php if(!empty($addr1)): ?><input type='hidden' name='addr' value="<?php echo ($addr1); ?>"/><?php endif; ?>
					 	<?php if(!empty($exper1)): ?><input type='hidden' name='exper' value="<?php echo ($exper1); ?>"/><?php endif; ?>
						<?php if(!empty($major1)): ?><input type='hidden' name='major' value="<?php echo ($major1); ?>"/><?php endif; ?>
						<?php if(!empty($money1)): ?><input type='hidden' name='money' value="<?php echo ($money1); ?>"/><?php endif; ?>
						<?php if(!empty($hy1)): ?><input type='hidden' name='hy' value="<?php echo ($hy1); ?>"/><?php endif; ?>
					</form>
	<script src="/lagouwang/Public/js/jquery-1.8.2.min.js"></script>
   <script type="text/javascript">
   function dosubmit(){
		var b = $("#keyword").val();
		alert(b);
		  $.ajax({
                type:"post",
                url:"/lagouwang/Home/List/index",
                data:"city="+b,
				datatype:"json",
               
            });
            
				
	}
		function searchaddr(a){
		var b = $(".searchform input[name='addr']").val();
		if (typeof(b) == "undefined"){
			$(".searchform").append("<input type='hidden' name='addr' value='"+a+"'/>");
		}else{
			$(".searchform input[name='addr']").replaceWith("<input type='hidden' name='addr' value='"+a+"'/>");  
		}
		$(".searchform").submit();
		// $(".item"+value).addClass(" filter-active-all-ab ");
		
	}
		function searchexper(a){
		var b = $(".searchform input[name='exper']").val();
		if (typeof(b) == "undefined"){
			$(".searchform").append("<input type='hidden' name='exper' value='"+a+"'/>");
		}else{
			$(".searchform input[name='exper']").replaceWith("<input type='hidden' name='exper' value='"+a+"'/>");  
		}
		$(".searchform").submit();
		// $(".item"+value).addClass(" filter-active-all-ab ");
		
	}
		function searchmajor(a){
		var b = $(".searchform input[name='major']").val();
		if (typeof(b) == "undefined"){
			$(".searchform").append("<input type='hidden' name='major' value='"+a+"'/>");
		}else{
			$(".searchform input[name='major']").replaceWith("<input type='hidden' name='major' value='"+a+"'/>");  
		}
		$(".searchform").submit();
		// $(".item"+value).addClass(" filter-active-all-ab ");
		
	}
	function searchmoney(a){
		var b = $(".searchform input[name='money']").val();
		if (typeof(b) == "undefined"){
			$(".searchform").append("<input type='hidden' name='money' value='"+a+"'/>");
		}else{
			$(".searchform input[name='money']").replaceWith("<input type='hidden' name='money' value='"+a+"'/>");  
		}
		$(".searchform").submit();
		// $(".item"+value).addClass(" filter-active-all-ab ");
		
	}
	function searchhy(a){
		var b = $(".searchform input[name='hy']").val();
		if (typeof(b) == "undefined"){
			$(".searchform").append("<input type='hidden' name='hy' value='"+a+"'/>");
		}else{
			$(".searchform input[name='hy']").replaceWith("<input type='hidden' name='hy' value='"+a+"'/>");  
		}
		$(".searchform").submit();
		// $(".item"+value).addClass(" filter-active-all-ab ");
		
	}
	<!-- function dosubmit(){ -->
		<!-- var b = $("#keyword").val(); -->
		<!-- alert(b); -->
		  <!-- $.ajax({ -->
                <!-- type:"post", -->
                <!-- url:"/lagouwang/Home/List/index", -->
                <!-- data:"city="+b, -->
				<!-- datatype:"json", -->
               
            <!-- }); -->
            
				
	<!-- } -->
	<!-- function dosubmit(){ -->
		<!-- var b = $("#keyword").val(); -->
		<!-- $.ajax({ -->
			<!-- type:"post", -->
			<!-- url:"/lagouwang/Home/List/index", -->
			<!-- data:"city="+b, -->
		<!-- }); -->
	<!-- } -->
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