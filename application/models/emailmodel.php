<?php

class Emailmodel extends CI_Model
{
	 function __construct()
    {
        parent::__construct();
    }

	//****************This function is used to send mail forgot password******************//
	function sendEmail($to,$from,$subject,$message)
	{
	
	
 $config=array(
   'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'blraut1@gmail.com', // change it to yours
  'smtp_pass' => 'wwe are the1', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);
		$this->load->library('email',$config);
		$this->email->from('$from', 'Avika');		
		$this->email->to('$to');		
		$this->email->subject('$subject');
		$this->email->message('$message');
		if($this->email->send())
 {
   
 }
	//	echo $this->email->print_debugger();
	
}
}
?>