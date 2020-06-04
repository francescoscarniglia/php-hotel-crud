<?php //ottieni lista stanze in home-page

include_once __DIR__ . '/../database.php';

$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);
// var_dump($result);
if($result && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // echo "ID: {$row['id']} - Floor : {$row['floor']}  '<br>'";
    // echo 'ID' . $row['id'] .  ' - Floor :   ' . $row['floor'] . '<br>';
    $rooms[]= $row;
  }
} elseif($result){
  echo 'no result';
} else {
  echo 'query error';
}

$conn->close();
