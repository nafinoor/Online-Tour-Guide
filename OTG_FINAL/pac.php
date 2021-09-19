<?php

  $db = mysqli_connect("localhost","root","","otg");

  if(!$db)
  {
    die("Connection failed: " . mysqli_connect_error());
  }

  // get the post records
  $p_id = $_POST['package_id'];
  $user_id = $_POST['user_id'];
  $d_date = $_POST['d_date'];
  $d_time = $_POST['d_time'];
  $mobile = $_POST['mobile'];
  $person = $_POST['person'];
  $hname = $_POST['hname'];
  $transName = $_POST['transName'];

  //hotel
  $hotelSql = "select * from hotel where name='$hname'";
  $result = mysqli_query($db, $hotelSql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


  //transport
  $transSql = "select * from transport where name='$transName'";
  $r = mysqli_query($db, $transSql);
  $rowt = mysqli_fetch_array($r, MYSQLI_ASSOC);


  // database insert SQL code
  $sql = "INSERT INTO `booking` (`p_id`, `user_id`, `d_date`, `d_time`, `mobile`, `noOfPerson`,`h_id`,`trans_id` ) VALUES ('$p_id', '$user_id', '$d_date', '$d_time','$mobile','$person','$row[h_id]','$rowt[trans_id]')";

  // insert in database

  $rs = mysqli_query($db, $sql);


  if($rs)
  {
    $records = mysqli_query($db, "select * FROM booking b, user u, transport t, hotel h, package p where b.user_id = '$user_id' and b.mobile = '$mobile' and b.user_id = u.user_id AND b.p_id=p.p_id AND b.h_id = h.h_id AND b.trans_id = t.trans_id");
    $data = mysqli_fetch_array($records);
    echo "<script>alert('Booking Confirmed. Your Booking ID is: $data[b_id].');document.location='http://localhost/OTG/showReview.php'</script>";

}
?>
