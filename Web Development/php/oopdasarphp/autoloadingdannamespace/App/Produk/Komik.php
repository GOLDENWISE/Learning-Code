<?php
class Komik extends Produk implements InfoProduk {
    public $chapter;
    
    public function __construct( $judul, $penulis, $penerbit, $harga, $chapter ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->chapter = $chapter;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} ( Rp. {$this->getHarga()} )";
        return $str;
    }

    public function infoProduk() {
        $str = "Komik : ". $this->getInfo() ." - {$this->chapter} chapter";
        return $str;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }
}