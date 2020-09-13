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
  <link href="css/form.css" rel="stylesheet" media="all">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<header>
<div class="topnav" id="myTopnav">
  <h1>Universal College Of Engineering</h1>
  <a href="alogin.php">Home</a>
  <a href="alogin.html">Log Out</a>
</div>
</header>
<h1>Seminars/Worshop</h1>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="abc"><b>Add +</b></button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" ></h3>
      </div>
      <div class="modal-body">
        <form action="process/seminarprocess.php" method="POST">
          <label>Seminar Name</label>
          <input type="text" name="name"><br>
          <label>location/URL</label>
          <input type="text" name="url"><br>
          <label>Registration fees</label>
          <input type="text" name="fee"><br>
          <input type="submit" name="submit">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php 
require_once ('process/dbh.php');
$dataquery = "SELECT * FROM `seminar`  ";
$result1 = $conn->query($dataquery);
 ?> 
  <?php 
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) { ?>
  <div class="box" class="shadow p-3 mb-5 bg-white rounded">
<div style="border-bottom:1px solid black"><b><?php  echo  $row['name']; ?></b></div>
<div><label>Location of Seminar.:</label><?php  echo $row['url']; ?></div>
<div><label>Registration fee: </label><?php echo $row['fee']; ?></div>
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