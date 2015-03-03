<?php
	Class IndexAction extends Action{
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
			$video = M('video');
			$video = $video->where("type=1")->order('id DESC')->limit(4)->select();
			$this->assign('id',$video);
			$animation = M('video')->where("type=2")->order('id DESC')->limit(4)->select();
			$this->assign('animation',$animation);
			$series = M('video')->where("type=3")->order('id DESC')->limit(4)->select();
			$this->assign('series',$series);
			$music = M('video')->where("type=4")->order('id DESC')->limit(4)->select();
			$this->assign('music',$music);
			$dance = M('video')->where("type=5")->order('id DESC')->limit(4)->select();
			$this->assign('dance',$dance );
			$count1 = M('video')->where('type=2')->count();
			$this->assign('count1',$count1 );
			$count2 = M('video')->where('type=3')->count();
			$this->assign('count2',$count2 );
			$count3 = M('video')->where('type=4')->count();
			$this->assign('count3',$count3 );
			$count4 = M('video')->where('type=5')->count();
			$this->assign('count4',$count4 );
			$rank2 = M('video')->where('type=2')->order('count DESC')->limit(3)->select(); 
			$rank21 = $rank2[0]['title'];
			$rank21d = $rank2[0]['id'];
			$rank22 = $rank2[1]['title'];
			$rank22d = $rank2[1]['id'];
			$rank23 = $rank2[2]['title'];
			$rank23d = $rank2[2]['id'];
			$this->assign('rank21',$rank21 );
			$this->assign('rank21d',$rank21d );
			$this->assign('rank22',$rank22);
			$this->assign('rank22d',$rank22d);
			$this->assign('rank23',$rank23);
			$this->assign('rank23d',$rank23d);
			$rank3 = M('video')->where('type=3')->order('count DESC')->limit(3)->select();
			$rank31 = $rank3[0]['title'];
			$rank31d = $rank3[0]['id'];
			$rank32 = $rank3[1]['title'];
			$rank32d = $rank3[1]['id'];
			$rank33 = $rank3[2]['title'];
			$rank33d = $rank3[2]['id'];
			$this->assign('rank31',$rank31 );
			$this->assign('rank31d',$rank31d );
			$this->assign('rank32',$rank32);
			$this->assign('rank32d',$rank32d);
			$this->assign('rank33',$rank33);
			$this->assign('rank33d',$rank33d);
			$this->assign('rank3',$rank3 );
			$rank4 = M('video')->where('type=4')->order('count DESC')->limit(3)->select();
			$rank41 = $rank4[0]['title'];
			$rank41d = $rank4[0]['id'];
			$rank42 = $rank4[1]['title'];
			$rank42d = $rank4[1]['id'];
			$rank43 = $rank4[2]['title'];
			$rank43d = $rank4[2]['id'];
			$this->assign('rank41',$rank41 );
			$this->assign('rank41d',$rank41d );
			$this->assign('rank42',$rank42);
			$this->assign('rank42d',$rank42d);
			$this->assign('rank43',$rank43);
			$this->assign('rank43d',$rank43d);
			$this->assign('rank4',$rank4 );
			$rank5 = M('video')->where('type=5')->order('count DESC')->limit(3)->select();
			$rank51 = $rank5[0]['title'];
			$rank51d = $rank5[0]['id'];
			$rank52 = $rank5[1]['title'];
			$rank52d = $rank5[1]['id'];
			$rank53 = $rank5[2]['title'];
			$rank53d = $rank5[2]['id'];
			$this->assign('rank51',$rank51 );
			$this->assign('rank51d',$rank51d );
			$this->assign('rank52',$rank52);
			$this->assign('rank52d',$rank52d);
			$this->assign('rank53',$rank53);
			$this->assign('rank53d',$rank53d);
			$this->assign('rank5',$rank5 );
			$this->display();

		}
		Public function logout () {
			session_unset();
			session_destroy();
			$this->redirect('Index/Index/index');
		} 
	}
?>