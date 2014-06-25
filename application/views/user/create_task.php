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
                     <?php  if(@$_SESSION['success']=="project_create") {  unset($_SESSION['success']);  echo "<span id='sess' style='color:#00A65A'> Project Created Succesfully </span>" ; } ?>
                     <?php  if(@$_SESSION['success']=="task_created") {  unset($_SESSION['success']);  echo "<span id='sess' style='color:#00A65A'> Task Created Succesfully </span>" ; } ?>
                     <?php if(@$_SESSION['message']=="Some users Task already created") { unset($_SESSION['message']);  echo "<span id='sess' style='color:#F56954 !important'> <br/>For some users already created same task. </span>" ;   }  ?> 
                   <div style="color:red" class="error_box">   </div>
                    <?php 
			$attributes = array('id' => 'myform','name'=> 'myform','class'=>'form-horizontal');    
			echo form_open_multipart('user/new_task',$attributes);
			?>
                    <input type="hidden" value="submit" name="flag"/>
                                  <?php //print_r($project_manager);
                        foreach($project_names as $key) {
                          echo "<input type='hidden' id='end".str_replace(" ","_",$key['project_name'])."__".$key['project_id']."'"
                                  . " value='".$key['End_Date']."'/>";
                          echo "<input type='hidden' id='std".str_replace(" ","_",$key['project_name'])."__".$key['project_id']."'"
                                  . " value='".$key['Start_Date']."'/>";
                        }
                        ?> 
                    <table>
                        <tr> <td> 
                                <label for="inputSuccess" 
                                       class="control-label"> Select Project:</label> </td>
                            <td> 
                         <select id="project_name" style="width:250px" 
                                 name="project_name">
                        <?php //print_r($project_manager);
                        foreach($project_names as $key) {
                          echo "<option value='".str_replace(" ","_",$key['project_name'])."__".$key['project_id']."'>".$key['project_name']."</option>";
                        }
                        ?>                           
                        </select>
                      
                            </td> </tr>
                        <tr> <td>                    
                                <label for="inputSuccess" class="control-label">Task Name:</label> </td>
                            <td> 
                                <input type="text" placeholder="Task Name"  id="inputSuccess" 
                               name="task_name" class="form-control">
                            </td>
                        </tr>
                      
                        <tr>
                            <td> 
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
                        <tr> <td> &nbsp; </td> <td>  <input type="submit" class="btn btn-primary" value="Create Task" name="Submit"/> </td> 
                        </tr>
                    </table>
                   
                    </form>
                 </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/js/jquery.datetimepicker.css"/ >
<script src="<?php echo base_url();?>js/jquery.datetimepicker.js"></script>
<script src="<?php echo base_url();?>js/validate.js"></script>
    <script>
    $(document).ready(function() { 
        $("#project_name").select2();
        $("#users").select2( {maximumSelectionSize: 5,closeOnSelect:false });
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
    var edate="";
    var edt="";
    var std="";
    
    edate=jQuery("#project_name").val();         //alert(edate);
    edt=jQuery("#end"+edate).val();            
    std=jQuery("#std"+edate).val();
    
    jQuery("#project_name").on("change", function() {
         edate=jQuery("#project_name").val();
         edt=jQuery("#end"+edate).val();
         std=jQuery("#std"+edate).val();
    });
    
    jQuery('#date_timepicker_start').datetimepicker({
        format:'Y-m-d H:i:s',
        onShow:function( ct ){
            this.setOptions({       
            maxDate:edt,formatDate:'Y-m-d H:i:s',
            minDate:std,formatDate:'Y-m-d H:i:s'
            })
        },
        timepicker:false
    });
    
    jQuery('#date_timepicker_end').datetimepicker({
        format:'Y-m-d H:i:s',
        onShow:function( ct ){
            this.setOptions({
             maxDate:edt,formatDate:'Y-m-d H:i:s',
             minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():edt
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
    name: 'task_name',
    rules: 'required'
}], function(errors, evt) {
      var SELECTOR_ERRORS = $('.error_box'),
      SELECTOR_SUCCESS = $('.success_box'),
       SELECTOR_SESS = $('#sess');
        
    if (errors.length > 0) {
        SELECTOR_ERRORS.empty();
        
        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            SELECTOR_ERRORS.append(errors[i].message + '<br />');
        }
       SELECTOR_SESS.css({ display: 'none' });
        SELECTOR_SUCCESS.css({ display: 'none' });
        SELECTOR_ERRORS.fadeIn(200);
    } else {
             SELECTOR_SESS.css({ display: 'none' });
        SELECTOR_ERRORS.css({ display: 'none' });
        SELECTOR_SUCCESS.fadeIn(200);
    }
    
   
});

</script>
</body>
</html>