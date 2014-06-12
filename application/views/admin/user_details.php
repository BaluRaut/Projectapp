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
             <!-- Main content 
             
             Array ( [project_id] => 6 [project_name] => Android 
             [Users] => swapnil@avika.in.sohail@avika.in. 
             [Project_Manager] => dipesh@avika.in 
             [Start_Date] => 2014-06-25 18:30:44 
             [End_Date] => 2014-06-30 18:30:46 [Craeted] => 2014-06-06 18:31:30 ) 
             -->
            
                <section class="content">
                  <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
<thead>
<tr role="row">
<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" 
    colspan="1" style="width: 35px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" 
    colspan="1" style="width: 120px;" aria-label="Browser: activate to sort column ascending">Name</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" 
    colspan="1" style="width: 80px;" aria-label="Platform(s): activate to sort column ascending">Email</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" 
    colspan="1" style="width: 80px;" aria-label="CSS grade: activate to sort column ascending">Designation</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" 
    colspan="1" style="width: 50px;" aria-label="CSS grade: activate to sort column ascending">Status</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" 
    colspan="1" style="width: 50px;" aria-label="CSS grade: activate to sort column ascending">Projects</th>

</tr>
</thead>
    <?php

        foreach($user_names as $k) {
          $st="Active";
          if($k['active']==1) $st="Active";
           else $st="Inactive";
           echo "<tr> ";
           echo "<td>".$k['id']."</td> ";
           echo "<td> ".$k['user_name']."</td>";
           echo "<td>".$k['email'] ."</td> ";
           echo "<td> ".$k['title']."</td>";
           echo "<td> ".$st."</td>";
           echo "<td>  <a  title='Assigned Projects' href='". site_url("admin/user/")."'> "
                   . "<span class='demo-callback".$k['id']."' class='tooltipstered'> "
                   . "<b style='display:none'> ".$k['email'] ." "
                   . "</b><button  class='btn btn-info btn-sm'>Assigned Projects</button></span> </a></td>";
      
           echo "</tr>";
    
        } 
        
        ?>          
                    </table>
                  </section><!-- /.content -->
               
		
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- add new calendar event modal -->
      <?php include("/../loadjs.php"); ?>      
      <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>css/tooltipster.css" />
      <script type="text/javascript" src="<?php echo site_url();?>js/jquery.tooltipster.min.js"></script>
       <?php

        foreach($user_names as $k) {
           ?>
           <script>
       
	$('.demo-callback<?php echo $k['id'];?>').tooltipster({
            
	    content: 'Loading...',
            contentAsHTML: true,
            functionBefore: function(origin, continueTooltip) {
      
             var t=$('.demo-callback<?php echo $k['id'];?>').text();
        // we'll make this function asynchronous and allow the tooltip to go ahead and show the loading notification while fetching our data
        continueTooltip();
        $.ajax({
                type: 'POST',
                url: '<?php echo site_url("admin/test");?>',
                data: 't='+t,
                               success: function(data) {
                    // update our tooltip content with our returned data and cache it
                    origin.tooltipster('content', data).data('ajax', 'cached');
                }
            });
        }
     });
	    
      </script>
 
        <?php } ?>
      
</body>
</html>