<?php
// Admin login
$sql = "SELECT * FROM admin WHERE username = '$username'";
$result = $conn->query($sql);

// Admin dashboard: Add/Edit/Delete destinations
if ($isAdmin) {
    // Show admin features
    echo "<a href='add_destination.php'>Add Destination</a>";
}
?>
