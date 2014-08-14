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
                                  <option value="All"><?php echo "All"; ?></option>

                                               <?php foreach($project_names as $t) { ?>
                                              <option value="<?php echo $t['project_name']; ?>"><?php echo $t['project_name']; ?></option>
                                              <?php } ?>
                                        </select > 
                                         &nbsp; &nbsp; User : <select name="by_user_name" style="width:250px" 
                                                   id="by_user_name" tabindex="-1" title="" 
                                                   class="select2-offscreen">
                                  <option value="All"><?php echo "All"; ?></option>

                                               <?php foreach($user_list as $t) { ?>
                                              <option value="<?php echo $t['id']; ?>"><?php echo $t['user_name']; ?></option>
                                              <?php } ?>
                                        </select > 
                   &nbsp; &nbsp;      Task :  
                   <select name="by_task_name" style="width:250px" 
                                                   id="by_task_name" tabindex="-1" title="" 
                                                   class="select2-offscreen">  
                       <option value="All"><?php echo "All"; ?></option>
                                            <?php foreach($tasks as $t) { ?>
                                              <option value="<?php echo $t['task_name']; ?>"><?php echo $t['task_name']; ?></option>
                                              <?php } ?>   
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
	<div class="col-sm-6 text-right order-total"> <?php echo @$total_hrs_worked[0]['times']; ?></div>
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
	<td style="color:#2A6496"><?php echo  $times['project_name']; ?> </td>
	<td style="color:#2A6496"><?php echo  $times['task_name'] ; ?> </td>
        <td style="color:#2A6496"><?php  echo  $times['time_add'] ; ?> </td>
        <td style="color:#2A6496"><?php  echo  $times['time_end'] ; ?> </td>
	<td style="color:#2A6496"><?php echo  $times['totalhours'] ; ?>:00 </td>                         
	</tr>
	<?php  }  else { ?>
	<tr class="even">
	<td style="color:#2A6496" ><?php echo  $times['project_name']; ?> </td>
	<td style="color:#2A6496"><?php  echo  $times['task_name'] ; ?> </td>
        <td style="color:#2A6496"><?php  echo  $times['time_add'] ; ?> </td>
        <td style="color:#2A6496"><?php  echo  $times['time_end'] ; ?> </td>
	<td style="color:#2A6496" ><?php  echo  $times['totalhours'] ; ?>:00 </td>
	</tr>
	<?php } // Even Else part close 
	$mod++;
	} // Main Loop close here
	?>
	</tbody></table> </div>
	</section><!-- /.content -->
	</aside><!-- /.right-side -->
	</div><!-- ./wrapper -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/js/jquery.datetimepicker.css"/ >
<script src="<?php echo base_url();?>js/jquery.datetimepicker.js"></script>
<script src="<?php echo base_url();?>js/validate.js"></script>
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
                url: '<?php echo site_url('/admin/timesheet_ajax/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });            
             });
             
   $("#by_user_name").change(function() {
              $.ajax({
                url: '<?php echo site_url('/admin/timesheet_ajax/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });            
             });
             
     $("#by_project_name").change(function() {
          $.ajax({
                url: '<?php echo site_url('/admin/timesheet_ajax/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });              
    });
    function search() {

          $.ajax({
                url: '<?php echo site_url('/admin/timesheet_ajax/');?>',
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
                url: '<?php echo site_url('/admin/timesheet_ajax/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                }); 
  
        }
      function download()  {
      
        $.ajax({
                url: '<?php echo site_url('/admin/make_data/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                   document.location.href='<?php echo site_url('/admin/download_data/');?>'
                    }
                }); 
        
       }
       
    function invoice()  {
      
        $.ajax({
                url: '<?php echo site_url('/admin/make_data/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_date='+$('#date_timepicker').val()+'&start_date='+$("#date_timepicker_start").val()+'&end_date='+$("#date_timepicker_end").val(),
                success: function(data) {
                   document.location.href='<?php echo site_url('/admin/download_invoice/');?>'
                    }
                }); 
        
       }
</script>
	</body>
	</html>