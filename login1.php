<?php
include "talenthubconnect.php";
session_start();
if (isset($_POST['submit'])){
    $user=$_POST['uname'];
    $pass=$_POST['password']; 
    $data=mysqli_query($con,"select * from login where uname='$user' AND password='$pass'");
    if(mysqli_num_rows($data)>0){
        $row=mysqli_fetch_assoc($data);
        $type=$row['type'];
        $_SESSION['login_id']=$row['login_id'];
        if($type=="0"){
            echo header("location:index3.php");
        }
        if($type=="1"){
            echo header("location:index2.php");
        }
        if($type=="2"){
            echo header("location:college.php");
        }
    }
}
function data_uri ($file, $mime) {
    $contents = file_get_contents ($file);
    $base64 = base64_encode ($contents);
    return ('data:' . $mime . ';base64,' . $base64);
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
    <title>LOGIN</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0"> 
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7 d-none d-lg-block"> 
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4 ">LOGIN</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <input type="text" class="form-control form-control-user shadow-lg my-1" id="exampleInputEmail"
                                        placeholder="USER NAME" name="uname">
                                </div>
                                <div class="form-group row">
                                    <input type="text" class="form-control form-control-user shadow-lg my-1" id="exampleInputEmail"
                                        placeholder="PASSWORD" name="password">
                                </div>
                                    <tr>
                                        <td>
                                            <button name="submit" class="btn btn-outline-primary shadow-lg my-1">Login</button>
                                        </td>
                                        <td>
                                            <a href="registration.php" name="submit" class="btn btn-outline-primary shadow-lg my-1">CREATE NEW REGISTRATION</a>
                                        </td>
                                        <td>
                                            <a href="index.php" name="submit" class="btn btn-outline-primary shadow-lg my-1">Back</a>  
                                        </td>
                                    </tr>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <img src="img/talent-removebg-preview.png" height="350px" width="460px">
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