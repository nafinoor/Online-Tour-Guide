<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Review</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

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





                      <a href="packagebooking.html" class="nav-item nav-link">Package</a>
                      <a href="review.html" class="nav-item nav-link">Review</a>

                      <a href="index.html" class="nav-item nav-link active">LOG OUT</a>
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
                        <h2>Reviews</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.html">Home</a>
                        <a href="review.html">Review</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- comment show Start -->
        <div class="col-md-6">

        <div class="col-lg-7">
            <?php
                $host = "localhost";
                $user = "root";
                $password = '';
                $db_name = "otg";

                $con = mysqli_connect($host, $user, $password, $db_name);
                if(mysqli_connect_errno()) {
                    die("Failed to connect with MySQL: ". mysqli_connect_error());
                }



                $sql = "SELECT * FROM user JOIN review where user.user_id = review.user_id";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "User ID: " . $row["user_id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. " says " .$row["review_details"]. " about " . $row["tourist_spot"].".". "<br>";
                }
                } else {
                echo "0 results";
                }
                $con->close();

            ?>
          </div>
        </div>
        <!-- Comment show End -->


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
