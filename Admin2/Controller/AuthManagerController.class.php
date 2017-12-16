<?php
namespace Admin\Controller;
class AuthManagerController extends CommonController{
	/**
	 * [index 用户组列表
	 * @return [type] [description]
	 */
	public function index(){
		$list = M('auth_group')->select();
		$this->assign('list',$list);
		$this->display();
	}
	/**
	 * [rule 规则列表]
	 * @return [type] [description]
	 */
	public function ruleList(){
		$list = M('auth_rule')->select();
		$this->assign('list',$list);
		$this->display();
	}
	/**
	 * [addRuleHandle 添加规则到数据库]
	 */
	public function addRuleHandle(){
		$model 			= M('auth_rule');
		$data['title']  = stripslashes(trim(I('post.title','')));
		$data['name']   = stripslashes(I('post.name',''));
		$data['status'] = I('post.status','','intval');
		$result =$model->where(array('title'=>$data['title']))->find();//添加前查找title规则是否存在
		if (!$result) {
			$res = $model->add($data);
			if ($res) {
				$this->success('规则添加成功',U('addRuleForm'),1);
			} else{
				$this->error('规则添加失败',U('addRuleForm'),1);
			}
		} else{
			$this->error('规则已存在,无需重复添加',U('addRuleForm'),1);
		}
	}
	/**
	 * [addRule rule规则填写表单]
	 */
	public function addRuleForm(){
		$this->display();
	}
	/**
	 * [addGroup 添加用户组]
	 */
	public function addGroup(){
		if (IS_POST) {
			$data['id'] = I('id','','intval');
			$data['title']  = stripslashes(I('post.title',''));
			$data['status'] = I('post.status','0','intval');
			$result = M('auth_group')->add($data);
			if ($result) {
				$this->success('添加分组成功',U('index'),1);
			} else{
				$this->error('添加分组失败',U('index'),1);
			}
		}
	}

	/**
	 * [editGroup 编辑用户组]
	 * @return [type] [description]
	 */
	public function editGroup(){
			$id = I('id','','intval');
			if ($id) {
				$result = M('auth_group')->where(array('id' =>"$id"))->find();
				if ($result) {
					$this->assign('record',$result);
					$this->display();
				} else{
					$this->error("分组禁用失败 请返回检查!!",U('index'),1);
				}
			}
	}
	/**
	 * [editHandle 编辑用户组处理]
	 * @return [type] [description]
	 */
		public function editGroupHandle(){
		if (IS_POST) {
			$id['id'] 		= I('id','','intval');
			$data['title']  = stripslashes(I('post.title',''));
			$data['status'] = I('post.status','0','intval');
			$result = M('auth_group')->where($id)->save($data);
			if ($result) {
				$this->success("编辑分组成功",U('index'),1);
			} else{
				$this->error('编辑分组失败',U('index'),1);
			}
		}
	}
	/**
	 * [statusOff 禁用用户组]
	 * @return [type] [description]
	 */
	public function statusOff(){
			$id 			= I('id','','intval');
			$data['status'] = "0";
			if ($id) {
				$result = M('auth_group')->where(array("id"=>$id))->save($data);
				if ($result) {
					$this->success("分组已禁用",U('index'),1);
				} else{
					$this->error("分组禁用失败 请返回检查!!",U('index'),1);
				}
			}
	}
	/**
	 * [delGroup 以id条件删除删除]
	 * @return [type] 
	 */
	public function delGroup(){
		$gid['id'] = I('gid','','intval');
		$result = M('auth_group')->where($gid)->delete();
		if ($res) {
			$this->success('用户分组已删除',U('index'));
		} else{
			$this->error('用户分组删除失败 !!',U('index'),1);
		}
	}
/**
 * [assignRuleFrom 分配规则表单]
 * @return [type] [description]
 */
	public function assignRuleFrom(){
		$id   = I('id','','intval');
		$rule = M('auth_group')->field('rules')->where(array('id'=>$id))->find();
		$rule = explode(',', $rule['rules']);
		// print_r($rule);exit;
		$list = M('auth_rule')->select();
		$this->assign('id',$id);
		$this->assign('rule',$rule);
		$this->assign('list',$list);
		$this->display();
	}
/**
 * [assignRuleHandle 更改用户组权限处理]
 * @return [type] [description]
 */
	public function assignRuleHandle(){
		$val['rules'] = implode(",",I('post.rules','','intval'));//规则id以",分割"
		$group['id'] = I('post.group_id','','intval');
		$result =M('auth_group')->where($group)->save($val);
		if ($result) {
			$this->success('用户组权限更新成功');
		} else{
			$this->error('用户组权限更新失败');
		}
	}
/**
 * [editRule 修改规则表单]
 * @return [type] [description]
 */
	public function editRule(){
		$id       = I('id','','intval');
		$result   = M('auth_rule')->where(array('id'=>$id))->find();
		$this->assign('rule',$result);
		$this->display();
	}
	/**
	 * [editRuleHandle 验证规则修改处理]
	 * @return [type] [description]
	 */
	public function editRuleHandle(){
		$data['id']      = I('post.id','','intval');
		$data['name']    = I('post.name','');
		$data['title']   = I('post.title','');
		$data['status']  = I('post.status','0','intval');
		$result  = M('auth_rule')->save($data);
		if ($result) {
			$this->success('修改成功',U('ruleList'));
		} else{
			$this->error('修改失败!!!');
		}
	}
/**
 * [delRule 删除验证规则]
 * @return [type] [description]
 */
	public function delRule(){
		$data['id']      = I('post.id','','intval');
		$result  = M('auth_rule')->where($data)->delete();
		if ($result) {
			$this->success('删除成功',U('ruleList'));//待改进返回数据
		} else{
			$this->error('删除失败!!!');
		}
	}

}

?>