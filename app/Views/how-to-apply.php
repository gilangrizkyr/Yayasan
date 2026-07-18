<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?><?= service('request')->getLocale() == 'id' ? 'Cara Mendaftar - Yayasan Khalifah Latif Cendaka' : 'How to Apply - Yayasan Khalifah Latif Cendaka' ?><?= $this->endSection() ?>

<?= $this->section('description') ?><?= service('request')->getLocale() == 'id' ? 'Panduan lengkap alur pendaftaran peserta didik baru (PPDB) di Yayasan Khalifah Latif Cendaka.' : 'Complete guide to new student admission (PPDB) workflow at Yayasan Khalifah Latif Cendaka.' ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Cara Mendaftar' : 'How to Apply' ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Beranda' : 'Home' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;"><?= service('request')->getLocale() == 'id' ? 'Cara Mendaftar' : 'How to Apply' ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- How to Apply Section Start -->
    <section class="rs-how-to-apply-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="section-title-wrapper text-center" style="margin-bottom: 50px;">
                        <span class="section-subtitle justify-content-center has-theme-blue d-flex align-items-center gap-10" style="color: #0d6efd; font-weight: 600; text-transform: uppercase; font-size: 14px; margin-bottom: 15px;">
                            <i class="ri-direction-line"></i> <?= service('request')->getLocale() == 'id' ? 'Alur PPDB' : 'PPDB Workflow' ?>
                        </span>
                        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #08284e;"><?= service('request')->getLocale() == 'id' ? 'Tahapan Pendaftaran Peserta Didik Baru' : 'Admission Stages for New Students' ?></h2>
                        <p style="font-size: 16px; color: #666; line-height: 1.8; margin-top: 15px;">
                            <?= service('request')->getLocale() == 'id' 
                                ? 'Ikuti 4 langkah mudah berikut untuk melakukan pendaftaran putra-putri Anda di Yayasan Khalifah Latif Cendaka.'
                                : 'Follow these 4 simple steps to register your children at Yayasan Khalifah Latif Cendaka.' ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-lg-3 col-md-6">
                    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.03); border: 1px solid #eee; text-align: center; height: 100%;">
                        <div style="width: 50px; height: 50px; background: #0d6efd; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; font-weight: 700; margin: 0 auto 20px;">
                            1
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Isi Formulir' : 'Fill Form' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Lakukan pengisian data awal secara online melalui halaman pendaftaran atau langsung menghubungi panitia PPDB kami.'
                                : 'Complete the initial registration details online via the enrollment page or contact our PPDB admission team directly.' ?>
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-3 col-md-6">
                    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.03); border: 1px solid #eee; text-align: center; height: 100%;">
                        <div style="width: 50px; height: 50px; background: #198754; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; font-weight: 700; margin: 0 auto 20px;">
                            2
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Tes Seleksi' : 'Selection Test' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Calon siswa mengikuti tes pemetaan (akademik dasar & membaca Al-Qur\'an) serta wawancara komitmen orang tua murid.'
                                : 'Applicants take a basic potential assessment (basic academics & Al-Qur\'an reading) and parent commitment interview.' ?>
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-3 col-md-6">
                    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.03); border: 1px solid #eee; text-align: center; height: 100%;">
                        <div style="width: 50px; height: 50px; background: #fd7e14; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; font-weight: 700; margin: 0 auto 20px;">
                            3
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Hasil Pengumuman' : 'Announcement' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Kelulusan seleksi akan diumumkan melalui portal PPDB online ini atau dikirimkan langsung ke nomor WhatsApp terdaftar.'
                                : 'Selection results will be announced through this online portal or sent directly to registered WhatsApp numbers.' ?>
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-lg-3 col-md-6">
                    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.03); border: 1px solid #eee; text-align: center; height: 100%;">
                        <div style="width: 50px; height: 50px; background: #dc3545; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; font-weight: 700; margin: 0 auto 20px;">
                            4
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Daftar Ulang' : 'Enrollment' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Menyerahkan dokumen fisik persyaratan pendaftaran dan menyelesaikan administrasi keuangan untuk mendapatkan seragam sekolah.'
                                : 'Submit required documents physically and complete financial administration to receive school uniforms.' ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Documents Requirement -->
            <div class="row justify-content-center" style="margin-top: 60px;">
                <div class="col-lg-8">
                    <div style="background: #f8f9fa; padding: 40px; border-radius: 10px; border: 1px solid #e9ecef;">
                        <h4 style="font-size: 22px; font-weight: 700; color: #08284e; margin-bottom: 20px; text-align: center;">
                            <?= service('request')->getLocale() == 'id' ? 'Berkas Persyaratan yang Perlu Disiapkan:' : 'Required Documents to Prepare:' ?>
                        </h4>
                        <ul style="font-size: 15px; color: #555; line-height: 2; padding-left: 20px; margin: 0;">
                            <?php if (service('request')->getLocale() == 'id'): ?>
                                <li>Fotokopi Akta Kelahiran Calon Siswa (2 Lembar)</li>
                                <li>Fotokopi Kartu Keluarga / KK terbaru (2 Lembar)</li>
                                <li>Fotokopi KTP kedua Orang Tua / Wali</li>
                                <li>Pasfoto berwarna ukuran 3x4 (4 Lembar)</li>
                                <li>Fotokopi Rapor jenjang sebelumnya / Surat Keterangan Lulus (SKL)</li>
                            <?php else: ?>
                                <li>Copy of Birth Certificate of applicant (2 copies)</li>
                                <li>Copy of recent Family Card / KK (2 copies)</li>
                                <li>Copy of ID Card (KTP) of both parents / guardian</li>
                                <li>Recent color photos sized 3x4 (4 copies)</li>
                                <li>Copy of latest school report / Graduation Letter (SKL)</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How to Apply Section End -->
<?= $this->endSection() ?>
