<?php 
session_start();
extract($_SESSION);
extract($_POST);
extract($_GET);
include ('connection.php');




$query = mysqli_query($connect, "SELECT * FROM student_data WHERE student_id='$id'");

$row = $query->fetch_array();



?>


<hr><hr>
  <center> 
<form action="Update.php?id=<?php echo $row['student_id']; ?>" method="post" enctype="multipart/form-data">

<p>UPDATE FORM:</p>
<p>ENTER FULLNAME:<input type="text" name="fullname" id="fullname" value="<?php echo $row['Full_name'] ;?>" required></p>

<p>ENTER AGE:<input type="text" name="age" id="age" value="<?php echo $row['Age'] ;?>" required></p>

<p>ENTER STATE:<input type="text" name="state" id="state" value="<?php echo $row['State'] ;?>"  required></p>

<!-- SELECT WITH OPTION MENU -->
<p>SELECT STATUS:
<select name="status" id="status"  required>
    <option selected value="<?php echo $row['Status'] ;?>"><?php echo $row['Status'] ;?></option>
    <option value="SINGLE">SINGLE</option>
    <option value="MARRIED">MARRIED</option>
</select>
</p>
<p>MESSAGE: <input type="text" name="message" id="message" value="<?php echo $row['State'] ;?>" required></p>

<button type="submit">SUBMIT</button>
</form>
</center>
<hr><hr>