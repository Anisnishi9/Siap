<?php
// Metode yang digunakan pada Halaman Default saat pertama masuk
class Login extends CI_Controller {

  //halaman index untuk kontroller login -> menampilkan view 'login/index'
  public function index(){

    // panggil method getKategori() di kategori_model untuk membaca data list kategori dari tabel kategori untuk ditampilkan ke view
    //    $data['kategori'] = $this->book_model->getKategori();
    // buat pemilihan kategori untuk login guru agar berbeda, untuk guru ditambahkan input data ngaji, untuk alumni registrasi ditambahkan pendidikan

    $this->load->view('umum/header');
    $this->load->view('umum/index', $data);
  }

  // method untuk proses submit login
  public function submit(){
    
    // baca data username dan password dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // panggil method getUserProfile() dari user_model untuk membaca data profile user
    $data['user'] = $this->user_model->getUserProfile($username);
    $data['profil'] = $this->user_model->getProfile($username);    
    $data['pendi'] = $this->user_model->getPendi($username);
    $data['kerja'] = $this->user_model->getKerja($username);
    
      
      // bandingkan password user dari database dengan yang disubmit via form
      if ($data['user']['pass'] == $password){
      
        // jika password sama, maka simpan username dan fullname user ke session
        $_SESSION['username'] = $username;
        $_SESSION['full'] = $data['user']['full'];
        $_SESSION['status'] = $data['user']['status'];

        // mengambil session dari tabel 'biodata'
        $_SESSION['panggilan'] = $data['profil']['namapanggilan'];
        $_SESSION['jk'] = $data['profil']['jeniskelamin'];
        $_SESSION['hari'] = $data['profil']['ttl'];
        $_SESSION['gol'] = $data['profil']['golongandarah'];
        $_SESSION['tinggi'] = $data['profil']['tinggibadan'];
        $_SESSION['berat'] = $data['profil']['beratbadan'];
        $_SESSION['saudara'] = $data['profil']['saudara'];
        $_SESSION['alamat'] = $data['profil']['alamat'];
        $_SESSION['nomorhp'] = $data['profil']['nomorhp'];
        $_SESSION['ayah'] = $data['profil']['ayah'];
        $_SESSION['ibu'] = $data['profil']['ibu'];
        $_SESSION['kerjaayah'] = $data['profil']['pekerjaanayah'];
        $_SESSION['kerjaibu'] = $data['profil']['pekerjaanibu'];
        $_SESSION['gajiayah'] = $data['profil']['penghasilanayah'];
        $_SESSION['gajiibu'] = $data['profil']['penghasilanibu'];
        $_SESSION['domisili'] = $data['profil']['domisili'];
        $_SESSION['telp'] = $data['profil']['telp'];

        // mengambil session dari tabel pendidikan
        $_SESSION['univ'] = $data['pendi']['universitas'];
        $_SESSION['fakultas'] = $data['pendi']['fakultas'];
        $_SESSION['prodi'] = $data['pendi']['prodi'];
        $_SESSION['semester'] = $data['pendi']['semester'];
        $_SESSION['alamatb'] = $data['pendi']['alamat'];
        $_SESSION['pesantren'] = $data['pendi']['pesantren'];

        // mengambil session dari tabel pekerjaan
        $_SESSION['jenis'] = $data['kerja']['jenispekerjaan'];
        $_SESSION['instansi'] = $data['kerja']['namainstansi'];
        $_SESSION['alamatinstansi'] = $data['kerja']['alamatinstansi'];
        $_SESSION['kontak'] = $data['kerja']['kontak'];
                
                if ($data['user']['status'] == 'Santri'){
                    // Cek apakah query insert nya sukses atau gagal // Jika sukses
                      echo "<script>alert('Login Berhasil! Selamat Datang, Santri!');window.location = '".base_url('user/')."';</script>";
                } else {
                    echo "<script>alert('Login Berhasil! Selamat Datang, Alumni');window.location = '".base_url('user/')."';</script>";
                }
      } else {
        // jika password tidak sama, arahkan ke kontroler 'login/index' lagi
        echo "<script>alert('Login Gagal!');window.location = '".base_url('login/')."';</script>";
        }

  }

}
?>