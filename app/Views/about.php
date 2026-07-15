<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Tentang Kami - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Mengenal lebih dekat visi, misi, sejarah, dan nilai-nilai luhur Yayasan Khalifah Latif Cendaka Palembang.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;">Tentang Kami</h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;">Tentang Kami</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>

    <!-- History / Profile -->
    <section class="rs-about-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-title-wrapper">
                        <span class="section-subtitle has-theme-blue d-flex align-items-center gap-10" style="color: #0d6efd; font-weight: 600; text-transform: uppercase; font-size: 14px; margin-bottom: 15px;">
                            <i class="ri-history-line"></i> Profil & Sejarah
                        </span>
                        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #08284e; line-height: 1.3; margin-bottom: 25px;">Sejarah Singkat Pendirian Yayasan</h2>
                    </div>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                        Yayasan Khalifah Latif Cendaka didirikan dengan cita-cita luhur untuk menyediakan sistem pendidikan Islam yang modern, inklusif, dan berorientasi pada masa depan. Sejak awal berdirinya, yayasan ini berkomitmen menjembatani kurikulum pendidikan umum dengan penanaman nilai keagamaan yang intensif.
                    </p>
                    <p style="font-size: 16px; color: #666; line-height: 1.8;">
                        Dengan fasilitas yang memadai dan tenaga pengajar profesional, kami terus berkembang membina ratusan santri dan siswa dari jenjang anak usia dini hingga tingkat menengah atas, melahirkan lulusan berkarakter tangguh yang siap berkontribusi bagi bangsa.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('images/gallery/gallery-thumb-03.webp') ?>" alt="Sejarah Yayasan" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.05);">
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section class="rs-vision-area section-space bg-primary" style="background-color: #f8f9fa !important; padding: 80px 0;">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); height: 100%;">
                        <div style="font-size: 36px; color: #ffc107; margin-bottom: 20px;"><i class="ri-eye-line"></i></div>
                        <h3 style="font-size: 24px; font-weight: 700; color: #08284e; margin-bottom: 15px;">Visi Kami</h3>
                        <p style="font-size: 16px; color: #666; line-height: 1.8;">
                            Menjadi pusat lembaga pendidikan Islam terpadu yang unggul, tepercaya, dan bertaraf internasional dalam melahirkan generasi rabbani yang cerdas secara intelektual, matang secara spiritual, serta aktif dalam sains dan teknologi.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); height: 100%;">
                        <div style="font-size: 36px; color: #0d6efd; margin-bottom: 20px;"><i class="ri-compass-line"></i></div>
                        <h3 style="font-size: 24px; font-weight: 700; color: #08284e; margin-bottom: 15px;">Misi Kami</h3>
                        <ul style="font-size: 16px; color: #666; line-height: 1.8; padding-left: 20px; margin: 0;">
                            <li style="margin-bottom: 10px;">Menyelenggarakan pendidikan formal berbasis Islam terpadu yang berkualitas tinggi.</li>
                            <li style="margin-bottom: 10px;">Membina karakter kepemimpinan berlandaskan akhlak mulia dan kedisiplinan.</li>
                            <li style="margin-bottom: 10px;">Mengembangkan potensi minat, bakat, sains, dan teknologi secara inovatif.</li>
                            <li>Membangun kemitraan strategis dengan orang tua, alumni, dan masyarakat luas.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
