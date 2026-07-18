<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?><?= service('request')->getLocale() == 'id' ? 'Blog & Berita - Yayasan Khalifah Latif Cendaka' : 'Blog & News - Yayasan Khalifah Latif Cendaka' ?><?= $this->endSection() ?>

<?= $this->section('description') ?><?= service('request')->getLocale() == 'id' ? 'Dapatkan artikel pendidikan, berita kegiatan terbaru, dan informasi informatif dari Yayasan Khalifah Latif Cendaka.' : 'Get educational articles, latest activities news, and informative updates from Yayasan Khalifah Latif Cendaka.' ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Blog & Berita' : 'Blog & News' ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Beranda' : 'Home' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;"><?= service('request')->getLocale() == 'id' ? 'Blog' : 'Blog' ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="rs-blog-area section-space" style="padding: 80px 0;">
        <div class="container">
            <!-- Category Tabs -->
            <div class="row justify-content-center mb-40">
                <div class="col-xl-10 text-center">
                    <div class="d-flex flex-wrap justify-content-center gap-10">
                        <a href="<?= base_url('blog') ?>" class="btn <?= empty($active_category) ? 'btn-primary' : 'btn-outline-primary' ?>" style="border-radius: 20px; padding: 6px 20px; font-size: 14px; font-weight: 600;">
                            <?= service('request')->getLocale() == 'id' ? 'Semua' : 'All Categories' ?>
                        </a>
                        <?php if (!empty($categories)): ?>
                            <?php foreach ($categories as $cat): ?>
                                <a href="<?= base_url('blog?category=' . $cat->id) ?>" class="btn <?= (!empty($active_category) && $active_category == $cat->id) ? 'btn-primary' : 'btn-outline-primary' ?>" style="border-radius: 20px; padding: 6px 20px; font-size: 14px; font-weight: 600; border-color: <?= $cat->color ?>; color: <?= (!empty($active_category) && $active_category == $cat->id) ? '#ffffff' : $cat->color ?>; background-color: <?= (!empty($active_category) && $active_category == $cat->id) ? $cat->color : 'transparent' ?>;">
                                    <?= esc(lang_field($cat, 'name')) ?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <?php if (!empty($blogs)): ?>
                    <?php foreach ($blogs as $post): ?>
                        <div class="col-lg-4 col-md-6">
                            <div style="background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%; display: flex; flex-direction: column; justify-content: space-between; border: 1px solid #eee;">
                                <div>
                                    <div style="overflow: hidden; height: 220px; position: relative;">
                                        <?php if (!empty($post->image)): ?>
                                            <img src="<?= (strpos($post->image, 'http') === 0) ? $post->image : base_url('uploads/blog/' . $post->image) ?>" alt="<?= esc(lang_field($post, 'title')) ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                        <?php else: ?>
                                            <div style="width: 100%; height: 100%; background: #e9ecef; display: flex; align-items: center; justify-content: center; color: #adb5bd; font-size: 48px;">
                                                <i class="ri-image-line"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div style="padding: 25px 25px 10px;">
                                        <span style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: <?= !empty($post->color) ? $post->color : '#0d6efd' ?>; display: inline-block; margin-bottom: 10px; background: <?= !empty($post->color) ? $post->color . '10' : '#0d6efd10' ?>; padding: 3px 10px; border-radius: 4px;">
                                            <?= esc(service('request')->getLocale() == 'id' ? $post->category_name_id : $post->category_name_en) ?>
                                        </span>
                                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 12px; line-height: 1.4;">
                                            <a href="<?= base_url('blog/detail/' . $post->id) ?>" style="color: #08284e; text-decoration: none;" class="blog-title-link">
                                                <?= esc(lang_field($post, 'title')) ?>
                                            </a>
                                        </h4>
                                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 15px;">
                                            <?= esc(substr(strip_tags(lang_field($post, 'content')), 0, 110)) ?>...
                                        </p>
                                    </div>
                                </div>
                                <div style="padding: 0 25px 25px;">
                                    <hr style="margin: 0 0 15px; border-color: #eee;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span style="font-size: 13px; color: #888;">
                                            <i class="ri-calendar-line"></i> <?= date('d M Y', strtotime($post->created_at)) ?>
                                        </span>
                                        <a href="<?= base_url('blog/detail/' . $post->id) ?>" style="font-size: 14px; font-weight: 600; color: #0d6efd; text-decoration: none;" class="read-more-link">
                                            <?= service('request')->getLocale() == 'id' ? 'Baca Selengkapnya' : 'Read More' ?> <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p style="color: #999;"><?= service('request')->getLocale() == 'id' ? 'Tidak ada artikel/berita yang ditemukan.' : 'No blog posts found.' ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <style>
        .blog-title-link:hover {
            color: #0d6efd !important;
        }
        .read-more-link:hover {
            text-decoration: underline !important;
        }
    </style>
<?= $this->endSection() ?>
