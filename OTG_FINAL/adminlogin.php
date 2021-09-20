<?php
    $host = "localhost";
    $user = "root";
    $password = '';
    $db_name = "otg";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }

    $userid = $_POST['userid'];
    $password = $_POST['pass'];

        //to prevent from mysqli injection
        $userid = stripcslashes($userid);
        $password = stripcslashes($password);
        $userid = mysqli_real_escape_string($con, $userid);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select * from admin where admin_id = '$userid' and password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);




        if($count == 1){
          echo "<script>alert('Welcome $row[admin_name]!');document.location='http://localhost/OTG/showBooking.php'</script>";
        }
        else{
          echo "<script>alert('Please enter valid user id and password');document.location='http://localhost/OTG/adminlogin.html'</script>";
        }
?>
