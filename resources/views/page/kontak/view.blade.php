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
        <header class="header-page position-relative">
            <div class="container header-content">
                <h1 class="fw-bold">{{ $title }}</h1>
            </div>
        </header>

        <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gx-lg-0 gy-4">
                    <div class="col-lg-4">
                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Alamat</h3>
                                    <p>Jl. H. R. Rasuna Said Blok X-5 No. 13, RT 7/RW 2, Setiabudi, Kota Jakarta Selatan, DKI Jakarta</p>
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