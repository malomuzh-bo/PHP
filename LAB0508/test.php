<?php
$conn = new mysqli('localhost', 'root', "Kaovktpx97k9k0@");//'localhost' це як youtube.com
$query = "create database Shop (id integer auto_increment primary key, title nvarchar(100))";
mysqli_query($conn, $query);
$conn -> real_escape_string("");
?>