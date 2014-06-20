	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>Avika Project Management tool</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<?php include("/../loadcss.php");?>
	</head>
	<body class="skin-blue">
	<!-- header logo: style can be found in header.less -->
	<header class="header">
	<?php include("/../header.php"); ?>
	</header>
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
	<?php include("sidebar.php"); ?>
	</ul>
	</section>
	<!-- /.sidebar -->
	</aside>
	<!-- Right side column. Contains the navbar and content of the page -->
	<aside class="right-side">
	<!-- Content Header (Page header) -->
	<!-- Main content -->
	<section class="content">
	<table class="table table-bordered table-striped dataTable" id="example1" aria-describedby="example1_info">
	<thead>
	<tr role="row">
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 195px;" aria-sort="ascending" 
                aria-label="Rendering engine: activate to sort column descending">Project Name
            </th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 270px;" aria-label="Browser: activate to sort column ascending">Task Name
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
	<div class="col-sm-6 text-right order-total"> <?php echo $total_hrs_worked[0]['times']; ?></div>
	</div>
	</th>                                       </tr>
	</tfoot>                     
	<tbody role="alert" aria-live="polite" aria-relevant="all">
	<?php 

	$mod=1;
	foreach($timesheet_details as $times)  { 
	if($mod%2==0){

	?>        

	<tr class="odd">
	<td><?php echo  $times['project_name']; ?> </td>
	<td style="color:#2A6496"><?php echo  $times['task_name'] ; ?> </td>
	<td><?php echo  $times['totalhours'] ; ?>:00 </td>                         
	</tr>
	<?php  }  else { ?>
	<tr class="even">
	<td><?php echo  $times['project_name']; ?> </td>
	<td style="color:#2A6496"><?php  echo  $times['task_name'] ; ?> </td>
	<td><?php  echo  $times['totalhours'] ; ?>:00 </td>
	</tr>
	<?php } // Even Else part close 
	$mod++;
	} // Main Loop close here
	?>
	</tbody></table>
	</section><!-- /.content -->
	</aside><!-- /.right-side -->
	</div><!-- ./wrapper -->
	<?php include("/../loadjs.php"); ?>      
	
	</body>
	</html>