<?php if (!defined('THINK_PATH')) exit();?>  <link rel="stylesheet" href="/Public/layui/css/layui.css">
<table id="demo" lay-filter="test"></table>
<p>111111111</p>

<script>
layui.use('table', function(){
  var table = layui.table;
  //第一个实例
  table.render({
    elem: '#demo'
    ,height: 315
    ,url:"<?php echo U('Admin/Slide/getSlideData');?>"
    ,page: true //开启分页
    ,data: [
      {field:'id', width:80, title: 'ID'}
      ,{field:'status', width:80, title: '启用状态'}
      ,{field:'add_time', width:80, title: '添加时间'}
      ,{field:'name', width:130, title: '名称'}
      ,{field:'remark', title: '备注', width: '30%', minWidth: 100}
    ]
  });
  
});
</script>
<script src="/Public/layui/layui.all.js"></script>
<!-- <script src="/Public/layui/layui.js" charset="utf-8"></script> -->
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>