<?php
class ContohStatic {
    //dengan keyword static, kita bisa membuat property atau method dalam konteks class (tanpa melakukan instantiasi diluar variabel menggunakan keyword new)

    public static $angka = 1;

    public static function halo() {

        //jika pada class yang diinstantiasi untuk memanggil property atau method pada class menggunakan this
        //untuk property atau method yang static, menggunakan keyword self::namapropertiataumethodyangsatuclassyangakandijalankan
    
        return "Halo ".self::$angka++." kali";
    }
}

//cara mengakses property atau method pada class yang memiliki keyword static 
//dengan menggunakan syntax NamaClass::propertyataumethodpadaclass

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();


//nilai property yang menggunakan keyword static tidak akan direset kembali
//jika pada obj pertama menggunakan nilai static dan kemudian nilai tersebut diubah yang awalnya 1 menjadi 2
//jika kemudian obj kedua juga menggunakan nilai static tersebut, nilai yang diakses oleh obj ke dua juga 2, bukan 1

