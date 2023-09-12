<?php
include "talenthubconnect.php";
$sql=mysqli_query($con,'select * from category ');
if (isset($_POST['submit'])){
    $student=$_POST['student_name'];
    $category=$_POST['category_name'];
    $product=$_POST['product_name'];
    $price=$_POST['price'];
    $status=$_POST['status'];
    $image = $_FILES['image']['name'];
    if($image !=""){
        $filearray = pathinfo($_FILES['image']['name']);
        $file =rand();
        $file_ext=$filearray["extension"];
        $filenew =$file.".".$file_ext;
        move_uploaded_file($_FILES['image']['tmp_name'],"img/".$filenew);
    }
    mysqli_query($con,"insert into product(student_name,category_name,product_name,price,status,image)values('$student','$category','$product','$price','$status','$filenew')");
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
                                <h1 class="h4 text-gray-900 mb-4">ADD PRODUCT</h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data">
                            <div class="form-group row" >
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="STUDENT NAME" name="student_name">
                                </div>
                                <div class="form-group row">
                                    <tr>
                                        <td>
                                            <label for name="category_name" class="form-control form-control-user">CATEGORY NAME
                                            <select name="category_name">
                                                <?php
                                                while($row=mysqli_fetch_assoc($sql)){
                                                    ?>
                                                    <option value="<?php echo$row['category_id']?>"><?php echo$row['category_name']?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>   
                                            </label>
                                        </td>
                                        <td>
                                                        
                                    </tr>   
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="PRODUCT NAME" name="product_name">
                                </div> 
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="PRICE" name="price">
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="STATUS" name="status">
                                </div>
                                <div class="form-group row">
                                <input type="file" class="form-control form-control-user"
                                         name="image" >
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