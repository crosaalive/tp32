<?php
/**
 * cat Model
 */
namespace Admin\Model;
use Think\Model;
class CatModel extends Model{
	// protected $tableName = 'cat'; 
	static	public function catList(){
		$list = M('cat')->field('cid,parent_id,cat_name,sort')->select();
		return $list;
	}
}

?>