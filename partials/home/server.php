<?php //ottieni lista stanze in home-page

include __DIR__ . '/../database.php';

$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);
if($result && $result->num_rows > 0){
while ($row = $result->fetch_assoc()) {
  $rooms = [];
  //var_dump($row);
  //echo "ID: {$row['id']} - Floor: {$row['floor']} <br>";

  // singole stanze  in array
  $rooms[] = $row;
}
}elseif ($result) {
  echo 'Nessun risultato';
}else {
  echo "Query error";
}

//close db connection
$conn->close();
