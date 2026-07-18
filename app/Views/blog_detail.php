<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?><?= esc(lang_field($post, 'title')) ?> - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?><?= esc(substr(strip_tags(lang_field($post, 'content')), 0, 150)) ?>...<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 36px; font-weight: 700; margin-bottom: 15px; max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.3;"><?= esc(lang_field($post, 'title')) ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Beranda' : 'Home' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><a href="<?= base_url('blog') ?>" style="color: #ffffff; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Blog' : 'Blog' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffc107;"><?= service('request')->getLocale() == 'id' ? 'Detail Berita' : 'News Detail' ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Main Detail Section Start -->
    <section class="rs-blog-details-area section-space" style="padding: 80px 0; background: #fdfdfd;">
        <div class="container">
            <div class="row g-5">
                <!-- Left Content: Article -->
                <div class="col-lg-8">
                    <div style="background: #ffffff; border-radius: 10px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); overflow: hidden; border: 1px solid #eee;">
                        <?php if (!empty($post->image)): ?>
                            <img src="<?= (strpos($post->image, 'http') === 0) ? $post->image : base_url('uploads/blog/' . $post->image) ?>" alt="<?= esc(lang_field($post, 'title')) ?>" style="width: 100%; height: auto; max-height: 450px; object-fit: cover;">
                        <?php endif; ?>
                        
                        <div style="padding: 40px;">
                            <!-- Meta Tags -->
                            <div class="d-flex align-items-center gap-20 mb-20" style="font-size: 14px; color: #777; flex-wrap: wrap;">
                                <span style="background: <?= esc($post->color ?: '#0d6efd') ?>; color: #ffffff; padding: 4px 12px; border-radius: 4px; font-weight: 600; font-size: 12px; text-transform: uppercase;">
                                    <?= esc(service('request')->getLocale() == 'id' ? $post->category_name_id : $post->category_name_en) ?>
                                </span>
                                <span><i class="ri-calendar-line" style="color: #ffc107; margin-right: 5px;"></i> <?= date('d M Y', strtotime($post->created_at)) ?></span>
                                <span><i class="ri-user-line" style="color: #ffc107; margin-right: 5px;"></i> Admin</span>
                            </div>

                            <h2 style="font-size: 28px; font-weight: 700; color: #08284e; margin-bottom: 20px; line-height: 1.4;"><?= esc(lang_field($post, 'title')) ?></h2>
                            
                            <div style="font-size: 16px; color: #555; line-height: 1.9; margin-bottom: 30px;" class="blog-post-content-area">
                                <?= lang_field($post, 'content') ?>
                            </div>

                            <!-- Share Post -->
                            <hr style="border-color: #eee; margin: 30px 0;">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-15">
                                <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin: 0;"><?= service('request')->getLocale() == 'id' ? 'Bagikan Artikel:' : 'Share Article:' ?></h5>
                                <div class="d-flex gap-10">
                                    <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(window.location.href)); return false;" style="width: 35px; height: 35px; background: #3b5998; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; text-decoration: none;"><i class="ri-facebook-fill"></i></a>
                                    <a href="#" onclick="window.open('https://twitter.com/intent/tweet?url='+encodeURIComponent(window.location.href)); return false;" style="width: 35px; height: 35px; background: #1da1f2; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; text-decoration: none;"><i class="ri-twitter-fill"></i></a>
                                    <a href="#" onclick="window.open('https://api.whatsapp.com/send?text='+encodeURIComponent(window.location.href)); return false;" style="width: 35px; height: 35px; background: #25d366; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; text-decoration: none;"><i class="ri-whatsapp-line"></i></a>
                                    <a href="#" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(window.location.href)); return false;" style="width: 35px; height: 35px; background: #0077b5; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; text-decoration: none;"><i class="ri-linkedin-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related News Section -->
                    <div style="margin-top: 60px;">
                        <h3 style="font-size: 24px; font-weight: 700; color: #08284e; margin-bottom: 30px; position: relative; padding-bottom: 10px;">
                            <?= service('request')->getLocale() == 'id' ? 'Berita Terkait' : 'Related News' ?>
                            <span style="position: absolute; bottom: 0; left: 0; width: 50px; height: 3px; background: #ffc107;"></span>
                        </h3>
                        <div class="row g-4">
                            <?php if (!empty($related)): ?>
                                <?php foreach ($related as $rel): ?>
                                    <div class="col-md-6">
                                        <a href="<?= base_url('blog/detail/' . $rel->id) ?>" style="background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.03); border: 1px solid #eee; height: 100%; display: flex; flex-direction: column; text-decoration: none;" class="blog-card-hover">
                                            <div style="overflow: hidden; height: 180px;">
                                                <?php if (!empty($rel->image)): ?>
                                                    <img src="<?= (strpos($rel->image, 'http') === 0) ? $rel->image : base_url('uploads/blog/' . $rel->image) ?>" alt="<?= esc(lang_field($rel, 'title')) ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                                <?php else: ?>
                                                    <div style="width: 100%; height: 100%; background: #e9ecef; display: flex; align-items: center; justify-content: center; color: #adb5bd; font-size: 32px;">
                                                        <i class="ri-image-line"></i>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                                <div>
                                                    <span style="font-size: 11px; font-weight: 700; color: <?= esc($rel->color ?: '#0d6efd') ?>; text-transform: uppercase; display: block; margin-bottom: 8px;"><?= esc(service('request')->getLocale() == 'id' ? $rel->category_name_id : $rel->category_name_en) ?></span>
                                                    <h4 style="font-size: 16px; font-weight: 700; color: #08284e; line-height: 1.4; margin-bottom: 15px;"><?= esc(lang_field($rel, 'title')) ?></h4>
                                                </div>
                                                <span style="font-size: 14px; font-weight: 600; color: #0d6efd;"><?= service('request')->getLocale() == 'id' ? 'Baca Selengkapnya' : 'Read More' ?> <i class="ri-arrow-right-line"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-12">
                                    <p style="color: #999;"><?= service('request')->getLocale() == 'id' ? 'Tidak ada berita terkait.' : 'No related news found.' ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Right Content: Sidebar -->
                <div class="col-lg-4">
                    <!-- Search Widget -->
                    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border: 1px solid #eee; margin-bottom: 30px;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 20px;"><?= service('request')->getLocale() == 'id' ? 'Cari Artikel' : 'Search Article' ?></h4>
                        <form action="<?= base_url('blog') ?>" method="GET" style="position: relative;">
                            <input type="text" name="search" placeholder="<?= service('request')->getLocale() == 'id' ? 'Masukkan kata kunci...' : 'Enter keywords...' ?>" style="width: 100%; padding: 12px 45px 12px 15px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; outline: none;">
                            <button type="submit" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: none; border: none; color: #08284e; font-size: 18px; cursor: pointer;">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Popular News Widget -->
                    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border: 1px solid #eee; margin-bottom: 30px;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 25px; position: relative; padding-bottom: 8px;">
                            <?= service('request')->getLocale() == 'id' ? 'Berita Terpopuler' : 'Popular News' ?>
                            <span style="position: absolute; bottom: 0; left: 0; width: 40px; height: 2px; background: #ffc107;"></span>
                        </h4>
                        <div class="d-flex flex-column gap-20">
                            <?php if (!empty($popular)): ?>
                                <?php foreach ($popular as $pop): ?>
                                    <div class="d-flex gap-15 align-items-center">
                                        <?php if (!empty($pop->image)): ?>
                                            <img src="<?= (strpos($pop->image, 'http') === 0) ? $pop->image : base_url('uploads/blog/' . $pop->image) ?>" alt="" style="width: 70px; height: 70px; object-fit: cover; border-radius: 6px;">
                                        <?php else: ?>
                                            <div style="width: 70px; height: 70px; background: #e9ecef; display: flex; align-items: center; justify-content: center; color: #adb5bd; font-size: 24px; border-radius: 6px;">
                                                <i class="ri-image-line"></i>
                                            </div>
                                        <?php endif; ?>
                                        <div>
                                            <span style="font-size: 11px; color: #888; display: block; margin-bottom: 4px;"><i class="ri-calendar-line"></i> <?= date('d M Y', strtotime($pop->created_at)) ?></span>
                                            <h5 style="font-size: 13px; font-weight: 700; color: #08284e; margin: 0; line-height: 1.4;">
                                                <a href="<?= base_url('blog/detail/' . $pop->id) ?>" style="color: #08284e; text-decoration: none; transition: color 0.2s;" class="blog-pop-link"><?= esc(lang_field($pop, 'title')) ?></a>
                                            </h5>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .blog-pop-link:hover {
            color: #0d6efd !important;
        }
    </style>
<?= $this->endSection() ?>
