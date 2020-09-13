<html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
 <body>
 

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
          
        <form action="process/reportprocess.php" method="POST" autocomplete="off"><br>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Student's Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="name" name="namee">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Company Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="company name " name="cname">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Year</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="year" name="year">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
      <button type="submit" class="btn btn-primary">Submit</button><br>
    </div>
  </div>
 
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
$dataquery = "SELECT * FROM `reports`";
$result = $conn->query($dataquery);
if ($result->num_rows > 0) {
  // output data of each row
?>
<table border="2" cellspacing="5" cellpadding="10" class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Company name</th>
        <th>Year</th>
    </tr>  
    <?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
        <td><?php echo $row['namee']; ?></td>
        <td><?php echo $row['cname']; ?></td>
        <td><?php echo $row['year']; ?></td>
    </tr>
    <?php }
    }
     ?>
</table>

</body>
</html>