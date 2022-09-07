<?php
session_start();


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