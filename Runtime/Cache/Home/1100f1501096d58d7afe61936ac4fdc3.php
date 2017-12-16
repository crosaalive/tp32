<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo ($result['title']); ?></title>
	<link rel="stylesheet" href="/thinkphp32/Public/css/index.css">
	<script type="text/javascript" src="/thinkphp32/Public/js/jquery.min.js"></script>
	<script>
		$(".hot").mouseover(function(){
  			$(this).css("background-color","#f77825");
		});
	</script>
	<style>
	.position{
		/*background: #ACA6A6;*/
		width: 660px;
		height: 36px;
		font-size: 16px;
		line-height: 20px;
		padding: 0 5px;
		color: #6F6E6E;
	}
	.position a{
		font-size: 16px;
		color: #6F6E6E;
		text-decoration: none;		
	}
	.position a:hover{
		text-decoration: underline;
		color: #494747;	
		font-size: 20px;
	}

	.article_detail{
		width: 660px;
		overflow: hidden;
	}
	.article_detail li{
		list-style: none;
		margin: 20px;
	}
	.article_title{
		color: #38485A;	
	}
	.article_info{
		padding: 3px;
		text-align: center;
		border:dotted 1px #B5B7B5;
		margin-bottom: 60px;
		color: #6A6767
	}
	.article_info span {
		padding-right: 30px;
	}
	.article_content{
		/*border-right:3px #DBE9E7 dotted;*/
	}

	</style>
</head>
<body>

	<div class="top">
		<div class="logo"><a href="/"><img src="/thinkphp32/Public/images/logo.jpg" alt=""></a></div>
		<div class="nav">
			<ul>
				<?php if(is_array($nav)): foreach($nav as $key=>$v): ?><li><a href="<?php echo ($na['url']); ?>"><?php echo ($v['name']); ?></a></li><?php endforeach; endif; ?>

			</ul>
		</div>
	</div>

	<div class="clear"></div>

	<div class="content">
		<div class="content_l">

			<div class="position">您现在的位置是：<a href="<?php echo U('Home/Index/');?>">首页</a> > 
			<?php if($cid['cid'] != 0 ): ?><a href="<?php echo U('Home/Index/catList',array('cid'=>$cid['cid']));?>"><?php echo ($cid['cat_name']); ?></a>
    		<?php else: ?> 文章详情<?php endif; ?> </div>

			<div class="clear"></div>
			<div class="article_detail">
					<li class="article_title"><h3><?php echo ($result['title']); ?></h3></li>
					<li class="article_info">
						<span>发布时间 <?php echo (date('Y-m-d ',$$result['created'])); ?></span>
						<span>编辑: <?php echo ($result['user_name']); ?></span>
						<span>浏览(<?php echo ($result['click']); ?>)</span>
					</li>
					<li class="article_content"><?php echo htmlspecialchars_decode($result['content']); ?></p></li>
			</div>


			<br>
			<div class="clear"></div>
 </div>

<div class="middle"></div>	
		<div class="content_r">
			<div class="cat_r">
			<!-- 关注我 -->
			<div class="focus">
				<h3>关注我</h3>
				<ul>
					<li><a href=""><img src="/thinkphp32/Public/images/xl.jpg" alt="联系邮箱"></a></li>
					<li><a href=""><img src="/thinkphp32/Public/images/yx.jpg" alt="QQ群讨论"></a></li>
					<li><a href="https://github.com/"><img src="/thinkphp32/Public/images/img03.gif" alt="联系邮箱"></a></li>
				</ul>
			</div>
			<!-- 关注我结束 -->
			<!-- ad_1 -->
			<div class="banner_1"><img src="/thinkphp32/Public/images/ad_1.jpg" alt=""></div>
			<!-- 栏目导航 -->
					<div class="cat_title"><h3>栏目导航</h3></div>

					<div class="category">
							<li>
							<?php if(is_array($cat)): foreach($cat as $key=>$cate): ?><li><a href="<?php echo U('Home/Index/catList',array('cid'=>$cate['cid']));?>"><?php echo ($cate['cat_name']); ?></a></li><?php endforeach; endif; ?>
							</li>
					</div>
			</div>
			<!-- ad_2 -->
			<div class="banner_2">
				<p><img src="/thinkphp32/Public/images/ad002.gif" alt=""></p>
			</div>

			<!-- 热门文章 -->
			<div class="tab">
				<li id="hot" class=""><h3>热门文章</h3></li>
			</div>
			<div class="hot_list">


				<?php if(is_array($hot)): foreach($hot as $key=>$h): ?><li><a href="<?php echo U('Home/Index/content',array('id'=>$h['id']));?>">
					<?php echo $h['title']; ?>
					</a></li><?php endforeach; endif; ?>
			</div>
			<!-- ad_3 -->
			<div class="banner_3">
				<a href=""><img src="/thinkphp32/Public/images/a004.gif" alt=""></a>
			</div>
			<!-- 友情链接 -->
			<div class="link">
				<h3>
					<a href="#">友情链接</a>
				</h3>
			</div>
			<div class="url">
				<?php if(is_array($link)): foreach($link as $key=>$lin): ?><li><a href="<?php echo ($lin['url']); ?>"><?php echo ($lin['desc']); ?></a></li><?php endforeach; endif; ?>
<!-- 				<li><a href="#">测试</a></li> -->
			</div>


		</div>
	</div>
	
	<div class="clear"></div>
	<br>
<div class="footer"><p><a href="http://www.miitbeian.gov.cn"> &nbsp;粤ICP备15092204号</a></p></div>
</body>
</html>