<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Blog & Berita - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Dapatkan artikel pendidikan, berita kegiatan terbaru, dan informasi informatif dari Yayasan Khalifah Latif Cendaka.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;">Blog & Berita</h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;">Blog</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="rs-blog-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row g-4">
                <!-- Post 1 -->
                <div class="col-lg-4 col-md-6">
                    <a href="<?= base_url('blog/detail/1') ?>" class="blog-card-hover" style="background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
                        <div style="overflow: hidden; height: 220px;">
                            <img src="<?= base_url('images/gallery/gallery-thumb-01.webp') ?>" alt="Berita 1" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 30px;">
                            <span style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #0d6efd; display: block; margin-bottom: 10px;">Kegiatan Sosial</span>
                            <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 15px; line-height: 1.4;">Kegiatan Bakti Sosial & Penyaluran Paket Sembako 2026</h4>
                            <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px;">Yayasan menyalurkan paket bantuan sembako kepada warga sekitar lingkungan sekolah yang membutuhkan sebagai bentuk...</p>
                            <span class="read-more-btn">Baca Selengkapnya <i class="ri-arrow-right-line"></i></span>
                        </div>
                    </a>
                </div>
                <!-- Post 2 -->
                <div class="col-lg-4 col-md-6">
                    <a href="<?= base_url('blog/detail/2') ?>" class="blog-card-hover" style="background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
                        <div style="overflow: hidden; height: 220px;">
                            <img src="<?= base_url('images/gallery/gallery-thumb-02.webp') ?>" alt="Berita 2" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 30px;">
                            <span style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #198754; display: block; margin-bottom: 10px;">Akademik</span>
                            <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 15px; line-height: 1.4;">Penerapan Sistem Pembelajaran E-Learning Baru Terpadu</h4>
                            <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px;">Sekolah resmi mengimplementasikan platform Learning Management System new guna memfasilitasi interaksi akademis...</p>
                            <span class="read-more-btn">Baca Selengkapnya <i class="ri-arrow-right-line"></i></span>
                        </div>
                    </a>
                </div>
                <!-- Post 3 -->
                <div class="col-lg-4 col-md-6">
                    <a href="<?= base_url('blog/detail/3') ?>" class="blog-card-hover" style="background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
                        <div style="overflow: hidden; height: 220px;">
                            <img src="<?= base_url('images/gallery/gallery-thumb-03.webp') ?>" alt="Berita 3" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 30px;">
                            <span style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #fd7e14; display: block; margin-bottom: 10px;">Prestasi</span>
                            <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 15px; line-height: 1.4;">Siswa SDIT Meraih Juara 1 Olimpiade Matematika Kota</h4>
                            <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px;">Selamat kepada Ananda Ahmad yang telah berhasil membawa pulang medali emas tingkat kota dalam kompetisi matematika...</p>
                            <span class="read-more-btn">Baca Selengkapnya <i class="ri-arrow-right-line"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
