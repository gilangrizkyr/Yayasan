<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <span>Daftar Pendaftar PPDB Online</span>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4">Nama Pendaftar</th>
                        <th>Email / Telepon</th>
                        <th>Alamat Lengkap</th>
                        <th>Tgl Lahir</th>
                        <th>Catatan / Pesan</th>
                        <th>Status</th>
                        <th class="pe-4 text-end" style="width: 18%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($admissions)): ?>
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">Belum ada data pendaftar.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($admissions as $a): ?>
                            <tr>
                                <td class="ps-4">
                                    <div class="fw-bold text-dark"><?= esc($a->first_name) ?> <?= esc($a->last_name) ?></div>
                                    <span class="text-muted" style="font-size: 11px; text-transform: uppercase;">ID: #<?= $a->id ?></span>
                                </td>
                                <td>
                                    <div style="font-size: 13px; color: #444;"><i class="ri-mail-line"></i> <?= esc($a->email) ?></div>
                                    <div style="font-size: 12px; color: #777;"><i class="ri-phone-line"></i> <?= esc($a->phone) ?></div>
                                </td>
                                <td>
                                    <div style="font-size: 13px; color: #444; max-width: 200px;" class="text-wrap">
                                        <?= esc($a->address) ?>, <?= esc($a->city) ?>, <?= esc($a->country) ?> <?= esc($a->postal_code) ?>
                                    </div>
                                </td>
                                <td><?= date('d M Y', strtotime($a->birth_date)) ?></td>
                                <td style="font-size: 13px; color: #666; max-width: 200px;" class="text-wrap">
                                    <?= esc($a->message ?: '-') ?>
                                </td>
                                <td>
                                    <?php if ($a->status === 'Pending'): ?>
                                        <span class="badge bg-warning badge-status">Pending</span>
                                    <?php elseif ($a->status === 'Processed'): ?>
                                        <span class="badge bg-success badge-status">Processed</span>
                                    <?php else: ?>
                                        <span class="badge bg-danger badge-status"><?= esc($a->status) ?></span>
                                    <?php endif; ?>
                                </td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-info text-white me-2" onclick="openStatusModal(<?= htmlspecialchars(json_encode($a)) ?>)">
                                        <i class="ri-checkbox-circle-line"></i> Status
                                    </button>
                                    <a href="<?= base_url('admin/admissions/delete/' . $a->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data pendaftaran ini?')">
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

<!-- Modal: Update Status -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url('admin/admissions/update') ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="admission_id">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-dark">Ubah Status Pendaftaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Pendaftar:</label>
                        <p id="student_name" class="fw-bold text-dark mb-0"></p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Pilih Status Baru:</label>
                        <select name="status" id="admission_status" class="form-select ps-3" required>
                            <option value="Pending">Pending (Baru/Menunggu)</option>
                            <option value="Processed">Processed (Sedang Diproses)</option>
                            <option value="Rejected">Rejected (Ditolak)</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-theme fw-semibold">Update Status</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function openStatusModal(adm) {
        document.getElementById('admission_id').value = adm.id;
        document.getElementById('student_name').innerText = adm.first_name + ' ' + (adm.last_name || '');
        document.getElementById('admission_status').value = adm.status;
        new bootstrap.Modal(document.getElementById('statusModal')).show();
    }
</script>
<?= $this->endSection() ?>
