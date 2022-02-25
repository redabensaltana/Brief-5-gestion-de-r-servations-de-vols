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
        
        <form action="<?= URL ?>/sign_controller/register" method="post">
        <section class="vh-100" style="background-color: #006D5B;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5">

                    <h3 class="mb-5">Register</h3>
                    
                    <div class="form-outline mb-4">
                    <label class="form-label" for="firstname">First name</label>
                    <input type="text" id="firstname" class="form-control form-control-lg" name="firstname" />
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="lastname">Last name</label>
                    <input type="text" id="lastname" class="form-control form-control-lg" name="lastname" />
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="age">Age</label>
                    <input type="number" id="age" class="form-control form-control-lg" name="age"/>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" class="form-control form-control-lg" name="username" />
                    </div>

                    <div class="form-outline mb-5">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control form-control-lg" name="password" />
                    </div>
                    
                    <div class="form-outline mb-5">
                    <label class="form-label" for="confirmpassword">Confirm password</label>
                    <input type="password" id="confirmpassword" class="form-control form-control-lg" name="confirmpassword" />
                    </div>

                    <button class="btn btn-success btn-lg btn-block"  type="submit">Login</button>

                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        </form>
       
            

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</body>
</html>