<?php

include __DIR__ . '/partials/home/server.php';


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./dist/css/app.css">
  <title>Php Hotel Crud | F.sco Scarniglia</title>
</head>
<body>

  <main class="container">
    <div class="row">
      <div class="col-sm-12">
        <header>
          <h1 class="text-center">Hotel Rooms</h1>
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
                    <a class="text-success" href="#">
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

<script src="./dist/js/app.js">

</script>
</body>
</html>
