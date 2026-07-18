<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Akademik - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Program Akademik Terpadu Yayasan Khalifah Latif Cendaka mencakup jenjang PAUD/TK, SD, SMP, dan SMA dengan kurikulum berstandar nasional dan keagamaan.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Program Akademik' : 'Academic Programs' ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Beranda' : 'Home' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;"><?= service('request')->getLocale() == 'id' ? 'Akademik' : 'Academics' ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Overlay overlay -->
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Academics Overview Start -->
    <section class="rs-about-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-title-wrapper">
                        <span class="section-subtitle has-theme-blue d-flex align-items-center gap-10" style="color: #0d6efd; font-weight: 600; text-transform: uppercase; font-size: 14px; margin-bottom: 15px;">
                            <i class="ri-book-open-line"></i> <?= service('request')->getLocale() == 'id' ? 'Kurikulum & Pembelajaran' : 'Curriculum & Instruction' ?>
                        </span>
                        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #08284e; line-height: 1.3; margin-bottom: 25px;"><?= service('request')->getLocale() == 'id' ? 'Mencetak Generasi Unggul Berkarakter Islami & Berwawasan Global' : 'Fostering Excellent Generations with Islamic Character & Global Vision' ?></h2>
                    </div>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                        <?= service('request')->getLocale() == 'id' 
                            ? 'Yayasan Khalifah Latif Cendaka menyelenggarakan pendidikan terpadu yang memadukan Kurikulum Nasional (Kurikulum Merdeka) dengan nilai-nilai Keislaman yang kokoh. Kami berkomitmen untuk mendidik siswa agar cerdas secara akademik, berakhlak mulia, serta siap menghadapi tantangan global.'
                            : 'Yayasan Khalifah Latif Cendaka implements an integrated education system that blends the National Curriculum (Kurikulum Merdeka) with strong Islamic values. We are committed to nurturing students who are academically excellent, noble in character, and ready to face global challenges.' ?>
                    </p>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 30px;">
                        <?= service('request')->getLocale() == 'id'
                            ? 'Setiap jenjang pendidikan didesain dengan program unggulan yang berfokus pada tahfidz Al-Qur\'an, bilingual (Bahasa Arab & Inggris), pembentukan karakter kepemimpinan, serta literasi sains & teknologi modern.'
                            : 'Every educational stage is designed with signature programs focusing on Al-Qur\'an tahfidz, bilingual studies (Arabic & English), leadership character building, and modern science & technology literacy.' ?>
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="rs-about-thumb" style="position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                        <img src="<?= base_url('images/gallery/gallery-thumb-01.webp') ?>" alt="Akademik Kami" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Academics Overview End -->

    <!-- Programs Grid Start -->
    <section class="rs-program-area section-space bg-primary" style="background-color: #f8f9fa !important; padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-title-wrapper text-center" style="margin-bottom: 50px;">
                        <span class="section-subtitle justify-content-center has-theme-blue d-flex align-items-center gap-10" style="color: #0d6efd; font-weight: 600; text-transform: uppercase; font-size: 14px; margin-bottom: 15px;">
                            <i class="ri-graduation-cap-line"></i> <?= service('request')->getLocale() == 'id' ? 'Jenjang Pendidikan' : 'Educational Levels' ?>
                        </span>
                        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #08284e;"><?= service('request')->getLocale() == 'id' ? 'Program Unggulan Kami' : 'Our Signature Programs' ?></h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <!-- TK -->
                <div class="col-xl-3 col-md-6">
                    <div class="program-card" style="background: #ffffff; padding: 40px 30px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); text-align: center; height: 100%; transition: all 0.3s ease;">
                        <div class="icon-box" style="width: 70px; height: 70px; background: rgba(13, 110, 253, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: #0d6efd; font-size: 30px;">
                            <i class="ri-open-arm-line"></i>
                        </div>
                        <h4 style="font-size: 20px; font-weight: 700; color: #08284e; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'PAUD / TK Islam' : 'Preschool / Kindergarten' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px;">
                            <?= service('request')->getLocale() == 'id' 
                                ? 'Pembelajaran berbasis bermain (Play-based learning) dengan pengenalan nilai agama, adab harian, hafalan surah pendek, doa, dan kreativitas motorik dasar.'
                                : 'Play-based learning with introduction to religious values, daily manners, short surah memorization, prayers, and basic motor creativity.' ?>
                        </p>
                    </div>
                </div>
                <!-- SD -->
                <div class="col-xl-3 col-md-6">
                    <div class="program-card" style="background: #ffffff; padding: 40px 30px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); text-align: center; height: 100%; transition: all 0.3s ease;">
                        <div class="icon-box" style="width: 70px; height: 70px; background: rgba(25, 135, 84, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: #198754; font-size: 30px;">
                            <i class="ri-book-3-line"></i>
                        </div>
                        <h4 style="font-size: 20px; font-weight: 700; color: #08284e; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'SD Islam Terpadu' : 'Integrated Islamic Elementary' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Pondasi dasar akademik kuat, tahfidz Al-Qur\'an minimal juz 30, program bilingual awal, literasi digital dasar, serta penanaman akhlak mulia.'
                                : 'Strong academic foundation, Al-Qur\'an memorization (minimum Juz 30), introductory bilingual program, basic digital literacy, and character building.' ?>
                        </p>
                    </div>
                </div>
                <!-- SMP -->
                <div class="col-xl-3 col-md-6">
                    <div class="program-card" style="background: #ffffff; padding: 40px 30px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); text-align: center; height: 100%; transition: all 0.3s ease;">
                        <div class="icon-box" style="width: 70px; height: 70px; background: rgba(253, 126, 20, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: #fd7e14; font-size: 30px;">
                            <i class="ri-microscope-line"></i>
                        </div>
                        <h4 style="font-size: 20px; font-weight: 700; color: #08284e; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'SMP Islam Terpadu' : 'Integrated Islamic Junior High' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Fokus pada sains, pembinaan kepemimpinan (LDKS), tahfidz intensif (target 3 juz), bahasa Inggris/Arab aktif, dan keikutsertaan kompetisi nasional.'
                                : 'Focus on science, leadership training, intensive tahfidz (target 3 Juz), active English/Arabic, and participation in national competitions.' ?>
                        </p>
                    </div>
                </div>
                <!-- SMA -->
                <div class="col-xl-3 col-md-6">
                    <div class="program-card" style="background: #ffffff; padding: 40px 30px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); text-align: center; height: 100%; transition: all 0.3s ease;">
                        <div class="icon-box" style="width: 70px; height: 70px; background: rgba(220, 53, 69, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: #dc3545; font-size: 30px;">
                            <i class="ri-global-line"></i>
                        </div>
                        <h4 style="font-size: 20px; font-weight: 700; color: #08284e; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'SMA Islam Terpadu' : 'Integrated Islamic Senior High' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Persiapan kuliah nasional & internasional, pembinaan riset ilmiah, tahfidz khusus (sanad / hafalan lanjut), bilingual & wirausaha pemula.'
                                : 'University prep, scientific research mentoring, advanced tahfidz (sanad pathway), bilingualism, and startup entrepreneurship.' ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Programs Grid End -->

    <!-- Core Pillars Start -->
    <section class="rs-pillars-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="section-title-wrapper">
                        <span class="section-subtitle has-theme-blue d-flex align-items-center gap-10" style="color: #0d6efd; font-weight: 600; text-transform: uppercase; font-size: 14px; margin-bottom: 15px;">
                            <i class="ri-star-line"></i> Keunggulan Akademik
                        </span>
                        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #08284e; margin-bottom: 25px;">Metode Pembelajaran Terintegrasi</h2>
                    </div>
                    <div class="pillar-items">
                        <div class="d-flex gap-20 mb-20">
                            <div class="num-box" style="font-size: 28px; font-weight: 700; color: #ffc107;">01.</div>
                            <div>
                                <h5 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 8px;">Pendidikan Adab & Akhlak</h5>
                                <p style="font-size: 15px; color: #666; line-height: 1.6;">Menempatkan adab di atas ilmu, dengan menanamkan kedisiplinan beribadah dan sikap sopan santun dalam keseharian.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-20 mb-20">
                            <div class="num-box" style="font-size: 28px; font-weight: 700; color: #ffc107;">02.</div>
                            <div>
                                <h5 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 8px;">Pembelajaran Bilingual Berkelanjutan</h5>
                                <p style="font-size: 15px; color: #666; line-height: 1.6;">Kurikulum bahasa asing komunikatif terapan yang digunakan dalam percakapan sehari-hari dan materi ajar tertentu.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-20">
                            <div class="num-box" style="font-size: 28px; font-weight: 700; color: #ffc107;">03.</div>
                            <div>
                                <h5 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 8px;">Infrastruktur Berbasis IT</h5>
                                <p style="font-size: 15px; color: #666; line-height: 1.6;">Ruang kelas digital interaktif (Smart Classrooms), laboratorium komputer terpadu, dan sistem manajemen belajar (LMS) modern.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="rs-pillars-thumb" style="position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                        <img src="<?= base_url('images/gallery/gallery-thumb-02.webp') ?>" alt="Metode Belajar" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Core Pillars End -->
<?= $this->endSection() ?>
