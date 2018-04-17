<?php
ob_start();
include_once("connect/access.php");
include_once("connect/helper.php"); 
$page_id='8';
	
	if(isset($_REQUEST["submit"]))
	{ 
	    
		$product_name = $_REQUEST["productname"];
		$visible = $_REQUEST["visible"];
		$description = $_REQUEST["description"];
		 
			if(!(empty($_FILES['file']['name'])))
	        {
				$pname = $_FILES['file']['name'];
				$src=$_FILES['file']['tmp_name'];
				$image=time().$pname;
				$dest = "uploads/product/".$image; 
				move_uploaded_file($src,$dest);
	        }
	        
			
	$insert_service = $obj->my_insert("product","name,image,description,visible","'$product_name','$image','$description','$visible'");
					
				echo "<script type=text/javascript> {alert('Data uploaded successfully!!!');} </script>";
		        echo  "<script type='text/javascript'>location.href='manage_product.php?page=1&ipp=20';</script>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kukoo's | Add Product.&#8230;</title>
<link href="css1/bootstrap.min.css" rel="stylesheet">
<link href="css1/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="css1/font-awesome.css" rel="stylesheet">
<link href="css1/style.css" rel="stylesheet">
<link href="css1/pages/dashboard.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.pack.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>
	var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];
	function formvalidate(oForm)
	{
		var cate_name = $("#cate_name").val();
		var serv_name = $("#serv_name").val();
		var address = $("#address").val();
		var city = $("#city").val();
		var contact = $("#contact").val();
		var duration = $("#duration").val();
		var price = $("#price").val();
		var f_image = $("#file").val();
		var g_images = $("#files").val();
		if(cate_name == "")
		{
			alert("Please Select Category Name");
			$("#cate_name").focus();
			return false;
		}
		
		if(serv_name == "")
		{
			alert("Please Enter Name");
			$("#serv_name").focus();
			return false;
		}
		
		if(address == "")
		{
			alert("Please Enter Address");
			$("#address").focus();
			return false;
		}
		
		if(city == "")
		{
			alert("Please Enter City");
			$("#city").focus();
			return false;
		}
		
		if(contact == "")
		{
			alert("Please Enter Contact Number");
			$("#contact").focus();
			return false;
		}
		
		if(duration == "")
		{
			alert("Please Select Duration");
			$("#duration").focus();
			return false;
		}
		
		if(price == "")
		{
			alert("Please Enter the Price");
			$("#price").focus();
			return false;
		}
		
		if(f_image == "")
		{
			alert("Please Select Front Image");
			return false;
		}
		
		if(g_images == "")
		{
			alert("Please Select product Images");
			return false;
		}
		var arrInputs = oForm.getElementsByTagName("input");
					//alert(arrInputs);
		for (var i = 0; i < arrInputs.length; i++) 
		{
			var oInput = arrInputs[i];
			if (oInput.type == "file") 
			{
				var sFileName = oInput.value;
				if (sFileName.length > 0) 
				{
					var blnValid = false;
					for (var j = 0; j < _validFileExtensions.length; j++) 
					{
									var sCurExtension = _validFileExtensions[j];
									if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) 
									{
										blnValid = true;
										break;
									}
					}
				
					if (!blnValid) 
					{
						alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
						return false;
					}
				}
			}
		}
		return true;
	}
	
    function gettypeid(id)
    {
	   dataString= "tid="+id;
	   //alert(dataString);
		 $.ajax({
            url: 'product_visibility_Ajax.php?id=' + id,
            success: function(data) 
			{
			// alert(dataString);
            $("#pcategory").html(data);
            }
             });
   }
   function getcatid(id)
    {
	   dataString= "cid="+id;
	  
		 $.ajax({
            url: 'product_visibility_Ajax.php?id=' + id,
            success: function(data) 
			{
			// alert(dataString);
            $("#subcategory").html(data);
            }
             });
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
.inp
	{
		width:315px;
		height:38px;
		border-radius:4px;
		border:1px #a4a4a4 solid;
		outline:none;
		padding-left:5px;
	}
	label
{
background-color:#ddd;
padding: 5px 12px;
cursor:pointer;
margin:0 5px 0 0;
border-radius:3px;
color:#FFFFFF;
}
input[type=checkbox]
{
display:none;
}
input[type=checkbox]:checked + label
{
background-color:#00ba8b;
color:#FFFFFF;
}
.size-radio
	{
		margin:0 0 0 0;
	}
	
</style>
<style>
.select-style {
    border: 1px solid #ccc;
    width: 120px;
    border-radius: 3px;
    overflow: hidden;
    background: #fafafa url("img/icon-select.png") no-repeat 100% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}
.price {
   
	background:url(rupee.png) 5px 10px no-repeat;
    
   padding-left:17px;
}

.select-style select:focus {
    outline: none;
}
</style>
</head>
<body>
<?php include_once('header.php');?>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Add Product</h3>
            </div>
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <form  id="mainForm"  name="mainForm" method="post"  enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>"  onSubmit="return imagefunction_new(this);" >
                    <table align="center" border="0" width="80%" cellpadding="0" cellspacing="0" id="id-form" style="border:1px #efefef solid;padding:30px 0px 25px 25px; border-collapse: separate;">
                      <tbody>
                        <tr>
                          <td width="30%" align="left" valign="top"><strong>Product Name</strong><font style="color:#F00; padding-right:10px;">*</font></td>
                          <td width="5%" align="center" valign="top"><strong>:</strong></td>
                          <td width="65%" align="left"><input type="text" placeholder="Enter Name" name="productname" id="productname" class="inp"/>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="30%" align="left" valign="top"><strong>Product Description:</strong><font style="color:#F00; padding-right:10px;">*</font></td>
                          <td width="5%" align="center" valign="top"><strong>:</strong></td>
                          <td width="65%" align="left"><textarea class="ckeditor" cols="50"  rows="10" placeholder="Enter Description" class="inp" name="description" id="description" style="margin-left:0px;"></textarea>
						  <!--<input type="text" placeholder="Enter Description" name="description" id="description" class="inp"/>-->
                          </td>
                        </tr>
                        
                        <tr>
                          <td colspan="3" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="30%" align="left" valign="top"><strong>Product Image</strong><font style="color:#F00; padding-right:10px;">*</font></td>
                          <td width="5%" align="center" valign="top"><strong>:</strong></td>
                          <td width="65%" align="left"><input type="file" name="file" id="file" style=" margin-top:5px;" />
                            <br/>
                            <font color="#FF0000" style="font-size:12px; line-height:16px;"> Please select jpeg,png,gif image only<br/>
                            Size:1000*300px </font> </td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td width="30%" align="left" valign="top"><strong>Active Status</strong><font style="color:#F00; padding-right:10px;">*</font></td>
                          <td width="5%" align="center" valign="top"><strong>:</strong></td>
                          <td width="65%" align="left"><input id="element_5" name="visible"  type="radio" value="yes" style=" margin-top:5px; float:left;" checked="checked" />
                            <span style="float:left; margin-right:12px;">YES</span>
                            <input id="element_5" name="visible"  type="radio" value="no"    style=" margin-top:5px; float:left;" />
                            <span style="float:left; margin-right:12px;">NO</span> </td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center"><input type="submit" name="submit" id="submit" value="Upload" class="btn btn-primary" style="border-radius:2px;" />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary" style="border-radius:2px;" />
                            &nbsp;&nbsp;&nbsp;&nbsp; <a href="manage_product.php?page=1&ipp=20" class="btn btn-primary" >Cancel</a> </td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center"><p style="margin: 0; color:#000;">Note : Fields marked by an asterisk(<font color="red">*</font>) are required fields. </p></td>
                        </tr>
                      </tbody>
                    </table>
                  </form>
                </div>
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
<!-- /main -->
<?php include_once('footer.php');?>
</body>
</html>
