<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getTimeAgo')){

    function getTimeAgo($date,$granularity=1){
	
       	    $values = explode(" ",$date);
	    $time = new DateTime('now', new DateTimeZone('UTC'));//GET CURRENT UTC TIME
	    $date = $values[2] . "-" . $values[1] . "-" . $values[5] . " " . $values[3];	
	    $difference = strtotime($time->format('Y-m-d H:i:s')) - strtotime($date);
            $retval='';
	    $periods = array('decade' => 315360000,
		'year' => 31536000,
		'month' => 2628000,
		'week' => 604800, 
		'day' => 86400,
		'hour' => 3600,
		'min' => 60,
		'sec' => 1);

	    foreach ($periods as $key => $value) {
		if ($difference >= $value) {
		    $time = floor($difference/$value);
		    $difference %= $value;
		    $retval .= ($retval ? ' ' : '').$time.' ';
		    $retval .= (($time > 1) ? $key.'s' : $key);
		    $granularity--;
		}
		if ($granularity == '0') { break; }
	    }
	    return $retval.' ago';
    }   

}

if ( ! function_exists('getTweetsHTML')){

    function getTweetsHTML($tweets=array()){
        $html='';
	if(empty($tweets)) return NULL;
	//$html .= '<div class="tweetWrapper">';
	//$html .= '<div class="tweetHeader"><img src="'.base_url().'fr/images/twitter.png">TWEETS @nouphaltklm</div>';
	//$html .= '<div class="tweetContent">';
	
	$html .= '<ul id="freshtweets-feed">';
	foreach($tweets as $tweet) {
		//print_r($tweet);
		$html .= '<li class="twitter">';		
			//$html .='<div class="tweetProfPic"><img src="'.$tweet->user->profile_image_url.'"/></div>';
			$html .='<span><span class="mention"><a class="tweetOwner" href="http://twitter.com/'.$tweet->user->screen_name.'">'.$tweet->user->screen_name.'</a></span> | '.$tweet->text.'</span>';
			

			//$html .='<div class="tweetOptions">';			
				//$html .= '<a href="http://twitter.com/'.$tweet->user->screen_name.'/statuses/'.$tweet->id_str.'">'.getTimeAgo($tweet->created_at).'</a>';
				//$html .= '<a href="http://twitter.com/intent/tweet?in_reply_to='.$tweet->id_str.'">reply</a>';
				//$html .= '<a href="http://twitter.com/intent/retweet?tweet_id='.$tweet->id_str.'">retweet</a>';
				//$html .= '<a href="http://twitter.com/intent/favorite?tweet_id='.$tweet->id_str.'">favourite</a>';
			
		$html .= '</li>';		
	}

	$html .= '</ul>';
	//$html .= '</div>';
	//$html .= '</div>';
	return $html;
    }   

    
}

