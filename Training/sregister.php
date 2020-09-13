<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title> | Admin Panel</title>
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Main CSS-->
    <link href="css/form.css" rel="stylesheet" media="all">
</head>

<body>
    <header>
    <div class="topnav" id="myTopnav">
				<h1>Universal College Of Engineering</h1>
					 <a class="active" href="sregister.php">Student Register</a> 
					 <a href="slogin.html">Student Login</a> 
					 <a href="alogin.html">Admin Login</a> 
					 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
					  </a>
					</div>
    </header>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="process/studentregister.php" method="POST" enctype="multipart/form-data">


                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="First Name" name="fname" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lname" required="required">
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email" required="required">
                        </div>
                        <p>Birthday</p>

                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="birthday" required="required">
                                </div> 
                              
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" name="contact" required>
                        </div>
                        
                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Stream" name="stream" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Degree" name="degree" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Password" name="pwd" id="txtPassword" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Confirm Password" name="confirmpwd" id="txtConfirmPassword" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" id="sub" onclick="return Validate()">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function Validate() {
            var password = document.getElementById("txtPassword").value;
            var confirmPassword = document.getElementById("txtConfirmPassword").value;
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        }
    </script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>

