<?php 

$getname=$_POST['name'];
$getemail=$_POST['email'];
$getcont=$_POST['contact'];
$getmessage=$_POST['message'];

    $from = "info@kukoos.com";
	$headers ="From: " . $from . "\r\n" ;
	$headers .= "MIME-Version: 1.0 \r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
	$to = "info@kukoos.com";
	$subject = "New Enquiry– KuKoo's";
    $body = "
	<body>

	<div style='width:600px;  height:auto; margin:auto; '>
	<h3 style='text-align:center; margin-top:10px; margin-bottom:5px;'><a href='#' target='_blank' style='color:#02BDD5; text-align:center; font-family:Calibri, Arial, Helvetica, sans-serif; text-decoration:none;'>KuKoo's</a></h3>
	</div>

	<div style='width:600px; height:70px; line-height:70px; background: #02BDD5; margin:0px auto;border-radius: 3px 3px 0px 0px; box-shadow:0 0 5px #ccc;'>
	<h1 style='color:#fff; text-align:center; font-family:Calibri, Arial, Helvetica, sans-serif; margin:0;'>New Enquiry</h1>
	</div>

	<div style='width:598px; height:auto; margin:0px auto; border:1px solid #02BDD5; font-family:Calibri, Arial, Helvetica, sans-serif; padding:0; border-radius: 0px 0px 3px 3px; box-shadow:0 0 5px #ccc;'>

	<div style='padding-top:10px; margin-bottom:7px;  padding-left:10px;'>
	<strong style='font-size:17px;'>Name:</strong><span style='padding-left:7px; font-size:15px;'>$getname</span>
	</div>

	<div style='border-top:1px dotted #ccc; margin:10px 10px;'></div>

	<div style=' margin-top:7px; margin-bottom:7px; padding-left:10px;'>
	<strong style=' font-size:17px;'>Email:</strong><span style='padding-left:7px; font-size:15px;'>$getemail</span>
	</div>

	<div style='border-top:1px dotted #ccc; margin:10px  10px;'></div>

	<div style=' margin-top:7px; margin-bottom:7px;  padding-left:10px;'>
	<strong style=' font-size:17px;'>Mobile No:</strong><span style='padding-left:7px; font-size:15px;'>$getcont</span>
	</div>

	<div style='border-top:1px dotted #ccc; margin:10px  10px;'></div>


	<div style=' margin-top:7px; margin-bottom:7px; padding-left:10px;'>
	<strong style=' font-size:17px;'>Message:</strong><span style='padding-left:7px; font-size:15px; line-height:25px;'>
	$getmessage</span>
	</div>


	<div style='border-top:none; margin:10px  10px;'></div>


	</div>

	</body>";
	if(mail($to,$subject,$body,$headers))
	{
		echo "<script type=text/javascript>
		alert('Your Message has been successfully delivered. You will get feedback soon !!!');
		      </script>";
	}
	else
	{
		echo "<script type=text/javascript>
		  alert('Your Message has failed due to some errors. Please try after sometime !!!');
		</script>";
	}
	echo "<script type=text/javascript> location.href='contact_us.php'; </script>";
	
?>