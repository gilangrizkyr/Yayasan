<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?><?= esc($post['title']) ?> - Yayasan Khalifah Latif Cendaka<?= $this->endSection() ?>

<?= $this->section('description') ?><?= esc(strip_tags(substr($post['content'], 0, 150))) ?>...<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 36px; font-weight: 700; margin-bottom: 15px; max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.3;"><?= esc($post['title']) ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;">Beranda</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><a href="<?= base_url('blog') ?>" style="color: #ffffff; text-decoration: none;">Blog</a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffc107;">Detail Berita</span></li>
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
                        <img src="<?= base_url(esc($post['image'])) ?>" alt="<?= esc($post['title']) ?>" style="width: 100%; height: auto; max-height: 450px; object-fit: cover;">
                        
                        <div style="padding: 40px;">
                            <!-- Meta Tags -->
                            <div class="d-flex align-items-center gap-20 mb-20" style="font-size: 14px; color: #777; flex-wrap: wrap;">
                                <span style="background: <?= esc($post['category_color']) ?>; color: #ffffff; padding: 4px 12px; border-radius: 4px; font-weight: 600; font-size: 12px; text-transform: uppercase;">
                                    <?= esc($post['category']) ?>
                                </span>
                                <span><i class="ri-calendar-line" style="color: #ffc107; margin-right: 5px;"></i> <?= esc($post['date']) ?></span>
                                <span><i class="ri-user-line" style="color: #ffc107; margin-right: 5px;"></i> <?= esc($post['author']) ?></span>
                            </div>

                            <h2 style="font-size: 28px; font-weight: 700; color: #08284e; margin-bottom: 20px; line-height: 1.4;"><?= esc($post['title']) ?></h2>
                            
                            <div style="font-size: 16px; color: #555; line-height: 1.9; margin-bottom: 30px;">
                                <?= $post['content'] ?>
                            </div>

                            <!-- Share Post -->
                            <hr style="border-color: #eee; margin: 30px 0;">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-15">
                                <h5 style="font-size: 16px; font-weight: 700; color: #08284e; margin: 0;">Bagikan Artikel:</h5>
                                <div class="d-flex gap-10">
                                    <a href="#" style="width: 35px; height: 35px; background: #3b5998; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; text-decoration: none;"><i class="ri-facebook-fill"></i></a>
                                    <a href="#" style="width: 35px; height: 35px; background: #1da1f2; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; text-decoration: none;"><i class="ri-twitter-fill"></i></a>
                                    <a href="#" style="width: 35px; height: 35px; background: #25d366; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; text-decoration: none;"><i class="ri-whatsapp-line"></i></a>
                                    <a href="#" style="width: 35px; height: 35px; background: #0077b5; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; text-decoration: none;"><i class="ri-linkedin-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related News Section -->
                    <div style="margin-top: 60px;">
                        <h3 style="font-size: 24px; font-weight: 700; color: #08284e; margin-bottom: 30px; position: relative; padding-bottom: 10px;">
                            Berita Terkait
                            <span style="position: absolute; bottom: 0; left: 0; width: 50px; height: 3px; background: #ffc107;"></span>
                        </h3>
                        <div class="row g-4">
                            <?php foreach ($related as $rel): ?>
                                <div class="col-md-6">
                                    <a href="<?= base_url('blog/detail/' . $rel['id']) ?>" class="blog-card-hover" style="background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.03); border: 1px solid #eee; height: 100%; display: flex; flex-direction: column;">
                                        <div style="overflow: hidden; height: 180px;">
                                            <img src="<?= base_url(esc($rel['image'])) ?>" alt="<?= esc($rel['title']) ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                            <div>
                                                <span style="font-size: 11px; font-weight: 700; color: <?= esc($rel['category_color']) ?>; text-transform: uppercase; display: block; margin-bottom: 8px;"><?= esc($rel['category']) ?></span>
                                                <h4 style="font-size: 16px; font-weight: 700; color: #08284e; line-height: 1.4; margin-bottom: 15px;"><?= esc($rel['title']) ?></h4>
                                            </div>
                                            <span class="read-more-btn">Baca Selengkapnya <i class="ri-arrow-right-line"></i></span>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Right Content: Sidebar -->
                <div class="col-lg-4">
                    <!-- Search Widget -->
                    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border: 1px solid #eee; margin-bottom: 30px;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 20px;">Cari Artikel</h4>
                        <form style="position: relative;">
                            <input type="text" placeholder="Masukkan kata kunci..." style="width: 100%; padding: 12px 45px 12px 15px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; outline: none;">
                            <button type="submit" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: none; border: none; color: #08284e; font-size: 18px; cursor: pointer;">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Popular News Widget -->
                    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border: 1px solid #eee; margin-bottom: 30px;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 25px; position: relative; padding-bottom: 8px;">
                            Berita Terpopuler
                            <span style="position: absolute; bottom: 0; left: 0; width: 40px; height: 2px; background: #ffc107;"></span>
                        </h4>
                        <div class="d-flex flex-column gap-20">
                            <?php foreach ($popular as $pop): ?>
                                <div class="d-flex gap-15 align-items-center">
                                    <img src="<?= base_url(esc($pop['image'])) ?>" alt="" style="width: 70px; height: 70px; object-fit: cover; border-radius: 6px;">
                                    <div>
                                        <span style="font-size: 11px; color: #888; display: block; margin-bottom: 4px;"><i class="ri-calendar-line"></i> <?= esc($pop['date']) ?></span>
                                        <h5 style="font-size: 13px; font-weight: 700; color: #08284e; margin: 0; line-height: 1.4;">
                                            <a href="<?= base_url('blog/detail/' . $pop['id']) ?>" style="color: #08284e; text-decoration: none; transition: color 0.2s;"><?= esc($pop['title']) ?></a>
                                        </h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border: 1px solid #eee; margin-bottom: 30px;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 25px; position: relative; padding-bottom: 8px;">
                            Kategori Berita
                            <span style="position: absolute; bottom: 0; left: 0; width: 40px; height: 2px; background: #ffc107;"></span>
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-column: column; gap: 12px; flex-direction: column;">
                            <li class="d-flex justify-content-between align-items-center" style="font-size: 14px; border-bottom: 1px solid #f5f5f5; padding-bottom: 10px;">
                                <a href="<?= base_url('blog') ?>" style="color: #555; text-decoration: none;"><i class="ri-arrow-right-s-line" style="color: #ffc107; margin-right: 5px;"></i> Kegiatan Sosial</a>
                                <span style="background: #f1f1f1; padding: 2px 8px; border-radius: 10px; font-size: 12px; color: #666;">1</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center" style="font-size: 14px; border-bottom: 1px solid #f5f5f5; padding-bottom: 10px;">
                                <a href="<?= base_url('blog') ?>" style="color: #555; text-decoration: none;"><i class="ri-arrow-right-s-line" style="color: #ffc107; margin-right: 5px;"></i> Akademik</a>
                                <span style="background: #f1f1f1; padding: 2px 8px; border-radius: 10px; font-size: 12px; color: #666;">2</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center" style="font-size: 14px; border-bottom: 1px solid #f5f5f5; padding-bottom: 10px;">
                                <a href="<?= base_url('blog') ?>" style="color: #555; text-decoration: none;"><i class="ri-arrow-right-s-line" style="color: #ffc107; margin-right: 5px;"></i> Prestasi</a>
                                <span style="background: #f1f1f1; padding: 2px 8px; border-radius: 10px; font-size: 12px; color: #666;">1</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Tags Widget -->
                    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border: 1px solid #eee;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #08284e; margin-bottom: 25px; position: relative; padding-bottom: 8px;">
                            Tags Populer
                            <span style="position: absolute; bottom: 0; left: 0; width: 40px; height: 2px; background: #ffc107;"></span>
                        </h4>
                        <div class="d-flex flex-wrap gap-10">
                            <a href="<?= base_url('blog') ?>" style="font-size: 12px; padding: 6px 12px; background: #f8f9fa; border: 1px solid #eee; border-radius: 4px; color: #555; text-decoration: none;">#yayasan</a>
                            <a href="<?= base_url('blog') ?>" style="font-size: 12px; padding: 6px 12px; background: #f8f9fa; border: 1px solid #eee; border-radius: 4px; color: #555; text-decoration: none;">#sekolah</a>
                            <a href="<?= base_url('blog') ?>" style="font-size: 12px; padding: 6px 12px; background: #f8f9fa; border: 1px solid #eee; border-radius: 4px; color: #555; text-decoration: none;">#baksos</a>
                            <a href="<?= base_url('blog') ?>" style="font-size: 12px; padding: 6px 12px; background: #f8f9fa; border: 1px solid #eee; border-radius: 4px; color: #555; text-decoration: none;">#prestasi</a>
                            <a href="<?= base_url('blog') ?>" style="font-size: 12px; padding: 6px 12px; background: #f8f9fa; border: 1px solid #eee; border-radius: 4px; color: #555; text-decoration: none;">#elearning</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Detail Section End -->
<?= $this->endSection() ?>
