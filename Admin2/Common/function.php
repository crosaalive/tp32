<?php
/**
 * 递归函数
 */
	// function recursion($data, $id=0) {
	//  	$list = array();
	//  	foreach($data as $v) {
	//  		if($v['pid'] == $id) {
	//  			$v['son'] = recursion($data, $v['id']);
	//  			if(empty($v['son'])) {
	//  				unset($v['son']);
	//  			}
	//  			array_push($list, $v);
	//  		}
	// 	}
	//  return $list;
	// }

// function articleList(){
// 	return  M('article')->where('recycle=0')
// 		->field('id,title,content,user_id,user_name,recycle,created,click,cat_id,is_show,cat_name')
// 		->join('LEFT JOIN __CAT__ ON __ARTICLE__.cat_id = __CAT__.cid')
// 		->order('created desc')
// 		->limit($Page->firstRow.','.$Page->listRows)
// 		->select();//文章与分类关联数据
// }
	/**
  * 格式化字节大小
  * @param  number $size      字节数
  * @param  string $delimiter 数字和单位分隔符
  * @return string            格式化后的带单位的大小
  */
function format_bytes($size, $delimiter = '') {
     $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
     for ($i = 0; $size >= 1024 && $i < 5; $i++) $size /= 1024;
     return round($size, 2) . $delimiter . $units[$i];
 }
/**
 * [path ] 动态获取 "模块/控制器/方法"" 名称
 * @return [type] [返回 模块/控制器/方法 名称]
 */
function path(){
	return strtolower(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME);
}
