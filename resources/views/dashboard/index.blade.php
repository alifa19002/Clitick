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
    @if (Auth::user()->is_admin == 1)
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Event</th>
            <th>Institusi Penyelenggara</th>
            <th>Tanggal Event</th>
            <th>Deskripsi Event</th>
            <th>Status Event</th>
            <th>Kategori Event</th>
            <th>User</th>
            <th>Domisili Event</th>
        </tr>
        @foreach($events as $event)
        <tr>
            <td>$event->id</td>
        </tr>
        @endforeach
    </table>
    @endif

    <!-- footer -->
    @include('template.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>