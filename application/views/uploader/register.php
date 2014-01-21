<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 
  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title>PublishMe Register Screen | Welcome </title>
</head>
<body>
    <div id='login_form'>
        <form action='<?php echo site_url();?>login/register' method='post' name='register'>
            <!--<h2>User Registration</h2>-->
            <br />            
            <!--<label for='username'>Username</label>-->
            <input type='text' name='username' id='username' size='32' /><br />
        
            <!--<label for='password'>Password</label>-->
            <input type='password' name='password' id='password' size='32' /><br />                            
        
            <input type='Submit' value='Register' />            
        </form>
    </div>
</body>
</html>