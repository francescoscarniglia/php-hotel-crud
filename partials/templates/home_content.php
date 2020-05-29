<main class="container">
  <div class="row">
    <div class="col-sm-12">
      <header class="my-4">
        <h1 class="text-center text-primary">Hotel Rooms</h1>
      </header>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>N° room</th>
            <th>Floor</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            <?php //loop on db rooms
            if(!empty($rooms)){
              foreach ($rooms as $room) { ?>
              <tr>
                <td><?php echo $room['id'] ?></td>
                <td><?php echo $room['room_number'] ?></td>
                <td><?php echo $room['floor'] ?></td>
                <td>
                  <a class="text-success" href="./show.php?id=<?php echo $room['id'] ?>">
                    View
                  </a>
                </td>
                <td>
                  <a class="text-primary" href="#">
                    Update
                  </a>
                </td>
                <td>
                  <a class="text-danger" href="#">
                    Delete
                  </a>
                </td>
              </tr>
              <?php }
            }
             ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
