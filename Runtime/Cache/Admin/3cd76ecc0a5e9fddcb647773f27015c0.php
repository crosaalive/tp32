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
      
<div class="layui-tab">
  <ul class="layui-tab-title">
    <li class="layui-this" id="tab2">幻灯片列表管理</li>
    <li >添加幻灯片</li>
  </ul>
  <div class="layui-tab-content">
    <div class="layui-tab-item layui-show">

<script type="text/html" id="checkboxTpl">
  <!-- 这里的 checked 的状态只是演示 -->
  <input type="checkbox" name="lock" value="{{d.id}}" title="启用" lay-filter="lockDemo" {{ d.id == 1 ? 'checked' : '' }}>
</script>

<!-- <button class="layui-btn " id="reload2" >刷新</button> -->
<table class="layui-table" lay-data="{width:900, height:480, url:'<?php echo U('Admin/Slide/getSlideData');?>',limit:10, page:true, id:'idTest'}" lay-filter="demo">
  <thead>
    <tr>
      <th lay-data="{type:'checkbox', width:40, fixed: 'left'}"></th>
      <th lay-data="{field:'id', width:60, align:'center', sort: true, fixed: true}">ID</th>
      <th lay-data="{field:'name', width:130}">名称</th>
      <th lay-data="{field:'add_time', width:180, align:'center', sort: true}">时间</th>
      <th lay-data="{field:'remark', width:180}">备注</th>
      <th lay-data="{field:'status', width:110, align:'center', sort: true, templet: '#checkboxTpl', unresize: true}">启用状态</th>
      <th lay-data="{fixed: 'right', width:178, align:'center', toolbar: '#barDemo'}">操作</th>
    </tr>
  </thead>
</table>
<script type="text/html" id="barDemo">
  <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail" >设置</a>
  <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>

<!-- 内容1列表结束 -->

    </div>
    <!-- 内容2开始 -->
    <div class="layui-tab-item">

      <form class="layui-form" action="">
        <div class="layui-form-item">
           <div class="layui-form-item">
            <label class="layui-form-label">名称</label>
              <div class="layui-input-inline">
                <input type="text" name="name" lay-verify="required" id="name" placeholder="请输入幻灯片名称" autocomplete="off" class="layui-input">
              </div>
            </div>
        </div>
        
        <div class="layui-form-item layui-form-text">
          <label class="layui-form-label">备注</label>
          <div class="layui-input-block">
            <textarea placeholder="请输入内容" class="layui-textarea" name="remark" id="remark"></textarea>
          </div>
        </div>

        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" lay-filter="demo1" id="commit">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
          </div>
        </div>
      </form>

</div>
    <!-- 内容2结束 -->
  </div>
</div>

<script src="/Public/layui/layui.all.js" charset="utf-8"></script>
<script>
  layui.use('table', function(){
  var table = layui.table;
  var form = layui.form;
  //监听表格复选框选择
  table.on('checkbox(demo)', function(obj){
    console.log(obj)
  });
  //监听工具条
  table.on('tool(demo)', function(obj){
    var data = obj.data;
    if(obj.event === 'detail'){
      window.location.href="<?php echo U('Admin/Slide/showSlideList');?>"+"?id="+data.id; 
      //layer.msg('ID：'+ data.id + ' 的查看操作');
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

//监听锁定操作
  form.on('checkbox(lockDemo)', function(obj){
    layer.tips(this.value + ' ' + this.name + '：'+ obj.elem.checked, obj.othis);
  });

// $("#reload2").click(function(){
//   var tableObj = table.render({});
//   tableObj.reload(); //重载表格
//   // alert(111);
// })
</script>


<!-- 内容2js -->
<script>
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  
  //日期
  laydate.render({
    elem: '#date'
  });
  laydate.render({
    elem: '#date1'
  });
  
  //创建一个编辑器
  var editIndex = layedit.build('LAY_demo_editor');
 
  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '标题至少得5个字符啊';
      }
    }
    ,pass: [/(.+){6,12}$/, '密码必须6到12位']
    ,content: function(value){
      layedit.sync(editIndex);
    }
  });
  
  //监听指定开关
  form.on('switch(switchTest)', function(data){
    layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
      offset: '6px'
    });
    layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
  });
  
  //监听提交
  form.on('submit(demo1)', function(data){
    layer.alert(JSON.stringify(data.field), {
      title: '最终的提交信息'
    })
    return false;
  });
});
</script>

<script>     
    $(document).ready(function(){       //提交
        $("#commit").click(function(){
            $.ajax({
                type: "get",
                url: "<?php echo U('Admin/Slide/addHandle');?>",
                data: "name="+$('#name').val()+"&&remark="+$('#remark').val(),
                dataType:"json",  
                success: function(data){
                  alert(11);
                    // $.each(data, function(index,val){
                    //   //console.log(data);
                    //     // alert( "Item  "+index + " "+ val.id + " : " + val.name );
                    //     var result = "Item  "+index +' value ="'+ val +"<br>" //+index.code+'">'+index.msg+"<br>";
                    //     $("#test").append(result);
                    // });   
                }           
              });         
          });
        });
</script>
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