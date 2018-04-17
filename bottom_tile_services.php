<?php
include_once("kukoos2016/connect/helper.php");

?>

<!--home-tile-section-->
<!--<div id="home-tile-section">
<div class="container">
<div class="row">



</div>
</div>
</div>-->
<!--home-tile-section-->




<!--home-tile-section-->
<div id="home-tile-section">
<div class="container">
<div class="row">
<div class="col-md-12">

<div id="owl-demo" class="owl-carousel">
<?php
		$svr1 = $obj->select("*","service","visible='yes' ORDER BY id");
		
		if($svr1 != "no")
		{
			$count = 0;
			foreach($svr1 as $svr12=>$svr1_val)
			{
				$count++;
?>              
<div class="item">
<div class="home-tile-section-main">
<a href="#">
<img src="kukoos2016/uploads/service/<?php echo $svr1_val[2];?>" class="img-responsive" />
<!---<img src="images/service-4.jpg" class="img-responsive" />-->
<!--<p>Broiler Poultry Feed</p>-->
<p><?php echo $svr1_val[1];?></p>
</a>
</div>			
</div>
	<?php
		}
	}
	else
	{
		
?>
	<p>Data Coming Soon...</p>
<?php
	}
?>
<!--<div class="item">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-4.jpg" class="img-responsive center-block" />
<p>Broiler Poultry Feed</p>
</a>
</div>			
</div>

<div class="item">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-4.jpg" class="img-responsive center-block" />
<p>Broiler Poultry Feed</p>
</a>
</div>			
</div>

<div class="item">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-4.jpg" class="img-responsive center-block" />
<p>Broiler Poultry Feed</p>
</a>
</div>			
</div>

<div class="item">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-4.jpg" class="img-responsive center-block" />
<p>Broiler Poultry Feed</p>
</a>
</div>			
</div>

<div class="item">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-4.jpg" class="img-responsive center-block" />
<p>Broiler Poultry Feed</p>
</a>
</div>			
</div>

<div class="item">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-4.jpg" class="img-responsive center-block" />
<p>Broiler Poultry Feed</p>
</a>
</div>			
</div>
<div class="item">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-4.jpg" class="img-responsive center-block" />
<p>Broiler Poultry Feed</p>
</a>
</div>			
</div>
<div class="item">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-4.jpg" class="img-responsive center-block" />
<p>Broiler Poultry Feed</p>
</a>
</div>			
</div>
<div class="item">
<div class="home-tile-section-main">
<a href="#">
<img src="images/service-4.jpg" class="img-responsive center-block" />
<p>Broiler Poultry Feed</p>
</a>
</div>			
</div>
-->
</div>

</div>
</div>
</div>
</div>
<!--home-tile-section-->

