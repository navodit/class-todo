<?php

class todo_model extends CI_Model{

    function insertdata($data){
  // 	print_r ("$data");
	
	$row = array('SN'=>'1',
	              'Task'=>$data,
				  'Done'=>'0'
	
	
	);
	
	
	$this->db->insert('Tasks',$row);
	}
	
	
	
} 

?>