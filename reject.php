<?php
include "talenthubconnect.php";
$pid=$_GET['id'];
mysqli_query($con,"update product set status='2'where product_id='$pid'");
header("location:cvproduct.php");
?>