if(typeof String.prototype.trim !== 'function') {
  String.prototype.trim = function() {
    return this.replace(/^\s+|\s+$/g, ''); 
  }
}
$(document).ready(function(){
    //i
 
    if($(".pager-previous").text().trim().length == 0 && $(".pager-previous").find('img').length==0){
        $(".pager-previous").addClass('inactive_pager');
        $(".pager-previous").backgroundImage="url('/sites/all/themes/mellowmushroom/media/images/left_paginate_arrow0.png') no-repeat scroll 0 0 transparent;";
        //add transparent pager
        $('<a href="#" class="active">‹‹</a>').appendTo($(".pager-previous"));
    }
    
    if($(".pager-next").text().trim().length == 0 && $(".pager-next").find('img').length == 0){
        $(".pager-next").addClass('inactive_pager');
        //add transparent pager
        $('<a href="#" class="active">‹‹</a>').appendTo($(".pager-next"));
        $(".pager-previous").backgroundImage="url('/sites/all/themes/mellowmushroom/media/images/left_paginate_arrow0.png') no-repeat scroll 0 0 transparent;";
        
    }
    $('.inactive_pager a').click(function(){return false;});
       $('.inactive_pager, .inactive_pager a').css({ opacity: 0.5 });
})