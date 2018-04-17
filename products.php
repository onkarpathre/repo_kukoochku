<?php
	$page_id = '1';
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

<div class="col-md-9">

<h3>Products</h3>

Data Coming Soon...


</div>

<div class="col-md-3">


<!--01-->
<div class="col-md-12" style="padding:0; margin-bottom:25px;">
<div class="home-tile-section-main">

<a href="#">
<img src="images/service-1.jpg" class="img-responsive" />
<p>Contract Broiler Farming</p>
</a>

</div>
</div>
<!--01-->


<!--02-->
<div class="col-md-12" style="padding:0; margin-bottom:25px;">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-2.jpg" class="img-responsive" />
<p>Hatching Eggs & Day Old Chicks</p>
</a>
</div>
</div>
<!--02-->

<!--03-->
<div class="col-md-12" style="padding:0; margin-bottom:25px;">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-3.jpg" class="img-responsive" />
<p>Maize Procurement</p>
</a>
</div>
</div>
<!--03-->

<!--04-->
<div class="col-md-12" style="padding:0; margin-bottom:25px;">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-4.jpg" class="img-responsive" />
<p>Broiler Poultry Feed</p>
</a>
</div>
</div>
<!--04-->


</div>

</div>
</div>
</div>
<!--about_us_area-->




	

	
	
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