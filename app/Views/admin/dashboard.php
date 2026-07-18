<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="row g-4">
    <!-- Stat 1 -->
    <div class="col-xl-3 col-md-6">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted fw-semibold mb-2" style="font-size: 13px; text-transform: uppercase;">Pendaftaran PPDB</h6>
                    <h3 class="fw-bold m-0 text-dark"><?= $admissions_count ?></h3>
                </div>
                <div style="width: 50px; height: 50px; background-color: rgba(13, 110, 253, 0.1); color: #0d6efd; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
                    <i class="ri-file-user-line"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Stat 2 -->
    <div class="col-xl-3 col-md-6">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted fw-semibold mb-2" style="font-size: 13px; text-transform: uppercase;">Pesan Masuk</h6>
                    <h3 class="fw-bold m-0 text-dark"><?= $messages_count ?></h3>
                </div>
                <div style="width: 50px; height: 50px; background-color: rgba(25, 135, 84, 0.1); color: #198754; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
                    <i class="ri-mail-unread-line"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Stat 3 -->
    <div class="col-xl-3 col-md-6">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted fw-semibold mb-2" style="font-size: 13px; text-transform: uppercase;">Artikel Blog</h6>
                    <h3 class="fw-bold m-0 text-dark"><?= $blogs_count ?></h3>
                </div>
                <div style="width: 50px; height: 50px; background-color: rgba(253, 126, 20, 0.1); color: #fd7e14; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
                    <i class="ri-article-line"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Stat 4 -->
    <div class="col-xl-3 col-md-6">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted fw-semibold mb-2" style="font-size: 13px; text-transform: uppercase;">Tenaga Pengajar</h6>
                    <h3 class="fw-bold m-0 text-dark"><?= $teachers_count ?></h3>
                </div>
                <div style="width: 50px; height: 50px; background-color: rgba(111, 66, 193, 0.1); color: #6f42c1; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
                    <i class="ri-team-line"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <!-- Recent Admissions -->
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Pendaftaran PPDB Terbaru</span>
                <a href="<?= base_url('admin/admissions') ?>" class="btn btn-sm btn-outline-theme">Lihat Semua</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover m-0">
                        <thead>
                            <tr>
                                <th class="ps-4">Nama</th>
                                <th>Email/Telepon</th>
                                <th>Status</th>
                                <th class="pe-4">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($recent_admissions)): ?>
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">Belum ada pendaftaran masuk.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($recent_admissions as $adm): ?>
                                    <tr>
                                        <td class="ps-4 fw-semibold text-dark"><?= esc($adm->first_name) ?> <?= esc($adm->last_name) ?></td>
                                        <td>
                                            <div style="font-size: 13px; color: #444;"><?= esc($adm->email) ?></div>
                                            <div style="font-size: 12px; color: #777;"><?= esc($adm->phone) ?></div>
                                        </td>
                                        <td>
                                            <?php if ($adm->status === 'Pending'): ?>
                                                <span class="badge bg-warning badge-status">Pending</span>
                                            <?php elseif ($adm->status === 'Processed'): ?>
                                                <span class="badge bg-success badge-status">Processed</span>
                                            <?php else: ?>
                                                <span class="badge bg-danger badge-status"><?= esc($adm->status) ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="pe-4 text-muted" style="font-size: 13px;"><?= date('d M Y, H:i', strtotime($adm->created_at)) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Messages -->
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Pesan Hubungi Kami Terbaru</span>
                <a href="<?= base_url('admin/contacts') ?>" class="btn btn-sm btn-outline-theme">Lihat Semua</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover m-0">
                        <thead>
                            <tr>
                                <th class="ps-4">Pengirim</th>
                                <th>Subjek</th>
                                <th class="pe-4">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($recent_messages)): ?>
                                <tr>
                                    <td colspan="3" class="text-center py-4 text-muted">Belum ada pesan masuk.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($recent_messages as $msg): ?>
                                    <tr>
                                        <td class="ps-4 fw-semibold text-dark">
                                            <?= esc($msg->name) ?>
                                            <div style="font-size: 12px; font-weight: normal; color: #777;"><?= esc($msg->email) ?></div>
                                        </td>
                                        <td style="font-size: 13px; color: #444;"><?= esc($msg->subject) ?></td>
                                        <td class="pe-4 text-muted" style="font-size: 12px;"><?= date('d M H:i', strtotime($msg->created_at)) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
