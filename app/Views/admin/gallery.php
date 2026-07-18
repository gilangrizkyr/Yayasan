<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Daftar Foto Dokumentasi Galeri</span>
        <button class="btn btn-theme btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="clearForm()">
            <i class="ri-add-line me-1"></i> Tambah Foto Galeri
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4" style="width: 15%;">Foto</th>
                        <th>Keterangan Foto (ID / EN)</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th class="pe-4 text-end" style="width: 18%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($gallery)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">Belum ada foto galeri.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($gallery as $g): ?>
                            <tr>
                                <td class="ps-4">
                                    <img src="<?= base_url($g->image) ?>" alt="Galeri" class="rounded" style="width: 80px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <div class="fw-bold text-dark"><?= esc($g->title_id) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><?= esc($g->title_en) ?></div>
                                </td>
                                <td>
                                    <span class="badge bg-info text-capitalize"><?= esc($g->category) ?></span>
                                </td>
                                <td>
                                    <?php if ($g->status): ?>
                                        <span class="badge bg-success badge-status">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary badge-status">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-info text-white me-2" onclick="editGallery(<?= htmlspecialchars(json_encode($g)) ?>)">
                                        <i class="ri-edit-line"></i> Edit
                                    </button>
                                    <a href="<?= base_url('admin/gallery/delete/' . $g->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus foto galeri ini?')">
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

<!-- Modal: Add/Edit Gallery -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url('admin/gallery/save') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="gallery_id">
            <input type="hidden" name="old_image" id="old_image">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-dark" id="modalTitle">Tambah Foto Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label fw-semibold">Keterangan Foto (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="title_id" id="title_id" class="form-control ps-3" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Keterangan Foto (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="title_en" id="title_en" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Kategori</label>
                            <select name="category" id="category" class="form-select ps-3" required>
                                <option value="akademik">Akademik</option>
                                <option value="fasilitas">Fasilitas</option>
                                <option value="kegiatan">Kegiatan</option>
                                <option value="sosial">Sosial</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" id="status" class="form-select ps-3" required>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">File Gambar</label>
                            <input type="file" name="image" id="image" class="form-control ps-3">
                            <div id="imagePreviewContainer" class="mt-2 d-none">
                                <span class="d-block text-muted mb-1" style="font-size: 12px;">Gambar Saat Ini:</span>
                                <img id="imagePreview" src="" alt="Preview" class="rounded" style="width: 120px; height: 60px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-theme fw-semibold">Simpan Foto</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function clearForm() {
        document.getElementById('gallery_id').value = '';
        document.getElementById('old_image').value = '';
        document.getElementById('title_id').value = '';
        document.getElementById('title_en').value = '';
        document.getElementById('category').value = 'akademik';
        document.getElementById('status').value = '1';
        document.getElementById('image').required = true;
        document.getElementById('imagePreviewContainer').classList.add('d-none');
        document.getElementById('modalTitle').innerText = 'Tambah Foto Galeri';
    }

    function editGallery(gal) {
        document.getElementById('gallery_id').value = gal.id;
        document.getElementById('old_image').value = gal.image;
        document.getElementById('title_id').value = gal.title_id;
        document.getElementById('title_en').value = gal.title_en;
        document.getElementById('category').value = gal.category;
        document.getElementById('status').value = gal.status;
        document.getElementById('image').required = false;

        if (gal.image) {
            document.getElementById('imagePreview').src = '<?= base_url() ?>' + gal.image;
            document.getElementById('imagePreviewContainer').classList.remove('d-none');
        } else {
            document.getElementById('imagePreviewContainer').classList.add('d-none');
        }

        document.getElementById('modalTitle').innerText = 'Edit Foto Galeri';
        new bootstrap.Modal(document.getElementById('galleryModal')).show();
    }
</script>
<?= $this->endSection() ?>
