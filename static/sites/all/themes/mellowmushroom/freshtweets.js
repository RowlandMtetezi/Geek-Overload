var tweetFeed, startingOffset, tweetHeight, totalTweets, tweetcount;

function SlideItUp() {
    //console.log("I am sliding it up...");
    //console.log("Starting Offset is: " + startingOffset);
    //console.log("LI height is: " + tweetHeight);
    //console.log("Total tweets is: " + totalTweets);
    //console.log("Tweet counter is: " + tweetcount);
    tweetFeed.animate({
        "top": tweetcount ? ("-=" + tweetHeight) : startingOffset
    }, {
        complete: function () {
            tweetcount++;
            tweetcount = tweetcount % totalTweets;
            //console.log("tweetcount now at " + tweetcount);
        }
    });
};


$(document).ready(function () {
    tweetFeed = $('#freshtweets-feed');

    startingOffset = tweetFeed.css('top');
    tweetHeight = $('#freshtweets-feed li').css('height');
    totalTweets = $('#freshtweets-feed li').length;
    tweetcount = 1;

    var i = setInterval("SlideItUp()", 5000);

    /* removes extra slash and quote */
    $('a.hashtag').each(function () {
        //console.log($(this).attr('href'));
        var link = $(this).attr('href');
        link = link.substr(2);
        var linklength = link.length;
        link = link.substr(0, linklength - 2);
        //console.log(link);
        $(this).attr('href', link);
    });
});