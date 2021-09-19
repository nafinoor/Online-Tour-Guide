<?php
    $host = "localhost";
    $user = "root";
    $password = '';
    $db_name = "otg";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }

    $emailid = $_POST['email'];
    $password = $_POST['pass'];

        //to prevent from mysqli injection
        $emailid = stripcslashes($emailid);
        $password = stripcslashes($password);
        $emailid = mysqli_real_escape_string($con, $emailid);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select * from otg.user where email_id = '$emailid' and password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);




        if($count == 1){
          echo "<script>alert('Welcome $row[fname] $row[lname] !');document.location='http://localhost/OTG/packagebooking.html'</script>";
        }
        else{
          echo "<script>alert('Please enter valid email id and password');document.location='http://localhost/OTG/login.html'</script>";
        }
?>
