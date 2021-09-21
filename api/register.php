<?php 
    include("connect.php");

    $Name = $_POST['Name'];
    $Mobile = $_POST['Mobile'];
    $Password = $_POST['Password'];
    $cpassword = $_POST['cpassword'];
    $Address = $_POST['Address'];
    $image = $_FILES['Photo']['name'];
    $tmp_name = $_FILES['Photo']['tmp_name'];
    $role = $_POST['role'];

    if($Password==$cpassword){
        move_uploaded_file($tmp_name, "../uploads/$image");
        $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, address, password, photo, role, status, votes) VALUES ('$Name', '$Mobile', '$Address', '$Password', '$image', '$role', 0, 0)");
        if($insert){
            echo '
            <script>
                 alert("Registration Successfull!");
                 window.location = "../routes/register.html";  
            </script>
         ';
        }
        else{
            echo '
            <script>
                 alert("Some error occured!");
                 window.location = "../routes/register.html";  
            </script>
        ';
        }

    }
    else{
        echo '
            <script>
                 alert("Password and confirm password does not match!");
                 window.location = "../routes/register.html";  
            </script>
        ';
    }

?>
