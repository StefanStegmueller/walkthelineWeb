<?php
/* insert data in db */
$conn = new mysqli('localhost', 'root', '', 'pathfinder');
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

if (!($stmt = $conn->prepare("INSERT INTO `controllsignal` (`move`, `direction`) VALUES (?, ?);"))) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}

$move = $_GET["move"];
	
$direction = $_GET["direction"];
$stmt->bind_param('ii', $move, $direction);
$stmt->execute();
	
$stmt->close();
$conn->close();




?>