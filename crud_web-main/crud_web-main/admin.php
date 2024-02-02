<?php
include 'connection.php';
$sql=mysqli_query($conn, "select * from register inner join login on register.login_id=login.login_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
    <center>
        <h1>Admin Panel</h1>
        <table border="1">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($sql->num_rows>0){
                    while($row=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['register_id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phonenumber'];?></td>
                    <td>
                        <a class="edit" href="update.php?id=<?php echo $row['login_id']?>">Edit</a>
                    </td>
                    <td>
                        <a class="edit" href="delete.php?id=<?php echo $row['login_id']?>">Delete</a>
                    </td>
                </tr>
                   
            <?php  } 
            }
            ?>
                
            </tbody>
        </table>
    </center>
</body>
</html>