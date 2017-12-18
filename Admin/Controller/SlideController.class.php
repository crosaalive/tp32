<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class SlideController extends Controller {
	/**
	 * 幻灯片首页显示
	 */
    public function index(){
    	$this->display();
    }
    /**
     * 获取幻灯片列表
     *返回json数据
     */
    public function getSlideData(){
    	// header('content-type:text/html;charset=utf-8');
    	// echo "<pre>";
    	// if (IS_GET) {
    	// 	echo "sssssssssssssss";
    	// }
    	$model = M('slide');
    	$limit = I('get.limit',10,'intval');
    	$page  = I ('get.page',1,'intval');
    	//$Page  = new \Think\Page($count,$limit);// 实例化分页类 传入总记录数和每页显示的记录数(5)
		//$show  = $Page->show();// 分页显示输出	
    	$data  = $model->field('id,status,add_time,name,remark')->limit($page*$limit-$limit,$limit)->select();
    	$count = $model->count('id'); //统计
    	if (!empty($data)) {
    		// print_r(gettype($data));
    		// die;
    		$arr = array('code'=>0,"msg"=>'','count'=>$count,'data'=>$data);
    		// print_r($arr);
    		$this->ajaxReturn($arr,'json');
    		// echo json_encode($arr);
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
    public function showSlideList(){
    	// layout(false);
    	$id = I('get.id',1,'intval');
    	$model = M('slide_item');
    	$data  = $model->field('id,status,list_order,title,url,description')->where(array('slide_id'=>$id))->select();
    	$this->ajaxReturn($data,'json');	
    	// $this->display();
    }

    public function addHandle(){
    	
    }

}