<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Auth; 
use Think\Upload;
class MyCoreController extends Controller {
	public function __construct() {
		parent::__construct(); 
		$auth = new Auth(); 
		if (!isset($_SESSION['user_name'])) {
			$this->redirect('Admin/Login/index');
		} 
		if (!$auth->check(path(), $_SESSION['uid'], $type=1, $mode='url', $relation='or')) {//对访问权限进行检查
				exit("会员所在用户组没有访问权限!");
		}
	}
}

?>