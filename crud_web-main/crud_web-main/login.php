<?php
include 'connection.php';
if(isset($_POST['login'])){
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql=mysqli_query($conn,"select * from login where email='$email' && password='$password'");
        $query="select login_id from login where email='$email'";
        $log_id=mysqli_query($conn, $query);
        while ($row=mysqli_fetch_assoc($log_id)){
            $result=$row["login_id"];
            setcookie("id","$result",time() +3600*24);
        }
        if(mysqli_num_rows($sql)>0){
          echo "<script>window.location.href='profile.php';</script>";
        }
        else{
            echo "<script>alert('invalid credential!');</script>";
            echo"<script>window.location.href='login.php';</script>";
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
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="h">
    <div class="wrapper">
    <form action="" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" 
                placeholder="email" 
                name="email"required>
                <i class='bx bxs-user-rectangle'></i>
            </div>
            <div class="input-box">
                <input type="password"
                placeholder="password"
                name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="passwd.php">Forgot password</a>
            </div>
           
            <button type="submit" class="btn" name="login">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="signin.php">Register</a></p>
            </div>
            </form>
    </div>
    </div>
</body>
</html>