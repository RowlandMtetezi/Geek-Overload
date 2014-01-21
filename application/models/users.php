<?php
class Users extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function register($username, $email, $password)  
    {  
        $new_user = array (  
            'username'=>$username, 
            'email'   =>$email, 
            'password'=>$password  
        );  
      
        $this->db->insert('users', $new_user);  
      
        return true;  
    }
    public function login($username, $password)  
    {  
      
        $query = $this->db->get_where('users', array('username'=>$username, 'password'=>$password));  
          
        if ($query->num_rows()==0) return false;  
        else {  
            $result = $query->result();  
            $first_row = $result[0];  
            $userid = $first_row->id;  
              
            return $userid;  
        }  
          
    }    
}