<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/user.css">
	<title>个人中心</title>
</head>
<body>
	<div class="top_bg">
		<div class="top">
				<ul>
					<li><img src="video.png"><a href="<?php echo U('Index/Index/index');?>">主站</a></li>
					<li><a href="##">画友</a></li>
					<li><a href="#">游戏中心</a></li>
					<li><a href="#">直播</a></li>
					<li><a href="#">手机端</a></li>
				</ul>
				<div class="top_right">
					<img class="circle" src="__PUBLIC__/Uploads/<?php echo ($list3); ?>">
					<a href="###">退出</a>
				</div>
		</div>
	</div>
	<div class="content">
		<div class="content_top">
		</div>
		<div class="content_main">
			<div class="main_left">
				<div class="left_top">
					<div class="photo">
						<img src="__PUBLIC__/Uploads/<?php echo ($list2); ?>">
					</div>
					<strong class="name">levyjersy</strong>
				</div>
				<div class="left_footer">
					<ul>
						<li><img src="d.png">头像设置</li>
					</ul>
				</div>
			</div>
			<div class="main_right">
				<div class="right_top">
					<div class="tangle">
					</div>
					<span>头像设置</span>
				</div>
				<div class="right_footer">
					<div class="upload">
						<div class="now">
							<img src="__PUBLIC__/Uploads/<?php echo ($list1); ?>">
							<p class="now_photo">当前图片</p>
						</div>
						<div class="thumb">
							<form id="upload" method="post" action="<?php echo U('Index/User/upload');?>" enctype="multipart/form-data">
								<input name="image" type="file">
								<input type="submit" value="提交">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		
	</div>
</body>
</html>