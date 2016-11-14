<?php
// this string should be received but for the moment a constant is okay
$params_string = '{"roi_position": 254,"roi_height": 34,"path_position": 100,"path_width": 32}';

$params = json_decode($params_string);

echo '<pre>';
var_dump($params);
echo '</pre>';



/* insert data in db */
$conn = new mysqli('localhost', 'root', '', 'pathfinder');
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

if (!($stmt = $conn->prepare("INSERT INTO `captures` (`id`, `date`, `roi_height`, `roi_position`, `path_position`, `path_width`) VALUES (NULL, CURRENT_TIMESTAMP, ?, ?, ?, ?);"))) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}



$stmt->bind_param('iiii', $params->roi_position, $params->roi_height, $params->path_position, $params->path_width);


$roi_height = $params->roi_height;
$roi_position = $params->roi_position;
$path_position = $params->path_position;
$path_width = $params->path_width;
$stmt->execute();
$id = $stmt->insert_id;
	
$stmt->close();
$conn->close();

exit();

/* get file extension */
$file_parts = pathinfo($_FILES["file"]["tmp_name"]);
$extension = $file_parts['extension'];

/* upload file */
move_uploaded_file($_FILES["file"]["tmp_name"],'captures/' + $id + $extension);

?>