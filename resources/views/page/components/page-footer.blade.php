<footer id="footer" class="footer accent-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <span class="sitename">Lifecall Careers</span>
                </a>
                <p>
                    Your Path, Your Calling
                </p>
                <div class="social-links d-flex mt-4">
                    @foreach ($sosmed as $row)
                    <a href="{{ $row['link'] }}" class="{{ $row['icon'] }}" target="_blank">
                        <i class="bi bi-{{ $row['icon'] }}"></i>
                    </a>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Jelajahi Lebih Lanjut</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Layanan Kami</h4>
                <ul>
                    @foreach ($layanan as $row)
                    <li>
                        <a href="{{ route('layanan', $row['slug']) }}">{{ $row['judul'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Hubungi Kami</h4>
                <p>Jl. H. R. Rasuna Said Blok X-5 No. 13, RT 7/RW 2, Setiabudi, Kota Jakarta Selatan, DKI Jakarta</p>
                <p>Indonesia</p>
                <p class="mt-4"><strong>Phone:</strong> <span>+6287818121998</span></p>
                <p><strong>Email:</strong> <span>lifecallcareers@gmail.com</span></p>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>
            © <span>Copyright</span> <strong class="px-1 sitename">PT. Karier Tumbuh Bermakna</strong> <span>All Rights Reserved</span>
        </p>
    </div>
</footer>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>