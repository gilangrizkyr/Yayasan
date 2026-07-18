<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Yayasan Khalifah Latif Cendaka</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- RemixIcon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css">
    <style>
        body {
            background: linear-gradient(135deg, #08284e 0%, #0d6efd 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
            color: #333;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 420px;
            padding: 40px 30px;
            transition: transform 0.3s ease;
        }
        .login-card:hover {
            transform: translateY(-5px);
        }
        .logo-area {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo-area i {
            font-size: 48px;
            color: #08284e;
            background: rgba(8, 40, 78, 0.1);
            padding: 15px;
            border-radius: 50%;
            display: inline-block;
            margin-bottom: 15px;
        }
        .logo-area h3 {
            font-weight: 700;
            color: #08284e;
            font-size: 22px;
            margin-bottom: 5px;
        }
        .logo-area p {
            color: #666;
            font-size: 14px;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px 16px 12px 45px;
            border: 1px solid #ddd;
            font-size: 14px;
        }
        .form-control:focus {
            border-color: #08284e;
            box-shadow: 0 0 0 3px rgba(8, 40, 78, 0.15);
        }
        .input-group-text {
            background: none;
            border: none;
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            color: #777;
            padding: 0;
        }
        .btn-login {
            background: #08284e;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }
        .btn-login:hover {
            background: #ffc107;
            color: #08284e;
        }
        .alert {
            border-radius: 8px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="logo-area">
        <i class="ri-shield-user-line"></i>
        <h3>Panel Admin</h3>
        <p>Yayasan Khalifah Latif Cendaka</p>
    </div>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger d-flex align-items-center gap-2" role="alert">
            <i class="ri-error-warning-line"></i>
            <div><?= session()->getFlashdata('error') ?></div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success d-flex align-items-center gap-2" role="alert">
            <i class="ri-checkbox-circle-line"></i>
            <div><?= session()->getFlashdata('success') ?></div>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/login') ?>" method="POST">
        <?= csrf_field() ?>
        
        <div class="mb-3 position-relative">
            <span class="input-group-text"><i class="ri-user-line"></i></span>
            <input type="text" name="username" class="form-control" placeholder="Username" required autocomplete="off">
        </div>

        <div class="mb-4 position-relative">
            <span class="input-group-text"><i class="ri-lock-line"></i></span>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <button type="submit" class="btn btn-login">
            <i class="ri-login-box-line me-2"></i> Masuk ke Panel
        </button>
    </form>
</div>

</body>
</html>
