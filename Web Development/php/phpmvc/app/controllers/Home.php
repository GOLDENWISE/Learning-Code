<?php
class Home extends Controller {

    //method ini merupakan method default dari home

    public function index() {

        //mengirimkan alamat (controller/method) ke method view class controller di folder core file Controller sebagai parameter ke method view
        $data["title"] = "HOME";
        $this->view('templates/header', $data);
        //untuk mengambil data user, dapat menggunakan model
        //yang mana, data ini akan diambil dari file User_model.php di folder models
        //untuk penjelasan lebih lanjut, dapat dilihat dil file User_model.php pada folder model, dan file Controller.php di folder core
        $data["nama"] = $this->model("User_model")->getUser();
        $this->view('home/index', $data);
        $this->view('templates/footer');

    }
}