<?php

if(isset($_REQUEST['page']) && isset($_REQUEST['ipp']))

{

	$i=1;

		$pageno = $_REQUEST['page'];

		$max_results = $_REQUEST['ipp'];//20;

		

		

			if($max_results != 'All')

			{

				$from = (($pageno * $max_results) - $max_results);

				$pagesdata =  $obj->select("*","pages","1 order by id ASC LIMIT $from, $max_results  ");

				//print_r($pagesdata);

				}

			else

			{

				  $pagesdata =  $obj->select("*","pages","1 order by id ASC");

					//print_r($pagesdata);

			}



		?>

                                <div class="widget-content">
                      
                                    <div class="clear"></div>
                                    <table class="table table-striped table-bordered">
                                    <tr class="gridViewHeader" bgcolor="#f9f9f9">
                                      <td align="center" class="sec" width="8%" style="background:#e6e4e4;" >Sr. No.</td>
                                      <td align="center" class="sec" style="background:#e6e4e4;">Name</td>
				      <!--<td align="center" class="sec" style="background:#e6e4e4;">Images</td>-->
									  <td align="center" class="sec" style="background:#e6e4e4;">Updated On</td>
									  <td align="center" class="sec" style="background:#e6e4e4;">Action</td>
                                    </tr>
    <?php
	$cnt = 1;
    $i=1;
	if($pageno !=1)
	{
	  $cnt = (($pageno-1) * $max_results)+1;
	}
	else
	{
	$cnt = 1;
	}
    foreach($pagesdata as $key=>$val)
	 {
	 $id = $val[0];

	  if($i%2!=0){
    ?>
    <tr class="gridViewRow" align="center">
		<td align="center" valign="middle" style="text-align:center;padding:0px;"><?php echo $cnt;?></td>
		<td align="center" style="text-align:center;">&nbsp;<?php echo ucwords($val[2]);?></td>
		
		<!--<td>
			<?php 
				if($val[1] != "")
				{
			?>
				&nbsp;<img src="uploads/page/<?php echo $val[1];?>" width="150px" height="150px" />
			<?php
				}
				else
				{
					echo "-";
				}
			?>
		</td>-->
		<td align="center" style="text-align:center;">&nbsp;<?php echo ucwords($val[6]);?></td>
		<td align="center" style="text-align:center; padding:4px;">
			<a href="editpages.php?sd=<?php echo $val[0];?>" class="btn btn-small btn-success" title="Edit"  style="width:28px; height:23px; line-height:14px;"><i class="btn-icon-only icon-pencil" style="padding-top:2px; float:left; font-size:15px; padding-left:9px;"> </i></a>&nbsp;
		</td>
    </tr>
	<?php
	
	}
	else
	{
	?>
	<tr class="gridViewRow" align="center">
		<td align="center" valign="middle" style="text-align:center;padding:0px;"><?php echo $cnt;?></td>
		<td align="center" style="text-align:center;">&nbsp;<?php echo ucwords($val[2]);?></td>
		
		<!--<td>
			<?php 
				if($val[1] != "")
				{
			?>
				&nbsp;<img src="uploads/page/<?php echo $val[1];?>" width="150px" height="150px" />
			<?php
				}
				else
				{
					echo "-";
				}
			?>
		</td>-->
		
		<td align="center" style="text-align:center;">&nbsp;<?php echo ucwords($val[6]);?></td>
		<td align="center" style="text-align:center; padding:4px;">
		  <a href="editpages.php?sd=<?php echo $val[0];?>" class="btn btn-small btn-success" title="Edit"  style="width:28px; height:23px; line-height:14px;"><i class="btn-icon-only icon-pencil" style="padding-top:2px; float:left; font-size:15px; padding-left:9px;"> </i></a>&nbsp;
		</td>
    </tr>
	<?php
	}
    $i++;$cnt++;	 }	?>

	</table>
  </div>

<?php 
}
?>
