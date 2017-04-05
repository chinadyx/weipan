<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <title>微市场后台管理</title>
	<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/bootstrap/css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/font-awesome/css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/AdminLTE.css" media="all" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo STATICS;?>/js/jquery-1.10.2.min.js"></script>
    <![endif]-->
	<!--[if gte IE 9]>-->
    <script type="text/javascript" src="<?php echo STATICS;?>/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery.mousewheel.js"></script>
    <!--<![endif]-->
    
</head>
<body class="skin-blue">
<header class="header">
			<a href="index.html" class="logo">
                微市场
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Admin<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
		<div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo U('Dashboard/index');?>">
                                <i class="fa fa-dashboard"></i><span>控制台</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>客户管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
								<a href="<?php echo U('Users/index');?>"><i class="fa fa-angle-double-right"></i>客户列表</a>
								</li>
                                <li><a href="<?php echo U('Users/add');?>"><i class="fa fa-angle-double-right"></i>新建客户</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-group"></i>
                                <span>用户组管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo U('UserGroup/index');?>"><i class="fa fa-angle-double-right"></i>用户组列表</a></li>
                                <li><a href="<?php echo U('UserGroup/edit');?>"><i class="fa fa-angle-double-right"></i>添加用户组</a></li>
                            </ul>
                        </li>
						<li class="treeview">
                            <a href="#">
                                <i class="fa fa-sitemap"></i><span>代理商</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo U('Agent/index');?>"><i class="fa fa-angle-double-right"></i>代理商列表</a></li>
                                <li><a href="<?php echo U('Agent/edit');?>"><i class="fa fa-angle-double-right"></i>添加代理商</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cogs"></i><span>系统管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
								<li><a href="<?php echo U('User/index');?>"><i class="fa fa-angle-double-right"></i>系统管理员</a></li>
                                <li><a href="<?php echo U('Custom/index');?>"><i class="fa fa-angle-double-right"></i>官网模板</a></li>
                                <li><a href="<?php echo U('Menu/index');?>"><i class="fa fa-angle-double-right"></i>菜单管理</a></li>
                                <li><a href="<?php echo U('System/index');?>"><i class="fa fa-angle-double-right"></i>系统设置</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
			<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
						<?php echo ($meta_title); ?>
                        <small><?php echo ($sub_title); ?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#">主页</a></li>
                        <li class="active">控制台</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
				
<a class="btn btn-success" href="<?php echo U('userGroup/edit');?>" style="margin-bottom:10px;">添加版本</a>
<table class="table table-bordered table-striped">
	<tr>
		<td width="70">编号</td>
		<td width="350">版本名称</td>
		<td width="350">月请求数</td>
		<td >用户数</td>
		<td width="200">管理操作</td>
	</tr>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		<td align='center'><?php echo ($vo["id"]); ?></td>
		<td><?php echo ($vo["name"]); ?></td>
		<td><?php echo ($vo["request_limit"]); ?></td>
		<td>0</td>
		</td>
		<td align='center'>
			<a href="<?php echo U('UserGroup/access',array('id'=>$vo['id']));?>">权限设置</a>
			| <a href="<?php echo U('UserGroup/edit',array('id'=>$vo['id']));?>">修改</a>
			| <a href="<?php echo U('UserGroup/del',array('id'=>$vo['id']));?>" onclick="return confirm('确定删除该版本吗?')">删除</a>
		</td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<script type="text/javascript">

</script>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
	</div>
<script type="text/javascript" src="<?php echo STATICS;?>/bootstrap/js/bootstrap.min.js"></script>
 <!-- AdminLTE App -->
<script src="<?php echo RES;?>/js/AdminLTE/app.js" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

</body>
</html>