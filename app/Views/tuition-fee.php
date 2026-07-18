<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?><?= service('request')->getLocale() == 'id' ? 'Biaya Pendidikan - Yayasan Khalifah Latif Cendaka' : 'Tuition Fees - Yayasan Khalifah Latif Cendaka' ?><?= $this->endSection() ?>

<?= $this->section('description') ?><?= service('request')->getLocale() == 'id' ? 'Rincian biaya pendaftaran, uang pangkal, SPP bulanan, dan biaya pendidikan terpadu di Yayasan Khalifah Latif Cendaka.' : 'Details of registration fees, tuition development fees, monthly school fees, and integrated educational fees at Yayasan Khalifah Latif Cendaka.' ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Biaya Pendidikan' : 'Tuition Fees' ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Beranda' : 'Home' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;"><?= service('request')->getLocale() == 'id' ? 'Biaya Pendidikan' : 'Tuition Fees' ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Tuition Fee Section Start -->
    <section class="rs-tuition-fee-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="section-title-wrapper text-center" style="margin-bottom: 50px;">
                        <span class="section-subtitle justify-content-center has-theme-blue d-flex align-items-center gap-10" style="color: #0d6efd; font-weight: 600; text-transform: uppercase; font-size: 14px; margin-bottom: 15px;">
                            <i class="ri-money-dollar-circle-line"></i> <?= service('request')->getLocale() == 'id' ? 'Informasi Finansial' : 'Financial Information' ?>
                        </span>
                        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #08284e;"><?= service('request')->getLocale() == 'id' ? 'Investasi Masa Depan Putra-Putri Anda' : 'Investing in Your Children\'s Future' ?></h2>
                        <p style="font-size: 16px; color: #666; line-height: 1.8; margin-top: 15px;">
                            <?= service('request')->getLocale() == 'id' 
                                ? 'Yayasan Khalifah Latif Cendaka menyajikan rincian biaya yang transparan untuk menunjang sarana belajar-mengajar dan fasilitas terbaik bagi siswa.'
                                : 'Yayasan Khalifah Latif Cendaka provides transparent fee structures to support the best teaching facilities and resources for our students.' ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Table of Fees -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive" style="background: #ffffff; border-radius: 10px; box-shadow: 0 5px 25px rgba(0,0,0,0.05); border: 1px solid #eee; overflow: hidden;">
                        <table class="table" style="margin: 0; width: 100%; border-collapse: collapse; text-align: left;">
                            <thead>
                                <tr style="background: #08284e; color: #ffffff;">
                                    <th style="padding: 20px; font-weight: 600; border-bottom: 2px solid #eee;"><?= service('request')->getLocale() == 'id' ? 'Jenjang Pendidikan' : 'Educational Level' ?></th>
                                    <th style="padding: 20px; font-weight: 600; border-bottom: 2px solid #eee;"><?= service('request')->getLocale() == 'id' ? 'Uang Pendaftaran' : 'Registration Fee' ?></th>
                                    <th style="padding: 20px; font-weight: 600; border-bottom: 2px solid #eee;"><?= service('request')->getLocale() == 'id' ? 'Uang Pangkal (Gedung/Fasilitas)' : 'Enrollment Fee (Building/Facility)' ?></th>
                                    <th style="padding: 20px; font-weight: 600; border-bottom: 2px solid #eee;"><?= service('request')->getLocale() == 'id' ? 'SPP Bulanan' : 'Monthly School Fee (SPP)' ?></th>
                                    <th style="padding: 20px; font-weight: 600; border-bottom: 2px solid #eee;"><?= service('request')->getLocale() == 'id' ? 'Uang Buku & Seragam' : 'Books & Uniforms Fee' ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($fees)): ?>
                                    <?php foreach ($fees as $index => $row): ?>
                                        <tr style="border-bottom: 1px solid #eee; <?= $index % 2 == 1 ? 'background: #fdfdfd;' : '' ?>">
                                            <td style="padding: 20px; font-weight: 700; color: #08284e;"><?= lang_field($row, 'level') ?></td>
                                            <td style="padding: 20px; color: #555;">Rp <?= number_format($row->registration_fee, 0, ',', '.') ?></td>
                                            <td style="padding: 20px; color: #555;">Rp <?= number_format($row->base_fee, 0, ',', '.') ?></td>
                                            <td style="padding: 20px; color: #0d6efd; font-weight: 600;">Rp <?= number_format($row->monthly_spp, 0, ',', '.') ?></td>
                                            <td style="padding: 20px; color: #555;">Rp <?= number_format($row->books_uniforms_fee, 0, ',', '.') ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5" style="padding: 20px; text-align: center; color: #999;">
                                            <?= service('request')->getLocale() == 'id' ? 'Tidak ada data biaya.' : 'No tuition fee data available.' ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Additional Notes -->
            <div class="row justify-content-center" style="margin-top: 40px;">
                <div class="col-lg-10">
                    <div style="background: rgba(255, 193, 7, 0.05); padding: 30px; border-radius: 10px; border-left: 5px solid #ffc107;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #856404; margin-bottom: 15px;">
                            <?= service('request')->getLocale() == 'id' ? 'Catatan Penting:' : 'Important Notes:' ?>
                        </h4>
                        <ul style="font-size: 14px; color: #665c3f; line-height: 1.8; margin: 0; padding-left: 20px;">
                            <?php if (service('request')->getLocale() == 'id'): ?>
                                <li>Tersedia potongan Uang Pangkal sebesar 15% bagi calon pendaftar Gelombang 1 (Oktober - Desember).</li>
                                <li>Beasiswa prestasi akademik dan non-akademik berupa keringanan SPP bulanan hingga 100% untuk siswa berprestasi nasional.</li>
                                <li>Pembayaran Uang Pangkal dapat diangsur maksimal 3 kali selama semester pertama berjalan.</li>
                            <?php else: ?>
                                <li>A 15% discount on the enrollment fee is available for Phase 1 applicants (October - December).</li>
                                <li>Academic and non-academic achievement scholarships are available, providing up to 100% discount on monthly SPP for national achievers.</li>
                                <li>The enrollment fee can be paid in installments up to 3 times during the first semester.</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tuition Fee Section End -->
<?= $this->endSection() ?>
