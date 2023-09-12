<?php
include "talenthubconnect.php";
$del=$_GET['id'];
mysqli_query($con,"delete from product where product_id='$del'");
header("location:adminapproved.php")
?>