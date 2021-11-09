<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    {{-- Bootstrap Icons--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

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
    <div class="container">
        <div class="row justify-content-md-center" id="poster">
            <div class="col-md-5 text-center">
                <img src="/images/poster.jpg" width="80%" alt="contoh">
                <button class="bt1 btn btn-success mt-3 " type="submit">JOIN THIS EVENT!</button>
            </div>
            <div class="desc col-md-5" style="color: white">
                <h1 class="mt-5"><b>THINK CLICK</b></h1>
                <a class="btn btn-secondary btn-sm" href="">Webminar</a>
                <a class="btn btn-secondary btn-sm" href="">11/11/2021</a>
                <div class="desc mt-5">
                    <h3>Deskripsi Event</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="desc mt-4">
                    <h5><i class="bi bi-exclamation-lg" style="color: red"></i>Mark the date for THINK CLICK<i class="bi bi-exclamation-lg" style="color: red"></i></h5>
                    <p><i class="bi bi-calendar-date"></i> Saturday, XX November 2021
                    <br><i class="bi bi-clock"></i>  00.00 - Finish
                    <br><i class="bi bi-pin-angle"></i>  Location</p>
                </div>
                <div class="desc mt-4">
                    <h5><i class="bi bi-exclamation-lg" style="color: red"></i>Registration Link<i class="bi bi-exclamation-lg" style="color: red"></i></h5s>
                    <br><a href="">bit.ly/blablabla</a>
                </div>
                <hr>
                <div class="desc mt-3">
                        <p>For more information :
                        <br> Ig : @event
                        <br> Email : event@gmail.com
                        <br>
                        <br> Contact Person :
                        <br> Justin (085xxxxxxxxx)
                        <br> Hailey (085xxxxxxxxx)</p>
                </div>
            </div>
        </div>
    </div>
</body>
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