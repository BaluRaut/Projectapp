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
  if((isset($_SESSION['is_loggedin_admin']))){
    redirect('admin/front');
  }
  if((isset($_SESSION['is_loggedin_employee']))){
    redirect('user/front');
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
     $this->load->view('user/front',@$data);
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
     $this->load->view('user/front',@$data);
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