<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

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

    <div class="container">

        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <h1 class="text-center">Login Dulu</h1>
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <?= $this->session->flashdata('message'); ?>
                        <form class="forms-sample" class="user" method="post" action="<?= base_url('login'); ?>">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Username</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" name="username" placeholder="Username">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <input type="submit" value="Login" class="btn btn-common mr-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->
    <footer class="content-footer">
        <div class="footer">
            <div class="copyright">
                <span>Copyright © 2018 <b class="text-dark">UIdeck</b>. All Right Reserved</span>
                <span class="go-right">
                    <a href="" class="text-gray">Term &amp; Conditions</a>
                    <a href="" class="text-gray">Privacy &amp; Policy</a>
                </span>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    </div>
    <!-- Page Container END -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.app.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>