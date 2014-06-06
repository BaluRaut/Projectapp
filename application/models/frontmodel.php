<?php
class Frontmodel extends CI_Model
{
   function __construct()
    {
        parent::__construct();
		$this->load->database();	
    }
	
    function update_details($table,$fld,$setvalue,$checkvalue)

    {
        $data = array("$fld" => $setvalue);
        $this->db->where('Email', $checkvalue);
        $this->db->update($table, $data);  
        return true;
    }
    
    function get_table_Details($tablename,$fld,$value)  
	{
	     
	 $where = "$fld = '$value'";
         $this->db->where($where);
	$query = $this->db->get($tablename);
	$user_id=$query->result_array();
	//echo $this->db->last_query(); die();
	return @$user_id; 
	}
        function get_table_Details_more($tablename,$val1,$val2,$val3)  
	{
	     
	$query = $this->db->query("select * from member WHERE auth_code='$val1' AND Add_time='$val2' AND FirstName='$val3' ");
	$user_id=$query->result_array();
	//echo $this->db->last_query(); die();
	return @$user_id; 
	}
        function get_contact_Details($tablename,$fld,$value)  
	{
	     
	$where = "$fld=".$value."";
         $this->db->where($where);
	$query = $this->db->get($tablename);
	$user_id=$query->result_array();
	//echo $this->db->last_query(); die();
	return @$user_id; 
	}

	function insert_table_details($table,$data_insert)
	{
	  $this->db->insert($table,$data_insert);
	  //echo $this->db->last_query(); die();
	  return true;
	}
	
	function chk_email($table,$fld,$value)
	{
	
	
	$sql = "SELECT * FROM ". $table ." WHERE " .$fld . "= ?";
    $query=$this->db->query($sql, array($value)); 
	$nums=$query->num_rows();
	//echo "nums returened the code is".$nums;
   //echo $this->db->last_query(); die();
	return $nums;	
	}
	function get_count($table)
	{
	$sql = "SELECT * FROM ". $table ;
    $query=$this->db->query($sql); 
	$nums=$query->num_rows();
	return $nums;
        }
	
}
