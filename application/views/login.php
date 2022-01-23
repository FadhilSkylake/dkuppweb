<body class="hold-transition login-page text-center">
    <div class="login-box">
        <div class="login-logo">
            <img src="<?= base_url('assets/template/') ?>/img/logo.png" class="mx-auto d-block" style="max-width:100px; margin-top: -7px;">
            <a><b>DKUPP SUBANG</b></a>
            <h5>Dinas Koperasi UMKM Perdagangan Perindustrian & Pasar</h5>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body card-outline card-success bg-gradient-success">
                <p class="login-box-msg">LOGIN</p>
                <form action="<?= base_url() ?>login/proses_login" method="POST">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="input-group mb-3">
                        <input type="text" id="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password" class="form-control" placeholder="Password" required="required" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <footer>
            <strong>Copyright &copy; DKUPP SUBANG</strong>
        </footer>
</body>