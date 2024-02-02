<?php
include 'connection.php';
if(isset($_POST['signin'])){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phonenumber']) && isset($_POST['password'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phonenumber=$_POST['phonenumber'];
        $password=$_POST['password'];
            $log_id=mysqli_insert_id($conn);
            $sql2=mysqli_query($conn,"insert into signup(name,phonenumber,login_id) values('$name','$phonenumber','$log_id')");
            $log_id=mysqli_insert_id($conn);
            $sql1=mysqli_query($conn,"insert into login(email,password,login_id) values('$email','$password','$log_id')");
            if($sql1 && $sql2){
                echo "<script>alert('your login id is ".$log_id."');</script>";
            echo"<script>window.location.href='login.php';</script>";
            }else{
                echo "<script>alert('Registration failed');</script>";
                echo"<script>window.location.href='signin.php';</script>";
                $sql4=mysqli_query($conn,"DELETE FROM signup WHERE login_id='$log_id'");
                $sql5=mysqli_query($conn,"DELETE FROM login WHERE login_id='$log_id'");
            }
        }
    }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<title>Marriage Bureau</title>
<link rel="shortcut icon" href="logo1.png" type="image/x-icon">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="h">
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="text"
                placeholder="name"
                name="name" required>
                <i class='bx bxs-user-rectangle'></i>
            </div>
            <div class="input-box">
                <input type="text" 
                placeholder="email"
                name="email" required>
            </div>
            <div class="input-box">
                    <input type="text" 
                    placeholder="phone number"
                    name="phonenumber" required>
                    <i class='bx bxs-phone' ></i>
            </div>
            <div class="input-box">
                <input type="password" 
                placeholder="Password"
                name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <button type="submit" class="btn" name="signin">Submit</button>
            <div class="register-link">
                <p>Already have an account? <a href="login.php">Sign in</a></p>
            </div>
            </form>
    </div>
</div>
</body>
</html>