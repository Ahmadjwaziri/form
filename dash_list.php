<?php

//starting the session
session_start();
extract($_SESSION);
if(isset($_SESSION['userdata'])){

//session data
$userdata = $_SESSION['userdata'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>LIST</title>
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
    <?php



include ('connection.php');

?>

<html>
<head>
<style>

 th, td{
  border: 1px solid black;
  
}

</style>
</head>
<body>
   <center>
    <h3>LIST OF REGISTED RECORD IN DATABASE</h3>
<table style="width: 100%;">

<tr>
    <th>S/N</th>
    <th>NAME</th>
    <th>AGE</th>
    <th>STATE</th>
    <th>STATUS</th>
    <th>ACTION</th>
</tr>

<?php 

$sql = "SELECT * FROM student_data";
$result = $connect->query($sql);

if($result->num_rows > 0){

    while($row =$result->fetch_assoc()){ ?>

<tr>
    <td><?php echo $row['student_id'] ;?></td>
    <td><?php echo $row['Full_name'] ;?></td>
    <td><?php echo $row['Age'] ;?></td>
    <td><?php echo $row['Status'] ;?></td>
    <td><?php echo $row['State'] ;?></td>
    <td>
       <a href=" FormView.php?id=<?php echo $row['student_id'] ;?>"> <button style="color:green; border: 1px solid green;">PREVIEW FORM</button></a>
       <a href="FormUpdate.php?id=<?php echo $row['student_id']; ?>" > <button style="color:blue ; border: 1px solid blue;">EDIT FORM</button></a>
       <a href="FormDelete.php?id=<?php echo $row['student_id']; ?>" > <button style="color:red; border: 1px solid red;">DELETE FORM</button></a>
    </td>
</tr>


<?php
    }
}

?>




</table>
</center> 
</body>


</html>
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
