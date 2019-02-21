<?php 

try {
	$conn = new PDO("mysql:host=localhost;dbname=todo", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
} catch (PDOException $e) {
	echo "Failed to connect ".$e->getMessage();
}


 ?>