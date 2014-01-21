<?php
class TwitterUserFeed extends CI_Controller
{
    
    public function __construct()
    { 
            parent::__construct();    
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
        
        echo $mytweets;
    }
    
}
