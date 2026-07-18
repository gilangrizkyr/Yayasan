<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Daftar Pengumuman Harian</span>
        <button class="btn btn-theme btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#announcementModal" onclick="clearForm()">
            <i class="ri-add-line me-1"></i> Tambah Pengumuman
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4" style="width: 15%;">Tanggal</th>
                        <th>Judul Pengumuman (ID / EN)</th>
                        <th>Isi Singkat (ID / EN)</th>
                        <th style="width: 12%;">Status</th>
                        <th class="pe-4 text-end" style="width: 18%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($announcements)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">Belum ada data pengumuman.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($announcements as $a): ?>
                            <tr>
                                <td class="ps-4 fw-semibold text-dark"><?= date('d F Y', strtotime($a->date)) ?></td>
                                <td>
                                    <div class="fw-bold text-dark"><?= esc($a->title_id) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><?= esc($a->title_en) ?></div>
                                </td>
                                <td>
                                    <div class="text-truncate" style="max-width: 250px;"><?= esc($a->content_id) ?></div>
                                    <div class="text-muted text-truncate" style="max-width: 250px; font-size: 12px;"><?= esc($a->content_en) ?></div>
                                </td>
                                <td>
                                    <?php if ($a->status): ?>
                                        <span class="badge bg-success badge-status">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary badge-status">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-info text-white me-2" onclick="editAnnouncement(<?= htmlspecialchars(json_encode($a)) ?>)">
                                        <i class="ri-edit-line"></i> Edit
                                    </button>
                                    <a href="<?= base_url('admin/announcements/delete/' . $a->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?')">
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

<!-- Modal: Add/Edit Announcement -->
<div class="modal fade" id="announcementModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="<?= base_url('admin/announcements/save') ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="announcement_id">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-dark" id="modalTitle">Tambah Pengumuman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Judul Pengumuman (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="title_id" id="title_id" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Judul Pengumuman (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="title_en" id="title_en" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tanggal</label>
                            <input type="date" name="date" id="date" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" id="status" class="form-select ps-3" required>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Isi Pengumuman (ID) <span class="lang-pill">ID</span></label>
                            <textarea name="content_id" id="content_id" class="form-control ps-3" rows="4" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Isi Pengumuman (EN) <span class="lang-pill">EN</span></label>
                            <textarea name="content_en" id="content_en" class="form-control ps-3" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-theme fw-semibold">Simpan Pengumuman</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function clearForm() {
        document.getElementById('announcement_id').value = '';
        document.getElementById('title_id').value = '';
        document.getElementById('title_en').value = '';
        document.getElementById('date').value = '<?= date('Y-m-d') ?>';
        document.getElementById('status').value = '1';
        document.getElementById('content_id').value = '';
        document.getElementById('content_en').value = '';
        document.getElementById('modalTitle').innerText = 'Tambah Pengumuman';
    }

    function editAnnouncement(ann) {
        document.getElementById('announcement_id').value = ann.id;
        document.getElementById('title_id').value = ann.title_id;
        document.getElementById('title_en').value = ann.title_en;
        document.getElementById('date').value = ann.date;
        document.getElementById('status').value = ann.status;
        document.getElementById('content_id').value = ann.content_id;
        document.getElementById('content_en').value = ann.content_en;

        document.getElementById('modalTitle').innerText = 'Edit Pengumuman';
        new bootstrap.Modal(document.getElementById('announcementModal')).show();
    }
</script>
<?= $this->endSection() ?>
