<?php
ob_start();
//session_start();
include_once("connect/access.php");
include_once("connect/helper.php"); 

if(!(isset($_REQUEST['sd'])))
{
header("location:manage_clientspeak.php?page=1&ipp=20");
exit();
}
$id = $_REQUEST['sd'];
$res = $obj->select("*","clientspeak","id = '$id'");
//print_r($res);
if($res == 'no')
{
header("location:manage_clientspeak.php?page=1&ipp=20");
exit();
}
$id = $res[0][0];
$desp1 = $res[0][1];
$name1 = $res[0][2];

//$date = date("Y-m-d");

if(isset($_REQUEST['submit']))
{
 
   $desp1 = addslashes($_REQUEST['editor1']);
   $name1 = addslashes($_REQUEST['name1']);

  $update = $obj->update("clientspeak","desp='$desp1',name='$name1'","id='$id'");
                     echo "<script type=text/javascript> {alert('Content updated succesfully!!!');} </script>";
					echo "<script type=text/javascript> location.href='manage_clientspeak.php?page=1&ipp=20'; </script>";

}

$page_id='4'

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kukoo's | Edit page</title>
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css1/font-awesome.css" rel="stylesheet">
    <link href="css1/style.css" rel="stylesheet">
    <link href="css1/pages/dashboard.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!--<link href="css/jquery.autocomplete.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="js/jquery.autocomplete.pack.js"></script>


<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>
function imagefunction_new()
			{       
					var image = mainForm.file.value;
					//alert(image);
					if ( image !="")
					{
						var extPos = mainForm.file.value.lastIndexOf( "." );
								//alert(extPos);
						if ( extPos == - 1)
						{
							alert( "Only Jpg or Gif or Png files can be added." );
							mainForm.file.focus( );
							return false;
						}
						else
						{
							var extn = mainForm.file.value.substring(extPos + 1, mainForm.file.value.length );
						if ( extn != "jpeg" && extn != "jpg" && extn != "gif" && extn != "png" && extn != "PNG" && extn != "GIF" && extn != "JPEG" && extn != "JPG"  )
							{
									alert( "Only Jpg or Gif or Png  files can be added." );
									mainForm.file.focus( );
									return false;
							}
						
						}
					}
					
					
					return true;	
			}
			
	
		</script>

        </head>


<body>

<?php include_once('header.php');?>
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="span12">
                	<div class="widget">
                        <div class="widget-header"> 
                            <i class="icon-list-alt"></i><h3>Edit Content</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="widget big-stats-container">
                                <div class="widget-content">
                             
                	<form   id="mainForm" method="post"  enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'];?>"  onSubmit="return imagefunction_new();" >
                                     <input type="hidden" name="id" id="id"   value="<?php echo $id; ?>"  />
                                    <table align="center" border="0" width="100%" cellpadding="0" cellspacing="0" id="id-form">
                                    <tbody>
									 
										  <tr>
                                            <td width="10%" align="right" valign="top"><strong>Description</strong></td>
                                            <td width="5%" align="center" valign="top"><strong>:</strong></td>
                                            <td width="75%" align="left"><textarea class="ckeditor" cols="50"  rows="10" name="editor1" id="editor1" style="margin-left:0px;"><?php echo $desp1;?></textarea></td>
                                        </tr>
										 <tr>
                                            <td colspan="3" align="center">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="10%" align="right" valign="top"><strong>Client Name</strong></td>
                                            <td width="5%" align="center" valign="top"><strong>:</strong></td>
                                            <td width="75%" align="left"><input name="name1" class="inp-form" type="text" id="name1" value="<?php echo $name1; ?>" style="width:200px;" ></td>
                                        </tr>
                                       
                                        
                                       
                                      
                                        
                                        <tr>
                                            <td colspan="3" align="center">&nbsp;</td>
                                        </tr>
                                        
                                        <tr>
                                            <td align="right" valign="top"></td>
                                            <td align="center" valign="top"></td>
                                            <td align="left">
                                                <input type="submit" name="submit" id="submit" value="Upload" class="btn btn-primary" style="border-radius:2px;" />
                                                <a href="manage_clientspeak.php?page=1&ipp=20" class="btn btn-primary" >Cancel</a>
                                            </td>
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