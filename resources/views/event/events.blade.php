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
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fb85f1a3b6.js" crossorigin="anonymous"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>CLITICK | Events</title>
  </head>
  <body>
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <div class="container" style="margin-top:50px">
        <h1 id="titleEvents">EVENTS</h1>
        <div class="d-flex justify-content-end" id="sortby">
        <p>Sort by</p>
            <div class="col-lg-1 col-sm-2 col-xs-2 ml-auto">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Terbaru<i class="fas fa-chevron-down"></i></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Terbaru</a></li>
                        <li><a href="#">Terpopuler</a></li>
                    </ul>
                </div>
            </div>
            
            <p>Category</p>
            <div class="col-lg-1 col-sm-2 col-xs-2">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Semua Kategori<i class="fas fa-chevron-down"></i></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Semua Kategori</a></li>
                        <li><a href="#">Seminar</a></li>
                        <li><a href="#">Lomba</a></li>
                        <li><a href="#">Konser</a></li>
                        <li><a href="#">Konferensi</a></li>
                        <li><a href="#">Workshop</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row justify-content" id="eventPreview">
            @foreach ($events as $event)
                <div class="col-6">
                    <a href="/detail"><img src="images/contoh-poster.png" width="148,5px" height="210px" style="float:left" alt=""></a>
                    <h5><a href="/detail" style="text-decoration:none; color:#181B32; opacity:90%">{{ $event->nama_event }}</a></h5>
                    <p>{{ $event->tgl_event }}</p>
                    <a href="#" class="btn">{{ $event->category->nama_kategori }}</a>
                </div>
            @endforeach
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