<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Rincian Biaya Pendidikan (PPDB & SPP)</span>
        <button class="btn btn-theme btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#feeModal" onclick="clearForm()">
            <i class="ri-add-line me-1"></i> Tambah Rincian Biaya
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4">Jenjang Pendidikan (ID / EN)</th>
                        <th>Biaya Pendaftaran</th>
                        <th>Uang Pangkal / Uang Gedung</th>
                        <th>SPP Bulanan</th>
                        <th>Uang Buku & Seragam</th>
                        <th>Urutan</th>
                        <th class="pe-4 text-end" style="width: 18%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($fees)): ?>
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">Belum ada rincian biaya.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($fees as $f): ?>
                            <tr>
                                <td class="ps-4">
                                    <div class="fw-bold text-dark"><?= esc($f->level_id) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><?= esc($f->level_en) ?></div>
                                </td>
                                <td class="fw-semibold">Rp <?= number_format($f->registration_fee, 0, ',', '.') ?></td>
                                <td class="fw-semibold">Rp <?= number_format($f->base_fee, 0, ',', '.') ?></td>
                                <td class="fw-semibold text-primary">Rp <?= number_format($f->monthly_spp, 0, ',', '.') ?></td>
                                <td class="fw-semibold">Rp <?= number_format($f->books_uniforms_fee, 0, ',', '.') ?></td>
                                <td><?= $f->list_order ?></td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-info text-white me-2" onclick="editFee(<?= htmlspecialchars(json_encode($f)) ?>)">
                                        <i class="ri-edit-line"></i> Edit
                                    </button>
                                    <a href="<?= base_url('admin/tuition-fees/delete/' . $f->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus rincian biaya ini?')">
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

<!-- Modal: Add/Edit Fee -->
<div class="modal fade" id="feeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="<?= base_url('admin/tuition-fees/save') ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="fee_id">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-dark" id="modalTitle">Tambah Rincian Biaya</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Jenjang (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="level_id" id="level_id" class="form-control ps-3" placeholder="SD Islam Terpadu" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Jenjang (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="level_en" id="level_en" class="form-control ps-3" placeholder="Integrated Islamic Elementary School" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Biaya Pendaftaran (Rp)</label>
                            <input type="number" name="registration_fee" id="registration_fee" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Uang Pangkal / Uang Gedung (Rp)</label>
                            <input type="number" name="base_fee" id="base_fee" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">SPP Bulanan (Rp)</label>
                            <input type="number" name="monthly_spp" id="monthly_spp" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Uang Buku & Seragam (Rp)</label>
                            <input type="number" name="books_uniforms_fee" id="books_uniforms_fee" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Urutan Tampilan</label>
                            <input type="number" name="list_order" id="list_order" class="form-control ps-3" value="0" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-theme fw-semibold">Simpan Biaya</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function clearForm() {
        document.getElementById('fee_id').value = '';
        document.getElementById('level_id').value = '';
        document.getElementById('level_en').value = '';
        document.getElementById('registration_fee').value = '';
        document.getElementById('base_fee').value = '';
        document.getElementById('monthly_spp').value = '';
        document.getElementById('books_uniforms_fee').value = '';
        document.getElementById('list_order').value = '0';
        document.getElementById('modalTitle').innerText = 'Tambah Rincian Biaya';
    }

    function editFee(fee) {
        document.getElementById('fee_id').value = fee.id;
        document.getElementById('level_id').value = fee.level_id;
        document.getElementById('level_en').value = fee.level_en;
        document.getElementById('registration_fee').value = fee.registration_fee;
        document.getElementById('base_fee').value = fee.base_fee;
        document.getElementById('monthly_spp').value = fee.monthly_spp;
        document.getElementById('books_uniforms_fee').value = fee.books_uniforms_fee;
        document.getElementById('list_order').value = fee.list_order;

        document.getElementById('modalTitle').innerText = 'Edit Rincian Biaya';
        new bootstrap.Modal(document.getElementById('feeModal')).show();
    }
</script>
<?= $this->endSection() ?>
