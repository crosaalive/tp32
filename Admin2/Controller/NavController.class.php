<?php
namespace Admin\Controller;
class NavController extends CommonController {
    public function index(){ //菜单列表
    	$list = M('nav')->select();
    	$this->assign('list',$list);
    	$this->display();
    }
    /**
     * [addNav 添加表单]
     */
    public function addNav(){
    	$this->display();
    }
/**
 * [addHandle 添加菜单处理]
 */
    public  function addHandle(){
    	if (IS_POST) {
    		$data['name'] = stripslashes(I('post.name',''));
	    	$data['sort'] = I('post.sort','','intval');
	    	$data['url'] = I ('post.url','');
	    	$result = M('nav')->add($data);
    		if ($result) {
    			$this->success('导航菜单已添加',U('addNav'));
    		} else{
    			$this->error('导航菜单添加失败',U('addNav'));
    		}
    	} else {
    		$this->error('非法提交数据',U('index'));
    	}
    }
    /**
     * [delNav 删除菜单]
     * @return [type] [urlription]
     */
    public function delNav(){
		$id['nid'] = I('id','','intval');
		$result = M('nav')->where($id)->delete();
		if ($result) {
			$this->success('导航菜单已删除',U('index'));
		} else{
			$this->error('导航菜单删除失败 ,请返回检查重新提交',U('index'));
		}
    }
    /**
     * [editNav 编辑菜单表单]
     * @return [type] [urlription]
     */
     public function editNav(){
		$id['nid'] = I('id','','intval');
		$result = M('nav')->where($id)->select();
		$this->assign('result',$result);
		$this->display();
    }
    /**
     * [addHandle 编辑菜单处理]
     */
        public  function editHandle(){
    	if (IS_POST) {
    		$id 		  = I('post.id','','intval');
    		$data['name'] = stripslashes(I('post.name',''));
	    	$data['sort'] = I('post.sort','','intval');
	    	$data['url'] = I ('post.url','');
            
	    	$result = M('nav')->where(array('nid'=>$id))->save($data);
    		if ($result) {
    			$this->success('导航菜单编辑成功',U('index'));
    		} else{
    			$this->error('导航菜单编辑失败',U('index'));
    		}
    	} else {
    		$this->error('非法编辑数据',U('index'));
    	}
    }
}

?>