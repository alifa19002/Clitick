<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!-- My Styles -->
    <link rel="stylesheet" href="css/style.css">
    <title>Clitick | {{ $title }}</title>
</head>
<body>
    @include('template.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>

    <div class="container bg-dark text-white py-5" style="opacity: 0.9; padding:150px">
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
 

    @include('template.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>