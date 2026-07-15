<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Tenaga Pengajar - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Daftar Ustadz, Ustadzah, Guru, dan Staf Pendidik Profesional di Yayasan Khalifah Latif Cendaka Palembang.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;">Tenaga Pengajar</h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;">Tenaga Pengajar</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Teachers Section Start -->
    <section class="rs-teachers-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="section-title-wrapper text-center" style="margin-bottom: 50px;">
                        <span class="section-subtitle justify-content-center has-theme-blue d-flex align-items-center gap-10" style="color: #0d6efd; font-weight: 600; text-transform: uppercase; font-size: 14px; margin-bottom: 15px;">
                            <i class="ri-team-line"></i> Asatidzah & Pendidik
                        </span>
                        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #08284e;">Mengenal Tenaga Pendidik Kami</h2>
                        <p style="font-size: 16px; color: #666; line-height: 1.8; margin-top: 15px;">
                            Didukung oleh para ustadz, ustadzah, serta guru profesional lulusan perguruan tinggi ternama dalam dan luar negeri yang kompeten di bidangnya.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Teacher 1 -->
                <div class="col-xl-3 col-md-6">
                    <div style="background: #ffffff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); overflow: hidden; height: 100%; text-align: center; border: 1px solid #eee;">
                        <div style="height: 250px; background: #e9ecef; display: flex; align-items: center; justify-content: center; font-size: 64px; color: #adb5bd;">
                            <i class="ri-user-2-line"></i>
                        </div>
                        <div style="padding: 25px;">
                            <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 5px;">KH. Abdul Latif, Lc.</h4>
                            <span style="font-size: 14px; color: #0d6efd; font-weight: 500;">Ketua Dewan Pembina</span>
                            <hr style="margin: 15px 0; border-color: #eee;">
                            <p style="font-size: 13px; color: #777; line-height: 1.5; margin: 0;">
                                Lulusan Universitas Islam Madinah, membina keislaman dan arah kebijakan kurikulum pesantren.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Teacher 2 -->
                <div class="col-xl-3 col-md-6">
                    <div style="background: #ffffff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); overflow: hidden; height: 100%; text-align: center; border: 1px solid #eee;">
                        <div style="height: 250px; background: #e9ecef; display: flex; align-items: center; justify-content: center; font-size: 64px; color: #adb5bd;">
                            <i class="ri-user-3-line"></i>
                        </div>
                        <div style="padding: 25px;">
                            <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 5px;">Dr. H. Ahmad Dahlan, M.Pd.</h4>
                            <span style="font-size: 14px; color: #0d6efd; font-weight: 500;">Kepala Sekolah / Direktur Pendidikan</span>
                            <hr style="margin: 15px 0; border-color: #eee;">
                            <p style="font-size: 13px; color: #777; line-height: 1.5; margin: 0;">
                                Doktor Manajemen Pendidikan, memimpin operasional akademis dan standarisasi mutu guru.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Teacher 3 -->
                <div class="col-xl-3 col-md-6">
                    <div style="background: #ffffff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); overflow: hidden; height: 100%; text-align: center; border: 1px solid #eee;">
                        <div style="height: 250px; background: #e9ecef; display: flex; align-items: center; justify-content: center; font-size: 64px; color: #adb5bd;">
                            <i class="ri-user-4-line"></i>
                        </div>
                        <div style="padding: 25px;">
                            <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 5px;">Ustadzah Fatimah Azzahra, S.Pd.I.</h4>
                            <span style="font-size: 14px; color: #0d6efd; font-weight: 500;">Koordinator Tahfidz Al-Qur'an</span>
                            <hr style="margin: 15px 0; border-color: #eee;">
                            <p style="font-size: 13px; color: #777; line-height: 1.5; margin: 0;">
                                Pemegang sanad hafalan 30 Juz, membimbing program tahfidz intensif harian siswa.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Teacher 4 -->
                <div class="col-xl-3 col-md-6">
                    <div style="background: #ffffff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); overflow: hidden; height: 100%; text-align: center; border: 1px solid #eee;">
                        <div style="height: 250px; background: #e9ecef; display: flex; align-items: center; justify-content: center; font-size: 64px; color: #adb5bd;">
                            <i class="ri-user-2-line"></i>
                        </div>
                        <div style="padding: 25px;">
                            <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 5px;">Ustadz Muhammad Rizky, M.Sc.</h4>
                            <span style="font-size: 14px; color: #0d6efd; font-weight: 500;">Guru Bidang Studi Sains</span>
                            <hr style="margin: 15px 0; border-color: #eee;">
                            <p style="font-size: 13px; color: #777; line-height: 1.5; margin: 0;">
                                Lulusan Magister MIPA, berfokus pada integrasi ilmu sains modern dengan konsep tauhid.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Teachers Section End -->
<?= $this->endSection() ?>
