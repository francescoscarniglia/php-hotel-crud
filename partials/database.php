<?php

include __DIR__ . '/../env.php';

//connect
$conn = new mysqli($server_name, $username, $password, $db_name);

//check connessione
if($conn && $conn->connect_error){
  die('si è verificato un errore');
}
