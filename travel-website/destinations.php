<?php
$sql = "SELECT * FROM destinations";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<div class='destination'>";
    echo <img src= "c:\Users\e540\Downloads\download (3).jpg"  . $row['JPG'] . alt= . $row['download (3).jpg'] .>;
    echo "<h3>" . $row['download (3).jpg'] . "</h3>";
    echo "<p>" . $row['description'] . "</p>";
    echo "<p>Price: $" . $row[1000] . "</p>";
    echo "</div>";
}
?>
