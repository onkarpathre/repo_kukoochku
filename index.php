<?php
	
	ob_start();
	session_start();
	include_once("kukoos2016/connect/helper.php");
	$page_id = '1';
	$bnr = $obj->select("*","banner","visible='yes' ORDER BY id");
	$svr = $obj->select("*","service","visible='yes' ORDER BY id");
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

  </head>
  <?php include 'loader.php'?>
  <div id="contents">
  <body>
    
	<!--header-->
	<?php include_once("header.php");?>
	<!--header-->
	
	<!--banner-area-->
<?php
	if($bnr != "no")
	{
?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php
				$cntbnrcarousel = 0;
				foreach($bnr as $bnr2=>$bnr_val)
				{
			?>
				<li data-target="#myCarousel" data-slide-to="<?php echo $cntbnrcarousel;?>" class="<?php if($cntbnrcarousel == 0){echo 'active';}else{echo '';}?>"></li>
			<?php
					$cntbnrcarousel++;
				}
			?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		<?php
			$cntbanner = 0;
			foreach($bnr as $bnrr)
			{
				$cntbanner++;
				if($cntbanner==1)
				{
		?>
				<div class="item active">
					<img src="kukoos2016/uploads/banner/<?php echo $bnrr[1];?>" style="width:100%;"/>
					<div class="carousel-caption">
						<h1 class="wow bounceIn animated" style="visibility: visible;"><?php echo $bnrr[2];?></h1>
					</div>
				</div>
		<?php				
				}
				else
				{
		?>
				<div class="item">
					<img src="kukoos2016/uploads/banner/<?php echo $bnrr[1];?>" style="width:100%;"/>
					<div class="carousel-caption">
						<h1 class="wow bounceIn animated" style="visibility: visible;"><?php echo $bnrr[2];?></h1>
					</div>
				</div>
		<?php	
				}
			}
		?>
		</div>
	
	<!-- Left and right controls -->
	<?php
		if(count($bnr) > 1)
		{
	?>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	<?php
		}
	?>
	
	</div>
<?php
	}
        else
        {
?>
        <div style="width:100%; height:40px; background: #f0f0f0;"></div>
<?php
        }
?>	
<!--banner-area-->
	


<!--about_us-->
<?php
$wel = $obj->select("*","pages","id='7'");
$image_wel = $wel[0][1];
$name_wel = $wel[0][2];
$content_wel = $wel[0][3];
?>
<div class="about_us_main">
<div class="container">

<div class="row">

<div class="col-md-4">


<!--<img src="images/logo.png" class="img-responsive center-block;" />-->
<img src="kukoos2016/uploads/page/<?php echo $image_wel;?>" class="img-responsive center-block;" />


</div>

<div class="col-md-8">

<div class="about_us">
<!--<h3>Welcome to kukoos Farm</h3>-->
<h3><?php echo $name_wel;?></h3>

<!--<p>
Welcome to the Ku Koo Ch Ku poultry farm. In operation in the West of Maharashtra region since 1987, Ku Koo Ch Poultry Farm produce high quality and
fresh meat for customer. <br /><br />

It is involved in cutting edge technology with regards to processing and operations of the business. The company manage and operates a group of rearing 
farms providing first class breeding flocks that provide hatching eggs to our hatchery with first class eggs for setting and hatching, ensuring the 
best quality control when placing chicks in our broiler farms. We also provide high quality of feed, medical and assistance to broiler farm.  All 
elements of the agricultural process are audited to industrial standards and conform to many retail protocols.
</p>-->
<p><?php echo $content_wel;?></p>
</div>

</div>

</div>

</div>	
</div>	
<!--about_us-->	

	
	
	<!--clients-speak-->
	<?php 
		$clientspeak1 = $obj->select("*","clientspeak","visible='yes' ORDER BY id DESC");
		
		if($clientspeak1!='no')
         {  
     ?>
	<div class="home_clients_speak">
	
	<div class="container">
	<div class="row">
	<h3>What our Clients are saying?</h3>
	
	
	<!--main-testimonials-->
		
	<div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">
								 <?php
                                 $cntclient = 0;
                                 foreach($clientspeak1 as $clientspeak2)
                                 {
			                        $cntclient++;
			                        if($cntclient==1)
		                         {
	                             ?>
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <!--<blockquote>-->
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                           <p><?php echo $clientspeak2[1];?></p>
                                            <h4 style="font-size:16px; font-weight:600;"><?php echo $clientspeak2[2];?></h4>
											
                                            </div>
                                        </div>
                                    <!--</blockquote>-->
                                </div>
								<?php				
				 
		                         }
		                          else
		                         {
                                  ?>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <!--<blockquote>-->
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                            <p><?php echo $clientspeak2[1];?></p>
                                            <h4><?php echo $clientspeak2[2];?></h4>
											
                                            </div>
                                        </div>
                                    <!--</blockquote>-->
                                </div>
											<?php	
											}
											
											}
											?>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <?php
								if(count($clientspeak1)>1)
								{
							?>
								<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
								<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
							<?php
								}
							?>
                        </div>
                    </div>
					
	<!--main-testimonials-->
	
	</div>
	</div>
	
	</div>
	<?php
		}  
	?>
	<!--clients-speak-->
	
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
  </div>
</html>