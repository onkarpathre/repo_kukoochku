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

<script type="text/javascript" charset="utf-8">

function isInteger(s)

{   var i;

	for (i = 0; i < s.length; i++)

	{   

		var c = s.charAt(i);

		if (((c < "0") || (c > "9"))) return false;

	}

	return true;

}


function ShowPopup(id)

 {

$('#mask').show();

$('#popup').show().center();

}

function ShowPopup()

{

var popup = document.getElementById("popup");

popup.style.display = 'block';

var popup = document.getElementById("mask");

popup.style.display = 'block';

}

function HidePopup()

 {

$('#mask').hide();

$('#popup').hide();

}



$(".btnClose").live('click', function () {

HidePopup();

});





</script>



 <title>Exopit</title><div id="mask">

	 

	  </div>

	  <div id="popup" class="popupbox tableout" style="height:245px; width:500px; margin-top:100px; " >

	  <div id="header">

	  

	  </div>

	   <a id="a" class="close" onclick="javascript:HidePopup();" href="#" ></a>

	   <br />

	   

	   <table class="tableout">

      <tr>

        <td><div id="category">

          <form method="post" action="<?php  $_SERVER['PHP_SELF'];  ?>"  enctype="multipart/form-data" onSubmit="return validate(this);" >

            <table class="tablein"  >

			  <tr>

                <td><strong>New Password :</strong> </td>

                <td valign="top"><input type="password" name="newpass" id="newpass" style="width:200px" />

                  &nbsp;<font color="red">*</font> <br /><span id="npass"></span><br /></td>

              </tr>

              <tr>

                <td><strong>Confirm Password :</strong> </td>

                <td valign="top"><input type="password" name="conpass" id="conpass" style="width:200px" />

                  &nbsp;<font color="red">*</font> <br /><span id="cpass"></span><br /></td>

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

<link rel="stylesheet" type="text/css" href="css/navmenu.css" />

<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
<div class="header"> <a href="welcome.php"><img src="images/logo.png" style="width:auto;"/></a> </div>
<div class="navbar">

  <div class="navbar-inner">

    <div class="container">

      <ul class="nav">

        <li <?php if( $page == "banner"){ echo 'class="active dropdown"' ;} else { echo 'class = "dropdown"' ; } ?> >
         <a href="#"><i class="icon-list"></i> Banner &nbsp;<i class="icon-caret-down"></i></a>
            <ul style="left: auto;" class="dropdown-menu">
			 <li <?php if( $li == "banner1") echo 'class="active"' ?> > <a href="addbanner.php">Add Banner</a> </li>
			 <li <?php if( $li == "banner2") echo 'class="active"' ?> > <a href="managebanner.php?page=1&ipp=20">Manage Banner</a> </li>
           </ul>
       </li>
	   
	   <li <?php if( $page == "logos"){ echo 'class="active dropdown"' ;}	else { echo 'class = "dropdown"' ; } ?> > 
		 <a href="#"><i class="icon-list"></i> Logos &nbsp;<i class="icon-caret-down"></i></a>
          <ul style="left: auto;" class="dropdown-menu">
             <li <?php if( $li == "logos1") echo 'class="active"' ?> > <a href="addcompanylogo.php">Add Logos</a> </li>
             <li <?php if( $li == "logos2") echo 'class="active"' ?> > <a href="managecompanylogo.php?page=1&ipp=20">Manage Logos</a> </li>
          </ul>
      </li>
	  
	  <li <?php if( $page == "property"){ echo 'class="active dropdown"' ;}	else { echo 'class = "dropdown"' ; } ?> > 
        <a href="#"><i class="icon-list"></i> Property &nbsp;<i class="icon-caret-down"></i></a>
          <ul style="left: auto;" class="dropdown-menu">
	        <li <?php if( $li == "property1") echo 'class="active"' ?> > <a href="addproperty.php?page=1&ipp=20">Add Property</a> </li>
		    <li <?php if( $li == "property2") echo 'class="active"' ?> > <a href="manageproperty.php?page=1&ipp=20">Manage Property</a> </li>
            <li <?php if( $li == "changepass") echo 'class="active"' ?> > <a href = "javascript:void(0);" onclick="javascript:ShowPopup();">Change Password</a> </li>
	     </ul>
      </li>
          	

      <li <?php if( $page == "content"){ echo 'class="active dropdown"' ;}	else { echo 'class = "dropdown"' ; } ?> > 
        <a href="#"><i class="icon-list"></i> CMS Pages &nbsp;<i class="icon-caret-down"></i></a>
         <ul style="left: auto;" class="dropdown-menu">
          <li <?php if( $li == "managepages") echo 'class="active"' ?> > <a href="managepages.php?page=1&ipp=20">Manage Pages</a> </li>
		</ul>
     </li>
	 
     <li <?php if( $page == "newsletter"){ echo 'class="active dropdown"' ;}	else { echo 'class = "dropdown"' ; } ?> > 
       <a href="#"><i class="icon-list"></i> NEWSLETTER: &nbsp;<i class="icon-caret-down"></i></a>
        <ul style="left: auto;" class="dropdown-menu">
          <li <?php if( $li == "managenewsletter") echo 'class="active"' ?> > <a href="managenewsletter.php?page=1&ipp=20">Manage Pages</a> </li>
        </ul>
     </li>	
				
     <li <?php if( $page == "news"){ echo 'class="active dropdown"' ;}	else { echo 'class = "dropdown"' ; } ?> > 
        <a href="#"><i class="icon-list"></i> Team &nbsp;<i class="icon-caret-down"></i></a>
         <ul style="left: auto;" class="dropdown-menu">
           <li <?php if( $li == "news1") echo 'class="active"' ?> > <a href="addmember.php">Add Member</a> </li>
           <li <?php if( $li == "news2") echo 'class="active"' ?> > <a href="managemember.php?page=1&ipp=20">Manage Members</a> </li>
        </ul>
    </li>     
    <li><a href="logout.php" style="color:#DA4F49;" ><i class="icon-off"></i> Logout</a></li>

      </ul>

    </div>

  </div>

</div>