<?php 
session_start();
extract($_SESSION);
extract($_POST);
extract($_GET);
include ('connection.php');




$delete = mysqli_query($connect, "DELETE  FROM student_data WHERE student_id='$id'");


if($delete){

echo '
<script>

alert("RECORD DELETED!");

window.location=("records.php");

</script>


';


} else{

    echo '
<script>

alert("ERROR!");

window.location=("records.php");

</script>


';

}



?>