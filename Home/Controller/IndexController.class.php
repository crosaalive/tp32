<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class IndexController extends Controller {
    public function index(){
        $con        = M('article');
        $count      = $con ->where(array('recycle'=>0,'is_show'=>1))->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(8)
        $show    = $Page->show();// 分页显示输出
        $article  = getAritcle($Page->firstRow,$Page->listRows);//获取文章列表
        $this->assign('article',$article);
        $this->assign('page',$show);  //分页                   
        $hot     = getHot();    //获取热门点击文章                
        $nav     = getNav();//获取导航菜单
        $cat     = getCat();//获取分类信息
        $link    = getLink();//获取友情链接
		$this->assign('hot',$hot);
    	$this->assign('nav',$nav);
    	$this->assign('link',$link);
    	$this->assign('cat',$cat);
    	$this->display();
    }
/**
 * [content 获取文章详情]
 * @return [type] [description]
 */
    public function content(){
        if (IS_GET) {
            $con      = M('article');
            $data['id'] = I('get.id','intval');
            $data['is_show'] = '1';
            $data['recycle'] = '0';
            $result   = $con->field('id,title,content,user_id,user_name,created,click,cat_id,is_show')->where($data)->find();//文章信息
            if ($result) {
                $click['click'] =++$result['click'];
                $con->where(array('id'=>$result['id']))->save($click);//更新点击数
                $cid = catInfo($result['cat_id']);//获取文章所属分类信息
                $hot     = getHot(); //获取热门点击文章                
                $nav     = getNav();//获取导航菜单
                $cat     = getCat();//获取分类列表
                $link    = getLink();//获取友情链接
                $this->assign('cid',$cid);
                $this->assign('hot',$hot);
                $this->assign('nav',$nav);
                $this->assign('link',$link);
                $this->assign('cat',$cat);
                $this->assign('result',$result);
                $this->display();
            } else{
                $this->error('文章不存在....',U('index'));
            }
        }
    }
/**
 * [catList 获取指定分类文章列表]
 * @return [array] [description]
 */
    public function catList(){
        if (IS_GET) {
            $cid        = I('get.cid','','intval');
            $condition['recycle'] = 0;
            $condition['is_show'] = 1;
            $condition['cat_id']  = $cid;
            $con        = M('article');
            $count      = $con ->where( $condition)->count();// 查询满足要求的总记录数
            $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(8)
            $show     = $Page->show();// 分页显示输出
            $article  = getAritcle($Page->firstRow,$Page->listRows,$cid);//根据分类id获取文章列表
            $cid = catInfo($cid);//获取分类信息
            if ($cid) {
                $hot     = getHot(); //获取热门点击文章                
                $nav     = getNav();//获取导航菜单
                $cat     = getCat();//获取分类列表
                $link    = getLink();//获取友情链接
                $this->assign('cid',$cid);
                $this->assign('hot',$hot);
                $this->assign('nav',$nav);
                $this->assign('link',$link);
                $this->assign('cat',$cat);
                $this->assign('page',$show);
                $this->assign('article', $article);
                $this->display();  
            } else {
                 $this->error('分类不存在...........!!',U('index'),1);
            }
        } else {
            $this->error('非法请求...........!!',U('index'),1);
        }
    }
}