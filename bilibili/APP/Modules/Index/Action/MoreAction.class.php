<?php
	Class MoreAction extends Action  {
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
			$id = $_GET['id'];
			import('ORG.Util.Page');
			$count = M('video')->where('type='.$id)->count();
			$Page = new Page($count,'6');
	        $Page->setConfig('prev','上一页');
	        $Page->setConfig('next','下一页');
	        $Page->setConfig('first','首页');
	        $Page->setConfig('last','末页');
	        $show = $Page->show();
	        $type = M('video')->where('type='.$id)->limit($Page->firstRow.','.$Page->listRows)->select();
	        $this->assign('type',$type);
	        $this->assign('page',$show);
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
	}
?>