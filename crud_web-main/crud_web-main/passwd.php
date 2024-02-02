<?php
include 'connection.php';
if(isset($_POST['passwd'])){
    if(isset($_POST['name']) && isset($_POST['loginid'])  && isset($_POST['phonenumber']) && isset($_POST['passwrd']) && isset($_POST['email'])){
        $name=$_POST['name'];
        $loginid=$_POST['loginid'];
        $phonenumber=$_POST['phonenumber'];
        $password=$_POST['passwrd'];
        $email=$_POST['email'];
        $sql=mysqli_query($conn,"select * from signup where name='$name' && phonenumber='$phonenumber' && login_id='$loginid'");
        if(mysqli_num_rows($sql)>0){
            $sql2=mysqli_query($conn,"update login set password='$password' where login_id='$loginid' && email='$email'");
            if($sql2)
            {
            echo"success";
            echo "<script>window.location.href='login.php';</script>";
            }
            else
            {
                echo "<script>alert('invalid credential!');</script>";
                echo"<script>window.location.href='passwd.php';</script>";
            }
        }
        else{
            echo "<script>alert('invalid credential!');</script>";
            echo"<script>window.location.href='passwd.php';</script>";
        }
    }
}
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
<link rel="stylesheet" href="style3.css">
</head>
<body>
<div class="h">
    <div class="wrapper">
    <form action="" method="POST">
            <h1>Forgot Password</h1>
            <div class="input-box">
                <input type="text"
                placeholder="name"
                name="name" required>
            </div>
            <div class="input-box">
                <input type="text" 
                placeholder="login id" 
                name="loginid" required>
            </div>
            <div class="input-box">
                <input type="text"
                placeholder="phone number"
                name="phonenumber" required>
            </div>
            <div class="input-box">
                <input type="text"
                placeholder="email"
                name="email" required>
            </div>
            <div class="input-box">
                <input type="text"
                placeholder="new password"
                name="passwrd" required>
            </div>
            <button type="submit" class="btn" name="passwd">Submit</button>
            <div class="register-link">
                <p>Don't have an account? <a href="signin.php">Register</a></p>
                <p>Can't login <a href="con.php">Contact US</a></p>
            </div>

            </form>
    </div>
</div>
</body>
</html>