<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $judul; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/line-icons.css'); ?>">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css'); ?>">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css'); ?>">

</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <a href="index.html">
                            <b><img src="<?= base_url('assets/img/logo.png') ?>" alt=""></b>
                            <span class="logo">
                                <img src="<?= base_url('assets/img/logo-text.png') ?>" alt="">
                            </span>
                        </a>
                    </div>
                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="lni-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="lni-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="<?= base_url('assets/img/avatar/avatar.jpg') ?>" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item avatar-info">
                                            <div class="media-img">
                                                <img src="<?= base_url('assets/img/avatar/avatar.jpg') ?>" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">
                                                    <h3>Admin</h3>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="<?= base_url('login/logout') ?>">
                                        <i class="lni-lock"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->