
<?php  //Read message from database
include 'dbConn.php';

$json = array(); 

$stmt = $mysqli -> prepare("SELECT * FROM messages");
$stmt -> execute();
$result = $stmt -> get_result();

while($row = $result -> fetch_assoc()){ 
    array_push($json, $row);
}
echo json_encode($json); 

$stmt -> close();
$mysqli -> close();

?>