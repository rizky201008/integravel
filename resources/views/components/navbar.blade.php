<nav class="navbar navbar-expand-lg text-light fixed-top bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Beranda' ? 'active' : '' }}" aria-current="page"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Produk' ? 'active' : '' }}"
                        href="{{ route('products') }}">Produk</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
