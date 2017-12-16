<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController{
	public function index(){
		$user  = M('user')->field('uid,user_name,email,created,group_id,statu,title')->join('LEFT JOIN __AUTH_GROUP__ ON __USER__.group_id = __AUTH_GROUP__.id')->select();//左联获取AUTH_GROUP表的 title
		$this->assign('user',$user);
		$this->display();
	}
/**
 * 后台添加会员
 */
	public function addUser(){
		if (IS_POST) {
			$con  			   =  M('user');
			$data['user_name'] = stripslashes(I('post.user_name',''));
			$data['password']  = sha1(I('post.password',''));
			$data['email']     = stripslashes(I('post.email',''));
			$data['statu']	   = 1;
			$data['created']   = time();
			$res = $con->where(array('user_name'=>$data['user_name']))->find();
			if (!$res) {
				$result	= $con->add($data);
				if ($result) {
					$this->success('用户添加成功',U('index'),1);
				} else {
					$this->error('用户添加失败',U('index'),1);
				}
			} else{
				$this->error('添加用户失败,用户名已存在!!',U('index'),1);
				}
		} else{
			$this->error('非法提交数据',U('index'),1);
		}
	}

/**
 *禁用用户 
 */
	public function userOff(){
		$id 			  = I('id','','intval');
		$data['statu']   = 0;
		$re = M('user')->where(array('uid'=>$id))->save($data);
		if ($re) {
			$this->success("会员已禁用",U('index'),1);
		} else{
			$this->error("会员禁用失败 !!请返回检查!!",U('index'),4);
		}		
	}
/**
 * 用户禁止
 */
	public function userOn(){
		$uid['uid']    = I('id','','intval');
		$on['statu']  = I('status','','intval');
		$r = M('user')->where($uid)->save($on);
		if ($r) {
			$this->success("会员已启用",U('index'),1);
		} else{
			$this->error("会员启用失败 请返回检查!!",U('index'),1);
		}	
	} 
/**
 * @return 将会员指派某个分组表单
 */
	public function assignGroup(){
		$uid   = I('id','','intval');
		$name  = I('name','');
		$list  = M('auth_group')->select();
		$this->assign('name',$name);
		$this->assign('uid',$uid);
		$this->assign('list',$list);
		$this->display();
	}

/**
 * [assignGroupHandle 指派会员至用户组处理]
 * @return [type] [description]
 */
	public function assignGroupHandle(){
		$group['group_id']  = I('post.group','','intval');
		$uid['uid']      	= I('post.uid','','intval');
		$result = M('auth_group')->field('id,title')->where(array('id'=>$group['group_id']))->find();
		if ($result) {
			M('auth_group_access')->where($uid)->delete();//删除原有用户组
			$res = M('auth_group_access')->add(array('group_id'=>$group['group_id'],'uid'=>$uid['uid']));//添加 用户组与会员关联
			if ($res) {
				$r = M('user')->where($uid)->save(array('group_id'=>$result['id']));//关联后更新会员的用户组信息
				if ($r) {
					$this->success('用户组与用户关联成功',U('index'),1);
				} else{
					$this->error('用户组与用户关联失败 003',U('index'),1);
				}
			} else{
				$this->error('添加 用户组与会员关联失败 002',U('index'),1);
				}
		} else{
				$this->error('用户组不存在! 001',U('index'),1);
			}
	}
}