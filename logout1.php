<?php
session_start();
include "talenthubconnect.php";
session_destroy();
header("location:login1.php");
?>