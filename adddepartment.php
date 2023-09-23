<?php
session_start();
include "talenthubconnect.php";
$data=mysqli_query($con,"select * from college");
$row=mysqli_fetch_assoc($data);
$_SESSION['login_id']=$row['college_name'];
$college= $_SESSION['login_id'];
if (isset($_POST['submit'])){ 
    $college=$_POST['college_name'];
    $dname=$_POST['department_name'];
   $data= mysqli_query($con,"insert into department(department_name,college_name)values('$dname','$college')");
      if($data){
         echo "insert succesfully";
      }else{
          die(mysqli_die($con));
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
    <title>ADD DEPARTMENT</title>
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
                <div class="col-lg-5 d-none d-lg-block shadow-lg ">
                    <div><img src="img/OIP (1).jpeg" height="400px"width="400px"></div>
                    </div>
                <div class="col-lg-7">                  
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-primary mb-4">DEPARTMENT</h1>
                            </div>
                            <form class="user" method="post">
                            <div class="form-group row">                             
                                <input type="text" name="college_name" placeholder="COLLEGE NAME" class="form-control form-control-user shadow-lg my-2" value="<?php echo$college?>"> 
                                </div>
                                <div class="form-group row">
                                    <input type="text" name="department_name" placeholder="DEPARTMENT NAME" class="form-control form-control-user shadow-lg my-2"> 
                                </div>               
                                    <tr>
                                        <td>
                                            <button name="submit" class="btn btn-outline-primary shadow-lg my-2">Add</button>               
                                            <a href="college.php" name="submit" class="btn btn-outline-primary shadow-lg my-2">Back</a>  
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