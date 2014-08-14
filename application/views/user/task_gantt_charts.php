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
                       <?php include("sidebar.php");
                             require('lib/gantti.php'); 
                                date_default_timezone_set('UTC');
                                setlocale(LC_ALL, 'en_US');

                             

                       ?>
                </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
	
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side" class="bg">
                <!-- Content Header (Page header) -->
             <!-- Main content -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/gantti.css" />

                <section class="content">
                <?php   
                
                    $gantti = new Gantti($mydata, array(
                                  'title'      => 'Tasks',
                                  'cellwidth'  => 25,
                                  'cellheight' => 35,
                                  'today'      => true
                                ));
                    echo $gantti;
                ?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          <?php include("/../loadjs.php"); ?>      

    </body>
</html>