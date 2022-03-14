<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <div class="d-flex">
        <img class="navbar-brand" src="<?= URL ?>/logo/logo.png" style="height:60px">
        <h2 class="mt-2 text-center" style="color:#142a5c;">flygoo</h2>
      </div>

    </div>
    </div>
  </nav>

  <form action="<?= URL ?>/sign_controller/login" method="post">

    <section class="vh-100" style="background-color: #4259C3;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5">

                <h3 class="mb-5">Sign in</h3>

                <div class="form-outline mb-4">
                  <label class="form-label" for="username">Username</label>
                  <input type="text" id="username" class="form-control form-control-lg" name="username" />
                </div>

                <div class="form-outline mb-5">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" class="form-control form-control-lg" name="password" />
                </div>
                <div class="d-flex flex-column">
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

                  <a href="<?= URL ?>/sign_controller/register" class="mb-0 mt-4">Don't have an account ? register here</a>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </form>


</body>

</html>