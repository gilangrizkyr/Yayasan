<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <span>Daftar Pesan Hubungi Kami</span>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead>
                    <tr>
                        <th class="ps-4" style="width: 20%;">Pengirim</th>
                        <th style="width: 25%;">Subjek</th>
                        <th>Isi Pesan</th>
                        <th style="width: 15%;">Tanggal Kirim</th>
                        <th class="pe-4 text-end" style="width: 10%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($messages)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">Belum ada pesan masuk.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($messages as $m): ?>
                            <tr>
                                <td class="ps-4">
                                    <div class="fw-bold text-dark"><?= esc($m->name) ?></div>
                                    <div style="font-size: 12px; color: #666;"><i class="ri-mail-line"></i> <?= esc($m->email) ?></div>
                                </td>
                                <td class="fw-semibold text-dark"><?= esc($m->subject) ?></td>
                                <td>
                                    <div class="text-wrap" style="font-size: 13px; color: #444; max-width: 400px;">
                                        <?= nl2br(esc($m->message)) ?>
                                    </div>
                                </td>
                                <td class="text-muted" style="font-size: 13px;">
                                    <?= date('d M Y, H:i', strtotime($m->created_at)) ?>
                                </td>
                                <td class="pe-4 text-end">
                                    <a href="<?= base_url('admin/contacts/delete/' . $m->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
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
<?= $this->endSection() ?>
