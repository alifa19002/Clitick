<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@500&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fb85f1a3b6.js" crossorigin="anonymous"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>CLITICK | {{ $title }}</title>
  </head>
  <body class="bg">
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <div class="container" style="color: white">
      <div class="row justify-content-md-center">
          <div class="col-7">
            <img class="bg-logo" src="images/logo2.png" width="500px" alt="">
          </div>
          <div class="col-md-4 mt-5">
              <main class="form-register">
                  <h1 class="text-center"><b>Register Account!</b></h1>
                  <small class="d-block text-center">For the purpose of regulation, your details are required.</small>
                  <hr>
                  <form>
                    <div class="box-login">
                      <h6 class="disable">Username*</h6>
                      <input type="email" class="form-control" id="uname" placeholder="Username">
                    </div>
                    <div class="box-login mt-3">
                      <h6 class="disable">Email address*</h6>
                      <input type="password" class="form-control" id="input" placeholder="Enter email address">
                    </div>
                    <div class="box-login mt-3">
                      <h6 class="disable">No. hp*</h6>
                      <input type="password" class="form-control" id="Password2" placeholder="Enter number">
                    </div>
                    <div class="box-login mt-3">
                      <h6 class="disable">Password*</h6>
                      <input type="password" class="form-control" id="Password" placeholder="Password">
                    </div>
                    <div class="box-login mt-3">
                      <h6 class="disable">Repeat Password*</h6>
                      <input type="password" class="form-control" id="Password2" placeholder="Repeat password">
                    </div>
                    <div class="checkbox mt-3">
                      <label>
                        <input type="checkbox" value="remember-me"> I agree to term & conditions
                      </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register Account</button>
                    <small class="d-block text-center mt-3">Do you already have an account? <a href="/login">Log in</a> </small>
                  </form>
              </main>
          </div>
      </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

</html>
