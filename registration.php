<?php
include "talenthubconnect.php";
if (isset($_POST['submit'])){
    $college=$_POST['college_name'];
    $uname=$_POST['uname'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $place=$_POST['place'];
    mysqli_query($con,"insert into login(uname,password,type)values('$uname','$pass','2')");
    $log=mysqli_insert_id($con);
    mysqli_query($con,"insert into college(college_name,uname,password,email,mobile,place,status,login)values('$college','$uname','$pass','$email','$mobile','$place','0','$log')");
    header("location:index.php");
} 
function data_uri ($file,$mime) {
    $contents = file_get_contents ($file);
    $base64 = base64_encode ($contents);
    return ('data'. $mime . ';base64'.$base64);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>REGISTRATION</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row ">
                        <div class="p-5 bg-primary shadow-lg my-4">
                            <div class="text-center">
                                <h1 class="h4 text-white mb-4">REGISTRATION</h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data">
                                <div class="form-group row" >
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="COLLEGE NAME" name="college_name" required>
                                    </div>
                                <div class="form-group row" >
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="USER NAME" name="uname" required>
                                    </div>  
                                <div class="form-group row" >
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="PASSWORD" name="password" required>
                                    </div>       
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="EMAIL" name="email" required>
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="MOBLE" name="mobile" required>
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="PLACE" name="place" required>
                                </div> 
                                    <tr>
                                        <td>
                                            <button name="submit" class="btn text-white shadow-lg my-2">REG</button>
                                        </td>
                                        <td>
                                            <a href="index.php" name="submit" class="btn text-white shadow-lg my-2">BACK</a>  
                                        </td>
                                    </tr>
                                </div>
                            </form>
                            <div class="row bg-primary p-5">
                                <img src="img/unnamed-removebg-preview.png" height="500px" width="760px" class="shadow-lg my-2">     
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>