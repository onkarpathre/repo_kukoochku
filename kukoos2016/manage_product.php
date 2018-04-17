<?php 
ob_start(); 
include_once("connect/access.php"); 
include_once("connect/helper.php"); 
include_once("connect/paginator.class.php");

if( !(isset($_REQUEST['page'])) || !(isset($_REQUEST['ipp'])) )
{
	$flag = false;
}
else
{
$ans = $obj->select("*","product","flag=0 order by id desc");
}
//print_r($ans);
  		if($ans == 'no')
		{
			$flag = false;
			$count=0;
		}
		else
		{
			$count = count($ans);
			$flag = true;
		}
?>
<?php 
$page_id='8'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kukoo's | Manage Product</title>
<link href="css1/bootstrap.min.css" rel="stylesheet">
<link href="css1/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="css1/font-awesome.css" rel="stylesheet">
<link href="css1/style.css" rel="stylesheet">
<link href="css1/pages/dashboard.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.pack.js"></script>
<script type="text/javascript" src="js/script1.js"></script>
<script type="text/javascript" src="js/jquery.datepick.js"></script>
<link type="text/css" href="css/jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  function getid(id)
   {
    var r = confirm("Are you sure you want to make change ?");
	if (r == true)
	{
		
	var imgid = id;
	var dataString = "imgid="+imgid;
	$.ajax({
			type:"POST",
			url:"ajax-product-visibility.php",
			data:dataString,
			success:function(response){
            location.reload(); 
			}

		});
	}	
}
</script>
<script>
$(document).ready(function() {
	$("#forword").click(function(){
			getValueUsingClass();
	});	
 });
 function getValueUsingClass(){
	var chkArray = [];
	
	$(".checkbox1:checked").each(function() {
		chkArray.push($(this).val());
	});
	
	var selected;
	selected = chkArray.join(',');
	if(selected.length != ''){
		var r = confirm("Are you sure you want to delete ?");
		if (r == true)
		{
		       var datastring = "imgid="+ selected;
			  
			$.ajax({
						type: "POST",
						url: "delete_product.php",
						data: datastring,
						cache: false,
						success: function(msg)
						{
							if(msg == 1)
							{
							  alert("data deleted successfully");
							  location.reload();
							}
						}
					});
		}
		else
		{
			location.reload();
		}
			
	}
	else{
		alert("Please check at least one of the checkbox");	
	}
}
 </script>
<script type="text/javascript">
					
			function isInteger(s)
			{   
				var i;
				for (i = 0; i < s.length; i++)
				{   
				// Check that current character is number.
				var c = s.charAt(i);
				if (((c < "0") || (c > "9"))) return false;
				}
				// All characters are numbers.
				return true;
			}	
			function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : event.keyCode
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return false;
				
				return true;
			}					
            var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];			
			function imagefunction_new(oForm)
			{
			      
					var image = mainForm.files.value;
					
					if ( image =="")
					{
						alert("Please Select Image");
						return false;
					}
					var arrInputs = oForm.getElementsByTagName("input");
					//alert(arrInputs);
					for (var i = 0; i < arrInputs.length; i++) {
						var oInput = arrInputs[i];
						if (oInput.type == "file") {
							var sFileName = oInput.value;
							if (sFileName.length > 0) {
								var blnValid = false;
								for (var j = 0; j < _validFileExtensions.length; j++) {
									var sCurExtension = _validFileExtensions[j];
									if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
										blnValid = true;
										break;
									}
								}
				
								if (!blnValid) {
									alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
									return false;
								}
							}
						}
					}

              return true;

			}
			
	
		</script>
<style>
.input {
    border: 1px solid #ccc;
    border-radius: 2px;
    float: right;
    height: 30px;
    margin-bottom: 6px;
    margin-right: 10px;
    padding-left: 5px;
    width: 65px;
}
</style>
</head>
<body>
<?php include_once('header.php') ?>
<div class="main" style="border-bottom:none;">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget">
            <div class="widget-content" style="padding:0px;">
              <div class="widget big-stats-container">
                <div class="widget-header" style="border-top:0px; border-left:0px; border-right:0px; border-radius:5px 5px 0 0;" > <i class="icon-list-alt"></i>
                  <h3>Manage Product</h3>
                </div>
                <div id=""  oncontextmenu="return false;" style="min-height:500px;">
                  <div style="float:left; margin-bottom:0px; margin-top:23px; width:auto; height:auto; overflow:hidden;"> <a  class="btn btn-small btn-primary my_button3" title="Add New Product" style="height:29px; font-size:15px; line-height:28px; width:90px; margin-left:15px;">Add Product</a> </div>
                  <?php
			if($flag)
			{
			?>
		    <div id="images_data" >
			<?php 
			if($count > 0)
			{
			?>
                    <div class="pagination" style="width:85%; float:right; text-align:right; margin-top:24px; margin-right:5px;">
                      <div class="pagination_left" style="border:1px #cc solid; width:auto; height:auto; overflow:hidden; float:right;">
                        <?php
							$pages = new Paginator;  
							echo $pages->display_items_per_page(); 
						?>
                      </div>
                      <div class="pagination_right" style="padding-left:10px; float:right;"> <span class="per_page" >
                        <?php //echo $pages->display_jump_menu();   ?>
                        </span> <span class="per_page"  >
                        <?php 
						 $pages->items_total = $count; 
						 $pages->mid_range = 6;  
						 $pages->paginate();  
						 echo $pages->display_pages();  
						?>
                        </span> </div>
                    </div>
                    <?php 
                 }
              ?>
                    <?php include_once("pagination_manage_product.php"); ?>
                    <?php 
if($count > 0)
{

?>
                    <?php 
}

?>
                  </div>
                  <?php
			}
			else
			{	
				echo '<center style="padding-top:80px; font-size:16px;"><i>Sorry No Data found</i></center>';
			}
			?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /main-inner -->
  </div>
</div>
<?php include_once('footer.php') ?>
<div id="element_to_pop_up3" class="popupbox tableout" style="height:auto; width:auto; margin-top:100px; " >
  <div id="header"> </div>
  <a class="b-close" style="width:32px; height:26px; float:left;text-align:center;  margin-right:-12px;margin-top:-6px;"><img src="images/close_railroad.png" border="0" style="width:30px; height:30px;"></a> <br />
  <div style="width:auto; height:auto; padding:20px 20px 5px 20px; float:left; border:1px #ccc solid; border-radius:3px; margin:0px 30px 18px;">
    <table class="tableout">
      <tr>
        <td><div id="category">
          <form  method="post"  name ="mainForm" enctype="multipart/form-data" action="product_action.php" onSubmit="return imagefunction_new(this);" >
            <table class="tablein"  >
			 <tr>
                <td valign="top" ><strong style="font-size:16px; color:#000; font-weight:bold;">Name:</strong><font style="color:#F00; padding-right:10px;">*</font></td>
                <td valign="top"><input type="text" name="name1" id="name1" style=" margin-top:5px;" required/></td>
                  
              </tr>
             <tr>
                <td valign="top" ><strong style="font-size:16px; color:#000; font-weight:bold;">Select Image:</strong><font style="color:#F00; padding-right:10px;">*</font></td>
                <td valign="top"><input type="file" name="file" id="file" multiple="multiple"  accept="image/*"  style=" margin-top:5px;" required/>
                  <br/>
                  <font color="#FF0000" style="font-size:12px; line-height:16px;">Please select jpeg,png,gif image only<br/>
                  Size:400px*400px</font> </td>
              </tr>
			  <tr>
                <td valign="top" ><strong style="font-size:16px; color:#000; font-weight:bold;">Description:</strong><font style="color:#F00; padding-right:10px;">*</font></td>
                <td valign="top"><textarea class="ckeditor" name="desp1" id="desp1" cols="18" rows="5" style=" margin-top:5px;"></textarea></td>
                  
              </tr>
			  
              <tr>
                <td valign="top" ><strong style="font-size:16px; color:#000; font-weight:bold;">Active Status:</strong><font style="color:#F00; padding-right:10px;">*</font></td>
                <td valign="top"><input id="element_5" name="visible"  type="radio" value="yes" style=" margin-top:5px; float:left;" checked="checked" />
                  <span style="float:left; margin-right:12px;">YES</span>
                  <input id="element_5" name="visible"  type="radio" value="no"    style=" margin-top:5px; float:left;" />
                  NO </td>
              </tr>
              <tr>
                <td></td>
                <td style="padding-top:10px; padding-bottom:5px;"><input type="submit"  id="aa" class="btn btn btn-primary"  value="Upload"  />
                </td>
              </tr>
              <tr>
                <td colspan="2" style="bottom:0"><p style="margin: 0; color:#000;">Note : Fields marked by an asterisk(<font color="red">*</font>) are required fields. </p></td>
              </tr>
            </table>
          </form></td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
