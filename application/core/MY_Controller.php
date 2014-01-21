<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
    public $tweets = '';

    public function __construct()
    {
        // Execute CI_Controller Constructor
        parent::__construct();

        // Store the tweets
        $this->tweets = $this->getTweets();
    }

    public function getTweets()
    {
        $params = array(
            'userName' => 'RowlandBiznez',
            'consumerKey' => 'cnYgEvy4R5EOSG1EHFhb7A',
            'consumerSecret' => 'lgJXrWAXQVVURURSMrbgZDy8qyZx0D77Hk38YQXUs',
            'accessToken' => '183587835-fAZAMIuwAAKlXgby2rXeyvAnhrZrjNDRzSPtOdle',
            'accessTokenSecret' => '97lyXD5St6W7U6O1aPo1Ubjv0cXT9RSgwBb56zSBLM2S1',
            'tweetLimit' => 5 // the no of tweets to be displayed
        );
        $this->load->library('twitter', $params);
        $tweets = $this->twitter->getHomeTimeLine();
        $this->load->helper('tweet_helper');
        $mytweets = getTweetsHTML($tweets);

        return $mytweets;
    }
}

// END Controller class

/* End of file controller.php */
/* Location: ./application/core/controller.php */