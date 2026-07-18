<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?><?= service('request')->getLocale() == 'id' ? 'Jaringan Alumni - Yayasan Khalifah Latif Cendaka' : 'Alumni Network - Yayasan Khalifah Latif Cendaka' ?><?= $this->endSection() ?>

<?= $this->section('description') ?><?= service('request')->getLocale() == 'id' ? 'Jaringan komunikasi dan kolaborasi alumni Yayasan Khalifah Latif Cendaka yang tersebar di berbagai perguruan tinggi dan institusi nasional maupun internasional.' : 'Communication and collaboration network of Yayasan Khalifah Latif Cendaka alumni scattered across various national and international higher education institutions.' ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Jaringan Alumni' : 'Alumni Network' ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Beranda' : 'Home' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;"><?= service('request')->getLocale() == 'id' ? 'Alumni' : 'Alumni' ?></span></li>
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
                    <span style="font-size: 14px; font-weight: 700; color: #ffc107; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Ikatan Keluarga Alumni' : 'Alumni Association' ?></span>
                    <h2 style="font-size: 36px; font-weight: 700; color: #08284e; margin-bottom: 25px; line-height: 1.3;">
                        <?= service('request')->getLocale() == 'id' ? 'Menghubungkan Masa Lalu, Membangun Masa Depan' : 'Connecting the Past, Building the Future' ?>
                    </h2>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                        <?= service('request')->getLocale() == 'id'
                            ? 'Jaringan Alumni Yayasan Khalifah Latif Cendaka dibentuk sebagai wadah komunikasi, silaturahmi, dan kolaborasi bagi seluruh lulusan mulai dari jenjang PAUD, SDIT, SMPIT, hingga SMAIT. Kami bangga melihat para alumni tumbuh menjadi agen perubahan di tengah masyarakat.'
                            : 'The Alumni Network of Yayasan Khalifah Latif Cendaka was formed as a forum for communication, friendship, and collaboration for all graduates from PAUD, SDIT, SMPIT, to SMAIT. We are proud to see our alumni grow into agents of change in society.' ?>
                    </p>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 30px;">
                        <?= service('request')->getLocale() == 'id'
                            ? 'Melalui jaringan ini, alumni dapat berbagi peluang karier, informasi beasiswa perguruan tinggi, mentoring untuk adik kelas, serta bersinergi dalam berbagai program sosial dan pengabdian masyarakat.'
                            : 'Through this network, alumni can share career opportunities, college scholarship information, mentoring for juniors, and synergize in various social and community service programs.' ?>
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #08284e;">
                                <h3 style="font-size: 28px; font-weight: 700; color: #08284e; margin-bottom: 5px;">1.500+</h3>
                                <span style="font-size: 14px; color: #666; font-weight: 500;"><?= service('request')->getLocale() == 'id' ? 'Total Alumni Terdaftar' : 'Registered Alumni' ?></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107;">
                                <h3 style="font-size: 28px; font-weight: 700; color: #ffc107; margin-bottom: 5px;">95%</h3>
                                <span style="font-size: 14px; color: #666; font-weight: 500;"><?= service('request')->getLocale() == 'id' ? 'Melanjutkan ke PTN/Favorit' : 'Proceeding to Top Universities' ?></span>
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
                <span style="font-size: 14px; font-weight: 700; color: #ffc107; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Testimoni Alumni' : 'Alumni Testimonials' ?></span>
                <h2 style="font-size: 32px; font-weight: 700; color: #08284e;"><?= service('request')->getLocale() == 'id' ? 'Apa Kata Mereka Tentang Yayasan?' : 'What They Say About the Foundation' ?></h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.02); height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <p style="font-style: italic; color: #555; line-height: 1.8; font-size: 15px; margin-bottom: 25px;">
                            <?= service('request')->getLocale() == 'id'
                                ? '"Bimbingan akhlak dan disiplin menghafal Al-Qur\'an selama di SMPIT & SMAIT Khalifah Latif Cendaka menjadi fondasi terpenting dalam perjalanan akademis saya di luar negeri. Karakter mandiri yang ditanamkan guru-guru benar-benar terasa dampaknya."'
                                : '"The moral guidance and discipline of memorizing the Al-Qur\'an during SMPIT & SMAIT Khalifah Latif Cendaka became the most important foundation in my academic journey abroad. The independent character instilled by the teachers has really made an impact."' ?>
                        </p>
                        <div class="d-flex align-items-center gap-15">
                            <img src="<?= base_url('images/user/user-thumb-04.webp') ?>" alt="" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                            <div>
                                <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin: 0;">Ahmad Zaki, B.Sc.</h5>
                                <span style="font-size: 13px; color: #888;"><?= service('request')->getLocale() == 'id' ? 'Alumni SMAIT 2021 (Mahasiswa Al-Azhar, Kairo)' : 'Alumni SMAIT 2021 (Student at Al-Azhar University, Cairo)' ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.02); height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <p style="font-style: italic; color: #555; line-height: 1.8; font-size: 15px; margin-bottom: 25px;">
                            <?= service('request')->getLocale() == 'id'
                                ? '"Sistem pembelajaran riset sejak dini di sekolah membantu saya melatih pemikiran kritis dan analitis. Melalui jaringan alumni ini pula, saya merasa memiliki keluarga besar yang saling mendukung di manapun berada."'
                                : '"The early research learning system in school helped me practice critical and analytical thinking. Through this alumni network, I feel like I have a big family that supports each other wherever we are."' ?>
                        </p>
                        <div class="d-flex align-items-center gap-15">
                            <img src="<?= base_url('images/user/user-thumb-02.webp') ?>" alt="" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                            <div>
                                <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin: 0;">Sarah Humaira</h5>
                                <span style="font-size: 13px; color: #888;"><?= service('request')->getLocale() == 'id' ? 'Alumni SMAIT 2022 (Mahasiswi ITB, Bandung)' : 'Alumni SMAIT 2022 (Student at ITB, Bandung)' ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
