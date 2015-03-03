<?php
	Class PlayerAction extends Action{
		Public function index () {
			if(isset($_SESSION['username'])){
				$model = M('user');
				$result = $model->where($_SESSION)->select();
				$result1 = "m_".$result[0]['image'];
				$result2 = "s_".$result[0]['image'];
				$result3 = "u_".$result[0]['image'];
				$this -> assign('list1',$result1);
				$this -> assign('list2',$result2);
				$this -> assign('list3',$result3);
			}
			$comment = M('comment');
			$barrage = M('barrage')->select();
			$this->assign('barrage',$barrage);
	        import('ORG.Util.Page');
	        $id = $_GET['id'];
	        M('video')->where('id='.$id)->setInc('count',1);
	        $count = M('comment')->where('pid='.$id)->count();
	        $Page = new Page($count,'5');
	        $Page->setConfig('prev','上一页');
	        $Page->setConfig('next','下一页');
	        $Page->setConfig('first','首页');
	        $Page->setConfig('last','末页');
	        $show = $Page->show();
	        $list = M('comment')->where('pid='.$id)->order('creat_time DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
	        $this->assign('list',$list);
	        $this->assign('page',$show);
	       	$sina = M('video')->where('id='.$id)->select();
	       	$data1 = $sina[0]['title'];
	       	$data2 = $sina[0]['tag'];
	        $data3 = $sina[0]['address'];
	        $data4 = $sina[0]['intro'];
	        $this -> assign('data1',$data1);
			$this -> assign('data2',$data2);
			$this -> assign('data3',$data3);
			$this -> assign('data4',$data4);
			$count1 = M('video')->where('type=2')->count();
			$this->assign('count1',$count1 );
			$count2 = M('video')->where('type=3')->count();
			$this->assign('count2',$count2 );
			$count3 = M('video')->where('type=4')->count();
			$this->assign('count3',$count3 );
			$count4 = M('video')->where('type=5')->count();
			$this->assign('count4',$count4 );	   
			$this->display();
		}
		Public function handle () {
			if(!IS_AJAX) halt('页面不存在');
				$data['username'] = $_SESSION['username'];
				$arr = M('user')->where($_SESSION)->select();
				$arr['image'] = "/bilibili/Public/Uploads/u_".$arr[0]['image'];
				$data['image'] = $arr['image'];
				$data['pid'] = I('pid');
				$data['content'] = I('content');
				$data['creat_time'] = date('Y-m-d H:i:s',time());
				if($id = M('comment')->data($data)->add()){
					$data['content'] = $data['content'];
					$data['id'] = $id;
					$data['creat_time'] = $data['creat_time'];
					$data['image'] = $data['image'];
					$data['status'] = 1;
					$this->ajaxReturn($data,'json');
				}else{
					$this->ajaxReturn(array('status' => 0),'json');
				}
		}
		Public function barrage () {
	        if(!IS_AJAX) halt('页面不存在');
			$data['content'] = I('content');
			$data['sendtime'] = date('Y-m-d H:i:s',time());
			if($id = M('barrage')->data($data)->add()){
				$data['content'] = $data['content'];
				$data['id'] = $id;
				$data['sendtime'] = $data['sendtime'];
				$data['status'] = 1;
				$this->ajaxReturn($data,'json');
			}else{
				$this->ajaxReturn(array('status' => 0),'json');
			}
     	}
     	Public function reply () {
     		
     	}
	}
?>