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
                <h1 class="fw-bold">{{ $layanan['judul'] }}</h1>
                <p class="lead">{!! $layanan['deskripsi'] !!}</p>
            </div>
        </header>

        <section class="service-detail">
            <div class="container py-5">
                <div class="row align-items-center g-4 text-lg-start">
                    <div class="col-lg-6">
                        <img src="{{ asset_page($layanan['gambar']) }}" class="img-fluid rounded" alt="Layanan Image">
                    </div>
                    <div class="col-lg-6">
                        <div class="service-content px-3" style="text-align: justify;">
                            <p class="lead">
                                {!! $layanan['isi'] !!}
                            </p>
                            <a href="{{ $layanan['link'] }}" class="btn btn-primary mt-3">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-page-layout>