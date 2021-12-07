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
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <!-- User Profile -->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="content" id="top-content">
                @if($profilUser->foto_profil)
                <img src="{{ asset('storage/' . $profilUser->foto_profil) }}" width="280px" height="280px" style="float:left; border-radius:50%" alt="">
                @else
                <img src="{{ asset('images/foto-profil.png') }}" alt="" width="280px" style="float:left" alt="">
                @endif
                <h5>Hi,</h5>
                <h4>{{ auth()->user()->username }}</h4>
                <h6>{{ auth()->user()->email }}</h6>
                <a class="btn btn-primary" href="/profile/{{ auth()->user()->username }}/edit">Edit Profil</a>
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
                        <div class="col-6">
                            <h6>NAMA</h6>
                            <p> {{ $profilUser->name }}</p>
                        </div>
                        <div class="col-6">
                            <h6>JENIS KELAMIN</h6>
                            <p>{{ $profilUser->jk }}</p>
                        </div>
                        <div class="col-6">
                            <h6>EMAIL</h6>
                            <p>{{ $profilUser->email }}</p>
                        </div>
                        <div class="col-6">
                            <h6>NO TELEPON</h6>
                            <p>{{ $profilUser->no_telp }}</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <!-- Event saya - kalo no data  -->
                    <div class="row justify-content-md-center">
                        @if (session()->has('success'))
                        <div class="alert alert-success col-lg-8" role="alert">
                          {{ session('success') }}
                        </div>
                        @endif

                    <!-- Tinggal kasih conditions  -->

                    <!-- Event saya - kalo ada data event -->
                        <div class="content col-md-8 mb-3">
                          <a style="float: right" href="/pengajuan"><i class="fas fa-plus-circle fa-lg"> </i> Add Event</a>
                        </div>
                        <div class="my col-md-10" id="data">
                            @if($my_events->count())
                            <table class="table table-responsive-sm css-serial" style="text-align:center">
                                <tr class="table-secondary">
                                    <th>No</th>
                                    <th>Nama Event</th>
                                    <th>Penyelenggara</th>
                                    <th>Kategori Event</th>
                                    <th>Tanggal Event</th>
                                    <th>Status Event</th>
                                    <th>Status Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach($my_events as $event)
                                <tr>
                                    <td></td>
                                    <td><a style="color: #4C4C4C" href="/events/{{ $event->slug }}">{{ $event->nama_event }}</a></td>
                                    <td>{{ $event->institusi_penyelenggara }}</td>
                                    <td>{{ $event->category->nama_kategori}}</td>
                                    <td>{{ $event->tgl_event }}</td>
                                    <td>
                                        <p>{{ $event->status_event }}</p>
                                    </td>
                                    
                                    <td>
                                        @if( $event->status_event=="Requested")
                                        <p>Menunggu Konfirmasi</p>
                                        @elseif( $event->status_event=="Rejected")
                                        <p></p>
                                        @elseif( $event->status_event=="Payment" && $event->payment_id==NULL)
                                        <a href="/pembayaran/{{ $event->id }}" class="btn btn-primary tombol2">Belum Dibayar</a>
                                        @else
                                        <p>{{ $event->payment->status_pembayaran }}</p>
                                        @endif
                                    </td>

                                    <td>
                                        @if( $event->user_id == auth()->user()->id)
                                        @if( $event->status_event == "Requested" && $event->payment_id == NULL)
                                        <a href="/events/{{ $event->slug }}/edit" class="btn btn-primary tombol2">Edit</a>
                                        <form action="/events/{{ $event->slug }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger tombol2" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                                        </form>
                                        @else
                                        <p>Anda tidak bisa lagi melakukan perubahan terhadap konten event</p>
                                        @endif
                                        @endif
                                    </td>
                                
                                </tr>
                                @endforeach
                            </table>
                            <hr>
                            <h6 style="text-align: center">Click Nama Event for Detail</h6>
                            @else
                            {{-- masukin gambar yang no data --}}
                            <div class="content" id="no-data">
                                <img src="/images/no-data.png" width="280px" alt="no-data">
                                <p>Sepertinya kamu belum mengajukan publikasi event nih!</p>
                            </div>
                            @endif
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