<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Pendaftaran - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Informasi alur pendaftaran, persyaratan berkas, dan biaya pendidikan di Yayasan Khalifah Latif Cendaka.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;">Pendaftaran Siswa Baru</h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;">Pendaftaran</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>

    <!-- Admission Steps & Info -->
    <section class="rs-admission-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title-wrapper text-center mb-50">
                        <span class="section-subtitle justify-content-center has-theme-blue d-flex align-items-center gap-10" style="color: #0d6efd; font-weight: 600; text-transform: uppercase; font-size: 14px; margin-bottom: 15px;">
                            <i class="ri-send-plane-line"></i> PSB Online
                        </span>
                        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #08284e;">Alur & Syarat Pendaftaran</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Requirements -->
                <div class="col-lg-6">
                    <h3 style="font-size: 24px; font-weight: 700; color: #08284e; margin-bottom: 25px; border-left: 4px solid #ffc107; padding-left: 15px;">Syarat Dokumen</h3>
                    <ul style="list-style: none; padding: 0; font-size: 16px; color: #666; line-height: 1.8;">
                        <li style="margin-bottom: 15px;" class="d-flex align-items-start gap-10">
                            <span style="color: #198754; font-size: 20px;"><i class="ri-checkbox-circle-fill"></i></span>
                            <span>Mengisi Formulir Pendaftaran Online/Offline secara lengkap.</span>
                        </li>
                        <li style="margin-bottom: 15px;" class="d-flex align-items-start gap-10">
                            <span style="color: #198754; font-size: 20px;"><i class="ri-checkbox-circle-fill"></i></span>
                            <span>Fotokopi Akta Kelahiran & Kartu Keluarga (KK) (3 Lembar).</span>
                        </li>
                        <li style="margin-bottom: 15px;" class="d-flex align-items-start gap-10">
                            <span style="color: #198754; font-size: 20px;"><i class="ri-checkbox-circle-fill"></i></span>
                            <span>Fotokopi Ijazah / Rapor Kelas Terakhir (Bagi siswa pindahan).</span>
                        </li>
                        <li style="margin-bottom: 15px;" class="d-flex align-items-start gap-10">
                            <span style="color: #198754; font-size: 20px;"><i class="ri-checkbox-circle-fill"></i></span>
                            <span>Pasfoto ukuran 3x4 berwarna terbaru (4 Lembar).</span>
                        </li>
                        <li class="d-flex align-items-start gap-10">
                            <span style="color: #198754; font-size: 20px;"><i class="ri-checkbox-circle-fill"></i></span>
                            <span>Surat Keterangan Berkelakuan Baik dari sekolah asal.</span>
                        </li>
                    </ul>
                </div>

                <!-- Registration Steps -->
                <div class="col-lg-6">
                    <h3 style="font-size: 24px; font-weight: 700; color: #08284e; margin-bottom: 25px; border-left: 4px solid #0d6efd; padding-left: 15px;">Tahapan Pendaftaran</h3>
                    <div style="position: relative; border-left: 2px dashed #ccc; padding-left: 30px; margin-left: 10px;">
                        <div style="margin-bottom: 30px; position: relative;">
                            <span style="position: absolute; left: -41px; top: 0; width: 22px; height: 22px; background: #0d6efd; border-radius: 50%; display: block; border: 4px solid #fff;"></span>
                            <h5 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 5px;">Langkah 1: Isi Formulir</h5>
                            <p style="font-size: 14px; color: #666;">Isi formulir pendaftaran daring melalui portal resmi kami atau datang langsung ke sekretariat yayasan.</p>
                        </div>
                        <div style="margin-bottom: 30px; position: relative;">
                            <span style="position: absolute; left: -41px; top: 0; width: 22px; height: 22px; background: #fd7e14; border-radius: 50%; display: block; border: 4px solid #fff;"></span>
                            <h5 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 5px;">Langkah 2: Verifikasi & Uji Kompetensi</h5>
                            <p style="font-size: 14px; color: #666;">Mengikuti ujian pemetaan potensi akademik, wawancara keagamaan, serta pembacaan Al-Qur'an.</p>
                        </div>
                        <div style="position: relative;">
                            <span style="position: absolute; left: -41px; top: 0; width: 22px; height: 22px; background: #198754; border-radius: 50%; display: block; border: 4px solid #fff;"></span>
                            <h5 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 5px;">Langkah 3: Daftar Ulang</h5>
                            <p style="font-size: 14px; color: #666;">Pemberitahuan kelulusan dikirim via SMS/WhatsApp, dilanjutkan dengan proses administrasi daftar ulang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
