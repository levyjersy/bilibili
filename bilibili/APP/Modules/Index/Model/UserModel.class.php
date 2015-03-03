<?php
	Class UserModel extends Model {
		protected $_validate = array(
			array('phone','/^1[0-9]{10}$/','手机号格式错误！',1),
			array('code','require','验证码错误！'),
			array('code','CheckVerify','验证码错误！',0,'callback'),
			array('name','checkname','用户名长度过长或过短',1,'callback'),
			array('password','checkPwd','密码格式不正确',1,'callback'),
			);
		function checkname($data){
			if(strlen($data)>16 || strlen($data)<3){
				return false;
			}else{
				return true;
			}
		}
		function checkPwd($data){
			if(strlen($data)>16 || strlen($data)<5){
				return false;
			}else{
				return true;
			}
		}
		public function CheckVerify(){
			return I('code','','md5') == $_SESSION['verify'];
		}
	}  
?>