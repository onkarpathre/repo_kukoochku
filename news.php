<?php
	$page_id = '4';
	include_once("kukoos2016/connect/helper.php");
	$sel_page = $obj->select("*","pages","id='4'");
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
	 
<title>KuKooChKu Poultry Farm</title>

<meta name="keywords" content="Breeder Farming, Hatchery, Feed Mill, Quality Control Laboratory, Contract Broiler Farming, poultry processing plant and Marketing live birds & fresh chilled chicken, Tandoori, Breast Boneless, Leg Boneless, Drumsticks, Wings, Legcut, Lever, Gizzards and Heart, Chicken in Mumbai, Fresh Chicken suppliers in Mumbai, Fresh chicken in Mumbai, kukoochku poultry Mumbai, kukoochku chicken Mumbai, kukoochku poultry Menu, Chicken fast food in Mumbai, Poultry India, Poultry Farming, Poultry Farming in Mumbai, Whole Chicken, Precut Chicken, Chicken Legs, Chicken Breast, Chicken Thigh, Chicken Kheema, Chicken Lollipops, Chicken Liver, Chicken Curry pieces, Chicken Drumsticks, Chicken Bacon Rashers, Chicken Cheese n Onion Sausages, Chicken Cocktail Sausages, Chicken Sausages, Chicken Salami, Chicken Shami Kabab, Chicken Seekh Kabab, Chicken Burger Patty, Chicken Nuggets, Chicken Biryani, Chicken Meatloaf Sandwich, Chicken Junglee Sandwich, Chicken Mayo Sandwich, Chicken Burger, Chicken Meatballs, Chicken Kheema Patties, Pepper Garlic Grilled Chicken, Chicken Roll, Chicken Lollipop, Tandoori Chicken, Chicken Leg Roast, Butter Chicken, Chicken Kheema Mutter, Chicken Masala, Fresh Produce, Ready to Cook Food, Ready to eat Fast Food"/>

<meta name="description" content="KuKoochKu  Poultry Farm is one of the leading Contract Broiler farming company in Maharashtra, India. It is a fully integrated company with operations of Breeder Farming, Hatchery, Feed Mill, Quality Control Laboratory, Contract Broiler Farming, poultry processing plant and Marketing live birds & fresh chilled chicken. kukoochku Poultry is synonymous with fresh and superior quality poultry products suppliers in Mumbai (India). Fresh Chicken suppliers in Mumbai"/>

<link rel="canonical" href="http://www.kukoochku.com/"/>
<meta name="author" content="http://www.kukoochku.com"/>
<meta name="robots" content="index, follow"/>
<meta name="googlebot" content="index, follow"/>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@KuKoochKu">
<meta name="twitter:creator" content="@KuKoochKu">
<meta name="twitter:title" content="KuKoochKu Poultry Farm, Alibag, Raigad">
<meta name="twitter:description" content="KuKoochKu  Poultry Farm is one of the leading Contract Broiler farming company in Maharashtra. It is a fully integrated company with operations of Breeder Farming, Hatchery, Feed Mill, Quality Control Laboratory, Contract Broiler Farming, poultry processing plant and Marketing live birds & fresh chilled chicken.">

<meta property="fb:app_id" content="357824251094453" />
<meta property="og:locale" content="en-IN" />
<meta property="og:title" content="KuKoochKu Poultry Farm, Alibag, Raigad" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="kukoochku.co.uk" />
<meta property="og:url" content="http://www.kukoochku.com />
<meta property="og:description" content="KuKoochKu  Poultry Farm is one of the leading Contract Broiler farming company in Maharashtra. It is a fully integrated company with operations of Breeder Farming, Hatchery, Feed Mill, Quality Control Laboratory, Contract Broiler Farming, poultry processing plant and Marketing live birds & fresh chilled chicken." />

<?php include_once("analyticstracking.php") ?>

	<link rel="icon" type="image/png" href="images/favicon.ico">

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
	</style>
<style>
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
	



<!--about_us_area-->
<div class="internal_content">
<div class="container">
<div class="row">

<div class="col-md-9">

<h3>News</h3>

<!--Data Coming Soon...-->
<?php echo $content;?>


</div>



</div>
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

	<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
		
	<link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
		<script src="owl-carousel/owl.carousel.js"></script>

		  <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 6,
		navigation: true,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
    </script>
		
	
	
	
	
  </body>
</html>