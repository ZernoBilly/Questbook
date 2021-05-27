<?php //Write messages to database
include 'dbConn.php';

if (!empty($_POST['login'])){
    $name = $_POST['$name'];
    $msg = $_POST['$msg'];

    $stmt = $mysqli -> prepare("INSERT INTO messages(name,message) VALUES (?, ?)");
    $stmt -> bind_param("ss", $name, $msg);

    $stmt -> execute();

}else{
    exit;
}

$stmt -> close();
$mysqli -> close();

?>