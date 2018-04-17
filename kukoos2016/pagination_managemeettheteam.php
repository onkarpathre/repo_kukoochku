<script>
$(document).ready(function() {
    $('#selecctall').click(function(event) {  
        if(this.checked) { 
            $('.checkbox1').each(function() {
                this.checked = true;             
            });
        }else{
            $('.checkbox1').each(function() { 
                this.checked = false;                     
            });        
        }
    });
   
});
</script>
<?php

if(isset($_REQUEST['page']) && isset($_REQUEST['ipp']))

{

	$i=1;

		$pageno = $_REQUEST['page'];

		$max_results = $_REQUEST['ipp'];//20;

		

		

			if($max_results != 'All')

			{

				$from = (($pageno * $max_results) - $max_results);

				$pagesdata =  $obj->select("*","meet_the_team","1 order by id ASC LIMIT $from, $max_results  ");

				//print_r($pagesdata);

				}

			else

			{

				  $pagesdata =  $obj->select("*","meet_the_team","1 order by id DESC");

					//print_r($pagesdata);

			}



		?>

                                <div class="widget-content">
                      
                                    <div class="clear"></div>
                                    <table class="table table-striped table-bordered">
                                    <tr class="gridViewHeader" bgcolor="#f9f9f9">
                                      <td align="center" class="sec" width="8%" style="background:#e6e4e4;" >Sr. No.</td>
                                      <td align="center" class="sec" style="background:#e6e4e4;">Name</td>
                                      <td align="center" class="sec" style="background:#e6e4e4;">Designation</td>
									  <td align="center" class="sec" style="background:#e6e4e4;">Images</td>
									  <td align="center" class="sec" style="background:#e6e4e4;">Action</td>
									  <!--<td align="center" class="sec" style="background:#e6e4e4;">Edit</td>-->
									  <td align="center" class="sec" style="background:#e6e4e4; padding:0px;"><input type="checkbox" id="selecctall"/> &nbsp; <input type="button" class="btn btn-primary" value="Delete" id="forword"   style=" margin:4px 0 4px 8px;"/></td>
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
		<td align="center" style="text-align:center;">&nbsp;<?php echo ucwords($val[1]);?></td>
		<td align="center" style="text-align:center;">&nbsp;<?php echo ucwords($val[5]);?></td>
		<td>
			<?php 
				if($val[2] != "")
				{
			?>
				&nbsp;<img src="uploads/team/<?php echo $val[2];?>" width="150px" height="150px" />
			<?php
				}
				else
				{
					echo "-";
					
				}
			?>
		</td>
		<td align="center" style="text-align:center;">&nbsp;                            
	<?php
							if($val[3] == 'yes')
							{?>
							 <input type="button" class="button btn btn-primary" name="change" id="<?php echo $val[0]."/yes";  ?>" value="Make Invisible" onClick="getid(this.id)"  />
							<?php }
							else
							{?>
							 <input type="button" class="button btn btn-primary" name="change" id="<?php echo $val[0]."/no";  ?>" value="Make Visible" onClick="getid(this.id)"  />
							<?php
							
							}
							 ?>
		</td>
		<td align="center" style="text-align:center; padding:4px;">
		<input class="checkbox1" type="checkbox" name="check[]" id="<?php echo $id ?>" value="<?php echo $id ?>"  />
		&nbsp;&nbsp;
			<a href="editmeettheteam.php?sd=<?php echo $val[0];?>" class="btn btn-small btn-success" title="Edit"  style="width:28px; height:23px; line-height:14px;"><i class="btn-icon-only icon-pencil" style="padding-top:2px; float:left; font-size:15px; padding-left:9px;"> </i></a>&nbsp;
		</td>
    </tr>
	<?php
	
	}
	else
	{
	?>
	<tr class="gridViewRow" align="center">
		<td align="center" valign="middle" style="text-align:center;padding:0px;"><?php echo $cnt;?></td>
		<td align="center" style="text-align:center;">&nbsp;<?php echo ucwords($val[1]);?></td>
		<td align="center" style="text-align:center;">&nbsp;<?php echo ucwords($val[5]);?></td>
		<td>
			<?php 
				if($val[2] != "")
				{
			?>
				&nbsp;<img src="uploads/team/<?php echo $val[2];?>" width="150px" height="150px" />
			<?php
				}
				else
				{
					
					echo "-";
					
				}
			?>
		</td>
		
		<td align="center" style="text-align:center;">&nbsp;                            
							<?php
							if($val[3] == 'yes')
							{?>
							 <input type="button" class="button btn btn-primary" name="change" id="<?php echo $val[0]."/yes";  ?>" value="Make Invisible" onClick="getid(this.id)"  />
							<?php }
							else
							{?>
							 <input type="button" class="button btn btn-primary" name="change" id="<?php echo $val[0]."/no";  ?>" value="Make Visible" onClick="getid(this.id)"  />
							<?php
							
							}
							?>
</td>
		<td align="center" style="text-align:center; padding:4px;">
		<input class="checkbox1" type="checkbox" name="check[]" id="<?php echo $id ?>" value="<?php echo $id ?>"  />
		&nbsp;&nbsp;
		  <a href="editmeettheteam.php?sd=<?php echo $val[0];?>" class="btn btn-small btn-success" title="Edit"  style="width:28px; height:23px; line-height:14px;"><i class="btn-icon-only icon-pencil" style="padding-top:2px; float:left; font-size:15px; padding-left:9px;"> </i></a>&nbsp;
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
