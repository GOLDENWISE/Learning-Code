<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://www.codeigniter.com/" target="_blank">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-code"></i>
    </div>
    <div class="sidebar-brand-text mx-3">CodeIgniter</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">

<!--query menu access dari database-->
<?php

    $role_id = $this->session->userdata('role_id');
    //join: membuat dua table berhubungan
    //syntax join table => SELECT data yang diambil pada table
                //         FROM namatable yang diambil datanya sebelumnya JOIN namatableyangakandijoin
                //         ON  (data yang akan dijadikan sebagai foreign key)
                //         WHERE kondisi dari data yang diambil pada table yang akan dijoin
                //        (optional) ORDER BY data yang akan diambil diurut (ASC|DSC)
    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                    FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                    WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC";

    //maksud syntax diatas adalah=>PILIH pada table user_menu data id dan data menu
                                // data yang diambil di table user_menu, digabungkan dengan data di table user_access_menu
                                // nilai dari id yang diambil dari table user_menu bernilai sama dengan nilai dari menu_id di di table user_access_menu
                                // dan data yang diambil nantinya, mengharuskan role_id nya = role_id user yang mengakses
                                // ambil data menu_id di table user_access_menu dari bawah ke atas (ascending) secara terurut
   
    $menu = $this->db->query($queryMenu)->result_array();
?>

<!--LOOPING-->
<?php foreach( $menu as $m ) : ?>
    <div class="sidebar-heading">
        <?= $m['menu']; ?>
    </div>

    <!--SIAPKAN SUBMENU SESUAI MENU-->
    <?php 
    $menuId = $m['id'];
    $querySubMenu = "SELECT *
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id` 
                    WHERE `user_sub_menu`.`menu_id` = $menuId
                    AND  `user_sub_menu`.`is_active` = 1";
    $subMenu = $this->db->query($querySubMenu)->result_array();
    ?>

    <?php foreach( $subMenu as $sm ) : ?>
        <?php if( $title == $sm['title'] ) : ?>
            <li class="nav-item active">
        <?php else : ?>
            <li class="nav-item">
        <?php endif; ?>
            <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                <i class="<?= $sm['icon']; ?>"></i>
                <span><?= $sm['title'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
<?php endforeach; ?>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->