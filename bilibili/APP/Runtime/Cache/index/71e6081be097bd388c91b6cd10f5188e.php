<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<body>
	<link href="__PUBLIC__/css/register.css" type="text/css" rel="Stylesheet" >
    <script type="text/javascript"src="__PUBLIC__/js/register.js" > </script>
<div class="biggest">
	<div id="first">
		  <div class="zhu">
			 <img src="__PUBLIC__/img/0001.png" style="margin-top:12px;float:left">
			  <div class="aa">
				  <a href="test.html">主站</a>
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
   </div>
   <div id="second">
			<img src="__PUBLIC__/img/0017.png">
   </div>
   <div id="third">
			<img src="__PUBLIC__/img/0025.png">
   </div>
 <form action="<?php echo U('Index/Register/register');?>" method="post" onsubmit="return validate_form(this)">
   <div id="forth">
	  <select>
        <option value="中国大陆">中国大陆</option>
        <option value="台湾">台湾</option>
        <option value="香港">香港</option>
        <option value="澳门">澳门</option>
      </select>
      <div class="f1">
    	  <input type="text" id="a1" placeholder="填写常用手机号" name="fi"/>
      </div>
   </div>
   <div id="five">
	 <a href="###">用邮箱注册></a>
   </div>
   <div id="six">   
      <div class="f2">
         <input type="text" id="a2" placeholder="手机验证码" name="se">
         </input>
         <div class="d1">
    	     <a href="###">点击获取</a>
         </div>
      </div>
   </div>
   <div class="f3">
      <input type="text" id="a3" placeholder="昵称（例：哔哩哔哩）" name="thi">
   </div>
   <div class="f4">
         <input type="password" id="a4" placeholder="密码（6-16个字符组成，区分大小写）" name="fo">
   </div>
   <div id="seven">
   	  <input type="radio"name="fif">我已同意
   	  <div class="mm">
   	  	 <a href="###">《bilibili网会员注册协议》 </a>
   	  </div>
   </div>
   <div id="eight">
   	  <button type="submit">注册</button>
   </div>
 </form>
   <div id="nine">
   	  <a href="c.html">
          已有账号，直接登录>
   	  </a>
   </div>
   <div id="ten">
   	   <img src="__PUBLIC__/img/0024.png">
   </div>
</div>
</body>
</html>