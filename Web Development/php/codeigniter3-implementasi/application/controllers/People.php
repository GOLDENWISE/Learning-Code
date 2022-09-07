<?php
//config folder: routes: untuk set routing controller, autoload: untuk set suatu hal secara otomatis (salah satunya database), database: mengatur konfigurasi database
//untuk controller, extends CI_Controller
class People extends CI_Controller {
    
    public function __construct() {
        //$this->load->model('namafilemodel', 'nama alias(optional)')
        parent::__construct();
        $this->load->model('Peoples_model', 'peoples');
    }
    public function index() {

        //pagination: membuat penghalaman pada website
        $this->load->library('pagination');

        

        //config
        //set config pertama untuk base url yang akan diberikan pagination
        $config["base_url"] = "http://localhost/codeigniter3/People/index";

        //set config kedua untuk total rows, atau total data pada table
        $config["total_rows"] = $this->peoples->countAllPeoples();

        //set config ketiga untuk limit data yang akan ditampilkan per halaman
        $config["per_page"] = 12;

        //styling pagination
        //tag pembuka: tag paling awal
        $config["full_tag_open"] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        $config["full_tag_close"] = '</ul></nav>';
        
        //customisasi style pada bagian first
        $config["first_link"] = 'First';
        $config["first_tag_open"] = '<li class="page-item">';
        $config["first_tag_close"] = '</li>';
        
        //customisasi style pada bagian last
        $config["last_link"] = 'Last';
        $config["last_tag_open"] = '<li class="page-item">';
        $config["last_tag_close"] = '</li>';
        
        //customisasi style pada bagian next
        $config["next_link"] = '&raquo';
        $config["next_tag_open"] = '<li class="page-item">';
        $config["next_tag_close"] = '</li>';
        
        //customisasi style pada bagian previous
        $config["prev_link"] = '&laquo';
        $config["prev_tag_open"] = '<li class="page-item">';
        $config["prev_tag_close"] = '</li>';
        
        //customisasi style pada bagian halaman yang aktif
        $config["cur_tag_open"] = '<li class="page-item active"><a class="page-link" href="#">';
        $config["cur_tag_close"] = '</a></li>';
        
        //customisasi style pada bagian angka (1 2 3 4 5 ...);
        $config["num_tag_open"] = '<li class="page-item">';
        $config["num_tag_close"] = '</li>';

        //memberikan attribut pada tag a
        $config["attributes"] = array('class' => 'page-link');

        //hasil customisasi style diatas, dapat digambar seperti dibawah
        /*
          <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">First</li>
                <li class="page-item">&laquo</li>
                <li class="page-item">&raquo</li>
                <li class="page-item">1</li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li> -->halaman aktif
                <li class="page-item">...</li>
                <li class="page-item">Last</li>
            </ul>
          </nav>
        */
        //yang mana, customisasi diatas, merupakan customisasi dari bootstrap

        //setelah config diset, inisialisasi config tersebut menggunakan syntax dibawah
        $this->pagination->initialize($config);

        //$this->uri->segment(segmenturl);==> untuk menunjukkan pada segmen data pada url yang diinginkan
        //semisal segmenturl = 3 dengan url = http://localhost/public/codeigniter3/People/index/2, maka segment url = 3 merujuk ke parameter 2. 
        //jika segmenturl = 1, maka url merujuk kepada People
        $data["start"] = $this->uri->segment(3);
        $data["title"] = "List Of People";

        $data["peoples"] = $this->peoples->getPeoples($config["per_page"], $data["start"]);
        $this->load->view('templates/header', $data);
        $this->load->view('people/index', $data);
        $this->load->view('templates/footer');
    }

}