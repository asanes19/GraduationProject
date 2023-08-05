<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adms_db";

// Check if the form has been submitted
if(isset($_POST['submit_bid'])) {

  // Get the user ID from the session
  $user_id = $_SESSION['user_id'];

  // Get the car ID from the form data
  $car_id = $_POST['car_id'];

  // Get the bid amount from the form data
  $bid_amount = $_POST['bid_amount'];

  // Connect to the database
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check if the connection was successful
  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get the bid end date and time for the corresponding bidding car
  $sql = "SELECT bid_end_datetime FROM biddingcars WHERE id='$car_id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $bid_end_datetime = $row['bid_end_datetime'];

  // Check if the bid end date and time has passed
  if(strtotime($bid_end_datetime) < time()) {
    $status = 2; // Bid has ended
  } else {
    $status = 1; // Bid is ongoing
  }

  // Insert the new bid record into the database
  $sql = "INSERT INTO bids (car_id, user_id, hights_bid, status) VALUES ('$car_id', '$user_id', '$bid_amount', '$status')";

  if(mysqli_query($conn, $sql)) {
    // Success! The new bid has been added to the database
    echo "<script>alert('Your bid has been successfully submitted.');</script>";
    echo "<script>window.location = 'bidding.php';</script>";
} else {
    // There was an error inserting the new bid record
    echo "Error: " . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}
?>
