<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>鲁班人－全国最大的土木工程业务一站式交易平台</title>
	<meta name="Keywords" content="" /> 
    <meta name="Description" content="" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<link rel="stylesheet" type="text/css" media="all" href="css/menu1027.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/index.css" />
	<!--[if IE 8]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<!--<script type="text/javascript" src="js/html5media.min.js"></script>--><!--兼容IE浏览器js，系统必须安装flash-->
	<!--[if IE]> <script src="http://html5media.googlecode.com/svn/trunk/src/html5media.min.js"></script><![endif]-->
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- Chang URLs to wherever Video.js files will be hosted -->
    <link href="videojs/video-js.css" rel="stylesheet" type="text/css">
    <!-- video.js must be in the <head> for older IEs to work. -->
    <script src="videojs/video.js"></script>
    <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
    <script>
    videojs.options.flash.swf = "videojs/video-js.swf";
    </script>
    <!--视频切换js-->
    <script>
       function playlist(a){
       var MV=document.getElementById("myVideo");
       var MV1=document.getElementById("myVideo1");
       MV.src=a.id+'.mp4';
       MV1.src=a.id+'.mp4';
       }
    </script>
    <!--视频切换js end-->
    <!--banner轮播js控制-->
    <script type="text/javascript">
       $(document).ready(function(){

	   $(".prev,.next").hover(function(){
	   $(this).stop(true,false).fadeTo("show",0.9);
	   },function(){
	   $(this).stop(true,false).fadeTo("show",0.4);
	   });
	
	    $(".banner-box").slide({
		titCell:".hd ul",
		mainCell:".bd ul",
		effect:"fold",
		interTime:3500,
		delayTime:500,
		autoPlay:true,
		autoPage:true, 
		trigger:"click" 
	    });

        });
     </script>
     <!--banner轮播js控制 end-->
	</head>
	<body>
	  
		<!--最顶部菜单-->
		<div class="topmenu">
		  <div class="topmenu-main">
			<div class="moveright">
			    <li><a class="red" href="building.html">视频与资料</a></li>
			    <li>请您[<a class="red" href="building.html">登录</a>] 免费[<a class="red" href="building.html">注册</a>]</li>
			    <li><a href="building.html">帮助中心</a></li>
			    <li><a href="building.html">网站地图</a></li>
			    <li><a href="building.html">关于我们</a></li>
			</div>
		 </div>
	   </div>
	   <!--最顶部菜单end-->
	   
	   <!--主菜单-->
	   <div class="menu">
	   	 <div class="menu-list">
	   	   <div class="logo"><img src="img/logo.png"></div>
	   	   <div class="mr">
	   	      <a href="building.html"><li>商品介绍</li></a>
	   	      <div class="ml"></div>
	          <a href="building.html"><li>交易频道</li></a>
	          <div class="ml"></div>
		      <a href="building.html"><li>物流服务</li></a>
		      <div class="ml"></div>
		      <a href="building.html"><li>行业资讯服务</li></a>
		      <div class="ml"></div>
		      <a href="building.html"><li>意向需求</li></a>
	       </div>
	     </div>
	   </div>
	   <!--主菜单end-->
	   
	   <!--banner-->
	   <div class="banner-main">
	      <div class="banner-box">
	      	<div class="bd">
        <ul>          	    
            <li style="background:#F3E5D8;">
                <div class="m-width">
                <a href="javascript:void(0);"><img src="img/index/banner.png" /></a>
                </div>
            </li>
            <li style="background:#B01415">
                <div class="m-width">
                <a href="javascript:void(0);"><img src="img/index/banner.jpg" /></a>
                </div>
            </li>
            <li style="background:#C49803;">
                <div class="m-width">
                <a href="javascript:void(0);"><img src="img/index/banner.png" /></a>
                </div>
            </li>
            <li style="background:#FDFDF5">
                <div class="m-width">
                <a href="javascript:void(0);"><img src="img/index/banner.png" /></a>
                </div>
            </li>  
         
        </ul>
    </div>
    <div class="banner-btn">
        <!--<a class="prev" href="javascript:void(0);"></a>
        <a class="next" href="javascript:void(0);"></a>-->
        <div class="hd"><ul></ul></div>
    </div>
	      	
	      </div>
	      <!--video.js播放器列表 -->
	      <div class="movie-play">
	      	  <div class="movie-list">
	      	  	<a href="#" onClick="playlist(this)" id="videos/lbrdspt">
	      	  		<img src="img/index/zhuce.png">
	      	  		<div class="info">
	      	  			<div class="title">鲁班人电商平台</div>
	      	  			<!--<div class="description">这里是注册流程介绍视频</div>-->
	      	  		</div>
	      	  	</a>
	      	  	<a href="#" onClick="playlist(this)" id="videos/hzqy">
	      	  		<img src="img/index/zhuce.png">
	      	  		<div class="info">
	      	  			<div class="title">战略合作企业</div>
	      	  			<!--<div class="description">这里是注册流程介绍视频</div>-->
	      	  		</div>
	      	  	</a>
	      	  	<a href="#" onClick="playlist(this)" id="videos/lbrxwfbh">
	      	  		<img src="img/index/zhuce.png">
	      	  		<div class="info">
	      	  			<div class="title">新闻发布会</div>
	      	  			<!--<div class="description">这里是注册流程介绍视频</div>-->
	      	  		</div>
	      	  	</a>
	      	  	<a href="#" onClick="playlist(this)" id="videos/yhfsjit">
	      	  		<img src="img/index/zhuce.png">
	      	  		<div class="info">
	      	  			<div class="title">宇虹防水集团</div>
	      	  			<!--<div class="description">这里是注册流程介绍视频</div>-->
	      	  		</div>
	      	  	</a>
	      	  	<a href="#" onClick="playlist(this)" id="videos/zhuce">
	      	  		<img src="img/index/zhuce.png">
	      	  		<div class="info">
	      	  			<div class="title">注册流程</div>
	      	  			<!--<div class="description">这里是注册流程介绍视频</div>-->
	      	  		</div>
	      	  	</a>
	      	  	<a href="#" onClick="playlist(this)" id="videos/shebei">
	      	  		<img src="img/index/shebei.png">
	      	  		<div class="info">
	      	  			<div class="title">设备交易流程</div>
	      	  			<!--<div class="description">这里是设备设施交易流程介绍视频</div>-->
	      	  		</div>
	      	  	</a>
	      	  	<a href="#" onClick="playlist(this)" id="videos/jiancai">
	      	  		<img src="img/index/jiaoyi.png">
	      	  		<div class="info">
	      	  			<div class="title">建材交易流程</div>
	      	  			<!--<div class="description">这里是建材交易流程介绍视频</div>-->
	      	  		</div>
	      	  	</a>
	      	  	<a href="#" onClick="playlist(this)" id="videos/zhifu">
	      	  		<img src="img/index/zhifu.png">
	      	  		<div class="info">
	      	  			<div class="title">支付流程</div>
	      	  			<!--<div class="description">这里是支付流程介绍视频</div>-->
	      	  		</div>
	      	  	</a>	      	  	
	      	  </div>
	      	  <!--video.js播放器列表end -->
              <!--video.js播放器 -->
	          <div class="movie">
	          	<video id="myVideo" class="video-js vjs-default-skin" controls preload="none" width="450" height="322"
                   poster="http://video-js.zencoder.com/oceans-clip.png" src="videos/zhuce.mp4">
                   <!--[if lte IE 8]> 
                   <noscript>
                   <style>.html5-wrappers{display:none!important;}</style>
                   <div class="ie-noscript-warning">您的浏览器禁用了脚本，请<a href="">查看这里</a>来启用脚本!或者<a href="/?noscript=1">继续访问</a>.
                   </div>
                   </noscript>
                   <![endif]-->
                   <source id="myVideo1" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' src="videos/zhuce.mp4" />
                   <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                   <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
              </video>
              <!--video.js播放器 end-->

              </div>
	      </div>
	   </div>
	   <!--banner end-->
<div class="main">	 
	<!--banner下面菜单-->
	<div class="sub-menu">
		<a href="building.html">
		<li>
			<img src="img/index/submenu-1.png">
			<p>供应商发起团购</p>
		</li>
		</a>
		<a href="building.html">
		<li>
			<img src="img/index/submenu-2.png">
			<p>买家发起团购</p>
		</li>
		</a>
		<a href="building.html">
		<li>
			<img src="img/index/submenu-3.png">
			<p>平台发起团购</p>
		</li>
		</a>
		<a href="building.html">
		<li>
			<img src="img/index/submenu-4.png">
			<p>建材综合信息</p>
		</li>
		</a>
		<a href="building.html">
		<li>
			<img src="img/index/submenu-5.png">
			<p>设备设施综合信息</p>
		</li>
		</a>
		<a href="building.html">
		<li>
			<img src="img/index/submenu-6.png">
			<p>物流配送</p>
		</li>
		</a>
	</div>
	<!--banner下面菜单end-->
	
	<!--省市信息-->
	<div class="area">
		<a href="building.html">
		<div class="area-map"><img src="img/index/area-map.png"></div>
		<div class="province">
			<div class="area-province">
				<div class="cat-name">全国各省</div>
				<div class="province-list">
					<li class="r">河北省</li>
					<li>山东省</li>
					<li>辽宁省</li>
					<li class="r">黑龙江</li>
					<li>吉林省</li>
					<li>甘肃省</li>
					<li>青海省</li>
					<li>河南省</li>
					<li>江苏省</li>
					<li>湖北省</li>
					<li>湖南省</li>
					<li>江西省</li>
					<li class="r">浙江省</li>
					<li>广东省</li>
					<li>云南省</li>
					<li>福建省</li>
					<li>海南省</li>
					<li class="r">山西省</li>
					<li>四川省</li>
					<li>陕西省</li>
					<li>贵州省</li>
					<li>安徽省</li>					
				</div>
			</div>
			<div class="area-province-1">
				<div class="cat-name-1">直辖市</div>
				<div class="province-list">
					<li class="r">重庆市</li>
					<li class="r">北京市</li>
					<li>上海市</li>
					<li>天津市</li>					
				</div>
			</div>
			<div class="area-province-1">
				<div class="cat-name-1">自治区</div>
				<div class="province-list">
					<li>广西壮族自治区</li>
					<li>内蒙古自治区</li>
					<li>西藏自治区</li>
					<li>新疆维吾尔自治区</li>	
					<li>宁夏回族自治区</li>	
				</div>
			</div>
			<div class="area-province-1">
				<div class="cat-name-1">港澳台</div>
				<div class="province-list">
					<li>香港特别行政区</li>
					<li>澳门特别行政区</li>
					<li>台湾省</li>					
				</div>
			</div>
		</div>
		</a>
	</div>
	<!--省市信息end-->
	
	<!--分类信息-->
	<div class="category">
		<a href="building.html">
		<img src="img/index/list.png">
		</a>
	</div>
	<!--分类信息end-->


	<!--技术合作伙伴-->
	<div class="co">
		<div class="title">技术合作伙伴</div>
		<div class="co-list">
			<div class="co-left"><img src="img/index/left.png"></div>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade1.png"></div>
				<div class="co-name">大数据公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade2.png"></div>
				<div class="co-name">某某云服务公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade3.png"></div>
				<div class="co-name">某某数据中心</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade4.png"></div>
				<div class="co-name">某某技术平台</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade5.png"></div>
				<div class="co-name">云计算公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade6.png"></div>
				<div class="co-name">私有云公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade7.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade8.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<div class="co-right"><img src="img/index/right.png"></div>
		</div>
	</div>
	<!--技术合作伙伴end-->
	
	<!--贸易合作伙伴-->
	<div class="co">
		<div class="title">贸易合作伙伴</div>
		<div class="co-list">
			<div class="co-left"><img src="img/index/left.png"></div>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade1.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade2.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade3.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade4.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade5.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade6.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade7.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/trade8.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<div class="co-right"><img src="img/index/right.png"></div>
		</div>
	</div>
	<!--贸易合作伙伴end-->
	
	<!--战略合作伙伴-->
	<div class="co">
		<div class="title">战略合作伙伴</div>
		<div class="co-list">
			<div class="co-left"><img src="img/index/left.png"></div>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/strategy1.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/strategy2.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/strategy3.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/strategy4.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/strategy5.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/strategy6.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/strategy7.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/strategy8.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<div class="co-right"><img src="img/index/right.png"></div>
		</div>
	</div>
	<!--战略合作伙伴end-->
	
	<!--品牌供应商-->
	<div class="co">
		<div class="title">品牌供应商</div>
		<div class="co-list">
			<div class="co-left"></div>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/apply1.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/apply2.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/apply3.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/apply4.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/apply5.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/apply6.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/apply7.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/more.png"></div>
			</li>
			</a>
			<div class="co-right"></div>
		</div>
	</div>
	<!--品牌供应商end-->
	
	<!--品牌物流配送企业-->
	<div class="co">
		<div class="title">品牌物流配送企业</div>
		<div class="co-list">
			<div class="co-left"></div>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/logistics1.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/logistics2.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/logistics3.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/logistics4.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/logistics5.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/logistics6.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/logistics7.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/logistics8.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<div class="co-right"></div>
		</div>
	</div>
	<!--品牌物流配送企业end-->
	
	<!--资深兼职业务员-->
	<div class="co">
		<div class="title">资深兼职业务员</div>
		<div class="co-list">
			<div class="co-left"></div>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/salesman1.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/salesman2.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/salesman3.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/salesman4.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/salesman5.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/salesman6.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/salesman7.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<a href="">
			<li>
				<div class="co-logo"><img src="img/index/salesman8.png"></div>
				<div class="co-name">某某公司</div>
			</li>
			</a>
			<div class="co-right"></div>
		</div>
	</div>
	<!--资深兼职业务员end-->	
	
	<!--想对鲁班人说-->
	<div class="message">
		<div class="title">想对鲁班人说</div>
		<textarea></textarea>
		
		<!--<input  type="text" >-->
		<div class="submit">
			<div class="submit-botton">
			   <a href="">
			   <div class="point-me">提交信息</div>
			   </a>
			</div>
		</div>
	</div>
	
	<!--想对鲁班人说end-->	
</div>	


<div class="footer">
	<div class="footer-menu">
		<div class="footer-menu-list">
		   <div class="footer-menu-name"><img src="img/index/user.png">会员中心</div>
		   <li>会员介绍</li>
		   <li>会员协议</li>
		   <li>会员推广</li>
		</div>
		<div class="footer-menu-list">
		   <div class="footer-menu-name"><img src="img/index/operation.png">操作指南</div>
		   <li>流程介绍</li>
		   <li>注册新用户</li>
		   <li>买家中心</li>
		   <li>卖家中心</li>
		</div>
		<div class="footer-menu-list">
		   <div class="footer-menu-name"><img src="img/index/know.png">了解我们</div>
		   <li>关于我们</li>
		   <li>人才招聘</li>
		   <li>联系客服</li>
		   <li>支付方式</li>	 
		</div>
		<div class="footer-menu-list">
		   <div class="footer-menu-name"><img src="img/index/card.png">其他</div>
		   <!--<li>会员介绍</li>
		   <li>会员协议</li>
		   <li>会员推广</li>-->
		</div>
	</div>
</div>
	</body>
</html>
