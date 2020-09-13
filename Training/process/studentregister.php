<?php

require_once ('dbh.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$birthday =$_POST['birthday'];
$contact = $_POST['contact'];
$stream = $_POST['stream'];
$degree = $_POST['degree'];
$pwd = $_POST['pwd'];
$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');

if(in_array($filecheck, $fileextstored)){

    $destinationfile = 'images/'.$filename;
    move_uploaded_file($filetemp, $destinationfile);

$sql = "INSERT INTO `student`(`fname`, `lname`, `email`, `birthday`, `contact`, `stream`, `degree`, `pwd`, `pic`) VALUES ('$fname','$lname','$email','$birthday','$contact','$stream','$degree','$pwd','$destinationfile')";
$result = mysqli_query($conn, $sql);
}
?>