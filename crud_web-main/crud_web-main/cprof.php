<?php
include 'connection.php';
if(isset($_COOKIE['id']))
{
  $log_id=$_COOKIE['id'];
}
$sql1=mysqli_query($conn,"select * from profile where login_id='$log_id'");
if(mysqli_num_rows($sql1)>0)
{
$query="select * from profile where login_id='$log_id'"; 
$result=mysqli_query($conn,$query); 
$query1="select * from login where login_id='$log_id'"; 
$result1=mysqli_query($conn,$query1); 
$query3="select * from signup where login_id='$log_id'"; 
$result3=mysqli_query($conn,$query3); 
}
else{
    echo "<script>alert('Update your profile');</script>";
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

    <?php while($rows=mysqli_fetch_assoc($result)) 
		{
        ?> 
        <section>
        <table>
		<tr> 
        <h2> Name:<?php echo $rows['fname']; ?> </h2> 
        <p></p>
        <h2><strong>Age:</strong> <?php echo $rows['age']; ?></h2>
        <p></p>
        <h2><strong>Gender:</strong> <?php echo $rows['gender']; ?></h2> 
        <p></p>
        <h2><strong>Job:</strong> <?php echo $rows['job']; ?></h2> 
        <p></p>
        <h2><strong>Salary:</strong> <?php echo $rows['salary']; ?></h2>
        <p></p>
        <h2><strong>Preferences:</strong> <?php echo $rows['preferences']; ?></h2> 
        <p></p>
        <h2><strong>Login ID:</strong> <?php echo $rows['login_id']; ?></h2>
        <p></p>
        <?php 
    }
          ?> 
        <?php while($rows2=mysqli_fetch_assoc($result1))
        {?>
            <h2><strong>Email:  </strong> <?php echo $rows2['email']; ?></h>
            <p></p>
            <?php 
    }
          ?> 
              <?php while($rows3=mysqli_fetch_assoc($result3))
        {?>
            <p></p>
        <h2><strong>Phone number:</strong> <?php echo $rows3['phonenumber']; ?></h2>
		</tr> 
        <p><a href="continue.php">Update</a>  your profile </p>
        </table>
        </section>
	<?php 
    }
          ?> 
    <footer>
    &copy; 2023 Marriage Bureau. All rights reserved.
  </footer>
</body>

</html>