<x-page-layout title="{{ $title }}">
    @push('css')
    <style>
        .premium-card {
            border-radius: 15px;
            overflow: hidden;
            border: none;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .premium-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
        }

        .premium-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .premium-card-body {
            padding: 25px;
            text-align: center;
            background: #fff;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .premium-card-title {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .premium-card-text {
            font-size: 14px;
            color: #666;
            flex-grow: 1;
            margin-bottom: 20px;
        }

        .premium-card-body .btn {
            margin-top: auto;
        }

        .map-container {
            position: relative;
            overflow: hidden;
            padding-top: 50vh;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
    @endpush
    <main class="main">
        <section id="hero" class="hero section accent-background">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 justify-content-center text-lg-start text-center">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-center align-items-lg-start">
                        <h2>
                            Karier Impian Dimulai di Sini
                        </h2>
                        <p>
                            Bingung dengan arah karier? CV ditolak terus? Butuh persiapan wawancara?
                            Di LifeCall Careers, kami siap membantu dengan konsultasi 1:1 yang dipersonalisasi. Bersama mentor berpengalaman, kamu akan mendapatkan strategi terbaik untuk sukses di dunia kerja.
                        </p>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="https://wa.me/6287818121998" class="btn-get-started">
                                Konsultasikan Kariermu
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 d-flex justify-content-center">
                        <img src="{{ asset_page('images/hero-img.png') }}" class="img-fluid" alt="hero-img">
                    </div>
                </div>
            </div>

            <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
                <div class="container position-relative">
                    <div class="row gy-4 mt-5">
                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box text-center">
                                <img src="{{ asset_page('images/about/1.png') }}" class="img-fluid mb-3" alt="Komunitas Karier">
                                <h4 class="title">Komunitas Karier yang Suportif</a></h4>
                                <p>Bergabunglah dengan ekosistem yang mendukung pertumbuhanmu, dapatkan mentoring dari profesional, akses grup eksklusif, dan peluang networking luas untuk mempercepat kariermu.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box text-center">
                                <img src="{{ asset_page('images/about/2.png') }}" class="img-fluid mb-3" alt="Personalized Approach">
                                <h4 class="title">Personalized Approach</a></h4>
                                <p>Setiap individu unik; program kami dirancang untuk menyesuaikan dengan kebutuhan, minat, dan tujuan kariermu, memastikan pengalaman belajar yang lebih efektif.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box text-center">
                                <img src="{{ asset_page('images/about/3.png') }}" class="img-fluid mb-3" alt="Belajar dari Expert">
                                <h4 class="title">Belajar dari Profesional</a></h4>
                                <p>Kurikulum kami dirancang oleh ahli industri dan selalu diperbarui agar relevan bersama mentor dari perusahaan multinasional dan top industry players berpengalaman 5+ tahun.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box text-center">
                                <img src="{{ asset_page('images/about/4.png') }}" class="img-fluid mb-3" alt="Real Case Project">
                                <h4 class="title">Real Case Project & Portfolio</a></h4>
                                <p>Tidak hanya teori, kamu akan langsung praktek dengan studi kasus nyata. Di akhir program, kamu akan memiliki portfolio profesional yang bisa meningkatkan peluang kariermu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang LifeCall Careers<br></h2>
            </div>

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset_page('images/about.png') }}" class="img-fluid rounded-4 mb-4" alt="">
                        <p style="text-align: justify;">
                            Dunia kerja terus berubah dan persaingan semakin ketat. Apakah kamu merasa stuck di pekerjaan yang tidak lagi menantang? Atau masih berjuang menemukan karier impianmu? Jangan biarkan ketidakpastian menghambat langkahmu. Kami hadir untuk membantumu membuka peluang baru dan memastikan kamu memiliki strategi yang tepat untuk sukses.
                        </p>
                        <p style="text-align: justify;">
                            Dengan pendekatan berbasis coaching, mentoring, dan pelatihan yang terbukti efektif, LifeCall Careers membantu job seeker dan profesional muda menemukan jalur terbaik untuk berkembang, mendapatkan pekerjaan yang lebih baik, dan merancang masa depan karier. Kami percaya bahwa kesuksesan karier bukan sekadar bekerja, tetapi menemukan karier yang bermakna; pekerjaan yang selaras dengan passion, nilai hidup, dan tujuan jangka panjangmu.
                        </p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Siapa yang Harus Bergabung?
                            </p>
                            <ul style="text-align: justify;">
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>
                                        Fresh Graduate yang ingin mendapatkan pekerjaan pertama lebih cepat dan strategis.
                                    </span>
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>
                                        Job Seeker yang ingin lolos seleksi perusahaan impian dengan persiapan matang.
                                    </span>
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>
                                        Profesional Muda yang merasa stagnan dan ingin naik jabatan atau pindah ke industri yang lebih menantang.
                                    </span>
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>
                                        Career Switcher yang ingin beralih ke pekerjaan yang lebih sesuai dengan passion dan keterampilan.
                                    </span>
                                </li>
                            </ul>
                            <div class="position-relative mt-4">
                                <img src="{{ asset_page('images/about-2.png') }}" class="img-fluid rounded-4" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients" class="clients section">
            <div class="container section-title" data-aos="fade-up">
                <h1>Alumni kami sukses membangun karier</h1>
                <h2>di berbagai perusahaan impian mereka</h2>
            </div>

            <div class="container">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 2,
                                    "spaceBetween": 40
                                },
                                "480": {
                                    "slidesPerView": 3,
                                    "spaceBetween": 60
                                },
                                "640": {
                                    "slidesPerView": 4,
                                    "spaceBetween": 80
                                },
                                "992": {
                                    "slidesPerView": 6,
                                    "spaceBetween": 120
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-3.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-4.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-5.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-6.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-7.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-8.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-9.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-10.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset_page('images/clients/client-11.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="stats" class="stats section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-5">
                        <img src="{{ asset_page('images/stats.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-7">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-people flex-shrink-0"></i>
                                    <div>
                                        <b style="font-size: 35px;">200+</b>
                                        <p style="text-align: justify;">Job seeker dan profesional muda telah mendapatkan bimbingan untuk meraih karier impian mereka.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-clock-history flex-shrink-0"></i>
                                    <div>
                                        <b style="font-size: 35px;">500+</b>
                                        <p style="text-align: justify;">Jam sesi coaching, mentoring, dan pelatihan untuk membantu individu berkembang.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-briefcase flex-shrink-0"></i>
                                    <div>
                                        <b style="font-size: 30px;">Berkarier di Berbagai Industri</b>
                                        <p style="text-align: justify;">Alumni LifeCall Careers kini berkarier di berbagai industri dari perusahaan lokal hingga multinasional.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-people-fill flex-shrink-0"></i>
                                    <div>
                                        <b style="font-size: 30px;">Komunitas Profesional</b>
                                        <p style="text-align: justify;">Komunitas profesional dan pencari kerja yang terus berkembang bersama LifeCall Careers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan LifeCall Careers</h2>
            </div>

            <div class="container">
                <div class="row gy-4">
                    @foreach ($layanan as $row)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="card premium-card">
                            <img src="{{ asset_page($row['gambar']) }}" class="card-img-top" alt="Business Team">
                            <div class="premium-card-body">
                                <h5 class="premium-card-title">{{ $row['judul'] }}</h5>
                                <p class="premium-card-text">{!! $row['deskripsi'] !!}</p>
                                <a href="{{ route('layanan', $row['slug']) }}" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="pricing" class="pricing section">
            <div class="container section-title" data-aos="fade-up">
                <h2>LifeCall Elevate</h2>
            </div>

            <div class="container" data-aos="zoom-in" data-aos-delay="100">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="pricing-item">
                            <div class="pb-3">
                                <img src="{{ asset_page('images/pricing/1.png') }}" alt="Pricing Image" class="img-fluid">
                            </div>
                            <div class="text-center"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfKi6vkxJDqK_diucjQd2cyLyCHzC-_6p_OnXWoUM0R5a92IQ/viewform" class="buy-btn">Daftar Sekarang</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-item">
                            <div class="pb-3">
                                <img src="{{ asset_page('images/pricing/2.png') }}" alt="Pricing Image" class="img-fluid">
                            </div>
                            <div class="text-center"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfKi6vkxJDqK_diucjQd2cyLyCHzC-_6p_OnXWoUM0R5a92IQ/viewform" class="buy-btn">Daftar Sekarang</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-item">
                            <div class="pb-3">
                                <img src="{{ asset_page('images/pricing/3.png') }}" alt="Pricing Image" class="img-fluid">
                            </div>
                            <div class="text-center"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfKi6vkxJDqK_diucjQd2cyLyCHzC-_6p_OnXWoUM0R5a92IQ/viewform" class="buy-btn">Daftar Sekarang</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-item">
                            <div class="pb-3">
                                <img src="{{ asset_page('images/pricing/4.png') }}" alt="Pricing Image" class="img-fluid">
                            </div>
                            <div class="text-center"><a href="https://wa.me/6287818121998" class="buy-btn">Daftar Sekarang</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="call-to-action" class="call-to-action section dark-background">
            <div class="container">
                <img src="{{ asset_page('images/cta-bg.png') }}">
                <div class="content row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <a href="{{ asset_page('layanan.mp4') }}" class="glightbox play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="testimonials section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Apa Kata Mereka Tentang Layanan LifeCall Careers?</h2>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 1,
                                    "spaceBetween": 40
                                },
                                "1200": {
                                    "slidesPerView": 3,
                                    "spaceBetween": 10
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper">
                        @foreach ($testimoni as $row)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset_page($row['foto']) }}"
                                    class="testimonial-img" alt="">
                                <h3>{{ $row['nama'] }}</h3>
                                <h4>{{ $row['pekerjaan'] }}</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>{{ $row['kata'] }}</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section id="faq" class="faq section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3>
                                <span>Hal yang Paling Sering </span><strong>Ditanyakan</strong>
                            </h3>
                            <p style="text-align: justify;">
                                Kami tahu bahwa setiap orang memiliki perjalanan karier yang unik. Di sini, kami merangkum pertanyaan yang paling sering diajukan untuk membantu kamu memahami bagaimana LifeCall Careers dapat membimbingmu menemukan panggilan hidup dan membangun karier yang bermakna. Jika masih ada pertanyaan lain, jangan ragu untuk menghubungi kami.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-container">
                            <div class="faq-item faq-active">
                                <h3>
                                    <span class="num">1.</span>
                                    <span>
                                        Bagaimana LifeCall Careers bisa membantu saya mendapatkan pekerjaan impian?
                                    </span>
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Kami nggak cuma bantu kamu cari kerja, tapi juga menemukan karier yang benar-benar sesuai dengan passion dan potensimu. Dengan mentoring, coaching, dan pelatihan eksklusif, kami memastikan kamu punya strategi yang solid untuk melangkah ke jenjang karier yang lebih tinggi.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <div class="faq-item">
                                <h3><span class="num">2.</span>
                                    <span>
                                        Saya fresh graduate, apakah program ini cocok untuk saya?
                                    </span>
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Banget. Justru fresh graduate adalah yang paling butuh strategi biar nggak asal lamar sana-sini tanpa hasil. Kami bantu kamu bikin CV yang standout, melatih interview, dan mengarahkan ke peluang terbaik sesuai bidangmu.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <div class="faq-item">
                                <h3><span class="num">3.</span>
                                    <span>
                                        Bagaimana cara daftar di LifeCall Careers?
                                    </span>
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Mudah banget, kamu bisa daftar langsung lewat website kami atau hubungi tim kami via WhatsApp. Kami akan bantu pilih program yang paling sesuai dengan kebutuhanmu.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <div class="faq-item">
                                <h3><span class="num">4.</span>
                                    <span>
                                        Apakah saya bisa konsultasi dulu sebelum daftar?
                                    </span>
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Yes! Kami menyediakan sesi konsultasi awal untuk memahami kebutuhan dan tantangan kariermu. Dari sana, kami bantu arahkan ke program terbaik buat kamu.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <div class="faq-item">
                                <h3><span class="num">5.</span>
                                    <span>
                                        Apakah setelah ikut program ini saya pasti dapat kerja?
                                    </span>
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Kami bukan penyedia lowongan kerja, tapi kami membekali kamu dengan strategi terbaik agar bisa lebih unggul di pasar kerja. Banyak alumni kami yang sukses mendapatkan pekerjaan setelah mengikuti program LifeCall Careers.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gx-lg-0 gy-4">
                    <div class="col-lg-4">
                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Alamat</h3>
                                    <p>Jl. Rasuna Said, Jakarta Selatan</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Hubungi Kami</h3>
                                    <p>+6287818121998</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>lifecallcareers@gmail.com</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h3>Jam Operasional:</h3>
                                    <p>Senin - Minggu: 08.00 am - 09.00 pm (WIB)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <form action="" method="post" class="php-email-form" data-aos="fade" data-aos-delay="100">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama"
                                        required="">
                                </div>
                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subyek"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="8" placeholder="Pesan"
                                        required=""></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid p-0" data-aos="fade-up">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.272106983569!2d106.83522699999999!3d-6.227811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3ee08a44c69%3A0x8fbcfa832756abe0!2sJl.%20Yayasan%20RPI%20No.4%2C%20RT.8%2FRW.4%2C%20Kuningan%20Tim.%2C%20Kecamatan%20Setiabudi%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012950!5e0!3m2!1sid!2sid!4v1743583391615!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
</x-page-layout>