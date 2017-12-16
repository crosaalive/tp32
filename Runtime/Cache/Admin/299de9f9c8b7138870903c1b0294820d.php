<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>后台首页</title>
<!-- bootstrap 3.2 -->
<link rel="stylesheet" href="/thinkphp32/Public/bootstrap/css/bootstrap.min.css"/>
<script type="text/javascript" src="/thinkphp32/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/thinkphp32/Public/js/backup.js"></script>
<script type="text/javascript" src="/thinkphp32/Public/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/thinkphp32/Public/css/admin.css">
<script type="text/javascript" src="/thinkphp32/Public/js/menu.js"></script>
<!-- 上传预览js -->
<script type="text/javascript" src="/thinkphp32/Public/js/upload.js"></script>
<!-- kindeditor -->
<script type="text/javascript" src="/thinkphp32/Public/kindeditor/kindeditor-all.js"></script>
<script>
        var editor;
        KindEditor.ready(function(K) {
                editor = K.create('#editor_id', {
                        resizeType : 2,
                        uploadJson : '/thinkphp32/Public/kindeditor/php/upload_json.php' // 相对于当前页面的路径
                });
        });
</script>
</head>
<body>
<div class="top">
	<div class="houtai">
		<p><a href="<?php echo U('Admin/index/index');?>">后台管理</a> <span style="float:right;margin-left:40px;"><a href="<?php echo U('Admin/Login/logout/');?>"><?php echo ($_SESSION['user_name']?"退出":"登录") ?></a> </span> &nbsp; &nbsp; &nbsp; &nbsp;<span style="float:right;margin-left:40px;"><?php echo $_SESSION['user_name']; ?></span></p>
	</div>
</div>
<div>
	<div class="left">
		<div class="list">
			<ul class="yiji">

				<li><a href="#" class="inactive">设置</a>
					<ul style="display: none">
						<li class="last"><a href="#">幻灯片</a></li>
						<li class=""><a href="<?php echo U('Admin/Link/index');?>">友情链接</a></li>  
						<li class="last"><a href="#">网站信息</a></li> 
						<li class="last"><a href="#">清除缓存</a></li> 
					</ul>
				</li>
				<li><a href="#" class="inactive">内容管理</a>
					<ul style="display: none">
						<li class="last"><a href="<?php echo U('Admin/Nav/index');?>">导航列表</a></li> 
						<li class="last"><a href="<?php echo U('Admin/Category/index');?>">分类列表</a></li> 
						<li class="last"><a href="<?php echo U('Admin/Article/index');?>">文章列表</a></li> 
						<li class="last"><a href="<?php echo U('Admin/Article/addArticle');?>">添加文章</a></li> 
						<li class="last"><a href="<?php echo U('Admin/Gallery/index');?>">相册管理</a></li> 

					</ul>
				</li>
				
				<li><a href="#" class="inactive">权限管理</a>
					<ul style="display: none">
						<li class="last"><a href="<?php echo U('Admin/AuthManager/index');?>">用户组管理</a></li> 
						<li class="last"><a href="<?php echo U('Admin/AuthManager/ruleList');?>">规则管理</a></li> 
						<li class="last"><a href="<?php echo U('Admin/User/index');?>">会员管理</a></li>
					</ul>
				</li>

				<li><a href="#" class="inactive">数据管理</a>
					<ul style="display: none">
						<li class="last"><a href="<?php echo U('Admin/Database/index',array('type'=>'export'));?>">备份数据库</a></li> 
						<li class="last"><a href="<?php echo U('Admin/Database/index',array('type'=>'import'));?>">还原数据库</a></li> 
					</ul>
				</li>

			<!-- 	<li><a href="#" class="inactive">一级</a>
					<ul style="display: none">
						<li><a href="#" class="inactive active">二级</a>
							<ul>
								<li><a href="#">测试</a></li>
								<li><a href="#">测试</a></li>
								<li><a href="#">测试</a></li>
								<li><a href="#">测试</a></li>
								<li><a href="#">测试</a></li>
								<li><a href="#">测试</a></li>
							</ul>
						</li>  
						<li class="last"><a href="#">二级</a></li> 
					</ul>
				</li> -->

			</ul>
		</div>
	</div>
	
	<div class="right">
		<style>

</style>
<script type="text/javascript">
// 分类删除操作
function del(id){
	if (confirm("确认删除 ? ")){  
		$.ajax({
		    type: "POST",
		    url: "/thinkphp32/index.php/Admin/Category/delCategory/",
		    data: "cid="+id,
		    success: function(msg){
     			if (msg) {
     				window.location.href="/thinkphp32/index.php/Admin/Category/"; 
     			}
   			}
		});
	}
}
</script>

<div  class="cat_list">
<ul>
	<li> <button class="btn " type="button"><a href="<?php echo U('Admin/Category/index');?>">分类列表</a></button> </li>
	<li> <button class="btn " type="button"><a href="<?php echo U('Admin/Category/addCategory');?>">添加分类</a></button> </li>
</ul>
<br>
<br>
<br>
<br>
<table class="table table-striped table-bordered table-hover" style="width:700px;">
   <thead>
     <tr>
       <th>排序</th>
       <th>ID</th>
        <th>所属分类ID</th>
       <th>分类名称</th>
       <th>操作</th>
     </tr>
   </thead>
   <tbody>
	<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
       <td><?php echo ($v['sort']); ?></td>
       <td><?php echo ($v['cid']); ?></td>
       <td><?php echo ($v['parent_id']); ?></td>
       <td><?php echo ($v['cat_name']); ?></td>
        <td>
        	<a href="<?php echo U('Admin/Category/form');?>">添加子类</a>  | 
        	<a href="<?php echo U('Admin/Category/editCategory',array('parent_id'=>$v['parent_id'],'cid'=>$v['cid'],'cat_name'=>$v['cat_name']));?>">修改</a> | 
        	<button class="btn btn-xs" type="button" onclick="del(<?php echo ($v['cid']); ?>)">删除</button>
        </td>
     </tr><?php endforeach; endif; ?>
   </tbody>
 </table> 
 </div>

	</div>
</div>

<div class="clear"></div>
<br><br>
<div class="footer">摸摸哒</div>
</body>
</html>