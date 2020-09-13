<?php

require_once ('dbh.php');

$email = $_POST['email'];
$password = $_POST['pwd'];

$sql = "SELECT * from `student` WHERE email = '$email' AND pwd = '$password'";
$sqlid = "SELECT id from `student` WHERE email = '$email' AND pwd = '$password'";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlid);

$empid = "";
if(mysqli_num_rows($result) == 1){
	
	$student = mysqli_fetch_array($id);
	$studid = ($student['id']);
	

	//echo ("logged in");
	//echo ("$empid");
	
	header("Location: ..//sloginwel.php?id=$studid");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>