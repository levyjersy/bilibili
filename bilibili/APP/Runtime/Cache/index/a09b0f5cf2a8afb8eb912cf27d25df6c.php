<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/user.css">
	<script type="text/javascript" src="__PUBLIC__/js/user.js"></script>
	<title>个人中心</title>
</head>
<body>
	<div class="top_bg">
		<div class="top">
				<ul>
					<li><img src="__PUBLIC__/img/0001.png"><a href="<?php echo U('Index/Index/index');?>">主站</a></li>
					<li><a href="##">画友</a></li>
					<li><a href="#">游戏中心</a></li>
					<li><a href="#">直播</a></li>
					<li><a href="#">手机端</a></li>
				</ul>
				<div class="top_right">
					<img class="circle" src="__PUBLIC__/Uploads/<?php echo ($list3); ?>">
					<a href="<?php echo U('Index/Index/logout');?>">退出</a>
				</div>
		</div>
	</div>
	<div class="content">
		<div class="content_top">
			<img src="__PUBLIC__/img/0017.png">
		</div>
		<div class="content_main">
			<div class="main_left">
				<div class="left_top">
					<div class="photo">
						<img src="__PUBLIC__/Uploads/<?php echo ($list2); ?>">
					</div>
					<strong class="name"><?php echo $_SESSION['username'] ;?></strong>
				</div>
				<div class="left_footer">
					<ul>
						<li id="head_img">
							<div class="flv-img">
								<img src="img/d.png">
							</div>
							<div class="head-w"  onmouseover="s1(this)">头像设置
							</div>
						</li>
						<li id="flv">
							<div class="flv-img">
								<img src="img/0078.png">
							</div>
							<div class="flv-w" onmouseover="s2(this)">视频投稿
							</div>
						</li>

					</ul>
				</div>
			</div>
			<div class="main_right" id="old"> 
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
			<div class="main_right" id="new1" style="display:none">
				<div class="right_top" id="new2">
					<div class="tangle">
					</div>
					<span>投稿</span>
				</div>
				<form class="mainly" method="post" action="<?php echo U('Index/User/uploadThumb');?>" enctype="multipart/form-data">
					<ul class="front">
						<li class="shape">
							<div class="flv_title">
								<b>标题</b>
								<div class="small">
									（必填）
								</div>
							</div>
							<input type="text" class="same" name="title">
						</li>
						<li class="shape">
							<div class="flv_title" id="move">
								<b>标签TAG</b>
								<div class="small" id="w_position">
									（必填）
								</div>
							</div>
							<input type="text" class="same" id="shorten" name="tag">
						</li>
						<li class="shape">
							<div class="flv_title" id="move2">
								<b>隶属栏目</b>
								<div class="small" id="w_position2">
									（必填）
								</div>
							</div>
							<div class="help">
								<select class="select1" name="type">
                                    <option value="1">推广</option>
                                    <option value="2">动画</option>
                                    <option value="3">番剧</option>
                                    <option value="4">音乐</option>
                                    <option value="5">舞蹈</option>
                                </select>
							</div>
						</li>
						<li class="shape">
							<div class="flv_title" id="move2">
								<b>封面缩略图</b>
							</div>
							<input class="same" name="image" type="file">
						</li>
						<li class="shape">
							<div class="flv_title" id="move2">
								<b>视频地址</b>
							</div>
							<input class="same" name="address">
						</li>
						<li class="shape">
							<div class="flv_title" id="special">
								<b>简介</b>
								<div class="small">
									（必填）
								</div>
							</div>
							<input type="text" class="spy" placeholder="200字以内" name="intro">
						</li>
					</ul>
					<input type="submit" value="提交" class="last">
				</form>
			</div>
		</div>
	</div>
	<div class="footer">
		<img src="__PUBLIC__/img/0024.png">
	</div>
</body>
</html>