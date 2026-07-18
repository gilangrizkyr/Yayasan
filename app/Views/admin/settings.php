<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<form action="<?= base_url('admin/settings/save') ?>" method="POST">
    <?= csrf_field() ?>
    
    <div class="card">
        <div class="card-header p-0">
            <ul class="nav nav-tabs border-bottom-0" id="settingsTab" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active py-3 px-4 fw-semibold text-dark border-0 rounded-0" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab">
                        <i class="ri-settings-line me-1"></i> Umum
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link py-3 px-4 fw-semibold text-dark border-0 rounded-0" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab">
                        <i class="ri-contacts-book-line me-1"></i> Kontak & Peta
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link py-3 px-4 fw-semibold text-dark border-0 rounded-0" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button" role="tab">
                        <i class="ri-share-line me-1"></i> Sosial Media
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link py-3 px-4 fw-semibold text-dark border-0 rounded-0" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab">
                        <i class="ri-building-line me-1"></i> Tentang Yayasan
                    </button>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="settingsTabContent">
                
                <!-- Tab: General -->
                <div class="tab-pane fade show active" id="general" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Nama Yayasan (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="site_name_id" class="form-control ps-3" value="<?= esc($settings['site_name']->key_value_id ?? '') ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Nama Yayasan (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="site_name_en" class="form-control ps-3" value="<?= esc($settings['site_name']->key_value_en ?? '') ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Jam Operasional (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="operating_hours_id" class="form-control ps-3" value="<?= esc($settings['operating_hours']->key_value_id ?? '') ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Jam Operasional (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="operating_hours_en" class="form-control ps-3" value="<?= esc($settings['operating_hours']->key_value_en ?? '') ?>" required>
                        </div>
                    </div>
                </div>

                <!-- Tab: Contact & Maps -->
                <div class="tab-pane fade" id="contact" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Nomor Telepon</label>
                            <input type="text" name="phone" class="form-control ps-3" value="<?= esc($settings['phone']->key_value_id ?? '') ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Email Resmi</label>
                            <input type="email" name="email" class="form-control ps-3" value="<?= esc($settings['email']->key_value_id ?? '') ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Alamat Lengkap (ID) <span class="lang-pill">ID</span></label>
                            <textarea name="address_id" class="form-control ps-3" rows="3" required><?= esc($settings['address']->key_value_id ?? '') ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Alamat Lengkap (EN) <span class="lang-pill">EN</span></label>
                            <textarea name="address_en" class="form-control ps-3" rows="3" required><?= esc($settings['address']->key_value_en ?? '') ?></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold text-dark">Google Maps Iframe Embed URL</label>
                            <input type="text" name="maps_iframe" class="form-control ps-3" value="<?= esc($settings['maps_iframe']->key_value_id ?? '') ?>" required>
                            <div class="form-text">Masukkan link src saja dari iframe Google Maps. Contoh: https://www.google.com/maps/embed?...</div>
                        </div>
                    </div>
                </div>

                <!-- Tab: Social Media -->
                <div class="tab-pane fade" id="social" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark"><i class="ri-facebook-box-line me-1"></i> Facebook URL</label>
                            <input type="text" name="facebook" class="form-control ps-3" value="<?= esc($settings['facebook']->key_value_id ?? '') ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark"><i class="ri-instagram-line me-1"></i> Instagram URL</label>
                            <input type="text" name="instagram" class="form-control ps-3" value="<?= esc($settings['instagram']->key_value_id ?? '') ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark"><i class="ri-youtube-line me-1"></i> YouTube Channel URL</label>
                            <input type="text" name="youtube" class="form-control ps-3" value="<?= esc($settings['youtube']->key_value_id ?? '') ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark"><i class="ri-linkedin-box-line me-1"></i> LinkedIn Page URL</label>
                            <input type="text" name="linkedin" class="form-control ps-3" value="<?= esc($settings['linkedin']->key_value_id ?? '') ?>">
                        </div>
                    </div>
                </div>

                <!-- Tab: About Foundation -->
                <div class="tab-pane fade" id="about" role="tabpanel">
                    <div class="row g-4">
                        <!-- About Intro -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Kalimat Sambutan Intro (ID) <span class="lang-pill">ID</span></label>
                            <textarea name="about_intro_id" class="form-control ps-3" rows="3" required><?= esc($settings['about_intro']->key_value_id ?? '') ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Kalimat Sambutan Intro (EN) <span class="lang-pill">EN</span></label>
                            <textarea name="about_intro_en" class="form-control ps-3" rows="3" required><?= esc($settings['about_intro']->key_value_en ?? '') ?></textarea>
                        </div>

                        <!-- Sejarah -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Sejarah Singkat (ID) <span class="lang-pill">ID</span></label>
                            <textarea name="about_history_id" class="form-control ps-3" rows="4" required><?= esc($settings['about_history']->key_value_id ?? '') ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Sejarah Singkat (EN) <span class="lang-pill">EN</span></label>
                            <textarea name="about_history_en" class="form-control ps-3" rows="4" required><?= esc($settings['about_history']->key_value_en ?? '') ?></textarea>
                        </div>

                        <!-- Visi -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Visi Yayasan (ID) <span class="lang-pill">ID</span></label>
                            <textarea name="about_vision_id" class="form-control ps-3" rows="3" required><?= esc($settings['about_vision']->key_value_id ?? '') ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Visi Yayasan (EN) <span class="lang-pill">EN</span></label>
                            <textarea name="about_vision_en" class="form-control ps-3" rows="3" required><?= esc($settings['about_vision']->key_value_en ?? '') ?></textarea>
                        </div>

                        <!-- Misi 1 -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Misi Poin 1 (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="about_mission_1_id" class="form-control ps-3" value="<?= esc($settings['about_mission_1']->key_value_id ?? '') ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Misi Poin 1 (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="about_mission_1_en" class="form-control ps-3" value="<?= esc($settings['about_mission_1']->key_value_en ?? '') ?>" required>
                        </div>

                        <!-- Misi 2 -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Misi Poin 2 (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="about_mission_2_id" class="form-control ps-3" value="<?= esc($settings['about_mission_2']->key_value_id ?? '') ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Misi Poin 2 (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="about_mission_2_en" class="form-control ps-3" value="<?= esc($settings['about_mission_2']->key_value_en ?? '') ?>" required>
                        </div>

                        <!-- Misi 3 -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Misi Poin 3 (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="about_mission_3_id" class="form-control ps-3" value="<?= esc($settings['about_mission_3']->key_value_id ?? '') ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">Misi Poin 3 (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="about_mission_3_en" class="form-control ps-3" value="<?= esc($settings['about_mission_3']->key_value_en ?? '') ?>" required>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Submit Button -->
            <div class="mt-4 pt-3 border-top d-flex justify-content-end">
                <button type="submit" class="btn btn-theme px-4 py-2 fw-semibold">
                    <i class="ri-save-line me-1"></i> Simpan Pengaturan
                </button>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection() ?>
