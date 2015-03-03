<?php
	Class LoginAction extends Action{
		Public function index () {
			$this->display();
		}
		Public function login () {
			if(!IS_POST) halt('页面不存在');
			if(I('code','','md5') != session('verify')){
				$this->error("验证码错误");
			}else{
				$phone = I('phone');
				$password = md5(I('password'));
				$user = M('user')->where(array('phone' => $phone))->find();
				if(!$user||$user['password'] != $password){
					$this->error('账号或密码错误');
				}else{
					$_SESSION['username'] = $user['username'];
					$data = array(
						'id' => $user['id'],
						'logintime' => time(),
						'loignip' => get_client_ip(),
						);
					M('user') -> save($data);
					$this->success('登录成功',U('Index/Index'));
				}
			}
		}
		Public function verify () {
			import('ORG.Util.Image');
			Image::buildImageVerify(1,1,'png',112,32);
		}
	}
?>