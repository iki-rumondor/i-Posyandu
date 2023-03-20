<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            i-Posyandu <b>Admin</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Masukkan Username dan Password Admin</p>

                <form action="/login" method="post">
                    <div class="input-group mb-3">
                        <input type="type" class="form-control" placeholder="Username" name="username">
                        <div class="input-group-append">

                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>

                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input id="form-password" type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
                        <div class="input-group-append">

                            <a href="#" class="btn input-group-text" id="password-hide">
                                <span class="fas fa-eye-slash"></span>
                            </a>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Log In</button>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
    <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
    <script src="<?= base_url('assets/custom/unhidePassword.js') ?>"></script>

    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
            });
            <?php if ($session->has('fail')) : ?>
                Toast.fire({
                    icon: 'error',
                    title: '<?= $session->getFlashdata('fail') ?>'
                })
            <?php endif; ?>
        });
    </script>


</body>

</html>