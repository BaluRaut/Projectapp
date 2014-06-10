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

//******************Load Project Page**************************************
public function projects() {
  if(!session_start())    {
       redirect('user/login'); exit();
  } 
  if(@$_SESSION['is_loggedin_admin']=="yes")  {
      
      if($this->input->post('flag')=="submit") {
          $cnt=count($_POST['e9']);
          //print_r($_POST);
          //echo $_POST['e9'][0];
          //die();
             $add="";
          for($k=0;$k<$cnt;$k++){
             $add.=$_POST['project_users'][$k].".";
          }
          $data_insert=array(
                            'project_id'=>NULL,
                            'Project_Manager'=> $this->input->post('project_manager'),
                            'Users'=> "$add",
                            'Start_Date'=>$this->input->post('date_timepicker_start'),
                            'End_Date'=>$this->input->post('date_timepicker_end'),
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
      echo "ok";
      die();
      show_404();  
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
               /*
                * Array ( [flag] => submit [project_name] => Avika_Wesbite_Changes__7
                *  [task_name] => Landing Page Testing
                *  [project_users] => Array ( [0] => 4 [1] => 5 ) 
                * [date_timepicker_start] => 2014-06-18 17:09:09 
                * [date_timepicker_end] => 2014-06-28 17:09:11 
                * [Submit] => Create Project )
                * `tasks`(`task_id`,
                *  `user_id`, 
                * `task_name`, 
                * `project_id`, 
                *           *  `Start Date`, `End Date`)
                * 
                * NSERT INTO `tasks` ( `task_id` , `user_id` , `task_name` , `project_id` ,
                *                      `is_opened` , `is_stopped` , `Start Time` , `End Time` ,
                *                      `Start Date` , `End Date` )
VALUES 
                * 
                */
              
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
            /*
             * 
             * Array ( [flag] => submit [name] => Pooja 
             * [email] => pooja@avika.in 
             * [password] => avika123 
             * [role] => project_manager [Submit] => Create User ) 
             * INSERT INTO `users`(`id`, `user_name`, `display_name`, `password`, `email`, 
             * `activation_token`, `active`, `title`, `is_admin`, `is_Project_Manager`)
             */
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
public function project_management() {
  
    if(!session_start()) {
        redirect('user/logion');
    }
    else {
      if($_SESSION['is_loggedin_admin']=="yes"){
          
            $condition="GROUP BY project_name";
            $query=$this->Loginmodel->getdata("projects",$condition);
            $data['project_names']=$query;
            $this->load->view('admin/project_detail',$data); 
          
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
   redirect('admin/logoutsuccess');
   }
   else
   {
        redirect('user/login');
   }
  }
}



}
?>		