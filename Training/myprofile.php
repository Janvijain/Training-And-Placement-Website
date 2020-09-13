<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `student` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);

  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `student` WHERE id=$id";

  $result = mysqli_query($conn, $sql);
 
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $fname = $res['fname'];
  $lname = $res['lname'];
  $email = $res['email'];
  $birthday =$res['birthday'];
  $contact = $res['contact'];
  $degree = $res['degree'];
  $pic = $res['pic'];
}
}

?>

<html>
<head>
  <title>My Profile</title>
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


    <!-- Main CSS-->
    <link href="css/form.css" rel="stylesheet" media="all">
</head>
<body>
<header>
<div class="topnav" id="myTopnav">
  <h1>UCOE</h1>
  <a href="sloginwel.php?id=<?php echo $id?>"">Home</a>
  <a  class="active" href="myprofile.php?id=<?php echo $id?>"">My Profile</a>
  <a href="studentsseminar.php?id=<?php echo $id?>"">Seminars/Webinars</a>
  <a href="studentinternship.php?id=<?php echo $id?>"">Jobs/Internships</a>
  <a href="slogin.html">Log Out</a>
</div>
</header>
  
  <div class="divider"></div>
  

    <!-- <form id = "registration" action="edit.php" method="POST"> -->
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">My Info</h2>
                    <form method="POST" action="myprofileup.php?id=<?php echo $id?>" >

                        <div class="input-group">
                          <img src="process/<?php echo $pic;?>" height = 150px width = 150px>
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p>First Name</p>
                                     <input class="input--style-1" type="text" name="fname" value="<?php echo $fname;?>" readonly >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Last Name</p>
                                    <input class="input--style-1" type="text" name="lname" value="<?php echo $lname;?>" readonly>
                                </div>
                            </div>
                        </div>


                        <div class="input-group">
                          <p>Email</p>
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>" readonly>
                        </div>

                        <div class="input-group">
                          <p>Date of Birth</p>
                              <input class="input--style-1" type="text" name="birthday" value="<?php echo $birthday;?>" readonly>      
                        </div>
                         
                        <div class="input-group">
                          <p>Contact Number</p>
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>" readonly>
                        </div>

                        <!-- <div class="input-group">
                          <p>Stream</p>
                            <input class="input--style-1" type="number" name="stream" value="<?php echo $stream;?>" readonly>
                        </div> -->
              
                         <div class="input-group">
                          <p>Degree</p>
                            <input class="input--style-1" type="text"  name="degree" value="<?php echo $degree;?>" readonly>
                        </div>

                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green"  name="send" >Update Info</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
