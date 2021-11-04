<?php
// Metode yang digunakan untuk menampilkan view halaman untuk admin

class Administrator extends CI_Controller {

    public function __construct(){
       parent::__construct();
           if (!isset($_SESSION['username'])){
            $this->load->model('m_data');
            // jika session 'username' blm ada, maka arahkan ke kontroller 'login'
            redirect('login');
        }
    }

	// halaman index dari admin
    public function index(){
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        // tampilkan view 'admin/index'
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/index', $data);
    }

    // halaman help dari admin
    public function help(){
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        // tampilkan view 'admin/help'
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/help');
    }

    // halaman add dari admin
    public function add(){

        // panggil method getKategori() di kategori_model untuk membaca data list kategori dari tabel kategori untuk ditampilkan ke view
        $data['kategori'] = $this->book_model->getKategori();
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];


        // tampilkan view 'admin/add'
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/add', $data);
    }

    // halaman addadmin dari admin
    public function admin(){

        // panggil method getAdmin() di User_Model untuk membaca data list admin dari tabel admin untuk ditampilkan ke view
        $data['users'] = $this->user_model->getAdmin();
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        // tampilkan view 'admin/admin'
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/addadmin', $data);
    }

    // halaman about dari admin
    public function about(){
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        
        // tampilkan view 'admin/about'
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/about');
    }

    // halaman kategori dari admin
    public function kategori(){

        // panggil method getKategori() di kategori_model untuk membaca data list kategori dari tabel kategori untuk ditampilkan ke view
        $data['kategori'] = $this->book_model->getKategori();
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        
        // tampilkan view 'admin/kategori'
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/addkategori', $data);
    }

    // halaman tambah dari admin
    public function tambah(){
        // baca data username dan password dari form login
        $idkategori = $_POST['idkategori'];
        $data['role'] = $_SESSION['role'];
        
        // bandingkan password user dari database dengan yang disubmit via form
        if ($idkategori == 1){
                // panggil method getKategori() di kategori_model untuk membaca data list kategori dari tabel kategori untuk ditampilkan ke view
            $data['kategori'] = $this->book_model->getKategori();
            $data['nama'] = $_SESSION['full'];

            // jika password sama, maka simpan username dan fullname user ke session
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/addbuku', $data);
            
        } elseif ($idkategori == 2) {
            // panggil method getKategori() di kategori_model untuk membaca data list kategori dari tabel kategori untuk ditampilkan ke view
            $data['kategori'] = $this->book_model->getKategori();
            $data['nama'] = $_SESSION['full'];

            // jika password tidak sama, arahkan ke kontroler 'login/index' lagi
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/adddokumen', $data);

        } elseif ($idkategori == 3) {
            // panggil method getKategori() di kategori_model untuk membaca data list kategori dari tabel kategori untuk ditampilkan ke view
            $data['kategori'] = $this->book_model->getKategori();
            $data['nama'] = $_SESSION['full'];

            // jika password tidak sama, arahkan ke kontroler 'login/index' lagi
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/addlaporan', $data);

        } elseif ($idkategori == 4) {
            // panggil method getKategori() di kategori_model untuk membaca data list kategori dari tabel kategori untuk ditampilkan ke view
            $data['kategori'] = $this->book_model->getKategori();
            $data['nama'] = $_SESSION['full'];

            // jika password tidak sama, arahkan ke kontroler 'login/index' lagi
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/addsurat', $data);
            
        } else {
            // panggil method getKategori() di kategori_model untuk membaca data list kategori dari tabel kategori untuk ditampilkan ke view
            $data['kategori'] = $this->book_model->getKategori();
            $data['nama'] = $_SESSION['full'];

            // jika password tidak sama, arahkan ke kontroler 'login/index' lagi
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/addlainnya', $data);
        }
    }

    // method untuk mencari data buku berdasarkan 'key'
    public function search(){
        
        // baca key dari form cari data
        $key = $_POST['key'];
        $_SESSION['key'] = $key;

        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['totalArsip'] = $this->book_model->hitungJumlah();
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        $data['book'] = $this->book_model->findBook($key);

        // tampilkan hasil pencarian di view 'dashboard/admin'
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/result', $data);
    }
    
    public function edit($id){
        
        // baca data username dan password dari form login        
        $data['view_book'] = $this->book_model->showBook($id);
        $kateg = $data['view_book']['idkategori'];
        $_SESSION['kat'] = $kateg;
        $data['role'] = $_SESSION['role'];
        $data['nama'] = $_SESSION['full'];
        
        // bandingkan password user dari database dengan yang disubmit via form
        if ($kateg == 'Buku'){
   
            $data['nomor'] = $data['view_book']['nomor'];
            $data['departemen'] = $data['view_book']['departemen'];
            $data['judul'] = $data['view_book']['judul'];
            $data['tahun'] = $data['view_book']['thn'];
            $data['lokasi'] = $data['view_book']['lokasi'];
            $data['tglmasuk'] = $data['view_book']['tglmasuk'];
            
            // tampilkan hasil pencarian di view 'dashboard/admin'
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/editbuku', $data);
            
        } elseif ($kateg == 'Dokumen') {
            // panggil method getKategori() dan showBook() di book_model untuk membaca data list kategori dari tabel kategori dan mengambil data dokumen dari tabel untuk ditampilkan ke view
            $data['docs'] = $this->book_model->ddoc($id);
    
            $data['nomor'] = $data['docs']['nomor'];
            $data['departemen'] = $data['docs']['departemen'];
            $data['judul'] = $data['docs']['judul'];
            $data['tahun'] = $data['docs']['thn'];
            $data['lokasi'] = $data['view_book']['lokasi'];
            $data['tglmasuk'] = $data['docs']['tglmasuk'];
            
            // tampilkan hasil pencarian di view 'dashboard/admin'
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/editdokumen', $data);

        } elseif ($kateg == 'Laporan') {
            // panggil method getKategori() dan showBook() di book_model untuk membaca data list kategori dari tabel kategori dan mengambil data dokumen dari tabel untuk ditampilkan ke view
            $data['laps'] = $this->book_model->llap($id);
    
            $data['nomor'] = $data['laps']['nomor'];
            $data['departemen'] = $data['laps']['departemen'];
            $data['judul'] = $data['laps']['judul'];
            $data['tahun'] = $data['laps']['thn'];
            $data['lokasi'] = $data['laps']['lokasi'];
            $data['tglmasuk'] = $data['laps']['tglmasuk'];
            
            // tampilkan hasil pencarian di view 'dashboard/admin'
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/editlaporan', $data);

        } elseif ($kateg == 'Surat') {
            // panggil method getKategori() dan showBook() di book_model untuk membaca data list kategori dari tabel kategori dan mengambil data dokumen dari tabel untuk ditampilkan ke view
            $data['mails'] = $this->book_model->ssurat($id);
    
            $data['nomor'] = $data['view_book']['nomor'];
            $data['departemen'] = $data['view_book']['departemen'];
            $data['judul'] = $data['view_book']['judul'];
            $data['tahun'] = $data['view_book']['thn'];
            $data['dari'] = $data['mails']['dari'];
            $data['klasifikasi'] = $data['mails']['klasifikasi'];
            $data['lokasi'] = $data['view_book']['lokasi'];
            $data['kepada'] = $data['mails']['kepada'];
            $data['tglmasuk'] = $data['mails']['tglmasuk'];
            $data['nomorsurat'] = $data['mails']['nomorsurat'];
            $data['jenis'] = $data['mails']['jenis'];
            $data['lampiran'] = $data['mails']['lampiran'];
            $data['tglsurat'] = $data['mails']['tglsurat'];
            
            // tampilkan hasil pencarian di view 'dashboard/admin'
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/editsurat', $data);
            
        } else {
            // panggil method getKategori() dan showBook() di book_model untuk membaca data list kategori dari tabel kategori dan mengambil data dokumen dari tabel untuk ditampilkan ke view
            $data['lains'] = $this->book_model->llain($id);
    
            $data['nomor'] = $data['view_book']['nomor'];
            $data['departemen'] = $data['view_book']['departemen'];
            $data['judul'] = $data['view_book']['judul'];
            $data['tahun'] = $data['view_book']['thn'];
            $data['tglmasuk'] = $data['view_book']['tglmasuk'];
            $data['lokasi'] = $data['view_book']['lokasi'];

            // tampilkan hasil pencarian di view 'dashboard/admin'
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/editlainnya', $data);
        }
    }

    // halaman peminjam dari admin
    public function peminjaman($id){
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        $data['view_book'] = $this->book_model->showBook($id);
        $data['nomor'] = $data['view_book']['nomor'];
        $data['departemen'] = $data['view_book']['departemen'];

        // tampilkan view 'admin/peminjam'
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/peminjam', $data);
    }

    // method hapus data arsip berdasarkan id
    public function delete($id){
        $this->book_model->delBook($id);
        $key = $_SESSION['key'];
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        $data['totalArsip'] = $this->book_model->hitungJumlah();

        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);
        
        // tampilkan hasil pencarian di view 'dashboard/admin'
        redirect('administrator/search');
    }

    // method hapus data arsip berdasarkan id
    public function deleteh($id){
        $this->book_model->delHis($id);
        $key = $_SESSION['key'];
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['view'] = $this->book_model->searchist($law);
        
        // tampilkan hasil pencarian di view 'dashboard/admin'
        redirect('administrator/histori');
    }

    // halaman kembali dari admin
    public function kembali($id){
        $tglkembali = date('j F Y');
        $this->book_model->kembali($id, $tglkembali);

        $key = $_SESSION['key'];
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        $data['totalArsip'] = $this->book_model->hitungJumlah();
        
        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);    
        
        // tampilkan hasil pencarian di view 'dashboard/admin'
        redirect('administrator/search');
    }

    public function detailpinjam($id){
        $data['view_det'] = $this->book_model->getpe($id);

        // tampilkan view 'admin/peminjam'
        $this->load->view('administrator/detail', $data);
    }

    public function detailsurat($id){
        $data['view_det'] = $this->book_model->getsurat($id);

        // tampilkan view 'admin/peminjam'
        $this->load->view('administrator/detailsurat', $data);
    }

        // halaman index dari admin
    public function histori(){
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        $data['view'] = $this->book_model->gethis();

        // tampilkan view 'admin/index'
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/history', $data);
    }

            // halaman index dari admin
    public function cari(){

        $law = $_POST['law'];
        $_SESSION['law'] = $law;

        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        $data['view'] = $this->book_model->searchist($law);

        // tampilkan view 'admin/index'
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/history', $data);
    }


    // method untuk proses logout
    public function logout(){
        // hapus seluruh data session
        session_destroy();
        // redirect ke kontroller 'login'
        redirect('guest');
   }
} 
?>