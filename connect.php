<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gr";


$fname = $_POST['fname'];
$lname = $_POST['lname'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO xxx (f_name, lname)
VALUES ('$fname', '$lname')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>