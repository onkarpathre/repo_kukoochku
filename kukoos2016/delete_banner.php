<?php
ob_start();
include_once("connect/access.php");
require_once("connect/helper.php");
    $imgid = trim($_POST['imgid']);
    $explode = explode(",",$imgid);
    foreach($explode as $ex)
    {
       $eid = $ex;
       $update = $obj->delete("banner","id ='$eid'");
    }
    echo 1;


?>

