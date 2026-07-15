<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Program Pendidikan - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Daftar Program Pendidikan Terpadu di Yayasan Khalifah Latif Cendaka mulai dari PAUD/TK, SD, SMP, hingga SMA.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;">Program Pendidikan</h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;">Program Pendidikan</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Program Detail Section Start -->
    <section class="rs-program-detail-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="section-title-wrapper text-center" style="margin-bottom: 50px;">
                        <span class="section-subtitle justify-content-center has-theme-blue d-flex align-items-center gap-10" style="color: #0d6efd; font-weight: 600; text-transform: uppercase; font-size: 14px; margin-bottom: 15px;">
                            <i class="ri-graduation-cap-line"></i> Kurikulum Integratif
                        </span>
                        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #08284e;">Pilihan Jenjang Studi Terbaik</h2>
                        <p style="font-size: 16px; color: #666; line-height: 1.8; margin-top: 15px;">
                            Yayasan kami membina santri dan siswa melalui jenjang pendidikan formal yang terakreditasi dengan menyeimbangkan kurikulum Kementerian Pendidikan serta pembiasaan karakter keislaman yang kuat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- PAUD/TK -->
                <div class="col-lg-6">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-left: 5px solid #0d6efd; height: 100%;">
                        <div class="d-flex align-items-center gap-15 mb-20">
                            <div style="width: 60px; height: 60px; background: rgba(13, 110, 253, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #0d6efd; font-size: 24px;">
                                <i class="ri-heart-line"></i>
                            </div>
                            <h3 style="font-size: 22px; font-weight: 700; color: #08284e; margin: 0;">PAUD & TK Islam Terpadu</h3>
                        </div>
                        <p style="font-size: 15px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                            Fokus pada pembentukan motorik, sosialisasi, dan pengenalan adab Islam sejak dini. Kami menggunakan metode bermain sambil belajar yang menyenangkan bagi anak-anak.
                        </p>
                        <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin-bottom: 10px;">Program Unggulan:</h5>
                        <ul style="font-size: 14px; color: #555; line-height: 1.8; padding-left: 20px; margin: 0;">
                            <li>Hafalan doa harian & surah pendek (Juz Amma)</li>
                            <li>Pembelajaran sensorik-motorik terpadu</li>
                            <li>Pengenalan huruf hijaiyah dan kosakata dasar Inggris & Arab</li>
                        </ul>
                    </div>
                </div>

                <!-- SDIT -->
                <div class="col-lg-6">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-left: 5px solid #198754; height: 100%;">
                        <div class="d-flex align-items-center gap-15 mb-20">
                            <div style="width: 60px; height: 60px; background: rgba(25, 135, 84, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #198754; font-size: 24px;">
                                <i class="ri-book-3-line"></i>
                            </div>
                            <h3 style="font-size: 22px; font-weight: 700; color: #08284e; margin: 0;">SD Islam Terpadu</h3>
                        </div>
                        <p style="font-size: 15px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                            Membangun fondasi pengetahuan dasar, pemahaman agama secara bertahap, serta pembiasaan ibadah wajib dan sunnah sejak bangku sekolah dasar.
                        </p>
                        <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin-bottom: 10px;">Program Unggulan:</h5>
                        <ul style="font-size: 14px; color: #555; line-height: 1.8; padding-left: 20px; margin: 0;">
                            <li>Target Tahfidz minimal Juz 30 & Juz 29</li>
                            <li>Bilingual English & Arabic dasar</li>
                            <li>Ekstrakurikuler pramuka, panahan, & seni bela diri</li>
                        </ul>
                    </div>
                </div>

                <!-- SMPIT -->
                <div class="col-lg-6">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-left: 5px solid #fd7e14; height: 100%;">
                        <div class="d-flex align-items-center gap-15 mb-20">
                            <div style="width: 60px; height: 60px; background: rgba(253, 126, 20, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fd7e14; font-size: 24px;">
                                <i class="ri-palette-line"></i>
                            </div>
                            <h3 style="font-size: 22px; font-weight: 700; color: #08284e; margin: 0;">SMP Islam Terpadu</h3>
                        </div>
                        <p style="font-size: 15px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                            Mengembangkan keahlian berpikir kritis, sains terapan, kepemimpinan organisasi, serta pendalaman kajian agama Islam secara konseptual.
                        </p>
                        <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin-bottom: 10px;">Program Unggulan:</h5>
                        <ul style="font-size: 14px; color: #555; line-height: 1.8; padding-left: 20px; margin: 0;">
                            <li>Tahfidz Al-Qur'an intensif (target 3 juz)</li>
                            <li>Laboratorium komputer & praktek sains modern</li>
                            <li>Latihan Dasar Kepemimpinan & Pengabdian Masyarakat</li>
                        </ul>
                    </div>
                </div>

                <!-- SMAIT -->
                <div class="col-lg-6">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-left: 5px solid #dc3545; height: 100%;">
                        <div class="d-flex align-items-center gap-15 mb-20">
                            <div style="width: 60px; height: 60px; background: rgba(220, 53, 69, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #dc3545; font-size: 24px;">
                                <i class="ri-global-line"></i>
                            </div>
                            <h3 style="font-size: 22px; font-weight: 700; color: #08284e; margin: 0;">SMA Islam Terpadu</h3>
                        </div>
                        <p style="font-size: 15px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                            Mempersiapkan siswa didik memasuki jenjang perguruan tinggi negeri maupun swasta, baik nasional maupun internasional, dengan pembekalan riset ilmiah.
                        </p>
                        <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin-bottom: 10px;">Program Unggulan:</h5>
                        <ul style="font-size: 14px; color: #555; line-height: 1.8; padding-left: 20px; margin: 0;">
                            <li>Persiapan masuk PTN & PTKI unggulan</li>
                            <li>Bimbingan penulisan karya tulis ilmiah (Riset Mandiri)</li>
                            <li>Sertifikasi Tahfidz Qur'an hingga 5-10 juz</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="row justify-content-center" style="margin-top: 60px;">
                <div class="col-md-8 text-center">
                    <div style="background: #08284e; padding: 40px; border-radius: 10px; color: #ffffff;">
                        <h4 style="font-size: 24px; font-weight: 700; margin-bottom: 15px; color: #ffffff;">Ingin bergabung dengan Yayasan Khalifah Latif Cendaka?</h4>
                        <p style="font-size: 15px; color: #e0e0e0; line-height: 1.6; margin-bottom: 25px;">
                            Pendaftaran peserta didik baru (PPDB) telah dibuka untuk seluruh jenjang. Dapatkan penawaran beasiswa khusus.
                        </p>
                        <a href="<?= base_url('admission') ?>" class="rs-btn has-icon has-theme-yellow hover-white">
                            <span class="btn-text-wrap">
                                <span class="text-default">Daftar Sekarang</span>
                                <span class="text-hover">Daftar Sekarang</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Program Detail Section End -->
<?= $this->endSection() ?>
