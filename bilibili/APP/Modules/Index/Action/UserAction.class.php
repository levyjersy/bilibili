<?php
	Class UserAction extends Action{
		Public function index () {
			if(!isset($_SESSION['username'])){
				halt('页面不存在');
			}else{
				$model = M('user');
				$result = $model->where($_SESSION)->select();
				$result1 = "m_".$result[0]['image'];
				$result2 = "s_".$result[0]['image'];
				$result3 = "u_".$result[0]['image'];
				$this -> assign('list1',$result1);
				$this -> assign('list2',$result2);
				$this -> assign('list3',$result3);
				$this->display();
			}
		}
		Public function upload () {
			if(!IS_POST) halt('页面不存在');
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();//实例化上传类	
			$upload -> maxSize = 3145728;//设置附件上传大小
			//设置附件上传类型
			$upload -> allowExts = array('jpg','gif','png','jpeg');
			//设置附件上传目录
			$upload -> savePath = './Public/Uploads/';
			//设置生成缩略图
			$upload -> thumb = true;
			$upload -> thumbPrefix = 'm_,s_,u_';
			$upload -> thumbMaxWidth = '181,72,38';
			$upload -> thumbMaxHeight = '181,72,38';
			$upload -> thumbRemoveOrigin = true;
			if(!$upload -> upload()){
				$this->error($upload->getErrorMsg());
			}else{
				$this->success('上传成功！');
			}
			$info = $upload->getUploadFileInfo();
			$model = M('user');
			$data['image'] = $info[0]['savename'];
			$data['creat_time'] = date('Y-m-d H:i:s',time());
			$model->where($_SESSION)->save($data);
		}
		Public function uploadcover ($width,$height) {
			if(!IS_POST) halt('页面不存在');
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();//实例化上传类	
			$upload -> maxSize = 3145728;//设置附件上传大小
			//设置附件上传类型
			$upload -> allowExts = array('jpg','gif','png','jpeg');
			//设置附件上传目录
			$upload -> savePath = './Public/cover/';
			//设置生成缩略图
			$upload -> thumb = true;
			$upload -> thumbPrefix = 'm_,s_,u_';
			$upload -> thumbMaxWidth = $width;
			$upload -> thumbMaxHeight = $height;
			$upload -> thumbRemoveOrigin = true;
			if(!$upload -> upload()){
				$this->error($upload->getErrorMsg());
			}else{
				$this->success('上传成功！');
			}
			$info = $upload->getUploadFileInfo();
			$model = M('video');
			$data['title'] = I('title');
			$data['notes'] = I('notes');
			$data['tag'] = I('tag');
			$data['type'] = I('type');
			$data['source'] = I('source');
			$data['address'] = I('address');
			$data['intro'] = I('intro');
			$data['count'] = 0;
			$data['image'] = $info[0]['savename'];
			$model->add($data);
		}
		Public function uploadThumb () {
			return $this->uploadcover('160,120','100,75','82,51');
		}
	}
?>