<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BOOKING TABLE</title>
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
                        <h2>BOOKING TABLE</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- comment show Start -->
        <div class="col-md-6">

        <center><div class="col-lg-7">
          <p><center><h1>ADMIN PANEL</h1></center></p>
            <?php
                $host = "localhost";
                $user = "root";
                $password = '';
                $db_name = "otg";

                $con = mysqli_connect($host, $user, $password, $db_name);
                if(mysqli_connect_errno()) {
                    die("Failed to connect with MySQL: ". mysqli_connect_error());
                }



                $sql = "SELECT * FROM booking  , user  , transport  , hotel  , package  WHERE booking.user_id = user.user_id AND booking.p_id = package.p_id AND booking.h_id = hotel.h_id AND booking.trans_id = transport.trans_id ORDER BY booking.b_id ASC";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<table border='2'>
                  <tr>
                  <th>Booking ID</th>
                  <th>USER ID</th>
                  <th>USER NAME</th>
                  <th>EMAIL ID</th>
                  <th>CONTACT</th>
                  <th>PACKAGE ID</th>
                  <th>TRANSPORT</th>
                  <th>HOTEL</th>
                  <th>DATE</th>
                  <th>TIME</th>
                  <th>No. Of Person</th>
                  <th>Amount</th>
                  </tr>";

                  while($row = mysqli_fetch_array($result))
                  {
                  echo "<tr>";
                  echo "<td>" . $row['b_id'] . "</td>";
                  echo "<td>" . $row['user_id'] . "</td>";
                  echo "<td>" . $row['fname'] . "</td>";
                  echo "<td>" . $row['email_id'] . "</td>";
                  echo "<td>" . $row['mobile'] . "</td>";
                  echo "<td>" . $row['p_id'] . "</td>";
                  echo "<td>" . $row['trans_name'] . "</td>";
                  echo "<td>" . $row['h_name'] . "</td>";
                  echo "<td>" . $row['d_date'] . "</td>";
                  echo "<td>" . $row['d_time'] . "</td>";
                  echo "<td>" . $row['noOfPerson'] . "</td>";
                  echo "<td>" . ($row['h_fare']+$row['trans_fare']+$row['p_cost'])*$row['noOfPerson'] . "</td>";
                  echo "</tr>";
                  }
                  echo "</table>";
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
            </div></center>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>




    </body>
</html>
