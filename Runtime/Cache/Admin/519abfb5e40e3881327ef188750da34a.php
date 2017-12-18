<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>后台管理系统</title>
  <link rel="stylesheet" href="/Public/layui/css/layui.css">
  <script src="/Public/layui/layui.all.js"></script>
  <script src="/Public/js/jquery.min.js"></script>
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
            <!-- <dd><a href="/index.php/Admin/Slide/Slide/index">幻灯片</a></dd> -->
            <dd><a href="<?php echo U('Admin/Slide/index');?>">幻灯片</a></dd>
            <dd><a href="<?php echo U('Admin/Slide/showList');?>">幻灯片</a></dd>
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
      <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="//res.layui.com/layui/dist/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>
              
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
  <legend>默认风格的Tab</legend>
</fieldset>
 
<div class="layui-tab">
  <ul class="layui-tab-title">
    <li class="layui-this">网站设置</li>
    <li>用户管理</li>
    <li>权限分配</li>
    <li>商品管理</li>
    <li>订单管理</li>
  </ul>
  <div class="layui-tab-content">
    <div class="layui-tab-item layui-show">
      1. 高度默认自适应，也可以随意固宽。
      <br>2. Tab进行了响应式处理，所以无需担心数量多少。
    </div>
    <div class="layui-tab-item">内容2</div>
    <div class="layui-tab-item">内容3</div>
    <div class="layui-tab-item">内容4</div>
    <div class="layui-tab-item">内容5</div>
  </div>
</div>
           
          
<script src="//res.layui.com/layui/dist/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use('element', function(){
  var $ = layui.jquery
  ,element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
  
  //触发事件
  var active = {
    tabAdd: function(){
      //新增一个Tab项
      element.tabAdd('demo', {
        title: '新选项'+ (Math.random()*1000|0) //用于演示
        ,content: '内容'+ (Math.random()*1000|0)
        ,id: new Date().getTime() //实际使用一般是规定好的id，这里以时间戳模拟下
      })
    }
    ,tabDelete: function(othis){
      //删除指定Tab项
      element.tabDelete('demo', '44'); //删除：“商品管理”
      
      
      othis.addClass('layui-btn-disabled');
    }
    ,tabChange: function(){
      //切换到指定Tab项
      element.tabChange('demo', '22'); //切换到：用户管理
    }
  };
  
  $('.site-demo-active').on('click', function(){
    var othis = $(this), type = othis.data('type');
    active[type] ? active[type].call(this, othis) : '';
  });
  
  //Hash地址的定位
  var layid = location.hash.replace(/^#test=/, '');
  element.tabChange('test', layid);
  
  element.on('tab(test)', function(elem){
    location.hash = 'test='+ $(this).attr('lay-id');
  });
  
});
</script>

</body>
</html>
    </div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
   - 底部固定区域
  </div>
</div>

<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
</body>
</html>