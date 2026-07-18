<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?><?= service('request')->getLocale() == 'id' ? 'Galeri - Yayasan Khalifah Latif Cendaka' : 'Gallery - Yayasan Khalifah Latif Cendaka' ?><?= $this->endSection() ?>

<?= $this->section('description') ?><?= service('request')->getLocale() == 'id' ? 'Koleksi foto dokumentasi kegiatan pembelajaran, sarana prasarana, dan agenda sosial di Yayasan Khalifah Latif Cendaka.' : 'Collection of photo documentation of learning activities, facilities, and social events at Yayasan Khalifah Latif Cendaka.' ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Galeri Kegiatan' : 'Activities Gallery' ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Beranda' : 'Home' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;"><?= service('request')->getLocale() == 'id' ? 'Galeri' : 'Gallery' ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>

    <!-- Gallery Section -->
    <section class="rs-gallery-area section-space" style="padding: 80px 0;">
        <div class="container">
            <div class="row g-4">
                <?php if (!empty($gallery)): ?>
                    <?php foreach ($gallery as $g): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card-hover" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                                <img src="<?= (strpos($g->image, 'http') === 0) ? $g->image : base_url('uploads/gallery/' . $g->image) ?>" alt="<?= esc(lang_field($g, 'title')) ?>" style="width: 100%; height: 260px; object-fit: cover; display: block;">
                                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(8, 40, 78, 0.85); color: #fff; padding: 15px; transform: translateY(100%); transition: transform 0.3s ease; font-weight: 600;" class="gallery-hover-caption">
                                    <?= esc(lang_field($g, 'title')) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p style="color: #999;"><?= service('request')->getLocale() == 'id' ? 'Tidak ada galeri foto.' : 'No photo gallery available.' ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
    <style>
        .gallery-card-hover:hover .gallery-hover-caption {
            transform: translateY(0) !important;
        }
    </style>
<?= $this->endSection() ?>
