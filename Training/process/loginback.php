<?php 

include 'connection.php';
if (isset($_POST['username'])){
$username=$_POST['username'];
$password=$_POST['password'];

$sql3 = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password' ";
$data = mysqli_query($db,$sql3);
$rows = mysqli_num_rows($data);
if($rows==1){
    $_SESSION['username'] = $username;
    echo '<script language="javascript">';
    echo 'alert("Login Successfully")';
    echo '</script>';
    }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
    header("Location:index.php");
}
 ?>