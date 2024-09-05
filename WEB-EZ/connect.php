<?php 
$servername = "localhost";
$username = "root";
$password= "";

try{
    $conn = new PDO("mysql:host=$severname;dbname=regis_db;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
} catch(PDOException $e){
    echo "Connected failed : " . $e->getMessage();
}
?>