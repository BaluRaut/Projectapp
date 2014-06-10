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
                    <div style="color:red" class="error_box">   </div>
                    <?php 
			$attributes = array( 'id' => 'myform','name'=> 'myform','class'=>'form-horizontal' );    
			echo form_open_multipart('admin/projects',$attributes);
			?>
                    <input type="hidden" value="submit" name="flag"/>
                    <table>
                        <tr> <td> 
                                <label for="inputSuccess" class="control-label"> Project Name:</label> </td>
                            <td> 
                        <input type="text" placeholder="Project Name" id="inputSuccess" name="project_name" class="form-control">
                            </td> </tr>
                        <tr> <td>                    
                                <label for="inputSuccess" class="control-label"> Project Manager:</label> </td>
                            <td> 
                        <select id="project_manager" style="width:250px" name="project_manager">
                        <?php //print_r($project_manager);
                        foreach($project_manager as $key) {
                          echo "<option value='".$key['email']."'>".$key['display_name']."</option>";
                        }
                        ?>                           
                        </select>
                            </td>

                        <tr> <td>   <label for="inputSuccess" class="control-label"> Project users:</label> </td>
                            <td> <select id="users" style="width:380px" name="project_users[]" multiple="" class="col-xs-5" name="users"> 
                        <option value="None" id="none"> None </option> <?php //print_r($project_manager);
                         foreach($user as $key) {
                          echo "<option value='".$key['email']."'>".$key['display_name']."</option>";
                        }
                        ?>                           
                        </select>
                            </td>
                        </tr>
                        <tr> <td> 
                                <label for="inputSuccess" class="control-label"> Start Date:</label> </td>
                        <td> <input type="text" placeholder="Start Date" name="date_timepicker_start" 
                                    id="date_timepicker_start" class="form-control col-xs-5">
                        </td>
                        </tr>
                        <tr><td> 
                                <label for="inputSuccess" class="control-label"> End Date:</label> </td>
                            <td> 
                        <input type="text" placeholder="End Date" name="date_timepicker_end" 
                                    id="date_timepicker_end" class="form-control">
                        </tr>
                        <tr> <td> &nbsp; </td> <td> &nbsp; </td> </tr>
                        <tr> <td> &nbsp; </td> <td>  <input type="submit" class="btn btn-primary" value="Create Project" name="Submit"/> </td> 
                        </tr>
                    </table>
                   
                    </form>
     
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