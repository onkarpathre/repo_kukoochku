<?php ob_start();
session_start();

if(!isset($_SESSION['admin_username']))

	{

		header("location: logout.php"); 

	} 

	
	include_once("connect/helper.php");
	
	
	$select_bnr_count = $obj->select("*","banner","1");  
	$bnrcnt = count($select_bnr_count);
	if($select_bnr_count=='no')
	{
		$bnrcnt=0;
	}
	$select_svr_count = $obj->select("*","service","1");  
	$svrcnt = count($select_svr_count);
	if($select_svr_count=='no')
	{
		$svrcnt=0;
	}
	$select_page_count = $obj->select("*","pages","1");  
	$pagecnt = count($select_page_count);
	if($select_page_count=='no')
	{
		$pagecnt=0;
	}
	$select_cs_count = $obj->select("*","clientspeak","1");  
	$cscnt = count($select_cs_count);
	if($select_cs_count=='no')
	{
		$cscnt=0;
	}
?>
<?php 
$page_id='1';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard - Kukoo's Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css1/font-awesome.css" rel="stylesheet">
    <link href="css1/style.css" rel="stylesheet">
    <link href="css1/pages/dashboard.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<style>
	.welcome_details
	{
		width:30%;
	}
	.welcome_item1
	{
		border:1px #337ab7 solid;
		min-height:130px;
		border-radius:4px;
		padding:15px 3px;
		background-color:#337ab7;
		color:#fff;
		text-align:center;
	}
	
	.welcome_item1 i
	{
		font-size: 86px;
    margin-bottom: 16px;
    margin-top: 7px;
	}
	
	.welcome_item1 h3
	{
		margin-top:0px;
	}
	
	.welcome_item2
	{
		border:1px #5cb85c solid;
		min-height:130px;
		border-radius:4px;
		padding:8px;
		background-color:#5cb85c;
		color:#fff;
		text-align:center;
	}
	
	.welcome_item2 i
	{
		font-size: 86px;
    margin-bottom: 16px;
    margin-top: 7px;
	}
	
	.welcome_item2 h3
	{
		margin-top:12px;
	}
	
	.welcome_item3
	{
		border:1px #f0ad4e solid;
		min-height:130px;
		border-radius:4px;
		padding:8px;
		background-color:#f0ad4e;
		color:#fff;
		text-align:center;
	}
	
	
	.welcome_item3 i
	{
		font-size: 86px;
    margin-bottom: 16px;
    margin-top: 7px;
	}
	
	.welcome_item3 h3
	{
		margin-top:12px;
	}
	
	.welcome_item4
	{
		border:1px #d9534f solid;
		min-height:130px;
		border-radius:4px;
		padding:8px;
		background-color:#d9534f;
		color:#fff;
		text-align:center;
	}
	
	
	.welcome_item4 i
	{
		font-size: 86px;
    margin-bottom: 16px;
    margin-top: 7px;
	}
	
	.welcome_item4 h3
	{
		margin-top:12px;
	}
	
	
	.welcome_item5
	{
		border:1px #462066 solid;
		min-height:130px;
		border-radius:4px;
		padding:8px;
		background-color:#462066;
		color:#fff;
		text-align:center;
	}
	
	
	.welcome_item5 i
	{
		font-size: 86px;
    margin-bottom: 16px;
    margin-top: 7px;
	}
	
	.welcome_item5 h3
	{
		margin-top:12px;
	}
	
	.1st_item
	{
		padding-left:0;
	}
	</style>
	<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
</head>
<body onload="startTime()">
<?php include_once('header.php');?>
<div class="main">
    <div class="main-inner">
        <div class="container">
				<div class="col-md-12">
				<h1 style="text-align:center; font-size: 40px; margin-bottom:35px; margin-top:20px; font-family: 'Bree Serif', serif;">Welcome TO Kukoo's Admin Panel</h1>
				</div>
				<div class="col-md-12" style="padding:0;">
				<a href="manage_banner.php?page=1&ipp=20">
					<div class="col-md-3 welcome_details" style=" padding-left: 0;">
						<div class="welcome_item1">
						<i class=" fa fa-picture-o" aria-hidden="true"></i>
						<h3><?php echo $bnrcnt;?> Banner images</h3>
						</div>
					</div>
				</a>
				<a href="manageservice.php?page=1&ipp=20">
				<div class="col-md-3 welcome_details">
					<div class="welcome_item2">
					<i class="fa fa-users" aria-hidden="true"></i>
					<h3><?php echo $svrcnt;?> Services</h3>
					</div>
				</div>
				</a>
				<a href="managepages.php?page=1&ipp=20">
				<div class="col-md-3 welcome_details">
					<div class="welcome_item3">
					<i class="fa fa-file-text" aria-hidden="true"></i>
					 <h3><?php echo $pagecnt;?> Pages</h3>
					</div>
				</div>
				</a>
			</div><!--col-md-12-->
		    <div class="col-md-12" style="padding:0;">
				<a href="manage_clientspeak.php?page=1&ipp=20">
				<div class="col-md-3 welcome_details" style=" padding-left: 0;">
					<div class="welcome_item5">
					<i class="fa fa-file-text" aria-hidden="true"></i>
					<h3><?php echo $cscnt;?>Client Speak</h3>
					</div>
				</div>
				</a>
				<a href="#">
				<div class="col-md-3 welcome_details">
					<div class="welcome_item4">
					<i class="fa fa-file-text" aria-hidden="true"></i>
					<h3><?php //echo $real_estatecnt;?> Refresh</h3>
					</div>
				</div>
				</a>
				<div class="col-md-3 welcome_details">
					<div id="clockdate">
						<div class="clockdate-wrapper">
							<div id="clock"></div>
								<div id="date"></div>
						</div>
					</div>
		   
				</div>
			</div><!--col-md-12-->
					<!-- /row --> 
				</div>
        <!-- /container --> 
    </div>
    <!-- /main-inner --> 
</div>
<!-- /main -->
<?php include_once('footer.php');?>

<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
 <script src="pop/jquery-1.7.2.min.js"></script>
 <script src="pop/jquery.bpopup.min.js"></script> 
<script src="js1/excanvas.min.js"></script> 
<script src="js1/chart.min.js" type="text/javascript"></script> 
<script src="js1/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js1/base.js"></script> 
<!-- /Calendar -->
<script src="js1/admin_scripts.js"></script> 

<script>
function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
</script>


<style type="text/css">
.clockdate-wrapper {
    background-color: #333;
    padding:25px;
    height:115px;
    width:84%;
    text-align:center;
    border-radius:5px;
    margin:0 auto;
    margin-top:0;
}
#clock{
    background-color:#333;
    font-family: sans-serif;
    font-size:53px;
    text-shadow:0px 0px 1px #fff;
    color:#fff;
	margin-top:25px;
	margin-bottom:50px;
}
#clock span {
	color:#888;
	text-shadow:0px 0px 1px #333;
	font-size:20px;
	position:relative;
	top:-15px;
	left:-10px;
}
#date {
    letter-spacing:0px;
    font-size:14px;
    font-family:arial,sans-serif;
    color:#fff;
}
</style>
	
</body>
</html>
