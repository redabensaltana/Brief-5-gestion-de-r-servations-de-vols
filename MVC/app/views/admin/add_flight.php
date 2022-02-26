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

    </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1 class="mb-5">Add Flight</h1>
    <form class="row g-3" action="<?= URL ?>/admin_controller/add_flight_db" method="post">
      <div class="col-md-6">
        <label for="departure" class="form-label">Departure</label>
        <input name="departure" type="text" class="form-control" id="departure">
      </div>
      <div class="col-md-6">
        <label for="destination" class="form-label">Destination</label>
        <input name="destination" type="text" class="form-control" id="destination">
      </div>
      <div class="col-12">
        <label for="type" class="form-label">Flight type</label>
        <select name="type" class="form-select" id="type">
          <option value="1">Round-trip</option>
          <option value="2">One-way</option>
        </select>
      </div>
      <div class="col-md-6 expandable">
        <label for="departdate" class="form-label">Depart date</label>
        <input name="departdate" type="date" class="form-control" id="departdate">
      </div>
      <div class="col-md-6 removable">
        <label for="returndate" class="form-label">Return date</label>
        <input name="returndate" type="date" class="form-control" id="returndate">
      </div>
      <div class="col-md-6">
        <label for="seats" class="form-label">Seats</label>
        <input name="seats" type="number" id="seats" class="form-control">
      </div>
      <div class="col-md-6">
        <label for="price" class="form-label">Price</label>
        <input name="price" type="number" class="form-control" id="price">
      </div>

      <div class="col-12 mt-5 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary btn-lg">Done</button>
      </div>
    </form>
  </div>

  <script>
    var removable = document.querySelector('.removable')
    var flight_type = document.getElementById('type')
    var expandable = document.querySelector('.expandable')

    flight_type.addEventListener('change', function() {
      if (flight_type.value == '2') {
        expandable.classList.remove("col-md-6");
        expandable.classList.add("col-12");
        removable.classList.add("d-none");
        removable.classList.remove("d-block");
      } else if (flight_type.value == '1') {
        expandable.classList.remove("col-12");
        expandable.classList.add("col-md-6");
        removable.classList.add("d-block");
        removable.classList.remove("d-none");
      }
    })
  </script>

</body>

</html>