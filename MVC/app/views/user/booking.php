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

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <img class="navbar-brand" src="<?= URL ?>/logo/logo.png" style="height:60px">

        </div>
        </div>
    </nav>

    <div class="container mt-5 ">
        <button id="addbtn" class="btn btn-primary btn-lg" onclick="addpassenger()">add
            <i class="fa-solid fa-user-plus"></i>
        </button>
    </div>

    <form action="<?= URL ?>/user_controller/booking_db" method="post">

        <div class="bg-light container mt-5 p-4 rounded-3 ">

            <div id="bigcontainer">
                <!-- <div class="border border-3 rounded-3 p-3 mb-3">
                    <h2 class="fs-5 mb-4">Passenger #1</h2>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <input class="form-control form-control-md " type="text" placeholder="Firstname" name="firstname">
                        </div>
                        <div class="col-md-4 mb-3">
                            <input class="form-control form-control-md " type="text" placeholder="Lastname" name="lastname">
                        </div>
                        <div class="col-md-4 mb-3">
                            <input class="form-control form-control-md " type="age" placeholder="Age" name="age">
                        </div>
                    </div>
                </div> -->
            </div>

            <input name="idflight" type="hidden" value="<?= $_POST['id'] ?>">

            <div class="col-md-12 mt-4 d-flex justify-content-center">
                <button type="submit" style="width: 150px;" class="btn btn-lg btn-success">Validate</button>
            </div>
        </div>

    </form>

    <script>
        var bigcontainer = document.getElementById('bigcontainer');
        var passengernum = 0;
        function addpassenger() {
            passengernum ++;
            bigcontainer.innerHTML += `
            <div class='border border-3 rounded-3 p-3 mb-3'>
                <h2 class='fs-5 mb-4'>Passenger #${passengernum}</h2>
                <div class='row'>
                    <div class='col-md-4 mb-3'>
                        <input class='form-control form-control-md ' type='text' placeholder='Firstname' name='firstname[]'>
                    </div>
                    <div class='col-md-4 mb-3'>
                        <input class='form-control form-control-md ' type='text' placeholder='Lastname' name='lastname[]'>
                    </div>
                    <div class='col-md-4 mb-3'>
                        <input class='form-control form-control-md ' type='age' placeholder='Age' name='age[]'>
                    </div>
                </div>
            </div>`;
        }
    </script>


</body>

</html>