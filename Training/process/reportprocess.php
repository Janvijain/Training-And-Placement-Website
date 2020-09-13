<?php
require_once ('dbh.php');
$namee= $_POST['namee'];   
$cname=$_POST['cname'];                                         
$year = $_POST['year'];
echo "$name";
 $query = "INSERT INTO `reports` (`id`, `namee`, `cname`, `year`) VALUES (NULL, '$namee', '$cname', '$year');";
 $result = mysqli_query($conn, $query);
  if(!$result){
 echo "failed";
   }
  else{
  echo "successfully inserted";
header("location:..//report.php");
}

?>