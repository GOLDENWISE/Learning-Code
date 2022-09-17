<div class="col py-0 px-0 container-fluid">
    <nav class="navbar bg-danger">
        <div class="dropdown ms-2">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url('assets/img/').$img; ?>" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong><?= $username; ?></strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="<?= base_url('index.php/Profile/index'); ?>">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?= base_url('index.php/Auth/logout'); ?>">Sign out</a></li>
            </ul>
        </div>
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand text-light" href="">
                <h1>Schedule App</h1>
            </a>
        </div>
    </nav>
    <div class="jumbotron">
        <section class="bg-primary py-5 container-fluid" style="--bs-bg-opacity: .5;">
            <h1 class="display-4 text-center mt-5 py-5">MENU</h1>
            <div class="my-5 py-3"></div>
        </section>
        <section class="container-fluid pe-5">
            <ul class="row my-5">
                <li class="col-md-3 d-table-row">
                    <a href="<?= base_url('index.php/Tugas/tambah'); ?>" class="nav-link mt-3">
                        <div class="hover-this border border-1 text-bg-primary rounded-pill">
                            <div class="my-3"></div>
                            <p class="col-12 text-center align-self-center">TAMBAHKAN TUGAS</p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3 d-table-row">
                    <a href="<?= base_url('index.php/Tugas/index'); ?>" class="nav-link mt-3">
                        <div class="hover-this border border-1 text-bg-primary rounded-pill">
                            <div class="my-3"></div>
                            <p class="col-12 text-center align-self-center">TUGAS</p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3 d-table-row">
                    <a href="<?= base_url('index.php/Jadwal/index'); ?>" class="nav-link mt-3">
                        <div class="hover-this border border-1 text-bg-primary rounded-pill">
                            <div class="my-3"></div>
                            <p class="col-12 text-center align-self-center">JADWAL</p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3 d-table-row">
                    <a href="<?= base_url('index.php/Jadwal/tambah'); ?>" class="nav-link mt-3">
                        <div class="hover-this border border-1 text-bg-primary rounded-pill">
                            <div class="my-3"></div>
                            <p class="col-12 text-center align-self-center">TAMBAHKAN JADWAL</p>
                        </div>
                    </a>
                </li>
            </ul>
        </section>
    </div>
</div>
        <script src="<?= base_url('assets/js/popper.min.js'); ?>" ></script>
        <script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
    </body>
</html>