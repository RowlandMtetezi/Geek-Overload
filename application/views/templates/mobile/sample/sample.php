
<!DOCTYPE html> 
<html lang="en"> 
    
  <!-- Page Header -->
  <head> 
  
  <!-- Include PHP files-->
    <!-- Page Meta Settings -->
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta content="en-us" http-equiv="Content-Language" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />

  <!-- jQuery Mobile CSS and JavaScript -->
  <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
  <!-- <script src="jquery-ui-1.8.16.custom.min.js"></script>  -->
  <script type="text/javascript">
  //  $(document).bind("mobileinit", function(){
  
   //   $.mobile.touchOverflowEnabled = true;

  //  });
  </script>
  
  
  <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
  <!-- jquery end -->
  
    
    
  <!-- Guide Specific Styles -->
  <style type="text/css" >
  
    

.ui-bar-Beacon {
    border: 1px solid #880000;
    background: #880000;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#880000),to(#A40000));
    background-image: -webkit-linear-gradient(top,#880000,#A40000);
    background-image: -moz-linear-gradient(top,#880000,#A40000);
    background-image: -ms-linear-gradient(top,#880000,#A40000);
    background-image: -o-linear-gradient(top,#880000,#A40000);
    background-image: linear-gradient(top,#880000,#A40000);
}
.ui-bar-Beacon,
.ui-bar-Beacon input,
.ui-bar-Beacon select,
.ui-bar-Beacon textarea,
.ui-bar-Beacon button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-Beacon .ui-link-inherit { color: #FFFFFF }
.ui-bar-Beacon .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-Beacon {
    border: 1px solid #880000;
    background: #880000;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#880000),to(#880000));
    background-image: -webkit-linear-gradient(top,#880000,#880000);
    background-image: -moz-linear-gradient(top,#880000,#880000);
    background-image: -ms-linear-gradient(top,#880000,#880000);
    background-image: -o-linear-gradient(top,#880000,#880000);
    background-image: linear-gradient(top,#880000,#880000);
}
.ui-body-Beacon,
.ui-body-Beacon input,
.ui-body-Beacon select,
.ui-body-Beacon textarea,
.ui-body-Beacon button { font-family: Helvetica,Arial,sans-serif }
.ui-body-Beacon .ui-link-inherit { color: #FFFFFF }
.ui-body-Beacon .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-Beacon {
    border: 1px solid #880000;
    background: #880000;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#880000),to(#A40000));
    background-image: -webkit-linear-gradient(top,#880000,#A40000);
    background-image: -moz-linear-gradient(top,#880000,#A40000);
    background-image: -ms-linear-gradient(top,#880000,#A40000);
    background-image: -o-linear-gradient(top,#880000,#A40000);
    background-image: linear-gradient(top,#880000,#A40000);
}
.ui-btn-up-Beacon a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-Beacon {
    border: 1px solid #000000;
    background: #A40000;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#A40000),to(#880000));
    background-image: -webkit-linear-gradient(top,#A40000,#880000);
    background-image: -moz-linear-gradient(top,#A40000,#880000);
    background-image: -ms-linear-gradient(top,#A40000,#880000);
    background-image: -o-linear-gradient(top,#A40000,#880000);
    background-image: linear-gradient(top,#A40000,#880000);
}
.ui-btn-hover-Beacon a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-Beacon {
    border: 1px solid #000000;
    background: #880000;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#880000),to(#880000));
    background-image: -webkit-linear-gradient(top,#880000,#880000);
    background-image: -moz-linear-gradient(top,#880000,#880000);
    background-image: -ms-linear-gradient(top,#880000,#880000);
    background-image: -o-linear-gradient(top,#880000,#880000);
    background-image: linear-gradient(top,#880000,#880000);
}
.ui-btn-down-Beacon a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-Beacon,
.ui-btn-hover-Beacon,
.ui-btn-down-Beacon {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-Beacon {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #880000;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-Beacon {
    border: 1px solid #880000;
    background: #880000;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#880000),to(#A40000));
    background-image: -webkit-linear-gradient(top,#880000,#A40000);
    background-image: -moz-linear-gradient(top,#880000,#A40000);
    background-image: -ms-linear-gradient(top,#880000,#A40000);
    background-image: -o-linear-gradient(top,#880000,#A40000);
    background-image: linear-gradient(top,#880000,#A40000);
}
.SectionHeaderText-a {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #000000;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-a {
    border: 1px solid #000000;
    background: #000000;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#000000),to(#3D3D3D));
    background-image: -webkit-linear-gradient(top,#000000,#3D3D3D);
    background-image: -moz-linear-gradient(top,#000000,#3D3D3D);
    background-image: -ms-linear-gradient(top,#000000,#3D3D3D);
    background-image: -o-linear-gradient(top,#000000,#3D3D3D);
    background-image: linear-gradient(top,#000000,#3D3D3D);
}
.SectionHeaderText-b {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #396b9e;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-b {
    border: 1px solid #396b9e;
    background: #396b9e;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#396b9e),to(#5f9cc5));
    background-image: -webkit-linear-gradient(top,#396b9e,#5f9cc5);
    background-image: -moz-linear-gradient(top,#396b9e,#5f9cc5);
    background-image: -ms-linear-gradient(top,#396b9e,#5f9cc5);
    background-image: -o-linear-gradient(top,#396b9e,#5f9cc5);
    background-image: linear-gradient(top,#396b9e,#5f9cc5);
}
.SectionHeaderText-c {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #FFFFFF;
    margin: 5px 10px 5px 10px;
    background-color: #eee;
    padding: 15px 15px 15px 15px;
    color: #000000;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #FFFFFF;
}
.text-sectionheader-c {
    border: 1px solid #eee;
    background: #eee;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#eee),to(#fdfdfd));
    background-image: -webkit-linear-gradient(top,#eee,#fdfdfd);
    background-image: -moz-linear-gradient(top,#eee,#fdfdfd);
    background-image: -ms-linear-gradient(top,#eee,#fdfdfd);
    background-image: -o-linear-gradient(top,#eee,#fdfdfd);
    background-image: linear-gradient(top,#eee,#fdfdfd);
}
.SectionHeaderText-d {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #FFFFFF;
    margin: 5px 10px 5px 10px;
    background-color: #FFFFFF;
    padding: 15px 15px 15px 15px;
    color: #000000;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #FFFFFF;
}
.text-sectionheader-d {
    border: 1px solid #FFFFFF;
    background: #FFFFFF;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#FFFFFF),to(#FFFFFF));
    background-image: -webkit-linear-gradient(top,#FFFFFF,#FFFFFF);
    background-image: -moz-linear-gradient(top,#FFFFFF,#FFFFFF);
    background-image: -ms-linear-gradient(top,#FFFFFF,#FFFFFF);
    background-image: -o-linear-gradient(top,#FFFFFF,#FFFFFF);
    background-image: linear-gradient(top,#FFFFFF,#FFFFFF);
}
.SectionHeaderText-e {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #FFFFFF;
    margin: 5px 10px 5px 10px;
    background-color: #fadb4e;
    padding: 15px 15px 15px 15px;
    color: #000000;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #FFFFFF;
}
.text-sectionheader-e {
    border: 1px solid #fadb4e;
    background: #fadb4e;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#fadb4e),to(#fceda7));
    background-image: -webkit-linear-gradient(top,#fadb4e,#fceda7);
    background-image: -moz-linear-gradient(top,#fadb4e,#fceda7);
    background-image: -ms-linear-gradient(top,#fadb4e,#fceda7);
    background-image: -o-linear-gradient(top,#fadb4e,#fceda7);
    background-image: linear-gradient(top,#fadb4e,#fceda7);
}
.ui-bar-DarkRed {
    border: 1px solid #880000;
    background: #880000;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#880000),to(#A40000));
    background-image: -webkit-linear-gradient(top,#880000,#A40000);
    background-image: -moz-linear-gradient(top,#880000,#A40000);
    background-image: -ms-linear-gradient(top,#880000,#A40000);
    background-image: -o-linear-gradient(top,#880000,#A40000);
    background-image: linear-gradient(top,#880000,#A40000);
}
.ui-bar-DarkRed,
.ui-bar-DarkRed input,
.ui-bar-DarkRed select,
.ui-bar-DarkRed textarea,
.ui-bar-DarkRed button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-DarkRed .ui-link-inherit { color: #FFFFFF }
.ui-bar-DarkRed .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-DarkRed {
    border: 1px solid #880000;
    background: #880000;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#880000),to(#880000));
    background-image: -webkit-linear-gradient(top,#880000,#880000);
    background-image: -moz-linear-gradient(top,#880000,#880000);
    background-image: -ms-linear-gradient(top,#880000,#880000);
    background-image: -o-linear-gradient(top,#880000,#880000);
    background-image: linear-gradient(top,#880000,#880000);
}
.ui-body-DarkRed,
.ui-body-DarkRed input,
.ui-body-DarkRed select,
.ui-body-DarkRed textarea,
.ui-body-DarkRed button { font-family: Helvetica,Arial,sans-serif }
.ui-body-DarkRed .ui-link-inherit { color: #FFFFFF }
.ui-body-DarkRed .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-DarkRed {
    border: 1px solid #880000;
    background: #880000;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#880000),to(#A40000));
    background-image: -webkit-linear-gradient(top,#880000,#A40000);
    background-image: -moz-linear-gradient(top,#880000,#A40000);
    background-image: -ms-linear-gradient(top,#880000,#A40000);
    background-image: -o-linear-gradient(top,#880000,#A40000);
    background-image: linear-gradient(top,#880000,#A40000);
}
.ui-btn-up-DarkRed a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-DarkRed {
    border: 1px solid #000000;
    background: #A40000;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#A40000),to(#880000));
    background-image: -webkit-linear-gradient(top,#A40000,#880000);
    background-image: -moz-linear-gradient(top,#A40000,#880000);
    background-image: -ms-linear-gradient(top,#A40000,#880000);
    background-image: -o-linear-gradient(top,#A40000,#880000);
    background-image: linear-gradient(top,#A40000,#880000);
}
.ui-btn-hover-DarkRed a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-DarkRed {
    border: 1px solid #000000;
    background: #880000;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#880000),to(#880000));
    background-image: -webkit-linear-gradient(top,#880000,#880000);
    background-image: -moz-linear-gradient(top,#880000,#880000);
    background-image: -ms-linear-gradient(top,#880000,#880000);
    background-image: -o-linear-gradient(top,#880000,#880000);
    background-image: linear-gradient(top,#880000,#880000);
}
.ui-btn-down-DarkRed a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-DarkRed,
.ui-btn-hover-DarkRed,
.ui-btn-down-DarkRed {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-DarkRed {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #880000;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-DarkRed {
    border: 1px solid #880000;
    background: #880000;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#880000),to(#A40000));
    background-image: -webkit-linear-gradient(top,#880000,#A40000);
    background-image: -moz-linear-gradient(top,#880000,#A40000);
    background-image: -ms-linear-gradient(top,#880000,#A40000);
    background-image: -o-linear-gradient(top,#880000,#A40000);
    background-image: linear-gradient(top,#880000,#A40000);
}
.ui-bar-DarkBrown {
    border: 1px solid #552B00;
    background: #552B00;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#552B00),to(#663300));
    background-image: -webkit-linear-gradient(top,#552B00,#663300);
    background-image: -moz-linear-gradient(top,#552B00,#663300);
    background-image: -ms-linear-gradient(top,#552B00,#663300);
    background-image: -o-linear-gradient(top,#552B00,#663300);
    background-image: linear-gradient(top,#552B00,#663300);
}
.ui-bar-DarkBrown,
.ui-bar-DarkBrown input,
.ui-bar-DarkBrown select,
.ui-bar-DarkBrown textarea,
.ui-bar-DarkBrown button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-DarkBrown .ui-link-inherit { color: #FFFFFF }
.ui-bar-DarkBrown .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-DarkBrown {
    border: 1px solid #552B00;
    background: #552B00;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#552B00),to(#552B00));
    background-image: -webkit-linear-gradient(top,#552B00,#552B00);
    background-image: -moz-linear-gradient(top,#552B00,#552B00);
    background-image: -ms-linear-gradient(top,#552B00,#552B00);
    background-image: -o-linear-gradient(top,#552B00,#552B00);
    background-image: linear-gradient(top,#552B00,#552B00);
}
.ui-body-DarkBrown,
.ui-body-DarkBrown input,
.ui-body-DarkBrown select,
.ui-body-DarkBrown textarea,
.ui-body-DarkBrown button { font-family: Helvetica,Arial,sans-serif }
.ui-body-DarkBrown .ui-link-inherit { color: #FFFFFF }
.ui-body-DarkBrown .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-DarkBrown {
    border: 1px solid #552B00;
    background: #552B00;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#552B00),to(#663300));
    background-image: -webkit-linear-gradient(top,#552B00,#663300);
    background-image: -moz-linear-gradient(top,#552B00,#663300);
    background-image: -ms-linear-gradient(top,#552B00,#663300);
    background-image: -o-linear-gradient(top,#552B00,#663300);
    background-image: linear-gradient(top,#552B00,#663300);
}
.ui-btn-up-DarkBrown a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-DarkBrown {
    border: 1px solid #000000;
    background: #663300;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#663300),to(#552B00));
    background-image: -webkit-linear-gradient(top,#663300,#552B00);
    background-image: -moz-linear-gradient(top,#663300,#552B00);
    background-image: -ms-linear-gradient(top,#663300,#552B00);
    background-image: -o-linear-gradient(top,#663300,#552B00);
    background-image: linear-gradient(top,#663300,#552B00);
}
.ui-btn-hover-DarkBrown a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-DarkBrown {
    border: 1px solid #000000;
    background: #552B00;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#552B00),to(#552B00));
    background-image: -webkit-linear-gradient(top,#552B00,#552B00);
    background-image: -moz-linear-gradient(top,#552B00,#552B00);
    background-image: -ms-linear-gradient(top,#552B00,#552B00);
    background-image: -o-linear-gradient(top,#552B00,#552B00);
    background-image: linear-gradient(top,#552B00,#552B00);
}
.ui-btn-down-DarkBrown a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-DarkBrown,
.ui-btn-hover-DarkBrown,
.ui-btn-down-DarkBrown {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-DarkBrown {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #552B00;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-DarkBrown {
    border: 1px solid #552B00;
    background: #552B00;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#552B00),to(#663300));
    background-image: -webkit-linear-gradient(top,#552B00,#663300);
    background-image: -moz-linear-gradient(top,#552B00,#663300);
    background-image: -ms-linear-gradient(top,#552B00,#663300);
    background-image: -o-linear-gradient(top,#552B00,#663300);
    background-image: linear-gradient(top,#552B00,#663300);
}
.ui-bar-DarkBlue {
    border: 1px solid #0B1966;
    background: #0B1966;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#0B1966),to(#1F60A9));
    background-image: -webkit-linear-gradient(top,#0B1966,#1F60A9);
    background-image: -moz-linear-gradient(top,#0B1966,#1F60A9);
    background-image: -ms-linear-gradient(top,#0B1966,#1F60A9);
    background-image: -o-linear-gradient(top,#0B1966,#1F60A9);
    background-image: linear-gradient(top,#0B1966,#1F60A9);
}
.ui-bar-DarkBlue,
.ui-bar-DarkBlue input,
.ui-bar-DarkBlue select,
.ui-bar-DarkBlue textarea,
.ui-bar-DarkBlue button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-DarkBlue .ui-link-inherit { color: #FFFFFF }
.ui-bar-DarkBlue .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-DarkBlue {
    border: 1px solid #0B1966;
    background: #0B1966;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#0B1966),to(#0B1966));
    background-image: -webkit-linear-gradient(top,#0B1966,#0B1966);
    background-image: -moz-linear-gradient(top,#0B1966,#0B1966);
    background-image: -ms-linear-gradient(top,#0B1966,#0B1966);
    background-image: -o-linear-gradient(top,#0B1966,#0B1966);
    background-image: linear-gradient(top,#0B1966,#0B1966);
}
.ui-body-DarkBlue,
.ui-body-DarkBlue input,
.ui-body-DarkBlue select,
.ui-body-DarkBlue textarea,
.ui-body-DarkBlue button { font-family: Helvetica,Arial,sans-serif }
.ui-body-DarkBlue .ui-link-inherit { color: #FFFFFF }
.ui-body-DarkBlue .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-DarkBlue {
    border: 1px solid #0B1966;
    background: #0B1966;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#0B1966),to(#1F60A9));
    background-image: -webkit-linear-gradient(top,#0B1966,#1F60A9);
    background-image: -moz-linear-gradient(top,#0B1966,#1F60A9);
    background-image: -ms-linear-gradient(top,#0B1966,#1F60A9);
    background-image: -o-linear-gradient(top,#0B1966,#1F60A9);
    background-image: linear-gradient(top,#0B1966,#1F60A9);
}
.ui-btn-up-DarkBlue a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-DarkBlue {
    border: 1px solid #000000;
    background: #1F60A9;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#1F60A9),to(#0B1966));
    background-image: -webkit-linear-gradient(top,#1F60A9,#0B1966);
    background-image: -moz-linear-gradient(top,#1F60A9,#0B1966);
    background-image: -ms-linear-gradient(top,#1F60A9,#0B1966);
    background-image: -o-linear-gradient(top,#1F60A9,#0B1966);
    background-image: linear-gradient(top,#1F60A9,#0B1966);
}
.ui-btn-hover-DarkBlue a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-DarkBlue {
    border: 1px solid #000000;
    background: #0B1966;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#0B1966),to(#0B1966));
    background-image: -webkit-linear-gradient(top,#0B1966,#0B1966);
    background-image: -moz-linear-gradient(top,#0B1966,#0B1966);
    background-image: -ms-linear-gradient(top,#0B1966,#0B1966);
    background-image: -o-linear-gradient(top,#0B1966,#0B1966);
    background-image: linear-gradient(top,#0B1966,#0B1966);
}
.ui-btn-down-DarkBlue a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-DarkBlue,
.ui-btn-hover-DarkBlue,
.ui-btn-down-DarkBlue {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-DarkBlue {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #0B1966;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-DarkBlue {
    border: 1px solid #0B1966;
    background: #0B1966;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#0B1966),to(#1F60A9));
    background-image: -webkit-linear-gradient(top,#0B1966,#1F60A9);
    background-image: -moz-linear-gradient(top,#0B1966,#1F60A9);
    background-image: -ms-linear-gradient(top,#0B1966,#1F60A9);
    background-image: -o-linear-gradient(top,#0B1966,#1F60A9);
    background-image: linear-gradient(top,#0B1966,#1F60A9);
}
.ui-bar-Orange {
    border: 1px solid #F74902;
    background: #F74902;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#F74902),to(#DD4402));
    background-image: -webkit-linear-gradient(top,#F74902,#DD4402);
    background-image: -moz-linear-gradient(top,#F74902,#DD4402);
    background-image: -ms-linear-gradient(top,#F74902,#DD4402);
    background-image: -o-linear-gradient(top,#F74902,#DD4402);
    background-image: linear-gradient(top,#F74902,#DD4402);
}
.ui-bar-Orange,
.ui-bar-Orange input,
.ui-bar-Orange select,
.ui-bar-Orange textarea,
.ui-bar-Orange button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-Orange .ui-link-inherit { color: #FFFFFF }
.ui-bar-Orange .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-Orange {
    border: 1px solid #F74902;
    background: #F74902;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#F74902),to(#F74902));
    background-image: -webkit-linear-gradient(top,#F74902,#F74902);
    background-image: -moz-linear-gradient(top,#F74902,#F74902);
    background-image: -ms-linear-gradient(top,#F74902,#F74902);
    background-image: -o-linear-gradient(top,#F74902,#F74902);
    background-image: linear-gradient(top,#F74902,#F74902);
}
.ui-body-Orange,
.ui-body-Orange input,
.ui-body-Orange select,
.ui-body-Orange textarea,
.ui-body-Orange button { font-family: Helvetica,Arial,sans-serif }
.ui-body-Orange .ui-link-inherit { color: #FFFFFF }
.ui-body-Orange .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-Orange {
    border: 1px solid #F74902;
    background: #F74902;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#F74902),to(#DD4402));
    background-image: -webkit-linear-gradient(top,#F74902,#DD4402);
    background-image: -moz-linear-gradient(top,#F74902,#DD4402);
    background-image: -ms-linear-gradient(top,#F74902,#DD4402);
    background-image: -o-linear-gradient(top,#F74902,#DD4402);
    background-image: linear-gradient(top,#F74902,#DD4402);
}
.ui-btn-up-Orange a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-Orange {
    border: 1px solid #000000;
    background: #DD4402;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#DD4402),to(#F74902));
    background-image: -webkit-linear-gradient(top,#DD4402,#F74902);
    background-image: -moz-linear-gradient(top,#DD4402,#F74902);
    background-image: -ms-linear-gradient(top,#DD4402,#F74902);
    background-image: -o-linear-gradient(top,#DD4402,#F74902);
    background-image: linear-gradient(top,#DD4402,#F74902);
}
.ui-btn-hover-Orange a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-Orange {
    border: 1px solid #000000;
    background: #F74902;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#F74902),to(#F74902));
    background-image: -webkit-linear-gradient(top,#F74902,#F74902);
    background-image: -moz-linear-gradient(top,#F74902,#F74902);
    background-image: -ms-linear-gradient(top,#F74902,#F74902);
    background-image: -o-linear-gradient(top,#F74902,#F74902);
    background-image: linear-gradient(top,#F74902,#F74902);
}
.ui-btn-down-Orange a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-Orange,
.ui-btn-hover-Orange,
.ui-btn-down-Orange {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-Orange {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #F74902;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-Orange {
    border: 1px solid #F74902;
    background: #F74902;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#F74902),to(#DD4402));
    background-image: -webkit-linear-gradient(top,#F74902,#DD4402);
    background-image: -moz-linear-gradient(top,#F74902,#DD4402);
    background-image: -ms-linear-gradient(top,#F74902,#DD4402);
    background-image: -o-linear-gradient(top,#F74902,#DD4402);
    background-image: linear-gradient(top,#F74902,#DD4402);
}
.ui-bar-Green {
    border: 1px solid #006600;
    background: #006600;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#006600),to(#008800));
    background-image: -webkit-linear-gradient(top,#006600,#008800);
    background-image: -moz-linear-gradient(top,#006600,#008800);
    background-image: -ms-linear-gradient(top,#006600,#008800);
    background-image: -o-linear-gradient(top,#006600,#008800);
    background-image: linear-gradient(top,#006600,#008800);
}
.ui-bar-Green,
.ui-bar-Green input,
.ui-bar-Green select,
.ui-bar-Green textarea,
.ui-bar-Green button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-Green .ui-link-inherit { color: #FFFFFF }
.ui-bar-Green .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-Green {
    border: 1px solid #006600;
    background: #006600;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#006600),to(#006600));
    background-image: -webkit-linear-gradient(top,#006600,#006600);
    background-image: -moz-linear-gradient(top,#006600,#006600);
    background-image: -ms-linear-gradient(top,#006600,#006600);
    background-image: -o-linear-gradient(top,#006600,#006600);
    background-image: linear-gradient(top,#006600,#006600);
}
.ui-body-Green,
.ui-body-Green input,
.ui-body-Green select,
.ui-body-Green textarea,
.ui-body-Green button { font-family: Helvetica,Arial,sans-serif }
.ui-body-Green .ui-link-inherit { color: #FFFFFF }
.ui-body-Green .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-Green {
    border: 1px solid #006600;
    background: #006600;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#006600),to(#008800));
    background-image: -webkit-linear-gradient(top,#006600,#008800);
    background-image: -moz-linear-gradient(top,#006600,#008800);
    background-image: -ms-linear-gradient(top,#006600,#008800);
    background-image: -o-linear-gradient(top,#006600,#008800);
    background-image: linear-gradient(top,#006600,#008800);
}
.ui-btn-up-Green a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-Green {
    border: 1px solid #000000;
    background: #008800;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#008800),to(#006600));
    background-image: -webkit-linear-gradient(top,#008800,#006600);
    background-image: -moz-linear-gradient(top,#008800,#006600);
    background-image: -ms-linear-gradient(top,#008800,#006600);
    background-image: -o-linear-gradient(top,#008800,#006600);
    background-image: linear-gradient(top,#008800,#006600);
}
.ui-btn-hover-Green a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-Green {
    border: 1px solid #000000;
    background: #006600;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#006600),to(#006600));
    background-image: -webkit-linear-gradient(top,#006600,#006600);
    background-image: -moz-linear-gradient(top,#006600,#006600);
    background-image: -ms-linear-gradient(top,#006600,#006600);
    background-image: -o-linear-gradient(top,#006600,#006600);
    background-image: linear-gradient(top,#006600,#006600);
}
.ui-btn-down-Green a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-Green,
.ui-btn-hover-Green,
.ui-btn-down-Green {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-Green {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #006600;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-Green {
    border: 1px solid #006600;
    background: #006600;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#006600),to(#008800));
    background-image: -webkit-linear-gradient(top,#006600,#008800);
    background-image: -moz-linear-gradient(top,#006600,#008800);
    background-image: -ms-linear-gradient(top,#006600,#008800);
    background-image: -o-linear-gradient(top,#006600,#008800);
    background-image: linear-gradient(top,#006600,#008800);
}
.ui-bar-DarkGreen {
    border: 1px solid #002F00;
    background: #002F00;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#002F00),to(#005000));
    background-image: -webkit-linear-gradient(top,#002F00,#005000);
    background-image: -moz-linear-gradient(top,#002F00,#005000);
    background-image: -ms-linear-gradient(top,#002F00,#005000);
    background-image: -o-linear-gradient(top,#002F00,#005000);
    background-image: linear-gradient(top,#002F00,#005000);
}
.ui-bar-DarkGreen,
.ui-bar-DarkGreen input,
.ui-bar-DarkGreen select,
.ui-bar-DarkGreen textarea,
.ui-bar-DarkGreen button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-DarkGreen .ui-link-inherit { color: #FFFFFF }
.ui-bar-DarkGreen .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-DarkGreen {
    border: 1px solid #002F00;
    background: #002F00;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#002F00),to(#002F00));
    background-image: -webkit-linear-gradient(top,#002F00,#002F00);
    background-image: -moz-linear-gradient(top,#002F00,#002F00);
    background-image: -ms-linear-gradient(top,#002F00,#002F00);
    background-image: -o-linear-gradient(top,#002F00,#002F00);
    background-image: linear-gradient(top,#002F00,#002F00);
}
.ui-body-DarkGreen,
.ui-body-DarkGreen input,
.ui-body-DarkGreen select,
.ui-body-DarkGreen textarea,
.ui-body-DarkGreen button { font-family: Helvetica,Arial,sans-serif }
.ui-body-DarkGreen .ui-link-inherit { color: #FFFFFF }
.ui-body-DarkGreen .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-DarkGreen {
    border: 1px solid #002F00;
    background: #002F00;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#002F00),to(#005000));
    background-image: -webkit-linear-gradient(top,#002F00,#005000);
    background-image: -moz-linear-gradient(top,#002F00,#005000);
    background-image: -ms-linear-gradient(top,#002F00,#005000);
    background-image: -o-linear-gradient(top,#002F00,#005000);
    background-image: linear-gradient(top,#002F00,#005000);
}
.ui-btn-up-DarkGreen a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-DarkGreen {
    border: 1px solid #000000;
    background: #005000;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#005000),to(#002F00));
    background-image: -webkit-linear-gradient(top,#005000,#002F00);
    background-image: -moz-linear-gradient(top,#005000,#002F00);
    background-image: -ms-linear-gradient(top,#005000,#002F00);
    background-image: -o-linear-gradient(top,#005000,#002F00);
    background-image: linear-gradient(top,#005000,#002F00);
}
.ui-btn-hover-DarkGreen a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-DarkGreen {
    border: 1px solid #000000;
    background: #002F00;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#002F00),to(#002F00));
    background-image: -webkit-linear-gradient(top,#002F00,#002F00);
    background-image: -moz-linear-gradient(top,#002F00,#002F00);
    background-image: -ms-linear-gradient(top,#002F00,#002F00);
    background-image: -o-linear-gradient(top,#002F00,#002F00);
    background-image: linear-gradient(top,#002F00,#002F00);
}
.ui-btn-down-DarkGreen a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-DarkGreen,
.ui-btn-hover-DarkGreen,
.ui-btn-down-DarkGreen {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-DarkGreen {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #002F00;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-DarkGreen {
    border: 1px solid #002F00;
    background: #002F00;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#002F00),to(#005000));
    background-image: -webkit-linear-gradient(top,#002F00,#005000);
    background-image: -moz-linear-gradient(top,#002F00,#005000);
    background-image: -ms-linear-gradient(top,#002F00,#005000);
    background-image: -o-linear-gradient(top,#002F00,#005000);
    background-image: linear-gradient(top,#002F00,#005000);
}
.ui-bar-DarkPurple {
    border: 1px solid #330033;
    background: #330033;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#330033),to(#500050));
    background-image: -webkit-linear-gradient(top,#330033,#500050);
    background-image: -moz-linear-gradient(top,#330033,#500050);
    background-image: -ms-linear-gradient(top,#330033,#500050);
    background-image: -o-linear-gradient(top,#330033,#500050);
    background-image: linear-gradient(top,#330033,#500050);
}
.ui-bar-DarkPurple,
.ui-bar-DarkPurple input,
.ui-bar-DarkPurple select,
.ui-bar-DarkPurple textarea,
.ui-bar-DarkPurple button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-DarkPurple .ui-link-inherit { color: #FFFFFF }
.ui-bar-DarkPurple .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-DarkPurple {
    border: 1px solid #330033;
    background: #330033;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#330033),to(#330033));
    background-image: -webkit-linear-gradient(top,#330033,#330033);
    background-image: -moz-linear-gradient(top,#330033,#330033);
    background-image: -ms-linear-gradient(top,#330033,#330033);
    background-image: -o-linear-gradient(top,#330033,#330033);
    background-image: linear-gradient(top,#330033,#330033);
}
.ui-body-DarkPurple,
.ui-body-DarkPurple input,
.ui-body-DarkPurple select,
.ui-body-DarkPurple textarea,
.ui-body-DarkPurple button { font-family: Helvetica,Arial,sans-serif }
.ui-body-DarkPurple .ui-link-inherit { color: #FFFFFF }
.ui-body-DarkPurple .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-DarkPurple {
    border: 1px solid #330033;
    background: #330033;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#330033),to(#500050));
    background-image: -webkit-linear-gradient(top,#330033,#500050);
    background-image: -moz-linear-gradient(top,#330033,#500050);
    background-image: -ms-linear-gradient(top,#330033,#500050);
    background-image: -o-linear-gradient(top,#330033,#500050);
    background-image: linear-gradient(top,#330033,#500050);
}
.ui-btn-up-DarkPurple a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-DarkPurple {
    border: 1px solid #000000;
    background: #500050;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#500050),to(#330033));
    background-image: -webkit-linear-gradient(top,#500050,#330033);
    background-image: -moz-linear-gradient(top,#500050,#330033);
    background-image: -ms-linear-gradient(top,#500050,#330033);
    background-image: -o-linear-gradient(top,#500050,#330033);
    background-image: linear-gradient(top,#500050,#330033);
}
.ui-btn-hover-DarkPurple a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-DarkPurple {
    border: 1px solid #000000;
    background: #330033;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#330033),to(#330033));
    background-image: -webkit-linear-gradient(top,#330033,#330033);
    background-image: -moz-linear-gradient(top,#330033,#330033);
    background-image: -ms-linear-gradient(top,#330033,#330033);
    background-image: -o-linear-gradient(top,#330033,#330033);
    background-image: linear-gradient(top,#330033,#330033);
}
.ui-btn-down-DarkPurple a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-DarkPurple,
.ui-btn-hover-DarkPurple,
.ui-btn-down-DarkPurple {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-DarkPurple {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #330033;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-DarkPurple {
    border: 1px solid #330033;
    background: #330033;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#330033),to(#500050));
    background-image: -webkit-linear-gradient(top,#330033,#500050);
    background-image: -moz-linear-gradient(top,#330033,#500050);
    background-image: -ms-linear-gradient(top,#330033,#500050);
    background-image: -o-linear-gradient(top,#330033,#500050);
    background-image: linear-gradient(top,#330033,#500050);
}
.ui-bar-Purple {
    border: 1px solid #8A008A;
    background: #8A008A;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#8A008A),to(#A100A1));
    background-image: -webkit-linear-gradient(top,#8A008A,#A100A1);
    background-image: -moz-linear-gradient(top,#8A008A,#A100A1);
    background-image: -ms-linear-gradient(top,#8A008A,#A100A1);
    background-image: -o-linear-gradient(top,#8A008A,#A100A1);
    background-image: linear-gradient(top,#8A008A,#A100A1);
}
.ui-bar-Purple,
.ui-bar-Purple input,
.ui-bar-Purple select,
.ui-bar-Purple textarea,
.ui-bar-Purple button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-Purple .ui-link-inherit { color: #FFFFFF }
.ui-bar-Purple .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-Purple {
    border: 1px solid #8A008A;
    background: #8A008A;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#8A008A),to(#8A008A));
    background-image: -webkit-linear-gradient(top,#8A008A,#8A008A);
    background-image: -moz-linear-gradient(top,#8A008A,#8A008A);
    background-image: -ms-linear-gradient(top,#8A008A,#8A008A);
    background-image: -o-linear-gradient(top,#8A008A,#8A008A);
    background-image: linear-gradient(top,#8A008A,#8A008A);
}
.ui-body-Purple,
.ui-body-Purple input,
.ui-body-Purple select,
.ui-body-Purple textarea,
.ui-body-Purple button { font-family: Helvetica,Arial,sans-serif }
.ui-body-Purple .ui-link-inherit { color: #FFFFFF }
.ui-body-Purple .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-Purple {
    border: 1px solid #8A008A;
    background: #8A008A;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#8A008A),to(#A100A1));
    background-image: -webkit-linear-gradient(top,#8A008A,#A100A1);
    background-image: -moz-linear-gradient(top,#8A008A,#A100A1);
    background-image: -ms-linear-gradient(top,#8A008A,#A100A1);
    background-image: -o-linear-gradient(top,#8A008A,#A100A1);
    background-image: linear-gradient(top,#8A008A,#A100A1);
}
.ui-btn-up-Purple a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-Purple {
    border: 1px solid #000000;
    background: #A100A1;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#A100A1),to(#8A008A));
    background-image: -webkit-linear-gradient(top,#A100A1,#8A008A);
    background-image: -moz-linear-gradient(top,#A100A1,#8A008A);
    background-image: -ms-linear-gradient(top,#A100A1,#8A008A);
    background-image: -o-linear-gradient(top,#A100A1,#8A008A);
    background-image: linear-gradient(top,#A100A1,#8A008A);
}
.ui-btn-hover-Purple a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-Purple {
    border: 1px solid #000000;
    background: #8A008A;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#8A008A),to(#8A008A));
    background-image: -webkit-linear-gradient(top,#8A008A,#8A008A);
    background-image: -moz-linear-gradient(top,#8A008A,#8A008A);
    background-image: -ms-linear-gradient(top,#8A008A,#8A008A);
    background-image: -o-linear-gradient(top,#8A008A,#8A008A);
    background-image: linear-gradient(top,#8A008A,#8A008A);
}
.ui-btn-down-Purple a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-Purple,
.ui-btn-hover-Purple,
.ui-btn-down-Purple {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-Purple {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #8A008A;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-Purple {
    border: 1px solid #8A008A;
    background: #8A008A;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#8A008A),to(#A100A1));
    background-image: -webkit-linear-gradient(top,#8A008A,#A100A1);
    background-image: -moz-linear-gradient(top,#8A008A,#A100A1);
    background-image: -ms-linear-gradient(top,#8A008A,#A100A1);
    background-image: -o-linear-gradient(top,#8A008A,#A100A1);
    background-image: linear-gradient(top,#8A008A,#A100A1);
}
.ui-bar-DarkBlack {
    border: 1px solid #000000;
    background: #000000;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#000000),to(#3D3D3D));
    background-image: -webkit-linear-gradient(top,#000000,#3D3D3D);
    background-image: -moz-linear-gradient(top,#000000,#3D3D3D);
    background-image: -ms-linear-gradient(top,#000000,#3D3D3D);
    background-image: -o-linear-gradient(top,#000000,#3D3D3D);
    background-image: linear-gradient(top,#000000,#3D3D3D);
}
.ui-bar-DarkBlack,
.ui-bar-DarkBlack input,
.ui-bar-DarkBlack select,
.ui-bar-DarkBlack textarea,
.ui-bar-DarkBlack button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-DarkBlack .ui-link-inherit { color: #FFFFFF }
.ui-bar-DarkBlack .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-DarkBlack {
    border: 1px solid #000000;
    background: #000000;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#000000),to(#000000));
    background-image: -webkit-linear-gradient(top,#000000,#000000);
    background-image: -moz-linear-gradient(top,#000000,#000000);
    background-image: -ms-linear-gradient(top,#000000,#000000);
    background-image: -o-linear-gradient(top,#000000,#000000);
    background-image: linear-gradient(top,#000000,#000000);
}
.ui-body-DarkBlack,
.ui-body-DarkBlack input,
.ui-body-DarkBlack select,
.ui-body-DarkBlack textarea,
.ui-body-DarkBlack button { font-family: Helvetica,Arial,sans-serif }
.ui-body-DarkBlack .ui-link-inherit { color: #FFFFFF }
.ui-body-DarkBlack .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-DarkBlack {
    border: 1px solid #000000;
    background: #000000;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#000000),to(#3D3D3D));
    background-image: -webkit-linear-gradient(top,#000000,#3D3D3D);
    background-image: -moz-linear-gradient(top,#000000,#3D3D3D);
    background-image: -ms-linear-gradient(top,#000000,#3D3D3D);
    background-image: -o-linear-gradient(top,#000000,#3D3D3D);
    background-image: linear-gradient(top,#000000,#3D3D3D);
}
.ui-btn-up-DarkBlack a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-DarkBlack {
    border: 1px solid #000000;
    background: #3D3D3D;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#3D3D3D),to(#000000));
    background-image: -webkit-linear-gradient(top,#3D3D3D,#000000);
    background-image: -moz-linear-gradient(top,#3D3D3D,#000000);
    background-image: -ms-linear-gradient(top,#3D3D3D,#000000);
    background-image: -o-linear-gradient(top,#3D3D3D,#000000);
    background-image: linear-gradient(top,#3D3D3D,#000000);
}
.ui-btn-hover-DarkBlack a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-DarkBlack {
    border: 1px solid #000000;
    background: #000000;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#000000),to(#000000));
    background-image: -webkit-linear-gradient(top,#000000,#000000);
    background-image: -moz-linear-gradient(top,#000000,#000000);
    background-image: -ms-linear-gradient(top,#000000,#000000);
    background-image: -o-linear-gradient(top,#000000,#000000);
    background-image: linear-gradient(top,#000000,#000000);
}
.ui-btn-down-DarkBlack a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-DarkBlack,
.ui-btn-hover-DarkBlack,
.ui-btn-down-DarkBlack {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-DarkBlack {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #000000;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-DarkBlack {
    border: 1px solid #000000;
    background: #000000;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#000000),to(#3D3D3D));
    background-image: -webkit-linear-gradient(top,#000000,#3D3D3D);
    background-image: -moz-linear-gradient(top,#000000,#3D3D3D);
    background-image: -ms-linear-gradient(top,#000000,#3D3D3D);
    background-image: -o-linear-gradient(top,#000000,#3D3D3D);
    background-image: linear-gradient(top,#000000,#3D3D3D);
}
.ui-bar-DarkGrey {
    border: 1px solid #333333;
    background: #333333;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#333333),to(#5D5D5D));
    background-image: -webkit-linear-gradient(top,#333333,#5D5D5D);
    background-image: -moz-linear-gradient(top,#333333,#5D5D5D);
    background-image: -ms-linear-gradient(top,#333333,#5D5D5D);
    background-image: -o-linear-gradient(top,#333333,#5D5D5D);
    background-image: linear-gradient(top,#333333,#5D5D5D);
}
.ui-bar-DarkGrey,
.ui-bar-DarkGrey input,
.ui-bar-DarkGrey select,
.ui-bar-DarkGrey textarea,
.ui-bar-DarkGrey button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-DarkGrey .ui-link-inherit { color: #FFFFFF }
.ui-bar-DarkGrey .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-DarkGrey {
    border: 1px solid #333333;
    background: #333333;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#333333),to(#333333));
    background-image: -webkit-linear-gradient(top,#333333,#333333);
    background-image: -moz-linear-gradient(top,#333333,#333333);
    background-image: -ms-linear-gradient(top,#333333,#333333);
    background-image: -o-linear-gradient(top,#333333,#333333);
    background-image: linear-gradient(top,#333333,#333333);
}
.ui-body-DarkGrey,
.ui-body-DarkGrey input,
.ui-body-DarkGrey select,
.ui-body-DarkGrey textarea,
.ui-body-DarkGrey button { font-family: Helvetica,Arial,sans-serif }
.ui-body-DarkGrey .ui-link-inherit { color: #FFFFFF }
.ui-body-DarkGrey .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-DarkGrey {
    border: 1px solid #333333;
    background: #333333;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#333333),to(#5D5D5D));
    background-image: -webkit-linear-gradient(top,#333333,#5D5D5D);
    background-image: -moz-linear-gradient(top,#333333,#5D5D5D);
    background-image: -ms-linear-gradient(top,#333333,#5D5D5D);
    background-image: -o-linear-gradient(top,#333333,#5D5D5D);
    background-image: linear-gradient(top,#333333,#5D5D5D);
}
.ui-btn-up-DarkGrey a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-DarkGrey {
    border: 1px solid #000000;
    background: #5D5D5D;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#5D5D5D),to(#333333));
    background-image: -webkit-linear-gradient(top,#5D5D5D,#333333);
    background-image: -moz-linear-gradient(top,#5D5D5D,#333333);
    background-image: -ms-linear-gradient(top,#5D5D5D,#333333);
    background-image: -o-linear-gradient(top,#5D5D5D,#333333);
    background-image: linear-gradient(top,#5D5D5D,#333333);
}
.ui-btn-hover-DarkGrey a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-DarkGrey {
    border: 1px solid #000000;
    background: #333333;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#333333),to(#333333));
    background-image: -webkit-linear-gradient(top,#333333,#333333);
    background-image: -moz-linear-gradient(top,#333333,#333333);
    background-image: -ms-linear-gradient(top,#333333,#333333);
    background-image: -o-linear-gradient(top,#333333,#333333);
    background-image: linear-gradient(top,#333333,#333333);
}
.ui-btn-down-DarkGrey a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-DarkGrey,
.ui-btn-hover-DarkGrey,
.ui-btn-down-DarkGrey {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-DarkGrey {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #333333;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-DarkGrey {
    border: 1px solid #333333;
    background: #333333;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#333333),to(#5D5D5D));
    background-image: -webkit-linear-gradient(top,#333333,#5D5D5D);
    background-image: -moz-linear-gradient(top,#333333,#5D5D5D);
    background-image: -ms-linear-gradient(top,#333333,#5D5D5D);
    background-image: -o-linear-gradient(top,#333333,#5D5D5D);
    background-image: linear-gradient(top,#333333,#5D5D5D);
}
.ui-bar-Silver {
    border: 1px solid #818181;
    background: #818181;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#818181),to(#B9B9B9));
    background-image: -webkit-linear-gradient(top,#818181,#B9B9B9);
    background-image: -moz-linear-gradient(top,#818181,#B9B9B9);
    background-image: -ms-linear-gradient(top,#818181,#B9B9B9);
    background-image: -o-linear-gradient(top,#818181,#B9B9B9);
    background-image: linear-gradient(top,#818181,#B9B9B9);
}
.ui-bar-Silver,
.ui-bar-Silver input,
.ui-bar-Silver select,
.ui-bar-Silver textarea,
.ui-bar-Silver button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-Silver .ui-link-inherit { color: #FFFFFF }
.ui-bar-Silver .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-Silver {
    border: 1px solid #818181;
    background: #818181;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#818181),to(#818181));
    background-image: -webkit-linear-gradient(top,#818181,#818181);
    background-image: -moz-linear-gradient(top,#818181,#818181);
    background-image: -ms-linear-gradient(top,#818181,#818181);
    background-image: -o-linear-gradient(top,#818181,#818181);
    background-image: linear-gradient(top,#818181,#818181);
}
.ui-body-Silver,
.ui-body-Silver input,
.ui-body-Silver select,
.ui-body-Silver textarea,
.ui-body-Silver button { font-family: Helvetica,Arial,sans-serif }
.ui-body-Silver .ui-link-inherit { color: #FFFFFF }
.ui-body-Silver .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-Silver {
    border: 1px solid #818181;
    background: #818181;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#818181),to(#B9B9B9));
    background-image: -webkit-linear-gradient(top,#818181,#B9B9B9);
    background-image: -moz-linear-gradient(top,#818181,#B9B9B9);
    background-image: -ms-linear-gradient(top,#818181,#B9B9B9);
    background-image: -o-linear-gradient(top,#818181,#B9B9B9);
    background-image: linear-gradient(top,#818181,#B9B9B9);
}
.ui-btn-up-Silver a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-Silver {
    border: 1px solid #000000;
    background: #B9B9B9;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#B9B9B9),to(#818181));
    background-image: -webkit-linear-gradient(top,#B9B9B9,#818181);
    background-image: -moz-linear-gradient(top,#B9B9B9,#818181);
    background-image: -ms-linear-gradient(top,#B9B9B9,#818181);
    background-image: -o-linear-gradient(top,#B9B9B9,#818181);
    background-image: linear-gradient(top,#B9B9B9,#818181);
}
.ui-btn-hover-Silver a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-Silver {
    border: 1px solid #000000;
    background: #818181;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#818181),to(#818181));
    background-image: -webkit-linear-gradient(top,#818181,#818181);
    background-image: -moz-linear-gradient(top,#818181,#818181);
    background-image: -ms-linear-gradient(top,#818181,#818181);
    background-image: -o-linear-gradient(top,#818181,#818181);
    background-image: linear-gradient(top,#818181,#818181);
}
.ui-btn-down-Silver a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-Silver,
.ui-btn-hover-Silver,
.ui-btn-down-Silver {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-Silver {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #818181;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-Silver {
    border: 1px solid #818181;
    background: #818181;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#818181),to(#B9B9B9));
    background-image: -webkit-linear-gradient(top,#818181,#B9B9B9);
    background-image: -moz-linear-gradient(top,#818181,#B9B9B9);
    background-image: -ms-linear-gradient(top,#818181,#B9B9B9);
    background-image: -o-linear-gradient(top,#818181,#B9B9B9);
    background-image: linear-gradient(top,#818181,#B9B9B9);
}
.ui-bar-LightGreen {
    border: 1px solid #25B615;
    background: #25B615;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#25B615),to(#819339));
    background-image: -webkit-linear-gradient(top,#25B615,#819339);
    background-image: -moz-linear-gradient(top,#25B615,#819339);
    background-image: -ms-linear-gradient(top,#25B615,#819339);
    background-image: -o-linear-gradient(top,#25B615,#819339);
    background-image: linear-gradient(top,#25B615,#819339);
}
.ui-bar-LightGreen,
.ui-bar-LightGreen input,
.ui-bar-LightGreen select,
.ui-bar-LightGreen textarea,
.ui-bar-LightGreen button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-LightGreen .ui-link-inherit { color: #FFFFFF }
.ui-bar-LightGreen .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-LightGreen {
    border: 1px solid #25B615;
    background: #25B615;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#25B615),to(#25B615));
    background-image: -webkit-linear-gradient(top,#25B615,#25B615);
    background-image: -moz-linear-gradient(top,#25B615,#25B615);
    background-image: -ms-linear-gradient(top,#25B615,#25B615);
    background-image: -o-linear-gradient(top,#25B615,#25B615);
    background-image: linear-gradient(top,#25B615,#25B615);
}
.ui-body-LightGreen,
.ui-body-LightGreen input,
.ui-body-LightGreen select,
.ui-body-LightGreen textarea,
.ui-body-LightGreen button { font-family: Helvetica,Arial,sans-serif }
.ui-body-LightGreen .ui-link-inherit { color: #FFFFFF }
.ui-body-LightGreen .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-LightGreen {
    border: 1px solid #25B615;
    background: #25B615;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#25B615),to(#819339));
    background-image: -webkit-linear-gradient(top,#25B615,#819339);
    background-image: -moz-linear-gradient(top,#25B615,#819339);
    background-image: -ms-linear-gradient(top,#25B615,#819339);
    background-image: -o-linear-gradient(top,#25B615,#819339);
    background-image: linear-gradient(top,#25B615,#819339);
}
.ui-btn-up-LightGreen a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-LightGreen {
    border: 1px solid #000000;
    background: #819339;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#819339),to(#25B615));
    background-image: -webkit-linear-gradient(top,#819339,#25B615);
    background-image: -moz-linear-gradient(top,#819339,#25B615);
    background-image: -ms-linear-gradient(top,#819339,#25B615);
    background-image: -o-linear-gradient(top,#819339,#25B615);
    background-image: linear-gradient(top,#819339,#25B615);
}
.ui-btn-hover-LightGreen a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-LightGreen {
    border: 1px solid #000000;
    background: #25B615;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#25B615),to(#25B615));
    background-image: -webkit-linear-gradient(top,#25B615,#25B615);
    background-image: -moz-linear-gradient(top,#25B615,#25B615);
    background-image: -ms-linear-gradient(top,#25B615,#25B615);
    background-image: -o-linear-gradient(top,#25B615,#25B615);
    background-image: linear-gradient(top,#25B615,#25B615);
}
.ui-btn-down-LightGreen a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-LightGreen,
.ui-btn-hover-LightGreen,
.ui-btn-down-LightGreen {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-LightGreen {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #25B615;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-LightGreen {
    border: 1px solid #25B615;
    background: #25B615;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#25B615),to(#819339));
    background-image: -webkit-linear-gradient(top,#25B615,#819339);
    background-image: -moz-linear-gradient(top,#25B615,#819339);
    background-image: -ms-linear-gradient(top,#25B615,#819339);
    background-image: -o-linear-gradient(top,#25B615,#819339);
    background-image: linear-gradient(top,#25B615,#819339);
}
.ui-bar-OrangeLight {
    border: 1px solid #E6823E;
    background: #E6823E;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#E6823E),to(#E46B1B));
    background-image: -webkit-linear-gradient(top,#E6823E,#E46B1B);
    background-image: -moz-linear-gradient(top,#E6823E,#E46B1B);
    background-image: -ms-linear-gradient(top,#E6823E,#E46B1B);
    background-image: -o-linear-gradient(top,#E6823E,#E46B1B);
    background-image: linear-gradient(top,#E6823E,#E46B1B);
}
.ui-bar-OrangeLight,
.ui-bar-OrangeLight input,
.ui-bar-OrangeLight select,
.ui-bar-OrangeLight textarea,
.ui-bar-OrangeLight button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-OrangeLight .ui-link-inherit { color: #FFFFFF }
.ui-bar-OrangeLight .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-OrangeLight {
    border: 1px solid #E6823E;
    background: #E6823E;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#E6823E),to(#E6823E));
    background-image: -webkit-linear-gradient(top,#E6823E,#E6823E);
    background-image: -moz-linear-gradient(top,#E6823E,#E6823E);
    background-image: -ms-linear-gradient(top,#E6823E,#E6823E);
    background-image: -o-linear-gradient(top,#E6823E,#E6823E);
    background-image: linear-gradient(top,#E6823E,#E6823E);
}
.ui-body-OrangeLight,
.ui-body-OrangeLight input,
.ui-body-OrangeLight select,
.ui-body-OrangeLight textarea,
.ui-body-OrangeLight button { font-family: Helvetica,Arial,sans-serif }
.ui-body-OrangeLight .ui-link-inherit { color: #FFFFFF }
.ui-body-OrangeLight .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-OrangeLight {
    border: 1px solid #E6823E;
    background: #E6823E;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#E6823E),to(#E46B1B));
    background-image: -webkit-linear-gradient(top,#E6823E,#E46B1B);
    background-image: -moz-linear-gradient(top,#E6823E,#E46B1B);
    background-image: -ms-linear-gradient(top,#E6823E,#E46B1B);
    background-image: -o-linear-gradient(top,#E6823E,#E46B1B);
    background-image: linear-gradient(top,#E6823E,#E46B1B);
}
.ui-btn-up-OrangeLight a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-OrangeLight {
    border: 1px solid #000000;
    background: #E46B1B;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#E46B1B),to(#E6823E));
    background-image: -webkit-linear-gradient(top,#E46B1B,#E6823E);
    background-image: -moz-linear-gradient(top,#E46B1B,#E6823E);
    background-image: -ms-linear-gradient(top,#E46B1B,#E6823E);
    background-image: -o-linear-gradient(top,#E46B1B,#E6823E);
    background-image: linear-gradient(top,#E46B1B,#E6823E);
}
.ui-btn-hover-OrangeLight a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-OrangeLight {
    border: 1px solid #000000;
    background: #E6823E;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#E6823E),to(#E6823E));
    background-image: -webkit-linear-gradient(top,#E6823E,#E6823E);
    background-image: -moz-linear-gradient(top,#E6823E,#E6823E);
    background-image: -ms-linear-gradient(top,#E6823E,#E6823E);
    background-image: -o-linear-gradient(top,#E6823E,#E6823E);
    background-image: linear-gradient(top,#E6823E,#E6823E);
}
.ui-btn-down-OrangeLight a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-OrangeLight,
.ui-btn-hover-OrangeLight,
.ui-btn-down-OrangeLight {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-OrangeLight {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #E6823E;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-OrangeLight {
    border: 1px solid #E6823E;
    background: #E6823E;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#E6823E),to(#E46B1B));
    background-image: -webkit-linear-gradient(top,#E6823E,#E46B1B);
    background-image: -moz-linear-gradient(top,#E6823E,#E46B1B);
    background-image: -ms-linear-gradient(top,#E6823E,#E46B1B);
    background-image: -o-linear-gradient(top,#E6823E,#E46B1B);
    background-image: linear-gradient(top,#E6823E,#E46B1B);
}
.ui-bar-LightGreen2 {
    border: 1px solid #91A33F;
    background: #91A33F;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#91A33F),to(#91A33F));
    background-image: -webkit-linear-gradient(top,#91A33F,#91A33F);
    background-image: -moz-linear-gradient(top,#91A33F,#91A33F);
    background-image: -ms-linear-gradient(top,#91A33F,#91A33F);
    background-image: -o-linear-gradient(top,#91A33F,#91A33F);
    background-image: linear-gradient(top,#91A33F,#91A33F);
}
.ui-bar-LightGreen2,
.ui-bar-LightGreen2 input,
.ui-bar-LightGreen2 select,
.ui-bar-LightGreen2 textarea,
.ui-bar-LightGreen2 button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-LightGreen2 .ui-link-inherit { color: #FFFFFF }
.ui-bar-LightGreen2 .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-LightGreen2 {
    border: 1px solid #91A33F;
    background: #91A33F;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#91A33F),to(#91A33F));
    background-image: -webkit-linear-gradient(top,#91A33F,#91A33F);
    background-image: -moz-linear-gradient(top,#91A33F,#91A33F);
    background-image: -ms-linear-gradient(top,#91A33F,#91A33F);
    background-image: -o-linear-gradient(top,#91A33F,#91A33F);
    background-image: linear-gradient(top,#91A33F,#91A33F);
}
.ui-body-LightGreen2,
.ui-body-LightGreen2 input,
.ui-body-LightGreen2 select,
.ui-body-LightGreen2 textarea,
.ui-body-LightGreen2 button { font-family: Helvetica,Arial,sans-serif }
.ui-body-LightGreen2 .ui-link-inherit { color: #FFFFFF }
.ui-body-LightGreen2 .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-LightGreen2 {
    border: 1px solid #91A33F;
    background: #91A33F;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#91A33F),to(#91A33F));
    background-image: -webkit-linear-gradient(top,#91A33F,#91A33F);
    background-image: -moz-linear-gradient(top,#91A33F,#91A33F);
    background-image: -ms-linear-gradient(top,#91A33F,#91A33F);
    background-image: -o-linear-gradient(top,#91A33F,#91A33F);
    background-image: linear-gradient(top,#91A33F,#91A33F);
}
.ui-btn-up-LightGreen2 a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-LightGreen2 {
    border: 1px solid #000000;
    background: #91A33F;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#91A33F),to(#91A33F));
    background-image: -webkit-linear-gradient(top,#91A33F,#91A33F);
    background-image: -moz-linear-gradient(top,#91A33F,#91A33F);
    background-image: -ms-linear-gradient(top,#91A33F,#91A33F);
    background-image: -o-linear-gradient(top,#91A33F,#91A33F);
    background-image: linear-gradient(top,#91A33F,#91A33F);
}
.ui-btn-hover-LightGreen2 a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-LightGreen2 {
    border: 1px solid #000000;
    background: #91A33F;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#91A33F),to(#91A33F));
    background-image: -webkit-linear-gradient(top,#91A33F,#91A33F);
    background-image: -moz-linear-gradient(top,#91A33F,#91A33F);
    background-image: -ms-linear-gradient(top,#91A33F,#91A33F);
    background-image: -o-linear-gradient(top,#91A33F,#91A33F);
    background-image: linear-gradient(top,#91A33F,#91A33F);
}
.ui-btn-down-LightGreen2 a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-LightGreen2,
.ui-btn-hover-LightGreen2,
.ui-btn-down-LightGreen2 {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-LightGreen2 {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #91A33F;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-LightGreen2 {
    border: 1px solid #91A33F;
    background: #91A33F;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#91A33F),to(#91A33F));
    background-image: -webkit-linear-gradient(top,#91A33F,#91A33F);
    background-image: -moz-linear-gradient(top,#91A33F,#91A33F);
    background-image: -ms-linear-gradient(top,#91A33F,#91A33F);
    background-image: -o-linear-gradient(top,#91A33F,#91A33F);
    background-image: linear-gradient(top,#91A33F,#91A33F);
}
.ui-bar-OliveGreen {
    border: 1px solid #78CE3A;
    background: #78CE3A;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#78CE3A),to(#66B52D));
    background-image: -webkit-linear-gradient(top,#78CE3A,#66B52D);
    background-image: -moz-linear-gradient(top,#78CE3A,#66B52D);
    background-image: -ms-linear-gradient(top,#78CE3A,#66B52D);
    background-image: -o-linear-gradient(top,#78CE3A,#66B52D);
    background-image: linear-gradient(top,#78CE3A,#66B52D);
}
.ui-bar-OliveGreen,
.ui-bar-OliveGreen input,
.ui-bar-OliveGreen select,
.ui-bar-OliveGreen textarea,
.ui-bar-OliveGreen button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-OliveGreen .ui-link-inherit { color: #000000 }
.ui-bar-OliveGreen .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-OliveGreen {
    border: 1px solid #78CE3A;
    background: #78CE3A;
    color: #000000;
    text-shadow: 0 1px 0 #FFFFFF;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#78CE3A),to(#78CE3A));
    background-image: -webkit-linear-gradient(top,#78CE3A,#78CE3A);
    background-image: -moz-linear-gradient(top,#78CE3A,#78CE3A);
    background-image: -ms-linear-gradient(top,#78CE3A,#78CE3A);
    background-image: -o-linear-gradient(top,#78CE3A,#78CE3A);
    background-image: linear-gradient(top,#78CE3A,#78CE3A);
}
.ui-body-OliveGreen,
.ui-body-OliveGreen input,
.ui-body-OliveGreen select,
.ui-body-OliveGreen textarea,
.ui-body-OliveGreen button { font-family: Helvetica,Arial,sans-serif }
.ui-body-OliveGreen .ui-link-inherit { color: #000000 }
.ui-body-OliveGreen .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-OliveGreen {
    border: 1px solid #78CE3A;
    background: #78CE3A;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#78CE3A),to(#66B52D));
    background-image: -webkit-linear-gradient(top,#78CE3A,#66B52D);
    background-image: -moz-linear-gradient(top,#78CE3A,#66B52D);
    background-image: -ms-linear-gradient(top,#78CE3A,#66B52D);
    background-image: -o-linear-gradient(top,#78CE3A,#66B52D);
    background-image: linear-gradient(top,#78CE3A,#66B52D);
}
.ui-btn-up-OliveGreen a.ui-link-inherit { color: #000000 }
.ui-btn-hover-OliveGreen {
    border: 1px solid #FFFFFF;
    background: #66B52D;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#66B52D),to(#78CE3A));
    background-image: -webkit-linear-gradient(top,#66B52D,#78CE3A);
    background-image: -moz-linear-gradient(top,#66B52D,#78CE3A);
    background-image: -ms-linear-gradient(top,#66B52D,#78CE3A);
    background-image: -o-linear-gradient(top,#66B52D,#78CE3A);
    background-image: linear-gradient(top,#66B52D,#78CE3A);
}
.ui-btn-hover-OliveGreen a.ui-link-inherit { color: #000000 }
.ui-btn-down-OliveGreen {
    border: 1px solid #FFFFFF;
    background: #78CE3A;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#78CE3A),to(#78CE3A));
    background-image: -webkit-linear-gradient(top,#78CE3A,#78CE3A);
    background-image: -moz-linear-gradient(top,#78CE3A,#78CE3A);
    background-image: -ms-linear-gradient(top,#78CE3A,#78CE3A);
    background-image: -o-linear-gradient(top,#78CE3A,#78CE3A);
    background-image: linear-gradient(top,#78CE3A,#78CE3A);
}
.ui-btn-down-OliveGreen a.ui-link-inherit { color: #000000 }
.ui-btn-up-OliveGreen,
.ui-btn-hover-OliveGreen,
.ui-btn-down-OliveGreen {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-OliveGreen {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #FFFFFF;
    margin: 5px 10px 5px 10px;
    background-color: #78CE3A;
    padding: 15px 15px 15px 15px;
    color: #000000;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #FFFFFF;
}
.text-sectionheader-OliveGreen {
    border: 1px solid #78CE3A;
    background: #78CE3A;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#78CE3A),to(#66B52D));
    background-image: -webkit-linear-gradient(top,#78CE3A,#66B52D);
    background-image: -moz-linear-gradient(top,#78CE3A,#66B52D);
    background-image: -ms-linear-gradient(top,#78CE3A,#66B52D);
    background-image: -o-linear-gradient(top,#78CE3A,#66B52D);
    background-image: linear-gradient(top,#78CE3A,#66B52D);
}
.ui-bar-GardenGreen {
    border: 1px solid #49A942;
    background: #49A942;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#49A942),to(#3A8534));
    background-image: -webkit-linear-gradient(top,#49A942,#3A8534);
    background-image: -moz-linear-gradient(top,#49A942,#3A8534);
    background-image: -ms-linear-gradient(top,#49A942,#3A8534);
    background-image: -o-linear-gradient(top,#49A942,#3A8534);
    background-image: linear-gradient(top,#49A942,#3A8534);
}
.ui-bar-GardenGreen,
.ui-bar-GardenGreen input,
.ui-bar-GardenGreen select,
.ui-bar-GardenGreen textarea,
.ui-bar-GardenGreen button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-GardenGreen .ui-link-inherit { color: #000000 }
.ui-bar-GardenGreen .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-GardenGreen {
    border: 1px solid #49A942;
    background: #49A942;
    color: #000000;
    text-shadow: 0 1px 0 #FFFFFF;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#49A942),to(#49A942));
    background-image: -webkit-linear-gradient(top,#49A942,#49A942);
    background-image: -moz-linear-gradient(top,#49A942,#49A942);
    background-image: -ms-linear-gradient(top,#49A942,#49A942);
    background-image: -o-linear-gradient(top,#49A942,#49A942);
    background-image: linear-gradient(top,#49A942,#49A942);
}
.ui-body-GardenGreen,
.ui-body-GardenGreen input,
.ui-body-GardenGreen select,
.ui-body-GardenGreen textarea,
.ui-body-GardenGreen button { font-family: Helvetica,Arial,sans-serif }
.ui-body-GardenGreen .ui-link-inherit { color: #000000 }
.ui-body-GardenGreen .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-GardenGreen {
    border: 1px solid #49A942;
    background: #49A942;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#49A942),to(#3A8534));
    background-image: -webkit-linear-gradient(top,#49A942,#3A8534);
    background-image: -moz-linear-gradient(top,#49A942,#3A8534);
    background-image: -ms-linear-gradient(top,#49A942,#3A8534);
    background-image: -o-linear-gradient(top,#49A942,#3A8534);
    background-image: linear-gradient(top,#49A942,#3A8534);
}
.ui-btn-up-GardenGreen a.ui-link-inherit { color: #000000 }
.ui-btn-hover-GardenGreen {
    border: 1px solid #FFFFFF;
    background: #3A8534;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#3A8534),to(#49A942));
    background-image: -webkit-linear-gradient(top,#3A8534,#49A942);
    background-image: -moz-linear-gradient(top,#3A8534,#49A942);
    background-image: -ms-linear-gradient(top,#3A8534,#49A942);
    background-image: -o-linear-gradient(top,#3A8534,#49A942);
    background-image: linear-gradient(top,#3A8534,#49A942);
}
.ui-btn-hover-GardenGreen a.ui-link-inherit { color: #000000 }
.ui-btn-down-GardenGreen {
    border: 1px solid #FFFFFF;
    background: #49A942;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#49A942),to(#49A942));
    background-image: -webkit-linear-gradient(top,#49A942,#49A942);
    background-image: -moz-linear-gradient(top,#49A942,#49A942);
    background-image: -ms-linear-gradient(top,#49A942,#49A942);
    background-image: -o-linear-gradient(top,#49A942,#49A942);
    background-image: linear-gradient(top,#49A942,#49A942);
}
.ui-btn-down-GardenGreen a.ui-link-inherit { color: #000000 }
.ui-btn-up-GardenGreen,
.ui-btn-hover-GardenGreen,
.ui-btn-down-GardenGreen {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-GardenGreen {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #FFFFFF;
    margin: 5px 10px 5px 10px;
    background-color: #49A942;
    padding: 15px 15px 15px 15px;
    color: #000000;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #FFFFFF;
}
.text-sectionheader-GardenGreen {
    border: 1px solid #49A942;
    background: #49A942;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#49A942),to(#3A8534));
    background-image: -webkit-linear-gradient(top,#49A942,#3A8534);
    background-image: -moz-linear-gradient(top,#49A942,#3A8534);
    background-image: -ms-linear-gradient(top,#49A942,#3A8534);
    background-image: -o-linear-gradient(top,#49A942,#3A8534);
    background-image: linear-gradient(top,#49A942,#3A8534);
}
.ui-bar-GardenGreen {
    border: 1px solid #BAC405;
    background: #BAC405;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#BAC405),to(#BAC405));
    background-image: -webkit-linear-gradient(top,#BAC405,#BAC405);
    background-image: -moz-linear-gradient(top,#BAC405,#BAC405);
    background-image: -ms-linear-gradient(top,#BAC405,#BAC405);
    background-image: -o-linear-gradient(top,#BAC405,#BAC405);
    background-image: linear-gradient(top,#BAC405,#BAC405);
}
.ui-bar-GardenGreen,
.ui-bar-GardenGreen input,
.ui-bar-GardenGreen select,
.ui-bar-GardenGreen textarea,
.ui-bar-GardenGreen button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-GardenGreen .ui-link-inherit { color: #000000 }
.ui-bar-GardenGreen .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-GardenGreen {
    border: 1px solid #BAC405;
    background: #BAC405;
    color: #000000;
    text-shadow: 0 1px 0 #FFFFFF;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#BAC405),to(#BAC405));
    background-image: -webkit-linear-gradient(top,#BAC405,#BAC405);
    background-image: -moz-linear-gradient(top,#BAC405,#BAC405);
    background-image: -ms-linear-gradient(top,#BAC405,#BAC405);
    background-image: -o-linear-gradient(top,#BAC405,#BAC405);
    background-image: linear-gradient(top,#BAC405,#BAC405);
}
.ui-body-GardenGreen,
.ui-body-GardenGreen input,
.ui-body-GardenGreen select,
.ui-body-GardenGreen textarea,
.ui-body-GardenGreen button { font-family: Helvetica,Arial,sans-serif }
.ui-body-GardenGreen .ui-link-inherit { color: #000000 }
.ui-body-GardenGreen .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-GardenGreen {
    border: 1px solid #BAC405;
    background: #BAC405;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#BAC405),to(#BAC405));
    background-image: -webkit-linear-gradient(top,#BAC405,#BAC405);
    background-image: -moz-linear-gradient(top,#BAC405,#BAC405);
    background-image: -ms-linear-gradient(top,#BAC405,#BAC405);
    background-image: -o-linear-gradient(top,#BAC405,#BAC405);
    background-image: linear-gradient(top,#BAC405,#BAC405);
}
.ui-btn-up-GardenGreen a.ui-link-inherit { color: #000000 }
.ui-btn-hover-GardenGreen {
    border: 1px solid #FFFFFF;
    background: #BAC405;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#BAC405),to(#BAC405));
    background-image: -webkit-linear-gradient(top,#BAC405,#BAC405);
    background-image: -moz-linear-gradient(top,#BAC405,#BAC405);
    background-image: -ms-linear-gradient(top,#BAC405,#BAC405);
    background-image: -o-linear-gradient(top,#BAC405,#BAC405);
    background-image: linear-gradient(top,#BAC405,#BAC405);
}
.ui-btn-hover-GardenGreen a.ui-link-inherit { color: #000000 }
.ui-btn-down-GardenGreen {
    border: 1px solid #FFFFFF;
    background: #BAC405;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#BAC405),to(#BAC405));
    background-image: -webkit-linear-gradient(top,#BAC405,#BAC405);
    background-image: -moz-linear-gradient(top,#BAC405,#BAC405);
    background-image: -ms-linear-gradient(top,#BAC405,#BAC405);
    background-image: -o-linear-gradient(top,#BAC405,#BAC405);
    background-image: linear-gradient(top,#BAC405,#BAC405);
}
.ui-btn-down-GardenGreen a.ui-link-inherit { color: #000000 }
.ui-btn-up-GardenGreen,
.ui-btn-hover-GardenGreen,
.ui-btn-down-GardenGreen {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-GardenGreen {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #FFFFFF;
    margin: 5px 10px 5px 10px;
    background-color: #BAC405;
    padding: 15px 15px 15px 15px;
    color: #000000;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #FFFFFF;
}
.text-sectionheader-GardenGreen {
    border: 1px solid #BAC405;
    background: #BAC405;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#BAC405),to(#BAC405));
    background-image: -webkit-linear-gradient(top,#BAC405,#BAC405);
    background-image: -moz-linear-gradient(top,#BAC405,#BAC405);
    background-image: -ms-linear-gradient(top,#BAC405,#BAC405);
    background-image: -o-linear-gradient(top,#BAC405,#BAC405);
    background-image: linear-gradient(top,#BAC405,#BAC405);
}
.ui-bar-GardenOrange {
    border: 1px solid #DD5900;
    background: #DD5900;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#DD5900),to(#DD5900));
    background-image: -webkit-linear-gradient(top,#DD5900,#DD5900);
    background-image: -moz-linear-gradient(top,#DD5900,#DD5900);
    background-image: -ms-linear-gradient(top,#DD5900,#DD5900);
    background-image: -o-linear-gradient(top,#DD5900,#DD5900);
    background-image: linear-gradient(top,#DD5900,#DD5900);
}
.ui-bar-GardenOrange,
.ui-bar-GardenOrange input,
.ui-bar-GardenOrange select,
.ui-bar-GardenOrange textarea,
.ui-bar-GardenOrange button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-GardenOrange .ui-link-inherit { color: #FFFFFF }
.ui-bar-GardenOrange .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-GardenOrange {
    border: 1px solid #DD5900;
    background: #DD5900;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#DD5900),to(#DD5900));
    background-image: -webkit-linear-gradient(top,#DD5900,#DD5900);
    background-image: -moz-linear-gradient(top,#DD5900,#DD5900);
    background-image: -ms-linear-gradient(top,#DD5900,#DD5900);
    background-image: -o-linear-gradient(top,#DD5900,#DD5900);
    background-image: linear-gradient(top,#DD5900,#DD5900);
}
.ui-body-GardenOrange,
.ui-body-GardenOrange input,
.ui-body-GardenOrange select,
.ui-body-GardenOrange textarea,
.ui-body-GardenOrange button { font-family: Helvetica,Arial,sans-serif }
.ui-body-GardenOrange .ui-link-inherit { color: #FFFFFF }
.ui-body-GardenOrange .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-GardenOrange {
    border: 1px solid #DD5900;
    background: #DD5900;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#DD5900),to(#DD5900));
    background-image: -webkit-linear-gradient(top,#DD5900,#DD5900);
    background-image: -moz-linear-gradient(top,#DD5900,#DD5900);
    background-image: -ms-linear-gradient(top,#DD5900,#DD5900);
    background-image: -o-linear-gradient(top,#DD5900,#DD5900);
    background-image: linear-gradient(top,#DD5900,#DD5900);
}
.ui-btn-up-GardenOrange a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-GardenOrange {
    border: 1px solid #000000;
    background: #DD5900;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#DD5900),to(#DD5900));
    background-image: -webkit-linear-gradient(top,#DD5900,#DD5900);
    background-image: -moz-linear-gradient(top,#DD5900,#DD5900);
    background-image: -ms-linear-gradient(top,#DD5900,#DD5900);
    background-image: -o-linear-gradient(top,#DD5900,#DD5900);
    background-image: linear-gradient(top,#DD5900,#DD5900);
}
.ui-btn-hover-GardenOrange a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-GardenOrange {
    border: 1px solid #000000;
    background: #DD5900;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#DD5900),to(#DD5900));
    background-image: -webkit-linear-gradient(top,#DD5900,#DD5900);
    background-image: -moz-linear-gradient(top,#DD5900,#DD5900);
    background-image: -ms-linear-gradient(top,#DD5900,#DD5900);
    background-image: -o-linear-gradient(top,#DD5900,#DD5900);
    background-image: linear-gradient(top,#DD5900,#DD5900);
}
.ui-btn-down-GardenOrange a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-GardenOrange,
.ui-btn-hover-GardenOrange,
.ui-btn-down-GardenOrange {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-GardenOrange {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #DD5900;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-GardenOrange {
    border: 1px solid #DD5900;
    background: #DD5900;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#DD5900),to(#DD5900));
    background-image: -webkit-linear-gradient(top,#DD5900,#DD5900);
    background-image: -moz-linear-gradient(top,#DD5900,#DD5900);
    background-image: -ms-linear-gradient(top,#DD5900,#DD5900);
    background-image: -o-linear-gradient(top,#DD5900,#DD5900);
    background-image: linear-gradient(top,#DD5900,#DD5900);
}
.ui-bar-BeaconDark {
    border: 1px solid #36393B;
    background: #36393B;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#36393B),to(#45484B));
    background-image: -webkit-linear-gradient(top,#36393B,#45484B);
    background-image: -moz-linear-gradient(top,#36393B,#45484B);
    background-image: -ms-linear-gradient(top,#36393B,#45484B);
    background-image: -o-linear-gradient(top,#36393B,#45484B);
    background-image: linear-gradient(top,#36393B,#45484B);
}
.ui-bar-BeaconDark,
.ui-bar-BeaconDark input,
.ui-bar-BeaconDark select,
.ui-bar-BeaconDark textarea,
.ui-bar-BeaconDark button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-BeaconDark .ui-link-inherit { color: #FFFFFF }
.ui-bar-BeaconDark .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-BeaconDark {
    border: 1px solid #36393B;
    background: #36393B;
    color: #FFFFFF;
    text-shadow: 0 1px 0 #000000;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#36393B),to(#36393B));
    background-image: -webkit-linear-gradient(top,#36393B,#36393B);
    background-image: -moz-linear-gradient(top,#36393B,#36393B);
    background-image: -ms-linear-gradient(top,#36393B,#36393B);
    background-image: -o-linear-gradient(top,#36393B,#36393B);
    background-image: linear-gradient(top,#36393B,#36393B);
}
.ui-body-BeaconDark,
.ui-body-BeaconDark input,
.ui-body-BeaconDark select,
.ui-body-BeaconDark textarea,
.ui-body-BeaconDark button { font-family: Helvetica,Arial,sans-serif }
.ui-body-BeaconDark .ui-link-inherit { color: #FFFFFF }
.ui-body-BeaconDark .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-BeaconDark {
    border: 1px solid #36393B;
    background: #36393B;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#36393B),to(#45484B));
    background-image: -webkit-linear-gradient(top,#36393B,#45484B);
    background-image: -moz-linear-gradient(top,#36393B,#45484B);
    background-image: -ms-linear-gradient(top,#36393B,#45484B);
    background-image: -o-linear-gradient(top,#36393B,#45484B);
    background-image: linear-gradient(top,#36393B,#45484B);
}
.ui-btn-up-BeaconDark a.ui-link-inherit { color: #FFFFFF }
.ui-btn-hover-BeaconDark {
    border: 1px solid #000000;
    background: #45484B;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#45484B),to(#36393B));
    background-image: -webkit-linear-gradient(top,#45484B,#36393B);
    background-image: -moz-linear-gradient(top,#45484B,#36393B);
    background-image: -ms-linear-gradient(top,#45484B,#36393B);
    background-image: -o-linear-gradient(top,#45484B,#36393B);
    background-image: linear-gradient(top,#45484B,#36393B);
}
.ui-btn-hover-BeaconDark a.ui-link-inherit { color: #FFFFFF }
.ui-btn-down-BeaconDark {
    border: 1px solid #000000;
    background: #36393B;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#36393B),to(#36393B));
    background-image: -webkit-linear-gradient(top,#36393B,#36393B);
    background-image: -moz-linear-gradient(top,#36393B,#36393B);
    background-image: -ms-linear-gradient(top,#36393B,#36393B);
    background-image: -o-linear-gradient(top,#36393B,#36393B);
    background-image: linear-gradient(top,#36393B,#36393B);
}
.ui-btn-down-BeaconDark a.ui-link-inherit { color: #FFFFFF }
.ui-btn-up-BeaconDark,
.ui-btn-hover-BeaconDark,
.ui-btn-down-BeaconDark {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-BeaconDark {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #000000;
    margin: 5px 10px 5px 10px;
    background-color: #36393B;
    padding: 15px 15px 15px 15px;
    color: #FFFFFF;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #000000;
}
.text-sectionheader-BeaconDark {
    border: 1px solid #36393B;
    background: #36393B;
    color: #FFFFFF;
    font-weight: bold;
    text-shadow: 0 -1px 1px #000000;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#36393B),to(#45484B));
    background-image: -webkit-linear-gradient(top,#36393B,#45484B);
    background-image: -moz-linear-gradient(top,#36393B,#45484B);
    background-image: -ms-linear-gradient(top,#36393B,#45484B);
    background-image: -o-linear-gradient(top,#36393B,#45484B);
    background-image: linear-gradient(top,#36393B,#45484B);
}
.ui-bar-BeaconLight {
    border: 1px solid #948C75;
    background: #948C75;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#948C75),to(#948C75));
    background-image: -webkit-linear-gradient(top,#948C75,#948C75);
    background-image: -moz-linear-gradient(top,#948C75,#948C75);
    background-image: -ms-linear-gradient(top,#948C75,#948C75);
    background-image: -o-linear-gradient(top,#948C75,#948C75);
    background-image: linear-gradient(top,#948C75,#948C75);
}
.ui-bar-BeaconLight,
.ui-bar-BeaconLight input,
.ui-bar-BeaconLight select,
.ui-bar-BeaconLight textarea,
.ui-bar-BeaconLight button { font-family: Helvetica,Arial,sans-serif }
.ui-bar-BeaconLight .ui-link-inherit { color: #000000 }
.ui-bar-BeaconLight .ui-link {
    color: #7cc4e7;
    font-weight: bold;
}
.ui-body-BeaconLight {
    border: 1px solid #948C75;
    background: #948C75;
    color: #000000;
    text-shadow: 0 1px 0 #FFFFFF;
    font-weight: normal;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#948C75),to(#948C75));
    background-image: -webkit-linear-gradient(top,#948C75,#948C75);
    background-image: -moz-linear-gradient(top,#948C75,#948C75);
    background-image: -ms-linear-gradient(top,#948C75,#948C75);
    background-image: -o-linear-gradient(top,#948C75,#948C75);
    background-image: linear-gradient(top,#948C75,#948C75);
}
.ui-body-BeaconLight,
.ui-body-BeaconLight input,
.ui-body-BeaconLight select,
.ui-body-BeaconLight textarea,
.ui-body-BeaconLight button { font-family: Helvetica,Arial,sans-serif }
.ui-body-BeaconLight .ui-link-inherit { color: #000000 }
.ui-body-BeaconLight .ui-link {
    color: #2489ce;
    font-weight: bold;
}
.ui-br {
    border-bottom: #828282;
    border-bottom: rgba(130,130,130,.3);
    border-bottom-width: 1px;
    border-bottom-style: solid;
}
.ui-btn-up-BeaconLight {
    border: 1px solid #948C75;
    background: #948C75;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#948C75),to(#948C75));
    background-image: -webkit-linear-gradient(top,#948C75,#948C75);
    background-image: -moz-linear-gradient(top,#948C75,#948C75);
    background-image: -ms-linear-gradient(top,#948C75,#948C75);
    background-image: -o-linear-gradient(top,#948C75,#948C75);
    background-image: linear-gradient(top,#948C75,#948C75);
}
.ui-btn-up-BeaconLight a.ui-link-inherit { color: #000000 }
.ui-btn-hover-BeaconLight {
    border: 1px solid #FFFFFF;
    background: #948C75;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#948C75),to(#948C75));
    background-image: -webkit-linear-gradient(top,#948C75,#948C75);
    background-image: -moz-linear-gradient(top,#948C75,#948C75);
    background-image: -ms-linear-gradient(top,#948C75,#948C75);
    background-image: -o-linear-gradient(top,#948C75,#948C75);
    background-image: linear-gradient(top,#948C75,#948C75);
}
.ui-btn-hover-BeaconLight a.ui-link-inherit { color: #000000 }
.ui-btn-down-BeaconLight {
    border: 1px solid #FFFFFF;
    background: #948C75;
    font-weight: bold;
    color: #000000;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#948C75),to(#948C75));
    background-image: -webkit-linear-gradient(top,#948C75,#948C75);
    background-image: -moz-linear-gradient(top,#948C75,#948C75);
    background-image: -ms-linear-gradient(top,#948C75,#948C75);
    background-image: -o-linear-gradient(top,#948C75,#948C75);
    background-image: linear-gradient(top,#948C75,#948C75);
}
.ui-btn-down-BeaconLight a.ui-link-inherit { color: #000000 }
.ui-btn-up-BeaconLight,
.ui-btn-hover-BeaconLight,
.ui-btn-down-BeaconLight {
    font-family: Helvetica,Arial,sans-serif;
    text-decoration: none;
}
.SectionHeaderText-BeaconLight {
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #FFFFFF;
    margin: 5px 10px 5px 10px;
    background-color: #948C75;
    padding: 15px 15px 15px 15px;
    color: #000000;
    -moz-box-shadow: inset 0 0 5px #888;
    -webkit-box-shadow: inset 0 0 5px#888;
    box-shadow: inner 0 0 5px #888;
    text-shadow: 0 0 0 #FFFFFF;
}
.text-sectionheader-BeaconLight {
    border: 1px solid #948C75;
    background: #948C75;
    color: #000000;
    font-weight: bold;
    text-shadow: 0 -1px 1px #FFFFFF;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#948C75),to(#948C75));
    background-image: -webkit-linear-gradient(top,#948C75,#948C75);
    background-image: -moz-linear-gradient(top,#948C75,#948C75);
    background-image: -ms-linear-gradient(top,#948C75,#948C75);
    background-image: -o-linear-gradient(top,#948C75,#948C75);
    background-image: linear-gradient(top,#948C75,#948C75);
}


  </style>
  
    
    
  
  <!-- Include Beacon JavaScript-->
  <script type="text/javascript" src="common/js/common.js"></script>
  <script type="text/javascript" src="common/js/guides.js"></script>

  <!-- Include Beacon CSS-->
  <link rel="stylesheet" href="common/css/common.css" />
  <link rel="stylesheet" href="common/css/guides.css" />

  <!-- Guide Specific Styles -->
  <style type="text/css" >
  
    .ui-page {background: transparent url(media/backgrounds/wood.png);}.ui-content {background:transparent none;}.ui-content {background:transparent none;}@media screen and (min-width: 701px) {
    #SmallGuideHeaderImage{ display:none}
    }@media screen and (max-width: 700px) {
      #Guide-Content { display:none}
      }@media screen and (max-width: 701px) {
    #Guide-View-Guide { display:none}


    }@media screen and (max-width: 701px) {
    #Guide-View-Guide { display:none}


    }@media screen and (max-width: 701px) {
    }@media screen and (min-width: 701px) {
    
    
    }@media screen and (max-width: 701px) {

    }@media screen and (min-width: 701px) and (max-width: 800px) {
  #Guide-SectionList { float: left; width: 40%; height: auto; }
  #Guide-Content { float: right; width: 60%; }
  }@media screen and (min-width: 801px) and (max-width: 900px) {
  #Guide-SectionList { float: left; width: 35%; height: auto; }
  #Guide-Content { float: right; width: 65%; }
  }@media screen and (min-width: 901px) {
  #Guide-SectionList { float: left; width: 30%; height: auto; }
  #Guide-Content { float: right; width: 70%; }
  }@media screen and (max-width: 900px) {
  .LargeScreenVideo { display:none}
  .MediumScreenVideo { display:none}
  }@media screen and (min-width: 901px) and (max-width: 1200px) {
  .LargeScreenVideo { display:none}
  .SmallScreenVideo  { display:none}
  }@media screen and (min-width: 1201px) {
  .MediumScreenVideo { display:none}
  .SmallScreenVideo  { display:none}
  }@media screen and (min-width: 701px) {
  #Mobile-View-Guide {display:none}
  }.FrontPageBlock {
  -moz-border-radius: 10px;
  border-radius: 10px;
  border: gray thin groove;
  margin: 30px 10px 5px 10px;
  background-color: white;
  padding: 10px 10px 10px 10px;
  -moz-box-shadow: 0 0 3px 3px #552B00;
  -webkit-box-shadow: 0 0 3px 3px #552B00;
  box-shadow: 0 0 3px 3px #552B00;
  text-align:center;
  }.FrontPageIntroBlock {
  margin: 30px 10px 5px 10px;
  background-color: white;
  padding: 10px 10px 10px 10px;
  text-align:center;  
  -moz-border-radius: 10px;
  border-radius: 10px;
  -moz-box-shadow: 0 0 5px #888;
  -webkit-box-shadow: 0 0 5px#888;
  box-shadow: 0 0 5px #888;
  
  }.FrontPageHeaderText{
  color: #552B00;
  font-size:x-large;
  font-weight:bold;
  }
  </style> 

  <!-- Guide Header -->
  <style type="text/css" >
  
    h1, h2, h3, h4, h5, h6,  {color:#FFFFFF;}
    
    .GuideBody{
      max-width:1000px;
    }
    
    @media screen and (max-width: 400px){.PresentationStyle {font-size:medium;} }
    @media screen and (min-width: 401px) and (max-width: 1300px){.PresentationStyle {font-size:large;} }
    @media screen and (min-width: 1301px){.PresentationStyle {font-size:xx-large;} }
  </style> 
  
  <!-- Include guide specific templates -->
  <script type='text/javascript' src='common/templates/guides/topical/functions.js'></script><link rel='stylesheet' href='common/templates/guides/topical/style.css' /><link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'><script type='text/javascript' src='common/js/modernizr.custom.14543.js'></script><link rel='shortcut icon' type='image/x-icon' href='http://beaconguides.com/favicon.ico' ><link rel='icon' type='image/x-icon' href='http://beaconguides.com/favicon.ico' /> <link rel='apple-touch-icon' href='http://beaconguides.com/BeaconButtonShortcutIcon.png' />  
  
  <!-- Page Title -->
  <title>Idaho Wines</title> 
<!-- 
  <script type="text/javascript" src="http://use.typekit.com/sem5bqf.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 -->
  </head>

  <body class="GuideBody">
  

      
    
<script type="text/javascript">

  $.mobile.fixedToolbars.show(true);
  
  function ShowGuideTableofContents()
  {
    $('#Guide-Content').hide();
    $('#Guide-SectionList').show();
    window.scrollTo(0,0);   
  }

  function ShowGuideCoverPage()
  {
    $('#Guide-Content').hide();
    $('#Guide-SectionList').show();
    window.scrollTo(0,0);   
  }

  $("#GuidePage").live('pageinit',function() {
       
//on page create for context

//  $("#GuidePage").bind("swipeleft", function(){
 // 
//    //        ShowGuideTableofContents();
//      //  });


//  $("#GuidePage").bind("swiperight", function(){
 // 
//    //        ShowGuideTableofContents();
//      //  });
  
  //$("#SectionHeaderBar").bind("tap", function(){
  //     ShowGuideTableofContents();
  //});
  
  
  //var mq = window.matchMedia( "(min-width: 500px)" );  

});


</script>

  <script type="text/javascript">var switchTo5x=true;</script>
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script type="text/javascript">stLight.options({publisher: "ur-b3f08177-f6cd-45dc-6f54-2a9f51166f2"}); </script>

  <div data-role='page' id='GuidePage' data-theme=d><div data-role='header' data-theme='DarkBrown' ><div data-role='navbar' ><div style='width:100%;max-width:960px;margin:0px auto;'><div style='float:right;'><div >
      <div id='ShareThin' style='float:right;padding-top:6px;'>
      <span class='st_sharethis_large' displayText='ShareThis'></span>
      </div>
      <div id='ShareWide' style='float:right;padding-top:6px;'>
      <span class='st_facebook_large' displayText='Facebook'></span>
      <span class='st_twitter_large' displayText='Tweet'></span>
      <span class='st_linkedin_large' displayText='LinkedIn'></span>
      <span class='st_email_large' displayText='Email'></span>
      </div>
      </div></div><ul style='text-align:left;'><li style='text-align:left;'><a style='text-align:left;' id='guide-navbar' href='eguide.php?guide=40' rel='external' data-theme='DarkBrown'><span class='NavBarHeaderText'>Idaho Wines</span></a></li></ul></div></div></div>
      <div id='HeaderThin'>
      <div class='HeaderImageArea'><a href='eguide.php?guide=40' rel='external'><img class='GuideHeaderImage' src='http://www.beaconguides.com/guides/authors/media/10/Mobile-Web-Header-320px.gif' ></a><div style='clear:both;'></div></div>
      </div>
      <div style='max-width:960px;margin: 0 auto;'><div id='Guide-SectionList'><div id='Guide-Border-Right'><div data-role='content' data-theme='d' ><ul data-role='listview'  data-theme='d'  data-inset='true'  data-dividertheme='DarkBrown'  ><li data-role='list-divider'><span class='ListDividerText'>Idaho Wine Commission</span></li><li  ><a href='eguide.php?sec=374' rel='external'>Wineries</a></li><li  ><a href='eguide.php?sec=370' rel='external'>Regions & Tours</a></li><li  ><a href='eguide.php?sec=835' rel='external'>Our Roots</a></li></ul><ul data-role='listview'  data-theme='d'  data-inset='true'  data-dividertheme='DarkBrown'  ><li data-role='list-divider'><span class='ListDividerText'>Events</span></li><li  ><a href='eguide.php?sec=382' rel='external'>Sippin' in the City</a></li><li  ><a href='eguide.php?sec=689' rel='external'>Savor Idaho - June 10, 2012</a></li></ul><ul data-role='listview'  data-theme='d'  data-inset='true'  data-dividertheme='DarkBrown'  ><li data-role='list-divider'><span class='ListDividerText'>Connect</span></li><li  ><a href='http://www.facebook.com/pages/Idaho-Wine-Commission/132271133503946' rel='external'><img src='http://www.beaconguides.com/guides/media/icons/facebook.png' width='16' class='ui-li-icon'>Facebook</a></li><li  ><a href='http://twitter.com/idahowines' rel='external'><img src='http://www.beaconguides.com/guides/media/icons/twitter-2.png' width='16' class='ui-li-icon'>Twitter</a></li><li  ><a href='mailto:info@idahowines.org' rel='external'><img src='http://www.beaconguides.com/guides/media/icons/social-email.png' width='16' class='ui-li-icon'>Email Us</a></li><li  ><a href='http://www.idahowines.org' rel='external'>Full Site</a></li></ul></div></div><!-- end of guide border --></div>  <!-- end of guide list --><div id='Guide'><div id='Guide-Content' ><div id='Guide-Border-Left' ><div class='FrontPageIntroBlock ui-corner-bottom ui-corner-top'><div style='text-align:left;'><p><img style="vertical-align: middle; width: 100%; max-width: 960px; -moz-border-radius: 5px; border-radius: 5px;" title="Mobile-Web-Header-960px.gif" src="authors/media/10/Mobile-Web-Header-960px.gif" alt="Mobile-Web-Header-960px.gif" width="960" /></p>
<p>Known for its breathtaking wilderness and, perhaps more famously, for its potatoes, Idaho is also home to a fast growing wine industry and award-winning wines. Nestled between the Rocky Mountains and the Snake River, Idaho wine regions nurture the grapes with a moderate climate, limited precpitation, and a consistent growing season that add complexity to the grapes. Idaho is known for growing and producing vinifera varieties such as Syrah and Viognier and classic varietals including Merlot, Cabernet Sauvignon, Chardonnay, and Riesling.</p></div></div><div id='Mobile-View-Guide'><a data-role='button' data-theme = DarkBrown onclick='ShowGuideTableofContents()'><strong>View Guide</strong></a></div></div></div></div></div><br/><br/><div data-id='myfooter' data-role='footer' data-theme='DarkBrown'><div data-role='navbar' ><ul><li><a href='http://www.BeaconGuides.com' ><em>Powered By BeaconGuides.com</em></a></li></ul></div></div></div>
  </body>

</html>