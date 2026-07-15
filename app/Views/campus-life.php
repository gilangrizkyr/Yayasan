<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Kehidupan Sekolah & Pesantren - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Aktivitas harian, kegiatan keagamaan, dan ekstrakurikuler santri/siswa di lingkungan pendidikan Yayasan Khalifah Latif Cendaka.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;">Kehidupan Sekolah</h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;">Kehidupan Sekolah</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Intro section -->
    <section class="section-space" style="padding: 80px 0; background: #ffffff;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span style="font-size: 14px; font-weight: 700; color: #ffc107; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;">Aktivitas Santri & Siswa</span>
                    <h2 style="font-size: 36px; font-weight: 700; color: #08284e; margin-bottom: 25px; line-height: 1.3;">Keseimbangan Akademis, Karakter & Spiritual</h2>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                        Kehidupan di lingkungan Yayasan Khalifah Latif Cendaka dibentuk untuk melatih kemandirian, kedisiplinan, serta rasa persaudaraan yang erat. Di sini, para santri dan siswa tidak hanya mengejar prestasi akademik formal, tetapi juga dibina spiritualnya melalui ibadah harian.
                    </p>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 30px;">
                        Setiap harinya dimulai dengan shalat subuh berjamaah, dilanjutkan dengan program tahfidz Al-Qur'an pagi, pembelajaran kelas formal berbasis teknologi, kegiatan olahraga sore, hingga kajian malam khazanah keislaman bersama asatidzah.
                    </p>
                    <div style="border-left: 4px solid #ffc107; padding-left: 20px; font-style: italic; color: #555; font-size: 16px;">
                        "Tujuan kami bukan sekadar mencetak siswa yang pintar, tetapi melahirkan pemimpin masa depan yang berpegang teguh pada tauhid, berakhlak mulia, dan berwawasan luas."
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('images/gallery/gallery-thumb-06.webp') ?>" alt="Kehidupan Pesantren" style="width: 100%; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); object-fit: cover; height: 420px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Extracurricular Activities -->
    <section class="section-space" style="padding: 80px 0; background: #f8f9fa;">
        <div class="container">
            <div class="text-center" style="max-width: 600px; margin: 0 auto 50px;">
                <span style="font-size: 14px; font-weight: 700; color: #ffc107; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;">Pengembangan Bakat</span>
                <h2 style="font-size: 32px; font-weight: 700; color: #08284e;">Ekstrakurikuler Pilihan</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.02); height: 100%;">
                        <div style="padding: 30px;">
                            <div style="font-size: 24px; color: #0d6efd; margin-bottom: 15px;"><i class="ri-heart-pulse-line"></i></div>
                            <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 10px;">Bela Diri (Karate & Silat)</h4>
                            <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">Membentuk fisik yang kuat, disiplin mental, serta teknik pertahanan diri dasar bagi santri putra maupun putri.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.02); height: 100%;">
                        <div style="padding: 30px;">
                            <div style="font-size: 24px; color: #ffc107; margin-bottom: 15px;"><i class="ri-compass-line"></i></div>
                            <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 10px;">Kepramukaan & Outbound</h4>
                            <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">Melatih jiwa kepemimpinan, kerja sama kelompok, kemandirian alam terbuka, serta kepedulian sosial.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.02); height: 100%;">
                        <div style="padding: 30px;">
                            <div style="font-size: 24px; color: #198754; margin-bottom: 15px;"><i class="ri-code-s-slash-line"></i></div>
                            <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 10px;">Klub Sains & Robotik</h4>
                            <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">Mengembangkan penalaran logis, pengenalan coding dasar, serta perakitan sirkuit robotik sederhana.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
