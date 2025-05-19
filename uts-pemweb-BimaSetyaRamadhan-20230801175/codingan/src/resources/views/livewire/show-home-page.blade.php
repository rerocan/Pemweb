<main>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5 rounded-circle" src="{{ asset('front/images/image.png')}}" alt="Avatar" />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">WELCOME</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Sma Negeri 2 Nusantara</p>
        </div>
    </header>
    <!-- Portfolio Section -->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Heading -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">guru</h2>
            <!-- Divider -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid -->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto hover-scale" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 bg-dark bg-opacity-75">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('front/images/guru1.png')}}" alt="guru sejarah" />
                    </div>
                </div>
                <!-- Portfolio Item 2 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto hover-scale" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 bg-dark bg-opacity-75">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('front/images/guru2.png')}}" alt="guru bahasa indonesia" />
                    </div>
                </div>
                <!-- Portfolio Item 3 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto hover-scale" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 bg-dark bg-opacity-75">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('front/images/guru3.png')}}" alt="guru matematika" />
                    </div>
                </div>
                <!-- Portfolio Item 4 -->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto hover-scale" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 bg-dark bg-opacity-75">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('front/images/guru4.png')}}" alt="guru pramuka" />
                    </div>
                </div>
                <!-- Portfolio Item 5 -->
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto hover-scale" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 bg-dark bg-opacity-75">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('front/images/guru5.png')}}" alt="guru agama" />
                    </div>
                </div>
                <!-- Portfolio Item 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto hover-scale" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 bg-dark bg-opacity-75">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-2x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('front/images/guru6.png')}}" alt="guru olahraga" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">Sman 2 Nusantara adalah lembaga pendidikan menengah atas yang berdiri pada tahun 2010 di bawah naungan Dinas Pendidikan Provinsi Nusantara. Berlokasi di kawasan hijau dan strategis, sekolah ini hadir dengan semangat mencetak generasi muda yang cerdas, berkarakter, dan siap bersaing di era global.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">Didukung oleh tenaga pendidik profesional, fasilitas modern seperti laboratorium sains dan komputer, perpustakaan digital, ruang multimedia, serta lingkungan sekolah yang asri dan ramah anak, SMA Negeri 9 Nusantara menjadi pilihan utama masyarakat sekitar.</p>
                </div>
            </div>
        </div>
    </section>
</main>