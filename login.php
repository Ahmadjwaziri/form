<?php
session_start();
include ('connection.php');



   $user= $_POST['username'];
   $pass= $_POST['password'];

  $username = mysqli_real_escape_string($connect, $user);
  $password = mysqli_real_escape_string($connect, $pass);


$login = mysqli_query($connect, "SELECT * FROM users WHERE user_name='$username' AND user_password='$password'");


if(mysqli_num_rows($login)>0){

$userdata = mysqli_fetch_array($login);

$_SESSION['userdata'] = $userdata;

echo'
<script>
window.location = "dashboard.php";
</script>
';

}
else{

    echo'
    <script>
    alert("Invalid login details or User not found !");
    window.location = "index.php";
    </script>
    ';

}





?>