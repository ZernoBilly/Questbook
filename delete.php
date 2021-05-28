
<?php //Delete message from database
include 'dbConn.php';

if (!empty($_POST['login2'])){ 
    $id = $_POST['$id'];
    echo "$id";
    $stmt = $mysqli -> prepare("DELETE FROM messages WHERE id='$id'");
    

    $stmt -> execute();
        
}else{
    echo "Tietoja puuttuu!";
    exit;
}

$stmt -> close();
$mysqli -> close();

?>