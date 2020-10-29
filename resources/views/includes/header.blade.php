  <!-- Navbar -->
  <div class="container">
        <header class="head my-3">
            <nav class="navbar navbar-expand-lg navbar-light head__custom-nav">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <img src="/assets/img/logo.png" alt="website logo">
                    <span>Helping<br>Hand</span>
                </a>
                <button class="navbar-toggler" style="border: none;" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span><img src="assets/img/menu.png" alt=""></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active home" href="#"><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-item btn btn-primary tombol" href="#">Masuk</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
  <!-- End of Navbar -->