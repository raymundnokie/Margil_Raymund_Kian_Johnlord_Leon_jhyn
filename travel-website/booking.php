<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $destination_id = $_POST['destination_id'];
    $booking_date = $_POST['booking_date'];

    $sql = "INSERT INTO bookings (user_id, destination_id, booking_date) VALUES ('$user_id', '$destination_id', '$booking_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking confirmed!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
