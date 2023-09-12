<?php
include "talenthubconnect.php";
$sid=$_GET['id'];
mysqli_query($con,"delete from students where student_id='$sid'");
header("location:adminstudent.php");
?>