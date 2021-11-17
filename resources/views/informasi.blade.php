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
    <title>Clitick | {{ $title }}</title>
  </head>
  <body class="bg">
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <div class="container bg-dark text-white py-5 bg-opacity-75" style="padding:150px">
        <h3>Kirim Event</h3>
        <p>
            Publikasi Event di Clitick!
            <br>
            <ol>
                <li>Mengisi form pengajuan event pada halaman Pengajuan Event</li>
                <li>Upload bukti pengiriman pada halaman Pengajuan Event</li>
                <li>Menunggu konfirmasi dari admin setelah pembayaran maks 24 jam</li>
                <li>Setelah dikonfirmasi oleh admin,konten diterima dan diunggah ke halaman Events</li>
            </ol>
            <br>
            <b>Price : 10k/Event</b>
            <br><br>

            <b>Contacts</b>
            <br>
            Whatsapp : 0838 7872 4611
            <br>
            Telegram : https://t.me/clitick
            <br>
            Email : clitick@gmail.com
            <br><br>
            Pastikan caption event kamu tersedia informasi tanggal, tempat dan kontak yang bisa dihubungi.
            <br>
            Mohon tambahkan dibawah captionnya “dipublikasikan oleh clitick.com”
            <br>
            Ikuti juga update info event di sosial media kami :
            <ul>
                <li>Twitter : Clitick</li>
                <li>Instagram : Clitick</li>
                <li>Facebook : Clitick</li>
                <li>Telegram : Clitick</li>
            </ul>
        </p>
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
