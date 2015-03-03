<?php
	Class RegisterAction extends Action {
		Public function index () {
			$this->display();
		}
		Public function register () {
			$User = D("User");
			if(!$User->create()){
				$this->error($User->getError());
			}else{
				if(I('fif') == on){
					$data['country'] = I('country');
					$data['phone'] = I('phone');
					$data['username'] = I('name');
					$data['password'] = md5(I('password'));
					$data['creat_time'] = date('Y-m-d H:i:s',time());
					$data['image'] = 'default.png';
					$User ->add($data);
					$this->success('注册成功',U('Index/Index'));
				}else{
					$this->error("你未同意我公司条款！");
				}
			}
		}
	}
?>