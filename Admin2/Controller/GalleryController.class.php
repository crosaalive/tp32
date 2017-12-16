<?php
namespace Admin\Controller;
use Think\Controller;
class GalleryController extends CommonController{
	public function index(){	
			$this->display();
	}

	public function test(){
		$v['content'] = I('xx','');
		 $result = M('ad')->add($v);
		// echo "<pre>";
		// print_r(stripslashes($v));die;
	}
}

