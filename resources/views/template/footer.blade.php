<footer class="bg-light text-dark">
    <div class="text-center pt-3 justify-content" id="atas">
        <section class="mb-3">
            <a href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a href="#"><i class="fab fa-line fa-lg"></i></a>
            <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
        </section>
    </div>
    <div class="container text-md-left col-md-10 pt-4 pb-4">
        <div class="row text-md-left">
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4">
                <img src="/images/logo.png" width="150px" alt="logo">
                <p>Clitick adalah platform publikasi acara atau event yang mempermudah para pencari event  untuk mencari event dan penyelenggara event untuk mempublikasinya caranya</p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3" id="kategori-footer">
                <h5 class="mb-4 font-weight-bold">Kategori</h5>
                <a href="/events?category=Webinar" class="text-dark">Seminar</a><br>
                <a href="/events?category=Lomba" class="text-dark">Lomba</a><br>
                <a href="/events?category=Konferensi" class="text-dark">Konferensi</a><br>
            </div>
            <!-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="mb-4 font-weight-bold">Event</h5>
                <a href="#" class="text-dark">Event Terbaru</a><br>
                <a href="#" class="text-dark">Event Terpopuler</a>
            </div> -->

            @auth
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <p>Tertarik mempublikasikan eventmu di Clitick?</p>
                <a class="btn btn-primary tombol" href="/pengajuan">Ajukan Event</a>
            </div>
            @else
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <p>Tertarik mempublikasikan eventmu di Clitick?</p>
                <a class="btn btn-primary tombol" href="/login">Ajukan Event</a>
            </div>
            @endauth
        </div>
    </div>
</footer>

<!-- footer -->
<!-- <footer class="bg-light text-dark">
    <div class="text-center pt-3 justify-content" id="atas">
        <section class="mb-3">
            <a href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a href="#"><i class="fab fa-line fa-lg"></i></a>
            <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
        </section>
    </div>
    <div class="container text-md-left pt-4 pb-4">
        <div class="row text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <img src="/images/logo.png" width="150px" alt="logo">
                <p>Clitick adalah platform publikasi acara atau event yang mempermudah para pencari event  untuk mencari event dan penyelenggara event untuk mempublikasinya caranya</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="mb-4 font-weight-bold">Kategori</h5>
                <a href="#" class="text-dark">Seminar</a><br>
                <a href="#" class="text-dark">Lomba</a><br>
                <a href="#" class="text-dark">Konser</a><br>
                <a href="#" class="text-dark">Konferensi</a><br>
                <a href="#" class="text-dark">Workshop</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="mb-4 font-weight-bold">Event</h5>
                <a href="#" class="text-dark">Event Terbaru</a><br>
                <a href="#" class="text-dark">Event Terpopuler</a>
            </div>

            @auth
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <p>Tertarik mempublikasikan eventmu di Clitick?</p>
                <a class="btn btn-primary tombol" href="/pengajuan">Ajukan Event</a>
            </div>
            @else
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <p>Tertarik mempublikasikan eventmu di Clitick?</p>
                <a class="btn btn-primary tombol" href="/login">Ajukan Event</a>
            </div>
            @endauth
        </div>
    </div>
</footer> -->
