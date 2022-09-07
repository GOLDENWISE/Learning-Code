<?php

abstract class Produk {
    protected $judul, $penulis, $penerbit; 
    private $harga; 
    protected $diskon; 

    public function __construct( $judul, $penulis, $penerbit, $harga) {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "{$this->penulis} {$this->penerbit}";
    }

    public function getHarga() {
        return ($this->harga) - ($this->harga * $this->diskon / 100);
    }
    
    abstract public function getInfo();  
}