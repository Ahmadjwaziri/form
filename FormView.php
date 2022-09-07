<?php
session_start();
extract($_SESSION);
extract($_POST);
extract($_GET);
include ('connection.php');

$query = mysqli_query($connect, "SELECT * FROM student_data WHERE student_id='$id'");

$row = $query->fetch_array();



?>

<html>

<head>


</head>


<body>

    <div style="border:2px solid black ; margin-top: 50px;margin-left: 400px;margin-right:400px; width:fit-content; height:fit-content; ">
    <center>
<h3>FORM DATA PRINT PAGE</h3>
</center>
<center>
<img src="images/<?php echo $row['photo']; ?>" alt="" style="max-width: 20%;max-height: 20%; object-fit:contain;">
</center>
<p style="margin-left:10px ;border:1px solid black;margin-right:400px"><b>FULLNAME:</b><?php echo $row['Full_name'] ;?></p>
<p style="margin-left:10px ;border:1px solid black;margin-right:400px"><b>AGE:</b><?php echo $row['Age'] ;?></p>
<p style="margin-left:10px ;border:1px solid black;margin-right:400px"><b>STATUS:</b><?php echo $row['Status'] ;?></p>
<p style="margin-left:10px ;border:1px solid black;margin-right:400px"><b>MESSAGE:</b><?php echo $row['Message'] ;?></p>
<center>
<button type="button" onclick="window.print()">PRINT</button> <a href="records.php"><button>BACK TO LIST</button></a> <a href="index.php"><button>BACK TO REGISTER</button></a>
</center>




     
    </div>

</body>

</html>