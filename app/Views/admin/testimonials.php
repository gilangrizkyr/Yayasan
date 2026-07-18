<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Daftar Testimoni</span>
        <button class="btn btn-theme btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#testimonialModal" onclick="clearForm()">
            <i class="ri-add-line me-1"></i> Tambah Testimoni
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4">Nama & Foto</th>
                        <th>Jabatan / Hubungan (ID / EN)</th>
                        <th>Testimoni / Kutipan (ID / EN)</th>
                        <th>Tipe</th>
                        <th>Status</th>
                        <th class="pe-4 text-end" style="width: 18%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($testimonials)): ?>
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Belum ada testimoni.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($testimonials as $t): ?>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-flex align-items-center gap-3">
                                        <?php if ($t->image): ?>
                                            <img src="<?= base_url($t->image) ?>" alt="Photo" class="rounded-circle" style="width: 45px; height: 45px; object-fit: cover;">
                                        <?php else: ?>
                                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center text-secondary fw-bold" style="width: 45px; height: 45px;">
                                                <?= strtoupper(substr($t->name, 0, 1)) ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="fw-bold text-dark"><?= esc($t->name) ?></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fw-semibold text-dark"><?= esc($t->designation_id) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><?= esc($t->designation_en) ?></div>
                                </td>
                                <td>
                                    <div class="text-truncate" style="max-width: 250px;"><?= esc($t->quote_id) ?></div>
                                    <div class="text-muted text-truncate" style="max-width: 250px; font-size: 12px;"><?= esc($t->quote_en) ?></div>
                                </td>
                                <td>
                                    <span class="badge bg-info text-capitalize"><?= esc($t->type) ?></span>
                                </td>
                                <td>
                                    <?php if ($t->status): ?>
                                        <span class="badge bg-success badge-status">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary badge-status">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-info text-white me-2" onclick="editTestimonial(<?= htmlspecialchars(json_encode($t)) ?>)">
                                        <i class="ri-edit-line"></i> Edit
                                    </button>
                                    <a href="<?= base_url('admin/testimonials/delete/' . $t->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')">
                                        <i class="ri-delete-bin-line"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal: Add/Edit Testimonial -->
<div class="modal fade" id="testimonialModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="<?= base_url('admin/testimonials/save') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="testimonial_id">
            <input type="hidden" name="old_image" id="old_image">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-dark" id="modalTitle">Tambah Testimoni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Pemberi Testimoni</label>
                            <input type="text" name="name" id="name" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tipe Pemberi</label>
                            <select name="type" id="type" class="form-select ps-3" required>
                                <option value="general">Umum / Masyarakat</option>
                                <option value="alumni">Alumni</option>
                                <option value="foundation">Pengurus Yayasan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Jabatan / Status (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="designation_id" id="designation_id" class="form-control ps-3" placeholder="Contoh: Alumni SMAIT 2022" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Jabatan / Status (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="designation_en" id="designation_en" class="form-control ps-3" placeholder="Contoh: SMAIT Alumni 2022" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status Keaktifan</label>
                            <select name="status" id="status" class="form-select ps-3" required>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Foto Profil</label>
                            <input type="file" name="image" id="image" class="form-control ps-3">
                            <div id="imagePreviewContainer" class="mt-2 d-none">
                                <span class="d-block text-muted mb-1" style="font-size: 12px;">Foto Saat Ini:</span>
                                <img id="imagePreview" src="" alt="Preview" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Isi Kutipan / Testimoni (ID) <span class="lang-pill">ID</span></label>
                            <textarea name="quote_id" id="quote_id" class="form-control ps-3" rows="4" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Isi Kutipan / Testimoni (EN) <span class="lang-pill">EN</span></label>
                            <textarea name="quote_en" id="quote_en" class="form-control ps-3" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-theme fw-semibold">Simpan Testimoni</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function clearForm() {
        document.getElementById('testimonial_id').value = '';
        document.getElementById('old_image').value = '';
        document.getElementById('name').value = '';
        document.getElementById('type').value = 'general';
        document.getElementById('designation_id').value = '';
        document.getElementById('designation_en').value = '';
        document.getElementById('status').value = '1';
        document.getElementById('quote_id').value = '';
        document.getElementById('quote_en').value = '';
        document.getElementById('imagePreviewContainer').classList.add('d-none');
        document.getElementById('modalTitle').innerText = 'Tambah Testimoni';
    }

    function editTestimonial(t) {
        document.getElementById('testimonial_id').value = t.id;
        document.getElementById('old_image').value = t.image;
        document.getElementById('name').value = t.name;
        document.getElementById('type').value = t.type;
        document.getElementById('designation_id').value = t.designation_id;
        document.getElementById('designation_en').value = t.designation_en;
        document.getElementById('status').value = t.status;
        document.getElementById('quote_id').value = t.quote_id;
        document.getElementById('quote_en').value = t.quote_en;

        if (t.image) {
            document.getElementById('imagePreview').src = '<?= base_url() ?>' + t.image;
            document.getElementById('imagePreviewContainer').classList.remove('d-none');
        } else {
            document.getElementById('imagePreviewContainer').classList.add('d-none');
        }

        document.getElementById('modalTitle').innerText = 'Edit Testimoni';
        new bootstrap.Modal(document.getElementById('testimonialModal')).show();
    }
</script>
<?= $this->endSection() ?>
