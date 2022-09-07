<?php
class App {
    //property protected dibawah ini nanti akan digunakan sebagai class yang digunakan pada controller
    protected $controller = 'Home', //class default / controller default
              $method = 'index', //method default
              $params = [];

    public function __construct() {

        //controller
        $url = $this->parseURL();//url pasti berisi url yang kita masukkan (controller/method/parameteryangdikirimkan). cth (Home/index/satu, Home = controller, index = method, satu = parameter yang dikirimkan)
        
        //lakukan pengecekan apakah suatu file pada folder controllers tersedia
        if( file_exists("../app/controllers/{$url[0]}.php") ) {
            
            //replace properti controller dengan controller pada url
            $this->controller = $url[0];
            
            //kemudian hilangkan controller pada variabel url dari elemen array
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        
        //instantiasi class 
        $this->controller = new $this->controller;

        //method
        //cek, apakah didalam ada method yang diberikan
        if( isset($url[1]) ) {
            
            //cek method yang ditemukan
            //method_exists(namaobject(variabelyangmenginstantiasiclass), namamethodyangingindiperiksa)
            //jika method ada, mengembalikan nilai true, jika tidak, maka false  
            if( method_exists($this->controller, $url[1]) ) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        // kelola parameter
        // empty(nama arr): digunakan untuk memastikan apakah didalam array masih ada isinya
        if( !empty($url) ) {

            //array_values(namavariabelarray): mengembalikan nilai semua array pada variabel
            $this->params = array_values($url);
        }

        //jalankan controller dan method, dan params (jika ditemukan)
        // call_user_func_array([namaobject, namamethodpadaobject], namaparameter): digunakan untuk menjalankan contoller, method dan parameter yang diberikan
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    //melakukan proses parsing dari url
    //hal yang dilakukan adalah : mengambil url, kemudian dipecah sesuai keinginan kita

    public function parseURL() {
        if( isset($_GET['url']) ) {
            //rtrim(variabel, karakterstringyangingindihapuspadaakhirstring): menghapus karakter pada suatu string yang tidak diinginkan ada diakhir string 
            $url = rtrim($_GET['url'], '/');
            //filter_var($variabelyangingindifilter, FILTER_SANITIZE_URL) -> untuk menyaring karakter dari string yang bisa dikatakan aneh dan berisiko merusak keamanan
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        
        //controller dan method default
        $url = [$this->controller, $this->method];
        return $url;
    }
}

//konfigurasi htacces : wajib untuk pengelolaan web

//untuk menulis ulang url agar kelihatan rapi, metode yang digunakan :
//melakukan konfigurasi pada direktori dengan menggunakan file htaccess (file yang digunakan untuk memodifikasi konfigurasi dari server apache yang dilakukan perfolder)
//pertama, buat file htaccess di folder app
//kedua, didalam file htaccess, gunakan syntax Options -Indexes: jika didalam folder tidak ada file index, jangan tampilkan isi foldernya pada web
//ketiga, buat file htaccess di folder public
//keempat, didalam file htaccess di folder public, gunakan syntax Options -Multiviews: untuk menghindari kesalahan ketika memanggil file didalam folder public
//kelima, pada file yang sama, gunakan syntax RewriteEngine On: melakukan operasi Rewrite atau menulis ulang
//Pada RewriteEngine On, terdapat beberapa konfigurasi:
//RewriteCond %{REQUEST_FILENAME} !-d (RewriteCond(tulis ulang kondisi) %{REQUEST_FILENAME(melakukan request terhadap suatu file)} !-d(jika ditemukan folder, abaikan folder tersebut))
//RewriteCond %{REQUEST_FILENAME} !-f (RewriteCond(tulis ulang kondisi) %{REQUEST_FILENAME(melakukan request terhadap suatu file)} !-f(jika ditemukan file atau folder yang memiliki nama yang sama dengan controller dan method, hindari))
//keenam, gunakan syntax RewriteRule ^(.*)$ index.php?url=$1:  
//^: membaca apapun pada url mulai dari awal (tepatnya setelah folder public(folder dimana tempat .htaccess ini berada))
//.: mengambil apapun
//*: ambil karakter satu persatu (kecual enter)
//$: hingga selesai
//index.php?url=$1: apapun yang ditulis pada RewriteRule, simpan ke $_GET['url'] yang menyimpan file $1 pada index.php
//[L]: jika ada rule yang terpenuhi, jangan jalankan rule lain setelahnya (digunakan untuk keamanan)
