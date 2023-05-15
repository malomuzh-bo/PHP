<?php
$conn = new mysqli("localhost", "root", "");
$query = "CREATE DATABASE IF NOT EXISTS Shop";
mysqli_query($conn, $query);
if ($conn -> connect_error) {
    die("Error: " . $conn -> connect_error);
}
if ($conn -> query($query)) {
    echo "Successfully!";
}
else {
    echo "Error: " . $conn -> error;
}


$conn -> close();  
?>