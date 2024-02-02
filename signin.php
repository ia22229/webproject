<?php
include 'connection.php';
if(isset($_POST['signin'])){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['password'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phonenumber=$_POST['number'];
        $password=$_POST['password'];
        // if($conn->connect_error){
        //     die('Could not connet to the database.');
        // }else{
        //     echo "Connection OK";
            $sql1=mysqli_query($conn,"insert into login(email,password) values('$email','$password')");
            $log_id=mysqli_insert_id($conn);
            $sql2=mysqli_query($conn,"insert into signup(name,phonenumber,login_id) values('$name','$phonenumber','$log_id')");
            if($sql1 && $sql2){
                echo "Registered successfully";
                echo "<script>window.location.href='login.php'; </script>";
            }else{
                echo "Registration Failed !!";
                header('location:signin.php');
            }
        }
    }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<title>Marriage Buero</title>
<link rel="shortcut icon" href="logo2.png" type="image/x-icon">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style1.css">
</head>
<body>
    <form action="insert.php" method="post">
    <div class="wrapper">
        <form action="">
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="text"
                placeholder="name" required>
                <i class='bx bxs-user-rectangle'></i>
            </div>
            <div class="input-box">
                <input type="text" 
                placeholder="email" required>
            </div>
                <div class="input-box">
                    <input type="text" 
                    placeholder="phonenumber" required>
                    <i class='bx bxs-phone' ></i>
            </div>
            <div class="input-box">
                <input type="password" 
                placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
</form>
            <button type="submit" class="btn">Submit</button>
            <div class="register-link">
                <p>Already have an account? <a href="login.html">Sign in</a></p>
            </div>
    </div>
</body>
</html>