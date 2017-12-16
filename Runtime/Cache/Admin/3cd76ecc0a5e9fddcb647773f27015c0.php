<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>后台管理系统</title>
  <link rel="stylesheet" href="/Public/layui/css/layui.css">
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
      
              
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
  <legend>幻灯片管理</legend>
</fieldset>
 
<div class="layui-tab">
  <ul class="layui-tab-title">
    <li class="layui-this" id="tab2">幻灯片列表</li>
    <li >添加幻灯片</li>
  <!--   <li>权限分配</li>
    <li>商品管理</li>
    <li>订单管理</li> -->
  </ul>
  <div class="layui-tab-content">
    <div class="layui-tab-item layui-show">

<!-- 列表开始 -->
<table id="demo" lay-filter="test"></table>

<p id = "test"></p>

<!-- <script src="/Public/layui/layui.js" charset="utf-8"></script> -->


<!-- <script src="http://cdn.staticfile.org/jquery/1.7.1/jquery.min.js"></script> -->
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>     
    // $(document).ready(function(){       //城市列表
    //     $("#tab2").click(function(){
    //         $.ajax({
    //             type: "get",
    //             url: "<?php echo U('Admin/Slide/getSlideData');?>",
    //             // data: "value="+$(this).val(),
    //             dataType:"json",  
    //             success: function(data){
    //                 $.each(data, function(index,val){
    //                   console.log(data);
    //                     // alert( "Item  "+index + " "+ val.id + " : " + val.name );
    //                     var result = "Item  "+index +' value ="'+ val +"<br>" //+index.code+'">'+index.msg+"<br>";
    //                     $("#test").append(result);
    //                 });   
    //             }           
    //           });         
    //       });
    //     });
</script>


<script>
layui.use('table', function(){
  var table = layui.table;
  //第一个实例
  table.render({
    elem: '#demo'
    ,height: 315
    ,url:"<?php echo U('Admin/Slide/getSlideData');?>"
    ,page: true //开启分页
    ,data: [[
      {field:'id', width:80, title: 'ID'}
      ,{field:'status', width:80, title: '启用状态'}
      ,{field:'add_time', width:80, title: '添加时间'}
      ,{field:'name', width:130, title: '名称'}
      ,{field:'remark', title: '备注', width: '30%', minWidth: 100}
    ]]
 
  });
  
});
// alert(data);
</script>



<!-- 列表结束 -->
    </div>

    <!-- 内容2开始 -->
    <div class="layui-tab-item">内容2</div>
    <!-- 内容2结束 -->
  </div>
</div>

<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
</script>

    </div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
   - 底部固定区域
  </div>
</div>
<script src="/Public/layui/layui.all.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
</body>
</html>