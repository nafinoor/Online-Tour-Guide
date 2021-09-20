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
  $hotelSql = "SELECT * FROM hotel WHERE hotel.h_name ='$hname'";
  $result = mysqli_query($db, $hotelSql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


  //transport
  $transSql = "SELECT * FROM transport WHERE transport.trans_name ='$transName'";
  $r = mysqli_query($db, $transSql);
  $rowt = mysqli_fetch_array($r, MYSQLI_ASSOC);

  //package
  $pSql = "SELECT * FROM package WHERE package.p_id ='$p_id'";
  $ro = mysqli_query($db, $pSql);
  $rowp = mysqli_fetch_array($ro, MYSQLI_ASSOC);


  // database insert SQL code
  $sql = "INSERT INTO `booking` (`user_id`, `p_id`, `d_date`, `d_time`, `mobile`, `noOfPerson`,`h_id`,`trans_id` ) VALUES ('$user_id', '$p_id', '$d_date', '$d_time','$mobile','$person','$row[h_id]','$rowt[trans_id]')";

  // insert in database

  $rs = mysqli_query($db, $sql);


  if($rs)
  {
    $records = mysqli_query($db, "SELECT * from booking WHERE user_id = '$user_id' and mobile = '$mobile' AND d_date = '$d_date' AND d_time = '$d_time'");
    $data = mysqli_fetch_array($records);
    $amount =  ($row['h_fare']+$rowt['trans_fare']+$rowp['p_cost'])*$data['noOfPerson'] ;
    echo "<script>alert('Your BOOKING ID is: $data[b_id]. Amount to be paid = $amount TK. Please note this down for future.');document.location='http://localhost/OTG/showReview.php'</script>";
}
?>
