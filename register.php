<?php 
include ('connection.php');

$fullname = $_POST['fullname'];
$age = $_POST['age'];
$state = $_POST['state'];
$status = $_POST['status'];
$message = $_POST['message'];
$photo = $_FILES['photo']['name']; //this is to saved row data to database table
$file = $_FILES['photo']['tmp_name']; // this is to move the file with its name to specific folder you wish.

move_uploaded_file($file, "images/$photo");
$insert = mysqli_query($connect, "INSERT INTO student_data (Full_Name, Age, State, Status, Message,photo) VALUES('$fullname', '$age', '$state', '$status', '$message','$photo')");

if ($insert){
echo '
<script>
alert("REGISTRATION COMPLETED!");
window.location = ("index.php");

</script>

';

} else{
    echo '
    <script>
alert("REGISTRATION Error!");
window.location = ("index.php");
</script>
    ';
}












?>