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
    <title>CLITICK | {{ $title }}</title>
  </head>
  <body>
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <div class="container" style="margin-top:50px">
        <h1 id="titleEvents">{{ $title }}</h1>

        <!-- <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/events">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <div class="input-group mb-3" id="searchbox">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>                  
                </form>
            </div>
        </div> -->
        <div class="d-flex justify-content-end" id="sortby">

        <!-- <p>Sort by</p>
            <div class="col-lg-1 col-sm-2 col-xs-2 ml-auto">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Terbaru<i class="fas fa-chevron-down"></i></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Terbaru</a></li>
                        <li><a href="#">Terpopuler</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="col-md-3" >
                <form action="/events">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <div class="input-group" id="searchbox">
                        <input class="search-txt" type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>                  
                </form>
            </div>
            
            <p>Category</p>
            <div class="col-lg-1 col-sm-2 col-xs-2">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Semua Kategori<i class="fas fa-chevron-down"></i></button>
                    <ul class="dropdown-menu">
                        <li><a href="/events">Semua Kategori</a></li>
                        @foreach($categories as $category)
                        <li><a href="/events?category={{ $category->nama_kategori }}">{{ $category->nama_kategori }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="row justify-content" id="eventPreview">
            @foreach ($events as $event)
                <div class="col-6">
                    <a href="/detail"><img src="poster/{{ $event->poster }}" width="148,5px" height="210px" style="float:left" alt=""></a>
                    <h5><a href="/events/{{ $event->slug }}" style="text-decoration:none; color:#181B32; opacity:90%">{{ $event->nama_event }}</a></h5>
                    <p>{{ $event->tgl_event }}</p>
                    <a href="/events?category={{ $event->category->nama_kategori }}" class="btn">{{ $event->category->nama_kategori }}</a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-center">
        {{ $events->links() }}
    </div>

    <!-- Footer -->
    @include('template.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>