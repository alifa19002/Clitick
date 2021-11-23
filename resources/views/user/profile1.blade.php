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
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300;500&display=swap" rel="stylesheet">
    
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
    <!-- User Profile -->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="content" id="top-content">
                <div class="image-wrapper"><img src="images/foto-profil.png" alt="foto profil"></div>
                <span class="text">
                    <h5>Hi,</h5>
                    <h4>{{ auth()->user()->name }}</h4>
                    <h6>{{ auth()->user()->email }}</h6>
                    <a class="btn btn-primary" href="#">Edit Profil</a>
                </span>
            </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-md-center" id="middle-content">
            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Profil Saya</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-events-tab" data-bs-toggle="pill" data-bs-target="#pills-events" type="button" role="tab" aria-controls="pills-events" aria-selected="false">Event Saya</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row justify-content" id="bottom-content">
                        <div class="col-md-6">
                            <h6>NAMA</h6>
                            <p>{{ auth()->user()->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>JENIS KELAMIN</h6>
                            <p>{{ auth()->user()->jk }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>EMAIL</h6>
                            <p>{{ auth()->user()->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>NO TELEPON</h6>
                            <p>{{ auth()->user()->no_telp }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>TANGGAL LAHIR</h6>
                            <p>10/10/2001</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <!-- Event saya - kalo no data  -->
                    <div class="row justify-content-md-center">
                        <div class="content" id="no-data">
                            <img src="images/no-data.png" width="280px" alt="">
                            <p>Sepertinya kamu belum mengajukan publikasi event nih!</p>
                        </div>
                    </div>
                </div>
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