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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>CLITICK | {{ $title }}</title>
  </head>

  <body class="bg">
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-md-center" id="poster">
            <div class="col-md-5 text-center">
                <img class="mt-5" src="{{ asset('storage/' . $event->poster) }}" width="70%" alt="contoh">
                <a href="https://{{ $event->link_reg }}"><button class="bt1 btn btn-success mt-3 " type="submit">JOIN THIS EVENT!</button></a>
            </div>
            <div class="desc col-md-5" style="color: white">
                <h1 class="mt-5"><b>{{ $event->nama_event }}</b></h1>
                <a class="btn btn-secondary btn-sm" href="">{{ $event->category->nama_kategori }}</a>
                <a class="btn btn-secondary btn-sm" href="">{{ $event->tgl_event }}</a>
                <a class="btn btn-secondary btn-sm" href="">{{ $event->domisili->nama_domisili }}</a>
                <hr>
                <div class="desc mt-5">
                    <h3>Deskripsi Event</h3>
                    <p>{!! $event->deskripsi_event !!}</p>
                </div>
                <div class="desc mt-4">
                    <h5><i class="bi bi-exclamation-lg" style="color: red"></i>Registration Link<i class="bi bi-exclamation-lg" style="color: red"></i></h5s>
                    <br><a href="https://{{ $event->link_reg }}">{{ $event->link_reg }}</a>
                </div>
                {{-- <hr> --}}
                <!-- <div class="desc mt-3">
                        <p>For more information :
                        <br> Ig : @event
                        <br> Email : event@gmail.com
                        <br>
                        <br> Contact Person :
                        <br> Justin (085xxxxxxxxx)
                        <br> Hailey (085xxxxxxxxx)</p>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

</html>