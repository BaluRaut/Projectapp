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
        <div  id="pp" class="wrapper row-offcanvas row-offcanvas-left">
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
            <aside id="details" class="right-side">
                <!-- Content Header (Page header) -->
             <!-- Main content -->
                <section class="content">
                   <div class="row">                        
                        <div class="col-md-12">
                            <!-- The time line -->
                            <ul class="timeline">
                                <!-- timeline time label -->
                                   <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <?php foreach($project_names as $k) {   ?>
                               <li class="time-label">
<span class="bg-blue"> <?php $rt=$k['Start_Date'];
echo date('d M. Y',strtotime("$rt")); ?> </span>
</li>
<li>
<i class="fa fa-th-large bg-fuchsia"></i>
<div class="timeline-item">

<h3 class="timeline-header">
    Project Name:&nbsp; &nbsp; <a href="#"> <?php echo $k['project_name']; ?></a>

</h3>
<div class="timeline-body"> 
  <span class="bg-green"> Project start Date: &nbsp; &nbsp; &nbsp; <?php $rt=$k['Start_Date'];
  echo date('d M. Y',strtotime("$rt")); ?> </span>
   <br/>
   <br/>
   <span class="bg-red"> Project End Date: &nbsp; &nbsp; &nbsp; <?php $rt=$k['End_Date'];
   echo date('d M. Y',strtotime("$rt")); ?> </span>
</div>
<div class="timeline-footer">

</div>
</div>
</li>
<li>
<i class="fa fa-user bg-aqua"></i>
<div class="timeline-item">

<h3 class="timeline-header no-border">
    Project Manager : &nbsp; &nbsp; <a href="#"> <?php echo $k['Project_Manager_Name']; ?></a>

</h3>
</div>
</li>

                                <?php } ?>
                          
                                <!-- END timeline item -->
                                <!-- timeline item -->
                           
                            </ul>
                        </div><!-- /.col -->
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          <?php include("/../loadjs.php"); ?>     

    </body>
</html>