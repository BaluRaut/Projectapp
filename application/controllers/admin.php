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

public function add_user()
 {
    if(!session_start())
    {
        show_404(); exit();
    } 
  if(@$_SESSION['aname']=="karan@avika.in")
   {
     if($this->input->post('flag')=="add")
      {
        $this->form_validation->set_rules('FirstName',lang('fname'), 'required|alpha');
        $this->form_validation->set_rules('LastName', lang('lname'), 'required|alpha');
        $this->form_validation->set_rules('Email', lang('email'), 'required|valid_email|user.Email');
        $this->form_validation->set_rules('Password', lang('password'), 'required');
        $this->form_validation->set_rules('Title', lang('title'), 'required');
        if($this->form_validation->run()==TRUE)
	{   
        $data_insert=array
                     (
                     'id'=>NULL,
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
                     'Email'=>$this->input->post('Email'),
                     'Password'=>$this->input->post('Password')
                                 );
                    $table="user";
                    $fld="Email"; 
                    $value=$this->input->post('Email');
                    $check=$this->Frontmodel->chk_email($table,$fld,$value);
                    if($check>0)
                    {

                        $tbl="logs";
                    $data=array('id'=>null,
                                 'Adder_Email'=>$_SESSION['aname']);
                    $query=$this->Frontmodel->insert_table_details($tbl,$data);

                    }
                    else
                    {						
                    $query=$this->Frontmodel->insert_table_details($table,$data_insert);
                    }
                   redirect('admin/success');                    


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
                $data['Department']=$this->input->post('Department');
                $data['Company']=$this->input->post('Company');
                $data['Postalcode']=$this->input->post('Postalcode');
             }  //Validation else close
	} //Flag if close
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
               $this->output->enable_profiler(TRUE);

        @$data['logrecords']=@$logrecords; 
        @$data['userrecords']=@$userrecords; 
        $data['ok']="ok";
        $this->load->view('admin/add_user',@$data);
 }  //Session check if close
 else
  {
    
  //show_error("Sorry You are not Authenticated user") ;
     show_404();
   } //Session else close
}
/***********************========Function close ****************************/

/****************This function is used for to display Successful mesage***************/
function success()
{
  if(!session_start())
    {
        show_404(); exit();
    } 
    if(@$_SESSION['aname']=="karan@avika.in")
    {
  $data['success']='OK';
  $this->load->view('admin/front',$data);    
    }
    else
    {
        show_404();
    }
}  
/****************This function is used for to display Upload Successful mesage***************/

function uploadsuccess()
{
  if(!session_start())
    {
        show_404(); exit();
    } 
    if(@$_SESSION['aname']=="karan@avika.in")
    {
  $data['uploadsuccess']='OK';
  $this->load->view('admin/front',$data);    
    }
    else
    {
        show_404();
    }
}  
function updatesuccess()
{
  if(!session_start())
    {
        show_404(); exit();
    } 
    if(@$_SESSION['aname']=="karan@avika.in")
    {
  $data['updatesuccess']='OK';
  $this->load->view('admin/front',$data);    
    }
    else
    {
        show_404();
    }
}  

/****************This function is used for to display Logout  Successful mesage***************/

function logoutsuccess(){
   $data['success']='logout';
  $this->load->view('login',$data);    
}

/****************This function is used for Import Contcats from CSV file ***************/

function Import_contacts() {
 
    if(!session_start())
    {
        show_404(); exit();
    } 

 if(@$_SESSION['aname']=="karan@avika.in")
 {
   $this->output->enable_profiler(TRUE);     
   
ini_set('max_execution_time',0); //300 seconds = 5 minutesee
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
			  "img/" . $_FILES["file"]["name"]);
         $filename= "img/" . $_FILES["file"]["name"];
	 $file_handle = fopen($filename, "r");
	 $i=0;
         $duplicate=0;
         $invalid=0;
         $total=0;
         $originals=0;
         $insert_duplicate="INSERT INTO logs(id,Adder_Email) VALUES ";
   $insert_original="INSERT INTO `usercontact` (`id`, `FirstName`, `LastName`, `Title`, `Department`, `CompanyName`, `Officephone`, `State`, `Country`, `Email`) 
	 VALUES ";

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
					
                        $prstate=str_replace("'", '',$text[7]); 
							$prcountry=str_replace("'", '',$text[8]);
						                  
                        
                if(($fname=="")||($fname=="First Name"))  {
                    }
                else {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
             {
             

		$data_insert=array
			 (
			 'id'=>NULL,
			 'FirstName'=>trim($fname),
		     'LastName'=>trim($lname),
			 'Title'=>trim($title),
			 'Department'=>trim($depart),
			 'CompanyName'=>trim($comopany),
			 'Officephone'=>trim($officephone),
			 'Country'=>trim($prcountry),
			 'Email'=>trim($email),
    			 );
                      // $insert_original.="(NULL, '".$fname."', '".$lname."','".$title."','".$depart."', '".$comopany."', '".$officephone."', '".$mobile."', '".      $fax."', '".$praddress."', '".$prcountry."', '".$prstate."', ' ".$prcity."', '".$prpostcode  ."', '".$email."', '".@$_SESSION['aname']."')," ;
 
                     // print_r($data_insert); 
			$table="usercontact";
			$fld="Email";                        
			$value=$email;
                        $check=$this->Frontmodel->chk_email($table,$fld,$value);
                      //  echo"Run $check". $this->db->last_query();die();
                        if($check>0) {
                        $duplicate++;    
		 	$tbl="logs";
                        $insert_duplicate.="(NULL,'".$_SESSION['aname']."'),";
			//$query=$this->Frontmodel->insert_table_details($tbl,$data);
			//  echo"Run". $this->db->last_query();die();
			}
			else {	
                            
                            $originals++;
                           $insert_original.="(NULL, '".$fname."', '".$lname."','".$title."','".$depart."', '".$comopany."', '".$officephone."', '".$prstate."','".$prcountry."','".$email."')," ;
                         //$query=$this->Frontmodel->insert_table_details(lang('user_contact_table'),$data_insert); 
                         //echo $this->db->last_query();  
                            } //Else close
		       } //Record validater if close
                       else
                {
                    $invalid++;
                    
                }
              } //else close
                
                       
	} //Whle elsae close
}  //While close
				fclose($file_handle);
                                
                                $insert_duplicate.="(NULL,'duplicate_added_by');";
                                $insert_original.="(NULL, 'Amy', 'Treadwell', 'Director, Human Resources 2', 'Retail', 'Ebay Inc.', '(408) 376-4909', 'California', 'NULL','ooooduplicate.com');";
								 
                                if($duplicate>0)
                                @$query=$this->db->query($insert_duplicate);
                                $this->db->query("DELETE FROM logs where Adder_Email='duplicate_added_by'");
                                if($originals>0)
                                @$insert=$this->db->query($insert_original);
							

                                $this->db->query("DELETE FROM usercontact where email='ooooduplicate.com'");
                          
                                $_SESSION['invalid']=$invalid;
                                $_SESSION['duplicate']=$duplicate;
                                $_SESSION['total']=$total-3;
                                redirect('admin/uploadsuccess');
                               
			  } //error else  close
			}  //Close Main Clos
		else
		  {
			
                    $data['err']="<b style='color:red;'>File Uplaod Error</b>";
					 
		  }
           }    
                         $this->load->view('admin/upload',@$data);
 }
}

function download_selection()
{
 if(!session_start())
 {
 
 
 }else
  {
  
        $selection = $_SESSION['newone'];
        $id_array = explode("|", $selection); 
        $ids=$id_array;
        $cnt=count($ids);
        $i=0;   
        $contains=array();
        foreach($id_array as $item):
            $i++;
               if($item != ''):
               $contains[$i]=$item;       
                      endif;
        endforeach;
        $table = 'usercontact'; 
        $file = 'contacts'; 
        $result = mysql_query("SHOW COLUMNS FROM ".$table."");
        $i = 0;
        $csv_output="";
        if (mysql_num_rows($result) > 0) {
		$row=1;
        while ($row<9) {

              if($row==1){
        $csv_output .= " First Name  , ";
        $i++;
         }
         if($row==2){
        $csv_output .= "Last Name , ";
        $i++;
         }
         if($row==3){
        $csv_output .= " Title , ";
        $i++;
         }
         if($row==4){
        $csv_output .="Company Name , ";
        $i++;
         }
         if($row==5){
        $csv_output .= "Email , ";
        $i++;
         }
         if($row==6){
        $csv_output .= " OfficePhone , ";
        $i++;
         }
         if($row==7){
        $csv_output .= " State , ";
        $i++;
         }
         if($row==8){
        $csv_output .= "Country  , ";
        $i++;
         }
 $row++;
}
}
$csv_output .= "\n";

  foreach($contains as $downloadid)
 {
    
 $values = mysql_query("SELECT FirstName,LastName,Title,CompanyName,Email,Officephone,State,Country FROM ".$table." WHERE id=$downloadid");
 if($values)
 {
while ($rowr = mysql_fetch_row($values)) {
for ($j=0;$j<$i;$j++) {
if($j==0)
{
$entry = str_replace(",", "",$rowr[$j]);

$csv_output .= $entry.",";}
if($j==1)
{
$entry = str_replace(",", "",$rowr[$j]);

$csv_output .= $entry.",";}
if($j==2)
{
$entry = str_replace(",", "",$rowr[$j]);

$csv_output .= $entry.",";}
if($j==3)
{
$entry = str_replace(",", "",$rowr[$j]);

$csv_output .= $entry.",";}
if($j==4)
{
$entry = str_replace(",", "",$rowr[$j]);

$csv_output .= $entry.",";}
if($j==5)
{
$entry = str_replace(",", "",$rowr[$j]);

$csv_output .= $entry.",";}
if($j==6)
{
$entry = str_replace(",", "",$rowr[$j]);

$csv_output .= $entry.",";}
if($j==7)
{
$entry = str_replace(",", "",$rowr[$j]);

$csv_output .= $entry.",";}
}
$csv_output .= "\n";
}
}
 }

$filename = $file."_".date("d-m-Y_H-i",time());
 

header("Content-type: application/vnd.ms-excel");
header("Content-disposition: csv" . date("Y-m-d") . ".csv");
header( "Content-disposition: filename=".$filename.".csv");
print $csv_output;

exit;
    

  }

}
function success11()
{

   $selection = $this->input->post("selection", TRUE);
if(!session_start()) { }
     $inTwoMonths = 60 + time(); 
setcookie('newone', $selection, $inTwoMonths); 
$_SESSION['newone']=$selection;

}
/** This functionis used for Add Single Contacts***************/
public function add_contacts()
 {
  if(!session_start())
  {
    echo "You must first logged in to dee this page";
   echo anchor('user/login','Login'); 
  }
  else
  {
  
   if(!@$_SESSION['aname']=="")
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
			redirect('admin/front');
			}
			else
			{						
			$query=$this->Frontmodel->insert_table_details(lang('user_contact_table'),$data_insert); 
			redirect('admin/success');
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
        $this->load->view('admin/add_contacts',@$data);
   }
   else
   {
   
       show_404();
   }
 }
}
/****************This function is used for add Member****************/
public function add_member()
 {            
  if(!session_start())
  {
    echo "You must first logged in to dee this page";
   echo anchor('user/login','Login'); 
  }
  else
  {
   if(!@$_SESSION['aname']=="")
   { 
       error_reporting('0');

       if($this->input->post('flag')=="add")
      {
           
        $this->form_validation->set_rules('FirstName',lang('fname'), 'required|alpha');
        $this->form_validation->set_rules('LastName', lang('lname'), 'required|alpha');
        $this->form_validation->set_rules('Email', lang('email'), 'required|valid_email|is_unique[member.Email]');
        $this->form_validation->set_rules('Password', lang('password'), 'required');
        $this->form_validation->set_rules('cnfPassword', lang('cnfpassword'), 'required|matches[Password]');
        $this->form_validation->set_rules('Title', lang('title'), 'required');
        $this->form_validation->set_rules('Company', lang('compnay'), 'required');        
        if($this->form_validation->run()==TRUE)
	{   
            if($this->input->post('is_member')=="Free")
            {                 
            $data_insert=array
                     (
                     'id'=>NULL,
                     'FirstName'=> $this->input->post('FirstName'),
                     'LastName'=> $this->input->post('LastName'),
                     'Title'=>$this->input->post('Title'),
                     'CompanyName'=>$this->input->post('Company'),
                     'Officephone'=>$this->input->post('Officephone'),
                     'Mobile'=>$this->input->post('Mobile'),
                     'Fax'=>$this->input->post('Fax'),
                     'Address'=>$this->input->post('Address'),
                     'Country'=>$this->input->post('Country'),
                     'State'=>$this->input->post('State'),
                     'City'=>$this->input->post('City'),
                     'Postalcode'=>$this->input->post('Postalcode'),
                     'Email'=>$this->input->post('Email'),
                     'Password'=>$this->input->post('Password'),
                     'is_member' =>'notpaid'
                      );      
                        $table="member";
                    $this->Frontmodel->insert_table_details($table,$data_insert);
                    redirect('admin/success');
            }
           if($this->input->post('is_member')=="Paid")
            {
                              
            $data_insert=array
                     (
                     'id'=>NULL,
                     'FirstName'=> $this->input->post('FirstName'),
                     'LastName'=> $this->input->post('LastName'),
                     'Title'=>$this->input->post('Title'),
                     'CompanyName'=>$this->input->post('Company'),
                     'Officephone'=>$this->input->post('Officephone'),
                     'Mobile'=>$this->input->post('Mobile'),
                     'Fax'=>$this->input->post('Fax'),
                     'Address'=>$this->input->post('Address'),
                     'Country'=>$this->input->post('Country'),
                     'State'=>$this->input->post('State'),
                     'City'=>$this->input->post('City'),
                     'Postalcode'=>$this->input->post('Postalcode'),
                     'Email'=>$this->input->post('Email'),
                     'Password'=>$this->input->post('Password'),
                     'is_member' =>'paidmember'
                      );      
                    $table="member";
                    $query=$this->Frontmodel->insert_table_details($table,$data_insert);
                     $data_insert=array(
                                            'ACK' => 'Success',
                                            'Email'=>$this->input->post('Email'),                    
                                            'Payer_ID'=>  uniqid(),
                                            'Payer_Status'=>'Verified',
                                            'Transaction_type'=>'Manual',
                                            'Payment_type'=>'Manual',
                                            'Total_amount'=>'25',
                                            'Currency_Code'=>'USD',
                                            'Pending_Reason'=>'None',
                                            'Reason_code'=>'None'
                                            );
                                             $table="paid_member";
                                             $insert=$this->Frontmodel->insert_table_details($table,$data_insert);
                                            $data_insert=array ('id'=>'NULL', 
                                            'Email'=>$this->input->post('Email'),
                                            'Download_limit'=>'50',
                                            'Download_status'=>'0',
                                            'Current_download'=>'0');
                                             $table="download_limit";
                                             $insert=$this->Frontmodel->insert_table_details($table,$data_insert);
                                            
                    redirect('admin/success');
            }
            
            
             }  //Validation if close
             else
	     {
                $data['FirstName']=$this->input->post('FirstName');
                $data['LastName']=$this->input->post('LastName');
                $data['OfficePhone']=$this->input->post('OfficePhone');
                $data['Email']=$this->input->post('Email');
                $data['Password']=$this->input->post('Password');
                $data['Title']=$this->input->post('Title');
                $data['Company']=$this->input->post('Company');
             }  //Validation else close
	} //Flag if close
      
       $this->load->view('admin/add_member',@$data);
            
        } //Seesion if close
  
  else { 
      
      $this->load->view('front');
      }
 }
 }// Funtion Close
 public function alter_table3()
 {
     
     $this->db->query("alter table paid_member add ( profile_ID VARCHAR(80) );");
 }
 
 /*****************This Function is used for Edit Downloads**************************/
 public function edit_downloadmember($params)
{
    if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {
   if(!@$_SESSION['aname']=="")
   {
       $_SESSION['download_id']=$params;
       redirect('admin/edit_downloadmembers');
       
   }
   else
   {
       $this->load->view('front');
   }
   }
}
public function edit_downloadmembers()
{
    
  if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {
   if(!@$_SESSION['aname']=="")
   {
       $params=@$_SESSION['download_id'];
      if($this->input->post('flag')=="add")
      {
 
        $this->form_validation->set_rules('Download_limit','Download_limit', 'required');
        $this->form_validation->set_rules('Download_status','Download_status', 'required');
        $this->form_validation->set_rules('Current_download', 'Current_download', 'required');
		$this->form_validation->set_rules('view_limit','View_limit', 'required');
        $this->form_validation->set_rules('view_stats','Download_status', 'required');
        $this->form_validation->set_rules('current_view', 'Current_download', 'required');
        
        if($this->form_validation->run()==TRUE)
	    { 
		$data_insert=array ( 
							'Download_limit'=>$this->input->post('Download_limit'),
							'Download_status'=>$this->input->post('Download_status'),
							'Current_download'=>$this->input->post('Current_download'),
							'view_limit'=>$this->input->post('view_limit'),
							'view_stats'=>$this->input->post('view_stats'),
							'current_view'=>$this->input->post('current_view')
							);
							 $table="download_limit";
							 $this->db->where('id',$params);
							 $this->db->update('download_limit', $data_insert);
									 redirect('admin/updatesuccess');                 
             }  //Validation if close
             else
	     {
		 
							$data['Download_limit']=$this->input->post('Download_limit');
							$data['Download_status']=$this->input->post('Download_status');
							$data['Current_download']=$this->input->post('Current_download');
							$data['view_limit']=$this->input->post('view_limit');
							$data['view_stats']=$this->input->post('view_stats');
							$data['current_view']=$this->input->post('current_view');
							
                            $data['Email']=$this->input->post('Email');
             }  //Validation else close
	} //Flag if close
        $value=$params;
        $fld="id";
        $tablename="download_limit";        
        $getdata=$this->Frontmodel->get_table_Details($tablename,$fld,$value);	  
//print_r($getdata);		die();
		foreach ($getdata as $val)
		{
		                    $data['Download_limit']=$val['Download_limit'];
							$data['Download_status']=$val['Download_status'];
							$data['Current_download']=$val['Current_download'];
							$data['view_limit']=$val['view_limit'];
							$data['view_stats']=$val['view_stats'];
							$data['current_view']=$val['current_view'];
							
                            $data['Email']=$val['Email'];
		 }		 
        $this->load->view('admin/edit_downloadmembers',@$data);       
   }
   else
   {
       $this->load->view('front');
   }
 }  
}
   


 /*****************This Function is used for Edit Paidmembers**************************/
 public function edit_paidmember($params)
{
    if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {
   if(!@$_SESSION['aname']=="")
   {
       $_SESSION['paidmember_id']=$params;
       redirect('admin/edit_paiddmembers');
       
   }
   else
   {
       $this->load->view('front');
   }
   }
}
public function edit_paidmembers()
{
    
  if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {
   if(!@$_SESSION['aname']=="")
   {
       $params=@$_SESSION['paid_id'];
      if($this->input->post('flag')=="add")
      {

        if($this->form_validation->run()==TRUE)
	    { 
		$data_insert=array ( 
							);
							$table="paid_member";
							 $this->db->where('id',$params);
							 $this->db->update('paid_member', $data_insert);
							 redirect('admin/updatesuccess');                 
             }  //Validation if close
             else
	     {
		 
                            $data['Email']=$this->input->post('Email');
             }  //Validation else close
	} //Flag if close
        $value=$params;
        $fld="id";
        $tablename="paid_member";        
        $getdata=$this->Frontmodel->get_table_Details($tablename,$fld,$value);	  
//print_r($getdata);		die();
		foreach ($getdata as $val)
		{
                            $data['Email']=$val['Email'];
		 }		 
        $this->load->view('admin/edit_paidmembers',@$data);       
   }
   else
   {
       $this->load->view('front');
   }
 }  
}
    /*********************************This function is used for the to edit Users******************/
	 public function edit_user($params)
{
    if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {
   if(!@$_SESSION['aname']=="")
   {
       $_SESSION['user_id']=$params;
       redirect('admin/edit_users');
       
   }
   else
   {
       $this->load->view('front');
   }
   }
}
public function edit_users()
{
    error_reporting(0);
  if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {  
  
    
   if(!@$_SESSION['aname']=="")
   {
       $params=@$_SESSION['user_id'];
      if($this->input->post('flag')=="add")
      {

        $this->form_validation->set_rules('FirstName',lang('fname'), 'required|alpha');
        $this->form_validation->set_rules('LastName', lang('lname'), 'required|alpha');
        $this->form_validation->set_rules('Password', lang('password'), 'required');
        $this->form_validation->set_rules('Title', lang('title'), 'required');
        if($this->form_validation->run()==TRUE)
	    { 
		$data_insert=array ( 		
                     'FirstName'=> $this->input->post('FirstName'),
                     'LastName'=> $this->input->post('LastName'),
                     'Title'=>$this->input->post('Title'),
                     'CompanyName'=>$this->input->post('Company'),
                     'Officephone'=>$this->input->post('Officephone'),
                     'Mobile'=>$this->input->post('Mobile'),
                     'Fax'=>$this->input->post('Fax'),
                     'Address'=>$this->input->post('Address'),
                     'Country'=>$this->input->post('Country'),
                     'State'=>$this->input->post('State'),
                     'City'=>$this->input->post('City'),
                     'Postalcode'=>$this->input->post('Postalcode'),
                     'Password'=>$this->input->post('Password')		                     
							);
							$table="user";
							 $this->db->where('id',$params);
							 $this->db->update('user', $data_insert);
							 redirect('admin/updatesuccess');                 
             }  //Validation if close
             else
	          {
		 
		                      
                $data['FirstName']=$this->input->post('FirstName');
                $data['LastName']=$this->input->post('LastName');
                $data['OfficePhone']=$this->input->post('OfficePhone');
                $data['Mobile']=$this->input->post('Mobile');
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
              }  //Validation else close
	} //Flag if close
        $value=$params;
        $fld="id";
        $tablename="user";        
        $getdata=$this->Frontmodel->get_table_Details($tablename,$fld,$value);	  
//print_r($getdata);		die();
		foreach ($getdata as $val)
		{
		                    
                $data['FirstName']=$val['FirstName'];
                $data['LastName']=$val['LastName'];
                $data['OfficePhone']=$val['OfficePhone'];
                $data['Mobile']=$val['Mobile'];
                $data['Password']=$val['Password'];
                $data['Title']=$val['Title'];
                $data['Country']=$val['Country'];
                $data['State']=$val['State'];
                $data['City']=$val['City'];
                $data['Address']=$val['Address'];
                $data['Fax']=$val['Fax'];
                $data['Department']=$val['Department'];
                $data['Company']=$val['Company'];
                $data['Postalcode']=$val['Postalcode'];                               
		 }		 
        $this->load->view('admin/edit_users',@$data);       
   }
   else
   {
       $this->load->view('front');
   }
 }  
}
   /*************This function is used for edit the contacts*************/
public function edit_contact($params)
{
    if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {
   if(!@$_SESSION['aname']=="")
   {
       $_SESSION['params']=$params;
       redirect('admin/edit_contacts');
       
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
   if(!@$_SESSION['aname']=="")
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
                    redirect('admin/updatesuccess');                 
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
        $this->load->view('admin/edit_contacts',@$data);       
   }
   else
   {
       $this->load->view('front');
   }
 }  
}
public function edit_member($params)
{
    if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {
   if(!@$_SESSION['aname']=="")
   {
       $_SESSION['member_id']=$params;
       redirect('admin/edit_members');       
   }
   else
   {
       $this->load->view('front');
   }
   }
}
public function edit_members()
{
    
  if(!session_start())
  {
      $this->load->view('front');
  }
  else
  {
   if(!@$_SESSION['aname']=="")
   {
       $params=@$_SESSION['member_id'];
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
        $this->form_validation->set_rules('Password','Password','required');
        if($this->form_validation->run()==TRUE)
	    {      
            if($this->input->post('is_member')=="Free")
            {
                if($_SESSION['make_free']=="make_free")
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
                     'Email'=>$this->input->post('Email'),
                     'Password'=>$this->input->post('Password')                                
                      );      
                    $this->db->where('id', $_SESSION['member_id']);
                    $this->db->update('member', $data_insert);
                    $used=$this->input->post('Email')." Used member";
                     $data_insert=array(
                                            'ACK' => 'UnSuccess',
                                            'Email'=>$used,                    
                                            'Payer_ID'=>  uniqid(),
                                            'Payer_Status'=>'Verified',
                                            'Transaction_type'=>'Manual',
                                            'Payment_type'=>'Manual',
                                            'Total_amount'=>'25',
                                            'Currency_Code'=>'USD',
                                            'Pending_Reason'=>'This Member maked free by admin',
                                            'Reason_code'=>'This user maked free'
                                            );
                                       $table="paid_member";
                                       $query = $this->db->query("SELECT * FROM paid_member WHERE Email='".$this->input->post('Email')."'");
                                        if ($query->num_rows() > 0)
                                        {
                                        $row = $query->row();
                                        $id=$row->id;                                        
                                        } 
                                    $this->db->where('id', $id);
                                    $this->db->update($table, $data_insert);
                                         //    $insert=$this->Frontmodel->insert_table_details($table,$data_insert);
                                            $data_insert=array ( 
                                            'Download_limit'=>'0',
                                            'Download_status'=>'',
                                            'Current_download'=>'1');
                                             $table="download_limit";
                                             $this->db->where('Email', $this->input->post('Email'));
                                             $this->db->update('download_limit', $data_insert);
                                            // $insert=$this->Frontmodel->insert_table_details($table,$data_insert);
                                                            
                     redirect('admin/updatesuccess');   
                    
                  
                 }
                 else
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
                     'Email'=>$this->input->post('Email'),
                     'Password'=>$this->input->post('Password'),
                       'is_member'=>'paidmember'
                      );      
                    $this->db->where('id', $_SESSION['member_id']);
                    $this->db->update('member', $data_insert);
                                         redirect('admin/updatesuccess');         

                }
                
            }
            if($this->input->post('is_member')=="Paid")
            {
                if($_SESSION['make_free']=="make_paid")
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
                     'Email'=>$this->input->post('Email'),
                     'Password'=>$this->input->post('Password'),
                       'is_member'=>'paidmember'
                      );      
                    $this->db->where('id', $_SESSION['member_id']);
                    $this->db->update('member', $data_insert);
                    
                     $data_insert=array(
                                            'ACK' => 'Success',
                                            'Email'=>$this->input->post('Email'),                    
                                            'Payer_ID'=>  uniqid(),
                                            'Payer_Status'=>'Verified',
                                            'Transaction_type'=>'Manual',
                                            'Payment_type'=>'Manual',
                                            'Total_amount'=>'25',
                                            'Currency_Code'=>'USD',
                                            'Pending_Reason'=>'None',
                                            'Reason_code'=>'None'
                                            );
                                             $table="paid_member";
                                             $insert=$this->Frontmodel->insert_table_details($table,$data_insert);
                                            $data_insert=array ('id'=>'NULL', 
                                            'Email'=>$this->input->post('Email'),
                                            'Download_limit'=>'50',
                                            'Download_status'=>'0',
                                            'Current_download'=>'0');
                                             $table="download_limit";
                                             $insert=$this->Frontmodel->insert_table_details($table,$data_insert);
                                            
                     redirect('admin/updatesuccess');         
                  
                }
                else
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
                     'Email'=>$this->input->post('Email'),
                     'Password'=>$this->input->post('Password'),
                       'is_member'=>'paidmember'
                      );      
                    $this->db->where('id', $_SESSION['member_id']);
                    $this->db->update('member', $data_insert);
                                         redirect('admin/updatesuccess');         

                }
               
                
            }
                              
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
        $tablename="member";        
        $getdata=$this->Frontmodel->get_table_Details($tablename,$fld,$value);	  
//print_r($getdata);		die();
		foreach ($getdata as $val)
		{
		 $data['FirstName']=$val['FirstName'];
		 $data['LastName']=$val['LastName'];
                 $data['Password']=$val['Password'];
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
                 $data['member_type']=$val['is_member'];
                 if($val['is_member']=="paidmember"){ 
                     
                     $_SESSION['make_free']="make_free";
                     } else
                     {
                         $_SESSION['make_free']="make_paid";
                     }
		 }
		 
        $this->load->view('admin/edit_members',@$data); 
       
   }
   else
   {
       $this->load->view('front');
   }
 }  
}

/************This  function is used for checking contact is exist or Not***************/
       public function check_contacts()
{
            if(!session_start()) { $this->load->view('front');
            }
            if(@$_SESSION['aname']=="")
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
/**************This function is used for the Check the User is exist or not*************/

public function check()
{
    if(!session_start()) {
        $this->load->view('front');
            }
    if(@$_SESSION['aname']=="")
  {
        show_404();
    
  
  }
  else
  {  
	$username 	= $_POST['username'];
	$query = "select * from user where Email = '".strtolower($username)."'";
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



      public function check_member()
{
            if(!session_start()) { $this->load->view('front');
            }
            if(@$_SESSION['aname']=="")
  {
        show_404();
    
  
  }
  else
  {  
	$username 	= $_POST['username'];
	$query = "select * from member where Email = '".strtolower($username)."'";
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
   function delete()
   {
       
       $this->db->query("DELETE FROM usercontact");
   }
function _example_outputs($output = null)
	{
     
	if(!@$_SESSION['aname']=="karan@avika.in")
  {
 //if(!@$_SESSION['aname']=="")
            show_404();
  
  }
  else
      
{
		$this->load->view('admin/contacts.php',$output);	
}
}
function _example_output($output = null)
	{
     
	if(!@$_SESSION['aname']=="karan@avika.in")
   {
 //if(!@$_SESSION['aname']=="")
            show_404();
  
   }else
      
{
       //lk
$this->load->view('admin/users.php',$output);	
}
}
function _example_outputpaid($output = null)
	{
     
	if(!@$_SESSION['aname']=="karan@avika.in")
   {
 //if(!@$_SESSION['aname']=="")
            show_404();
  
   }else
      
{
		$this->load->view('admin/users.php',$output);	
}
}
function _example_outputmember($output = null)
	{
     
	if(!@$_SESSION['aname']=="karan@avika.in")
   {
 //if(!@$_SESSION['aname']=="")
            show_404();
  
   }else
      
{
		$this->load->view('admin/users.php',$output);	
}
}
	function index()
	{
	if($_SERVER['PHP_SELF']=="/index.php/admin/")
	 {
            show_404();
	 }
	if(!@$_SESSION['aname']=="karan@avika.in")
        {
 //if(!@$_SESSION['aname']=="")
             header("Location: http://tecdata99.com");
          }
  else
       {
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
 }

 //**************Load Front page of admin*****************************
 
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
function create_projectsuccess(){
     if(!session_start()) {
   redirect('user/login');
  }
  else  {
   if($_SESSION['is_loggedin_admin']=="yes"){ 
    
     $data="";
    $this->load->view('admin/front',$data); 
   }
   else   {
        redirect('user/login');
   }
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
            
            echo "p";
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