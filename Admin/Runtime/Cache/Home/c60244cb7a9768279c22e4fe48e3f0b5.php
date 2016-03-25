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
#dynamic-table tr th{
padding: 20px 0 0 0;
font-size: 14px;
}
</style>
    <div id="content">
        <div id="content-header">
                <h1>Dashboard</h1>
                <div class="btn-group">
                    <a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-file"></i></a>
                    <a class="btn btn-large tip-bottom" title="Manage Users"><i class="icon-user"></i></a>
                    <a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
                    <a class="btn btn-large tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
                </div>
            </div>
            <div id="breadcrumb">
                <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
                <a href="#" class="current">添加板块</a>
            </div>
             <div class="main-content-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form style="margin: 2% 0 0 10%;" id="form1" class="form-horizontal" name="form1" method="post" action="<?php echo U('Content/runadd');?>" enctype="multipart/form-data">
                            <div class="form-group dropdown">
                                主板块名：<select name="pid">
                                <option class="selected"   value="0">不选择默认为添加主板块</option>
                                <option  value="<?php echo ($list[0]["id"]); ?>"> <?php echo ($list[0]["ban_name"]); ?></option>
                            </select>
                            </div>
                            <div class="form-group" style="margin:2% 0 0 0;" >
                                添加板块：<input type="text" name="ban_name" id="ban_name"  />
                            </div>

                            <div class="form-group" style="margin:2% 0 0 0;" >
                                板块介绍：<textarea name="ban_info" id="ban_info"></textarea>
                            </div>
                            <div class="form-group" style="margin:2% 0 2% 0;">
                                板块排序：<input type="text" class="form-control" id="order" name="order" value="50">
                            </div>
                            <div class="form-group" style="margin:2% 0 2% 0;">
                                板块状态：<button type="button" id="status" class="btn btn-success">开启</button>（*默认开启，列表页修改）
                            </div>
                          <button type="submit" class="border:1tn btn-default">添加</button>
                          &nbsp;&nbsp; &nbsp;&nbsp;
                          <button type="reset" class="border:1tn btn-default">重置</button>
                        </form>
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
        if( '' == $.trim($('#ban_name').val())){
            layer.alert('板块名称不能为空', {icon: 6}, function(index){
            layer.close(index);
            $('#ban_name').focus(); 
            });
            return false;
        }
        if( '' == $('#ban_info').val()){
            layer.alert('板块介绍不能为空', {icon: 6}, function(index){
            layer.close(index);
            $('#ban_info').focus(); 
            });
            return false;
        }
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
</script>