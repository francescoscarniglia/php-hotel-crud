<?php
// get room detail
include __DIR__ . '/partials/show/server.php';
include __DIR__ . '/partials/templates/head.php';
?>


<main class="container">
  <div class="row">
    <div class="col-sm-12">
      <header class="my-4">
        <h1 class="text-center text-primary">Details Rooms</h1>
        <?php var_dump ($room); ?>
      </header>

    </div>
  </div>
</main>



<?php
include __DIR__ . '/partials/templates/footer.php';

 ?>
