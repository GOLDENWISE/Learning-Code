<?php
class CetakProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }
    
    public function tampilkanData() {
        $str = "DAFTAR PRODUK<br>";
        
        foreach( $this->daftarProduk as $produk ) {
            $str .= "- {$produk->infoProduk()} <br>";
        }

        return $str;
    }
}