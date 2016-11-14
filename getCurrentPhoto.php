<?php
/* insert data in db */
$conn = new mysqli('localhost', 'root', '', 'pathfinder');
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

if (!($stmt = $conn->prepare("SELECT `id`, `date`, `roi_height`, `roi_position`, `path_position`, `path_width` FROM `captures` ORDER BY `date` DESC LIMIT 1;"))) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}

/* bind result variables */
if (!($stmt->bind_result($id, $date, $roi_height, $roi_position, $path_position, $path_width))) {
    echo "Bind failed: (" . $conn->errno . ") " . $conn->error;
}

$stmt->execute();

/* fetch values */
while ($stmt->fetch()) {
    $output=array('id' => $id, 'date' => $date, 'roiHeight' => $roi_height, 'roiPosition' => $roi_position, 'pathPosition' => $path_position, 'pathWidth' => $path_width);
};
echo json_encode($output);

	
$stmt->close();
$conn->close();
?>