<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\CatModel;
use Admin\Model\ArticleModel;
use Think\Page;
use Think\Upload;
use Think\Image;
class ArticleController extends CommonController{
/**
 *文章列表 
 */
	public function index(){
		$article    = M('article');
		$count      = $article->where('recycle=0')->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(5)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list 		= $article->where('recycle=0')
						->field('id,title,content,user_id,user_name,recycle,thumb,created,click,cat_id,is_show,cat_name')
						->join('LEFT JOIN __CAT__ ON __ARTICLE__.cat_id = __CAT__.cid')
						->order('created desc')
						->limit($Page->firstRow.','.$Page->listRows)
						->select();//文章与分类关联数据
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

/**
 * 文章添加表单
 */
	public function addArticle(){
		$this->assign('list',CatModel::catList());//获取分类列表
		$this->display();
	}

/**
 * 文章发布处理
 */
	public function addHandle(){

		$s 					= D('article');
		$data['title'] 		= stripslashes(I('post.title','00'));
		$data['content'] 	= stripslashes(I('post.content','00'));
		$data['cat_id'] 	= I('post.cat_id','','intval');
		$data['user_name']	= $_SESSION['user_name'];
		$data['user_id']	= $_SESSION['user_id'];
		$data['is_show']	= I('post.is_show','0','intval');
		$data['created']	= time();	
		$config = C('THUMB_CONFIG');//图片默认配置
		$upload = new \Think\Upload($config);// 实例化上传类
	    $info   =   $upload->upload();
	    if($info) {// 上传成功
	        $data['thumb']	= $info['photo']['savepath'].$info['photo']['savename'];	//缩略图路径
	    }
		if (!$s->create($data)){// 对$data['title']数据进行验证
			$this->error('1111111','addArticle',1);
		}else{
	     	$result = ArticleModel::addData($data);//添加文章
			if ($result) {
				$this->success('1','index',2);
			} else{
				$this->error('2','index',3);
			}
		}	
	}
/**
 * [editArticle 编辑文章表单]
 * @return [type] [description]
 */
	public function editArticle(){
		$id 		= I('id','','intval');
		$result 	=ArticleModel::articleList($id);//获取分一条文章记录
		if ($id && $result) {
			$this->assign('content',$result);
			$this->assign('list',CatModel::catList());//获取分类列表
			$this->display();
		} else{
			$this->error('无效参数或文章不存在',U('index'),2);
		}		
	}

/**
 * 文章编辑处理
 */
	public function editHandle(){

		echo "string";
		die;
		$is_edit			= I('post.edit','','intval');
		$id['id']			= I('post.id','','intval');
		$data['title'] 		= stripslashes(I('post.title',''));
		$data['content'] 	= stripslashes(I('post.content','0'));
		$data['cat_id'] 	= I('post.cat_id','','intval');
		$data['is_show']	= I('post.is_show','0','intval');
		$data['modified']	= time();

		$config = C('THUMB_CONFIG');//图片默认配置
		$upload = new \Think\Upload($config);// 实例化上传类
	    $info   =   $upload->upload();
	    if($info) {// 图片上传成功则更新到表,否则默认不更新
	        $data['thumb']	= $info['photo']['savepath'].$info['photo']['savename'];	//缩略图路径
	    }
		if ($is_edit && $id['id']) {
			$res = ArticleModel::saveData($id,$data);//编辑保存
			if ($res) {
					$this->success('编辑成功','index',1);
				} else{
					$this->error('编辑失败','index',1);
			} 
		} else{
			$this->error('文章非法编辑','index',1);
		}
	}

/**
 * 文章删除放到回收站处理
 */
	public function delArticle(){
   		$id              = I('a_id','','intval');//文章id
		$result = M('article')->where(array('id' =>$id))->save(array('recycle' =>1));//根据文章id更改回收站回收站状态
		$this->ajaxReturn($result);
	}

}

