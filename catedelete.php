<?php
include "talenthubconnect.php";
$catid=$_GET['id'];
mysqli_query($con,"delete from category where category_id='$catid'");
header("location:adminviewcategory.php");
?>