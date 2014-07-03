<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin   extends CI_Controller
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
        $this->load->library('grocery_CRUD');
        $this->form_validation->set_error_delimiters('<div style="color:red" id="errtext">', '</div>');
    }


    
public function download_invoice() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
      //Load the library
$this->load->library('html2pdf');

//Set folder to save PDF to
$this->html2pdf->folder('./pdfs/');

//Set the filename to save/download as
$this->html2pdf->filename('test.pdf');

//Set the paper defaults
$this->html2pdf->paper('a4', 'portrait');

$condition=$_SESSION['download_query']; 

$query=$this->Loginmodel->csvdata(" pr.project_name, ts.task_name, ti.Time_Add, ti.Time_end, ti.totalhours FROM  timesheet ti, projects pr, tasks ts  ",$condition);

$data['times']=$query;

$sql="SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( totalhours ) ) ) as times "
    . " FROM timesheet ti, projects pr, tasks ts   $condition";

$totalhrs=$this->Loginmodel->single_query("$sql");
$data['totalhours']=$totalhrs;
$this->html2pdf->html($this->load->view('admin/invoice', $data, true));

$this->html2pdf->create('download');
    // $this->load->view('admin/front',@$data);
  }
  else
  {
       redirect('user/login'); exit();
  }
}
    
public function front() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
      //Load the library
 $this->load->view('admin/front',@$data);
  }
  else
  {
       redirect('user/login'); exit();
  }
}


public function task_excute () {
    
    
}


public function task_status() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {

            $condition="WHERE ti.user_id =ts.user_id AND ti.time_end IS NOT NULL AND pr.project_id = ti.project_id
                        AND ti.task_id = ts.task_id Group By ts.task_name";
            $query=$this->Loginmodel->getdata("  timesheet ti, projects pr, tasks ts  ",$condition);
            $data['timesheet_details']=$query;
       
            $condition="  GROUP BY project_name";
            $query=$this->Loginmodel->getdata("projects",$condition);
            $data['project_names']=$query;
            
            $condition=" Group By task_name";
            $query=$this->Loginmodel->getdata(" tasks ","$condition");
            $data['tasks']=$query;
            
            $condition="  GROUP BY email";
            $query=$this->Loginmodel->getdata("users",$condition);
            $data['user_list']=$query;
            
            $this->load->view('admin/current_status',$data);
  }
  else
  {
       redirect('user/login'); exit();
  }
}



public function current_running_task() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
      
      $condition=" WHERE t.is_opened='1' AND t.is_stopped='0' AND ti.time_end IS NULL AND t.project_id=s.project_id AND t.user_id=u.id  AND ti.task_id=t.task_id  GROUP BY t.task_name";
      $query=$this->Loginmodel->getdata("  tasks t,projects s, users u, timesheet ti","$condition");
      $data['task_list']=$query;    

      $condition=" ";
      $query=$this->Loginmodel->getdata(" projects ","$condition");
      $data['projects']=$query;
      
      $condition="  Group by task_name";
      $query=$this->Loginmodel->getdata(" tasks ","$condition");
      $data['tasks']=$query;
      
      $condition="  Group By created_by";
      $query=$this->Loginmodel->getdata(" tasks ","$condition");
      $data['created']=$query;
      
       $condition2="  WHERE is_Project_Manager='0' AND is_admin='0'";
      $query_user=$this->Loginmodel->getdata("users",$condition2);
      $data['users']=$query_user;
      
     $this->load->view('admin/live_task_status',@$data);
  }
  else
  {
       redirect('user/login'); exit();
  }
}

public function make_data() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {

    extract($_POST);
    $pr=($project_name=="All")? '' :  "  pr.project_name='".$_POST['project_name']."' AND " ;
    $tname=($by_task_name=="All") ? '' : " ts.task_name='".$_POST['by_task_name']."'  AND ";
    $date=($by_date=="") ? '': " ti.time_end LIKE '%".$_POST['by_date']."%'  AND ";
    $enddate=($end_date!="" && $start_date!="") ? " DATE( time_end )  BETWEEN '".$_POST['start_date']."'
                                                    AND '".$_POST['end_date']."'  AND " : '';
    $users=($user_name=="All")? '':"   ti.user_id=".$_POST['user_name']."  AND ";

    $condition="WHERE  $users  $enddate   $pr   $tname   $date   
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
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
    
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


public function current_running_task_ajax() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
            extract($_POST);
            $pr=($project_name=="All")? '' :  "  s.project_name='".$_POST['project_name']."' AND  " ;
            $tname=($by_task_name=="All") ? '' : " t.task_name='".$_POST['by_task_name']."'  AND  ";
            $users=($by_user_name=="All")? '':"   ti.user_id=".$_POST['by_user_name']."  AND  ";
        
      
      $condition=" WHERE  $pr  $tname  $users  t.is_opened='1' AND t.is_stopped='0' AND ti.time_end IS NULL AND t.project_id=s.project_id AND t.user_id=u.id  AND ti.task_id=t.task_id  GROUP BY t.task_name";
      $query=$this->Loginmodel->getdata("  tasks t,projects s, users u, timesheet ti","$condition");
      $data['task_list']=$query;    
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
                style="width: 270px;" aria-label="Browser: activate to sort column ascending">Task User
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
   $tname=str_replace(" ","_",$k['task_name'])."_____".$k['task_id'];
       $t_skid=$k['task_id'];
       $user_name="No";
       $p_jectid=$k['project_id'];     
       $time=$k['time_add'];    
       $user_name=$k['user_name'];   
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
       // print_r($k);
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
                if(status=="stop") {
                   alert("Only task assigned user can stop this task.") ;
                 }
                if(status=="stopsss")
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
        <?php echo $tname;?>timer = setInterval(<?php echo $tname;?>do_time, 10000);
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
      <span style="font-size: 11px; color:green;"><h5>  &nbsp; &nbsp;  <?php echo $user_name; ?> </h5></span> 
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
                url: '<?php echo site_url('/admin/update_task/');?>',
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
 <?php   } ?>

 </div>
                                </div>
</table><?php
      
      
      
    
  }
  else
  {
       redirect('user/login'); exit();
  }
}


public function task_status_ajax() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
            extract($_POST);
            $pr=($project_name=="All")? '' :  "  pr.project_name='".$_POST['project_name']."' AND " ;
            $tname=($by_task_name=="All") ? '' : " ts.task_name='".$_POST['by_task_name']."'  AND ";
            $users=($user_name=="All")? '':"   ti.user_id=".$_POST['user_name']."  AND ";
    
            $condition="WHERE  $pr $tname  $users  ti.user_id =ts.user_id AND ti.time_end IS NOT NULL AND pr.project_id = ti.project_id
                        AND ti.task_id = ts.task_id Group By ts.task_name";
            $query=$this->Loginmodel->getdata("  timesheet ti, projects pr, tasks ts  ",$condition);
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
	foreach($query as $times)  { 
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
   <?php  exit();  
            
           // $this->load->view('admin/current_status',$data);
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
        if($_SESSION['is_loggedin_admin']=="yes"){
            
            //Contact_Form_7__Working_____13___50
                                               
          $task_id=$_POST['updatesetprogress'];
          $task_id=explode("_____",$task_id);
          $task_id=explode("___",$task_id[1]);
          $tsk_id=str_replace("_","",$task_id[0]);
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



public function timesheet_ajax() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
    extract($_POST);
    $pr=($project_name=="All")? '' :  "  pr.project_name='".$_POST['project_name']."' AND " ;
    $tname=($by_task_name=="All") ? '' : " ts.task_name='".$_POST['by_task_name']."'  AND ";
    $date=($by_date=="") ? '': " ti.time_end LIKE '%".$_POST['by_date']."%'  AND ";
    $enddate=($end_date!="" && $start_date!="") ? " DATE( time_end )  BETWEEN '".$_POST['start_date']."'
                                                    AND '".$_POST['end_date']."'  AND " : '';
    $users=($user_name=="All")? '':"   ti.user_id=".$_POST['user_name']."  AND ";

    $condition="WHERE  $users  $enddate   $pr   $tname   $date   
                ti.user_id =ts.user_id AND ti.time_end IS NOT NULL AND pr.project_id = ti.project_id
                AND ti.task_id = ts.task_id";
    
    $query=$this->Loginmodel->getdata("  timesheet ti, projects pr, tasks ts  ",$condition);
   
    $sql="SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( totalhours ) ) ) as times "
            . " FROM timesheet ti, projects pr, tasks ts   $condition";
    
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
	<td style="color:#2A6496"> <?php echo  $times['project_name']; ?> </td>
	<td style="color:#2A6496"> <?php echo  $times['task_name'] ; ?> </td>
        <td style="color:#2A6496"> <?php  echo  $times['time_add'] ; ?> </td>
        <td style="color:#2A6496"> <?php  echo  $times['time_end'] ; ?> </td>
	<td style="color:#2A6496"> <?php echo  $times['totalhours'] ; ?>:00 </td>                         
	</tr>
	<?php  }  else { ?>
	<tr class="even">
	<td style="color:#2A6496" > <?php echo  $times['project_name']; ?> </td>
	<td style="color:#2A6496"> <?php  echo  $times['task_name'] ; ?> </td>
        <td style="color:#2A6496"> <?php  echo  $times['time_add'] ; ?> </td>
        <td style="color:#2A6496"> <?php  echo  $times['time_end'] ; ?> </td>
	<td style="color:#2A6496"> <?php  echo  $times['totalhours'] ; ?>:00 </td>
	</tr>
	<?php }
	$mod++;
	} 
        ?>
	</tbody></table>
</div>
   <?php
        
  }
  else
  {
       redirect('user/login'); exit();
  }
}

public function timesheet_of_projects() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
           $condition="WHERE ti.user_id =ts.user_id AND ti.time_end IS NOT NULL AND pr.project_id = ti.project_id
                        AND ti.task_id = ts.task_id";
            $query=$this->Loginmodel->getdata("  timesheet ti, projects pr, tasks ts  ",$condition);
            $data['timesheet_details']=$query;
            $sql="SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( totalhours ) ) ) as times FROM timesheet";
            $totalhrs=$this->Loginmodel->single_query("$sql");
            $data['total_hrs_worked']=$totalhrs;
            $condition="  GROUP BY project_name";
            $query=$this->Loginmodel->getdata("projects",$condition);
            $data['project_names']=$query;
            $condition=" Group By task_name";
            $query=$this->Loginmodel->getdata(" tasks ","$condition");
            $data['tasks']=$query;
            $condition="  GROUP BY email";
            $query=$this->Loginmodel->getdata("users",$condition);
            $data['user_list']=$query;
            $this->load->view('admin/Timesheet',$data);
    
  }
  else
  {
       redirect('user/login'); exit();
  }
}


public function tests() {  print_r($_POST); }
//******************Load Project Page**************************************
public function projects() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
      
      if($this->input->post('flag')=="submit") {
          $cnt=count($_POST['project_users']);
          //print_r($_POST);
          //echo $_POST['e9'][0];
          //die();
             $add="";
          for($k=0;$k<$cnt;$k++){
             $add.=$_POST['project_users'][$k].".";
          }
          $sdate=$this->input->post('date_timepicker_start');
          $sdate=str_replace("/","-",$sdate);
          $sdate.=":00";
          $edate=$this->input->post('date_timepicker_end');
          $edate=str_replace("/","-",$edate);
          $edate.=":00";
          $data_insert=array(
                            'project_id'=>NULL,
                            'Project_Manager'=> $this->input->post('project_manager'),
                            'Users'=> "$add",
                            'Start_Date'=>$sdate,
                            'End_Date'=>$edate,
                            'project_name'=>$this->input->post('project_name')
                            );
          $run=$this->Loginmodel->insert_table('projects',$data_insert);
           $_SESSION['success']="project_create";
          redirect('admin/task');
          exit();
       } else {
      $condition="  WHERE is_Project_Manager='1'";
      $query=$this->Loginmodel->getdata("users",$condition);
      $data['project_manager']=$query;
      $condition2="  WHERE is_Project_Manager='0' AND is_admin='0'";
      $query_user=$this->Loginmodel->getdata("users",$condition2);
      $data['user']=$query_user;
      $this->load->view('admin/project',@$data);
      }
  }
  else
  {
      redirect('user/login');
  }
}
public function task () {
    if(!session_start()) {
        redirect('user/login');
    }
    else {
        if($_SESSION['is_loggedin_admin']=="yes"){
            
          if($this->input->post('flag')=="submit") {
            $cnt=count($_POST['project_users']);
                  
               $add="";
                    
               $p_id=explode("__",$_POST['project_name']);
            for($k=0;$k<$cnt;$k++){
                $rt=$this->Loginmodel->check_duplicate("tasks",$_POST['task_name'],$_POST['project_users'][$k],$p_id[1]);
                if($rt==true) {
                   $_SESSION['message']= "Some users Task already created";
                }
                else {
                     $data_insert=array(
                              'task_id'=>NULL,
                              'task_name'=>$_POST['task_name'],
                              'project_id'=> $p_id[1],
                              'user_id'=> $_POST['project_users'][$k],
                              'is_opened'=>'1',
                              'is_stopped'=>'1',
                              'StartDate'=>$this->input->post('date_timepicker_start'),
                              'EndDate'=>$this->input->post('date_timepicker_end')
                              );
                $run=$this->Loginmodel->insert_table('tasks',$data_insert);
                }
            }
       
            $_SESSION['success']="task_created";
            redirect('admin/task');
            exit();
          }
          
          else {
            $data['success']="project_create";
            $condition="GROUP BY project_name";
            $query=$this->Loginmodel->getdata("projects",$condition);
            $data['project_names']=$query;
            $condition2="  WHERE is_Project_Manager='0' AND is_admin='0'";
            $query_user=$this->Loginmodel->getdata("users",$condition2);
            $data['user']=$query_user;
             $this->load->view('admin/task',$data); 
          } // Load Default form of task management
        } // Check logged in or not
        else {
            redirect('user/login');
        }
    }
  }
public function user(){
  if(!session_start()) {
      redirect('user/login');
  }
  if($_SESSION['is_loggedin_admin']=="yes") {
    if($this->input->post('flag')=="submit") {
        $this->form_validation->set_rules('email','email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run()==TRUE)	{     
            if($_POST['role']=="project_manager"){
                      $data_insert=array(
                              'id'=>NULL,
                              'user_name'=>$this->input->post('name'),
                              'email'=> $this->input->post('email'),
                              'password'=>$this->input->post('password'),
                              'display_name'=>$this->input->post('name'),
                              'is_Project_Manager'=>'1',
                              'active'=>'1',
                              'is_admin'=>'0'                              
                              );
             $run=$this->Loginmodel->insert_table('users',$data_insert);
             $_SESSION['user_created']="success";
             redirect('admin/user');
            } 
            elseif($_POST['role']=="admin") {
              $data_insert=array(
                              'id'=>NULL,
                              'user_name'=>$this->input->post('name'),
                              'email'=> $this->input->post('email'),
                              'password'=>$this->input->post('password'),
                              'display_name'=>$this->input->post('name'),
                              'is_Project_Manager'=>'1',
                              'active'=>'1',
                              'is_admin'=>'1'                              
                              );
             $run=$this->Loginmodel->insert_table('users',$data_insert);
             $_SESSION['user_created']="success";
             redirect('admin/user');
            }
            else {                
             $data_insert=array(
                              'id'=>NULL,
                              'user_name'=>$this->input->post('name'),
                              'email'=> $this->input->post('email'),
                              'password'=>$this->input->post('password'),
                              'display_name'=>$this->input->post('name'),
                              'is_Project_Manager'=>'0',
                              'active'=>'1',
                              'is_admin'=>'0'                              
                              );
             $run=$this->Loginmodel->insert_table('users',$data_insert);
             $_SESSION['user_created']="success";
             redirect('admin/user');
            }
                
           
        }
        else {
                    $this->load->view('admin/user');
        }
        }
     else
     {

        $data['user']="p";
        $this->load->view('admin/user',$data); 
     }
  }
  else {
      redirect('user/login');
  }
}
public function test() { 
    if(!session_start()) {
        redirect('user/logion');
    }
    else {
      if($_SESSION['is_loggedin_admin']=="yes"){
            $email=trim($_POST['t']);
            $email=explode(" ",$email);
            $emails=$email[0];
            $condition="";
            $query=$this->Loginmodel->getdata(" projects WHERE Users LIKE '%$emails%' "
                    . "OR Project_Manager LIKE '%$emails%' ",$condition);
            echo "<ul>";
            $no=1;
            foreach($query as $k) {
            
                echo"<li>". $k['project_name']. "</li> ";
                $no=2;
            }
            if($no==1)
                echo "<li> No Projects Assigened </li>";
            echo "</ul>";
           // $this->load->view('admin/project_detail',$data); 
          
      }
      else {
          redirect('user/login');
      }
          
    }
   
    
}
public function project_management() {
  
    if(!session_start()) {
        redirect('user/logion');
    }
    else {
      if($_SESSION['is_loggedin_admin']=="yes"){
          
            $condition="GROUP BY sp.project_name";
            $query=$this->Loginmodel->getdata(" projects sp, users po
WHERE sp.Project_Manager = po.email ",$condition);
            $data['project_names']=$query;
            $this->load->view('admin/project_detail',$data); 
          
      }
      else {
          redirect('user/login');
      }
          
    }
         
}
public function user_management() {
  
    if(!session_start()) {
        redirect('user/logion');
    }
    else {
      if($_SESSION['is_loggedin_admin']=="yes"){
          
            $condition=" GROUP BY id";
            $query=$this->Loginmodel->getdata("users",$condition);
            $data['user_names']=$query;
            $this->load->view('admin/user_details',$data); 
          
      }
      else {
          redirect('user/login');
      }
          
    }
         
}
 public function logout()  {
  if(!session_start()) {
   redirect('user/login');
  }
  else  {
       if($_SESSION['is_loggedin_admin']=="yes")   {
         echo "you are successfully logout from our site you can";
         unset($_SESSION['aname']);
         unset($_SESSION['is_loggedin_admin']);
         unset($_SESSION['admin_name']);
         unset($_SESSION['admin_mail']);
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