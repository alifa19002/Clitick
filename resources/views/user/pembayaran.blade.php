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
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>CLITICK | {{ $title }}</title>
  </head>
  <body class="bg">
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <div class="container bg-dark text-white col-md-8 justify-content-center py-3 my-3 ">
        <h4 style="text-align: center">Pembayaran Event</h4> <br>    
        <form method="POST" action="/pembayaran" class="offset-md-1" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="event_id" id="event_id" value="{{ $events->id }}">
            <input type="hidden" name="status_pembayaran" id="status_pembayaran" value="Sudah Dibayar">
            <!-- Untuk warning tidak upload bukti pembayaran -->
            @if($message != NULL)
            <div class="alert alert-warning col-lg-8" role="alert">
                {{ $message }}
            </div>
            @endif
            
            <div class="form-group row col-md-11">
                <label for="metode_pembayaran">Metode Pembayaran</label>
                <select type="text" class="form-select" name="metode_pembayaran" value="{{ old('metode_pembayaran') }}">
                    <option value=""></option>
                    <option value="1">Bank Mandiri</option>
                    <option value="2">Bank BNI</option>
                    <option value="3">Bank BRI</option>
                    <option value="4">DANA</option>
                </select>
            </div>
            
            <div class="form-group row col-md-11">
                <label for="tgl_transfer">Tanggal Transfer</label>
                <input type="date" class="form-control" name="tgl_transfer" value="{{ old('tgl_transfer') }}">
            </div>
            <div class="form-group row col-md-11">
                <label for="jml_transfer">Jumlah Transfer</label>
                <input type="text" class="form-control" name="jml_transfer" value="{{ old('jml_transfer') }}">
            </div>
            <div class="form-group row col-md-11">
                <div class="form-group row col-md-10">
                    <label for="bukti_bayar">Upload Bukti Pembayaran</label>
                    <input type="file" class="form-control" name="bukti_bayar">
                </div>
            </div>
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
