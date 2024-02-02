<?php
include 'connection.php';
if(isset($_POST['submit'])){
    if(isset($_POST['fname']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['job']) && isset($_POST['salary']) && isset($_POST['preferences'])){
        $fname=$_POST['fname'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $job=$_POST['job'];
        $salary=$_POST['salary'];
        $preferences=$_POST['preferences'];
        if(isset($_COOKIE['id']))
        {
          $log_id=$_COOKIE['id'];
        }
        $sql=mysqli_query($conn,"select * from profile where login_id='$log_id'");
        if(mysqli_num_rows($sql) ==0){
        $sql6=mysqli_query($conn,"insert into profile(fname,age,gender,job,salary,preferences,login_id) values('$fname','$age','$gender','$job','$salary','$preferences','$log_id')");
            if($sql6){
            echo"<script>window.location.href='profile.php';</script>";
            }else{
                echo "<script>alert('Registration failed');</script>";
                echo"<script>window.location.href='contact.php';</script>";

            }
          }
          else{
            $sql2=mysqli_query($conn,"update profile set fname='$fname',age='$age',gender='$gender',job='$job',salary='$salary',preferences='$preferences'  where login_id='$log_id'");
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
<link rel="stylesheet" href="style8.css">
</head>
<body>
<header>
    <h1>Marriage Bureau</h1>
  </header>

  <nav>
    <a href="profile.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>
  </nav>
  <section>
  <form action="" method="POST">
        <h2>Complete Your Profile</h2>

        <label for="name">Full Name:</label>
        <input type="text" id="fname" name="fname" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="job">Job:</label>
        <input type="text" id="job" name="job" required>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" required>

        <label for="preferences">Partner Preferences:</label>
        <textarea id="preferences" name="preferences" rows="1" required></textarea>

        <button type="submit" name="submit">Complete Profile</button>
    </form>
  </section>
  <footer>
    &copy; 2023 Marriage Bureau. All rights reserved.
  </footer>
</body>
</html>
