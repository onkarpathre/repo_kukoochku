<?php
		class connect{
			protected $conn = "";
			function __construct()
				{
					$this -> conn = new mysqli("localhost:3306","kukoos","kukoos@123456","kukoos");
					//print_r($this->conn);
				}
				
			function __destruct()
				{
						$this->conn->close();
				}
		}
		//$cobj = new connect();
?>
