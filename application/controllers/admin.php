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


public function front() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
     $this->load->view('admin/front',@$data);
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
          } else {
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
          
          /*
           *  SELECT * 
           *        FROM projects
           *      WHERE Users LIKE  '%swapnil@avika.in%'
           * 
           */
             $email=trim($_POST['t']);
            $email=explode(" ",$email);
            $emails=$email[0];
            $condition="";
            $query=$this->Loginmodel->getdata(" projects WHERE Users LIKE '%$emails%' OR Project_Manager LIKE '%$emails%' ",$condition);
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