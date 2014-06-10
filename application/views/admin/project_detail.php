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
    colspan="1" style="width: 195px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Project ID</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" 
    colspan="1" style="width: 270px;" aria-label="Browser: activate to sort column ascending">Project Name</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" 
    colspan="1" style="width: 248px;" aria-label="Platform(s): activate to sort column ascending">Project Manager</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" 
    colspan="1" style="width: 115px;" aria-label="CSS grade: activate to sort column ascending">Start Date</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" 
    colspan="1" style="width: 115px;" aria-label="CSS grade: activate to sort column ascending">End Date</th>
</tr>
</thead>
                        <?php
                        
                        foreach($project_names as $k) {
                           $st=explode(" ",$k['Start_Date']);
                           $et=explode(" ",$k['End_Date']);
                           echo "<tr> ";
                           echo "<td>".$k['project_id']."</td> ";
                           echo "<td> ".$k['project_name']."</td>";
                           echo "<td>".$k['Project_Manager']."</td> ";
                           echo "<td> ".$st[0]."</td>";
                           echo "<td> ".$et[0]."</td>";
                           echo "</tr>";
                        } ?>
                        
                        
                    </table>
                    
                    
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          <?php include("/../loadjs.php"); ?>      
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/js/jquery.datetimepicker.css"/ >
<script src="<?php echo base_url();?>js/jquery.datetimepicker.js"></script>
<script src="<?php echo base_url();?>js/validate.js"></script>
    <script>
    $(document).ready(function() { 
        $("#project_manager").select2();
        $("#users").select2( {maximumSelectionSize: 5,closeOnSelect:false });
    
    });
    </script>
   <script type="text/javascript">
   jQuery(function(){
 jQuery('#date_timepicker_start').datetimepicker({
  format:'Y-m-d H:i:s',
  onShow:function( ct ){
   this.setOptions({
    maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():false
   })
  },
  timepicker:false
 });
 jQuery('#date_timepicker_end').datetimepicker({
  format:'Y-m-d H:i:s',
  onShow:function( ct ){
   this.setOptions({
    minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false
   })
  },
  timepicker:false
 });
});
</script> 
 <script type="text/javascript">
var validator = new FormValidator('myform', [{
    name: 'date_timepicker_start',
    rules: 'required'
},
{
    name: 'date_timepicker_end',
    rules: 'required'
},
{
    name: 'project_name',
    rules: 'required'
},
{
    name: 'project_manager',
    rules: 'required'
},
{
    name: 'project_users[]',
    rules: 'required'
}], function(errors, evt) {
      var SELECTOR_ERRORS = $('.error_box'),
      SELECTOR_SUCCESS = $('.success_box');
        
    if (errors.length > 0) {
        SELECTOR_ERRORS.empty();
        
        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            SELECTOR_ERRORS.append(errors[i].message + '<br />');
        }
        SELECTOR_SUCCESS.css({ display: 'none' });
        SELECTOR_ERRORS.fadeIn(200);
    } else {
             
        SELECTOR_ERRORS.css({ display: 'none' });
        SELECTOR_SUCCESS.fadeIn(200);
    }
    
   
});

</script>
</body>
</html>