<?php /*a:2:{s:58:"E:\www\idatamind\application\admin\view\channel\index.html";i:1531398156;s:49:"E:\www\idatamind\application\admin\view\base.html";i:1531149273;}*/ ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
  <title>渠道管理</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css"  href="/static/admin/bower_components/bootstrap/dist/css/bootstrap.min.css " />
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css"  href="/static/admin/bower_components/font-awesome/css/font-awesome.min.css " />
  <!-- Ionicons -->
  <link rel="stylesheet" type="text/css"  href="/static/admin/bower_components/Ionicons/css/ionicons.min.css " />

  

  

  <!-- Theme style -->
  <link rel="stylesheet" type="text/css"  href="/static/admin/dist/css/AdminLTE.min.css " />
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" type="text/css"  href="/static/admin/dist/css/skins/skin-red.min.css " />



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo url('admin/Index/index'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>UIN</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>YOUR ITEM NAME</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="/static/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="/static/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="/static/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Administrator - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
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
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/static/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Sidebar Menu</li>
        <!-- Optionally, you can add icons to the links -->
         <li class="treeview active">
          <a href="#"><i class="fa fa-line-chart"></i> <span>日数据</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">成都</a></li>
            <li><a href="#">雅安</a></li>
            <li><a href="#">眉山</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#"><i class="fa fa-wikipedia-w"></i> <span>周数据</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">成都</a></li>
            <li><a href="#">雅安</a></li>
            <li><a href="#">眉山</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-calendar"></i> <span>月数据</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">成都</a></li>
            <li><a href="#">雅安</a></li>
            <li><a href="#">眉山</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>客资数据</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">成都</a></li>
            <li><a href="#">雅安</a></li>
            <li><a href="#">眉山</a></li>
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-line-chart"></i> <span>区间报表</span></a></li>
        <li><a href="#"><i class="fa fa-line-chart"></i> <span>用户管理</span></a></li>
        <li><a href="#"><i class="fa fa-line-chart"></i> <span>个人中心</span></a></li>
        <li><a href="#"><i class="fa fa-line-chart"></i> <span>系统设置</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     
<!--     <section class="content-header">
  <h1>
    渠道管理
    <small>source manage</small>
  </h1>
</section> -->


    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
      

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">渠道列表</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 50px;">
          <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ModalAddChannel">
            添加渠道
          </button>
        </div>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
          <tr>
            <th>ID</th>
            <th>渠道代码</th>
            <th>渠道名称</th>
            <th>所属店铺</th>
            <th>所属分组</th>
            <th>状态</th>
            <th>操作</th>
          </tr>
          <tr>
            <td>1</td>
            <td>J1</td>
            <td>微博</td>
            <td>总店</td>
            <td>推广组</td>
            <td>可用</td>
            <td><button type="button" class="btn btn-warning btn-xs">禁用</button> <button type="button" class="btn btn-default btn-xs">编辑</button> <button type="button" class="btn btn-danger btn-xs">删除</button></td>
          </tr>
          <tr>
            <td>1</td>
            <td>J1</td>
            <td>微博</td>
            <td>总店</td>
            <td>推广组</td>
            <td>可用</td>
            <td><button type="button" class="btn btn-warning btn-xs">禁用</button> <button type="button" class="btn btn-default btn-xs">编辑</button> <button type="button" class="btn btn-danger btn-xs">删除</button></td>
          </tr>
          <tr>
            <td>1</td>
            <td>J1</td>
            <td>微博</td>
            <td>总店</td>
            <td>推广组</td>
            <td>禁用</td>
            <td><button type="button" class="btn btn-success btn-xs">启用</button> <button type="button" class="btn btn-default btn-xs">编辑</button> <button type="button" class="btn btn-danger btn-xs">删除</button></td>
          </tr>
        
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="ModalAddChannel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">添加渠道</h4>
      </div>
      <div class="modal-body">
        <form role="form" id="idata-form">
              <div class="box-body">
                <div class="form-group">
                  <label for="channelcode">渠道代码</label>
                  <input type="text" class="form-control" name="code" placeholder="Enter code">
                </div>
                <div class="form-group">
                  <label for="channelname">渠道名称</label>
                  <input type="text" class="form-control" name="cname" placeholder="Enter code">
                </div>
                <div class="form-group">
                  <label>所属分组</label>
                  <select class="form-control" name="cgroup">
                    <option value="1">推广</option>
                    <option value="2">其他</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>所属店铺</label>
                  <select class="form-control" name="store">
                    <option value="1">总店</option>
                    <option value="2">眉山</option>
                    <option value="3">雅安</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>渠道状态</label>
                  <select class="form-control" name="status">
                    <option>可用</option>
                    <option>禁用</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="form-button-submit">提交</button>
      </div>
    </div>
  </div>
</div>





 

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->


<!-- Bootstrap 3.3.7 -->
<script src="/static/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="/static/admin/JS/common.js"></script>

<!-- AdminLTE App -->
<script src="/static/admin/dist/js/adminlte.min.js"></script>


</body>
</html>