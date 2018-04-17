<?php
	$page_id = '6';
	include_once("kukoos2016/connect/helper.php");
	$sel_page = $obj->select("*","pages","id='6'");
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

<style>
#cap-img{
	background-image: url("images/captcha.jpg");
    color: #fff;
    font-size: 26px;
    font-weight: bold;
    height: 34px;
    margin-right: 10px;
    padding: 4px;
}

@media screen and (max-width: 480px) {
#cap-img{
	background-image: url("images/captcha.jpg");
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    height: 34px;
    margin-right: 10px;
    padding: 4px;
}
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
	
	
	
	<div class="col-md-12">
	
	
	<h3>Contact Us</h3>
	
	
	</div>
	
	
	<div class="col-md-6">
	
	<div class="get-in-touch-add">
	
	<!--<h4>KuKoo's Eat Healthy Be Healthy</h4>
	
	<p>
	<b>Address:</b> <br>
	Kukoos poultry Farm <br />

At Post - Mapgaon, <br />

Taluka Alibaug - 402 201
	</p><br>
	
	<p>
	<b>Tel:</b> <br> <a href="tel:+917798889507">+91 779 888 9507</a>
	</p>
	
	<p>
	<b>Email:</b> <br> <a href="mailto:info@kukoos.com">info@kukoos.com</a>
	</p>-->
	
	<?php echo $content;?>
	
	</div>
	
	</div>
	
	
	<div class="col-md-6 contact_right">
	
	<h4 style="color: #291866;">Get in touch with us</h4>
	
	<form action="contact_action.php" method="post" onsubmit="return captchavalidate();">
	<div class="form-group">
	<input type="text" class="inp" placeholder="Name*" name="name" required="">
	</div>
	
	<div class="form-group">
	<input type="email" class="inp" placeholder="Email*" name="email" required="">
	</div>
	
	<div class="form-group">
	<input type="text" placeholder="Phone Number*" class="inp" name="contact" required="" onkeypress="return isNumberKey(event)">
	</div>
	
	<div class="form-group">
	<textarea class="inp_txt" name="message" placeholder="Message"></textarea>
	</div>
	
        <div class="form-group">
	<label class="control-label">Please Enter Verification Code in the box <span style="color:#FF0000; font-size:16px;">*</span></label>
    <?php
		$cap = "";
		for($i=1;$i<=5;$i++){
			$cap .= rand(1,9);
		}
	?>
        <div> 
			<span id="cap-img" style="float:left; line-height:29px; text-align: center; width:22%;"> <?php print_r($cap); ?></span>
                      <span style="width:74%;">
						<input type="text"  id="captcha"  class="inp" style="width:74%;" required="" onkeypress="$('#verifycode').hide();" />
						<span id="verifycode" style="color:#FF0000; font-size:16px; display:none;">Verification Code not matched</span>
					  </span>
                      <input type="hidden"   id="captcha1" value="<?php echo $cap;?>" class="log_btn" />
        </div>
 </div> 


	<div class="">
	<input type="submit" class="inp-submit" value="Submit">
	</div>
	
	</form>
	
	</div>

	
	<div class="home-map">
	<div class="container">
	<div class="row">
	<div class="col-md-12" style="border:1px #ccc solid; margin:30px 0 10px 0;">
	
	<!--main-map-area-->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30241.04529142094!2d72.86376145146684!3d18.658131789042052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be87a3b9826f96b%3A0xa9634e5680f68b81!2sAlibag%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1477572131115" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	<!--main-map-area-->
	
	
	</div>	
	</div>
	</div>
	</div>
	
	<div class="home-map">
	<div class="container">
	<div class="row">
	<div class="col-md-12" style="border:1px #ccc solid; margin:30px 0 10px 0;">
<script language='javascript1.1'>
var nr_placeid = 'ChIJSSSDoXh36DsRMHWZiqz39e8';
var nr_width = 980;
var nr_height = 305;
var nr_directreviewbox = 0;
var nr_buttonCol = "df4a32"; // Amend this value to change your review button colour (hex color values only rrggbb)
var nr_transparency = false; // Set this to true to have a transparent widget with no border
</script>
<script language='javascript1.1' src='https://www.netrite.net/google-review-code/googlereviews_ssl.js'></script>

</div>	
	</div>
	</div>
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
		<script>
	function captchavalidate()
	{
		var captcha = $("#captcha").val();
		var captcha1 = $("#captcha1").val();
		
		if(captcha != captcha1)
		{
			$("#verifycode").show();
			return false;
		}
		
		return true;
	}
</script>	
<script>
		function isNumberKey(evt)
            {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode != 46 && charCode > 31 
                && (charCode < 48 || charCode > 57))
                return false;
                {
                return true;
				}
            }  
		</script>
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