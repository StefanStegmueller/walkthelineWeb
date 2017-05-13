<?php
/* insert data in db */
$conn = new mysqli('localhost', 'root', '', 'pathfinder');
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

if (!($stmt = $conn->prepare("INSERT INTO `controllsignal` (`direction`) VALUES (?);"))) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}
	
$direction = $_GET["direction"];

if($_GET["move"] == 0)
	$direction = -2;

$stmt->bind_param('i', $direction);
$stmt->execute();
	
$stmt->close();
$conn->close();
?>