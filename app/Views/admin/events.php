<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Daftar Agenda Kegiatan</span>
        <button class="btn btn-theme btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#eventModal" onclick="clearForm()">
            <i class="ri-add-line me-1"></i> Tambah Kegiatan
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4" style="width: 15%;">Waktu & Tempat</th>
                        <th>Judul Agenda (ID / EN)</th>
                        <th>Keterangan (ID / EN)</th>
                        <th>Status</th>
                        <th class="pe-4 text-end" style="width: 18%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($events)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">Belum ada agenda kegiatan.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($events as $e): ?>
                            <tr>
                                <td class="ps-4">
                                    <div class="fw-semibold text-dark"><i class="ri-calendar-line me-1"></i> <?= date('d F Y', strtotime($e->date)) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><i class="ri-time-line me-1"></i> <?= esc($e->time) ?></div>
                                    <div style="font-size: 13px; color: #555;"><i class="ri-map-pin-line me-1"></i> <?= esc($e->venue_id) ?></div>
                                </td>
                                <td>
                                    <?php if ($e->image): ?>
                                        <img src="<?= base_url($e->image) ?>" alt="Event" class="rounded me-2 float-start" style="width: 60px; height: 60px; object-fit: cover;">
                                    <?php endif; ?>
                                    <div class="fw-bold text-dark"><?= esc($e->title_id) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><?= esc($e->title_en) ?></div>
                                </td>
                                <td>
                                    <div class="text-truncate" style="max-width: 250px;"><?= esc($e->content_id) ?></div>
                                    <div class="text-muted text-truncate" style="max-width: 250px; font-size: 12px;"><?= esc($e->content_en) ?></div>
                                </td>
                                <td>
                                    <?php if ($e->status): ?>
                                        <span class="badge bg-success badge-status">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary badge-status">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-info text-white me-2" onclick="editEvent(<?= htmlspecialchars(json_encode($e)) ?>)">
                                        <i class="ri-edit-line"></i> Edit
                                    </button>
                                    <a href="<?= base_url('admin/events/delete/' . $e->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">
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

<!-- Modal: Add/Edit Event -->
<div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="<?= base_url('admin/events/save') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="event_id">
            <input type="hidden" name="old_image" id="old_image">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-dark" id="modalTitle">Tambah Agenda Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Judul Kegiatan (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="title_id" id="title_id" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Judul Kegiatan (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="title_en" id="title_en" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tempat / Lokasi (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="venue_id" id="venue_id" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tempat / Lokasi (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="venue_en" id="venue_en" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tanggal</label>
                            <input type="date" name="date" id="date" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Jam Pelaksanaan</label>
                            <input type="text" name="time" id="time" class="form-control ps-3" placeholder="09.00 WIB - Selesai" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" id="status" class="form-select ps-3" required>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Gambar Pendukung</label>
                            <input type="file" name="image" id="image" class="form-control ps-3">
                            <div id="imagePreviewContainer" class="mt-2 d-none">
                                <span class="d-block text-muted mb-1" style="font-size: 12px;">Gambar Saat Ini:</span>
                                <img id="imagePreview" src="" alt="Preview" class="rounded" style="width: 120px; height: 60px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Deskripsi Kegiatan (ID) <span class="lang-pill">ID</span></label>
                            <textarea name="content_id" id="content_id" class="form-control ps-3" rows="4" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Deskripsi Kegiatan (EN) <span class="lang-pill">EN</span></label>
                            <textarea name="content_en" id="content_en" class="form-control ps-3" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-theme fw-semibold">Simpan Agenda</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function clearForm() {
        document.getElementById('event_id').value = '';
        document.getElementById('old_image').value = '';
        document.getElementById('title_id').value = '';
        document.getElementById('title_en').value = '';
        document.getElementById('venue_id').value = '';
        document.getElementById('venue_en').value = '';
        document.getElementById('date').value = '<?= date('Y-m-d') ?>';
        document.getElementById('time').value = '';
        document.getElementById('status').value = '1';
        document.getElementById('content_id').value = '';
        document.getElementById('content_en').value = '';
        document.getElementById('imagePreviewContainer').classList.add('d-none');
        document.getElementById('modalTitle').innerText = 'Tambah Agenda Kegiatan';
    }

    function editEvent(evt) {
        document.getElementById('event_id').value = evt.id;
        document.getElementById('old_image').value = evt.image;
        document.getElementById('title_id').value = evt.title_id;
        document.getElementById('title_en').value = evt.title_en;
        document.getElementById('venue_id').value = evt.venue_id;
        document.getElementById('venue_en').value = evt.venue_en;
        document.getElementById('date').value = evt.date;
        document.getElementById('time').value = evt.time;
        document.getElementById('status').value = evt.status;
        document.getElementById('content_id').value = evt.content_id;
        document.getElementById('content_en').value = evt.content_en;

        if (evt.image) {
            document.getElementById('imagePreview').src = '<?= base_url() ?>' + evt.image;
            document.getElementById('imagePreviewContainer').classList.remove('d-none');
        } else {
            document.getElementById('imagePreviewContainer').classList.add('d-none');
        }

        document.getElementById('modalTitle').innerText = 'Edit Agenda Kegiatan';
        new bootstrap.Modal(document.getElementById('eventModal')).show();
    }
</script>
<?= $this->endSection() ?>
