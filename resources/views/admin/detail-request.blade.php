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

  <body>
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-md-center" id="poster">
            <div class="col-md-8">
                <h2 style="text-align:center;">Detail</h2>
                <table class="table" cellpadding="0">
                <tr>
                    <th>Nama</th>
                    <td>Jon Kiwang</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>jkjonkiwang@gmail.com</td>
                </tr>
                <tr>
                    <th>No Telepon</th>
                    <td>089612345678</td>
                    </tr>
                    <tr>
                        <th>Nama Event</th>
                        <td>Mahitala</td>
                    </tr>
                    <tr>
                        <th>Institusi Penyelenggara</th>
                        <td>Universitas Cigolendang</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td><p>
                            Mahitala adalah event tahunan Fakultas Seni Rupa dan Design Universitas Cigolendang. 
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p></td>
                    </tr>
                    <tr>
                        <th>Tanggal Event</th>
                        <td>30 Desember 2021</td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>Webinar</td>
                    </tr>
                    <tr>
                        <th>Domisili</th>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <th>Caption</th>
                        <td><p>
                            Halo! Tahun ini mahitala hadir kembali dengan tema seru.
                            Menghadirkan BTS sebagai bintang tamu, Mahitala akan diselenggarakan pada 30 Desember 2021.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p></td>
                    </tr>
                    <tr>
                        <th>Poster</th>
                        <td><img src="images/poster.jpg" width=300px alt="#"></td>
                    </tr>
                    <tr>
                        <th>Status Event</th>
                        <td>Diterima</td>
                    </tr>

                    <!-- kalo udah accepted, muncul status pembayaran -->
                    <tr>
                        <th>Status Pembayaran</th>
                        <td>Sudah Dibayar</td>
                    </tr>

                    <tr>
                        <th>Action</th>
                        <td>
                            <!-- kalo blm accepted, ada tombol ini -->
                            <a href="#" class="btn btn-success tombol2">Accept</a>
                            <a href="#" class="btn btn-danger tombol2">Reject</a>

                            <!-- kalo udah accepted, muncul tombol buat upload. kalo eventnya udah diupload, tombol ini gaakan muncul lagi -->
                            <a href="#" class="btn btn-warning tombol2">Upload Event</a>

                        </td>
                    </tr>
                </table>
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