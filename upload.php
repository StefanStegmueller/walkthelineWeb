<?php
// this string should be received but for the moment a constant is okay
//$params_string = '{"roi_position": 254,"roi_height": 34,"path_position": 100,"path_width": 32}';

//$params = json_decode($params_string);
	
//var_dump($_POST);
//$params = $_POST[""];


error_reporting(0);





/* insert data in db */
$conn = new mysqli('localhost', 'root', '', 'pathfinder');
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

if (!($stmt = $conn->prepare("INSERT INTO `captures` (`id`, `date`, `roi_height`, `roi_position`, `path_position`, `path_width`) VALUES (NULL, CURRENT_TIMESTAMP, ?, ?, ?, ?);"))) {
    //echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}





$roi_height = $_POST["roi_height"];
$roi_position = $_POST["roi_position"];
$path_position = $_POST["path_position"];
$path_width = $_POST["path_width"];
$stmt->bind_param('iidi', $roi_height, $roi_position, $path_position, $path_width);
$stmt->execute();
$id = $stmt->insert_id;
	
$stmt->close();
$conn->close();



//exit();



/* get file extension */
$file_parts = pathinfo($_FILES["file"]["name"]);
$extension = $file_parts['extension'];

/* upload file */
if(move_uploaded_file($_FILES["file"]["tmp_name"], 'captures/' . $id . '.' . $extension))
{
	// echo 'uploaded';
}
else
{
	// echo 'not uploaded';
}

// Wenn on_track sich von true zu false ändert muss wait_for_manual_instruction auf true gesetzt werden

mysql_connect("localhost", "root","")or die ("Die Verbindung schlug fehl".mysql_error());
mysql_select_db("pathfinder") or die ("Die Verbindung schlug fehl".mysql_error());



// Build response
$result = mysql_query("SELECT `direction` FROM `controllsignal` ORDER BY `id` DESC LIMIT 1") or die ("Error in query: $query. ".mysql_error());

$output = array();

while($row = mysql_fetch_array($result))
{
	$output["direction"] = (int)$row["direction"];
}

echo json_encode($output);


?>