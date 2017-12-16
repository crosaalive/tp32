<?php
namespace Admin\Controller;
class LinkController extends CommonController {
    public function index(){ //友情链接列表
    	$list = M('link')->select();
    	$this->assign('list',$list);
    	$this->display();
    }
/**
 * [addLink 添加表单]
 */
    public function addLink(){
    	$this->display();
    }
/**
 * [addHandle 添加处理]
 */
    public function addHandle(){
	    if (IS_POST) {
			$data['url'] = stripslashes(I('post.url',''));
	    	$data['sort'] = I('post.sort','','intval');
	    	$data['desc'] = stripslashes(I ('post.desc',''));
	    	$result = M('link')->add($data);
		if ($result) {
			$this->success('链接已添加',U('addLink'));
		} else{
			$this->error('链接添加失败',U('addLink'));
			}	
		} else {
			$this->error('非法提交数据',U('index'));
    		}
    }
/**
 * [editLink  编辑表单]
 * @return [type] [description]
 */
    public function editLink(){
		$id['id'] = I('id','','intval');
		$record = M('link')->where($id)->find();
		$this->assign('list',$record);
		$this->display();
    }
/**
 * [editHandle 编辑链接处理]
 * @return [type] [description]
 */
    public function editHandle(){
	    if (IS_POST) {
	    	$id['id']	  = I('post.id','','intval'); 
			$data['url']  = stripslashes(I('post.url',''));
	    	$data['sort'] = stripslashes(I('post.sort','','intval'));
	    	$data['desc'] = stripslashes(I ('post.desc',''));
	    	$result = M('link')->where($id)->save($data);
		if ($result) {
			$this->success('链接已更改',U('index'));
		} else{
			$this->error('链接更改失败!!!!',U('index'));
			}	
		} else {
			$this->error('非法提交数据!!!!',U('index'));
    		}
    }
/**
 * [delLink 删除链接]
 * @return [type] [description]
 */
    public function delLink(){
    	$id['id'] = I('id','','intval');
    	$result = M('link')->where($id)->delete();
    	if ($result) {
    		$this->success('链接已删除',U('index'));
    	} else{
    		$this->success('链接删除失败',U('index'));
    	}
    }
}

?>
