<?php

//starting the session
session_start();
if(isset($_SESSION['userdata'])){

//session data
$userdata = $_SESSION['userdata'];




?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>REGISTER</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: green;
  padding: 30px;
  text-align: center;
  font-size: 10px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 10%;
  height: 600px; /* only for demonstration, should be removed */
  background: green;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 90%;
  background-color: #f1f1f1;
  height: 600px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: green;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>



<header>
  <h4>DASHBOARD     <button type="submit" style="float:right;">LOGOUT</button></h4>
  
</header>

<section>
  <nav>
    <ul>
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="dash_reg.php">Register_Student</a></li>
      <li><a href="dash_list.php">List_Registered</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
   
  </nav>
  
  <article>
    <h1>WELLCOME:<?php echo $userdata['user_fullname']; ?></h1>
    <p>
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
    </p>
    </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>
<?php }

else{
  echo'
  <script>
  alert("Please login !");
  window.location = "index.php";
  </script>
  ';

}


?>
