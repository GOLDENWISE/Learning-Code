<?php
class Game extends Produk implements InfoProduk {
    public $versi;
    
    public function __construct( $judul, $penulis, $penerbit, $harga, $versi ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->versi = $versi;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} ( Rp. {$this->getHarga()} )";
        return $str;
    }
     
    public function infoProduk() {
        $str = "Game : ". $this->getInfo() ." versi {$this->versi}";
        return $str;
    }
}