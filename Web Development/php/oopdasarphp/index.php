<?php

//interface merupakan kelas abstrak yang sama sekali tidak memiliki implementasi
//dengan kata lain, jika interface ini murni template untuk class turunannya (inheritance)
//interface tidak boleh memiliki property
//semua method harus dideklarasikan visibilitynya secara public
//boleh memiliki constructor
//satu class, bisa mengimplementasi 2 class

interface InfoProduk {
    public function infoProduk();
}

//abstract class = class yang tidak dapat diinstantiasi (dengan menggunakan variabelobjek dan keyword new)
//cara menginstantiasinya adalah melalui class turunannya (inheritance)
//dalam class abstrak, minimal harus ada 1 method abstrak
//dengan kata lain, abstrak digunakan sebagai konsep dasar dari suatu objek
//akan lebih baik melakukan composisi dibandingkan inheritance saja
//akan mempermudah saat bekerja dengan tim

//membuat class

abstract class Produk {
    //properti : variabel yang ada didalam suatu object 
    
    protected $judul, $penulis, $penerbit;
    
    //visibility: konsep yang digunakan untuk mengatur akses pada property dan method pada suatu object
    //keyword: public: properti dapat digunakan dimana saja
    //         protected: hanya dapat digunakan di suatu class dan class inheritance (child) nya
    //         private: hanya dapat digunakan class tertentu saja
    //visibility perlu diterapkan, untuk memperlihatkan properti class yang diperlukan saja ke client (yang tidak diperlukan, tidak perlu ditampilkan)
    
    private $harga; //hanya bisa diakses pada class produk
    protected $diskon; //hanya bisa diakses pada class produk dan class childnya (komik dan game)
    
    
    //constructor: dengan constructor, kita dapat memberikan nilai pada properti suatu object dengan menggunakan parameter dari new namaclass(isidata);
    
    public function __construct( $judul, $penulis, $penerbit, $harga) {
        
        //mengisi data yang dikirimkan melalui constructor ke properti pada class
        
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    

    //method : function yang ada didalam suatu object
    
    public function getLabel() {
        
        //untuk memanggil sebuah properti pada class di sebuah function, gunakan syntax this
        
        return "{$this->penulis} {$this->penerbit}";
    }
    
    
    //karena properti harga pada class ini hanya dapat diakses oleh class Produk dan childnya, maka untuk menampilkan harga dapat dilakukan dengan menggunakan function
    //getter

    public function getHarga() {
        return ($this->harga) - ($this->harga * $this->diskon / 100);
    }
    
    //method abstract
    // abstract public function infoProduk();
    abstract public function getInfo();
    
}

//inheritance: menciptakan hirarki antar class, yang membuat semua class saling berhubungan
//class yang dibuat dengan inheritance atau pewarisan dari class lain disebut child class
//contoh seperti dibawah
//syntax : class {namaclasschild} extends {namaclassparent}

//mengimplementasi class Komik dari interface InfoProduk
class Komik extends Produk implements InfoProduk {
    public $chapter;
    public function __construct( $judul, $penulis, $penerbit, $harga, $chapter ) {

        //overridding juga dapat mengakses constructor class parent dengan menggunakan syntax parent::__construct(parameter yang dikirimkan pada constructor class parent )
        
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->chapter = $chapter;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} ( Rp. {$this->getHarga()} )";
        return $str;
    }

    public function infoProduk() {

        //overridding: memungkinkan kita mengakses method class parent yang memiliki nama method nya sama dengan nama method class child
        //syntax: parent::namamethodpadaclassparentyangakandigunakan(parameteroptional)
        //contoh namamethodparentclass = tambah(); maka, pemanggilan method parent = parent::tambah();

        $str = "Komik : ". $this->getInfo() ." - {$this->chapter} chapter";
        return $str;
    }

    //setter
    
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }
}

class Game extends Produk implements InfoProduk {
    public $versi;
    
    public function __construct( $judul, $penulis, $penerbit, $harga, $versi ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->versi = $versi;
    }

    //implementasi class abstract
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} ( Rp. {$this->getHarga()} )";
        return $str;
    }
    
    //implementasi interface    
    public function infoProduk() {
        $str = "Game : ". $this->getInfo() ." versi {$this->versi}";
        return $str;
    }
}

class CetakProduk {
    public $daftarProduk = array();

    //jika parameter yang diminta merupakan objek dari class tertentu, maka, gunakan syntax : namaClassdarisuatuparameter $variabelyangmerupakanparameter
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

//membuat object dari suatu class dan mengisi data ke properti dari suatu object ke constructor

$komik = new Komik("One Piece", "Eichiro Oda", "Shonen Jump", 100000, 1057);
$game = new Game("Genshin Impact", "Hugh Tsai", "Hoyoverse", 0, 3);

$print = new CetakProduk();
$print->tambahProduk( $komik );
$print->tambahProduk( $game );
echo $print->tampilkanData();





// echo $komik->infoProduk()."<br>";
// echo $game->infoProduk()."<br>";
// echo "<hr>";
// $komik->setDiskon(50);
// echo $komik->infoProduk()."<br>";


// $infoProduk = new cetakProduk();
// echo $infoProduk->tampilkanData( $komik );
// echo $infoProduk->tampilkanData( $game );


//mengisi properti secara manual
//memberikan nilai atau data pada properti dari suatu class
// $komik->judul = "One Piece";
// $komik->penulis = "Eichiro Oda";
// $komik->penerbit = "Shonen Jump";
// $komik->harga = 100000;
// $game->judul = "Genshin Impact";
// //jika properti yang ditambahkan tidak ada pada class, maka secara otomatis object tersebut akan diisikan properti yang tidak ada tersebut
// $game->penulis = "Hugh Tsai";
// $game->penerbit = "Hoyoverse";
// $game->harga = "Free/Payment";

//autoloading: proses pemanggilan class dalam file tanpa menggunakan require
//dalam pengimplementasianya, 1 class disimpan dalam 1 file