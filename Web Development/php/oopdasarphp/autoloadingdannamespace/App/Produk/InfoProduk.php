<?php
//interface merupakan kelas abstrak yang sama sekali tidak memiliki implementasi
//dengan kata lain, jika interface ini murni template untuk class turunannya (inheritance)
//interface tidak boleh memiliki property
//semua method harus dideklarasikan visibilitynya secara public
//boleh memiliki constructor
//satu class, bisa mengimplementasi 2 interface

interface InfoProduk {
    public function infoProduk();
}