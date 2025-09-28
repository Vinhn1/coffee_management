<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css custom -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
    <title>Mocha Coffee</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
        <div class="container-fluid">
            <!-- logo -->
            <a href="#" class="navbar-brand d-flex align-item-center">
                <img src="<?= BASE_URL ?>/images/logo2.png" width="40" height="40" alt="" class="logo me-2">
                <span>Mouse & Cheese</span>
            </a>

            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Thực Đơn</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Liên Hệ</a>
                    </li>
                    <li class="nav-item">
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dashbroad
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <li>

                                            <a class="dropdown-item" href="<?= BASE_URL ?>/index.php?controller=employee&action=list">
                                                <i class="fa-solid fa-users m-1"></i>
                                                Quản Lí Nhân Viên
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa-solid fa-mug-hot m-1"></i>
                                                Quản Lí Sản Phẩm
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa-solid fa-chart-line m-1"></i>
                                                Thống Kê
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Đăng Nhập (hiện khi màn hình nhỏ) -->
                    <li class="nav-item d-md-none">
                        <a href="#" class="nav-link nav-login">Đăng Nhập</a>
                    </li>
                </ul>
            </div>

            <!-- Đăng Nhập -->
            <div class="nav-login d-none d-md-block">
                <a href="#" class="btn btn-outline-light">Đăng Nhập</a>
            </div>
        </div>
    </nav>