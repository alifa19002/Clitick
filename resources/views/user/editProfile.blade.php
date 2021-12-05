<!DOCTYPE html>
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
        <div class="global-container">
            <div class="row justify-content-md-center">
                {{-- <div class="card-body"> --}}
                  <div class="content mt-5" id="top-content">
                      <div>
                        <h2 style="text-align: center" class="edit mt-3 mb-3">Edit Profile</h2>
                      </div>
                      <form method="post" action="/profile/{{ $profilUser->username }}" enctype="multipart/form-data">
                        <input type="hidden" name="oldImage" value="{{ $profilUser->foto_profil }}">
                        @if ($profilUser->foto_profil)
                        <img src="{{ asset('storage/' . $profilUser->foto_profil) }}" width="180px" style="float:left" alt="" class="img-preview">
                        @else
                        <img src="{{ asset('images/foto-profil.png') }}" width="180px" style="float:left" alt="" class="img-preview">
                        @endif
                        <label>Edit Foto Profil</label>
                        <input class="form-control @error('foto_profil') is-invalid @enderror" type="file" id="foto_profil" name="foto_profil" onchange="previewImage()">
                        @error('foto_profil')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <h5 class="edit mt-5 mb-3">Hallo, </h5>
                        <p class="edit mb-2">You can fill this form to update your profile!</p>
                    </div>
                    <div class="row justify-content" id="bottom-content">
                          
                          @method('put')
                          @csrf
                          <div class="box-login">
                            <h6>Name</h6>
                            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name', $profilUser->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>
                          <div class="box-login mt-3">
                            <h6>Username</h6>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username',  $profilUser->username) }}">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="box-login mt-3">
                            <h6>Email address</h6>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email address" required value="{{ old('email',  $profilUser->email) }}">                            
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="box-login mt-3">
                            <h6>Nomor Telepon</h6>
                            <input type="tel" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="Nomor Telepon" required value="{{ old('no_telp',  $profilUser->no_telp) }}">                            
                            @error('no_telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="box-login mt-3">
                            <h6>Jenis Kelamin</h6>
                            <div class="form-check2">
                              <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk" required value="L" {{ old('jk', $profilUser->jk) == 'L' ? 'checked' : '' }}> L
                            </div>
                            <div class="form-check2">
                              <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk" required value="P" {{ old('jk', $profilUser->jk) == 'P' ? 'checked' : '' }}> P
                            </div>
                            @error('jk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
      
                          <button class="w-100 btn btn-md btn-primary mt-4 mb-5" type="submit">Update Profile</button>
                        </form>
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

        <script>
              function previewImage() {
              const foto_profil = document.querySelector('#foto_profil');
              const imgPreview = document.querySelector('.img-preview');
              imgPreview.style.display = 'block';

              const oFReader = new FileReader();
              oFReader.readAsDataURL(foto_profil.files[0]);

              oFReader.onload = function(oFREvent) {
                  imgPreview.src = oFREvent.target.result;
              }
          }
        </script>
    </body>
</html>