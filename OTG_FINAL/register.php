<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">


        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
      <!-- Nav Bar Start -->
      <div class="navbar navbar-expand-lg bg-light navbar-light">
          <div class="container-fluid">
              <a href="index.html" class="navbar-brand">Online <span>Tour Guide</span></a>
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <div class="navbar-nav ml-auto">
                      <a href="index.html" class="nav-item nav-link active">Home</a>
                      <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                          <div class="dropdown-menu">
                              <a href="login.html" class="dropdown-item">User</a>
                              <a href="login.html" class="dropdown-item">Admin</a>
                              <a href="login.html" class="dropdown-item">Hotel Manager</a>
                              <a href="login.html" class="dropdown-item">Transport Supervisor</a>
                          </div>
                      </div>


                      <a href="touristSpot.html" class="nav-item nav-link">Tourist Spots</a>
                      <a href="packageIndex.html" class="nav-item nav-link">Package</a>


                      <a href="feature.html" class="nav-item nav-link">Feature</a>
                      <a href="about.html" class="nav-item nav-link">About Us</a>
                  </div>
              </div>
          </div>
      </div>
      <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>REGISTER TO OTG!</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.html">Home</a>
                        <a href="register.html">REGISTER</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


				<?php
				if(isset($_POST['submit']))
				{
					$con = mysqli_connect('localhost', 'root', '','otg');

					// get the post records
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$email = $_POST['email'];
					$password = $_POST['pass'];

					// database insert SQL code
					$sql = "INSERT INTO `user` (`fname`, `lname`, `email_id`, `password`) VALUES ('$fname', '$lname', '$email', '$password')";

					// insert in database

					$rs = mysqli_query($con, $sql);


					if($rs)
					{
						$records = mysqli_query($con, "select * from otg.user where email_id = '$email' and password = '$password'");
						$data = mysqli_fetch_array($records);
						echo "<script>alert('Your account has been created successfully. Your USER ID is: $data[user_id]. Remember this for booking!');document.location='http://localhost/OTG/login.html'</script>";
					}
			}

				?>
        <center><div class="col-md-5">
            <div id="success"></div>
            <p> Register </p>
            <form name="register" method = "post" id="register" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="control-group">
                  <input type="text" class="form-control" id= 'fname' name = 'fname' placeholder="First Name" required="required" data-validation-required-message="Please enter your first name" />
                  <p class="help-block text-danger"></p>
              </div>
              <div class="control-group">
                  <input type="text" class="form-control" id= 'lname' name = 'lname' placeholder="Last Name" required="not required" data-validation-required-message="Please enter your last name" />
                  <p class="help-block text-danger"></p>
              </div>
                <div class="control-group">
                    <input type="text" class="form-control" id= 'email' name = 'email' placeholder="Email ID" required="required" data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="password" class="form-control" id= 'pass' name = 'pass' placeholder="Password" required="required" data-validation-required-message="Enter your new password" />
                    <p class="help-block text-danger"></p>
                </div>

                <div>
                    <button class="btn custom-btn" type="submit" name="submit" id="sendMessageButton">REGISTER</button>
                </div>
            </form>
        </div></center>


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Shahjahanpur, Dhaka, Bangladesh</p>
                                    <p><i class="fa fa-phone-alt"></i>+8809696560406</p>
                                    <p><i class="fa fa-envelope"></i>otg2021@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">OTG2021</a>, All Right Reserved.</p>

                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>




    </body>
</html>
