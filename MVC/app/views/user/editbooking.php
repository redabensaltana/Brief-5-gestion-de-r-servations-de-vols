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


    <form action="<?= URL ?>/user_controller/editbooking" method="post">

        <div class="bg-light container mt-5 p-4 rounded-3 ">

            <div id="bigcontainer">
            <div class='border border-3 rounded-3 p-3 mb-3'>
                    <h2 class='fs-5 mb-4'>Edit pasenger info</h2>
                    <div class='row'>
                        <div class='col-md-4 mb-3'>
                            <input class='form-control form-control-md ' type='text' placeholder='Firstname' name='firstname' value="<?= $_POST['firstname'] ?>">
                        </div>
                        <div class='col-md-4 mb-3'>
                            <input class='form-control form-control-md ' type='text' placeholder='Lastname' name='lastname' value="<?= $_POST['lastname'] ?>">
                        </div>
                        <div class='col-md-4 mb-3'>
                            <input class='form-control form-control-md ' type='number' placeholder='Age' name='age' value="<?= $_POST['age'] ?>">
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" name="id_res" value="<?= $_POST['id_res'] ?>">

            <div class="col-md-12 mt-4 d-flex justify-content-center">
                <button type="submit" style="width: 150px;" class="btn btn-lg btn-success">Validate</button>
            </div>
        </div>

    </form>



</body>

</html>