<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\CatModel;
class CategoryController extends CommonController{
	/**
	 * 分类列表
	 */
    public function index(){
    	$this->assign('list',CatModel::catList());//获取分类列表
    	$this->display();
    }

/**
 * 添加分类表单
 */
    public function addCategory(){
    	$this->assign('list',CatModel::catList());//获取分类列表
    	$this->display();
    	
    }
/**
 * 添加/编辑 分类处理 
 *t
 */
    public function formHandle(){
    	$model 				      = M('cat');
      $sid                = I('post.sid','','intval');//编辑表单id
    	$data['parent_id']  = I('post.parent_id','','intval');//父级分类id
    	$data['cat_name']  	= stripslashes(I('post.cat_name','0'));
    	$data['sort'] 		  = I('post.sort','0','intval');
      // var_dump($data);die;
    	if ($sid) {		//有$cid  则更新,没有则新增
    		  $res = $model->where(array('cid'=>$sid))->save($data);
          if ($res) {
              $this->success('编辑成功',U('index'),1);
          } else {
              $this->error('编辑失败',U('index'),2);
            }
    	} else{
    		  $result = $model->add($data);
          if ($result) {
              $this->success('添加成功',U('index'),1);
          } else {
              $this->error('添加失败',U('index'),2);
          }
    	}
    }
/**
 * 分类编辑
 * $data['cid'] 根据分类id编辑
 */
    public function editCategory(){
      $id['cid']      = I('cid','0','intval');
      $data           = M('cat')->where($id)->find();
 		  if ($data) {
        $this->assign('data',$data);
        $this->assign('list',CatModel::catList());//获取分类列表
        $this->display();
      }	else{
          $this->error('分类不存在!!',U('index'),1);
      }
  }
/**
 * 删除处理
 * 返回值 bool
 */
   	public function delCategory(){
   		$data = M('cat');
   		$id   = I('post.cid','','intval');
   		if ($id) {
   		 	$result = $data->where(array('cid' =>$id))->delete();//根据分类id删除记录
   			$this->ajaxReturn($result);
   		} else{
   			$this->ajaxReturn(0);
   		}
   	}

}