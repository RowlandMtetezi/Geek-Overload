$(document).ready(function() {
    var texts = new Array();
    var vals = new Array();
    $(".add-to-cart select").after("<div id='sizes'><ul></ul></div>");
    $(".add-to-cart select option").each(function(i){
        if(i>0) {
        $('#sizes ul').append('<li><a href="#" id="val'+ $(this).val() +'">' + $(this).text() + '</a></li>');
          vals.push($(this).val());
        }
    });
    
    $("#sizes ul li a").each(function(i){
      $(this).removeClass("active");
      $(this).click(function(e) {
      e.preventDefault();
        var val = $(this).attr('id').split("val").pop();
        var text = $(this).text();
        $("#sizes ul li a").each(function(i){
      $(this).removeClass("active");
      });
        $(this).addClass("active");
        
        $(".add-to-cart select").val(val);
      });
    });
      
    $(".add-to-cart select").hide();
    
});