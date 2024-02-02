<?php
include 'connection.php';
if(isset($_POST['mail'])){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
            $sql3=mysqli_query($conn,"insert into mail(name,email,message) values('$name','$email','$message')");
            if($sql3){
              echo "<script>window.location.href='contact.php'; </script>";
              echo "<script>alert('login id is '$log_id'');</script>";
            }else{
              header("Location: contact.php");
              exit();
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
<link rel="stylesheet" href="style7.css">
</head>

<body>
  <header>
    <h1>Marriage Bureau</h1>
  </header>

  <nav>
    <a href="profile.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="services.php">Services</a>
    <a href="#">Contact</a>
  </nav>

  <section>
    <h2>Contact Us</h2>
    <p>
      Have questions or need assistance? Feel free to get in touch with us using the contact form below.
    </p>

    <form action="" method="POST">
      <label for="name">Your Name:</label>
      <input type="text"  name="name" required>

      <label for="email">Your Email:</label>
      <input type="email"  name="email" required>

      <label for="message">Your Message:</label>
      <textarea  name="message" rows="4" required></textarea>
    
      <input type="submit" name ="mail" value="Submit">
      </form>
  </section>

  <footer>
    &copy; 2023 Marriage Bureau. All rights reserved.
  </footer>
</body>
</html>