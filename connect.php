<?php
  
  // function preprint_r($arr){
  //   echo '<pre>';
  //   print_r($arr);
  //   echo '</pre>';
  // }

  //verbindingsvariabelen databse
  $servername = "localhost";
  $username = "root";
  $password = "";

  //connection sting en PDO settings
  try {
    $pdo = new PDO("mysql:host=$servername;dbname=coral yachten", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>