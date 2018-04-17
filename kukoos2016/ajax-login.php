<?php

ob_start();

session_start();

sleep(3);

require_once("connect/helper.php");





 	$user = trim($_POST['username']);

	$pass = trim($_POST['password']);

	

	$pass = md5($pass);



// select log_pass from ja_login where log_user='admin'



			$ans = $obj->select("name,password,id","admin","name='$user'");

			


			

			

			if($ans=="no")

			{

				echo "<script type='text/javascript'>

								  alert('Wrong Login Details');

								

								 

							</script>";

			}

			else

			{

				

				if($ans[0][1]==$pass)

				{

					//echo  $user ;

					

					//echo session_id();

					

					$_SESSION['admin_username'] = $user;

					$_SESSION['admin_userid'] = $ans[0][2];

					

					echo 1 ;

					

				}

				else

				{

					echo "<script type='text/javascript'>

								alert('Wrong Login Details');

								 

								   

							</script>";

				}

			}





?>



