<?php

$name = $_POST["name"];
$email = $_POST["email"];
$no = $_POST["no"];
$fb = $_POST["fb"];

$conn = mysqli_connect("localhost", "root", "", "recipe_rescuer") or die("connection failed");
$sql = "INSERT INTO user_info (Name, Email, ph, Feedback) VALUES ('{$name}','{$email}','{$no}','{$fb}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: contact.php");
mysqli_close($conn);
?>