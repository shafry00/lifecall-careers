<header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:lifecallcareers@gmail.com">lifecallcareers@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><a href="https://wa.me/6287818121998">+6287818121998</a></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                @foreach ($sosmed as $item)
                <a href="{{ $item['link'] }}" class="{{ $item['icon'] }}" target="_blank">
                    <i class="bi bi-{{ $item['icon'] }}"></i>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="branding d-flex align-items-cente">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset_page('images/logo.png') }}" alt="">
                <span>.</span>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda<br></a></li>
                    <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach ($layanan as $row)
                            <li>
                                <a class="dropdown-item" href="{{ route('layanan', $row['slug']) }}">{{ $row['judul'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>