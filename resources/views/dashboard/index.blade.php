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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>CLITICK | {{ $title }}</title>
  </head>
  <body>
    @if (Auth::user()->is_admin == 1)
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <!-- User Profile -->
    <div class="container">
        <div class="row justify-content-md-center">
            <h2 style="text-align:center">Rekap Events</h2>
        </div>

        @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
          {{ session('success') }}
        </div>
        @endif
        
        <a style="float: right" href="/dashboard/events/create" class="btn btn-primary mb-3">Add new event</a>
        <a href="/dashboard/request" class="btn btn-success mb-3">Requested Event</a>
        <div class="row justify-content-md-center">
            @if($events->count())
            <table class="table table-striped table-bordered table-responsive-md css-serial" style="text-align:center">
                <tr class="table-info">
                    <th>No</th>
                    <th>Nama Event</th>
                    <th>Institusi Penyelenggara</th>
                    <th>Kategori Event</th>
                    <th>Tanggal Event</th>
                    <th>Detail</th>
                    <th>Action</th>
                </tr>
                @foreach($events as $event)
                <tr>
                    <td></td>
                    <td>{{ $event->nama_event }}</td>
                    <td>{{ $event->institusi_penyelenggara }}</td>
                    <td>{{ $event->category->nama_kategori }}</td>
                    <td>{{ $event->tgl_event }}</td>
                    <td>
                        <a href="/dashboard/events/{{ $event->slug }}" class="btn btn-primary tombol2">Detail</a>
                    </td>
                    <td>
                        <a href="/dashboard/events/{{ $event->slug }}/edit" class="btn btn-warning tombol2">Edit</a>
                        <form action="/dashboard/events/{{ $event->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0 tombol2" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            @else
            <div class="content" id="no-data">
                <img src="/images/no-data.png" width="280px" alt="no-data">
                <p>Sepertinya belum ada yang mengajukan publikasi event.</p>
            </div>
            @endif
        </div>
    </div>


    <!-- Footer -->
    @include('template.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @endif
  </body>
</html>