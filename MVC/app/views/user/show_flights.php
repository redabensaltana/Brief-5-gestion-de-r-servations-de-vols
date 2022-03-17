<!DOCTYPE html>
<html lang="en">
<?php 
if( empty($_SESSION)){
    header('location:' . URL . '/sign_controller/loginform');
 }
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css" integrity="sha512-E+53kXnJyuZFSz75xSmTfCpUNj3gp9Bd80TeQQMTPJTVWDRHPOpEYczGwWtsZXvaiz27cqvhdH8U+g/NMYua3A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light container-fluid d-flex justify-content-between" style="background-color: #e3f2fd;">
    <div class="d-flex">
      <img class="navbar-brand" src="<?= URL ?>/logo/logo.png" style="height:60px">
      <h2 class="mt-2 text-center" style="color:#142a5c;">flygoo</h2>
    </div>

    <div class="d-flex px-3">
      <a class="nav-item nav-link text-dark" href="<?= URL ?>/user_controller/flights">flights</a>
      <a class="nav-item nav-link text-dark" href="<?= URL ?>/user_controller/bookings">bookings</a>
      <form action="<?= URL ?>/sign_controller/logout" method="post">
      <button class="btn btn-dark rounded" type="submit">logout<i class="fas fa-sign-out-alt ms-2"></i></button>
      </form>
    </div>
  </nav>

  <div class="position-relative" >
    <img src="<?= URL ?>/img/pexels-pascal-renet-113017.jpg" class="img-fluid" style="filter: brightness(0.6);" alt="what s wrong">
    <h1 class="position-absolute top-50 start-50 translate-middle text-light display-1 fw-bold">Fly everywhere</h1>
  </div>

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
          <div class="returndate"><?= $info['return_date'] ?></div>
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
          <input name="seats" type="hidden" value="<?= $info['seats'] ?>">
          <input name="departure" type="hidden" value="<?= $info['departure'] ?>">
          <input name="destination" type="hidden" value="<?= $info['destination'] ?>">
          <input name="directiontype" type="hidden" value="<?= $info['direction_type'] ?>">
          <input name="departdate" type="hidden" value="<?= $info['depart_date'] ?>">
          <input name="returndate" type="hidden" value="<?= $info['return_date'] ?>">
          <button type="submit" class="btn btn-success btn-lg mt-3">book</button>
        </form>

      </div>
    <?php endforeach; ?>

  </section>
  

  <script>
    var returndate = document.querySelectorAll('.returndate');
    returndate.forEach(e => {
      if (e.innerText == "0000-00-00") {
        e.innerText = "no return";
      }
    });
  </script>

</body>

</html>