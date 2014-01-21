<?php
class FacebookUserFeed extends CI_Controller
{
    
     public function __construct()
    {
        parent::__construct();
        $this->load->config('facebookconfig')
        $this->load->library('facebook_sdk/facebook', $config);
            
        ));
    }

    
    public function  readstatus()
    {
        $userid=$this->facebook->getUser();

        try{
            $ret_obj= $this->facebook->api($userid.'?fields=posts','Get'
            );

            $this->renderposts($ret_obj);

        }
        catch(FacebookApiException $e)
        {
            $login_url = $this->facebook->getLoginUrl(array(
                'scope' => 'read_stream'
            ));
            echo 'Please <a href="' . $login_url . '">login.</a>';
            error_log($e->getType());
            error_log($e->getMessage());
        }
    } 
    private function renderposts($facebookdata)
    {

        $posts= array();
        foreach($facebookdata['posts']['data'] as $status)
        {
            $profileimage='<img src="https://graph.facebook.com/' . $status['from']['id'] . '/picture">';
            $data= array('data'=>$status);
            $text=$this->load->view('posts/'. $status['type'],$data, true );

            $post= array('profileimage'=>$profileimage,'text'=>$text);

            $posts[]= $post;
        }
        $data['posts']=$posts;
        $this->load->view('templates/header');
        $this->load->view('social/facebook_status',$data);
        $this->load->view('templates/footer');
