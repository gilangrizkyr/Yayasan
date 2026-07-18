<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Daftar Kegiatan Ekstrakurikuler</span>
        <button class="btn btn-theme btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#extraModal" onclick="clearForm()">
            <i class="ri-add-line me-1"></i> Tambah Ekstrakurikuler
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4" style="width: 10%;">Icon</th>
                        <th>Nama Kegiatan (ID / EN)</th>
                        <th>Deskripsi (ID / EN)</th>
                        <th>Status</th>
                        <th class="pe-4 text-end" style="width: 18%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($extracurriculars)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">Belum ada kegiatan ekstrakurikuler.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($extracurriculars as $ex): ?>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-flex align-items-center justify-content-center bg-light text-primary rounded-circle" style="width: 45px; height: 45px; font-size: 22px;">
                                        <i class="<?= esc($ex->icon ?: 'ri-star-line') ?>"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="fw-bold text-dark"><?= esc($ex->title_id) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><?= esc($ex->title_en) ?></div>
                                </td>
                                <td>
                                    <div class="text-truncate" style="max-width: 300px;"><?= esc($ex->description_id) ?></div>
                                    <div class="text-muted text-truncate" style="max-width: 300px; font-size: 12px;"><?= esc($ex->description_en) ?></div>
                                </td>
                                <td>
                                    <?php if ($ex->status): ?>
                                        <span class="badge bg-success badge-status">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary badge-status">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-info text-white me-2" onclick="editExtra(<?= htmlspecialchars(json_encode($ex)) ?>)">
                                        <i class="ri-edit-line"></i> Edit
                                    </button>
                                    <a href="<?= base_url('admin/extracurriculars/delete/' . $ex->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus ekstrakurikuler ini?')">
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

<!-- Modal: Add/Edit Extracurricular -->
<div class="modal fade" id="extraModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="<?= base_url('admin/extracurriculars/save') ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="extra_id">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-dark" id="modalTitle">Tambah Ekstrakurikuler</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Ekstrakurikuler (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="title_id" id="title_id" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Ekstrakurikuler (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="title_en" id="title_en" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Class Icon RemixIcon</label>
                            <input type="text" name="icon" id="icon" class="form-control ps-3" placeholder="Contoh: ri-compass-3-line" required>
                            <div class="form-text">Gunakan class icon dari RemixIcon (https://remixicon.com).</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" id="status" class="form-select ps-3" required>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Deskripsi Kegiatan (ID) <span class="lang-pill">ID</span></label>
                            <textarea name="description_id" id="description_id" class="form-control ps-3" rows="4" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Deskripsi Kegiatan (EN) <span class="lang-pill">EN</span></label>
                            <textarea name="description_en" id="description_en" class="form-control ps-3" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-theme fw-semibold">Simpan Ekstrakurikuler</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function clearForm() {
        document.getElementById('extra_id').value = '';
        document.getElementById('title_id').value = '';
        document.getElementById('title_en').value = '';
        document.getElementById('icon').value = 'ri-star-line';
        document.getElementById('status').value = '1';
        document.getElementById('description_id').value = '';
        document.getElementById('description_en').value = '';
        document.getElementById('modalTitle').innerText = 'Tambah Ekstrakurikuler';
    }

    function editExtra(ex) {
        document.getElementById('extra_id').value = ex.id;
        document.getElementById('title_id').value = ex.title_id;
        document.getElementById('title_en').value = ex.title_en;
        document.getElementById('icon').value = ex.icon;
        document.getElementById('status').value = ex.status;
        document.getElementById('description_id').value = ex.description_id;
        document.getElementById('description_en').value = ex.description_en;

        document.getElementById('modalTitle').innerText = 'Edit Ekstrakurikuler';
        new bootstrap.Modal(document.getElementById('extraModal')).show();
    }
</script>
<?= $this->endSection() ?>
