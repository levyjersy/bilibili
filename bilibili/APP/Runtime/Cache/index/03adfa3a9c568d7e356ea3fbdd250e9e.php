<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/more.css">
	<script type="text/javascript" src="__PUBLIC__/js/more.js"></script>
	<title>更多视频</title>
</head>
<body>
	<div class="biggest">
	<div id="first">
		<div class="zhu">
			<img src="__PUBLIC__/img/0001.png" style="margin-top:12px;float:left">
			<div class="aa">
				<a href="<?php echo U('Index/Index/index');?>">主站</a>
			</div>
		</div>
		<div class="hua">
			<a href="###">画友</a>
		</div>
		<div class="you">
			<a href="###">游戏中心</a>
		</div>
		<div class="zhi">
			<a href="###">直播</a>
		</div>
		<div class="shou">
			<a href="###">手机端</a>
		</div>
		<div class="bd">
			<?php if(!isset($_SESSION['username'])){ ?>
			   <div class="deng">
			   	  <div class="QQ">
			   	  	<a href="###">
			   	  		<img src="__PUBLIC__/img/0002.png" style="margin-top:5px">
			   	  	</a>
			   	  </div>
			   	  <div class="wb">
			   	  	<a href="###">
			   	  		<img src="__PUBLIC__/img/0003.png" style="margin-top:3px">
			   	  	</a>
			   	  </div>    
			   	  <div class="dl">
			   	  	<a href="<?php echo U('Index/Login');?>">
			   	  		<img src="__PUBLIC__/img/0004.png" style="margin-top:5px">
			   	  	</a>
			   	  </div>    

	           </div>
			   <div class="ce">
			    	<a href="<?php echo U('Index/Register');?>">注册</a>
			   </div>
			<?php }else{ ?>
				<div class="user">
					<div>
						<a href="<?php echo U('Index/User/index');?>"><img class="headimg" src="__PUBLIC__/Uploads/<?php echo ($list3); ?>"></a>
						<div id="block">
							<div class="uname">
								<b><?php echo $_SESSION['username'] ;?></b>
								<ul class="member-menu"></ul>
								<div class="member-bottom">
									<a href="<?php echo U('Index/User');?>">进入会员中心</a>
									<a class="logout" href="<?php echo U('Index/Index/logout');?>">退出登录</a>
								</div>
							</div>
						</div>
					</div>
					<a class="upload" href="<?php echo U('Index/User/index');?>">投稿</a>
				</div>
			<?php } ?>
		</div>
    </div>
    <div id="second"></div>
	<div id="third">
		<div class="bei">
			<img src="__PUBLIC__/img/0005.png">
		</div>
		<ul class="dh">
		   <li class="ye">
		   	  <a href="<?php echo U('Index/Index');?>">首页</a>	   	  
		   </li>
		   <li class="dong">
		   	  <a href="###">动画</a>
		   	  <ul id="flash" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="fan">
		   	  <a href="###">番剧</a>
		   	  <ul id="every" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="yin">
		   	  <a href="###">音乐</a>
		   	  <ul id="music" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="wu">
		   	  <a href="###">舞蹈</a>
		   	  <ul id="dance" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="xi">
		   	  <a href="###">游戏</a>
		   	  <ul id="game" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="ke">
		   	  <a href="###">科技</a>
		   	  <ul id="science" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="yu">
		   	  <a href="###">娱乐</a>
		   	  <ul id="fun" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="gui">
		   	  <a href="###">鬼畜</a>
		   	  <ul id="chill" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="ying">
		   	  <a href="###">电影</a>
		   	  <ul id="movie" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="shi">
		   	  <a href="###">电视剧</a>
		   	  <ul id="long" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
            <button type="button" onclick="" style="position: relative;
left:242px;top:-235px;"><?php echo ($count1); ?></button>
            <button type="button" onclick="" style="position: relative;
left:267px;top:-235px;"><?php echo ($count2); ?></button>
            <button type="button" onclick="" style="position: relative;
left:290px;top:-235px;"><?php echo ($count3); ?></button>
            <button type="button" onclick="" style="position: relative;
left:313px;top:-235px;"><?php echo ($count4); ?></button>
            <button type="button" onclick="" style="position: relative;
left:336px;top:-235px;">0</button>
            <button type="button" onclick="" style="position: relative;
left:359px;top:-235px;">0</button>
            <button type="button" onclick="" style="position: relative;
left:382px;top:-235px;">0</button>
            <button type="button" onclick="" style="position: relative;
left:405px;top:-235px;">0</button>
            <button type="button" onclick="" style="position: relative;
left:430px;top:-235px;">0</button>
            <button type="button" onclick="" style="position: relative;
left:456px;top:-235px;">0</button>
            <div class="pai">
		   	  <a href="###">
		   	  	 <img src="__PUBLIC__/img/0006.png">
		   	  	 <div class="hang">
		   	  	     <span>排行</span>
		   	  	</div>
		   	  </a>
		   </div>
		   <div class="so">
		   	  <form action="http://www.bilibili.com/search">
		   	      <input type="text" name="user" >
                  <input type="submit" value="GO!" >
              </form>       
		   </div>
		</ul>
	</div>
	<div class="main">
		<?php if(is_array($type)): foreach($type as $key=>$vo): ?><div class="item">
				<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>"><img src="__PUBLIC__/cover/s_<?php echo ($vo["image"]); ?>"></a>
				<a class="title" href=""><?php echo ($vo["title"]); ?></a>
				<p><?php echo ($vo["intro"]); ?></p>
			</div><?php endforeach; endif; ?>
	</div>
	<div class="page">
		<?php echo ($page); ?>
	</div>
	<div class="footer">
		<img src="__PUBLIC__/img/0024.png">
	</div>
</body>
</html>