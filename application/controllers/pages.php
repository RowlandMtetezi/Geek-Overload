<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->library('user_agent');
		
	}

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}

			$data['title'] = ucfirst($page); // Capitalize the first letter

			if ($this->agent->is_mobile('iphone'))
    {
        $this->load->view('templates/header', $data, array('tweets', $this->tweets));
		$this->load->view('pages/'.$page, $data, array('tweets', $this->tweets));
		$this->load->view('templates/footer', $data, array('tweets', $this->tweets));


    }
        else if ($this->agent->is_mobile())
    {
        $this->load->view('templates/mobile/header_mobile', $data, array('tweets', $this->tweets));
		$this->load->view('pages/'.$page, $data, array('tweets', $this->tweets));
		$this->load->view('templates/mobile/footer_mobile', $data, array('tweets', $this->tweets));

    }
        else
    {
        $this->load->view('templates/header', $data, array('tweets', $this->tweets));
		$this->load->view('pages/'.$page, $data, array('tweets', $this->tweets));
		$this->load->view('templates/footer', $data, array('tweets', $this->tweets));

    }

    }



}