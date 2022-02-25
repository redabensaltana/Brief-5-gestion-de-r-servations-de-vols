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

    <div class="bg-light container mt-5 p-4 rounded-3">
        <div class="border rounded-3 p-3">
            <h2 class="fs-5 mb-4">Passenger</h2>
            <div class="card-body gap-2">
                <div>
                    <input class="form-control form-control-lg col-3" type="text" placeholder="Firstname" name="firstname">
                </div>
                <div>
                    <input class="form-control form-control-lg col-3" type="text" placeholder="Lastname" name="lastname">
                </div>
                <div>
                    <input class="form-control form-control-lg col-3" type="age" placeholder="Age" name="age">
                </div>

                <button class=" btn btn-success">submit</button>

            </div>


        </div>
    </div>

</body>

</html>