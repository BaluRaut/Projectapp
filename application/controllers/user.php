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
			//$this->lang->load('message', 'english');
                      //  $this->load->model('Frontmodel','',TRUE);
			$this->load->model('Loginmodel','',TRUE);
			$this->load->database();					
		        //$this->load->library('grocery_CRUD');
                        
			$this->form_validation->set_error_delimiters('<div style="color:red" id="errtext">', '</div>');
	}
        
        public function check()
{
            if(!session_start()) { $this->load->view('front');
            }
            if(@$_SESSION['uname']=="")
  {
        show_404();
    
  
  }
  else
  {  
	$username 	= $_POST['username'];
	$query = "select * from usercontact where Email = '".strtolower($username)."'";
	$results = mysql_query( $query) or die('ok');
	
	if(mysql_num_rows(@$results) > 0) // not available
	{
		echo '<div id="Error">Already Taken</div>';
	}
	else
	{
		echo '<div id="Success">Available</div>';
	}
  }	
}
public function login() {
  //Check whether admin already logged in or not 
  if((session_start())&&(isset($_SESSION['aname']))){
    redirect('admin/front');
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
                      
                      echo "I am Employee";
                      die();
             }
        } // $query if close
        else  {
            $data['err']="User Name and password are incorrect";
        }
    } // Validation if close
 } // Post if close
 
 $this->load->view('login',@$data); 
 
}  //End of the Login function


		public function add()
		{
		
		 print_r ($_POST); die();
		
		}
                
 
	function _example_output($output = null)
	{
		$this->load->view('user/users.php',$output);	
	}
	function index()
	{
            if(!session_start())
 {
 //if(!@$_SESSION['uname']=="")
 show_404();
  }
  elseif(!@$_SESSION['uname']=="")
  {
  
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
        else
        {
            
        show_404();   
     }
   
  }
        
      	  function contact_management()
         {
  if(!session_start())
 {
 //if(!@$_SESSION['uname']=="")
 show_404();
  }
  elseif(!@$_SESSION['uname']=="")
  {
  
          $crud=new grocery_CRUD();
          $crud->set_theme('flexigrid');	
	  $crud->set_table('usercontact');
	  $crud->set_subject('Users');
          $crud->where('Adder_Email',$_SESSION['uname']);   
       	  $crud->columns('CompanyName','FirstName','Email','Country');
          $crud->unset_add();
          $crud->set_rules('Email','required');          
          $crud->unset_export();
          $crud->unset_print();          
          $crud->unset_delete();
	  $output = $crud->render();			
	  $this->_example_output($output);         
	}
      else
      {
          
   show_404();
      
      }
     }

//Front Functionality
public function front()
{
if(!session_start())
 {
 //if(!@$_SESSION['uname']=="")
 show_404();
  }
  elseif(!@$_SESSION['uname']=="")
  {
    $logs=$this->Frontmodel->get_count(TABLELOG); 
	if($logs>0)	{
	  $logrecords=$logs;
	}
	else	{
	  $logrecords=0;
	 }
   $users=$this->Frontmodel->get_count(TABLEUSER);
   if($users>0)   {
   $userrecords=$users;
   }
   else   {
    $userrecords=0;
  }
   $data['logrecords']=$logrecords; 
   $data['userrecords']=$userrecords;   
   $this->load->view('user/front',$data);
  }
  else
  {
      show_404();   
  }
}
public function edit_contact($params)
{
    if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {
   if(!@$_SESSION['uname']=="")
   {
       $_SESSION['params']=$params;
       redirect('user/edit_contacts');
       
   }
   else
   {
       $this->load->view('front');
   }
   }
}
public function edit_contacts()
{
    
  if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {
   if(!@$_SESSION['uname']=="")
   {
       $params=@$_SESSION['params'];
      if($this->input->post('flag')=="add")
      {
 
        $this->form_validation->set_rules('FirstName',lang('fname'), 'required');
        $this->form_validation->set_rules('LastName', lang('lname'), 'required');
        $this->form_validation->set_rules('Title', lang('title'), 'required');
        $this->form_validation->set_rules('Country', lang('country'), 'required');
        $this->form_validation->set_rules('Company', lang('compnay'), 'required');
        $this->form_validation->set_rules('State', lang('state'), 'required');
        $this->form_validation->set_rules('City', lang('city'), 'required');

        $this->form_validation->set_rules('Email','Email', 'required|valid_email');

        if($this->form_validation->run()==TRUE)
	    { 
            
           $data_insert=array
                     (
                     'FirstName'=> $this->input->post('FirstName'),
                     'LastName'=> $this->input->post('LastName'),
                     'Title'=>$this->input->post('Title'),
                     'CompanyName'=>$this->input->post('Company'),
                     'Officephone'=>$this->input->post('OfficePhone'),
                     'Mobile'=>$this->input->post('Mobile'),
                     'Fax'=>$this->input->post('Fax'),
                     'Address'=>$this->input->post('Address'),
                     'Country'=>$this->input->post('Country'),
                     'State'=>$this->input->post('State'),
                     'City'=>$this->input->post('City'),
                     'Postalcode'=>$this->input->post('Postalcode'),
                     'Email'=>$this->input->post('Email')
                                 );      
                     
$this->db->where('id', $_SESSION['params']);
$this->db->update('usercontact', $data_insert);
                    redirect('user/success');                 
             }  //Validation if close
             else
	     {
                $data['FirstName']=$this->input->post('FirstName');
                $data['LastName']=$this->input->post('LastName');
                $data['OfficePhone']=$this->input->post('OfficePhone');
                $data['Mobile']=$this->input->post('Mobile');
                $data['Email']=$this->input->post('Email');
                $data['Password']=$this->input->post('Password');
                $data['Title']=$this->input->post('Title');
                $data['Country']=$this->input->post('Country');
                $data['State']=$this->input->post('State');
                $data['City']=$this->input->post('City');
                $data['Address']=$this->input->post('Address');
                $data['Fax']=$this->input->post('Fax');
                $data['Company']=$this->input->post('Company');
                $data['Postalcode']=$this->input->post('Postalcode');
             }  //Validation else close
	} //Flag if close
        $value=$params;
        $fld="id";
        $tablename="usercontact";        
        $getdata=$this->Frontmodel->get_table_Details($tablename,$fld,$value);	  
//print_r($getdata);		die();
		foreach ($getdata as $val)
		{
		 $data['FirstName']=$val['FirstName'];
		 $data['LastName']=$val['LastName'];
		 $data['Title']=$val['Title'];
               	 $data['Email']=$val['Email'];
     	         $data['City']=$val['City'];	
		 $data['State']=$val['State'];
		 $data['Address']=$val['Address'];
		 $data['Fax']=$val['Fax'];
		 $data['Postalcode']=$val['Postalcode'];
		 $data['Company']=$val['CompanyName'];
		 $data['Country']=$val['Country'];
		 $data['Mobile']=$val['Mobile'];
		 $data['Officephone']=$val['Officephone'];
		 }		 
        $this->load->view('user/edit_contacts',@$data);       
   }
   else
   {
      echo "Wrong";// $this->load->view('front');
   }
 }  
}


//Logout Functionality
 public function logout()
 {
  if(!session_start())
  {
      show_404();
  }
  else
  {
   if(!@$_SESSION['uname']=="")
   {
   $data['sucess']= "OK";
   
   unset($_SESSION['uname']);
   session_destroy();
redirect('admin/logoutsuccess')  ; 
   }
   else
   {
       show_404();
   }
 }
}


//Add user Functionality
public function Add_contacts()
 {
  if(!session_start())
  {
    echo "You must first logged in to dee this page";
   echo anchor('user/login','Login'); 
  }
  else
  {
   if(!@$_SESSION['uname']=="")
   {
   
        // echo  "The Name is".$this->input->post('FirstName'); die();
       //print_r ($_POST); die();
         if($this->input->post('flag')=="add")
		{
		 $this->form_validation->set_rules('FirstName',lang('fname'), 'required|alpha');
	     $this->form_validation->set_rules('LastName', lang('lname'), 'required|alpha');
             $this->form_validation->set_rules('Email', lang('email'), 'required|valid_email');
		 $this->form_validation->set_rules('Title', lang('title'), 'required');
	     $this->form_validation->set_rules('Country', lang('country'), 'required|alpha');
	     $this->form_validation->set_rules('Company', lang('compnay'), 'required');
         $this->form_validation->set_rules('State', lang('state'), 'required|alpha');
	     $this->form_validation->set_rules('City', lang('city'), 'required|alpha');
		 if($this->form_validation->run()==TRUE)
		 {
		     $data_insert=array
			 (
			 'id'=>NULL,
			 'FirstName'=> $this->input->post('FirstName'),
		     'LastName'=> $this->input->post('LastName'),
			 'Title'=>$this->input->post('Title'),
			 'Department'=>$this->input->post('Department'),
			 'CompanyName'=>$this->input->post('Company'),
			 'Officephone'=>$this->input->post('OfficePhone'),
			 'Mobile'=>$this->input->post('Mobile'),
			 'Fax'=>$this->input->post('Fax'),
			 'Address'=>$this->input->post('Address'),
			 'Country'=>$this->input->post('Country'),
			 'State'=>$this->input->post('State'),
			 'City'=>$this->input->post('City'),
			 'Postalcode'=>$this->input->post('Postalcode'),
			 'Email'=>$this->input->post('Email'),
			 'Adder_Email'=>$_SESSION['uname']
			 );
			$table="usercontact";
			$fld="Email"; 
			$value=$this->input->post('Email');
			$check=$this->Frontmodel->chk_email($table,$fld,$value);
			if($check>0)
			{
		 	$tbl="logs";
                        $data=array('id'=>null,
                                     'Adder_Email'=>$_SESSION['uname']);
			$query=$this->Frontmodel->insert_table_details($tbl,$data);
			redirect('user/front');
			}
			else
			{						
			$query=$this->Frontmodel->insert_table_details(lang('user_contact_table'),$data_insert); 
			redirect('user/success');
			}
			
			
			 
		 }
		 else
		 {
		    $data['FirstName']=$this->input->post('FirstName');
   		    $data['LastName']=$this->input->post('LastName');
   		    $data['OfficePhone']=$this->input->post('OfficePhone');
		    $data['Mobile']=$this->input->post('Mobile');
 		    $data['Email']=$this->input->post('Email');
            $data['Password']=$this->input->post('Password');
   		    $data['Title']=$this->input->post('Title');
   		    $data['Country']=$this->input->post('Country');
		    $data['State']=$this->input->post('State');
 		    $data['City']=$this->input->post('City');
			$data['Address']=$this->input->post('Address');
   		    $data['Fax']=$this->input->post('Fax');
   		    $data['Department']=$this->input->post('Department');
		    $data['Company']=$this->input->post('Company');
 		    $data['Postalcode']=$this->input->post('Postalcode');
		 }
		}
		
		$data['ok']="ok";
        $this->load->view('user/add_contact',@$data);
   }
   else
   {
   
       show_404();
   }
 }
}


function success()
{
  if(!session_start())
    {
        show_404(); 
    } 
  if(!$_SESSION['uname']=="")  
  {
  $data['success']='OK';
  $this->load->view('user/front',$data);    
}
else
{
    
    show_404();
}
}
//Importing the Records Form the Users
function uploadsuccess()
{
  if(!session_start())
    {
        show_404(); exit();
    } 
    if(@$_SESSION['uname']!="")
    {
  $data['uploadsuccess']='OK';
  $this->load->view('user/front',$data);    
    }
    else
    {
        show_404();
    }
} 
  
function Import_contacts() {
 
    
    if(!session_start())
    {
        show_404(); exit();
    } 
 error_reporting('0');
 if(!@$_SESSION['uname']=="")
 {
    
  if($this->input->post('flag')=="add")   {	
    $thisdir = getcwd();
    $allowedExts = array("sql","csv");
    $extension = end(explode(".", $_FILES["file"]["name"]));
    if (($_FILES["file"]["type"] != "")  && in_array($extension, $allowedExts))
        {                 //Start main if 
	if ($_FILES["file"]["error"] > 0){
        show_error("You uploaded file has some errors"); exit();
        }
        else  {
         /*if (file_exists("uploadfiled/" . $_FILES["file"]["name"])) {
	  echo $_FILES["file"]["name"] . " already exists. ";
	 }*/
         move_uploaded_file($_FILES["file"]["tmp_name"],
			  "uploadfile/" . $_FILES["file"]["name"]);
         $filename= "uploadfile/" . $_FILES["file"]["name"];
	 $file_handle = fopen($filename, "r");
	 $i=0;
         $duplicate=0;
         $invalid=0;
         $total=0;
         $originals=0;
         $insert_duplicate="INSERT INTO logs(id,Adder_Email) VALUES ";
         $insert_original="INSERT INTO `usercontact` (`id`, `FirstName`, `LastName`, `Title`, `Department`, `CompanyName`, `Officephone`, `Mobile`, `Fax`, `Address`, `Country`, `State`, `City`, `Postalcode`, `Email`, `Adder_Email`) VALUES ";

	 while (!feof($file_handle) ) {
             $total++;
          ++$i;
          if($i==1){    }
          else {
                $text =  fgetcsv($file_handle);
                
                $fname=str_replace("'", '',$text[0]); 
                $lname=str_replace("'", '',$text[1]); 
                        $title=str_replace("'", '',$text[2]);
                        $depart=str_replace("'", '',$text[3]);
                        $comopany=str_replace("'", '',$text[4]);
                        $email=str_replace("'", '',$text[5]); 
                        $officephone=str_replace("'", '',$text[6]); 
                        $mobile=str_replace("'", '',$text[7]);
                        $fax=str_replace("'", '',$text[8]);
                        $praddress=str_replace("'", '',$text[9]);
                        $prcountry=str_replace("'", '',$text[10]);
                        $prstate=str_replace("'", '',$text[11]); 
                        $prcity=str_replace("'", '',$text[12]);
                        $prpostcode=str_replace("'", '',$text[13]); 
                if(($fname=="")||($fname=="First Name"))  {
                    }
                else {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
             {
             

		$data_insert=array
			 (
			 'id'=>NULL,
			 'FirstName'=>$fname,
		         'LastName'=>$lname,
			 'Title'=>$title,
			 'Department'=>$depart,
			 'CompanyName'=>$comopany,
			 'Officephone'=>$officephone,
			 'Mobile'=>$mobile,
			 'Fax'=>$fax,
			 'Address'=>$praddress,
			 'Country'=>$prcountry,
			 'State'=>$prstate,
			 'City'=>$prcity,
			 'Postalcode'=>$prpostcode,
			 'Email'=>$email,
                         'Adder_Email'=>$_SESSION['uname']
			 );
 
			$table="usercontact";
			$fld="Email";                        
			$value=$email;
                        $check=$this->Frontmodel->chk_email($table,$fld,$value);
                        if($check>0) {
                        $duplicate++;    
		 	$tbl="logs";
                        $insert_duplicate.="(NULL,'".$_SESSION['uname']."'),";
			}
			else {	
                            
                            $originals++;
                           $insert_original.="(NULL, '".$fname."', '".$lname."','".$title."','".$depart."', '".$comopany."', '".$officephone."', '".$mobile."', '".$fax."', '".$praddress."', '".$prcountry."', '".$prstate."', ' ".$prcity."', '".$prpostcode  ."', '".$email."', '".@$_SESSION['uname']."')," ;
                            }
		       } 
                       else
                {
                    $invalid++;
                    
                }
              }
                
                       
	} 
}  
				fclose($file_handle);
                                
                                $insert_duplicate.="(NULL,'duplicate_added_by');";
                                $insert_original.="(NULL, 'Amy', 'Treadwell', 'Director, Human Resources 2', 'Retail', 'Ebay Inc.', '(408) 376-4909', 'NULL', 'NULL', 'NULL', 'NULL', 'California', 'NULL', 'NULL', 'ooooduplicate.com', 'duplicate.com');";
                                if($duplicate>0)
                                @$query=$this->db->query($insert_duplicate);
                                $this->db->query("DELETE FROM logs where Adder_Email='duplicate_added_by'");
                                if($originals>0)
                                @$insert=$this->db->query($insert_original);
                                $this->db->query("DELETE FROM usercontact where email='ooooduplicate.com'");
                                //echo $this->db->last_query(); die();
                                $_SESSION['invalid']=$invalid;
                                $_SESSION['duplicate']=$duplicate;
                                $_SESSION['total']=$total-3;
                                redirect('user/uploadsuccess');
                               
			  } //error else  close
			}  //Close Main Clos
		else
		  {
			
                    $data['err']="<b style='color:red;'>File Uplaod Error</b>";
					 
		  }
           }    
                         $this->load->view('user/upload',@$data);
 }
}
 

}
?>		