<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Avika Project Management tool</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
         <?php include("/../loadcss.php");?>
                  <?php include("/../loadjs.php"); ?>      

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
                                     <div id="container">

      <?php
function dateDiff($d1,$d2){
	$date1=strtotime($d1);
	$date2=strtotime($d2);
	$seconds = $date1 - $date2;
	$weeks = floor($seconds/604800);
	$seconds -= $weeks * 604800;
	$days = floor($seconds/86400);
	$seconds -= $days * 86400;
	$hours = floor($seconds/3600);
	$seconds -= $hours * 3600;
	$minutes = floor($seconds/60);
	$seconds -= $minutes * 60;
	$months=round(($date1-$date2) / 60 / 60 / 24 / 30);
	$years=round(($date1-$date2) /(60*60*24*365));
	$diffArr=array("Seconds"=>$seconds,
	"minutes"=>$minutes,
	"Hours"=>$hours,
	"Days"=>$days,
	"Weeks"=>$weeks,
	"Months"=>$months,
	"Years"=>$years
	) ;
	return $diffArr;
}     
      foreach($task_list as $k) {                               	
   $tname=str_replace(" ","_",$k['task_name']).$k['task_id'];
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
 <span style="font-size: 11px; color:green;"><h5> Task Name: &nbsp; &nbsp;  <?php echo $k['task_name']; ?> </h5></span> 
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

 <hr width="80px">  </hr> <br/>
	<?php 
	}
   else { ?>
       
 <span style="font-size: 11px; color:green;"><h5> Task Name:&nbsp; &nbsp;  <?php echo $k['task_name']; ?> </h5></span> 
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

 <hr width="80px">  </hr> <br/>
  <?php }
                               
                                } ?>
 </div>
                                </div>
                                <div class="timeline-footer">

                                </div>
                                </div>
                                </li>
                                
                                           
                                <!-- END timeline item -->
                                <!-- timeline item -->                           
                            </ul>
                        </div><!-- /.col -->
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

    </body>
</html>