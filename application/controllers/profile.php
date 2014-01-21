<?php
class Profile extends CI_Controller {

	public function __construct()
	{
		{  
        parent::__construct();  
      
        $this->load->model('users');    
        $this->load->model('files'); 
        $this->load->model('news_model'); 
        $this->load->library('session');
  
        $this->userid = $this->session->userdata('userid');  
        if (!isset($this->userid) or $this->userid=='') redirect('login');  
        } 
	}
	public function logout()  
    {  
        $this->session->set_userdata(array('userid'=>''));  
        redirect('login');  
    }
    public function index()  
    {  
        $data['files'] = $this->files->get($this->userid); 
        $data['news'] = $this->files->get($this->userid);  
        $this->load->view('uploader/profile', $data);  
    }
    public function upload()  
    {  
        if(isset($_FILES['file'])){  
            $file   = read_file($_FILES['file']['tmp_name']);  
            $name   = basename($_FILES['file']['name']);
            $description = $_POST['description'];
              
            write_file('files/'.$name, $file);  
            
      
            $this->files->add($name, $description);  
            redirect('profile');          
        }  
      
        else $this->load->view('uploader/upload');  
    }
    public function delete($id)  
    {  
        //This deletes the file from the database, before returning the name of the file.  
        $name = $this->files->delete($id);  
        unlink('files/'.$name);  
        redirect('profile');  
    }        
}