<?php 

include ('connection.php');





$result = mysqli_query($connect, "SELECT * FROM test");



//if(mysqli_num_rows($result)>0){

//while($row=mysqli_fetch_assoc($result)){

    
//}

//}

if($result->num_rows >0){


    while($row = $result->fetch_assoc()){
        echo $row['id'];
    }
}

?>