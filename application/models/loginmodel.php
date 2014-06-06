<?php

class Loginmodel extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function validate($validates,$uname,$password)
	{		
		$sql = "SELECT * FROM " . $validates. " WHERE  Email= ?  AND Password= ?  LIMIT 1";
		$query=$this->db->query($sql, array($uname,$password)); 
         //echo $this->db->last_query(); die();		
		if ($query->num_rows() > 0)
                {
		   $user=$query->result_array();
                   //print_r($user);
	   //echo $this->db->last_query(); die();
	         return @$user;
                }
	}
   function getname($validates,$uname,$password)
	{		
		$sql = "SELECT * FROM " . $validates. " WHERE  Email= ?  AND Password= ? ";
		$query=$this->db->query($sql, array($uname,$password)); 
        $user=$query->result_array();
	   //echo $this->db->last_query(); die();
	   return @$user;  
	}	
  function check_member($validates,$uname,$password)
  {
        	$check_value="";
		$sql = "SELECT * FROM " . $validates. " WHERE  Email= ?  AND Password= ? ";
		$query=$this->db->query($sql, array($uname,$password)); 
                $user=$query->result_array();
                foreach ($user as $key)
                {
                    
                    $check_value= $key['is_member'];
                    
                }
                return $check_value;
   }
   function check_authenticate($table,$uname)
  {
        $sql = "SELECT * FROM " . $table. " WHERE  Email= ?   ";
        $query=$this->db->query($sql, array($uname)); 
        $user=$query->result_array();
          foreach ($user as $key)
        {

            $check_value= $key['is_authenticated'];
            if($check_value=="yes")       
        {
           $check="ok";
           return $check;
        }
        else
        {
           $check="not";
           return $check;
        }
  
        } 
       
  }
 
   function check_pass($table,$uname,$str)
   {
        $check="";
        $sql = "SELECT * FROM " . $table. " WHERE  Email= ?   ";
        $query=$this->db->query($sql, array($uname)); 
        $user=$query->result_array();
        foreach ($user as $key)
        {

            $check_value= $key['Password'];
            if($check_value==$str)       
        {
           $check="ok";
           return $check;
        }
        else
        {
           $check="not";
           return $check;
        }

       }
  }
  

}
?>
