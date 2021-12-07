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
    {{-- <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300;500&display=swap" rel="stylesheet"> --}}
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fb85f1a3b6.js" crossorigin="anonymous"></script>
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/style.css") }} " >
    <title>CLITICK | {{ $title }}</title>


    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    
    <style>
        trix-toolbar [data-trix-button-group ="file-tools"] {
            display: none;
        }
        .trix-button-group button {
            background-color: white;
        }
        trix-editor {
            background-color: white;
            color: black;
        }
    </style>

  </head>
  <body>
      <!-- navbar -->
    @include('template.navbar')

    @if (Auth::user()->is_admin == 1)

    
    <div class="container bg-dark text-white col-md-8 justify-content-center py-3 my-3 ">
        <h4 style="text-align: center; color: white; margin-top:30px">Form Edit Event</h4> <br> 
        <form method="post" action="/events/{{ $event->slug }}" class="offset-md-1" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group row col-md-11">
              <label for="nama_event" class="form-label">Nama Event</label>
              <input type="text" class="form-control @error('nama_event') is-invalid @enderror" id="nama_event" name="nama_event" required autofocus value="{{ old('nama_event', $event->nama_event) }}">
              @error('nama_event')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="form-group row col-md-11 mt-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $event->slug) }}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-group row col-md-11 mt-3">
                <label for="institusi_penyelenggara" class="form-label">Institusi Penyelenggara</label>
                <input type="text" class="form-control @error('institusi_penyelenggara') is-invalid @enderror" id="institusi_penyelenggara" name="institusi_penyelenggara" required value="{{ old('institusi_penyelenggara', $event->institusi_penyelenggara) }}">
                @error('institusi_penyelenggara')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group row col-md-11 mt-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" name="category_id"">
                    @foreach($categories as $category)
                    @if (old('category_id', $event->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group row col-md-11 mt-3">
                <label for="domisili_id" class="form-label">Domisili</label>
                <select class="form-select" name="domisili_id"">
                    @foreach($domisilis as $domisili)
                    @if (old('domisili_id', $event->domisili_id) == $domisili->id)
                    <option value="{{ $domisili->id }}" selected>{{ $domisili->nama_domisili }}</option>
                    @else
                    <option value="{{ $domisili->id }}">{{ $domisili->nama_domisili }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group row col-md-11 mt-3">
                <label for="tgl_event" class="form-label">Tanggal Event</label>
                <input type="date" class="form-control @error('tgl_event') is-invalid @enderror" id="tgl_event" name="tgl_event" required value="{{ old('tgl_event', $event->tgl_event) }}">
                @error('tgl_event')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group row col-md-11 mt-3">
                <label for="deskripsi_event" class="form-label">Deskripsi Event</label>
                @error('deskripsi_event')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="deskripsi_event" type="hidden" name="deskripsi_event" value="{{ old('deskripsi_event', $event->deskripsi_event) }}">
                <trix-editor input="deskripsi_event"></trix-editor>
            </div>
            <div class="form-group row col-md-11 mt-3">
                <label for="link_reg" class="form-label">Link Registrasi</label>
                <input type="text" class="form-control @error('link_reg') is-invalid @enderror" id="link_reg" name="link_reg" required value="{{ old('link_reg', $event->link_reg) }}">
                @error('link_reg')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control @error('status_event') is-invalid @enderror" id="status_event" name="status_event" required value="Requested">
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" required value={{ auth()->user()->id }}>
            </div>
            <div class="row col-md-11 mt-3" style="margin-bottom:40px">
                <label for="poster" class="form-label">Upload Image</label>
                <input type="hidden" name="oldImage" value="{{ $event->poster }}">
                @if ($event->poster)
                <img src="{{ asset('storage/' . $event->poster) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control @error('poster') is-invalid @enderror" type="file" id="poster" name="poster" onchange="previewImage()">
                @error('poster')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="row col-md-11 mt-3" style="margin-bottom:30px">
                <button style="width:30%; margin-left:35%; border-radius:50px" type="submit" class="btn btn-primary">Update Event</button>
            </div>    
          </form>
    </div>


    <!-- Footer -->
    @include('template.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
<script>
    const nama_event = document.querySelector('#nama_event');
    const slug = document.querySelector('#slug');

    nama_event.addEventListener('change', function() {
        fetch('/dashboard/events/checkSlug?nama_event=' + nama_event.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });


    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#poster');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endif
</body>
</html>