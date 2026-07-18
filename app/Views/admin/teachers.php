<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Daftar Asatidzah & Tenaga Pengajar</span>
        <button class="btn btn-theme btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#teacherModal" onclick="clearForm()">
            <i class="ri-add-line me-1"></i> Tambah Pengajar
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4" style="width: 10%;">Foto</th>
                        <th>Nama Lengkap</th>
                        <th>Jabatan (ID / EN)</th>
                        <th>Keterangan (ID / EN)</th>
                        <th>Urutan</th>
                        <th>Status</th>
                        <th class="pe-4 text-end" style="width: 18%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($teachers)): ?>
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">Belum ada data pengajar.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($teachers as $t): ?>
                            <tr>
                                <td class="ps-4">
                                    <?php if ($t->photo): ?>
                                        <img src="<?= base_url($t->photo) ?>" alt="Guru" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                    <?php else: ?>
                                        <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 20px;">
                                            <i class="ri-user-line"></i>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td class="fw-bold text-dark"><?= esc($t->name) ?></td>
                                <td>
                                    <div class="fw-semibold text-primary"><?= esc($t->designation_id) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><?= esc($t->designation_en) ?></div>
                                </td>
                                <td>
                                    <div class="text-truncate" style="max-width: 250px;"><?= esc($t->description_id) ?></div>
                                    <div class="text-muted text-truncate" style="max-width: 250px; font-size: 12px;"><?= esc($t->description_en) ?></div>
                                </td>
                                <td><?= $t->list_order ?></td>
                                <td>
                                    <?php if ($t->status): ?>
                                        <span class="badge bg-success badge-status">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary badge-status">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-info text-white me-2" onclick="editTeacher(<?= htmlspecialchars(json_encode($t)) ?>)">
                                        <i class="ri-edit-line"></i> Edit
                                    </button>
                                    <a href="<?= base_url('admin/teachers/delete/' . $t->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data pengajar ini?')">
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

<!-- Modal: Add/Edit Teacher -->
<div class="modal fade" id="teacherModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="<?= base_url('admin/teachers/save') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="teacher_id">
            <input type="hidden" name="old_photo" id="old_photo">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-dark" id="modalTitle">Tambah Tenaga Pengajar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Lengkap & Gelar</label>
                            <input type="text" name="name" id="name" class="form-control ps-3" placeholder="KH. Abdul Latif, Lc." required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status / Jabatan (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="designation_id" id="designation_id" class="form-control ps-3" placeholder="Ketua Dewan Pembina" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status / Jabatan (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="designation_en" id="designation_en" class="form-control ps-3" placeholder="Chairman of Advisory Board" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Urutan Tampilan</label>
                            <input type="number" name="list_order" id="list_order" class="form-control ps-3" value="0" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Facebook URL</label>
                            <input type="text" name="facebook" id="facebook" class="form-control ps-3" placeholder="#">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Instagram URL</label>
                            <input type="text" name="instagram" id="instagram" class="form-control ps-3" placeholder="#">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">LinkedIn URL</label>
                            <input type="text" name="linkedin" id="linkedin" class="form-control ps-3" placeholder="#">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status Aktif</label>
                            <select name="status" id="status" class="form-select ps-3" required>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Foto Pengajar</label>
                            <input type="file" name="photo" id="photo" class="form-control ps-3">
                            <div id="photoPreviewContainer" class="mt-2 d-none">
                                <span class="d-block text-muted mb-1" style="font-size: 12px;">Foto Saat Ini:</span>
                                <img id="photoPreview" src="" alt="Preview" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Riwayat / Deskripsi Singkat (ID) <span class="lang-pill">ID</span></label>
                            <textarea name="description_id" id="description_id" class="form-control ps-3" rows="3"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Riwayat / Deskripsi Singkat (EN) <span class="lang-pill">EN</span></label>
                            <textarea name="description_en" id="description_en" class="form-control ps-3" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-theme fw-semibold">Simpan Pengajar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function clearForm() {
        document.getElementById('teacher_id').value = '';
        document.getElementById('old_photo').value = '';
        document.getElementById('name').value = '';
        document.getElementById('designation_id').value = '';
        document.getElementById('designation_en').value = '';
        document.getElementById('list_order').value = '0';
        document.getElementById('facebook').value = '#';
        document.getElementById('instagram').value = '#';
        document.getElementById('linkedin').value = '#';
        document.getElementById('status').value = '1';
        document.getElementById('description_id').value = '';
        document.getElementById('description_en').value = '';
        document.getElementById('photoPreviewContainer').classList.add('d-none');
        document.getElementById('modalTitle').innerText = 'Tambah Tenaga Pengajar';
    }

    function editTeacher(teacher) {
        document.getElementById('teacher_id').value = teacher.id;
        document.getElementById('old_photo').value = teacher.photo;
        document.getElementById('name').value = teacher.name;
        document.getElementById('designation_id').value = teacher.designation_id;
        document.getElementById('designation_en').value = teacher.designation_en;
        document.getElementById('list_order').value = teacher.list_order;
        document.getElementById('facebook').value = teacher.facebook;
        document.getElementById('instagram').value = teacher.instagram;
        document.getElementById('linkedin').value = teacher.linkedin;
        document.getElementById('status').value = teacher.status;
        document.getElementById('description_id').value = teacher.description_id;
        document.getElementById('description_en').value = teacher.description_en;

        if (teacher.photo) {
            document.getElementById('photoPreview').src = '<?= base_url() ?>' + teacher.photo;
            document.getElementById('photoPreviewContainer').classList.remove('d-none');
        } else {
            document.getElementById('photoPreviewContainer').classList.add('d-none');
        }

        document.getElementById('modalTitle').innerText = 'Edit Tenaga Pengajar';
        new bootstrap.Modal(document.getElementById('teacherModal')).show();
    }
</script>
<?= $this->endSection() ?>
