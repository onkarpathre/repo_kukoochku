<?php 
if(isset($_REQUEST['passup']))

{
$pass = $_REQUEST['newpass'];
$cpas = md5($pass);
$update = $obj->update("admin","password='$cpas'","id=2");
 echo "<script type=text/javascript> {alert('Password updated succesfully!!!');} </script>";
}
?>

<link rel="stylesheet" type="text/css" href="css/popupmodal.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
#nav_area1
	{
	width:120px;
	height:auto;
	float:left;
	
	position:absolute;
	visibility:hidden;
	/*left: 1px;
	top: 144px;*/
	
	z-index:100;
	
	
	/*border-top:2px #1d1c1a solid;*/
	
	
	}
#nav_area1 ul
	{
		padding:0;
		margin:0;
		list-style:none;
	}
#nav_area1 li
	{
		font-size:13px;
		line-height:28px;
		float:none;
	}
#nav_area1 a
	{
		text-decoration:none;
		color:#fff;
		width:120px;
		text-align:left;
		padding-left:8px;
		border-bottom:1px #fff solid;
		font-family:Calibri;
		display:block;
		background-color:#666;
	}
#nav_area1 a:hover
	{
		text-decoration:none;
		color:#fff;
		border-bottom:1px #fff solid;
		background:#00BA8B;
		display:block;
		text-align:left;
		
		width:120px;
		
	}
</style>
<style>
#nav_area2
	{
	width:120px;
	height:auto;
	float:left;
	
	position:absolute;
	visibility:hidden;
	/*left: 1px;
	top: 144px;*/
	
	z-index:100;
	
	
	/*border-top:2px #1d1c1a solid;*/
	
	
	}
#nav_area2 ul
	{
		padding:0;
		margin:0;
		list-style:none;
	}
#nav_area2 li
	{
		font-size:13px;
		line-height:28px;
		float:none;
	}
#nav_area2 a
	{
		text-decoration:none;
		color:#fff;
		width:120px;
		text-align:left;
		padding-left:8px;
		border-bottom:1px #fff solid;
		font-family:Calibri;
		display:block;
		background-color:#666;
	}
#nav_area2 a:hover
	{
		text-decoration:none;
		color:#fff;
		border-bottom:1px #fff solid;
		background:#00BA8B;
		display:block;
		text-align:left;
		
		width:120px;
		
	}
</style>

<style>
#nav_area3
	{
	width:120px;
	height:auto;
	float:left;
	
	position:absolute;
	visibility:hidden;
	/*left: 1px;
	top: 144px;*/
	
	z-index:100;
	
	
	/*border-top:2px #1d1c1a solid;*/
	
	
	}
#nav_area3 ul
	{
		padding:0;
		margin:0;
		list-style:none;
	}
#nav_area3 li
	{
		font-size:13px;
		line-height:28px;
		float:none;
	}
#nav_area3 a
	{
		text-decoration:none;
		color:#fff;
		width:120px;
		text-align:left;
		padding-left:8px;
		border-bottom:1px #fff solid;
		font-family:Calibri;
		display:block;
		background-color:#666;
	}
#nav_area3 a:hover
	{
		text-decoration:none;
		color:#fff;
		border-bottom:1px #fff solid;
		background:#00BA8B;
		display:block;
		text-align:left;
		
		width:120px;
		
	}
</style>

<style>
#nav_area4
	{
	width:120px;
	height:auto;
	float:left;
	
	position:absolute;
	visibility:hidden;
	/*left: 1px;
	top: 144px;*/
	
	z-index:100;
	
	
	/*border-top:2px #1d1c1a solid;*/
	
	
	}
#nav_area4 ul
	{
		padding:0;
		margin:0;
		list-style:none;
	}
#nav_area4 li
	{
		font-size:13px;
		line-height:28px;
		float:none;
	}
#nav_area4 a
	{
		text-decoration:none;
		color:#fff;
		width:120px;
		text-align:left;
		padding-left:8px;
		border-bottom:1px #fff solid;
		font-family:Calibri;
		display:block;
		background-color:#666;
	}
#nav_area4 a:hover
	{
		text-decoration:none;
		color:#fff;
		border-bottom:1px #fff solid;
		background:#00BA8B;
		display:block;
		text-align:left;
		
		width:120px;
		
	}
</style>
<script type="text/javascript">

$(document).ready(function (){



$("#passup").click(function(){

		var newpass = $("#newpass");

		var conpass = $("#conpass");
         if(newpass.val() == "")

		{

			$("#npass").html("<font color='red'>Please Enter New Password </font>");	

			return false;

		}

		else

		{

		$("#npass").html("");

		}

         if(conpass.val() == "")

		{


			$("#cpass").html("<font color='red'>Please Enter Confirm Password </font>");	
			return false;

		}

		else

		{

		$("#cpass").html("");

		}

		if(conpass.val() != newpass.val())

		{

			$("#cpass").html("<font color='red'>Confirm Password does not match</font>");	

			return false;

		}

		else

		{

		$("#cpass").html("");

		}



	});

});	

</script>

    <!--<script src="pop/jquery-1.7.2.min.js"></script>-->
    <script src="pop/jquery.bpopup.min.js"></script>
    
 <script type="text/javascript" language="javascript"> 
    ;(function($) {

        $(function() {

            $('.my_button').bind('click', function(e) {

                e.preventDefault();

                $('#element_to_pop_up').bPopup();

            });


			 $('.my_button2').bind('click', function(e) {

                e.preventDefault();

                $('#element_to_pop_up2').bPopup();

            });
			
			
			 $('.my_button3').bind('click', function(e) {

                e.preventDefault();

                $('#element_to_pop_up3').bPopup();

            });
			
			 $('.my_button4').bind('click', function(e) {

                e.preventDefault();

                $('#element_to_pop_up4').bPopup();

            });
			
			 $('.my_button7').bind('click', function(e) {

                e.preventDefault();

                $('#element_to_pop_up7').bPopup();

            });

        });

    })(jQuery);
	
	


</script>



<div id="element_to_pop_up" class="popupbox tableout" style="height:auto; width:auto; margin-top:100px; " >

	  <div id="header">

	  

	  </div>

	   <a class="b-close" style="width:32px; height:26px; float:left;text-align:center;  margin-right:-12px;margin-top:-6px;"><img src="images/close_railroad.png" border="0" style="width:auto;"></a>

	   <br />

	   <div style="width:auto; height:auto; padding:20px; float:left; border:1px #ccc solid; border-radius:3px; margin:0px 30px 18px;">

	   <table class="tableout">

      <tr>

        <td><div id="category">

          <form method="post" action="<?php  $_SERVER['PHP_SELF'];  ?>"  enctype="multipart/form-data" onSubmit="return validate(this);" style="margin-bottom:0px;" >

            <table class="tablein"  >

			  <tr>

                <td valign="top" ><strong style="font-size:16px; color:#000; font-weight:bold; padding-right:10px;"><font color="red">*</font>New Password :</strong> </td>

                <td valign="top"><input type="password" name="newpass" id="newpass" style="width:200px" />

                  &nbsp;<br /><span id="npass"></span><br /></td>

              </tr>

              <tr>

                <td valign="top" ><strong style="font-size:16px; color:#000; font-weight:bold; padding-right:10px;"><font color="red">*</font>Confirm Password :</strong> </td>

                <td valign="top"><input type="password" name="conpass" id="conpass" style="width:200px" />

                  &nbsp; <br /><span id="cpass"></span><br /></td>

              </tr>

                <td></td>

                <td><input type="submit"  id="passup"  name="passup" class="btn"  value="Update" />

                  <input type="reset"  id="RESET"  name="RESET" class="btn  btn-danger"  value="Clear" />

                </td>

              </tr>

              <tr>

                <td colspan="2" style="bottom:0"><p style="margin: 0;">Note : Fields marked by an asterisk(<font color="red">*</font>) are required fields. </p></td>

              </tr>

            </table>

          </form></td>

      </tr>

    </table>	   

	   </div>
       </div>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
    	<div class="container"> 
    		<!--<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a>-->
    		<a class="brand" href="index.php">Kukoo's - Admin Panel</a>
			<div class="nav-collapse">
				<ul class="nav pull-right">
                    
                </ul>
                
            </div>
            <!--/.nav-collapse --> 
        </div>
        <!-- /container --> 
    </div>
    <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
            <ul class="mainnav">
				<li <?php if($page_id=='1'){echo"class='active'";}?>><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span> </a> </li>
				<li <?php if($page_id=='2'){echo"class='active'";}?>><a href="managebanner.php?page=1&ipp=20"><i class="fa fa-file-text-o"></i><span>Banner</span></a> </li>
				<li <?php if($page_id=='3'){echo"class='active'";}?>><a href="managepages.php?page=1&ipp=20"><i class="fa fa-file-text-o"></i><span>CMS Pages</span> </a> </li>
				<li <?php if($page_id=='8'){echo"class='active'";}?>><a href="manage_product.php?page=1&ipp=20"><i class="fa fa-file-text-o"></i><span>Product</span> </a> </li>
				<li <?php if($page_id=='4'){echo"class='active'";}?>><a href="manage_clientspeak.php?page=1&ipp=20"><i class="fa fa-file-text-o"></i><span>Client Speak</span> </a> </li>
				<li <?php if($page_id=='5'){echo"class='active'";}?>><a href="manageservice.php?page=1&ipp=20"><i class="fa fa-file-text-o"></i><span>Services</span> </a> </li>
				<li <?php if($page_id=='7'){echo"class='active'";}?>><a href="managemeettheteam.php?page=1&ipp=20"><i class="fa fa-file-text-o"></i><span>Meet The Team</span> </a> </li>
				<!--<li <?php if($page_id=='6'){echo"class='active'";}?>><a href="manageour_property.php?page=1&ipp=20"><i class="fa fa-file-text-o"></i><span></span> </a> </li>-->
                <li><a href="javascript:void(0);" class="my_button"><i class="fa fa-key"></i><span>Change Password</span> </a> </li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>Logout</span> </a> </li>
			</ul>
        </div>
        <!-- /container --> 
    </div>
    <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->