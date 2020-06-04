<?php
// connect db
include_once __DIR__ . '/../database.php';

//ottenere id e creare una select per stanza specifica
// get room to edit
if (!empty($_GET['id'])) {
  // id
  $id_room = $_GET['id'];

  // query
  $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room ";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
  } else{
    die('id non esistente');
  }
} else {
  die('Impossibile ottenere una stanza da editare');
}



// close connection
$conn->close();
