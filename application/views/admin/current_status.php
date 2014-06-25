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
              
                         <input type="button"  style="" onclick="clears();" 
                                 class="btn btn-info btn-flat"    value="Clear"/>
                             &nbsp; &nbsp; 
                          
                             
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
                style="width: 125px;" aria-label="CSS grade: activate to sort column ascending">Status
            </th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 115px;" aria-label="CSS grade: activate to sort column ascending"> Set Progress
               </th>
       
        </tr>
	</thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
	<?php 
	$mod=1;
	foreach($timesheet_details as $times)  { 
            $tnames=$times['task_name'];
            $times['task_name']=str_replace(" ","_",$times['task_name'])."_____".$times['task_id'];
	if($mod%2==0){
	?>        
	<tr class="odd">
	<td style="color:#2A6496"><?php echo  $times['project_name']; ?> </td>
	<td style="color:#2A6496"><?php echo  $tnames ; ?> </td>
        <td style="color:#2A6496">      
            <div class="progress" >
            <div style="width: <?php echo $times['task_status'];?>%" 
            id="progress_bar<?php echo $times['task_name'];?>"  aria-valuemax="70" 
            aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-aqua">
            <span class="sr-only">20% Complete</span>

            </div>
            </div>
        </td>
        <td>      
 <select name="task_name" style="width:250px" class="tsk_<?php echo $times['task_name'];?>" tabindex="-1" title="" >
<option value="0"> 0 </option>
<option value="10"> 10 </option>
<option value="20"> 20 </option>
<option value="30"> 30 </option>
<option value="40"> 40 </option>
<option value="50"> 50 </option>
<option value="60"> 60 </option>
<option value="70"> 70 </option>
<option value="80"> 80 </option>
<option value="90"> 90 </option>
<option value="100"> 100 </option>
</select>
      <?php if($times['task_status']>1) { ?>
           <script>  </script>
     <?php  }
      ?>
       
<script>    
  $(document).ready(function() {
      
        $(<?php echo "'.tsk_".$times['task_name']."'";?>).val("<?php echo $times['task_status'];?>");
        $(<?php echo "'.tsk_".$times['task_name']."'";?>).select2({
            minimumResultsForSearch: -1 ,
            width: '62px'
            
         });
    $( <?php echo "'.tsk_".$times['task_name']."'";?> ).change(function() {
        $("#progress_bar<?php echo $times['task_name'];?>").css('width', $(this).val() + "%");
          $.ajax({
                url: '<?php echo site_url('/admin/update_task/');?>',
                type: 'POST',
                data :'updatesetprogress=<?php echo $times['task_name']."___";?>'+$(this).val(),
                success: function(data) {
                    
                    }
                });
            });
    });
</script>
  </td>                 
  </tr>
<?php 
     }  
     else 
     {
?>
	<tr class="even">
	<td style="color:#2A6496" ><?php echo  $times['project_name']; ?> </td>
	<td style="color:#2A6496"><?php  echo  $tnames ; ?> </td>
        <td style="color:#2A6496">       
            <div class="progress" >
            <div style="width: <?php echo $times['task_status'];?>%" 
            id="progress_bar<?php echo $times['task_name'];?>"  aria-valuemax="70" 
            aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-aqua">
            <span class="sr-only">20% Complete</span>
            </div>
            </div>
        </td>
 <td>      
 <select  style="width:250px" class="tsk_<?php echo $times['task_name'];?>" tabindex="-1" title="" >
<option value="0"> 0 </option>
<option value="10"> 10 </option>
<option value="20"> 20 </option>
<option value="30"> 30 </option>
<option value="40"> 40 </option>
<option value="50"> 50 </option>
<option value="60"> 60 </option>
<option value="70"> 70 </option>
<option value="80"> 80 </option>
<option value="90"> 90 </option>
<option value="100"> 100 </option>
</select>
      <?php if($times['task_status']>1) { ?>
           <script>  </script>
     <?php  }
      ?>
       
<script>    
  $(document).ready(function() {
      
        $(<?php echo "'.tsk_".$times['task_name']."'";?>).val("<?php echo $times['task_status'];?>");
        $(<?php echo "'.tsk_".$times['task_name']."'";?>).select2({
            minimumResultsForSearch: -1 ,
            width: '62px'            
         });
    $( <?php echo "'.tsk_".$times['task_name']."'";?> ).change(function() {
        $("#progress_bar<?php echo $times['task_name'];?>").css('width', $(this).val() + "%");
          $.ajax({
                url: '<?php echo site_url('/admin/update_task/');?>',
                type: 'POST',
                data :'updatesetprogress=<?php echo $times['task_name']."___";?>'+$(this).val(),
                success: function(data){
                    
                    }
                });
            });
    });
</script>  
  </td>
	</tr>
	<?php } // Even Else part close 
	$mod++;
	} // Main Loop close here
	?>
	</tbody></table> </div>
	</section><!-- /.content -->
	</aside><!-- /.right-side -->
	</div><!-- ./wrapper -->

    <script>
    $(document).ready(function() { 
        $("#by_project_name").select2({ width: '112px' });
        $("#by_task_name").select2({ width: '112px' });
        $("#by_user_name").select2({ width: '112px' });
        });
    </script>

<script type="text/javascript">
  $("#project_name_status").select2({ width: '120px'});

   $("#by_task_name").change(function() {
            $.ajax({
                url: '<?php echo site_url('/admin/task_status_ajax/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });             
             });
             
   $("#by_user_name").change(function() {
     
         $.ajax({
                url: '<?php echo site_url('/admin/task_status_ajax/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });  
                
             });
             
     $("#by_project_name").change(function() {
           $.ajax({
                url: '<?php echo site_url('/admin/task_status_ajax/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });               
    });
    function search() {

         $.ajax({
                url: '<?php echo site_url('/admin/task_status_ajax/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val(),
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
       
          $.ajax({
                url: '<?php echo site_url('/admin/task_status_ajax/');?>',
                type: 'POST',
                data :'user_name='+$('#by_user_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val(),
                success: function(data) {
                      $("#datasheet").html(data);
                    }
                });   
        }
</script>
	</body>
	</html>