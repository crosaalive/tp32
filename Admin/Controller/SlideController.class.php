<?php
namespace Admin\Controller;
use Think\Controller;
class SlideController extends Controller {
	/**
	 * 幻灯片首页显示
	 */
    public function index(){

    	$this->display();
    }
    /**
     * 获取幻灯片列表
     */
    public function getSlideData(){
    	// header('content-type:text/html;charset=utf-8');
    	// echo "<pre>";
    	$model = M('slide');
    	// ->where(array('status'=>'3')) ->field('id','status','add_time','name','remark')
    	$data  = $model->limit('2')->select();
    	if (!empty($data)) {
    		$arr = array('code'=>0,'msg'=>'null','count'=>2,'data'=>$data);
    		// print_r($arr);
    		$this->ajaxReturn($arr,'json');
    	}
    	// $dt  = array(array('id' =>11 ,'name'=>12),array('id' =>222 ,'name'=>222));
    	// $tmp = array('code'=>0,'msg'=>'null','count'=>2,'data'=>$dt);
    	// $this->ajaxReturn($tmp,'json');
    	// echo gettype($data)."<br>";
    	// echo  empty($data)."<br>";
    	// print_r($data)."<br>"		;
    	// die();
    	// $tmp = json_encode($data);
    	// print_r($tmp);
    	// die();
    }
    public function showList(){
    	layout(false);
    	$this->display();
    }

}