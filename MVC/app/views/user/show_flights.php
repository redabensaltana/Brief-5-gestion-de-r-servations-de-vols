<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <img class="navbar-brand" src="<?= URL ?>/logo/logo.png" style="height:60px">

    </div>
    </div>
  </nav>

  <section class="container mt-5">

    <?php foreach ($data['show_flights_user'] as $info) : ?>

      <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 rounded-3 bg-light p-3 mb-5">
        <div class="p-2">
          <h2 class='fs-5'>Departure</h2>
          <div><?= $info['departure'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>Destination</h2>
          <div><?= $info['destination'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>Direction type</h2>
          <div><?= $info['direction_type'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>Depart date</h2>
          <div><?= $info['depart_date'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>Return date</h2>
          <div><?= $info['return_date'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>Seats</h2>
          <div><?= $info['seats'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>Price</h2>
          <div><?= $info['price'] ?>$</div>
        </div>

        <form action="<?= URL ?>/user_controller/booking" method="post">
          <input name="id" type="hidden" value="<?= $info['id'] ?>">
          <button type="submit" class="btn btn-success btn-lg mt-3">book</button>
        </form>

      </div>
    <?php endforeach; ?>

  </section>

</body>

</html>