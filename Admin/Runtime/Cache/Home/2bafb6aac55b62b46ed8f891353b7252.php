<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>Unicorn Admin</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/coffee/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/coffee/Public/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/coffee/Public/css/colorpicker.css" />
        <link rel="stylesheet" href="/coffee/Public/css/datepicker.css" />
		<link rel="stylesheet" href="/coffee/Public/css/uniform.css" />
		<link rel="stylesheet" href="/coffee/Public/css/select2.css" />		
		<link rel="stylesheet" href="/coffee/Public/css/unicorn.main.css" />
		<link rel="stylesheet" href="/coffee/Public/css/unicorn.grey.css" class="skin-color" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<body>
		
		
		<div id="header">
			<h1><a href="./dashboard.html">Unicorn Admin</a></h1>		
		</div>
		
		<div id="search">
			<input type="text" placeholder="Search here..." /><button type="submit" class="tip-right" title="Search"><i class="icon-search icon-white"></i></button>
		</div>
		<div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
                <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">new message</a></li>
                        <li><a class="sInbox" title="" href="#">inbox</a></li>
                        <li><a class="sOutbox" title="" href="#">outbox</a></li>
                        <li><a class="sTrash" title="" href="#">trash</a></li>
                    </ul>
                </li>
                <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
                <li class="btn btn-inverse"><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </div>
            
		<div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-th-list"></i> </a>
			<ul>
				<li><a href="<?php echo U('Index/index');?>"><i class="icon icon-home"></i> <span>主页</span></a></li>
				<li class="submenu">
					<a href="<?php echo U('Picture/lunbo');?>"><i class="icon icon-th-list"></i> <span>推广</span> <span class="label">3</span></a>
					<ul>
						<li class="active"><a href="<?php echo U('Picture/lunbo');?>">轮播图</a></li>
						<li><a href="validation.html">Validation</a></li>
						<li><a href="wizard.html">Wizard</a></li>
					</ul>
				</li>
				<li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
				<li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Interface elements</span></a></li>
				<li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
				<li><a href="grid.html"><i class="icon icon-th-list"></i> <span>Grid Layout</span></a></li>
				<li class="submenu">
					<a href="<?php echo U('Content/bankuai_list');?>"><i class="icon icon-file"></i> <span>板块及内容管理</span> <span class="label">4</span></a>
					<ul>
						<li><a href="<?php echo U('Content/bankuai_list');?>">板块列表</a></li>
						<li><a href="chat.html">Support chat</a></li>
						<li><a href="calendar.html">Calendar</a></li>
						<li><a href="gallery.html">Gallery</a></li>
					</ul>
				</li>
				<li>
					<a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a>
				</li>
				<li>
					<a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a>
				</li>
			</ul>
		
		</div>
		

<style type="text/css">
.table th{
padding: 10px 0 10px 0;
font-size: 14px;
}
.container-fluid .row-fluid:first-child{
margin-top: 0;
}
</style>
<a href="<?php echo U('Picture/add');?>">
<div id="style-switcher" style="padding: 0 5% 0 0;"><span style="color: white;padding: 9% 0 0 0" >加</span></div>
</a>

<div id="content">
	<div id="content-header">
	<h1>Dashboard</h1>
		<div class="btn-group">
			<a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-file"></i></a>
			<a class="btn btn-large tip-bottom" title="Manage Users"><i class="icon-user"></i></a>
			<a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i>
			<span class="label label-important">5</span></a>
			<a class="btn btn-large tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
		</div>
	</div>
	<div id="breadcrumb">
		<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a href="#" class="current">轮播图</a>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-content nopadding">
					 <form id="form1" name="form1" method="post" action="" >
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>编号</th>
									<th>名称</th>
									<th>轮播连接</th>
									<th>轮播图</th>
									<th>创建时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							 <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
									<td style="width:5%"><?php echo ($v["id"]); ?></td>
				                    <td style="width:5%"><?php echo ($v["luname"]); ?></td>
				                    <td style="width:15%"><?php echo ($v["img_link"]); ?></td>
				                    <td style="width:20%;"><img style="width:337px;height:115px;" src="/coffee/Public/<?php echo ($v["img_url"]); ?>" id="img0" ></td>
				                    <td style="width:10%"><?php echo (date("Y-m-d H:i:s",$v["time"])); ?></td>
									<td style="width:10%"><a href="<?php echo U('Picture/edit',array('id'=>$v[id]));?>" class="btn btn-success" id="edit">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;"  class="btn btn-danger" onclick="return del(<?php echo ($v["id"]); ?>);" >删除</a></td>
								</tr><?php endforeach; endif; ?>
							</tbody>
						</table>							
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
            <script src="/coffee/Public/js/excanvas.min.js"></script>
            <script src="/coffee/Public/js/jquery.min.js"></script>
            <script src="/coffee/Public/js/jquery.ui.custom.js"></script>
            <script src="/coffee/Public/js/bootstrap.min.js"></script>
            <!--<script src="/coffee/Public/js/jquery.flot.min.js"></script>
             <script src="/coffee/Public/js/unicorn.dashboard.js"></script>
            <script src="/coffee/Public/js/jquery.flot.resize.min.js"></script>
             -->
            <script src="/coffee/Public/js/jquery.peity.min.js"></script>
            <script src="/coffee/Public/js/fullcalendar.min.js"></script>
           
           
            <script src="/coffee/Public/js/ace-extra.js"></script>
            <script src="/coffee/Public/layer/layer.js"></script>
            <script src="/coffee/Public/js/jquery.form.js"></script>
             <script src="/coffee/Public/js/unicorn.js"></script>
	</body>
</html>

<script>
$(function(){
    $('#form1').ajaxForm({
        beforeSubmit: checkForm, // 此方法主要是提交前执行的方法，根据需要设置
        success: complete, // 这是提交后的方法
        dataType: 'json'
    });
    
    function checkForm(){
       //空不填
 }

    function complete(data){
        if(data.status==1){
            layer.alert(data.info, {icon: 6}, function(index){
            layer.close(index);
            window.location.href=data.url;
            });
        }else{
            alert(data.info);
            return false;   
        }
    }
 
});
function del(id){
	 	layer.confirm('你确定要删除吗？', {icon: 3}, function(index){
        layer.close(index);
        window.location.href="/coffee/admin.php/Home/Picture/del/id/"+id+"";
    });
}
</script>