<?php
include "talenthubconnect.php";
$sql=mysqli_query($con,'select * from college ');
$data=mysqli_query($con,"select * from department");
if (isset($_POST['submit'])){
    $student=$_POST['student_name'];
    $college=$_POST['college_name'];
    $department=$_POST['department_name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $age=$_POST['age'];
    mysqli_query($con,"insert into student(student_name,college_name,department_name,email,mobile,age)values('$student','$college','$department','$email','$mobile','$age')");
    header("location:viewproduct.php");
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
    <title>SB user - ADD PRODUCT</title>
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
                                <h1 class="h4 text-gray-900 mb-4">ADD STUDENT</h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data">
                            <div class="form-group row" >
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="STUDENT NAME" name="student_name">
                                </div>
                                <div class="form-group row">
                                    <tr>
                                        <td>
                                            <label for name="college_name" class="form-control form-control-user">COLLEGE NAME
                                            <select name="college_name">
                                                <?php
                                                while($row=mysqli_fetch_assoc($sql)){
                                                    ?>
                                                    <option value="<?php echo$row['college_id']?>"><?php echo$row['college_name']?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>   
                                            </label>
                                        </td>      
                                    </tr>   
                                </div>
                                <div class="form-group row">
                                    <tr>
                                        <td>
                                            <label for name="department_name" class="form-control form-control-user">DEPARTMENT NAME
                                            <select name="department_name">
                                                <?php
                                                while($rowone=mysqli_fetch_assoc($data)){
                                                    ?>
                                                    <option value="<?php echo$rowone['department_id']?>"><?php echo$rowone['department_name']?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>   
                                            </label>
                                        </td>      
                                    </tr>   
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="EMAIL" name="email">
                                </div> 
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="MOBILE" name="mobile">
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="AGE" name="age">
                                </div>     
                                    <tr>
                                        <td>
                                            <button name="submit" class="btn btn-outline-primary">Add</button>               
                                            <a href="user.php" name="submit" class="btn btn-outline-primary">Back</a>  
                                        </td>
                                    </tr>
                                </div>
                            </form>     
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