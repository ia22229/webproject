<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $UserID = $_POST["UserID"];
    $Username = $_POST["Username"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $Gender = $_POST["Gender"];
    $Age = $_POST["Age"];
    $Location = $_POST["Location"];

    // Connect to the database (replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "webproject";

    // Create a connection
    $connect = mysqli_connect($servername, $username, $password, $database);

    // Check the connection
    if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    else
    {
echo "Connection successfull";
    // Insert data into the user table
    $stmt = $connect->prepare("INSERT INTO user(UserID, Username, Email, Password, Gender, Age, Location) 
            VALUES (?,?,?,?,?,?,?)/*('$UserID', '$Username', '$Email', '$Password', '$Gender', '$Age', '$Location')*/");
            $stmt->bind_param("sssssis",$UserID, $Username, $Email, $Password, $Gender, $Age, $Location);
            $stmt->execute();
            echo "registration success";
            $stmt->close();
    }
    if ($connect->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $connect->close();
}
?>
