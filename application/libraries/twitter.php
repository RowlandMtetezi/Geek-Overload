<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once('twitter/twitteroauth.php');
class Twitter
{
    private $tweetLimit;
    private $userName;
    private $consumerKey;
    private $consumerSecret;
    private $accessToken;
    private $accessTokenSecret;
    private $twitter;
    private $tweets;
    
    public function __construct($params = array())
    {
        $this->userName          = $params['userName'];
        $this->consumerKey       = $params['consumerKey'];
        $this->consumerSecret    = $params['consumerSecret'];
        $this->accessToken       = $params['accessToken'];
        $this->accessTokenSecret = $params['accessTokenSecret'];
        $this->tweetLimit        = (!empty($params['tweetLimit'])) ? $params['tweetLimit'] : 5;
        $this->twitter           = new TwitterOAuth($this->consumerKey, $this->consumerSecret, $this->accessToken, $this->accessTokenSecret);
    }
    
    public function getMentionTimeLine()
    {
        $this->tweets = $this->twitter->get('statuses/mentions_timeline', array(
            'screen_name' => $this->userName,
            'exclude_replies' => 'true',
            'include_rts' => 'false',
            'count' => $this->tweetLimit
        ));
        $this->parseTweets();
        return $this->tweets;
    }
    public function getUserTimeLine()
    {
        $this->tweets = $this->twitter->get('statuses/user_timeline', array(
            'screen_name' => $this->userName,
            'exclude_replies' => 'true',
            'include_rts' => 'false',
            'count' => $this->tweetLimit
        ));
        $this->parseTweets();
        return $this->tweets;
    }
    public function getHomeTimeLine()
    {
        $this->tweets = $this->twitter->get('statuses/home_timeline', array(
            'screen_name' => $this->userName,
            'exclude_replies' => 'true',
            'include_rts' => 'false',
            'count' => $this->tweetLimit
        ));
        $this->parseTweets();
        return $this->tweets;
    }
    public function getMyReTweets()
    {
        $this->tweets = $this->twitter->get('statuses/retweets_of_me', array(
            'screen_name' => $this->userName,
            'exclude_replies' => 'true',
            'include_rts' => 'false',
            'count' => $this->tweetLimit
        ));
        $this->parseTweets();
        return $this->tweets;
    }
    
    private function parseTweets()
    {
        if (empty($this->tweets))
            return;
        foreach ($this->tweets as $tweet) {
            $tweetText = $tweet->text;
            
            # Make links active
            $tweetText = preg_replace("/(http:\/\/|(www\.))(([^\s<]{4,68})[^\s<]*)/", '<a href="http:%2f%2f$2$3" target="_blank">$1$2$4</a>', $tweetText);
            
            # Linkify user mentions
            $tweetText = preg_replace("/@(\w+)/", "<a href='http:/www.twitter.com/$1' target='_blank'>@$1</a>", $tweetText);
            
            # Linkify tags
            $tweetText = preg_replace("/#(\w+)/", "<a href='http:/search.twitter.com/search?q=$1' target='_blank'>#$1</a>", $tweetText);
            
            $tweet->text = $tweetText;
        }
    }
}
