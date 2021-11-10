<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="images/logo.png" width="150px" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $title === ("Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $title === ("Event") ? 'active' : '' }}" href="/events" id="navbarDropdown" role="button"  aria-expanded="false">
                    Event<i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Event Terbaru</a></li>
                        <li><a class="dropdown-item" href="#">Event Terpopuler</a></li>
                        <!-- <li><hr class="dropdown-divider"></li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === ("Informasi") ? 'active' : '' }}" href="/informasi">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary tombol" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>