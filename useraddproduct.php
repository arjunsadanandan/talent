<?php
include "talenthubconnect.php";
session_start();
$ss=mysqli_query($con,"select * from category");
if (isset($_POST['submit'])){
    $stu=$_SESSION['u_name'];
    $categoryn=$_POST['category_name'];
    $product=$_POST['product_name'];
    $price=$_POST['price'];
    $image = $_FILES['image']['name'];
    if($image !=""){
        $filearray = pathinfo($_FILES['image']['name']);
        $file =rand();
        $file_ext=$filearray["extension"];
        $filenew =$file.".".$file_ext;
        move_uploaded_file($_FILES['image']['tmp_name'],"img/".$filenew);
    }
    $log=$_SESSION['login_id'];
    // var_dump($log);exit();
    mysqli_query($con,"insert into payment(product_name,student_name,price,image,status)values('$stu','$product','$price','$filenew','1')");
    mysqli_query($con,"insert into product(category_name,student_name,product_name,price,status,image,payment,login)values('$categoryn','$stu','$product','$price','1','$filenew','1','$log')");  
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
    <title>ADD PRODUCT</title>
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
                                <h1 class="h4 text-primary mb-4">ADD PRODUCT</h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <tr>
                                        <td>
                                            <label for name="category_id" class="form-control form-control-user shadow-lg my-2">CATEGORY NAME
                                            <select name="category_name"class="text-primary">
                                                <?php
                                                while($row=mysqli_fetch_assoc($ss)){
                                                    ?>
                                                    <option value="<?php echo$row['category_name']?>"><?php echo$row['category_name']?></option>
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
                                        placeholder="PRODUCT NAME" name="product_name">
                                </div> 
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user shadow-lg my-2" id="exampleInputEmail"
                                        placeholder="PRICE" name="price">
                                </div>
                                <div class="form-group row">
                                    <input type="file" class="form-control form-control-user shadow-lg my-2" name="image" >      
                                </div>   
                                    <tr>
                                        <td>
                                            <button name="submit" class="btn btn-outline-primary shadow-lg my-2">Add</button>               
                                            <a href="index2.php" name="submit" class="btn btn-outline-primary shadow-lg my-2">Back</a>  
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