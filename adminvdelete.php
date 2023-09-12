<?php
include "talenthubconnect.php";
$nid=$_GET['id'];
mysqli_query($con,"delete from notification where notification_id='$nid'");
header("location:adminvnotification.php");
?>