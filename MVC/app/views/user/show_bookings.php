<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css" integrity="sha512-E+53kXnJyuZFSz75xSmTfCpUNj3gp9Bd80TeQQMTPJTVWDRHPOpEYczGwWtsZXvaiz27cqvhdH8U+g/NMYua3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <h2 class="text-center mt-5" style="font-size:50px;">My bookings</h2>
  <section class="container mt-5">

    <?php foreach ($data['show_bookings_user'] as $info) : ?>

      <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 rounded-3 bg-light p-3 mb-5">
        <!-- <div class="p-2">
          <h2 class='fs-5'>id</h2>
          <div>< ?= $info['id'] ?></div>
        </div> -->
        <div class="p-2">
          <h2 class='fs-5'>firstname</h2>
          <div><?= $info['firstname'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>lastname</h2>
          <div><?= $info['lastname'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>age</h2>
          <div><?= $info['age'] ?></div>
        </div>
        
        <div class="p-2">
          <h2 class='fs-5'>Departure</h2>
          <div><?= $info['departure'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>Destination</h2>
          <div><?= $info['destination'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>Date</h2>
          <div><?= $info['date'] ?></div>
        </div>
        <!-- <div class="p-2">
          <h2 class='fs-5'>ID flight</h2>
          <div>< ?= $info['id_flight'] ?></div>
        </div>
        <div class="p-2">
          <h2 class='fs-5'>ID user</h2>
          <div>< ?= $info['id_user'] ?></div>
        </div> -->
        <!-- <div class="p-2">
          <h2 class='fs-5'>Price</h2>
          <div>< ?= $info['price'] ?>$</div>
        </div> -->
        <form action="<?= URL ?>/user_controller/editbookingform" method="post">
          <input name="id_res" type="hidden" value="<?= $info['id_res'] ?>">
          <input name="firstname" type="hidden" value="<?= $info['firstname'] ?>">
          <input name="lastname" type="hidden" value="<?= $info['lastname'] ?>">
          <input name="age" type="hidden" value="<?= $info['age'] ?>">
          <button type="submit" class="btn btn-info btn-lg mt-3">edit info</button>
        </form>
        <form action="<?= URL ?>/user_controller/deletebooking" method="post">
          <input name="id_res" type="hidden" value="<?= $info['id_res'] ?>">
          <input name="id_flight" type="hidden" value="<?= $info['id_flight'] ?>">
          <button type="submit" class="btn btn-danger btn-lg mt-3">delete</button>
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