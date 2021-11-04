<?php
// Metode yang digunakan untuk menampilkan view halaman untuk guest

class Umum extends CI_Controller {

    public function __construct(){
       parent::__construct();
   }

    // halaman index dari umum
    public function beranda(){

        // tampilkan view 'umum/index'
        $this->load->view('umum/header');
        $this->load->view('umum/index'); 
    }

    // halaman help dari umum
    public function pembelajaran(){

        // tampilkan view 'umum/help'
        $this->load->view('umum/header');
        $this->load->view('umum/pembelajaran');
    }

    // halaman daftar dari umum
    public function daftar(){

        // tampilkan view 'umum/help'
        $this->load->view('umum/header');
        $this->load->view('umum/daftar');
    }

    // halaman about dari umum
    public function pesantren(){

        // tampilkan view 'umum/about'
        $this->load->view('umum/header');
        $this->load->view('umum/pesantren');
    }        

    public function search(){
        
        // baca key dari form cari data
        $key = $_POST['key'];

        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);
        $data['totalArsip'] = $this->book_model->hitungJumlah();

        // tampilkan hasil pencarian di view 'dashboard/admin'
        $this->load->view('umum/header');
        $this->load->view('umum/result', $data);
    }

    public function detailpinjam($id){
        $data['view_det'] = $this->book_model->getpe($id);

        // tampilkan view 'admin/peminjam'
        $this->load->view('umum/detail', $data);
    }

    public function detailsurat($id){
        $data['view_det'] = $this->book_model->getsurat($id);

        // tampilkan view 'admin/peminjam'
        $this->load->view('umum/detailsurat', $data);
    }
    
}
?>