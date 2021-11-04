<?php
// Metode yang digunakan untuk menampilkan view halaman untuk user

class User extends CI_Controller { 

    public function __construct(){
       parent::__construct();
           if (!isset($_SESSION['username'])){
            // jika session 'username' blm ada, maka arahkan ke kontroller 'login'
            redirect('login');

            $data['nama'] = $_SESSION['full'];
            $data['status'] = $_SESSION['status'];
            $data['username'] = $_SESSION['username'];
        }
    }

	// halaman index dari user
    public function index(){

        // panggil method getKategori() di kategori_model untuk membaca data list kategori dari tabel kategori untuk ditampilkan ke view
        $data['nama'] = $_SESSION['full'];
        $data['status'] = $_SESSION['status'];
        $data['username'] = $_SESSION['username'];

        // tampilkan view 'user/index'
        $this->load->view('user/header', $data);
        $this->load->view('user/index', $data);
    }

        // halaman tambah dari user
    public function registrasi(){

        $data['nama'] = $_SESSION['full'];
        $data['status'] = $_SESSION['status'];
        $data['username'] = $_SESSION['username'];
        $data['panggilan'] = $_SESSION['panggilan'];
        $data['jeniskelamin'] = $_SESSION['jk'];
        $data['gol'] = $_SESSION['gol'];
        $data['tinggi'] = $_SESSION['tinggi'];
        $data['berat'] = $_SESSION['berat'];
        $data['saudara'] = $_SESSION['saudara'];
        $data['alamat'] = $_SESSION['alamat'];
        $data['nomorhp'] = $_SESSION['nomorhp'];

        // baca data username dan password dari form login
        $this->load->view('user/header', $data);
        $this->load->view('user/biodata', $data);
    }

    // halaman help dari user
    public function profil(){
        
        $data['nama'] = $_SESSION['full'];
        $data['status'] = $_SESSION['status'];

        $data['nomorhp'] = $_SESSION['nomorhp'];
        $data['nomorhpa'] = $_SESSION['nomorhpa'];
        $data['univ'] = $_SESSION['univ'];
        $data['hari'] = $_SESSION['hari'];
        $data['alamat'] = $_SESSION['alamat'];
        $data['jk'] = $_SESSION['jk'];

        $data['ibu'] = $_SESSION['ibu'];
        $data['ayah'] = $_SESSION['ayah'];
        $data['domisili'] = $_SESSION['domisili'];
        $data['telp'] = $_SESSION['telp'];

        $data['profil'] = $this->user_model->getProfile($username);

        // tampilkan view 'user/help'
        $this->load->view('user/header', $data);
        $this->load->view('user/profil', $data);
    }

       // halaman help dari user
    public function profilalumni(){
        
        $data['nama'] = $_SESSION['full'];
        $data['status'] = $_SESSION['status'];

        $data['nomorhp'] = $_SESSION['nomorhp'];
        $data['nomorhpa'] = $_SESSION['nomorhpa'];
        $data['univ'] = $_SESSION['univ'];
        $data['hari'] = $_SESSION['hari'];
        $data['alamat'] = $_SESSION['alamat'];
        $data['jk'] = $_SESSION['jk'];

        $data['ibu'] = $_SESSION['ibu'];
        $data['ayah'] = $_SESSION['ayah'];
        $data['domisili'] = $_SESSION['domisili'];
        $data['telp'] = $_SESSION['telp'];

        $data['profil'] = $this->user_model->getProfile($username);

        // tampilkan view 'user/help'
        $this->load->view('user/header', $data);
        $this->load->view('user/profilalumni', $data);
    }

    public function pembelajaran(){
        
        $data['nama'] = $_SESSION['full'];
        $data['status'] = $_SESSION['status'];
        $data['tahun'] = $_SESSION['tahun'];
        $data['universitas'] = $_SESSION['universitas'];

        // tampilkan view 'user/help'
        $this->load->view('user/header', $data);
        $this->load->view('user/pembelajaran', $data);
    }

    // halaman about dari user
    public function pesantren(){
        $data['nama'] = $_SESSION['full'];
        $data['status'] = $_SESSION['status'];
        
        // tampilkan view 'user/about'
        $this->load->view('user/header', $data);
        $this->load->view('user/pesantren');
    }

    // halaman about dari user
    public function pendidikan(){
        $data['nama'] = $_SESSION['full'];
        $data['status'] = $_SESSION['status'];

        $data['univ'] = $_SESSION['univ'];
        $data['fakultas'] = $_SESSION['fakultas'];
        $data['prodi'] = $_SESSION['prodi'];
        $data['semester'] = $_SESSION['semester'];
        $data['alamat'] = $_SESSION['alamatb'];
        $data['pesantren'] = $_SESSION['pesantren'];
        
        // tampilkan view 'user/about'
        $this->load->view('user/header', $data);
        $this->load->view('user/pendidikan', $data);
    }

    public function pekerjaan(){
        $data['nama'] = $_SESSION['full'];
        $data['status'] = $_SESSION['status'];

        $data['jenis'] = $_SESSION['jenis'];
        $data['instansi'] = $_SESSION['instansi'];
        $data['alamatinstansi'] = $_SESSION['alamatinstansi'];
        $data['kontak'] = $_SESSION['kontak'];
        
        // tampilkan view 'user/about'
        $this->load->view('user/header', $data);
        $this->load->view('user/pekerjaan', $data);
    }

    public function keluarga(){
        $data['nama'] = $_SESSION['full'];
        $data['status'] = $_SESSION['status'];

        $data['ayah'] = $_SESSION['ayah'];
        $data['ibu'] = $_SESSION['ibu'];
        $data['kerjaayah'] = $_SESSION['kerjaayah'];
        $data['kerjaibu'] = $_SESSION['kerjaibu'];
        $data['gajiayah'] = $_SESSION['gajiayah'];
        $data['gajiibu'] = $_SESSION['gajiibu'];
        $data['domisili'] = $_SESSION['domisili'];
        $data['telp'] = $_SESSION['telp'];
        
        // tampilkan view 'user/about'
        $this->load->view('user/header', $data);
        $this->load->view('user/keluarga', $data);
    }






        // method untuk mencari data buku berdasarkan 'key'
    public function search(){
        
        // baca key dari form cari data
        $key = $_POST['key'];
        $_SESSION['key'] = $key;


        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);
        $data['totalArsip'] = $this->book_model->hitungJumlah();
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        // tampilkan hasil pencarian di view 'dashboard/user'
        $this->load->view('user/header', $data);
        $this->load->view('user/result', $data);
    }

    // method hapus data arsip berdasarkan id
    public function delete($id){
        $this->book_model->delBook($id);
        $key = $_SESSION['key'];
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);
        
        // tampilkan hasil pencarian di view 'dashboard/user'
        redirect('user/search');
    }

    // halaman peminjam dari user
    public function peminjaman($id){
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        $data['view_book'] = $this->book_model->showBook($id);
        $data['nomor'] = $data['view_book']['nomor'];
        $data['departemen'] = $data['view_book']['departemen'];

        // tampilkan view 'user/peminjam'
        $this->load->view('user/header', $data);
        $this->load->view('user/peminjam', $data);
    }

    // halaman kembali dari user
    public function kembali($id){
        $tglkembali = date('j F Y');

        $key = $_SESSION['key'];
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);
        $data['totalArsip'] = $this->book_model->hitungJumlah();
        
        $this->book_model->kembali($id, $tglkembali);
        // tampilkan hasil pencarian di view 'dashboard/user'
        redirect('user/search');
    }

    public function detailpinjam($id){
        $data['view_det'] = $this->book_model->getpe($id);

        // tampilkan view 'user/peminjam'
        $this->load->view('user/detail', $data);
    }

    public function detailsurat($id){
        $data['view_det'] = $this->book_model->getsurat($id);

        // tampilkan view 'user/peminjam'
        $this->load->view('user/detailsurat', $data);
    }

        // halaman index dari user
    public function histori(){
        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        $data['view'] = $this->book_model->gethis();

        // tampilkan view 'user/index'
        $this->load->view('user/header', $data);
        $this->load->view('user/history', $data);
    }

            // halaman index dari user
    public function cari(){

        $law = $_POST['law'];
        $_SESSION['law'] = $law;

        $data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];

        $data['view'] = $this->book_model->searchist($law);

        // tampilkan view 'user/index'
        $this->load->view('user/header', $data);
        $this->load->view('user/history', $data);
    }

    // method untuk proses logout
    public function logout(){
        // hapus seluruh data session
        session_destroy();
        // redirect ke kontroller 'login'
        redirect('umum/beranda');
   }
}
?>