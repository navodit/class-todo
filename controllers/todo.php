<?php
class todo extends CI_controller{

     function index(){
     $data['task']='';
	 if (isset( $_POST['task'])){
	 
	    $data['task'] = $_POST['task']; 
	 } 


      $this->load->database();
      $this->load->model('todo_model');	
	  
	  if($data['task']!='' && $data['task']!= null){
	  
	  $this->todo_model->insertdata($data['task']);
       
         }  
      $this->load->view('header',$data);

}
}

?>