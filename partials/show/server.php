<?php //connect bd
include __DIR__. '/../database.php';

//get rooom id
$id_room = $_GET['id'];

// query sel room
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

if($conn && $result->num_rows > 0) {
  $room = $result->fetch_assoc();
}elseif($result){
  echo 'No result';
} else{
  'Query error';
}
//close conn
$conn->close();
