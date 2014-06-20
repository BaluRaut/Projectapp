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
    /*
    .select2-container .select2-choice {
    -moz-user-select: none;
    background-clip: padding-box;
    background-color: #FFFFFF;
    background-image: linear-gradient(to top, #EEEEEE 0%, #FFFFFF 50%);
    border: 0 solid #AAAAAA;
    border-radius: 4px;
    color: #6B8E23;
    display: block;
    height: 26px;
    line-height: 26px;
    overflow: hidden;
    padding: 0 0 0 8px;
    position: relative;
    text-decoration: none;
    white-space: nowrap;
    }
    */
     </style>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside id="first" class="left-side sidebar-offcanvas">
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
            <aside id="second" class="right-side">
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
                                 <li class="time-label">                          
                                </li>
                                <li>
                                
                                <div class="timeline-item">

                                <h3 class="timeline-header">

                                </h3>
                                <div class="timeline-body"> 
                                    <table>
                                        <tr>
                                        <td> 
                                             Search :
                                        </td> 
                                        <td>        
                                            &nbsp; &nbsp;
                                         </td>  
                                         <td>
                                           By Project: 
                                           <select name="by_project_name" style="width:250px" 
                                                   id="by_project_name" tabindex="-1" title="" 
                                                   class="select2-offscreen">
                                      <option value="All"><?php echo "All"; ?></option>

                                               <?php foreach($projects as $t) { ?>
                                              <option value="<?php echo $t['project_name']; ?>"><?php echo $t['project_name']; ?></option>
                                              <?php } ?>
                                         </select>                                           
                                             
                                         </td>
                                         <td>
                                            &nbsp; &nbsp; By Task: 
                                           <select name="by_task_name" style="width:250px" 
                                                   id="by_task_name" tabindex="-1" title="" 
                                                   class="select2-offscreen">
                                          <option value="All"><?php echo "All"; ?></option>
                                            <?php foreach($tasks as $t) { ?>
                                              <option value="<?php echo $t['task_name']; ?>"><?php echo $t['task_name']; ?></option>
                                              <?php } ?>                          
                                         </select>  
                                             
                                         </td>
                                               <td>
                                           By Status: 
                                        <select name="by_status" style="width:250px" 
                                                   id="by_status" tabindex="-1" title="" 
                                                   class="select2-offscreen">
                                      <option value="All"> All </option>
                                      <?php for($q=10;$q<110;$q+=10) { ?>
                                      <option value='<?php echo $q;?>'> <?php echo $q; ?></option>
                                      <?php } ?>

                                         </select>                                           
                                             
                                         </td>
                                         <td>
                                          &nbsp; &nbsp; Created By :   
                                          <select name="by_create_name" style="width:250px" 
                                                   id="by_create_name" tabindex="-1" title="" 
                                                   class="select2-offscreen">
                                          <option value="All"><?php echo "All"; ?></option>
                                            <?php foreach($created as $t) { ?>
                                              <option value="<?php echo $t['created_by']; ?>"><?php echo $t['created_by']; ?></option>
                                              <?php } ?>                          
                                         </select>  
                                         </td>
                                        </tr>
                                    </table> 
                                    <br/>
                                    <br/>
                                     <div id="container">
	<table class="table table-bordered table-striped dataTable" id="example1" aria-describedby="example1_info">
            <thead>
	<tr role="row">
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 195px;" aria-sort="ascending" 
                aria-label="Rendering engine: activate to sort column descending">Timer
            </th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 270px;" aria-label="Browser: activate to sort column ascending">Task Name
            </th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 115px;" aria-label="CSS grade: activate to sort column ascending">Start Date
            </th>
              <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 115px;" aria-label="CSS grade: activate to sort column ascending">End Date
            </th>
               <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 115px;" aria-label="CSS grade: activate to sort column ascending">Total Days
            </th>
               <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 115px;" aria-label="CSS grade: activate to sort column ascending">Progress
               </th>
                 <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 115px;" aria-label="CSS grade: activate to sort column ascending"> Set Progress
               </th>
        </tr>
	</thead>
      <?php
   foreach($task_list as $k) {                               	
   $tname=str_replace(" ","_",$k['task_name'])."_____".$k['task_id'];
   if($k['is_stopped']==0) {
        $t_skid=$k['task_id'];
        $u_id=$_SESSION['user_id'];
	$p_jectid=$k['project_id'];     
        $sql="SELECT s.project_id,t.task_id,ti.time_add FROM tasks t,
	projects s,timesheet ti,users u WHERE ti.time_end IS NULL 
	AND
	ti.task_id=t.task_id 
	AND 
	ti.project_id=s.project_id 
	AND 
	u.id=ti.user_id 
	AND 
	t.user_id=$u_id   
	AND 
	ti.task_id=$t_skid 
	AND 
	ti.project_id=$p_jectid LIMIT 1";
        $query=mysql_query($sql);
	while($row=mysql_fetch_array($query)) { 
	$time=$row['time_add']; 
	}
	$uu=date('Y-m-d h:i:s A');
        $s="$uu";
        //$ty="$time";
        $ss="$time";
        $date1 = strtotime("$s");
        $date2 = strtotime("$ss");
        $subTime = $date1 - $date2;
        $y = ($subTime/(60*60*24*365));
        $d = ($subTime/(60*60*24))%365;
        $hrs = ($subTime/(60*60))%24;
        $min = ($subTime/60)%60;
        $sec=($subTime/60*60)%60;
       	$task_id=$k['task_id'];
	$_SESSION['add_time'.'_'.$task_id.'']=$time."==".$task_id;
	?>
                                             <tr> <td>
  <input type="hidden" id="p_task_id<?php echo $tname; ?>" 
     value="<?php echo $k['task_id']."==".$k['project_id']."==".$k['task_name'];?>"/>
  
 <div class="p_task_id<?php echo $tname;?>display">
 <input type="button"  style="background:none repeat scroll 0 0 #CA3C3C" class="btn btn-danger" id="p_task_id<?php echo $tname;?>stop"  
            onclick="<?php echo $tname;?>myplugin('p_task_id<?php echo $tname;?>','<?php echo $k['task_id']; ?>','stop')"  
			 style="display:none" value="Stop" />
  <input style="display:none;background: none repeat scroll 0 0 #1CB841;" type="button" class="btn btn-info" 
         id="p_task_id<?php echo $tname;?>start" 
        onclick="<?php echo $tname;?>myplugin('p_task_id<?php echo $tname;?>','<?php echo $k['task_id']; ?>','start')" 
        value="Start" />

 <span class="p_task_id<?php echo $tname;?>hr"><?php echo $hrs;?></span>:
 <span class="p_task_id<?php echo $tname;?>min"><?php echo $min;?></span>: 
 <span class="p_task_id<?php echo $tname;?>sec"><?php echo $sec;?></span>

<br/>	
</div>
<script type="text/javascript">
<?php echo $tname;?>myplugin('p_task_id<?php echo $tname;?>','<?php echo $k['task_id']; ?>','automatic');

    function <?php echo $tname;?>myplugin(str,str1,status){
                 <?php echo $tname;?>h=$("#container").find("."+str+"hr");
                <?php echo $tname;?>m=$("#container").find("."+str+"min");
                <?php echo $tname;?>s=$("#container").find("."+str+"sec");
				<?php echo $tname;?>starts=$("#container").find("#"+str+"start");
				<?php echo $tname;?>stops=$("#container").find("#"+str+"stop");
				if(status=="automatic")
				{
				<?php echo $tname;?>starts.hide();
			    <?php echo $tname;?>stops.show();
				<?php echo $tname;?>start();
				}
                if(status=="start") {
                var p_task_id=$("#p_task_id<?php echo $tname;?>").val();
               // alert("Timer is now starting");
		<?php echo $tname;?>starts.hide();
		<?php echo $tname;?>stops.show();
                $.ajax({
                url: '<?php echo site_url("user/updatetimer/");?>',
                type: 'POST',
                data :'update='+p_task_id,
                success: function(data) {
                    
                    }
                });
                 <?php echo $tname;?>start();
                }
                if(status=="stop")
                {              
                <?php echo $tname;?>starts.show();
		<?php echo $tname;?>stops.hide();				
                  var p_task_id=$("#p_task_id<?php echo $tname;?>").val();
                  //       alert(p_task_id);
                $.ajax({
                url: '<?php echo site_url("user/updatetimer/");?>',
                type: 'POST',
                data :'update=update&updates='+p_task_id,
                success: function(data) {
                   // alert(data);
                          }
                });
                  <?php echo $tname;?>stop();
                }
         function <?php echo $tname;?>start() {
        // alert(str);
        // do_time();
        <?php echo $tname;?>timer = setInterval(<?php echo $tname;?>do_time, 1000);
                }
                function <?php echo $tname;?>stop() {
                //alert("stopped");
                        clearInterval(<?php echo $tname;?>timer);
                        <?php echo $tname;?>timer = 0;
						<?php echo $tname;?>h.html("00");
                        <?php echo $tname;?>m.html("00");
                        <?php echo $tname;?>s.html("00");
             

                }
            function <?php echo $tname;?>do_time() {
                        // parseInt() doesn't work here...
                        <?php echo $tname;?>hour = parseFloat(<?php echo $tname;?>h.text());
                        <?php echo $tname;?>minute = parseFloat(<?php echo $tname;?>m.text());
                        <?php echo $tname;?>second = parseFloat(<?php echo $tname;?>s.text());

                        <?php echo $tname;?>second++;

                        if(<?php echo $tname;?>second > 59) {
                                <?php echo $tname;?>second = 0;
                                <?php echo $tname;?>minute = <?php echo $tname;?>minute + 1;
                        }
                        if(<?php echo $tname;?>minute > 59) {
                                 <?php echo $tname;?>minute = 0;
                                <?php echo $tname;?>hour = <?php echo $tname;?>hour + 1;
                        }

                        <?php echo $tname;?>h.html("0".substring(<?php echo $tname;?>hour >= 10) + <?php echo $tname;?>hour);
                        <?php echo $tname;?>m.html("0".substring(<?php echo $tname;?>minute >= 10) + <?php echo $tname;?>minute);
                        <?php echo $tname;?>s.html("0".substring(<?php echo $tname;?>second >= 10) + <?php echo $tname;?>second);
                }

        }

</script>
  </td>
  <td> 
      <span style="font-size: 11px; color:green;"><h5>  &nbsp; &nbsp;  <?php echo $k['task_name']; ?> </h5></span> 
  </td>
   <td> 
  <?php $stdate=explode(" ",$k['StartDate']); echo str_replace("-","/",$stdate[0]); ?>
 </td>   
 <td> 
  <?php 
    $edate=explode(" ",$k['EndDate']);
    $y=date('Y-m-d h:i:s A');
    $dt="$y";
    $dateB = $k['EndDate']; 
    $t="$dateB";
    if(strtotime($dt) > strtotime($t)){ 
         echo "<span class='bg-red'>".str_replace("-","/",$edate[0])."</span>"; 

    }
 else {
           echo "<span>".str_replace("-","/",$edate[0])."</span>"; 
    }
  
  ?>
  </td>
  <td>  <?php 
  $sql=mysql_query("SELECT DATEDIFF( '".$k['EndDate']."', '".$k['StartDate']."' ) AS days"); 
  while($row=mysql_fetch_array($sql)) {
      echo $row['days']+1;
      break;
  }

  ?>
  </td>
  
    <td>
      
  <div class="progress" >
<div style="width: <?php echo $k['task_status'];?>%" 
     id="progress_bar<?php echo $tname;?>"  aria-valuemax="70" 
     aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-aqua">
<span class="sr-only">20% Complete</span>

</div>
</div>
        
  </td>
  <td>      
 <select name="project_name" style="width:250px" class="<?php echo $tname;?>" tabindex="-1" title="" >
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
      <?php if($k['task_status']>1) { ?>
           <script>  </script>
     <?php  }
      ?>
       
<script>    
  $(document).ready(function() {
      
        $(<?php echo "'.".$tname."'";?>).val("<?php echo $k['task_status'];?>");
        $(<?php echo "'.".$tname."'";?>).select2({
            minimumResultsForSearch: -1 ,
            width: '62px'
            
         });
    $( <?php echo "'.".$tname."'";?> ).change(function() {
        $("#progress_bar<?php echo $tname;?>").css('width', $(this).val() + "%");
          $.ajax({
                url: '<?php echo site_url('/user/update_task/');?>',
                type: 'POST',
                data :'updatesetprogress=<?php echo $tname."___";?>'+$(this).val(),
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
   else { ?>
 <tr><td>
 <input type="hidden" id="p_task_id<?php echo $tname; ?>" 
     value="<?php echo $k['task_id']."==".$k['project_id']."==".$k['task_name'];?>"/>
  
 <div class="p_task_id<?php echo $tname;?>display">
     
 <input type="button"  style="display:none;background:none repeat scroll 0 0 #CA3C3C" 
    class="btn btn-danger" id="p_task_id<?php echo $tname;?>stop"  
    onclick="<?php echo $tname;?>myplugin('p_task_id<?php echo $tname;?>','<?php echo $k['task_id']; ?>','stop')"
     style="display:none" value="Stop" />
 
  <input style="background: none repeat scroll 0 0 #1CB841;" 
    type="button" class="btn btn-info" 
    id="p_task_id<?php echo $tname; ?>start" 
    onclick="<?php echo $tname; ?>myplugin('p_task_id<?php echo $tname; ?>','<?php echo $k['task_id']; ?>','start')" 
        value="Start" />

 <span class="p_task_id<?php echo $tname;?>hr">00</span>:
 <span class="p_task_id<?php echo $tname;?>min">00</span>: 
 <span class="p_task_id<?php echo $tname;?>sec">00</span>

<script type="text/javascript">
    function <?php echo $tname;?>myplugin(str,str1,status){
                //alert(str);
                <?php echo $tname;?>h=$("#container").find("."+str+"hr");
                <?php echo $tname;?>m=$("#container").find("."+str+"min");
                <?php echo $tname;?>s=$("#container").find("."+str+"sec");
				<?php echo $tname;?>starts=$("#container").find("#"+str+"start");
				<?php echo $tname;?>stops=$("#container").find("#"+str+"stop");
                if(status=="start") {
                var p_task_id=$("#p_task_id<?php echo $tname; ?>").val();
               // alert("Timer is now starting");
			   <?php echo $tname;?>starts.hide();
			    <?php echo $tname;?>stops.show();
                $.ajax({
                url: '<?php echo site_url("user/updatetimer/");?>',
                type: 'POST',
                data :'update='+p_task_id,
                success: function(data) {
                    }
                });
                 <?php echo $tname;?>start();
                }
                if(status=="stop")
                {              
                 <?php echo $tname;?>starts.show();
			    <?php echo $tname;?>stops.hide();				
                var p_task_id=$("#p_task_id<?php echo $k['task_name']; ?>").val();
                $.ajax({
                url: '<?php echo site_url("user/updatetimer/");?>',
                type: 'POST',
                data :'update=update&updates='+p_task_id,
                success: function(data) {
                          }
                });
                  <?php echo $tname;?>stop();
                }
         function <?php echo $tname;?>start() {
        // alert(str);
        // do_time();
        <?php echo $tname;?>timer = setInterval(<?php echo $tname;?>do_time, 1000);
                }
                function <?php echo $tname;?>stop() {
                //alert("stopped");
                        clearInterval(<?php echo $tname;?>timer);
                        <?php echo $tname;?>timer = 0;
						<?php echo $tname;?>h.html("00");
                        <?php echo $tname;?>m.html("00");
                        <?php echo $tname;?>s.html("00");

                }
            function <?php echo $tname;?>do_time() {
                        // parseInt() doesn't work here...
                        <?php echo $tname;?>hour = parseFloat(<?php echo $tname;?>h.text());
                        <?php echo $tname;?>minute = parseFloat(<?php echo $tname;?>m.text());
                        <?php echo $tname;?>second = parseFloat(<?php echo $tname;?>s.text());

                        <?php echo $tname;?>second++;

                        if(<?php echo $tname;?>second > 59) {
                                <?php echo $tname;?>second = 0;
                                <?php echo $tname;?>minute = <?php echo $tname;?>minute + 1;
                        }
                        if(<?php echo $tname;?>minute > 59) {
                                 <?php echo $tname;?>minute = 0;
                                <?php echo $tname;?>hour = <?php echo $tname;?>hour + 1;
                        }

                        <?php echo $tname;?>h.html("0".substring(<?php echo $tname;?>hour >= 10) + <?php echo $tname;?>hour);
                        <?php echo $tname;?>m.html("0".substring(<?php echo $tname;?>minute >= 10) + <?php echo $tname;?>minute);
                        <?php echo $tname;?>s.html("0".substring(<?php echo $tname;?>second >= 10) + <?php echo $tname;?>second);
                }

        }

</script>

 </td> 
 <td> 
     <span style="font-size: 11px; color:green;"><h5>  &nbsp; &nbsp;  <?php echo $k['task_name']; ?> </h5></span> 
 </td> 
   <td> 
  <?php $stdate=explode(" ",$k['StartDate']); echo str_replace("-","/",$stdate[0]); ?>
 </td>   
 <td> 
  <?php 
    $edate=explode(" ",$k['EndDate']);
    $y=date('Y-m-d h:i:s A');
    $dt="$y";
    $dateB = $k['EndDate']; 
    $t="$dateB";
    if(strtotime($dt) > strtotime($t)){ 
         echo "<span class='bg-red'>".str_replace("-","/",$edate[0])."</span>"; 

    }
 else {
           echo "<span>".str_replace("-","/",$edate[0])."</span>"; 
    }
  
  ?>
  </td>
  <td>  <?php 
  $sql=mysql_query("SELECT DATEDIFF( '".$k['EndDate']."', '".$k['StartDate']."' ) AS days"); 
  while($row=mysql_fetch_array($sql)) {
      echo $row['days']+1;
      break;
  }

  ?>
  </td>
  
    <td>
      
  <div class="progress" >
<div style="width: <?php echo $k['task_status'];?>%" 
     id="progress_bar<?php echo $tname;?>"  aria-valuemax="70" 
     aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-aqua">
<span class="sr-only">20% Complete</span>

</div>
</div>
        
  </td>
  <td>      
 <select name="project_name" style="width:250px" class="<?php echo $tname;?>" tabindex="-1" title="" >
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
      <?php if($k['task_status']>1) { ?>
           <script>  </script>
     <?php  }
      ?>
       
<script>    
  $(document).ready(function() {
      
        $(<?php echo "'.".$tname."'";?>).val("<?php echo $k['task_status'];?>");
        $(<?php echo "'.".$tname."'";?>).select2({
            minimumResultsForSearch: -1 ,
            width: '62px'
            
         });
    $( <?php echo "'.".$tname."'";?> ).change(function() {
        $("#progress_bar<?php echo $tname;?>").css('width', $(this).val() + "%");
          $.ajax({
                url: '<?php echo site_url('/user/update_task/');?>',
                type: 'POST',
                data :'updatesetprogress=<?php echo $tname."___";?>'+$(this).val(),
                success: function(data) {
                    
                    }
                });
            });
    });
</script>
  
  </td>
 </tr>
 
  <?php }
                               
                                } ?>
 
 </div>
                                </div>
</table>
                                <div class="timeline-footer">

                                </div>
                                </div>
                                </div>
                                </li>
                                                                      
                                <!-- END timeline item -->
                                <!-- timeline item -->                           
                            </ul>
                        </div><!-- /.col -->
                    </div>
                </section><!-- /.content -->
                             <script>
    $(document).ready(function() { 
      //  loaddefault();
        $("#by_project_name").select2({ width: '202px' });
        $("#by_status").select2({ width: '120px'});
        
        $("#by_task_name").select2({ width: '202px' });
        
        $("#by_create_name").select2({ width: '202px' });
         $("#by_project_name").change(function() {
         $("#container").hide();
        /*$.ajax({
                url: '<?php echo site_url('YY/user/update_task/');?>',
                type: 'POST',
                data :'updatesetprogress=<?php echo $tname."___";?>'+$(this).val(),
                success: function(data) {
                    
                    }
                });
                */
            });
          $("#by_create_name").change(function() {
               $("#container").show();
               $.ajax({
                url: '<?php echo site_url('/user/filter_task/');?>',
                type: 'POST',
                data :'created_by='+$('#by_create_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_status='+$('#by_status').val(),
                success: function(data) {
                    $("#container").html(data);
                    }
                });            
             });
          $("#by_status").change(function() {
               $("#container").show();
               $.ajax({
                url: '<?php echo site_url('/user/filter_task/');?>',
                type: 'POST',
                data :'created_by='+$('#by_create_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_status='+$('#by_status').val(),
                success: function(data) {
                    $("#container").html(data);
                    }
                });            
             });
           $("#by_project_name").change(function() {
               $("#container").show();
               $.ajax({
                url: '<?php echo site_url('/user/filter_task/');?>',
                type: 'POST',
                data :'created_by='+$('#by_create_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_status='+$('#by_status').val(),
                success: function(data) {
                    $("#container").html(data);
                    }
                });            
             });
             $("#by_task_name").change(function() {
               $("#container").show();
               $.ajax({
                url: '<?php echo site_url('/user/filter_task/');?>',
                type: 'POST',
                data :'created_by='+$('#by_create_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_status='+$('#by_status').val(),
                success: function(data) {
                    $("#container").html(data);
                    }
                });            
             });
               function loaddefault() {
               $("#container").show();
               $.ajax({
                url: '<?php echo site_url('/user/filter_task/');?>',
                type: 'POST',
                data :'created_by='+$('#by_create_name').val()+'&project_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val()+'&by_status='+$('#by_status').val(),
                success: function(data) {
                    $("#container").html(data);
                    }
                });            
                }
    });
    </script>

            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
    
        <!-- add new calendar event modal -->

    </body>
</html>