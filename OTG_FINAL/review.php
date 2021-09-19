<?php

$con = mysqli_connect('localhost', 'root', '','otg');

// get the post records
$userid = $_POST['userid'];
$email = $_POST['email'];
$spot = $_POST['spot'];
$details = $_POST['details'];

// database insert SQL code
$sql = "INSERT INTO `review` (`user_id`, `tourist_spot`, `review_details`) VALUES ('$userid', '$spot', '$details')";

// insert in database

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "<script>alert('Thanks for sharing your valuable opinion with us.');document.location='http://localhost/OTG/showReview.php'</script>";
}


?>
