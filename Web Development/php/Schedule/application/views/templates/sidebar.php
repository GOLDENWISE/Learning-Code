<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-warning">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <div class="dropdown">
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
                <div class="menu">
                    <a href="<?= base_url(''); ?>" class="d-flex align-items-center pt-3 pb-1 mb-md-0 me-md-auto text-danger text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline text-center">Menu</span>
                    </a>
                </div>
                <ul class="list-group nav nav-pills flex-column mb-sm-auto mb-n0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item  list-group-item list-group-item-action">
                        <a href="<?= base_url('index.php/Home'); ?>" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house text-danger"></i> 
                            <span class="ms-1 d-none d-sm-inline text-danger">Home</span>
                        </a>
                    </li>
                    <li class=" list-group-item list-group-item-action">
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle collapsed" aria-expanded="false">
                            <i class="fs-4 bi-speedometer2 text-danger"></i> 
                            <span class="ms-1 d-none d-sm-inline text-danger">Tugas</span> 
                        </a>
                        <ul class="collapse nav flex-column ms-1 list-group" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100 sidebar  list-group-item list-group-item-action">
                                <a href="<?= base_url('index.php/Tugas/tambah'); ?>" class="nav-link px-0 text-danger">
                                    <i class="fs-4 bi-plus"></i>
                                    <span class="ms-2 d-none d-sm-inline text-danger">Tambah Tugas</span>
                                </a>
                            </li>
                            <li class="sidebar  list-group-item list-group-item-action">
                                <a href="<?= base_url('index.php/Tugas/index'); ?>" class="nav-link px-0 text-danger">
                                    <i class="fs-4 bi-eye"></i>
                                    <span class="ms-2 d-none d-sm-inline text-danger">Daftar Tugas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" list-group-item list-group-item-action">
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle collapsed" aria-expanded="false">
                            <i class="fs-4 bi-table text-danger"></i> 
                            <span class="ms-1 d-none d-sm-inline text-danger">Jadwal Sekolah/Kuliah</span> 
                        </a>
                        <ul class="collapse nav flex-column ms-1 list-group" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100 sidebar  list-group-item list-group-item-action">
                                <a href="<?= base_url('index.php/Jadwal/tambah'); ?>" class="nav-link px-0 text-danger">
                                    <i class="fs-4 bi-plus"></i>
                                    <span class="ms-2 d-none d-sm-inline text-danger">Tambah/Ganti Jadwal</span>
                                </a>
                            </li>
                            <li class="sidebar  list-group-item list-group-item-action">
                                <a href="<?= base_url('index.php/Jadwal/index'); ?>" class="nav-link px-0 align-middle text-danger">
                                    <i class="fs-4 bi-calendar-day text-danger"></i>
                                    <span class="ms-1 d-none d-sm-inline text-danger">Jadwal</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" list-group-item list-group-item-action">
                        <a href="<?= base_url('index.php/Auth/logout'); ?>" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-box-arrow-left text-danger"></i><span class="ms-2 d-none d-sm-inline text-danger">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>