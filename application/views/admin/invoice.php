			<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>Avika Project Management tool</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	 <!-- bootstrap 3.0.2 -->
        <link href="http://localhost/projectapp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="http://localhost/projectapp/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://localhost/projectapp/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <!-- jvectormap -->
        <!-- fullCalendar -->
        <!-- Daterange picker -->
        <!-- bootstrap wysihtml5 - text editor -->
        <!-- Theme style -->
        <link href="http://localhost/projectapp/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/projectapp/select2/select2.css" rel="stylesheet" type="text/css" />
                   <!-- jQuery .11.1 -->
          <script src="http://localhost/projectapp/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="http://localhost/projectapp/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="http://localhost/projectapp/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Select.js charts -->
         <script src="http://localhost/projectapp/select2/select2.js" type="text/javascript"></script>
         
             <script src="http://localhost/projectapp/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="http://localhost/projectapp/ggjs/AdminLTE/demo.js" type="text/javascript"></script>      

 	</head>
	<body class="skin-blue">
	<!-- header logo: style can be found in header.less -->
	<header class="header">
	    
            <a href="http://localhost/projectapp/" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Avika Project Management Application
            </a>
<style> 
   .input-group .form-control {
    margin-bottom: 0;
    width: 24%;
}
.form-group.has-success .form-control {
    border-color: inactivecaption !important;
    box-shadow: none;
}
.select2-container-multi .select2-choices {
    background-color: #FFFFFF;
    background-image: linear-gradient(to bottom, #EEEEEE 1%, #FFFFFF 15%);
    border: 1px solid #AAAAAA;
    cursor: text;
    height: auto !important;
    margin: 0 0 0 -15px;
    overflow: hidden;
    position: relative;
}
</style>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                                <div class="navbar-right" style="">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>   Admin <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                     
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="http://localhost/projectapp/admin/logout" title="Sign out" class="btn btn-default btn-flat">Sign out</a>                                     </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                                            </nav>
    
      	</header>
     <style>
        input, button,  textarea {
              background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 69px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
            color: purple;
            font-family: inherit;
            font-size: 14px;
            height: 34px;
            line-height: 1.42857;
            padding: 6px 12px;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
            width: 105px;
      }
     </style>
	<div class="wrapper row-offcanvas row-offcanvas-left">
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="left-side sidebar-offcanvas">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel" style="display:none">
	<div class="pull-left image">
	<img src="img/avatar3.png" class="img-circle" alt="User Image" />
	</div>
	<div class="pull-left info">
	<p>Hello, Jane</p>

	<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
	</div>
	</div>
	<!-- search form -->
	<form action="#" method="get" class="sidebar-form">

	</form>
	<!-- /.search form -->
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu">
	                        <li class="">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li> 
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-th-large"></i>
                                <span>Project</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu" style="display: block;">
                                <li>
                                    <a href="http://localhost/projectapp/admin/projects">
                                        <i class="fa fa-angle-double-right"></i> 
                                        Create Project</a>
                                </li>
                                <li>
                                    <a href="http://localhost/projectapp/admin/project_management">
                                        <i class="fa fa-angle-double-right"></i> 
                                        Project Settings</a>
                                </li>
                            </ul>
                         </li>
                   
                        <li>
                            <a href="http://localhost/projectapp/admin/task">
                                <i class="fa fa-tasks"></i> <span>Create Task</span>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span> User </span>
                                <i class="fa fa-angle-left pull-right"> </i>
                            </a>
                            <ul class="treeview-menu" style="display: block;">
                                <li><a href="http://localhost/projectapp/admin/user"><i class="fa fa-angle-double-right"></i> Create User</a></li>
                                <li><a href="http://localhost/projectapp/admin/user_management"><i class="fa fa-angle-double-right"></i> User Settings</a></li>
                            </ul>
                        </li> 
                        <li>
                            <a href="http://localhost/projectapp/admin/timesheet_of_projects">
                                <i class="fa fa-clock-o"></i> <span>Timesheet</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://localhost/projectapp/admin/task_status">
                                <i class="fa fa-info"></i> <span>Task Status</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://localhost/projectapp/admin/current_running_task">
                                <i class="fa fa-tasks"></i> <span>Live Running Tasks</span>
                            </a>
                        </li>
                        
                        	</ul>
	</section>
	<!-- /.sidebar -->
	</aside>
	<!-- Right side column. Contains the navbar and content of the page -->
	<aside class="right-side">
	<!-- Content Header (Page header) -->
	<!-- Main content -->
	<section class="content">
            <div class="row">
                <div class="col-lg-12">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-search bg-teal"></i>
                                    <h3 class="box-title">Search:</h3>
                                    <span  id="export" style="float:right;" onclick="download()" class="btn btn-info btn-flat"value="Export"> Export </span>
                                    <span id="invoice" style="float:right;" onclick="invoice()" class="btn btn-info btn-flat" value="Export"> Invoice </span>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                   
             &nbsp; &nbsp; Project : <select name="by_project_name" style="width:250px" 
                                                   id="by_project_name" tabindex="-1" title="" 
                                                   class="select2-offscreen">
                                  <option value="All">All</option>

                                                                                             <option value="Android">Android</option>
                                                                                            <option value="Avika Wesbite Changes">Avika Wesbite Changes</option>
                                                                                            <option value="Marketing Development">Marketing Development</option>
                                                                                            <option value="Ruby on Rails ">Ruby on Rails </option>
                                                                                      </select > 
                                         &nbsp; &nbsp; User : <select name="by_user_name" style="width:250px" 
                                                   id="by_user_name" tabindex="-1" title="" 
                                                   class="select2-offscreen">
                                  <option value="All">All</option>

                                                                                             <option value="9">Balu</option>
                                                                                            <option value="1">admin</option>
                                                                                            <option value="3">Dipesh</option>
                                                                                            <option value="8">pooja</option>
                                                                                            <option value="5">ritesh</option>
                                                                                            <option value="10">Rohit</option>
                                                                                            <option value="7">Rupesh</option>
                                                                                            <option value="6">Sohail</option>
                                                                                            <option value="4">swapnil</option>
                                                                                            <option value="2">Varsha</option>
                                                                                      </select > 
                   &nbsp; &nbsp;      Task :  
                   <select name="by_task_name" style="width:250px" 
                                                   id="by_task_name" tabindex="-1" title="" 
                                                   class="select2-offscreen">  
                       <option value="All">All</option>
                                                                                          <option value="a">a</option>
                                                                                            <option value="Avika Contact Pages ">Avika Contact Pages </option>
                                                                                            <option value="Contact Form 7  Working">Contact Form 7  Working</option>
                                                                                            <option value="Css issue">Css issue</option>
                                                                                            <option value="Dictionary App Issue">Dictionary App Issue</option>
                                                                                            <option value="Landing Page Testing">Landing Page Testing</option>
                                                                                            <option value="Learn Ruby On Rails">Learn Ruby On Rails</option>
                                                                                            <option value="Menu Bar Testing">Menu Bar Testing</option>
                                                                                            <option value="po">po</option>
                                                                                            <option value="Propscan Changes">Propscan Changes</option>
                                                                                            <option value="Responsive Page Design">Responsive Page Design</option>
                                                                                            <option value="Sqlite query resolving issue">Sqlite query resolving issue</option>
                                                                                            <option value="Testing Apps In Gems">Testing Apps In Gems</option>
                                                 
                   </select >
                   &nbsp; &nbsp;       Date :  <input type="text" placeholder="Date" name="date_timepicker" 
                                   id="date_timepicker" > 
            
           &nbsp; &nbsp;  Date Range : <input type="text" placeholder="Start Date" name="date_timepicker_start" 
                                    id="date_timepicker_start" > 
                      &nbsp; &nbsp; To 
                             <input type="text" placeholder="End Date" name="date_timepicker_end" 
                                    id="date_timepicker_end" >
 &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

 &nbsp; &nbsp; &nbsp; &nbsp;
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

 &nbsp; &nbsp; &nbsp; &nbsp;                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

 &nbsp; &nbsp; &nbsp; &nbsp;                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

 &nbsp; &nbsp; &nbsp; &nbsp;

                          <input type="button"  style="float:right;" onclick="clears();" 
                                 class="btn btn-info btn-flat"    value="Clear"/>
                             &nbsp; &nbsp; 
                             <input  style="float:right;" type="button" 
                                     onclick="search();" class="btn btn-info btn-flat"    value="Search"/>
                          
                             
                                    </div>
                            </div>
                </div>     
            </div>
            <div id="datasheet">
	<table class="table table-bordered table-striped dataTable" id="example1" aria-describedby="example1_info">
	<thead>
	<tr role="row">
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 195px;" aria-sort="ascending" 
                aria-label="Rendering engine: activate to sort column descending">Project Name
            </th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 170px;" aria-label="Browser: activate to sort column ascending">Task Name
            </th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 125px;" aria-label="CSS grade: activate to sort column ascending">Start Time
            </th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 125px;" aria-label="CSS grade: activate to sort column ascending">End Time
            </th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 115px;" aria-label="CSS grade: activate to sort column ascending">Total Hours
            </th>
        </tr>
	</thead>
	<tfoot>
	<tr>
	<th colspan="6">
	<div class="row">
	<div class="col-sm-6 order-number">Total Hours :</div>
	<div class="col-sm-6 text-right order-total"> 143:55:00</div>
	</div>
	</th>                                       </tr>
	</tfoot>                     
	<tbody role="alert" aria-live="polite" aria-relevant="all">
		<tr class="even">
	<td style="color:#2A6496" >Android </td>
	<td style="color:#2A6496">Sqlite query resolving issue </td>
        <td style="color:#2A6496">2014-06-16 02:47:34 PM </td>
        <td style="color:#2A6496">2014-06-17 07:11:26 AM </td>
	<td style="color:#2A6496" >16:23:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Android </td>
	<td style="color:#2A6496">Sqlite query resolving issue </td>
        <td style="color:#2A6496">2014-06-17 03:48:10 PM </td>
        <td style="color:#2A6496">2014-06-17 03:48:20 PM </td>
	<td style="color:#2A6496">0:0:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Android </td>
	<td style="color:#2A6496">Sqlite query resolving issue </td>
        <td style="color:#2A6496">2014-06-17 04:08:28 PM </td>
        <td style="color:#2A6496">2014-06-17 04:21:48 PM </td>
	<td style="color:#2A6496" >0:13:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Android </td>
	<td style="color:#2A6496">a </td>
        <td style="color:#2A6496">2014-06-17 04:22:49 PM </td>
        <td style="color:#2A6496">2014-06-19 01:01:19 PM </td>
	<td style="color:#2A6496">20:38:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Android </td>
	<td style="color:#2A6496">Sqlite query resolving issue </td>
        <td style="color:#2A6496">2014-06-19 01:01:37 PM </td>
        <td style="color:#2A6496">2014-06-19 01:19:11 PM </td>
	<td style="color:#2A6496" >0:17:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Android </td>
	<td style="color:#2A6496">Sqlite query resolving issue </td>
        <td style="color:#2A6496">2014-06-19 01:19:22 PM </td>
        <td style="color:#2A6496">2014-06-19 01:19:28 PM </td>
	<td style="color:#2A6496">0:0:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Android </td>
	<td style="color:#2A6496">a </td>
        <td style="color:#2A6496">2014-06-19 02:09:36 PM </td>
        <td style="color:#2A6496">2014-06-19 03:34:48 PM </td>
	<td style="color:#2A6496" >1:25:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Android </td>
	<td style="color:#2A6496">Sqlite query resolving issue </td>
        <td style="color:#2A6496">2014-06-20 06:32:40 AM </td>
        <td style="color:#2A6496">2014-06-20 06:35:21 AM </td>
	<td style="color:#2A6496">0:2:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Android </td>
	<td style="color:#2A6496">Sqlite query resolving issue </td>
        <td style="color:#2A6496">2014-06-20 11:13:21 AM </td>
        <td style="color:#2A6496">2014-06-20 11:42:28 AM </td>
	<td style="color:#2A6496" >0:29:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Android </td>
	<td style="color:#2A6496">a </td>
        <td style="color:#2A6496">2014-06-20 11:17:50 AM </td>
        <td style="color:#2A6496">2014-06-20 11:42:09 AM </td>
	<td style="color:#2A6496">0:24:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Android </td>
	<td style="color:#2A6496">a </td>
        <td style="color:#2A6496">2014-06-20 11:40:53 AM </td>
        <td style="color:#2A6496">2014-06-20 11:42:29 AM </td>
	<td style="color:#2A6496" >0:1:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Landing Page Testing </td>
        <td style="color:#2A6496">2014-06-13 02:44:39 PM </td>
        <td style="color:#2A6496">2014-06-13 02:47:02 PM </td>
	<td style="color:#2A6496">0:2:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Landing Page Testing </td>
        <td style="color:#2A6496">2014-06-13 02:48:55 PM </td>
        <td style="color:#2A6496">2014-06-13 03:18:04 PM </td>
	<td style="color:#2A6496" >0:29:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Responsive Page Design </td>
        <td style="color:#2A6496">2014-06-16 07:36:32 AM </td>
        <td style="color:#2A6496">2014-06-16 09:07:03 AM </td>
	<td style="color:#2A6496">1:30:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Landing Page Testing </td>
        <td style="color:#2A6496">2014-06-16 09:30:53 AM </td>
        <td style="color:#2A6496">2014-06-16 09:48:36 AM </td>
	<td style="color:#2A6496" >0:17:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Responsive Page Design </td>
        <td style="color:#2A6496">2014-06-16 09:48:49 AM </td>
        <td style="color:#2A6496">2014-06-16 10:29:05 AM </td>
	<td style="color:#2A6496">0:40:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Css issue </td>
        <td style="color:#2A6496">2014-06-16 10:29:55 AM </td>
        <td style="color:#2A6496">2014-06-16 10:35:06 AM </td>
	<td style="color:#2A6496" >0:5:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Responsive Page Design </td>
        <td style="color:#2A6496">2014-06-16 10:34:19 AM </td>
        <td style="color:#2A6496">2014-06-16 02:46:16 PM </td>
	<td style="color:#2A6496">4:11:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Responsive Page Design </td>
        <td style="color:#2A6496">2014-06-17 08:19:10 AM </td>
        <td style="color:#2A6496">2014-06-17 04:21:49 PM </td>
	<td style="color:#2A6496" >8:2:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Landing Page Testing </td>
        <td style="color:#2A6496">2014-06-17 04:00:11 PM </td>
        <td style="color:#2A6496">2014-06-17 04:01:42 PM </td>
	<td style="color:#2A6496">0:1:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Propscan Changes </td>
        <td style="color:#2A6496">2014-06-18 06:51:08 AM </td>
        <td style="color:#2A6496">2014-06-19 01:01:22 PM </td>
	<td style="color:#2A6496" >6:10:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Css issue </td>
        <td style="color:#2A6496">2014-06-19 12:56:25 PM </td>
        <td style="color:#2A6496">2014-06-19 01:01:54 PM </td>
	<td style="color:#2A6496">0:5:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Avika Contact Pages  </td>
        <td style="color:#2A6496">2014-06-19 12:57:48 PM </td>
        <td style="color:#2A6496">2014-06-19 01:01:21 PM </td>
	<td style="color:#2A6496" >0:3:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Css issue </td>
        <td style="color:#2A6496">2014-06-19 01:02:10 PM </td>
        <td style="color:#2A6496">2014-06-19 01:36:31 PM </td>
	<td style="color:#2A6496">0:34:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Avika Contact Pages  </td>
        <td style="color:#2A6496">2014-06-19 01:02:46 PM </td>
        <td style="color:#2A6496">2014-06-19 02:08:31 PM </td>
	<td style="color:#2A6496" >1:5:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Landing Page Testing </td>
        <td style="color:#2A6496">2014-06-19 01:19:53 PM </td>
        <td style="color:#2A6496">2014-06-19 01:20:10 PM </td>
	<td style="color:#2A6496">0:0:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Landing Page Testing </td>
        <td style="color:#2A6496">2014-06-19 01:19:57 PM </td>
        <td style="color:#2A6496">2014-06-19 01:38:00 PM </td>
	<td style="color:#2A6496" >0:18:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Landing Page Testing </td>
        <td style="color:#2A6496">2014-06-19 01:37:29 PM </td>
        <td style="color:#2A6496">2014-06-19 02:09:21 PM </td>
	<td style="color:#2A6496">0:31:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Landing Page Testing </td>
        <td style="color:#2A6496">2014-06-19 01:38:03 PM </td>
        <td style="color:#2A6496">2014-06-20 06:37:28 AM </td>
	<td style="color:#2A6496" >16:59:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Css issue </td>
        <td style="color:#2A6496">2014-06-19 03:33:37 PM </td>
        <td style="color:#2A6496">2014-06-20 06:37:27 AM </td>
	<td style="color:#2A6496">15:3:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Landing Page Testing </td>
        <td style="color:#2A6496">2014-06-19 03:36:41 PM </td>
        <td style="color:#2A6496">2014-06-20 11:44:37 AM </td>
	<td style="color:#2A6496" >20:7:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Css issue </td>
        <td style="color:#2A6496">2014-06-20 11:42:43 AM </td>
        <td style="color:#2A6496">2014-06-20 02:43:02 PM </td>
	<td style="color:#2A6496">3:0:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Avika Contact Pages  </td>
        <td style="color:#2A6496">2014-06-20 11:43:17 AM </td>
        <td style="color:#2A6496">2014-06-20 11:50:23 AM </td>
	<td style="color:#2A6496" >0:7:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Avika Wesbite Changes </td>
	<td style="color:#2A6496">Contact Form 7  Working </td>
        <td style="color:#2A6496">2014-06-20 11:51:07 AM </td>
        <td style="color:#2A6496">2014-06-20 11:52:21 AM </td>
	<td style="color:#2A6496">0:1:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Avika Wesbite Changes </td>
	<td style="color:#2A6496">Contact Form 7  Working </td>
        <td style="color:#2A6496">2014-06-24 09:37:25 AM </td>
        <td style="color:#2A6496">2014-06-25 08:13:08 AM </td>
	<td style="color:#2A6496" >22:35:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Ruby on Rails  </td>
	<td style="color:#2A6496">po </td>
        <td style="color:#2A6496">2014-06-23 12:01:28 PM </td>
        <td style="color:#2A6496">2014-06-23 12:02:42 PM </td>
	<td style="color:#2A6496">0:1:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Ruby on Rails  </td>
	<td style="color:#2A6496">Testing Apps In Gems </td>
        <td style="color:#2A6496">2014-06-23 12:32:34 PM </td>
        <td style="color:#2A6496">2014-06-23 12:48:59 PM </td>
	<td style="color:#2A6496" >0:16:00 </td>
	</tr>
	        

	<tr class="odd">
	<td style="color:#2A6496">Ruby on Rails  </td>
	<td style="color:#2A6496">po </td>
        <td style="color:#2A6496">2014-06-24 07:07:47 AM </td>
        <td style="color:#2A6496">2014-06-24 08:56:56 AM </td>
	<td style="color:#2A6496">1:49:00 </td>                         
	</tr>
		<tr class="even">
	<td style="color:#2A6496" >Ruby on Rails  </td>
	<td style="color:#2A6496">po </td>
        <td style="color:#2A6496">2014-06-24 10:15:17 AM </td>
        <td style="color:#2A6496">2014-06-24 10:17:52 AM </td>
	<td style="color:#2A6496" >0:2:00 </td>
	</tr>
		</tbody></table> </div>
	</section><!-- /.content -->
	</aside><!-- /.right-side -->
	</div><!-- ./wrapper -->
	<link rel="stylesheet" type="text/css" href="http://localhost/projectapp//js/jquery.datetimepicker.css"/ >
<script src="http://localhost/projectapp/js/jquery.datetimepicker.js"></script>
<script src="http://localhost/projectapp/js/validate.js"></script>
    <script>
    $(document).ready(function() { 
        $("#by_project_name").select2({ width: '112px' });
        $("#by_task_name").select2({ width: '112px' });
        $("#by_user_name").select2({ width: '112px' });
        var ingnore_key_codes = [8,9,13,16,17,18,19,20,27,32,33,34,35,36,37,38,39,40,44,45,46,48,49,50,51,52,53,54,55,56,57,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,96,97,98,99,100,101,102,103,104,105,106,107,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,144,145,186,187,188,189,190,191,219,220,221,222];
        $('#date_timepicker_start').keydown(function(e){
           if ($.inArray(e.keyCode, ingnore_key_codes) >= 0){
              e.preventDefault();
           }
        });
         $('#date_timepicker_end').keydown(function(e){
           if ($.inArray(e.keyCode, ingnore_key_codes) >= 0){
              e.preventDefault();
           }
        });
    });
    </script>
 <script type="text/javascript">
jQuery(function(){
    jQuery('#date_timepicker').datetimepicker({
  format:'Y-m-d' });
 jQuery('#date_timepicker_start').datetimepicker({
  format:'Y-m-d',
  onShow:function( ct ){
   this.setOptions({
    maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():false,formatDate:'Y-m-d'
   })
  },
  timepicker:false
 });
 jQuery('#date_timepicker_end').datetimepicker({
  format:'Y-m-d',
  onShow:function( ct ){
   this.setOptions({
    minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false,formatDate:'Y-m-d'
   })
  },
  timepicker:false
 });
});
</script> 
<script type="text/javascript">
   $("#by_task_name").change(function() {
   $.ajax({
                url: 'http://localhost/projectapp/admin/timesheet_ajax',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });            
             });
             
   $("#by_user_name").change(function() {
   $.ajax({
                url: 'http://localhost/projectapp/admin/timesheet_ajax',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });            
             });
             
     $("#by_project_name").change(function() {
          $.ajax({
                url: 'http://localhost/projectapp/admin/timesheet_ajax',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });              
    });
    function search() {

          $.ajax({
                url: 'http://localhost/projectapp/admin/timesheet_ajax',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });  
        }
    function clears() {
    //alert("o");
    $("#by_project_name").select2("val", "All");
     $("#by_task_name").select2("val", "All");
     $("#by_user_name").select2("val", "All");
         $('#date_timepicker').val("");
         $("#date_timepicker_end").val("");
         $("#date_timepicker_start").val("");
          $.ajax({
                url: 'http://localhost/projectapp/admin/timesheet_ajax',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                }); 
  
        }
      function download()  {
      
        $.ajax({
                url: 'http://localhost/projectapp/admin/make_data',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                   document.location.href='http://localhost/projectapp/admin/download_data'
                    }
                }); 
        
       }
       
    function invoice()  {
      
        $.ajax({
                url: 'http://localhost/projectapp/admin/make_data',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                   document.location.href='http://localhost/projectapp/admin/download_invoice'
                    }
                }); 
        
       }
</script>
	</body>
	</html>