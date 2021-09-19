<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Package</title>
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


                      <a href="index.html" class="nav-item nav-link active">LOG OUT</a>
                  </div>
              </div>
          </div>
      </div>
      <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Choose Your Package</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- Booking Start -->
        <div class="booking">
            <div class="container">

                    <center><div class="col-lg-5">
                        <div class="booking-form">
                            <form name="booking" id="booking" method='post' action="pac.php">

                              <div class="control-group">
                                  <div class="input-group">
                                      <input type="number" class="form-control" placeholder="USER ID" name="user_id" id='user_id' required="required" />
                                      <div class="input-group-append">
                                          <div class="input-group-text"><i class="far fa-user"></i></div>
                                      </div>
                                  </div>
                              </div>

                              <div class="control-group">
                                  <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Package ID" id="package_id" name="package_id" required="required" />

                                      <div class="input-group-append">
                                          <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                      </div>
                                    </div>
                                </div>


                                    <div class="control-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="No. of Persons" id="person" name="person" required="required" />
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="far fa-user"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="control-group">
                                    <div class="input-group date" id="date" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" placeholder="Departure Date" name="d_date" data-target="#date" data-toggle="datetimepicker"/>

                                    </div>

                                </div>
                                <div class="control-group">
                                    <div class="input-group time" id="time" data-target-input="nearest">
                                        <input type="time" class="form-control datetimepicker-input" placeholder="Departure Time" name="d_time" data-target="#time" data-toggle="datetimepicker"/>

                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="input-group">
                                        <select class="custom-select form-control" name="hname">
                                            <option disabled selected>Residential Hotel</option>
                                            <?php
                                              $db = mysqli_connect("localhost","root","","otg");

                                              if(!$db)
                                              {
                                                die("Connection failed: " . mysqli_connect_error());
                                              }
                                              $p_id = $_POST['package_id'];


                                              $records = mysqli_query($db, "SELECT name From hotel WHERE p_id='$p_id'");  // Use select query here

                                              while($data = mysqli_fetch_array($records))
                                              {
                                                  echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
                                              }
                                              mysqli_close($db);
                                          ?>

                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <select class="custom-select form-control" name="transName">
                                            <option disabled selected>Transports</option>
                                            <?php
                                              $db = mysqli_connect("localhost","root","","otg");

                                              if(!$db)
                                              {
                                                die("Connection failed: " . mysqli_connect_error());
                                              }
                                              $p_id = $_POST['package_id'];


                                              $records = mysqli_query($db, "SELECT name From transport WHERE p_id='$p_id'");  // Use select query here

                                              while($data = mysqli_fetch_array($records))
                                              {
                                                  echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
                                              }
                                              mysqli_close($db);
                                          ?>

                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Mobile" name="mobile" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button class="btn custom-btn" type="submit">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div></center>
                </div>
            </div>
        </div>


        <!-- Booking End -->


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

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
