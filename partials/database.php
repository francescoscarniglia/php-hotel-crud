<?php

include __DIR__ . '/../env.php';

//connect
$conn = new mysqli($server_name, $username, $password, $db_name);

//check connessione
if($conn && $conn->connect_error){
  die('si è verificato un errore');
}

//ottieni lista stanze in home-page
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0){
echo "abbiamo dei records";
}elseif ($result) {
  echo 'Nessun risultato';
}else {
  echo "Query error";
}
