<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	/**
	 * 登录处理
	 */
	 public function loginHandle(){
	 	if (IS_PSOT) {
		 	$user['user_name']  = I('post.user_name','');
		 	$user['password']   = sha1(I('post.password','','trim'));
		 	$user['statu'] 		= 1;
		 	$result = M('user')->where($user)->find();
		 	if ($result) {
		 		$_SESSION['user_name'] = $result['user_name']; //会员名
		 		$_SESSION['uid'] 	   = $result['uid'];//会员 uid
		 		// echo $_SESSION['user_name'];
		 		// echo $_SESSION['uid'];
		 		$this->success('登录成功,页面正在跳转.....',U('Admin/Index/index'));
		 	} else{
		 		$_SESSION['fail_count']++;
		 		$this->error('密码或用户名错误',U('Admin/Login/index'),1);
		 	}
	 	}else {
 			$this->error('非法请求',U('Admin/Index/index'),1);
 		}
	}
	/**
	 * 登录表单
	 */
	public function index(){
		$this->display();
	}
/**
 * [logout 会员登出]
 * @return [type] [description]
 */
	public function logout(){
		session_unset();
		$this->redirect('Admin/Login/index');
	}
}