<?php
	Class RbacAction extends CommonAction {
		//用户列表
		Public function index () {

		}
		//角色列表
		Public function role () {
			$this->role = M('role')->select();
			$this->display();
		}
		//节点列表
		Public function node () {
			$field = array('id','name','title','pid');
			$node = M('node')->field($field)->select();
			$this->node = node_merge($node);
			$this->display();
		}
		//添加用户
		Public function addUser () {
			
		}
		//添加角色
		Public function addRole () {
			$this->display();
		}
		Public function addRoleHandle () {
			if(M('role')->add($_POST)){
				$this->success('添加成功',U('Admin/Rbac/role'));
			}else{
				$this->error('添加失败');
			}
		}
		//添加节点
		Public function addNode () {
			$this->pid = I('pid',0,'intval');
			$this->level = I('level',1,'intval');
			switch ($this->level) {
				case 1:
					$this->type = '应用';
					break;
				case 2:
					$this->type = '控制器';
					break;
				case 3:
					$this->type = '动作方法';
					break;
			}
			$this->display();
		}
		Public function addNodeHandle () {
			if(M('node')->add($_POST)){
				$this->success('添加成功',U('Admin/Rbac/node'));
			}else{
				$this->error('添加失败');
			}
		}
		//配置权限
		Public function access () {
			$rid = I('rid',0,'intval');
			$node = M('node')->select();
			$this->node = node_merge($node);
			$this->rid = $rid;
			$this->display();
		}
		Public function setAccess () {
			$rid = I('rid',0,'intval');
			
		}
	}
?>