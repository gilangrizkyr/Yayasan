<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Agenda Kegiatan - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Jadwal agenda kegiatan, tabligh akbar, seminar pendidikan, pentas seni, dan bakti sosial Yayasan Khalifah Latif Cendaka.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;">Agenda Kegiatan</h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;">Agenda Kegiatan</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Events List Section -->
    <section class="section-space" style="padding: 80px 0; background: #ffffff;">
        <div class="container">
            <div class="text-center" style="max-width: 600px; margin: 0 auto 50px;">
                <span style="font-size: 14px; font-weight: 700; color: #ffc107; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;">Kalender Akademik & Sosial</span>
                <h2 style="font-size: 32px; font-weight: 700; color: #08284e;">Jadwal Kegiatan Mendatang</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Event 1 -->
                <div class="col-lg-10">
                    <div style="background: #ffffff; border: 1px solid #eee; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.02); display: flex; flex-wrap: wrap;">
                        <div style="background: #08284e; color: #ffffff; padding: 40px; text-center; display: flex; flex-direction: column; align-items: center; justify-content: center; min-width: 180px;" class="text-center">
                            <span style="font-size: 36px; font-weight: 700; line-height: 1; display: block; margin-bottom: 5px;">20</span>
                            <span style="font-size: 14px; text-transform: uppercase; font-weight: 600; letter-spacing: 1px;">Juli 2026</span>
                        </div>
                        <div style="padding: 30px; flex-grow: 1; flex-basis: 300px; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <span style="background: #e8f0fe; color: #0d6efd; font-size: 12px; font-weight: 600; padding: 4px 10px; border-radius: 4px; display: inline-block; margin-bottom: 12px; text-transform: uppercase;">Pendaftaran</span>
                                <h4 style="font-size: 20px; font-weight: 700; color: #08284e; margin-bottom: 10px;">Penerimaan & Orientasi Santri Baru (PPDB) T.A. 2026/2027</h4>
                                <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 15px;"><i class="ri-map-pin-line" style="color: #ffc107;"></i> Aula Utama Kampus Yayasan Khalifah Latif Cendaka | <i class="ri-time-line" style="color: #ffc107;"></i> 08.00 - 12.00 WIB</p>
                            </div>
                            <p style="font-size: 14px; color: #555; line-height: 1.6; margin: 0;">Penerimaan resmi dan masa pengenalan lingkungan sekolah (MPLS) bagi seluruh santri dan siswa baru tingkat TKIT, SDIT, SMPIT, dan SMAIT.</p>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="col-lg-10">
                    <div style="background: #ffffff; border: 1px solid #eee; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.02); display: flex; flex-wrap: wrap;">
                        <div style="background: #ffc107; color: #08284e; padding: 40px; text-center; display: flex; flex-direction: column; align-items: center; justify-content: center; min-width: 180px;" class="text-center">
                            <span style="font-size: 36px; font-weight: 700; line-height: 1; display: block; margin-bottom: 5px;">15</span>
                            <span style="font-size: 14px; text-transform: uppercase; font-weight: 600; letter-spacing: 1px;">Agustus 2026</span>
                        </div>
                        <div style="padding: 30px; flex-grow: 1; flex-basis: 300px; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <span style="background: #fff3cd; color: #856404; font-size: 12px; font-weight: 600; padding: 4px 10px; border-radius: 4px; display: inline-block; margin-bottom: 12px; text-transform: uppercase;">Tabligh Akbar</span>
                                <h4 style="font-size: 20px; font-weight: 700; color: #08284e; margin-bottom: 10px;">Tabligh Akbar & Doa Bersama Menyambut Hari Kemerdekaan RI</h4>
                                <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 15px;"><i class="ri-map-pin-line" style="color: #ffc107;"></i> Masjid Jamie Khalifah Latif Cendaka | <i class="ri-time-line" style="color: #ffc107;"></i> 19.30 WIB - Selesai</p>
                            </div>
                            <p style="font-size: 14px; color: #555; line-height: 1.6; margin: 0;">Kajian umum kebangsaan bersama asatidzah dan tokoh masyarakat, dilanjutkan dengan doa bersama demi keselamatan bangsa dan negara.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
