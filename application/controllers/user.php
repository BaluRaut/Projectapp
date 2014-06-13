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
      $data['task_list']=$query;    
    
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
                              'project_id'=> $p_id[1],
                              'user_id'=> $_SESSION['user_id'],
                              'is_opened'=>'1',
                              'is_stopped'=>'1',
                              'StartDate'=>$this->input->post('date_timepicker_start'),
                              'EndDate'=>$this->input->post('date_timepicker_end')
                              );
                $run=$this->Loginmodel->insert_table('tasks',$data_insert);
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
 
public function updatetimer() {
   
  if(!session_start()) {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_employee']=="yes") {
     if($_POST['update']=="update") {
        $date = date('Y-m-d h:i:s A'); 
       
        $u=$_SESSION['u'];
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
        $hrs = ($subTime/(60*60))%24;
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