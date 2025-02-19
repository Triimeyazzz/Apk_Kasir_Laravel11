<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mey's Fashion Haven</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS Owl Carousel -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #BCE0FF;
            color: #010255;
            font-family: 'Poppins', sans-serif;
        }

        .teks-biru {
            color: #010255;
        }

        h1 {
            color: #010255;
            font-size: 90px;
            font-family: 'Poppins', sans-serif;
            padding-bottom: 20px;
            font-weight: 800;
            font-style: normal;
        }

        .bg-cu {
            background-color: #F8ABEB;
        }

        .navbar-color {
            background: rgb(255, 255, 255);
        }

        .jumbotron {
            background-size: cover;
            background-position: top;
            position: relative;
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-weight: bold;
            padding-top: 140px;
            padding-bottom: 25px;
        }

        .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: #F8ABEB;
            opacity: 0.7;
        }

        /* Container untuk Teks dan Ikon */
        .container-icon {
            display: flex;
            align-items: center;
        }

        /* Teks */
        .text {
            font-family: 'Poppins', sans-serif;
            /* Anda dapat mengganti dengan 'Montserrat' atau font lain */
            font-weight: 800;
            font-size: 36px;
            line-height: 1.2;
            text-align: left;
        }

        .teks-oren {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 50px;
            line-height: 1.2;
            text-align: left;
            color: #ffffff;
            padding-top: 70px;
            padding-bottom: 40px;
        }

        /* Garis Horizontal */
        .text {
            content: "";
            display: block;
            margin-top: 8px;
            width: 100%;
            height: 2px;
            background-color: #A2D2FF;
        }

        /* Lingkaran Ikon */
        .icon-circle {
            width: 100px;
            height: 100px;
            background-color: #F8ABEB;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -20px;
        }

        .icon-circle-1 {
            width: 100px;
            height: 100px;
            background-color: #F8ABEB;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;

        }

        .icon-circle-2 {
            width: 140px;
            height: 140px;
            background-color: #F8ABEB;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 90px;
        }

        .portofolio {
            padding-bottom: 10px;
        }

        /* Panah */
        .icon-arrow {
            font-size: 90px;
            color: #A2D2FF;
            font-weight: bold;
            transform: rotate(45deg);
        }

        .icon-arrow-1 {
            font-size: 90px;
            color: #ffffff;
            font-weight: bold;
            transform: rotate(45deg);
        }
        .icon-arrow-7 {
            font-size: 90px;
            color: #010255;
            font-weight: bold;
            transform: rotate(45deg);
        }
        .icon-arrow-2 {
            font-size: 180px;
            color: #ffffff;
            font-weight: bold;
            line-height: 0;
            margin-top: 130px;
            font-style: italic;
            margin-right: 26px;
        }

        /* Custom highlight color */
        .highlight-orange {
            color: #F8ABEB;
            font-weight: 600;
            font-style: italic;
        }

        .teks1 {
            background-color: #A2D2FF;
            color: white;
            font-size: 90px;
            font-family: 'Poppins', sans-serif;
            font-style: bold;
        }

        .teks2 {
            background-color: #A2D2FF;
            color: white;
            font-size: 90px;
            font-family: 'Poppins', sans-serif;
            font-style: bold;
        }

        .teks3 {
            background-color: #A2D2FF;
            color: white;
            font-size: 90px;
            font-family: 'Poppins', sans-serif;
            font-style: bold;
        }

        .youtube-rounded {
            border-radius: 20px;
        }

        .know-more {
            padding-top: 20px;
        }

        .thigs {
            padding-top: 30px;
            padding-bottom: 100px;
            background: #C5ADED;
        }

        .text-thigs {
            font-size: 120px;
            font-weight: 700;
            line-height: 0.9;
        }

        .teks4 {
            color: #010255;
            font-size: 130px;
            font-family: 'Poppins', sans-serif;
            padding-bottom: 5px;
            font-weight: 800;
            font-style: normal;
        }

        .project{
          padding-bottom: 60px;
        }


        .project-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .project-description {
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .project-subtitle {
            font-size: 40px;
            font-weight: 700;
        }

        .project-subtitle2 {
            font-size: 24px;
            font-weight: 600;
        }

        .rounded-project {
            border-radius: 20px;
            height: 360px;
            object-fit: cover;
        }

        .teks5 {
            font-size: 20px;
            font-weight: 700;
            color: #010255;
        }

        .oren {
            background-color: #C5ADED;
        }

        .teks6 {
            color: white;
        }

        .hitam {
            background-color: #BCE0FF;
        }

        .tekshitam-1 {
            color: #ffffff;
            font-size: 25px;
            padding-top: 80px;
            padding-bottom: 10px;
        }

        .tekshitam-2 {
            color: #ffffff;
            font-size: 100px;
            font-weight: 700;
            padding-bottom: 10px;
        }

        .tekshitam-3 {
            color: #ffffff;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-color navbar-expand-lg fixed-top">
        <div class="container border-bottom py-3" style="border-color: #A2D2FF !important; border-width: 2px !important;">

            <a class="navbar-brand" href="#"><img src="https://alfamart.co.id/frontend/img/brand/logo_alfamart_transparent.png"
                    width="80px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/about">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ON SALE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BRAND</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="btn bg-cu rounded-pill">NEW ARRIVALS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="jumbotron poppins-extrabold">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-11 border-bottom border-2 border-light">
                    <h1 style="font-size: 120px !important;" class="teks-jumbotron" data-aos="fade-right">
                        EXPRESS YOUR
                    </h1>
                    <div class="d-flex gap-4 align-items-center" style="margin-top: -60px">
                        <div class="icon-circle-1">
                            <div class="icon-arrow-7">➔</div>
                        </div>
                        <h1 style="font-size: 120px !important;" class="teks-jumbotron" data-aos="fade-right">
                            CREATIVITY
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portofolio">
        <div class="container">
            <div class="item">
                <iframe class="w-100 youtube-rounded" height="530px"
                    src="https://ciptaloka-images.s3.amazonaws.com/public/qDpQ2J2nRzVwyxr6ae61.jpg" title="Banner E-Commerce"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="know-more">
        <div class="container">
            <div class="row border-bottom mb-3" style="border-color: white !important; border-width: 2px !important">
                <div class="col-md-4">
                    <!-- Subtitle -->
                    <p class="text-uppercase fw-semibold text-biru mb-1" style="font-size: 1.5rem;">Know More About Us
                    </p>

                    <!-- Small description -->
                    <p class="text-biru">
                        Founded in 2019, Established in 2024 we always had clear vision <br> and understanding of
                        fashion.
                    </p>

                    <!-- Main title -->
                    <h2 class="fw-semibold text-biru mb-3" style="font-size: 2.75rem;">LOCATED IN JAKARTA, INDONESIA
                    </h2>

                    <!-- Description with highlights -->
                </div>
                <div class="col-md-8">
                    <p class="" style="font-size: 1.5rem;">
                        MEY'S FASHION HAVEN is an exclusive online store offering the
                        <span class="highlight-orange">LATEST AND TRENDIEST</span> clothing for all genders.
                        We are committed to providing the best fashion choices with
                        <span class="highlight-orange">SUPERIOR QUALITY</span> and competitive prices.
                        From formal wear to casual outfits, we have everything you need to express yourself with style.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="thigs">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8 mx-auto border-bottom border-white pb-3">
                    <p class="text-thigs text-white fw-bold m-0">FASHION</p>
                    <p class="text-thigs text-white fw-bold m-0 text-end">HAVEN</p>
                    <div class="d-flex gap-3">
                        <p class="text-thigs text-white fw-bold m-0 ms-5">FOR ALL
                        </p>
                        <div class="icon-circle-1">
                            <div class="icon-arrow-1">➔</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-md-6">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-23020-4nkfc2p2x3nvff" class="w-100" height="580px"
                        style="object-fit:cover; border-radius: 20px;">
                </div>
                <div class="col-md-6">
                    <h5 class="text-white fw-bold mb-0" style="font-size: 2.75rem">Women's Clothing</h5>
                    <p class="text-white" style="font-size: 1.25rem">Kami menawarkan berbagai pilihan gaun dan rok yang stylish dan elegan untuk segala kesempatan.
                        Dari gaun renang yang cantik hingga rok casual yang nyaman, kami memiliki gaun dan rok untuk semua acara.</p>
                    <h5 class="text-white fw-bold mb-0" style="font-size: 2.75rem">Men's Clothing</h5>
                    <p class="text-white" style="font-size: 1.25rem">Temukan koleksi kaos dan kemeja kami yang nyaman dan stylish.
                        Kami memiliki berbagai warna dan desain untuk memenuhi selera Anda, baik untuk acara formal maupun casual.</p>
                    <h5 class="text-white fw-bold mb-0" style="font-size: 2.75rem">Accessories</h5>
                    <p class="text-white" style="font-size: 1.25rem">Kami menawarkan berbagai tas dan dompet yang stylish dan praktis untuk segala kebutuhan Anda.
                        Dari tas hobi yang modern hingga dompet formal yang elegan, kami memiliki pilihan yang beragam untuk Anda.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="project">
        <div class="container">
            <h1 class="teks4">PRODUCTS</h1>
            <div class="row g-4">
                <div class="col-md-6">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-23020-4nkfc2p2x3nvff" alt="katalog pakaian"
                        class="w-100 rounded-project">
                </div>
                <div class="col-md-6">
                    <h5 class="project-title">PRODUCTION</h5>
                    <div class="project-subtitle mb-4">MASIH BINGUNG</div>
                    <div class="mb-4">The Video Campaign aimed to provide solution by showcasing a high quality
                        product
                        and demonstrating its effectiveness after.</div>
                    <div class="project-subtitle2 mb-0">COVERAGE</div>
                    <div class="">Production - Post Production</div>
                </div>
                <div class="col-md-6">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-23020-4nkfc2p2x3nvff" alt="katalog pakaian"
                        class="w-100 rounded-project">
                    <div class="project-content mt-4">
                        <div class="project-title">Post Production</div>
                        <div class="project-description">Product Launching</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-23020-4nkfc2p2x3nvff" alt="KATALOG PAKAIAN"
                        class="w-100 rounded-project">
                    <div class="project-content mt-4">
                        <div class="project-title">Post Production</div>
                        <div class="project-description">Digital Ads</div>
                    </div>
                </div>
            </div>
            <hr>
            <h5 class="teks5">2023.</h5>
        </div>
    </section>
    <section class="oren">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-2">
                    <div class="icon-circle-2">
                        <div class="icon-arrow-2">"</div>
                    </div>
                </div>
                <div class="col-md-10">
                    <h1 class="teks-oren border-bottom border-1 border-white" data-aos="fade-right">
                        DELIVER ALWAYS THE BEST QUALITY<br>
                        WITH ENDLESS ITERATION.<br>
                        GOOD JOB!
                    </h1>
                </div>
            </div>
            <div class="row g-4 teks6">
                <div class="col-md-2" style="padding-bottom: 40px;">
                    DESMOND ALEX
                </div>
                <div class="col-md-10" style="padding-bottom: 80px;">
                    CREATIVE HEAD OF SHAMBALA
                </div>
            </div>
        </div>
    </section>
    <section class="hitam">
        <div class="container">
            <div class="tekshitam-1 text-center">
                HAVE SOMETHING IN MIND?
            </div>
            <div class="tekshitam-2 text-center">
                GET CONNECTED
            </div>
            <div class="tekshitam-3 text-center">
                <a href="" class="btn bg-cu rounded-pill">CONTACT US</a>
            </div>
            <h1 class="teks-oren border-bottom border-1 border-white"></h1>
            <div class="pb-3">
                <a class="navbar-brand" href="#"><img src="https://alfamart.co.id/frontend/img/brand/logo_alfamart_transparent.png"
                        width="100px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
