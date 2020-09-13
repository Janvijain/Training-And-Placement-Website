<?php
require_once ('process/dbh.php');
$sql = "SELECT * FROM `student` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);

  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `student` WHERE id=$id";
?>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<header>
<div class="topnav" id="myTopnav">
  <h1>UCOE</h1>
  <a href="sloginwel.php?id=<?php echo $id?>"">Home</a>
  <a href="myprofile.php?id=<?php echo $id?>"">My Profile</a>
  <a href="empproject.php?id=<?php echo $id?>"">My Applications</a>
  <a href="studentsseminar.php?id=<?php echo $id?>"">Seminars/Webinars</a>
  <a class="active" href="studentinternship.php?id=<?php echo $id?>"">Jobs/Internships</a>
  <a href="slogin.html">Log Out</a>
</div>
</header>
<h1>Jobs/Internship</h1>



<?php 
require_once ('process/dbh.php');
$dataquery = "SELECT * FROM `internship`  ";
$result1 = $conn->query($dataquery);
 ?> 
  <?php 
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) { ?>
  <div class="box" class="shadow p-3 mb-5 bg-white rounded">
<div style="border-bottom:1px solid black"><b><?php  echo  $row['cmname']; ?></b></div>
<div><label>Location.:</label><?php  echo $row['url']; ?></div>
<div><label>Stipend.: </label><?php echo $row['stipend']; ?></div>
</div><br>
  <?php 
  }
} else {
  echo "0 results";
}
$conn->close();
   ?>


</body>
</html>