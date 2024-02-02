<?php
include 'connection.php';
if(isset($_COOKIE['id']))
{
  $log_id=$_COOKIE['id'];
}
$sql="select gender from profile where login_id='$log_id'";
$sql1=mysqli_query($conn,"select * from profile where login_id='$log_id'");
if(mysqli_num_rows($sql1)>0)
{
        $gender=mysqli_query($conn, $sql);
        while ($row=mysqli_fetch_assoc($gender)){
        $results=$row["gender"];
        }
if($results=='male')
{
$query="select * from profile where gender='male'"; 
}
else
{
$query="select * from profile where gender='female'"; 
}
$result=mysqli_query($conn,$query); 
}
else
{
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
<link rel="stylesheet" href="style9.css">
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
        <h2><?php echo $rows['fname']; ?> </h2> 
        <p><strong>Age:</strong> <?php echo $rows['age']; ?></p>
        <p><strong>Gender:</strong> <?php echo $rows['gender']; ?></p> 
        <p><strong>Job:</strong> <?php echo $rows['job']; ?></p> 
        <p><strong>Salary:</strong> <?php echo $rows['salary']; ?></p>
        <p><strong>Preferences:</strong> <?php echo $rows['preferences']; ?></p> 
        <p><strong>Login ID:</strong> <?php echo $rows['login_id']; ?></p>
        <p></p>
		</tr> 
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
