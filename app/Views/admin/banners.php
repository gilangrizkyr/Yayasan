<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Daftar Banner Slider</span>
        <button class="btn btn-theme btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#bannerModal" onclick="clearForm()">
            <i class="ri-add-line me-1"></i> Tambah Banner
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4">Gambar</th>
                        <th>Judul Banner (ID / EN)</th>
                        <th>Subjudul (ID / EN)</th>
                        <th>Urutan</th>
                        <th>Status</th>
                        <th class="pe-4 text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($banners)): ?>
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Belum ada slide banner.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($banners as $b): ?>
                            <tr>
                                <td class="ps-4">
                                    <img src="<?= base_url($b->image) ?>" alt="Banner" class="rounded" style="width: 120px; height: 60px; object-fit: cover;">
                                </td>
                                <td>
                                    <div class="fw-semibold text-dark"><?= esc($b->title_id) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><?= esc($b->title_en) ?></div>
                                </td>
                                <td>
                                    <div><?= esc($b->subtitle_id) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><?= esc($b->subtitle_en) ?></div>
                                </td>
                                <td><?= $b->list_order ?></td>
                                <td>
                                    <?php if ($b->status): ?>
                                        <span class="badge bg-success badge-status">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary badge-status">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-info text-white me-2" onclick="editBanner(<?= htmlspecialchars(json_encode($b)) ?>)">
                                        <i class="ri-edit-line"></i> Edit
                                    </button>
                                    <a href="<?= base_url('admin/banners/delete/' . $b->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus banner ini?')">
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

<!-- Modal: Add/Edit Banner -->
<div class="modal fade" id="bannerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="<?= base_url('admin/banners/save') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="banner_id">
            <input type="hidden" name="old_image" id="old_image">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-dark" id="modalTitle">Tambah Banner Slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Judul Banner (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="title_id" id="title_id" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Judul Banner (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="title_en" id="title_en" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Subjudul Banner (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="subtitle_id" id="subtitle_id" class="form-control ps-3">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Subjudul Banner (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="subtitle_en" id="subtitle_en" class="form-control ps-3">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Link CTA Button</label>
                            <input type="text" name="link" id="link" class="form-control ps-3" placeholder="admission">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Urutan Tampilan</label>
                            <input type="number" name="list_order" id="list_order" class="form-control ps-3" value="0" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status Slide</label>
                            <select name="status" id="status" class="form-select ps-3" required>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">File Gambar (Rekomendasi: 1920x800 px)</label>
                            <input type="file" name="image" id="image" class="form-control ps-3">
                            <div id="imagePreviewContainer" class="mt-2 d-none">
                                <span class="d-block text-muted mb-1" style="font-size: 12px;">Gambar Saat Ini:</span>
                                <img id="imagePreview" src="" alt="Preview" class="rounded" style="width: 150px; height: 75px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-theme fw-semibold">Simpan Banner</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function clearForm() {
        document.getElementById('banner_id').value = '';
        document.getElementById('old_image').value = '';
        document.getElementById('title_id').value = '';
        document.getElementById('title_en').value = '';
        document.getElementById('subtitle_id').value = '';
        document.getElementById('subtitle_en').value = '';
        document.getElementById('link').value = '';
        document.getElementById('list_order').value = '0';
        document.getElementById('status').value = '1';
        document.getElementById('image').required = true;
        document.getElementById('imagePreviewContainer').classList.add('d-none');
        document.getElementById('modalTitle').innerText = 'Tambah Banner Slider';
    }

    function editBanner(banner) {
        document.getElementById('banner_id').value = banner.id;
        document.getElementById('old_image').value = banner.image;
        document.getElementById('title_id').value = banner.title_id;
        document.getElementById('title_en').value = banner.title_en;
        document.getElementById('subtitle_id').value = banner.subtitle_id;
        document.getElementById('subtitle_en').value = banner.subtitle_en;
        document.getElementById('link').value = banner.link;
        document.getElementById('list_order').value = banner.list_order;
        document.getElementById('status').value = banner.status;
        document.getElementById('image').required = false;

        if (banner.image) {
            document.getElementById('imagePreview').src = '<?= base_url() ?>' + banner.image;
            document.getElementById('imagePreviewContainer').classList.remove('d-none');
        } else {
            document.getElementById('imagePreviewContainer').classList.add('d-none');
        }

        document.getElementById('modalTitle').innerText = 'Edit Banner Slider';
        new bootstrap.Modal(document.getElementById('bannerModal')).show();
    }
</script>
<?= $this->endSection() ?>
