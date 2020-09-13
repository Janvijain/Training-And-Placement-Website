<?php
require_once ('dbh.php');
$cmname= $_POST['cmname'];                                            
$url = $_POST['url'];
$stipend = $_POST['stipend'];
echo "$name";
 $query = "INSERT INTO `internship` (`id`, `cmname`, `url`, `stipend`) VALUES (NULL, '$cmname', '$url', '$stipend');";
 $result = mysqli_query($conn, $query);
  if(!$result){
 echo "failed";
   }
  else{
  echo "successfully inserted";
header("location:..//internship.php");
}

?>