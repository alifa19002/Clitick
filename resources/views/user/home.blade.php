<!doctype html>
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
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick-theme.css') }}"/>
    <title>CLITICK</title>
  </head>
  <body class="bg">
    <!-- navbar -->
    @include('template.navbar')

    <!-- Content -->
    <div class="container text-white" >
      <a><img src="images/logo2.png" height="200"></a>
    </div>
    <br><br><br>

    <div class="container text-white">
      <h4 style="text-align: center">MENGAPA LEBIH BAIK PUBLIKASI DI CLITICK?</h4>
      <br>
        <div class="container col-md-4 justify-content-center">
          <p>&#10004; Publikasi tanpa persyaratan yang rumit</p>
          <p>&#10004; Pembayaran yang mudah</p>
       </div>
    </div>
    <br><br>

    <!-- Caousel Start -->
    <div class="col-12 text-center mb-5 text-light mt-3">
    <p class="h1">EVENT TERBARU</p>
    <div class="gerak">
    @foreach($latest_events as $events)
      <div class="topik">
      <img src="images/poster-home.png">
      <p class="mt-2 pb-0 mb-0 px-3">{{ $events->nama_event }}</p>
          <p class="mt-0 pt-0 mb-2">{{ $events->tgl_event }}</p>
          <button class class="btn btn-secondary">Detail</button>
      </div>
      @endforeach
    </div>
  </div>
    <!-- Caousel End -->

  <script type="text/javascript">
    $(document).ready(function()
    {
      $('.gerak').slick();
    });
  </script>

    <div class="container bg-light col-md-3" style="text-align: center; padding: 10px">
      <center><a><img src="images/poster-home.png"></a></center>
      <p>Pensi Fest</p>
      <p>30/10/2021</p>
      <button class class="btn btn-secondary">Detail</button>
    </div>
    <br>

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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('css/slick/slick.min.js') }}"></script>
  </body>
</html>