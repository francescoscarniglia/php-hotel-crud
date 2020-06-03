<?php
// connect db
include_once __DIR__ . '/../database.php';

//get room ID
if (empty($_POST['id'])) {
  die('ID non corretto');
}

$id_room = $_POST['id'];

//  query
$sql = "DELETE FROM `stanze` WHERE `id` = " . $id_room;
$result = $conn->query($sql);


if($result && $conn->affected_rows > 0) {
  header("Location: " . $base_path . "?del=1");
} elseif($result) {
  echo 'stanza non trovata';
} else{
  echo 'si è veriificato un errore';
}
