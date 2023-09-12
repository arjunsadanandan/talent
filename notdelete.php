<?php
include "talenthubconnect.php";
$del=$_GET['id'];
mysqli_query($con,"delete from notification where notification_id='$del'");
header("location:uservnotification.php");
?>