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
        <h4 style="text-align: center">Pengajuan Event</h4> <br>    
        <form method="POST" action="/pengajuan" class="offset-md-1" enctype="multipart/form-data">
            @csrf
            <div class="form-group row col-md-11">
                <label for="nama-event">Nama Event</label>
                <input type="text" class="form-control" name="nama_event" value="{{ old('nama_event') }}">
            </div>
            {{-- <div class="form-group row col-md-11">
                <label for="deskripsi-event">Deskripsi Event</label>
                <input type="text" class="form-control" name="deskripsi_event" value="{{ old('deskripsi_event') }}">
            </div> --}}
            <div class="form-group row col-md-11">
                <label for="institusi-event">Institusi Penyelenggara</label>
                <input type="text" class="form-control" name="institusi_penyelenggara" value="{{ old('institusi_penyelenggara') }}">
            </div>
            <div class="form-group row col-md-11">
                <label for="katogeri-event">Kategori Event</label>
                <select type="text" class="form-select" name="category_id" value="{{ old('category_id') }}">
                    <option value=""></option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                    @endforeach
                </select>
                <!-- belum disambung dengan tabel kategori -->
            </div>
            <div class="form-group row col-md-11">
                <label for="domisili-event">Domisili</label>
                <select type="text" class="form-select" name="domisili_id" value="{{ old('domisili_id') }}">
                    <option value=""></option>
                    @foreach ($domisili as $domisilis)
                    <option value="{{ $domisilis->id }}">{{ $domisilis->nama_domisili }}</option>
                    @endforeach
                </select>
                <!-- belum di sambung dengan tabel domisili -->
            </div>
            <div class="form-group row col-md-11">
                <label for="captiom-event">Tanggal Event</label>
                <input type="date" class="form-control" name="tgl_event" value="{{ old('tgl_event') }}">
            </div>
            <div class="form-group row col-md-11">
                <label for="captiom-event">Deskripsi</label>
                <textarea type="text" class="form-control" name="deskripsi_event" value="{{ old('deskripsi_event') }}"></textarea>
            </div>
            <div class="form-group row col-md-11">
                <div class="form-group row col-md-10">
                    <label for="upload-event">Upload Poster</label>
                    <input type="file" class="form-control" name="poster">
                </div>
                <!-- <div class="form-group col-sm mt-4">
                    <button style="float: right" class="btn btn-secondary" type="" ><i class="far fa-folder-open"></i></button>
                </div> -->
            </div>
            <!-- <div class="form-group row col-md-11">
                <div class="form-group row col-md-10">
                    <label for="bukti-event">Upload Bukti Pembayaran</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-sm mt-4">
                    <button style="float: right" class="btn btn-secondary" type=""><i class="far fa-folder-open"></i></button>
                </div>
            </div> -->
            @auth
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            @endauth
            <input type="hidden" name="status_event" value="Diajukan">
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
