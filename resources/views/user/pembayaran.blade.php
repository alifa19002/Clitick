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
    <title>CLITICK | {{ $title }}</title>
  </head>
  <body class="bg">
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <div class="container bg-dark text-white col-md-8 justify-content-center py-3 my-3 ">
    
        <h4 style="text-align: center">Pembayaran Event {{ $events->nama_event }}</h4> <br>    
        <form method="POST" action="/pembayaran" class="offset-md-1" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group row col-md-11">
                <label for="metode-payment">Metode Pembayaran</label>
                <input type="text" class="form-control" name="metode_pembayaran" value="{{ old('metode_pembayaran') }}">
            </div>
            
            <div class="form-group row col-md-11">
                <label for="tanggal-payment">Tanggal Transfer</label>
                <input type="date" class="form-control" name="tgl_transfer" value="{{ old('tgl_transfer') }}">
            </div>
            <div class="form-group row col-md-11">
                <label for="jumlah-payment">Jumlah Transfer</label>
                <input type="text" class="form-control" name="jml_transfer" value="{{ old('jml_transfer') }}">
            </div>
            <div class="form-group row col-md-11">
                <div class="form-group row col-md-10">
                    <label for="upload-payment">Upload Bukti Pembayaran</label>
                    <input type="file" class="form-control" name="bukti_bayar">
                </div>
                <!-- <div class="form-group col-sm mt-4">
                    <button style="float: right" class="btn btn-secondary" type="" ><i class="far fa-folder-open"></i></button>
                </div> -->
            </div>
            <!-- 66 -->
            
            <input type="hidden" name="id_event" value="{{ $events->id }}">
            <div class="form-submit col-sm-11 py-3">
                <button style="float: right" class="btn btn-primary" type="submit">Submit</button>
                <br><br>
            </div>

        </form>
    </div>
    <!-- Footer -->
    @include('template.footer')
    <!-- <footer class="footer bg-dark text-white d-flex py-2 align-items-center">
      <div class="container">
        <p style="text-align: center">@Copyright 2021</p>
      </div>
    </footer> -->
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
