<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Jaringan Alumni - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Jaringan komunikasi dan kolaborasi alumni Yayasan Khalifah Latif Cendaka yang tersebar di berbagai perguruan tinggi dan institusi nasional maupun internasional.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;">Jaringan Alumni</h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;">Alumni</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Intro & Statistics -->
    <section class="section-space" style="padding: 80px 0; background: #ffffff;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span style="font-size: 14px; font-weight: 700; color: #ffc107; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;">Ikatan Keluarga Alumni</span>
                    <h2 style="font-size: 36px; font-weight: 700; color: #08284e; margin-bottom: 25px; line-height: 1.3;">Menghubungkan Masa Lalu, Membangun Masa Depan</h2>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                        Jaringan Alumni Yayasan Khalifah Latif Cendaka dibentuk sebagai wadah komunikasi, silaturahmi, dan kolaborasi bagi seluruh lulusan mulai dari jenjang PAUD, SDIT, SMPIT, hingga SMAIT. Kami bangga melihat para alumni tumbuh menjadi agen perubahan di tengah masyarakat.
                    </p>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 30px;">
                        Melalui jaringan ini, alumni dapat berbagi peluang karier, informasi beasiswa perguruan tinggi, mentoring untuk adik kelas, serta bersinergi dalam berbagai program sosial dan pengabdian masyarakat.
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #08284e;">
                                <h3 style="font-size: 28px; font-weight: 700; color: #08284e; margin-bottom: 5px;">1.500+</h3>
                                <span style="font-size: 14px; color: #666; font-weight: 500;">Total Alumni Terdaftar</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107;">
                                <h3 style="font-size: 28px; font-weight: 700; color: #ffc107; margin-bottom: 5px;">95%</h3>
                                <span style="font-size: 14px; color: #666; font-weight: 500;">Melanjutkan ke PTN/Favorit</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('images/gallery/gallery-thumb-04.webp') ?>" alt="Alumni Cendaka" style="width: 100%; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); object-fit: cover; height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section-space" style="padding: 80px 0; background: #f8f9fa;">
        <div class="container">
            <div class="text-center" style="max-width: 600px; margin: 0 auto 50px;">
                <span style="font-size: 14px; font-weight: 700; color: #ffc107; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;">Testimoni Alumni</span>
                <h2 style="font-size: 32px; font-weight: 700; color: #08284e;">Apa Kata Mereka Tentang Yayasan?</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.02); height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <p style="font-style: italic; color: #555; line-height: 1.8; font-size: 15px; margin-bottom: 25px;">
                            "Bimbingan akhlak dan disiplin menghafal Al-Qur'an selama di SMPIT & SMAIT Khalifah Latif Cendaka menjadi fondasi terpenting dalam perjalanan akademis saya di luar negeri. Karakter mandiri yang ditanamkan guru-guru benar-benar terasa dampaknya."
                        </p>
                        <div class="d-flex align-items-center gap-15">
                            <img src="<?= base_url('images/user/user-thumb-04.webp') ?>" alt="" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                            <div>
                                <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin: 0;">Ahmad Zaki, B.Sc.</h5>
                                <span style="font-size: 13px; color: #888;">Alumni SMAIT 2021 (Mahasiswa Al-Azhar, Kairo)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.02); height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <p style="font-style: italic; color: #555; line-height: 1.8; font-size: 15px; margin-bottom: 25px;">
                            "Sistem pembelajaran riset sejak dini di sekolah membantu saya melatih pemikiran kritis dan analitis. Melalui jaringan alumni ini pula, saya merasa memiliki keluarga besar yang saling mendukung di manapun berada."
                        </p>
                        <div class="d-flex align-items-center gap-15">
                            <img src="<?= base_url('images/user/user-thumb-02.webp') ?>" alt="" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                            <div>
                                <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin: 0;">Sarah Humaira</h5>
                                <span style="font-size: 13px; color: #888;">Alumni SMAIT 2022 (Mahasiswi ITB, Bandung)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
