<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Life Call Careers Bimbingan Karier yang Personal & Praktis untuk Masa Depan yang Lebih Cerah.">
    <meta name="keywords" content="Life Call Careers Bimbingan Karier yang Personal & Praktis untuk Masa Depan yang Lebih Cerah.">
    <meta name="author" content="Life Call Careers Bimbingan Karier yang Personal & Praktis untuk Masa Depan yang Lebih Cerah.">
    <title>{{ config('app.name') }} | {{ $title }}</title>

    <!-- begin:: icon -->
    <link rel="apple-touch-icon" href="{{ asset_page('images/icon/apple-touch-icon.png') }}" sizes="180x180" />
    <link rel="shortcut icon" href="{{ asset_page('images/icon/favicon.ico') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset_page('images/icon/favicon.ico') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset_page('images/icon/favicon-32x32.png') }}" type="image/x-icon" sizes="32x32" />
    <link rel="icon" href="{{ asset_page('images/icon/favicon-16x16.png') }}" type="image/x-icon" sizes="16x16" />
    <!-- end:: icon -->

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset_page('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset_page('vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset_page('vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset_page('vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset_page('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset_page('css/main.css') }}">

    @stack('css')
</head>

<body class="index-page">
    <!-- begin:: Header -->
    <x-page-header />
    <!-- end:: Header -->

    <!-- begin:: Main Content -->
    {{ $slot }}
    <!-- end:: Main Content -->

    <!-- begin:: Footer -->
    <x-page-footer />
    <!-- end:: Footer -->

    <script src="{{ asset_page('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset_page('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset_page('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset_page('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset_page('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset_page('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset_page('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset_page('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset_page('js/main.js') }}"></script>
    <script type="text/javascript" src="https://popupsmart.com/freechat.js"></script>
    <script>
        window.start.init({
            title: "Hi path builders ✌️",
            message: "Hai! Terima kasih sudah menghubungi LifeCall Careers. Ada yang bisa kami bantu?",
            color: "#133f80",
            position: "left",
            placeholder: "Masukkan pesan anda disini",
            withText: "Write with",
            viaWhatsapp: "Or write us directly via Whatsapp",
            gty: "Go to your",
            awu: "and write us",
            connect: "Connect now",
            button: "Write us",
            device: "everywhere",
            logo: "https://d2r80wdbkwti6l.cloudfront.net/StCoVV3caxRmRgZFVLW6mMIuvhpuFT1i.jpg",
            services: [{
                "name": "whatsapp",
                "content": "+6287818121998"
            }]
        });
    </script>
</body>

</html>