<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Dashboard' ?> - Panel Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- RemixIcon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css">
    <!-- Google Font (Inter) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f6f9;
            overflow-x: hidden;
        }
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #08284e;
            color: #fff;
            z-index: 100;
            transition: all 0.3s;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
        }
        .sidebar-brand {
            padding: 24px;
            font-size: 18px;
            font-weight: 700;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: #ffc107;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar-menu {
            padding: 20px 0;
            list-style: none;
            margin: 0;
            height: calc(100vh - 80px);
            overflow-y: auto;
        }
        .sidebar-menu::-webkit-scrollbar {
            width: 5px;
        }
        .sidebar-menu::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }
        .sidebar-item a {
            padding: 12px 24px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s;
        }
        .sidebar-item a:hover, .sidebar-item.active a {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffc107;
            border-left: 4px solid #ffc107;
            padding-left: 20px;
        }
        .main-content {
            margin-left: 260px;
            padding: 30px;
            min-height: 100vh;
            transition: all 0.3s;
        }
        .top-navbar {
            background-color: #fff;
            padding: 15px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .user-dropdown {
            cursor: pointer;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            margin-bottom: 24px;
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #efefef;
            padding: 20px 24px;
            font-weight: 700;
            color: #08284e;
            font-size: 16px;
        }
        .card-body {
            padding: 24px;
        }
        .btn-theme {
            background-color: #08284e;
            color: #fff;
            border: none;
        }
        .btn-theme:hover {
            background-color: #ffc107;
            color: #08284e;
        }
        .btn-outline-theme {
            border: 2px solid #08284e;
            color: #08284e;
            background: none;
        }
        .btn-outline-theme:hover {
            background-color: #08284e;
            color: #fff;
        }
        .table th {
            font-weight: 600;
            color: #666;
            font-size: 13px;
            text-transform: uppercase;
            border-top: none;
        }
        .table td {
            font-size: 14px;
            vertical-align: middle;
        }
        .badge-status {
            padding: 6px 12px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
        }
        .lang-pill {
            background-color: rgba(255, 193, 7, 0.1);
            color: #b08200;
            font-size: 11px;
            font-weight: 700;
            padding: 4px 8px;
            border-radius: 4px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-brand">
        <i class="ri-government-line"></i>
        <span>Yasan Admin</span>
    </div>
    <ul class="sidebar-menu">
        <li class="sidebar-item <?= uri_string() === 'admin/dashboard' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/dashboard') ?>"><i class="ri-dashboard-3-line"></i> Dashboard</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/settings' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/settings') ?>"><i class="ri-settings-4-line"></i> Pengaturan Web</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/banners' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/banners') ?>"><i class="ri-slideshow-3-line"></i> Banner Slider</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/announcements' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/announcements') ?>"><i class="ri-notification-badge-line"></i> Pengumuman</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/events' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/events') ?>"><i class="ri-calendar-event-line"></i> Agenda & Kegiatan</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/teachers' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/teachers') ?>"><i class="ri-team-line"></i> Tenaga Pengajar</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/extracurriculars' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/extracurriculars') ?>"><i class="ri-compass-3-line"></i> Ekstrakurikuler</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/tuition-fees' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/tuition-fees') ?>"><i class="ri-wallet-3-line"></i> Uang Sekolah / SPP</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/gallery' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/gallery') ?>"><i class="ri-image-2-line"></i> Galeri Foto</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/testimonials' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/testimonials') ?>"><i class="ri-chat-quote-line"></i> Testimoni</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/blogs' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/blogs') ?>"><i class="ri-article-line"></i> Artikel Blog / Berita</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/admissions' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/admissions') ?>"><i class="ri-file-user-line"></i> Pendaftaran PPDB</a>
        </li>
        <li class="sidebar-item <?= uri_string() === 'admin/contacts' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/contacts') ?>"><i class="ri-mail-unread-line"></i> Pesan Hubungi Kami</a>
        </li>
        <li class="sidebar-item mt-4">
            <a href="<?= base_url('admin/logout') ?>" class="text-danger"><i class="ri-logout-box-r-line"></i> Keluar</a>
        </li>
    </ul>
</div>

<!-- Main Content Area -->
<div class="main-content">
    
    <!-- Top Navbar -->
    <div class="top-navbar">
        <div class="d-flex align-items-center gap-3">
            <h4 class="m-0 fw-bold text-dark" style="font-size: 20px;"><?= $title ?? 'Dashboard' ?></h4>
        </div>
        <div class="d-flex align-items-center gap-3">
            <a href="<?= base_url() ?>" target="_blank" class="btn btn-outline-theme btn-sm">
                <i class="ri-external-link-line me-1"></i> Lihat Website
            </a>
            <div class="dropdown">
                <div class="d-flex align-items-center gap-2 dropdown-toggle user-dropdown" data-bs-toggle="dropdown">
                    <div style="width: 36px; height: 36px; background-color: #08284e; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700;">
                        A
                    </div>
                    <span class="fw-semibold text-dark d-none d-md-inline" style="font-size: 14px;"><?= session()->get('username') ?></span>
                </div>
                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
                    <li><a class="dropdown-menu-item dropdown-item text-danger d-flex align-items-center gap-2" href="<?= base_url('admin/logout') ?>"><i class="ri-logout-box-line"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Alert Flash Message -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 d-flex align-items-center gap-2" role="alert">
            <i class="ri-checkbox-circle-line fs-5"></i>
            <div><?= session()->getFlashdata('success') ?></div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show shadow-sm border-0 d-flex align-items-center gap-2" role="alert">
            <i class="ri-error-warning-line fs-5"></i>
            <div><?= session()->getFlashdata('error') ?></div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- Yield Content -->
    <?= $this->renderSection('content') ?>

</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
