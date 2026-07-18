<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?><?= service('request')->getLocale() == 'id' ? 'Program Pendidikan - Yayasan Khalifah Latif Cendaka' : 'Educational Programs - Yayasan Khalifah Latif Cendaka' ?><?= $this->endSection() ?>

<?= $this->section('description') ?><?= service('request')->getLocale() == 'id' ? 'Daftar Program Pendidikan Terpadu di Yayasan Khalifah Latif Cendaka mulai dari PAUD/TK, SD, SMP, hingga SMA.' : 'List of Integrated Educational Programs at Yayasan Khalifah Latif Cendaka ranging from PAUD/TK, SD, SMP, to SMA.' ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Program Pendidikan' : 'Educational Programs' ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Beranda' : 'Home' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;"><?= service('request')->getLocale() == 'id' ? 'Program Pendidikan' : 'Programs' ?></span></li>
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
                            <i class="ri-graduation-cap-line"></i> <?= service('request')->getLocale() == 'id' ? 'Kurikulum Integratif' : 'Integrative Curriculum' ?>
                        </span>
                        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #08284e;"><?= service('request')->getLocale() == 'id' ? 'Pilihan Jenjang Studi Terbaik' : 'Best Choice of Educational Stages' ?></h2>
                        <p style="font-size: 16px; color: #666; line-height: 1.8; margin-top: 15px;">
                            <?= service('request')->getLocale() == 'id' 
                                ? 'Yayasan kami membina santri dan siswa melalui jenjang pendidikan formal yang terakreditasi dengan menyeimbangkan kurikulum Kementerian Pendidikan serta pembiasaan karakter keislaman yang kuat.'
                                : 'Our foundation nurtures students through accredited formal education, balancing the Ministry of Education curriculum with a strong inculcation of Islamic character.' ?>
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
                            <h3 style="font-size: 22px; font-weight: 700; color: #08284e; margin: 0;"><?= service('request')->getLocale() == 'id' ? 'PAUD & TK Islam Terpadu' : 'Preschool & Kindergarten' ?></h3>
                        </div>
                        <p style="font-size: 15px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Fokus pada pembentukan motorik, sosialisasi, dan pengenalan adab Islam sejak dini. Kami menggunakan metode bermain sambil belajar yang menyenangkan bagi anak-anak.'
                                : 'Focuses on motor development, socialization, and early introduction of Islamic manners. We use fun play-based learning methods for children.' ?>
                        </p>
                        <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Program Unggulan:' : 'Signature Programs:' ?></h5>
                        <ul style="font-size: 14px; color: #555; line-height: 1.8; padding-left: 20px; margin: 0;">
                            <?php if (service('request')->getLocale() == 'id'): ?>
                                <li>Hafalan doa harian & surah pendek (Juz Amma)</li>
                                <li>Pembelajaran sensorik-motorik terpadu</li>
                                <li>Pengenalan huruf hijaiyah dan kosakata dasar Inggris & Arab</li>
                            <?php else: ?>
                                <li>Memorization of daily prayers & short surahs (Juz Amma)</li>
                                <li>Integrated sensory-motor learning</li>
                                <li>Introduction of Hijaiyah letters and basic English & Arabic vocabulary</li>
                            <?php endif; ?>
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
                            <h3 style="font-size: 22px; font-weight: 700; color: #08284e; margin: 0;"><?= service('request')->getLocale() == 'id' ? 'SD Islam Terpadu' : 'Integrated Islamic Elementary' ?></h3>
                        </div>
                        <p style="font-size: 15px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Membangun fondasi pengetahuan dasar, pemahaman agama secara bertahap, serta pembiasaan ibadah wajib dan sunnah sejak bangku sekolah dasar.'
                                : 'Builds basic academic knowledge, gradual understanding of religion, and daily habits of compulsory and voluntary prayers from elementary level.' ?>
                        </p>
                        <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Program Unggulan:' : 'Signature Programs:' ?></h5>
                        <ul style="font-size: 14px; color: #555; line-height: 1.8; padding-left: 20px; margin: 0;">
                            <?php if (service('request')->getLocale() == 'id'): ?>
                                <li>Target Tahfidz minimal Juz 30 & Juz 29</li>
                                <li>Bilingual English & Arabic dasar</li>
                                <li>Ekstrakurikuler pramuka, panahan, & seni bela diri</li>
                            <?php else: ?>
                                <li>Tahfidz target of minimum Juz 30 & Juz 29</li>
                                <li>Basic bilingual English & Arabic</li>
                                <li>Extracurriculars: scouts, archery, & martial arts</li>
                            <?php endif; ?>
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
                            <h3 style="font-size: 22px; font-weight: 700; color: #08284e; margin: 0;"><?= service('request')->getLocale() == 'id' ? 'SMP Islam Terpadu' : 'Integrated Islamic Junior High' ?></h3>
                        </div>
                        <p style="font-size: 15px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Mengembangkan keahlian berpikir kritis, sains terapan, kepemimpinan organisasi, serta pendalaman kajian agama Islam secara konseptual.'
                                : 'Develops critical thinking skills, applied sciences, organizational leadership, and conceptual understanding of Islamic studies.' ?>
                        </p>
                        <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Program Unggulan:' : 'Signature Programs:' ?></h5>
                        <ul style="font-size: 14px; color: #555; line-height: 1.8; padding-left: 20px; margin: 0;">
                            <?php if (service('request')->getLocale() == 'id'): ?>
                                <li>Tahfidz Al-Qur'an intensif (target 3 juz)</li>
                                <li>Laboratorium komputer & praktek sains modern</li>
                                <li>Latihan Dasar Kepemimpinan & Pengabdian Masyarakat</li>
                            <?php else: ?>
                                <li>Intensive Al-Qur'an memorization (target 3 Juz)</li>
                                <li>Computer labs & modern science practices</li>
                                <li>Basic Leadership Training & Community Service</li>
                            <?php endif; ?>
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
                            <h3 style="font-size: 22px; font-weight: 700; color: #08284e; margin: 0;"><?= service('request')->getLocale() == 'id' ? 'SMA Islam Terpadu' : 'Integrated Islamic Senior High' ?></h3>
                        </div>
                        <p style="font-size: 15px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Mempersiapkan siswa didik memasuki jenjang perguruan tinggi negeri maupun swasta, baik nasional maupun internasional, dengan pembekalan riset ilmiah.'
                                : 'Prepares students to enter state or private universities, both nationally and internationally, equipped with scientific research skills.' ?>
                        </p>
                        <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Program Unggulan:' : 'Signature Programs:' ?></h5>
                        <ul style="font-size: 14px; color: #555; line-height: 1.8; padding-left: 20px; margin: 0;">
                            <?php if (service('request')->getLocale() == 'id'): ?>
                                <li>Persiapan masuk PTN & PTKI unggulan</li>
                                <li>Bimbingan penulisan karya tulis ilmiah (Riset Mandiri)</li>
                                <li>Sertifikasi Tahfidz Qur'an hingga 5-10 juz</li>
                            <?php else: ?>
                                <li>Top state & Islamic university entrance preparation</li>
                                <li>Scientific paper writing guidance (Independent Research)</li>
                                <li>Al-Qur'an Tahfidz certification up to 5-10 Juz</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Extracurriculars Dynamic Section -->
            <div style="margin-top: 80px;">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="section-title-wrapper text-center" style="margin-bottom: 40px;">
                            <h3 style="font-size: 28px; font-weight: 700; color: #08284e;">
                                <?= service('request')->getLocale() == 'id' ? 'Program Ekstrakurikuler' : 'Extracurricular Activities' ?>
                            </h3>
                            <p style="font-size: 15px; color: #666; margin-top: 10px;">
                                <?= service('request')->getLocale() == 'id'
                                    ? 'Mengembangkan potensi minat, bakat, kepemimpinan, dan kemandirian siswa di luar jam KBM akademis.'
                                    : 'Developing students\' potential, interest, talent, leadership, and independence outside active academic classes.' ?>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4 justify-content-center">
                    <?php if (!empty($extracurriculars)): ?>
                        <?php foreach ($extracurriculars as $ex): ?>
                            <div class="col-lg-3 col-md-6">
                                <div style="background: #ffffff; border-radius: 8px; border: 1px solid #eee; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.02); text-align: center; height: 100%;">
                                    <div style="height: 140px; background: rgba(8, 40, 78, 0.05); display: flex; align-items: center; justify-content: center; font-size: 48px; color: #08284e;">
                                        <i class="<?= esc($ex->icon ?: 'ri-star-line') ?>"></i>
                                    </div>
                                    <div style="padding: 20px;">
                                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 10px;"><?= esc(lang_field($ex, 'title')) ?></h4>
                                        <p style="font-size: 13px; color: #666; line-height: 1.5; margin: 0;"><?= esc(lang_field($ex, 'description')) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12 text-center">
                            <p style="color: #999;"><?= service('request')->getLocale() == 'id' ? 'Tidak ada data ekstrakurikuler.' : 'No extracurricular activities data.' ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="row justify-content-center" style="margin-top: 60px;">
                <div class="col-md-8 text-center">
                    <div style="background: #08284e; padding: 40px; border-radius: 10px; color: #ffffff;">
                        <h4 style="font-size: 24px; font-weight: 700; margin-bottom: 15px; color: #ffffff;">
                            <?= service('request')->getLocale() == 'id' ? 'Ingin bergabung dengan Yayasan Khalifah Latif Cendaka?' : 'Want to join Yayasan Khalifah Latif Cendaka?' ?>
                        </h4>
                        <p style="font-size: 15px; color: #e0e0e0; line-height: 1.6; margin-bottom: 25px;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Pendaftaran peserta didik baru (PPDB) telah dibuka untuk seluruh jenjang. Dapatkan penawaran beasiswa khusus.'
                                : 'New student admission (PPDB) is now open for all educational stages. Ask about special scholarship plans.' ?>
                        </p>
                        <a href="<?= base_url('admission') ?>" class="rs-btn has-icon has-theme-yellow hover-white">
                            <span class="btn-text-wrap">
                                <span class="text-default"><?= service('request')->getLocale() == 'id' ? 'Daftar Sekarang' : 'Apply Now' ?></span>
                                <span class="text-default"><?= service('request')->getLocale() == 'id' ? 'Daftar Sekarang' : 'Apply Now' ?></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Program Detail Section End -->
<?= $this->endSection() ?>
