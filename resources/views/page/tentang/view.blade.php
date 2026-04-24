<x-page-layout title="{{ $title }}">
    @push('css')
    <style>
        .header-page {
            background-color: #133f80;
            color: white;
            text-align: center;
            padding: 140px 0;
            position: relative;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .header-page h1 {
            color: white;
        }
    </style>
    @endpush

    <main class="main">
        <header class="header-page position-relative">
            <div class="container header-content">
                <h1 class="fw-bold">{{ $title }}</h1>
            </div>
        </header>

        <section id="about" class="about section">
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
                                <img src="{{ asset_page('images/about-2.png') }}" class="img-fluid rounded-4 mb-4" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-page-layout>