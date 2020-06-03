<?php
// get room detail
include __DIR__ . '/partials/show/server.php';
include __DIR__ . '/partials/templates/head.php';
?>

<main class="container">
  <div class="row">
    <div class="col-sm-12">
      <header class="my-4">
        <h1 class="text-center text-primary">Details Room</h1>
      </header>

      <div class="card">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            ID: <?php echo $room['id'];?>
          </li>
          <li class="list-group-item">
            ROOM NUMBER: <?php echo $room['room_number'];?>
          </li>
          <li class="list-group-item">
            BEDS: <?php echo $room['beds'];?>
          </li>
          <li class="list-group-item">
            FLOOR: <?php echo $room['floor'];?>
          </li>
        </ul>
      </div>

    </div>
  </div>
</main>
