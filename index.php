<!DOCTYPE html>
<?php 



?>
<html>
<head>

</head>

<body>
  <hr><hr> 
  <a href="records.php"><button>LIST OF REGISTERED RECORD</button> </a>
  <hr><hr>
  <center> 
<form action="register.php" method="post" enctype="multipart/form-data">

<p>REGISTRATION FORM:</p>
<p>ENTER FULLNAME:<input type="text" name="fullname" id="fullname" required></p>

<p>ENTER AGE:<input type="text" name="age" id="age" required></p>

<p>ENTER STATE:<input type="text" name="state" id="state" required></p>

<!-- SELECT WITH OPTION MENU -->
<p>SELECT STATUS:
<select name="status" id="status" required>
    <option value="">SELECT.....</option>
    <option value="SINGLE">SINGLE</option>
    <option value="MARRIED">MARRIED</option>
</select>
</p>
<p>MESSAGE: <input type="text" name="message" id="message" required></p>
<p>PASSPORT UPLOAD:<input type="file" name="photo" id="photo"></p>
<button type="submit">SUBMIT</button>
</form>
</center>
<hr><hr>
<?php


?>
</body>

</html>

