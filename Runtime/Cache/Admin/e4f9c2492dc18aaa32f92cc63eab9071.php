<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/Public/layui/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>  
<div style="margin-bottom: 5px;">          
 
<!-- 示例-970 -->
<ins class="adsbygoogle" style="display:inline-block;width:970px;height:90px" data-ad-client="ca-pub-6111334333458862" data-ad-slot="3820120620"></ins>
 
</div>
 
<div class="layui-btn-group demoTable">
  <button class="layui-btn" data-type="getCheckData">获取选中行数据</button>
  <button class="layui-btn" data-type="getCheckLength">获取选中数目</button>
  <button class="layui-btn" data-type="isAll">验证是否全选</button>
</div>
 
<table class="layui-table" lay-data="{width: 892, height:332, url:'<?php echo U('Admin/Slide/getSlideData');?>', page:true, id:'idTest'}" lay-filter="demo">
  <thead>
    <tr>
      <th lay-data="{type:'checkbox', fixed: 'left'}"></th>
      <th lay-data="{field:'id', width:80, sort: true, fixed: true}">ID</th>
      <th lay-data="{field:'name', width:80}">名称</th>
      <th lay-data="{field:'add_time', width:80, sort: true}">时间</th>
      <th lay-data="{field:'remark', width:80}">备注</th>
      <th lay-data="{field:'status', width:80}">状态</th>
      <th lay-data="{fixed: 'right', width:178, align:'center', toolbar: '#barDemo'}"></th>
    </tr>
  </thead>
</table>
 
<script type="text/html" id="barDemo">
  <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a>
  <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
               
          
<script src="/Public/layui/layui.all.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use('table', function(){
  var table = layui.table;
  //监听表格复选框选择
  table.on('checkbox(demo)', function(obj){
    console.log(obj)
  });
  //监听工具条
  table.on('tool(demo)', function(obj){
    var data = obj.data;
    if(obj.event === 'detail'){
      layer.msg('ID：'+ data.id + ' 的查看操作');
    } else if(obj.event === 'del'){
      layer.confirm('真的删除行么', function(index){
        obj.del();
        layer.close(index);
      });
    } else if(obj.event === 'edit'){
      layer.alert('编辑行：<br>'+ JSON.stringify(data))
    }
  });
  
  var $ = layui.$, active = {
    getCheckData: function(){ //获取选中数据
      var checkStatus = table.checkStatus('idTest')
      ,data = checkStatus.data;
      layer.alert(JSON.stringify(data));
    }
    ,getCheckLength: function(){ //获取选中数目
      var checkStatus = table.checkStatus('idTest')
      ,data = checkStatus.data;
      layer.msg('选中了：'+ data.length + ' 个');
    }
    ,isAll: function(){ //验证是否全选
      var checkStatus = table.checkStatus('idTest');
      layer.msg(checkStatus.isAll ? '全选': '未全选')
    }
  };
  
  $('.demoTable .layui-btn').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
  });
});
</script>
<script>
// 动态加载数据
// layui.use('table', function(){
//   var table = layui.table;
//   //第一个实例
//   table.render({
//     elem: '#demo'
//     ,height: 480
//     // ,method: 'get' //方式
//     ,limit: 10 //
//     ,url: "<?php echo U('Admin/Slide/getSlideData');?>" //数据接口
//     ,page: true //开启分页
//     ,cols: [[ //表头
//       {field: 'id', title: 'ID', width:80,}
//       ,{field: 'status', title: '状态', width:80}
//       ,{field: 'add_time', title: '添加时间', width:150}
//       ,{field: 'name', title: '名称', width:80}
//       ,{field: 'remark', title: '备注', width: 177}
//     ]]
//   });

// });
</script>

</body>
</html>













<!--               
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
  <legend>幻灯片管理</legend>
</fieldset> -->
 
<div class="layui-tab">
  <ul class="layui-tab-title">
    <li class="layui-this" id="tab2">幻灯片列表管理</li>
    <li >添加幻灯片</li>
  <!--   <li>权限分配</li>
    <li>商品管理</li>
    <li>订单管理</li> -->
  </ul>
  <div class="layui-tab-content">
    <div class="layui-tab-item layui-show">

<!-- 列表开始 -->

<!-- <table class="layui-hide" ></table> -->
<table id="demo" lay-filter="test" id="LAY_table_user"></table>
<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>
    <a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>
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
// 动态加载数据
// layui.use('table', function(){
//   var table = layui.table;
//   //第一个实例
//   table.render({
//     elem: '#demo'
//     ,height: 480
//     // ,method: 'get' //方式
//     ,limit: 10 //
//     ,url: "<?php echo U('Admin/Slide/getSlideData');?>" //数据接口
//     ,page: true //开启分页
//     ,cols: [[ //表头
//       {field: 'id', title: 'ID', width:80,}
//       ,{field: 'status', title: '状态', width:80}
//       ,{field: 'add_time', title: '添加时间', width:150}
//       ,{field: 'name', title: '名称', width:80}
//       ,{field: 'remark', title: '备注', width: 177}
//     ]]
//   });

// });
</script>