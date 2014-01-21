<?php
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
     
	}
    public function index() 
    {
        // Load our view to be displayed
        // to the user
        $this->load->view('uploader/login');
    }
	public function register()  
    {  
    if(isset($_POST['username'])){  
          
        // User has tried registering, insert them into database.  
          
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];  
          
        $this->users->register($username, $email, $password);  
          
        redirect('login');  
          
    }  
    else{  
        //User has not tried registering, bring up registration information.  
        $this->load->view('uploader/register');  
    }  
} 
    public function go()  
    {  
      
        $username = $_POST['username'];  
        $password = $_POST['password'];  
      
        //Returns userid if successful, false if unsuccessful  
        $results = $this->users->login($username, $password);  
          
        if ($results==false) redirect('login');  
        else   
        {     
            $this->session->set_userdata(array('userid'=>$results));  
            redirect('profile/index');  
        }  
      
    }   
}