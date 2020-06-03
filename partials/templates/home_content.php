
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
                  <a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">
                    View
                  </a>
                </td>
                <td>
                  <a class="text-primary" href="./edit.php?id=<?php echo $room['id']; ?>">
                    Update
                  </a>
                </td>
                <td>
                  <form action="./partials/delete/server.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
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
