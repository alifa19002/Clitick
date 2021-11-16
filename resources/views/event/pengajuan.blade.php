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
    <title>Clitick</title>
  </head>
  <body class="bg">
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <div class="container bg-dark text-white col-md-8 justify-content-center py-3 my-3 ">
        <h4 style="text-align: center">Pengajuan Event</h4> <br>    
        <form method="POST" action="" class="offset-md-1">
            <div class="form-group row col-md-11">
                <label for="nama-event">Nama Event</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group row col-md-11">
                <label for="deskripsi-event">Deskripsi Event</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group row col-md-11">
                <label for="institusi-event">Institusi Penyelenggara</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group row col-md-11">
                <label for="katogeri-event">Kategori Event</label>
                <select type="text" class="form-select">
                    <option value=""></option>
                    <option value="seminar">Seminar</option>
                    <option value="lomba">Lomba</option>
                    <option value="konser">Konser</option>
                    <option value="konferensi">Konferensi</option>
                    <option value="workshop">Workshop</option>
                </select>
            </div>
            <div class="form-group row col-md-11">
                <label for="domisili-event">Domisili</label>
                <select type="text" class="form-select">
                    <option value=""></option>
                    <option value="ciseke">Ciseke</option>
                    <option value="caringin">Caringin</option>
                    <option value="gkpn">GKPN</option>
                    <option value="sayang">Sayang</option>
                    <option value="cikuda">Cikuda</option>
                </select>
            </div>
            <div class="form-group row col-md-11">
                <label for="captiom-event">Caption</label>
                <textarea type="text" class="form-control">
                </textarea>
            </div>
            <div class="form-group row col-md-11">
                <label for="upload-event">Upload Poster</label>
                <input type="text" disabled class="form-control">
            </div>
            <div class="form-group row col-md-11">
                <label for="bukti-event">Upload Bukti Pembayaran</label>
                <input type="text" disabled class="form-control">
            </div>
            <div class="form-submit col-sm-11 py-3">
                <button style="float: right" class="btn btn-primary" type="submit">Submit</button>
                <br><br>
            </div>

        </form>
    </div>
    <!-- Footer -->
    <footer class="footer bg-dark text-white d-flex py-2 align-items-center">
      <div class="container">
        <p style="text-align: center">@Copyright 2021</p>
      </div>
    </footer>
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
