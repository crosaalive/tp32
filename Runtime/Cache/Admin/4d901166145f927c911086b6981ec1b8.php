<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>后台管理系统</title>
  <link rel="stylesheet" href="/layui//css/layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">

<!-- 行导航菜单开始 -->
  <div class="layui-header">
    <div class="layui-logo">管理系统</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="">控制台</a></li>
      <li class="layui-nav-item"><a href="">商品管理</a></li>
      <li class="layui-nav-item"><a href="">用户</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">其它系统</a>
        <dl class="layui-nav-child">
          <dd><a href="">邮件管理</a></dd>
          <dd><a href="">消息管理</a></dd>
          <dd><a href="">授权管理</a></dd>
        </dl>
      </li>
    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <!-- <img src="http://t.cn/RCzsdCq" class="layui-nav-img"> -->
          测试用户
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">退出</a></li>
    </ul>
  </div>
<!-- 行导航菜单结束 -->

  
  <!-- 左侧菜单 -->
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">内容管理</a>
          <dl class="layui-nav-child">
            <dd><a href="">导航菜单</a></dd>
            <!-- <?php echo U('Admin/Category/formHandle');?> -->
            <!-- <dd><a href="/index.php/Admin/Index/Slide/index">幻灯片</a></dd> -->
            <dd><a href="<?php echo U('Admin/Slide/index');?>">幻灯片</a></dd>
            <dd><a href="javascript:;">分类管理</a></dd>
            <dd><a href="javascript:;">文章管理</a></dd>
            <dd><a href="">SEO设置</a></dd>
            <dd><a href="">站点配置</a></dd>
          </dl>
        </li>

        <li class="layui-nav-item">
          <a href="javascript:;">产品信息</a>
          <dl class="layui-nav-child">
            <dd><a href="">添加产品</a></dd>
            <dd><a href="">产品列表</a></dd>
          </dl>
        </li>

        <li class="layui-nav-item">
          <a href="javascript:;">系统配置</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">用户管理</a></dd>
            <dd><a href="">用户组管理</a></dd>
            <dd><a href="">权限管理</a></dd>
          </dl>
        </li>
<!-- 
         <li class="layui-nav-item"><a href=""></a></li>
        <li class="layui-nav-item"><a href="">添加产品</a></li>
        <li class="layui-nav-item"><a href="">产品列表</a></li> -->

      </ul>
    </div>
  </div>
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Document</title>
</head>
<body>
  <p>dddd</p>
</body>
</html>
    </div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
   - 底部固定区域
  </div>
</div>
<script src="./layui/layui.all.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
</body>
</html>