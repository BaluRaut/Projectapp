<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User   extends CI_Controller
{
   	  public function __construct()
        {
            parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->helper('language');
		        $this->lang->load('message', 'english');
                        $this->load->model('Frontmodel','',TRUE);
			$this->load->model('Loginmodel','',TRUE);
			$this->load->database();					
		        //$this->load->library('grocery_CRUD');
                        $this->form_validation->set_error_delimiters('<div style="color:red" id="errtext">', '</div>');
	}        
public function login() {
  //Check whether admin already logged in or not 
    if(session_start()){
  if((isset($_SESSION['is_loggedin_admin']))){
    redirect('admin/front');
  }
  if((isset($_SESSION['is_loggedin_employee']))){
    redirect('user/front');
  }
    }
  if($this->input->post('flag')=="Login") { 
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run() == TRUE) {
        $uname=$this->input->post('username');
        $password=$this->input->post('password');
        $query=$this->Loginmodel->validate("users",$uname,$password);
        $valid_uname=$query[0]['email'];
        if($valid_uname==$uname)  {
             if($query[0]['is_admin']==1){
                 session_start();
                 $_SESSION['is_loggedin_admin']="yes";
                 $_SESSION['admin_name']=$query[0]['display_name'];
                 $_SESSION['admin_mail']=$uname;
                  redirect('admin/front');
             }
             elseif($query[0]['is_admin']==0 && $query[0]['is_Project_Manager']==1) {
                      echo "I am Project Manager";
                      die();                      
             }
             else {
                 session_start();
                 $_SESSION['is_loggedin_employee']="yes";
                 $_SESSION['user_name']=$query[0]['display_name'];
                 $_SESSION['auser_mail']=$uname;
                 $_SESSION['user_id']=$query[0]['id'];
                 redirect('user/front');
             }
        } // $query if close
        else  {
            $data['err']="User Name and password are incorrect";
        }
    } // Validation if close
 } // Post if close
 
 $this->load->view('login',@$data); 
 
}  //End of the Login function



public function make_data() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_employee']=="yes")  {

    extract($_POST);
    $pr=($project_name=="All")? '' :  "  pr.project_name='".$_POST['project_name']."' AND " ;
    $tname=($by_task_name=="All") ? '' : " ts.task_name='".$_POST['by_task_name']."'  AND ";
    $date=($by_date=="") ? '': " ti.time_end LIKE '%".$_POST['by_date']."%'  AND ";
    $enddate=($end_date!="" && $start_date!="") ? " DATE( time_end )  BETWEEN '".$_POST['start_date']."'
                                                    AND '".$_POST['end_date']."'  AND " : '';

    $u_id=$_SESSION['user_id'];
    $condition="WHERE  ti.user_id=$u_id  AND   $enddate   $pr   $tname   $date   
                ti.user_id =ts.user_id AND ti.time_end IS NOT NULL AND pr.project_id = ti.project_id
                AND ti.task_id = ts.task_id";
    
    $_SESSION['download_query']="$condition";
    

  }
  else
  {
       redirect('user/login'); exit();
  }
}



public function download_data() {
 
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_employee']=="yes")  {
    
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=Timesheet_'.date('Y-m-d h:i:s A') .'.csv');

        // create a file pointer connected to the output stream
        $output = fopen('php://output', 'w');

        // output the column headings
        fputcsv($output, array('Project Name', 'Task Name', 'Start Time','End Time','Total Hours'));

      
    $condition=$_SESSION['download_query']; 

        $query=$this->Loginmodel->csvdata(" pr.project_name, ts.task_name, ti.Time_Add, ti.Time_end, ti.totalhours FROM  timesheet ti, projects pr, tasks ts  ",$condition);

        foreach($query as $row)
        fputcsv($output, $row);
        
        $sql="SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( totalhours ) ) ) as times "
            . " FROM timesheet ti, projects pr, tasks ts   $condition";
    
        $totalhrs=$this->Loginmodel->single_query("$sql");
        $thr=$totalhrs[0]['times'];
        fputcsv($output,array(' ',' ',' ','Total Hours:',$thr));

      
  }
  else
  {
       redirect('user/login'); exit();
  }
}




//Front Functionality
public function front() {   
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_employee']=="yes")  {
     $this->load->view('user/front',@$data);
  }
  else
  {
      redirect('user/login'); exit();
  }
}

public function my_projects() {
   
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_employee']=="yes")  {
      $condition="";
      $query=$this->Loginmodel->getdata(" projects WHERE Users LIKE '%".$_SESSION['auser_mail']."%' ",$condition);
      $data['project_names']=$query;    
      $this->load->view('user/my_projects',@$data);
  }
  else
  {
      redirect('user/login'); exit();
  }
}

public function my_tasks() {
   
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_employee']=="yes")  {
      $u_id=$_SESSION['user_id'];
      
      $condition=" WHERE t.is_opened='1' AND t.user_id=$u_id AND t.project_id=s.project_id ";
      $query=$this->Loginmodel->getdata("  tasks t,projects s ","$condition");
   //echo $this->db->last_query(); die();
      //die();
      $data['task_list']=$query;    
      $emails=$_SESSION['auser_mail'];
      $condition=" WHERE Users LIKE '%$emails%'";
      $query=$this->Loginmodel->getdata(" projects ","$condition");
     $data['projects']=$query;
     $condition=" WHERE user_id=$u_id ";
      $query=$this->Loginmodel->getdata(" tasks ","$condition");
     $data['tasks']=$query;
     $condition=" WHERE user_id=$u_id Group By created_by";
     $query=$this->Loginmodel->getdata(" tasks ","$condition");
     $data['created']=$query;
      $this->load->view('user/my_tasks',@$data);
  }
  else
  {
      redirect('user/login'); exit();
  }
}



public function new_task() {
   
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_employee']=="yes")  {
      
       if($this->input->post('flag')=="submit") {
        $p_id=explode("__",$_POST['project_name']);

             $rt=$this->Loginmodel->check_duplicate("tasks",$_POST['task_name'],$_SESSION['user_id'],$p_id[1]);
                if($rt==true) {
                   $_SESSION['message']= "This task is already created";
                }
                else {
                     $data_insert=array(
                              'task_id'=>NULL,
                              'task_name'=>$_POST['task_name'],
                              'project_id'=> str_replace("_","",$p_id[1]),
                              'user_id'=> $_SESSION['user_id'],
                              'is_opened'=>'1',
                              'is_stopped'=>'1',
                              'StartDate'=>$this->input->post('date_timepicker_start'),
                              'EndDate'=>$this->input->post('date_timepicker_end')
                              );
                $run=$this->Loginmodel->insert_table('tasks',$data_insert);
                //echo $this->db->last_query();
                //die();
                }
            $_SESSION['success']="task_created";
            redirect('user/new_task');
            exit();
          }
          else { 
            $data['success']="project_create";
            $email=$_SESSION['auser_mail'];
            $condition=" WHERE Users LIKE  '%$email%' GROUP BY project_name";
            $query=$this->Loginmodel->getdata("projects",$condition);
            $data['project_names']=$query;
            $this->load->view('user/create_task',$data);
          }
  }
  else
  {
      redirect('user/login'); exit();
  }
}
public function filter_task(){
    
      if(!session_start()) {
   redirect('user/login');
  }
  else  {
        if($_SESSION['is_loggedin_employee']=="yes"){
         extract($_POST);
  // data :'created_by='+$('#by_create_name').val()+'&porject_name='+$('#by_project_name').val()+'&by_task_name='+$('#by_task_name').val(),
            $u_id=$_SESSION['user_id'];
            $condition="";
            $p_name=($project_name=="All") ?  '' :  " s.project_name='".$_POST['project_name']."'   AND    ";
            $t_name=($by_task_name=="All") ?  '' :  " t.task_name='".$_POST['by_task_name']."'   AND     ";
            $crt=($created_by=="All") ?  '' :  " t.created_by='".$_POST['created_by']."'     AND     ";
            $status=($by_status=="All") ? '' : " t.task_status='".$_POST['by_status']."'  AND  ";
            $condition=" WHERE $t_name   $p_name    $crt  $status t.is_opened='1' AND t.user_id=$u_id AND t.project_id=s.project_id";
            $query=$this->Loginmodel->getdata("  tasks t,projects s ","$condition");
                     ?>
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
     foreach($query as $k) {                             	
   $tname="func".uniqid().str_replace(" ","_",$k['task_name'])."_____".$k['task_id'];
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
        $hrs = ($d*24);
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
	
                  var <?php echo $tname;?>is_start="no";
				  
                 <?php echo $tname;?>h=$("#container").find("."+str+"hr");
				 
                <?php echo $tname;?>m=$("#container").find("."+str+"min");
				
				
                <?php echo $tname;?>s=$("#container").find("."+str+"sec");
				
				<?php echo $tname;?>starts=$("#container").find("#"+str+"start");
				
				<?php echo $tname;?>stops=$("#container").find("#"+str+"stop");
				
				if(status=="automatic")				{
    					<?php echo $tname;?>is_start="yes";
                                        <?php echo $tname;?>starts.hide();
					<?php echo $tname;?>stops.show();
					<?php echo $tname;?>start();
				}
				
                if(status=="start") {
				
					<?php echo $tname;?>is_start="yes";
					var p_task_id=$("#p_task_id<?php echo $tname;?>").val();
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
				
				
                if(status=="stop") {   
				
					<?php echo $tname;?>is_start="no";
					<?php echo $tname;?>starts.show();
					<?php echo $tname;?>stops.hide();				
					var p_task_id=$("#p_task_id<?php echo $tname;?>").val();
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
   
           if(<?php echo $tname;?>is_start=="yes") {  
                <?php echo $tname;?>timer = setInterval(<?php echo $tname;?>do_time, 1000);
           }
           else{ 
                
            }
         }
		 
        function <?php echo $tname;?>stop() {
                   if(<?php echo $tname;?>is_start=="no") {  
       		             clearInterval(<?php echo $tname;?>timer);
                        <?php echo $tname;?>timer = 0;
						<?php echo $tname;?>h.html("00");
                        <?php echo $tname;?>m.html("00");
                        <?php echo $tname;?>s.html("00");
                    }

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

<?php
            }      
       else   {
        redirect('user/login');
      }
  }   
    
}
 
public function updatetimer() {   
  if(!session_start()) {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_employee']=="yes") {
     if($_POST['update']=="update") {
        $date = date('Y-m-d h:i:s A'); 
        $ids=explode("==",$_POST['updates']);
        $project_d=$ids[1];
        $task_id=$ids[0];
        $t_id=explode("==",$_SESSION['add_time'.'_'.$task_id.'']);
        $task_id=$t_id[1];
        $time_add=$t_id[0];
         $d1="$date";
         $d2="$time_add";
        $date1 = strtotime("$d1");
        $date2 = strtotime("$d2");
        $subTime = $date1 - $date2;
        $y = ($subTime/(60*60*24*365));
        $d = ($subTime/(60*60*24))%365;
        $hrs = ($d*24);
        $min = ($subTime/60)%60;
        $sec=($subTime/60*60)%60;
        $totalhours=$hrs.":".$min;
        $sql="UPDATE timesheet set time_end='$date',totalhours='$totalhours' WHERE time_add='".$time_add."' AND task_id=$task_id  AND time_end IS NULL" ;
        $query=$this->Loginmodel->updatedata("$sql");
        $task_id=$t_id[1];
        $sql="UPDATE tasks SET is_stopped='1' WHERE task_id=$task_id;";
        $query=$this->Loginmodel->updatedata("$sql");
   }
     else {
        $date=date('Y-m-d h:i:s A');
        echo $date;
        $user_id=$_SESSION['user_id']; 
        $ids=explode("==",$_POST['update']);
        $project_d=$ids[1];
        $task_id=$ids[0];
        $task_name=$ids[2];
        $_SESSION['add_time'.'_'.$task_id.'']=$date."==".$task_id;
        $sql="INSERT INTO `timesheet`(`time_id`,`time_add`,`project_id`,`task_id`,`user_id`) 
        VALUES (NULL,'$date',$project_d,$task_id,$user_id);";
        $query=$this->Loginmodel->updatedata("$sql");
        $sql="UPDATE tasks SET is_stopped='0' WHERE task_id=$task_id;";
        $query=$this->Loginmodel->updatedata("$sql");
    }
  }
  else
  {
      redirect('user/login'); exit();
  }
}

public function update_task()  {
  if(!session_start()) {
   redirect('user/login');
  }
  else  {
        if($_SESSION['is_loggedin_employee']=="yes"){
            
            //Contact_Form_7__Working_____13___50
                                               
          $task_id=$_POST['updatesetprogress'];
          $task_id=explode("_____",$task_id);
          $task_id=explode("___",$task_id[1]);
          $tsk_id=$task_id[0];
          $status= $task_id[1];
          $updated=date('Y-m-d h:i:s A');
          if($status==100)
          $sql="Update tasks SET task_status='$status', task_updated='$updated',task_completed=1 WHERE task_id=$tsk_id;";
          else
          $sql="Update tasks SET task_status='$status', task_updated='$updated' WHERE task_id=$tsk_id;";
            // echo $sql;
         $this->Loginmodel->updatedata($sql);                   
       }
       else   {
        redirect('user/login');
      }
  }
}
 public function my_timesheet()  {
  if(!session_start()) {
   redirect('user/login');
  }
  else  {
        if($_SESSION['is_loggedin_employee']=="yes"){
            $email=$_SESSION['auser_mail'];
            $u_id=$_SESSION['user_id'];
            $condition="WHERE ti.user_id =$u_id AND ti.time_end IS NOT NULL AND pr.project_id = ti.project_id
                        AND ti.task_id = ts.task_id";
            $query=$this->Loginmodel->getdata("  timesheet ti, projects pr, tasks ts  ",$condition);
            $data['timesheet_details']=$query;
            $sql="SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( totalhours ) ) ) as times FROM timesheet WHERE user_id =$u_id";
            $totalhrs=$this->Loginmodel->single_query("$sql");
            $data['total_hrs_worked']=$totalhrs;
            $condition=" WHERE Users LIKE  '%$email%' GROUP BY project_name";
            $query=$this->Loginmodel->getdata("projects",$condition);
            $data['project_names']=$query;
            $condition=" WHERE user_id=$u_id ";
            $query=$this->Loginmodel->getdata(" tasks ","$condition");
            $data['tasks']=$query;
            $this->load->view('user/Timesheet',$data);
        }
        else   {
         redirect('user/login');
        }
  }
}

public function timesheet_ajax()  {
  if(!session_start()) {
   redirect('user/login');
  }
  else  {
        if($_SESSION['is_loggedin_employee']=="yes"){
            $email=$_SESSION['auser_mail'];
            $u_id=$_SESSION['user_id'];
            extract($_POST);
            $pr=($project_name=="All")? '' :  "  pr.project_name='".$_POST['project_name']."' AND " ;
            $tname=($by_task_name=="All") ? '' : " ts.task_name='".$_POST['by_task_name']."'  AND ";
            $date=($by_date=="") ? '': " ti.time_end LIKE '%".$_POST['by_date']."%'  AND ";
            $enddate=($end_date!="" && $start_date!="") ? " DATE( time_end )  BETWEEN '".$_POST['start_date']."'
                                                            AND '".$_POST['end_date']."'  AND " : '';
        
          
            $condition="WHERE   $enddate   $pr   $tname   $date   ti.user_id =$u_id AND ti.time_end IS NOT NULL AND pr.project_id = ti.project_id
                        AND ti.task_id = ts.task_id";
           
            $query=$this->Loginmodel->getdata("  timesheet ti, projects pr, tasks ts  ",$condition);
           
            $sql="SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( totalhours ) ) ) as times FROM timesheet ti, projects pr, tasks ts   $condition";
            $totalhrs=$this->Loginmodel->single_query("$sql");
            $data['total_hrs_worked']=$totalhrs;
            $data['timesheet_details']=$query;
            ?>
<div id="data">
<table class="table table-bordered table-striped dataTable" id="example1" aria-describedby="example1_info">
	<thead>
	<tr role="row">
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 195px;" aria-sort="ascending" 
                aria-label="Rendering engine: activate to sort column descending">Project Name
            </th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                style="width: 270px;" aria-label="Browser: activate to sort column ascending">Task Name
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
	<div class="col-sm-6 text-right order-total"> <?php echo @$totalhrs[0]['times']; ?></div>
	</div>
	</th>                                       </tr>
	</tfoot>                     
	<tbody role="alert" aria-live="polite" aria-relevant="all">
	<?php 

	$mod=1;
	foreach($query as $times)  { 
	if($mod%2==0){

	?>        

	<tr class="odd">
	<td><?php echo  $times['project_name']; ?> </td>
	<td style="color:#2A6496"><?php echo  $times['task_name'] ; ?> </td>
	<td><?php echo  $times['totalhours'] ; ?>:00 </td>                         
	</tr>
	<?php  }  else { ?>
	<tr class="even">
	<td><?php echo  $times['project_name']; ?> </td>
	<td style="color:#2A6496"><?php  echo  $times['task_name'] ; ?> </td>
	<td><?php  echo  $times['totalhours'] ; ?>:00 </td>
	</tr>
	<?php } // Even Else part close 
	$mod++;
	} // Main Loop close here
	?>
	</tbody></table>
</div>
<?php
       }
       else   {
        redirect('user/login');
      }
  }
}


public function logout()  {
  if(!session_start()) {
   redirect('user/login');
  }
  else  {
        if($_SESSION['is_loggedin_employee']=="yes"){
         echo "you are successfully logout from our site you can";
         unset($_SESSION['user_name']);
         unset($_SESSION['is_loggedin_employee']);
         unset($_SESSION['auser_mail']);
         unset( $_SESSION['user_id']);
         session_destroy();
        //echo anchor('user/login','Login');
        redirect('user/login');
       }
       else   {
        redirect('user/login');
      }
  }
}
}
?>		