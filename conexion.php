<?php
$hostname="localhost";
$user="axlcapa1_alfredo";
$pass="Assassin85axl";
$bdd="axlcapa1_siom";

$link = mysqli_connect($hostname, $user, $pass);

$conn = new mysqli($hostname, $user, $pass);
$db = new mysqli($hostname, $user, $pass, $bdd);

// $mysqli -> set_charset("utf8");
mysqli_set_charset($db,"utf8");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>