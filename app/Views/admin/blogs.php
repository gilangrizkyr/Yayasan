<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Daftar Artikel Blog & Berita</span>
        <button class="btn btn-theme btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#blogModal" onclick="clearForm()">
            <i class="ri-add-line me-1"></i> Tambah Artikel
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4" style="width: 12%;">Gambar</th>
                        <th>Judul Artikel (ID / EN)</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Tanggal Terbit</th>
                        <th class="pe-4 text-end" style="width: 18%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($blogs)): ?>
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Belum ada artikel berita.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($blogs as $b): ?>
                            <tr>
                                <td class="ps-4">
                                    <?php if ($b->image): ?>
                                        <img src="<?= base_url($b->image) ?>" alt="Blog" class="rounded" style="width: 80px; height: 50px; object-fit: cover;">
                                    <?php else: ?>
                                        <div class="rounded bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 80px; height: 50px; font-size: 16px;">
                                            <i class="ri-image-line"></i>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="fw-bold text-dark"><?= esc($b->title_id) ?></div>
                                    <div class="text-muted" style="font-size: 12px;"><?= esc($b->title_en) ?></div>
                                </td>
                                <td>
                                    <span class="badge" style="background-color: <?= $b->color ?? '#0d6efd' ?>; color: #fff;">
                                        <?= esc($b->category_name_id) ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($b->status): ?>
                                        <span class="badge bg-success badge-status">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary badge-status">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                <td><?= date('d M Y, H:i', strtotime($b->created_at)) ?></td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-info text-white me-2" onclick="editBlog(<?= htmlspecialchars(json_encode($b)) ?>)">
                                        <i class="ri-edit-line"></i> Edit
                                    </button>
                                    <a href="<?= base_url('admin/blogs/delete/' . $b->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
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

<!-- Modal: Add/Edit Blog Post -->
<div class="modal fade" id="blogModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <form action="<?= base_url('admin/blogs/save') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="blog_id">
            <input type="hidden" name="old_image" id="old_image">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-dark" id="modalTitle">Tambah Artikel Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Judul Artikel (ID) <span class="lang-pill">ID</span></label>
                            <input type="text" name="title_id" id="title_id" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Judul Artikel (EN) <span class="lang-pill">EN</span></label>
                            <input type="text" name="title_en" id="title_en" class="form-control ps-3" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Kategori Berita</label>
                            <select name="category_id" id="category_id" class="form-select ps-3" required>
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?= $cat->id ?>"><?= esc($cat->name_id) ?> / <?= esc($cat->name_en) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Status Publikasi</label>
                            <select name="status" id="status" class="form-select ps-3" required>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Gambar Utama</label>
                            <input type="file" name="image" id="image" class="form-control ps-3">
                            <div id="imagePreviewContainer" class="mt-2 d-none">
                                <span class="d-block text-muted mb-1" style="font-size: 12px;">Gambar Saat Ini:</span>
                                <img id="imagePreview" src="" alt="Preview" class="rounded" style="width: 100px; height: 50px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Konten Artikel (ID) <span class="lang-pill">ID</span></label>
                            <textarea name="content_id" id="content_id" class="form-control ps-3" rows="10" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Konten Artikel (EN) <span class="lang-pill">EN</span></label>
                            <textarea name="content_en" id="content_en" class="form-control ps-3" rows="10" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-theme fw-semibold">Simpan Artikel</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function clearForm() {
        document.getElementById('blog_id').value = '';
        document.getElementById('old_image').value = '';
        document.getElementById('title_id').value = '';
        document.getElementById('title_en').value = '';
        document.getElementById('category_id').value = '<?= $categories[0]->id ?? '' ?>';
        document.getElementById('status').value = '1';
        document.getElementById('content_id').value = '';
        document.getElementById('content_en').value = '';
        document.getElementById('imagePreviewContainer').classList.add('d-none');
        document.getElementById('modalTitle').innerText = 'Tambah Artikel Blog';
    }

    function editBlog(post) {
        document.getElementById('blog_id').value = post.id;
        document.getElementById('old_image').value = post.image;
        document.getElementById('title_id').value = post.title_id;
        document.getElementById('title_en').value = post.title_en;
        document.getElementById('category_id').value = post.category_id;
        document.getElementById('status').value = post.status;
        document.getElementById('content_id').value = post.content_id;
        document.getElementById('content_en').value = post.content_en;

        if (post.image) {
            document.getElementById('imagePreview').src = '<?= base_url() ?>' + post.image;
            document.getElementById('imagePreviewContainer').classList.remove('d-none');
        } else {
            document.getElementById('imagePreviewContainer').classList.add('d-none');
        }

        document.getElementById('modalTitle').innerText = 'Edit Artikel Blog';
        new bootstrap.Modal(document.getElementById('blogModal')).show();
    }
</script>
<?= $this->endSection() ?>
