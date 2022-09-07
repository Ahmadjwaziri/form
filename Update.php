<?php
session_start();
extract($_SESSION);
extract($_POST);
extract($_GET);
include ('connection.php');

$fullname = $_POST['fullname'];
$age = $_POST['age'];
$state = $_POST['state'];
$status = $_POST['status'];
$message = $_POST['message'];



$insert = mysqli_query($connect, "UPDATE student_data SET Full_name='$fullname', Age='$age', State='$state', Status='$status', Message='$message' WHERE student_id='$id'");

if ($insert){
echo '
<script>
alert("FORM UPDATED!");
window.location = ("records.php");

</script>

';

} else{
    echo '
    <script>
alert("FORM UPDATE Error!");
window.location = ("records.php");
</script>
    ';
}

?>