<!DOCTYPE html>
<html lang="en">
<?php 
if( empty($_SESSION['idadmin'])){
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

<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <div class="d-flex">
      <img class="navbar-brand" src="<?= URL ?>/logo/logo.png" style="height:60px">
      <h2 class="mt-2 text-center" style="color:#142a5c;">flygoo</h2>
    </div>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul> -->
      <form action="<?= URL ?>/sign_controller/logout" method="post">
      <button class="btn btn-dark rounded" type="submit">logout<i class="fas fa-sign-out-alt ms-2"></i></button>
      </form>
    </div>
  </div>
</nav>

<!-- MANAGEMENT TABLE -->

<div class="container d-flex mt-5 justify-content-end">

  <form action="<?= URL ?>/admin_controller/add_flight" method="post">
    <button type="submit" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
    </svg>  
    <span class="ms-2">add flight</span>
    </button>
  </form>

</div>
  <div class="container-xxl"> 
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">departure</th>
            <th scope="col">destination</th>
            <th scope="col">type</th>
            <th scope="col">depart date</th>
            <th scope="col">return date</th>
            <th scope="col">seats</th>
            <th scope="col">price</th>
            <th scope="col">action</th>
            </tr>
        </thead>
      <tbody>  

          <?php foreach ($data['show_flights'] as $info) :?>
            <tr>
            <td scope="row"><?=$info['id']?></td>
            <td><?=$info['departure']?></td>
            <td><?=$info['destination']?></td>
            <td><?=$info['direction_type']?></td>
            <td><?=$info['depart_date']?></td>
            <td><?=$info['return_date']?></td>
            <td><?=$info['seats']?></td>
            <td><?=$info['price']?>$</td>
            <td class="d-flex">
              
            <form action="<?= URL ?>/admin_controller/edit_flight" method="post">
              <input name="id" type="hidden" value="<?=$info['id']?>">
              <input name="departure" type="hidden" value="<?=$info['departure']?>">
              <input name="destination" type="hidden" value="<?=$info['destination']?>">
              <input name="type" type="hidden" value="<?=$info['direction_type']?>">
              <input name="departdate" type="hidden" value="<?=$info['depart_date']?>">
              <input name="returndate" type="hidden" value="<?=$info['return_date']?>">
              <input name="seats" type="hidden" value="<?=$info['seats']?>">
              <input name="price" type="hidden" value="<?=$info['price']?>">
              <button type="submit" class="btn btn-success btn-sm">update</button> 
            </form>
              
            <form action="<?= URL ?>/admin_controller/delete_flight_db" method="post">
              <input name="id" type="hidden" value="<?=$info['id']?>">
              <button type="submit" class="btn btn-danger ms-3 btn-sm">delete</button>
            </form>
            </td>
            </tr>
            <?php endforeach ;?>
        
      </tbody>
    </table>
  </div>
    

</body>
</html>