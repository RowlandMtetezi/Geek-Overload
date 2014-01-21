$(document).ready(function(){
    function slugify(text) {
        text = text.replace(/[^-a-zA-Z0-9,&\s]+/ig, '');
        text = text.replace(/-/gi, "_");
        text = text.replace(/\s/gi, "-");
        return text;
    }

    $('ul li:first').addClass('first'); 
    $('ul li:last').addClass('last');
    window.scrollTo(0, 1);
   
    // add arrow image to list links
    $('#block-menu-menu-mobile-menu li a').append('<img class="list-link" src="/sites/all/themes/mmm/css/images/list-link.png"/>')
   
    // display picture on mobile home page
    if(window.location.pathname == '/mobile' || window.location.pathname == '/mobile/'){
        $('#main-image').css('display', 'block');
    }
   
    // Add headers to menu pages
    $('.menu-page-view h3').each(function(index){
        var cleaned = slugify($(this).text());
        $('.view-header').append('<a href="#' + cleaned + '">' + $(this).text().trim() + '</a>');
        $(this).append($('<a name="'+ cleaned + '"> </a>'));
        console.log(index);
        if(index == 0){
            $('a[href=#' + cleaned + ']').addClass('first_header');
        }
    });
    
    //Bar page
    $('#node-34935 #go_home').text('Back').attr('href',document.referrer);
   
});