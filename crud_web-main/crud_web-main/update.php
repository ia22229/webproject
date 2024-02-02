<?php
include 'connection.php';

    $user_id=$_GET['id'];
    // echo $user_id;
    $sql=mysqli_query($conn,"SELECT * from register inner join login on register.login_id=login.login_id where register.login_id='$user_id'");
      $row=mysqli_fetch_assoc($sql);
      if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];
        // if ($con->connect_error) {
        //     die('Could not connect to the database.');
        // } else {
        //     echo "connection Ok";
            $sql1=mysqli_query($conn, "UPDATE login set email='$email',password='$password' where login_id='$user_id'");
            $sql2 = mysqli_query($conn, "UPDATE register set name='$name', phonenumber='$number', login_id='$user_id' where login_id='$user_id'");
            if ($sql1 && $sql2) {
                echo "Updated successfully";
               echo "<script>window.location.href='admin.php'; </script>";
            } else {
                echo "Fail to update !!";
               header('location:register.php');
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
    <center>
        <form action="" method="POST">
        <label>Name: </label>   
            <input type="text" placeholder="Enter Name" name="name" value="<?php echo $row['name'];?>"> <br><br>
            <label>Email : </label>   
            <input type="email" placeholder="Enter email" name="email" value="<?php echo $row['email'];?>"> <br><br>
            <label>PhoneNumber: </label>   
            <input type="number" placeholder="Enter PhoneNumber" name="number" value="<?php echo $row['phonenumber'];?>"> <br><br>
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" value="<?php echo $row['password'];?>"> <br><br>
            <button type="submit" name="update">update</button>
        </form>
    </center>
</body>
</html>