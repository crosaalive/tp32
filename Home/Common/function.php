<?php

/**
 * [getHot 获取文章点击前8记录]
 * @param  integer[记录条数] 
 * @return [type]         [默认返回8条]
 */
function getHot($limit=8){
	return M('article')->where(array('recycle'=>0,'is_show'=>1))
						->field('id,title,content,user_id,user_name,recycle,created,click,thumb,cat_id,is_show,cat_name')
						->join('LEFT JOIN __CAT__ ON __ARTICLE__.cat_id = __CAT__.cid')
						->order('created desc')
						->limit($Page->firstRow.','.$Page->listRows)
						->select();//文章与分类关联数据
}
/**
 * [getAritcle 根据发布时间降序默认获取文章8条记录]
 * @param  integer $star  [起始位置]
 * @param  integer $limit [记录数]
 * @return [array]         [返回记录数组]
 */
function getAritcle($star=0,$limit=8,$cid=''){
	$data['recycle'] = 0;
	$data['is_show'] = 1;
	if ($cid) {
		$data['cat_id'] = $cid;
	}
	return M('article')->where($data)
						->field('id,title,content,user_id,user_name,recycle,created,click,cat_id,is_show,thumb,cat_name')
						->join('LEFT JOIN __CAT__ ON __ARTICLE__.cat_id = __CAT__.cid')
						->order('created desc')
						->limit($star.','.$limit)
						->select();//文章最新记录
}

/**
 * [getNav 获取导航信息]
 * @param  integer $limit [记录条数]
 * @return [type]         [返回结果集]
 */
function getNav($limit=6){
	return M('nav')->field('nid,url,name')
					->order('sort desc')
					->limit("0,$limit")
					->select();
}
/**
 * [catInfo 根据分类id获取一条分类信息]
 * @param  string $cid [分类cid]
 * @return [array]     
 */
function catInfo($cid=''){
	return M('cat')->where(array('cid'=>$cid))
            ->field('cid,cat_name')
            ->find();//获取分类信息
}
/**
 * [getCat 获取分类记录]
 * @param  string $sort  [排序字段]
 * @param  string $order [排序方式]
 * @return [array]        [返回分类记录]
 */
function getCat($sort='sort',$order='desc'){
	return M('cat')->field('cid,cat_name')
				->order($sort.' '.$order)
				->limit('0,10')
				->select();
}
/**
 * [getLink 获取友情链接]
 * $limit   记录条数
 * @return [array] [返回记录集]
 */
function getLink($limit=15){
	return M('link')->field('url,desc')
				->limit("0,$limit")
				->order('sort desc')
				->select();
}
