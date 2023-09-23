<?php
include "talenthubconnect.php";
$cid=$_GET['id'];
mysqli_query($con,"update payment set status='2' where payment_id='$cid'");
header("location:buy2.php");
?>