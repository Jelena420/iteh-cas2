<?php 
$host = "localhost";
$db = "kolokvijumi";
$user = "root";
$pass = "";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_errno){
    exit("Neuspešna konekcija: greška> ".$conn->connect_error.", err kod>".$conn->connect_errno);
}

?>