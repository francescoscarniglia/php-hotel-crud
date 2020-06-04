<?php
// connect db
include_once __DIR__ . '/../database.php';

// check id
if( empty ( $_POST['id'] ) ) {
  die('ID non trovato');
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

// perform update
$sql = "UPDATE `stanze`
SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor
WHERE `id` = $id_room";

// query
$result = $conn->query($sql);

// ritorna sempre true se maggiore di 0 modifica ok
if($result && $conn->affected_rows > 0) {
  // torna alla pagina show
  //header("Location: " . $base_path . "/show.php?id=$id_room");
  header("Location: $base_path/show.php?id=$id_room");
}elseif ($result) {
  die('Non ho trovato una stanza.');
} else{
  die('Si è verificato un errore');
}

// close connection
$conn->close();
