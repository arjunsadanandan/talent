<?php
include "talenthubconnect.php";
if (isset($_POST['submit'])){
    $college=$_POST['college_name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $place=$_POST['place'];
    $status=$_POST['status'];
    mysqli_query($con,"insert into college(college_name,email,mobile,place,status)values('$college','$email','$mobile','$place','$status')");
    header("location:index.php");
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
<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                        <div class="p-5">
                            <div class="text-center" >
                                <h1 class="h4 text-gray-900 mb-4">REGISTRATION</h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data">
                            <div class="form-group row" >
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="COLLEGE NAME" name="college_name">
                                </div>
                                
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="EMAIL" name="email">
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="MOBLE" name="mobile">
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="PLACE" name="place">
                                </div> 
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="STATUS" name="status">
                                </div> 
                                    <tr>
                                        <td>
                                            <button name="submit" class="btn btn-outline-primary">Login</button>
                                        </td>
                                        <td>
                                            <a href="index.php" name="submit" class="btn btn-outline-primary">Back</a>  
                                        </td>
                                    </tr>
                                </div>
                            </form>     
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