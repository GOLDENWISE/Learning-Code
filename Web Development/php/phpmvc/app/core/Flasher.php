<?php
class Flasher {
    public static function setFlash($pesan, $aksi, $tipe) {
        $_SESSION['Flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    } 

    public static function flash() {
        if( isset($_SESSION['Flash']) ) {
            echo '<div class="alert alert-'. $_SESSION['Flash']['tipe'] .' alert-dismissible fade show" role="alert"> Data Mahasiswa '. $_SESSION['Flash']['pesan'] . ' ' . $_SESSION['Flash']['aksi'] .'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            
            unset($_SESSION['Flash']);
        }
    }
}