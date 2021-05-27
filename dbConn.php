<?php //Database connection
include 'config.php';

$mysqli = new mysqli("localhost","$userName","$passWord","$dbName");

if ($mysqli -> connect_errno) {
  echo "Yhteys tietokantaan epäonnistui: " . $mysqli -> connect_error;
  exit();
}