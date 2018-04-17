<?php
	$page_id = '2';
	include_once("kukoos2016/connect/helper.php");
	$sel_page = $obj->select("*","pages","id='2'");
	$page_img = $sel_page[0][1];
	$name = $sel_page[0][2];
	$content = $sel_page[0][3];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 
    <title>Ku Koos's Eat Healthy Be Healthy | The Sign of Good Taste</title>

	<!--<link rel="icon" type="image/png" href="images/favicon.png">-->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
	<!--local-->
	<link href="style.css" rel="stylesheet">
	
	<!--menu-->
	<link rel="stylesheet" href="styles.css">
   <script src="jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
   <!--animation-->
   	<script src="animation_css/wow.min.js"></script>
    <script src="animation_css/custom.js"></script>
	<link href="animation_css/animate.css" rel="stylesheet" />  
	
	<!--font-icon-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<style>
	.carousel-control.left, .carousel-control.right {
   background-image:none !important;
   filter:none !important;
}

.main_menu
{
	background-color:#F8C301;
}

.about_team
{
	
}

.about_team ul
{
	list-style:none; padding-left: 0px !important; color:#ff0000; margin:15px 0 0 0;
}



.about_team ul li {
    
 color:#000000; padding-left: 1em; 
    text-indent: -.7em;
	font-weight:500;
	margin-bottom:10px;
}
.about_team ul li:before {
    content: "\f105";
    font-family: FontAwesome;
    color: #E67817; /* or whatever color you prefer */
    margin-right: 10px;
font-weight:bold;
}

</style>

  </head>
  <body>
    
	<!--header-->
	<?php include_once("header.php");?>
	<!--header-->
	
<!--banner-area-->
<!--<div class="internal_banner">
	
<img src="images/internal_banner.jpg" class="img-responsive">
	
</div>-->	
<!--banner-area-->
	


<!--about_us_area-->
<div class="internal_content">
<div class="container">
<div class="row">

<div class="col-md-12">

<h3>About Us</h3>

<!--Welcome to the Ku Koo Ch Ku poultry farm. In operation in the West of Maharashtra region since 1987, Ku Koo Ch Poultry Farm produce 
high quality and fresh meat for customer. <br /><br />

It is involved in cutting edge technology with regards to processing and operations of the business. The company manage and operates a 
group of rearing farms providing first class breeding flocks that provide hatching eggs to our hatchery with first class eggs for setting 
and hatching, ensuring the best quality control when placing chicks in our broiler farms. We also provide high quality of feed, medical 
and assistance to broiler farm.  All elements of the agricultural process are audited to industrial standards and conform to many retail 
protocols.<br /><br />

The company runs its own transport department covering live transport, feed, chilled and frozen distribution. Our distribution reaches 
every corner of the Mumbai, Thane, Pune and Raigad, and we also operate with traders and third party companies to fulfil market 
requirements.<br /><br />

Processing takes place at our Alibag plant (about 100KM south of Mumbai). The plant maintains high standards and is continually verified 
with constant auditing by the Hygiene and Food Federation Service, and consistently achieves the highest grade within the criteria of 
Food auditing.<br /><br />

The whole poultry production chain, from the farms and feed mills to the finished poultry meat products leaving the processing plants, 
is subject to independent examination and auditing either under the sector’s own assurance schemes, or under official regulatory inspection 
and testing programmes with published results. This adds up to the highest level of assurance and transparency of safe and wholesome poultry 
meat for consumers.-->
<?php echo $content;?>
</div>
</div>



<!--company_history-->
<div class="company_history">

<div class="row text-center">

<h3 style="margin:10px 0 30px 0;">Milestone</h3>

<!--01-->
<div class="col-md-4">

<span>1987</span>

<p>Broiler Farm 5,000 birds per year</p>

</div>
<!--01-->


<!--01-->
<div class="col-md-4">

<span>1989</span>

<p>Broiler Farm 12,000 birds per year</p>

</div>
<!--01-->


<!--01-->
<div class="col-md-4">

<span>1992</span>

<p>Broiler Farm 36,000 birds per year</p>

</div>
<!--01-->

<!--01-->
<div class="col-md-4">

<span>1998</span>

<p>Broiler Farm 120,000 birds per year Feed mill plant 15 tons per day</p>

</div>
<!--01-->

<!--01-->
<div class="col-md-4">

<span>2006</span>

<p>Contract Broiler farming started Alibag</p>

</div>
<!--01-->

<!--01-->
<div class="col-md-4">

<span>2007</span>

<p>Breeder farm, 7,500 per year</p>

</div>
<!--01-->

<!--01-->
<div class="col-md-4">

<span>2008</span>

<p>Hatchery, 20,000 per week
CBF branch at Pali Raigad</p>

</div>
<!--01-->

<!--01-->
<div class="col-md-4">

<span>2010</span>

<p>Breeder farm, 28,000 per year</p>

</div>
<!--01-->

<!--01-->
<div class="col-md-4">

<span>2012</span>

<p>Hatchery, 140,000 per week</p>

</div>
<!--01-->

<!--01-->
<div class="col-md-4">

<span>2013</span>

<p>Feed mill plant 100 Tons per day
Head Office at Mapgoan, Alibag</p>

</div>
<!--01-->

<!--01-->
<div class="col-md-4">

<span>2014</span>

<p>Chicken Retail shop at Chondhi Alibag
Broiler Farm 250,000 birds per year</p>

</div>
<!--01-->

<!--01-->
<div class="col-md-4">

<span>2015</span>

<p>CBF branch at Talegav, Pune</p>

</div>
<!--01-->

<!--01-->
<div class="col-md-4">

<span>2016</span>

<p>Hatchery, 580,000 per week CBF branch at Alephata, Pune CBF branch at Murbad, Thane Processing plant 2,000 per day</p>

</div>
<!--01-->


</div>

</div>
<!--company_history-->


<!--team-->
<div class="our_team">

<div class="row text-center">


<h3 style="margin:10px 0 30px 0;">Meet the Team</h3>

<div class="col-md-3"></div>

<?php
	$sel_team1 = $obj->select("*","meet_the_team","id='3'");
	$img1 = $sel_team1[0][2];
	$name1 = $sel_team1[0][1];
?>
<div class="col-md-2">

<img src="kukoos2016/uploads/team/<?php echo $img1;?>" class="img-responsive img-circle center-block" />

<h4><?php echo $name1;?></h4>

</div>

<?php
	$sel_team2 = $obj->select("*","meet_the_team","id='4'");
	$img2 = $sel_team2[0][2];
	$name2 = $sel_team2[0][1];
?>
<div class="col-md-2">

<img src="kukoos2016/uploads/team/<?php echo $img2;?>" class="img-responsive img-circle center-block" />

<h4><?php echo $name2;?></h4>

</div>

<?php
	$sel_team3 = $obj->select("*","meet_the_team","id='5'");
	$img3 = $sel_team3[0][2];
	$name3 = $sel_team3[0][1];
?>
<div class="col-md-2">

<img src="kukoos2016/uploads/team/<?php echo $img3;?>" class="img-responsive img-circle center-block" />

<h4><?php echo $name3;?></h4>

</div>

<div class="col-md-3"></div>

</div>

</div>
<!--team-->




</div>
</div>
<!--about_us_area-->




<!--bottom_tile_services-->
		<div style="background-color:#f0f0f0;">
	<?php include_once("bottom_tile_services.php");?>
	</div>
	<!--bottom_tile_services-->

	
	
	<!--footer-->
	<?php include_once("footer.php");?>
	<!--footer-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	
	<link href="slider/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="slider/jquery.flexisel.js"></script>
	
	<script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo1").flexisel();
    $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo3").flexisel({
        visibleItems: 1,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo4").flexisel({
        clone:false
    });
    
});
</script>
	
	
	
	
		
			<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
		

	<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
	
	
	
	
  </body>
</html>