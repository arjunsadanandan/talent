<?php
session_start();
include "talenthubconnect.php";
$sql=mysqli_query($con,'select * from college');
$row=mysqli_fetch_assoc($sql);
$_SESSION['login_id']=$row['login'];
$data=mysqli_query($con,"select * from department");
if (isset($_POST['submit'])){
    $student=$_POST['student_name'];
    $pass=$_POST['pass'];
    $college=$_POST['college_name'];
    $department=$_POST['department_name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $age=$_POST['age'];
    mysqli_query($con,"insert into login(uname,password,type)values('$student','$pass','1')");
    $log=mysqli_insert_id($con);
    mysqli_query($con,"insert into students(student_name,pass,college_name,department_name,email,mobile,age,status,login)values('$student','$pass','$college','$department','$email','$mobile','$age','1','$log')");   
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
    <title>COLLEGEADDSTUDENTS</title>
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
                        <div class="p-5 bg-primary">
                            <div class="text-center" >
                                <h1 class="h4 text-white">ADD STUDENT</h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data">
                            <div class="form-group row" >
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="STUDENT NAME" name="student_name" required>
                            </div>
                            <div class="form-group row" >
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="PASSWORD" name="pass" required>
                            </div>
                                <div class="form-group row">
                                    <tr>
                                        <td>
                                            <label name="college_name" class="form-control form-control-user shadow-lg my-2">COLLEGE NAME
                                                <select name="college_name" class="text-primary" required>
                                                    <?php
                                                    while($row=mysqli_fetch_assoc($sql)){
                                                        ?>
                                                        <option value="<?php echo$row['college_name']?>"><?php echo$row['college_name']?></option>
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
                                            <label for name="department_id" class="form-control form-control-user shadow-lg my-2">DEPARTMENT NAME
                                            <select name="department_name"class="text-primary" required>
                                                <?php
                                                while($rowone=mysqli_fetch_assoc($data)){
                                                    ?>
                                                    <option value="<?php echo$rowone['department_name']?>"><?php echo$rowone['department_name']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>   
                                            </label>
                                        </td>      
                                    </tr>   
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="EMAIL" name="email" required>
                                </div> 
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="MOBILE" name="mobile" required>
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="AGE" name="age" required>
                                </div>     
                                    <tr>
                                        <td>
                                            <button name="submit" class="btn text-white shadow-lg my-2">ADD</button>               
                                            <a href="college.php" name="submit" class="btn text-white shadow-lg my-2">BACK</a>  
                                        </td>
                                    </tr>
                                </div>
                            </form>
                            <div class="row p-3 bg-primary">
                                <img src="img/126-1269278_add-student-icon-png-groups-first-baptist-cleveland-removebg-preview (1).png"width="680px"height="600px">
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