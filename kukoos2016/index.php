<?php
ob_start();
session_start();

if(isset($_SESSION['admin_username']))
{
	
	header("location:welcome.php");
	
}



include_once("connect/helper.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Kukoo's</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
    <link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css1/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    
    <link href="css1/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
    <link href="css1/style.css" rel="stylesheet" type="text/css">
    <link href="css1/pages/signin.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $(function () 
			{
                $('.content').keypress(function (e) 
				{ // Attach the form handler to the keypress event
                    if (e.keyCode == 13)
					 { // If the the enter key was pressed.
                        //alert('enter clickd');
                        $('.ajaxlink').click(); // Trigger the button(elementId) click event.
                        //return e.preventDefault(); // Prevent the form submit.
                     }
                });
            });
            $('.ajaxlink').click(function () {
                var user = $("#user").val(); // from index.php
                var pass = $("#pass").val();
				var capt = $("#captchavalid").val();
				
				  if(user=='')
				  {
				    alert('Please enter user name');
					return false;
				  } 
				  if(pass=='')
				  {
				    alert('Please enter password');
					return false;
				  } 
				  /*if(capt=='')
				  {
				    alert('Please enter captcha');
					return false;
				  } */
                else 
				{
                  var dataString = "username="+user+"&password="+pass;
					//alert(dataString);
                   
					$(".ajaxloader").css('visibility','visible');
                    $('.loader').hide();
                    $.ajax
                    ({
                        type: "POST",
                        url: "ajax-login.php",
                        data: dataString,
                        success: function (response) {
                           
                            $(".ajaxloader").css('visibility','hidden');
                            if (response == 1) {
                              
                                window.location.href = "welcome.php";
                            }
                            else {
                                
                                $("#aa").html(response);
                                alert("Wrong Username or Password!!!");

                            }
                        }
                    });
                }
               
            });
        });
    </script>
<script type="text/JavaScript">
<!--
    function MM_openBrWindow(theURL, winName, features) { //v2.0

        window.open(theURL, winName, features);
    }
    //-->
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="JavaScript">
<!-- Begin
    var win = null;
    function newWindow(mypage, myname, w, h, features) {
        var winl = (screen.width - w) / 2;
        var wint = (screen.height - h) / 2;
        if (winl < 0) winl = 0;
        if (wint < 0) wint = 0;
        var settings = 'height=' + h + ',';
        settings += 'width=' + w + ',';
        settings += 'top=' + wint + ',';
        settings += 'left=' + winl + ',';
        settings += features;
        win = window.open(mypage, myname, settings);
        win.window.focus();
    }
    //  End -->
    </script>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="#">
				Kukoo's  Admin  Panel			
			</a>		
			
			<div class="nav-collapse">
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container" style="margin-top:100px;">
	
	<div class="content clearfix">
		
		
			<h1>Admin Login</h1>		
			
			<div class="login-fields">
				
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="user" name="user" value="" placeholder="Username" class="login username-field" style="border:1px #ccc solid;" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="pass" name="pass" value="" placeholder="Password" class="login password-field" style="border:1px #ccc solid;" />
				</div> <!-- /password -->
				
				 <!--<div class="field">
				  <img src="captcha.php" id="captcha" style="width:165px; height:auto;" /><br/>
		
					<a onclick="
					document.getElementById('captcha').src='captcha.php?'+Math.random();
					document.getElementById('captcha-form').focus();"
					id="change-image" style="color:#ff0000; cursor:pointer;" >Not readable? Change text.</a><br/>
				  <input type="text" class="login" name="captchavalid" id="captchavalid"   placeholder="Enter captcha"/>
				  </div>-->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<input  type="submit" name="btn" id="btn" value="submit" class="ajaxlink button btn btn-success btn-large" style="font-family:'Trebuchet MS', Arial, Calibri; font-size:18px; outline:none;">
                
                 <center>
            <span class="ajaxloader" style=" visibility:hidden;"> <img src="images/ajax-loader.gif" alt="loading" style="margin-top:25px;" /> </span>
          </center>
				
			</div> <!-- .actions -->			
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
  
</div>
</body>
</html>
						