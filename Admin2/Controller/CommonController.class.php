<?php
namespace Admin\Controller;
class CommonController extends MyCoreController {
	public function _initialize() {
		if (!isset($_SESSION['user_name'])) { //没登录则跳转登录页面
			$this->redirect('Admin/Login/index');
		}

	}
}

?>