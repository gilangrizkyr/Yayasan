<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?><?= service('request')->getLocale() == 'id' ? 'Perpustakaan Digital & Fisik - Yayasan Khalifah Latif Cendaka' : 'Digital & Physical Library - Yayasan Khalifah Latif Cendaka' ?><?= $this->endSection() ?>

<?= $this->section('description') ?><?= service('request')->getLocale() == 'id' ? 'Layanan perpustakaan Yayasan Khalifah Latif Cendaka yang memfasilitasi kebutuhan membaca, riset, dan literasi bagi para santri, siswa, dan pengajar.' : 'Library services at Yayasan Khalifah Latif Cendaka supporting reading, research, and literacy needs of students and educators.' ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Perpustakaan' : 'Library Services' ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Beranda' : 'Home' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;"><?= service('request')->getLocale() == 'id' ? 'Perpustakaan' : 'Library' ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Facilities & Info Section -->
    <section class="section-space" style="padding: 80px 0; background: #ffffff;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span style="font-size: 14px; font-weight: 700; color: #ffc107; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Pusat Sumber Belajar' : 'Learning Resources Center' ?></span>
                    <h2 style="font-size: 36px; font-weight: 700; color: #08284e; margin-bottom: 25px; line-height: 1.3;"><?= service('request')->getLocale() == 'id' ? 'Perpustakaan Khalifah Latif Cendaka' : 'Khalifah Latif Cendaka Library' ?></h2>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 20px;">
                        <?= service('request')->getLocale() == 'id'
                            ? 'Perpustakaan kami dirancang sebagai ruang yang nyaman, inspiratif, dan kaya akan ilmu pengetahuan baik dalam bentuk cetak maupun digital. Kami meyakini bahwa budaya membaca adalah kunci utama dalam membangun generasi cerdas berakhlak mulia.'
                            : 'Our library is designed as a comfortable, inspiring, and knowledge-rich space in both printed and digital formats. We believe that reading culture is the main key to building a noble and smart generation.' ?>
                    </p>
                    <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 30px;">
                        <?= service('request')->getLocale() == 'id'
                            ? 'Selain menyediakan ribuan judul buku pelajaran, fiksi ilmiah, novel, majalah, dan ensiklopedia Islam, kami juga menyediakan portal *E-Library* yang dapat diakses oleh santri dan siswa kapan saja untuk mendukung pembelajaran mandiri dan riset tugas akhir.'
                            : 'In addition to providing thousands of textbooks, science fiction, novels, magazines, and Islamic encyclopedias, we also provide an *E-Library* portal accessible by students anytime to support independent learning and research projects.' ?>
                    </p>
                    <div style="background: #f8f9fa; padding: 25px; border-radius: 8px;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Jam Operasional Perpustakaan:' : 'Library Operating Hours:' ?></h4>
                        <table class="table" style="font-size: 14px; color: #555; margin-bottom: 0;">
                            <tbody>
                                <tr>
                                    <td style="font-weight: 600; padding: 8px 0; border: none;"><?= service('request')->getLocale() == 'id' ? 'Senin - Kamis:' : 'Monday - Thursday:' ?></td>
                                    <td style="padding: 8px 0; border: none; text-align: right;">07.30 - 16.00 WIB</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600; padding: 8px 0; border: none;"><?= service('request')->getLocale() == 'id' ? 'Jumat:' : 'Friday:' ?></td>
                                    <td style="padding: 8px 0; border: none; text-align: right;"><?= service('request')->getLocale() == 'id' ? '07.30 - 11.30 WIB & 13.30 - 16.00 WIB' : '07.30 - 11.30 & 13.30 - 16.00 WIB' ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600; padding: 8px 0; border: none;"><?= service('request')->getLocale() == 'id' ? 'Sabtu, Minggu & Libur Nasional:' : 'Saturday, Sunday & National Holidays:' ?></td>
                                    <td style="padding: 8px 0; border: none; text-align: right; color: #dc3545; font-weight: 600;"><?= service('request')->getLocale() == 'id' ? 'Tutup' : 'Closed' ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('images/gallery/gallery-thumb-05.webp') ?>" alt="Ruang Perpustakaan" style="width: 100%; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); object-fit: cover; height: 420px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Cards -->
    <section class="section-space" style="padding: 80px 0; background: #f8f9fa;">
        <div class="container">
            <div class="text-center" style="max-width: 600px; margin: 0 auto 50px;">
                <span style="font-size: 14px; font-weight: 700; color: #ffc107; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Layanan Unggulan' : 'Featured Services' ?></span>
                <h2 style="font-size: 32px; font-weight: 700; color: #08284e;"><?= service('request')->getLocale() == 'id' ? 'Fasilitas & Layanan Literasi' : 'Facilities & Literacy Services' ?></h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); height: 100%;">
                        <div style="width: 50px; height: 50px; background: #e8f0fe; color: #0d6efd; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 20px;">
                            <i class="ri-book-open-line"></i>
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Koleksi Buku Cetak' : 'Printed Book Collection' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Lebih dari 5.000 judul buku mencakup referensi kurikulum sekolah, khazanah keislaman klasik (kitab kuning), sains modern, dan sastra.'
                                : 'Over 5,000 book titles covering school curriculum references, classical Islamic treasury (kitab kuning), modern sciences, and literature.' ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); height: 100%;">
                        <div style="width: 50px; height: 50px; background: #fff3cd; color: #ffc107; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 20px;">
                            <i class="ri-computer-line"></i>
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Pojok Digital (E-Library)' : 'Digital Corner (E-Library)' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Fasilitas PC terhubung internet berkecepatan tinggi serta akses ke ribuan jurnal ilmiah dan e-book berkualitas tinggi gratis bagi santri.'
                                : 'PC stations with high-speed internet connection and access to thousands of scientific journals and high-quality e-books free for students.' ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div style="background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); height: 100%;">
                        <div style="width: 50px; height: 50px; background: #d1e7dd; color: #0f5132; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 20px;">
                            <i class="ri-team-line"></i>
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Ruang Belajar Bersama' : 'Co-working Study Space' ?></h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">
                            <?= service('request')->getLocale() == 'id'
                                ? 'Dilengkapi dengan meja kelompok untuk memfasilitasi kerja kelompok, diskusi riset, dan sesi pendampingan belajar bersama asatidzah.'
                                : 'Equipped with group tables to support group works, research discussions, and learning mentoring sessions with educators.' ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
