<?php
include 'connection.php';
$sql=mysqli_query($conn, "select * from signup inner join login on register.login_id=login.login_id");
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
<link rel="stylesheet" href="style4.css">
</head>
<body>
<header>
    <h1>Marriage Bureau</h1>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="about.php">About Us</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>
  </nav>

  <section>
    <h2>Complete Your Profile</h2>
    <div class="input-box">
                <input type="text"
                placeholder="UserID" required>
            </div>
            <div class="input-box">
                <input type="text"
                placeholder="Username" required>
                <i class='bx bxs-user-rectangle'></i>
            </div>
            <div class="input-box">
                <input type="text" 
                placeholder="Email" required>
                <i class='bx bxs-phone' ></i>
            </div>
            <div class="input-box">
                <input type="text" 
                placeholder="Gender" required>
            </div>
            <div class="input-box">
                <input type="text"
                placeholder="Age">
            </div>
                <div class="input-box">
                    <input type="text" 
                    placeholder="Location" required>
            </div>
            <div class="input-box">
                <input type="password" 
                placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input type="password" 
                placeholder="confirm password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <button type="submit" class="btn">Submit</button>
  </section>
  <footer>
    &copy; 2023 Marriage Bureau. All rights reserved.
  </footer>
</body>
</html>
