<?php
	// 后台登录控制器
	Class LoginAction extends CommonAction {
		// 登录页面视图
		Public function index () {
			$this->display();
		}
		Public function verify () {
			import('ORG.Util.Image');
			Image::buildImageVerify(1,1,'png',112,32);
		}
	}
?>