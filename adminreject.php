<?php
include "talenthubconnect.php";
$cid=$_GET['id'];
mysqli_query($con,"update college set status='2' where college_id='$cid'");
header("location:adminapprovedcollege.php");
?>