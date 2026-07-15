<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>Hubungi Kami - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?>Hubungi Yayasan Khalifah Latif Cendaka melalui kontak resmi kami atau kunjungi langsung kantor kami di Palembang.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;">Hubungi Kami</h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;">Hubungi Kami</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>

    <section class="rs-contact-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Details -->
                <div class="col-lg-5">
                    <div style="background: #08284e; padding: 40px; border-radius: 10px; color: #ffffff; height: 100%;">
                        <h3 style="font-size: 24px; font-weight: 700; margin-bottom: 30px; color: #ffffff;">Informasi Kontak</h3>
                        <div class="d-flex gap-20 mb-30">
                            <span style="font-size: 24px; color: #ffc107;"><i class="ri-map-pin-line"></i></span>
                            <div>
                                <h5 style="font-size: 16px; font-weight: 700; color: #ffffff; margin-bottom: 5px;">Alamat Kantor</h5>
                                <p style="font-size: 14px; color: #cbd5e1; line-height: 1.6; margin: 0;">Jl. Khalifah Latif No. 1, Kota Palembang, Sumatera Selatan, Indonesia</p>
                            </div>
                        </div>
                        <div class="d-flex gap-20 mb-30">
                            <span style="font-size: 24px; color: #ffc107;"><i class="ri-phone-line"></i></span>
                            <div>
                                <h5 style="font-size: 16px; font-weight: 700; color: #ffffff; margin-bottom: 5px;">Telepon & WhatsApp</h5>
                                <p style="font-size: 14px; color: #cbd5e1; margin: 0;">+62-711-000-0000</p>
                            </div>
                        </div>
                        <div class="d-flex gap-20">
                            <span style="font-size: 24px; color: #ffc107;"><i class="ri-mail-line"></i></span>
                            <div>
                                <h5 style="font-size: 16px; font-weight: 700; color: #ffffff; margin-bottom: 5px;">Email Resmi</h5>
                                <p style="font-size: 14px; color: #cbd5e1; margin: 0;">info@khalifah-latif.sch.id</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%;">
                        <h3 style="font-size: 24px; font-weight: 700; color: #08284e; margin-bottom: 25px;">Kirim Pesan</h3>
                        <form action="#">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Nama Lengkap" class="form-control" style="padding: 12px; border-radius: 6px; border: 1px solid #ddd; font-size: 14px;">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Alamat Email" class="form-control" style="padding: 12px; border-radius: 6px; border: 1px solid #ddd; font-size: 14px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" placeholder="Subjek Pesan" class="form-control" style="padding: 12px; border-radius: 6px; border: 1px solid #ddd; font-size: 14px;">
                                </div>
                                <div class="col-12">
                                    <textarea placeholder="Pesan Anda" rows="5" class="form-control" style="padding: 12px; border-radius: 6px; border: 1px solid #ddd; font-size: 14px;"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-warning w-100" style="padding: 12px; border-radius: 6px; font-weight: 700; background: #ffc107; border: none; color: #08284e;">Kirim Sekarang</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
