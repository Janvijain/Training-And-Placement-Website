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
	}
}
?>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Student Home Page</title>
	<!-- <link rel="stylesheet" type="text/css" href="styleemplogin.css"> -->
	<link href="css/form.css" rel="stylesheet" media="all">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">

	<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 90%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("V1.jpg");
  min-height: 90%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>
	
<header>
<div class="topnav" id="myTopnav">
  <h1>UCOE</h1>
  <a class="active" href="sloginwel.php?id=<?php echo $id?>"">Home</a>
  <a href="myprofile.php?id=<?php echo $id?>"">My Profile</a>
  <a href="studentsseminar.php?id=<?php echo $id?>"">Seminars/Webinars</a>
  <a href="studentinternship.php?id=<?php echo $id?>"">Jobs/Internships</a>
  <a href="slogin.html">Log Out</a>
</div>
</header>
	 
	<div class="divider"></div>
	<div id="divimg">
	<div>	
		<br>
	 <center><h2>Welcome <?php echo "$fname"; ?> </h2></center>
	 <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-Black" style="padding:48px">
    <span class="w3-jumbo w3-hide-small"></span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Welcome To The Training and Placement Cell Of UCOE</span><br>
  </div> 
  </header>
</body>
</html>