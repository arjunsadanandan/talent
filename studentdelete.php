<?php
include "talenthubconnect.php";
$del=$_GET['id'];
 mysqli_query($con,"delete from students join department join college where college_id='$del' ");
header("location:students.php")
?>
