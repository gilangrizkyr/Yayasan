<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Galeri - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Koleksi foto dokumentasi kegiatan pembelajaran, sarana prasarana, dan agenda sosial di Yayasan Khalifah Latif Cendaka.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;">Galeri Kegiatan</h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;">Galeri</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>

    <!-- Gallery Section -->
    <section class="rs-gallery-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row g-4">
                <!-- Gallery Item 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card-hover" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                        <img src="<?= base_url('images/gallery/gallery-thumb-01.webp') ?>" alt="Galeri 1" style="width: 100%; height: 260px; object-fit: cover; display: block;">
                    </div>
                </div>
                <!-- Gallery Item 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card-hover" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                        <img src="<?= base_url('images/gallery/gallery-thumb-02.webp') ?>" alt="Galeri 2" style="width: 100%; height: 260px; object-fit: cover; display: block;">
                    </div>
                </div>
                <!-- Gallery Item 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card-hover" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                        <img src="<?= base_url('images/gallery/gallery-thumb-03.webp') ?>" alt="Galeri 3" style="width: 100%; height: 260px; object-fit: cover; display: block;">
                    </div>
                </div>
                <!-- Gallery Item 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card-hover" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                        <img src="<?= base_url('images/gallery/gallery-thumb-04.webp') ?>" alt="Galeri 4" style="width: 100%; height: 260px; object-fit: cover; display: block;">
                    </div>
                </div>
                <!-- Gallery Item 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card-hover" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                        <img src="<?= base_url('images/gallery/gallery-thumb-05.webp') ?>" alt="Galeri 5" style="width: 100%; height: 260px; object-fit: cover; display: block;">
                    </div>
                </div>
                <!-- Gallery Item 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card-hover" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                        <img src="<?= base_url('images/gallery/gallery-thumb-06.webp') ?>" alt="Galeri 6" style="width: 100%; height: 260px; object-fit: cover; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
