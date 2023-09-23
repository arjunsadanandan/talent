<td>
                                                        <?php
                                                        if($row['status']==0){
                                                            ?>
                                                        <a href="userapproveproduct.php?id=<?php echo$row["product_id"]?>" name="submit" class="btn btn-outline-primary shadow-lg my-2" type="button">APPROVE</a>
                                                        <a href="userreject.php?id=<?php echo$row["product_id"]?>" name="submit" class="btn btn-outline-primary shadow-lg my-2" type="button">REJECT</a>
                                                        <?php
                                                        }
                                                        ?>
                                                         <?php
                                                        if($row['status']==1){
                                                            ?>
                                                        <a href="userapproveproduct.php?id=<?php echo$row["product_id"]?>" name="submit" class="btn btn-outline-success shadow-lg my-2" type="button">APPROVED</a>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if($row['status']==2){
                                                            ?>
                                                        <a href="userreject.php?id=<?php echo$row['product_id']?>" name="submit" class="btn btn-outline-danger shadow-lg my-2" type="button">REJECTED</a>
                                                        <?php
                                                        }
                                                        ?>
                                                     
                                                    </td>       

if(isset($_POST['submit'])){
    $pro=$_POST['product_name'];
    $stu=$_POST['student_name'];
    $price=$_POST['price'];
    $image = $_FILES['image']['name'];
    if($image !=""){
        $filearray = pathinfo($_FILES['image']['name']);
        $file =rand();
        $file_ext=$filearray["extension"];
        $filenew =$file.".".$file_ext;
        move_uploaded_file($_FILES['image']['tmp_name'],"img/".$filenew);
    }
    mysqli_query($con,"insert into payment(product_name,sudent_name,price,image)values('$stu','$pro','$price','$filenew')");
}