<?php 

include ('config.php');

$fullname = $_POST['fullname'];
$age   = $_POST['age'];
$state = $_POST['state'];
$status = $_POST['status'];
$message = $_POST['message'];



//$insert = mysqli_query($connect, "INSERT INTO student_data (Full_Name, Age, State, Status, Message,photo) VALUES('$fullname', '$age', '$state', '$status', '$message','yusuf.png')");
$yusuf = mysqli_query($connect, "INSERT INTO student_data(Full_Name,Age,State,Status,Message,photo) VALUES('$fullname','$age','$state', '$status', '$message','yusuf.png')");



?>