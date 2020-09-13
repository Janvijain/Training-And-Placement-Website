<?php
require_once ('dbh.php');
$name= $_POST['name'];                                            
$url = $_POST['url'];
$fee = $_POST['fee'];
echo "$name";
 $query = "INSERT INTO `seminar` (`id`, `name`, `url`, `fee`) VALUES (NULL, '$name', '$url', '$fee');";
 $result = mysqli_query($conn, $query);
  if(!$result){
 echo "failed";
   }
  else{
  echo "successfully inserted";
header("location:..//seminar.php");
}
?>