<?php
// Metode yang digunakan pada bagian ADDADMIN

class Daftar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model'); 
	}

	// method untuk pendaftaran santri
	public function insert(){
		$full = $_POST['full'];
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$status = $_POST['status'];
		$jk = $_POST['jk'];

		$this->user_model->insertUser($full, $uname, $pass, $status, $jk);
		$this->user_model->insertProfil($full, $uname, $status, $jk);

		$data['user'] = $this->user_model->getUserProfile($username);
		if ($data['user']['uname'] == '$uname'){
                      echo "<script>alert('Email Sudah digunakan');window.location = '".base_url('umum/daftar')."';</script>";
                } else {
                    echo "<script>alert('Anda Sudah Terdaftar');window.location = '".base_url('umum/beranda')."';</script>";
                }
	}

	// method untuk registrasi biodata santri
	public function bio(){
		$lengkap = $_SESSION['full'];
		$uname = $_SESSION['username'];
		$status = $_SESSION['status'];
		$panggilan = $_POST['panggilan'];
		$gol = $_POST['gol'];
		$tinggi = $_POST['tinggi'];
		$berat = $_POST['berat'];
		$saudara = $_POST['saudara'];
		$nomorhp = $_POST['nomorhp'];
		$alamat = $_POST['alamat'];
		$jk = $_SESSION['jk'];
		$hari = $_POST['hari'];

		$this->user_model->insertBio($lengkap, $uname, $panggilan, $gol, $tinggi, $berat, $saudara, $nomorhp, $alamat, $jk, $hari, $status);

		// arahkan untuk me reload halaman 
		if ($status == "Santri"){
			$this->user_model->insertPend($uname);
			redirect('user/pendidikan');
			
		} else {
			$this->user_model->insertPekerja($uname);
			redirect('user/pekerjaan');
		}
	}

	// method untuk registrasi pendidikan santri
	public function pendidikan(){
		$univ = $_POST['univ'];
		$fakultas = $_POST['fakultas'];
		$prodi = $_POST['prodi'];
		$semester = $_POST['semester'];
		$alamat = $_POST['alamat'];
		$pesantren = $_POST['pesantren'];
		$uname = $_SESSION['username'];

		$data['profil'] = $this->user_model->getProfile($username);

        $_SESSION['haria'] = $data['profil']['haria'];
        $_SESSION['panggilana'] = $data['profil']['namapanggilana'];
        $_SESSION['jka'] = $data['profil']['jeniskelamina'];
        $_SESSION['gola'] = $data['profil']['golongandaraha'];
        $_SESSION['tinggia'] = $data['profil']['tinggibadana'];
        $_SESSION['berata'] = $data['profil']['beratbadana'];
        $_SESSION['saudaraa'] = $data['profil']['saudaraa'];
        $_SESSION['alamata'] = $data['profil']['alamata'];
        $_SESSION['nomorhpa'] = $data['profil']['nomorhpa'];

        // arahkan untuk me reload halaman 
		if ($status == "Santri"){
			$this->user_model->insertPendidikan($univ, $fakultas, $prodi, $semester, $alamat, $pesantren, $uname);
			redirect('user/keluarga');
			
		} else {
			$this->user_model->insertPendidikan($univ, $fakultas, $prodi, $semester, $alamat, $pesantren, $uname);
			redirect('user/keluarga');
		}
	}

	// method untuk registrasi pekerjaan santri
	public function pekerjaan(){
		$jenis = $_POST['jenis'];
		$instansi = $_POST['instansi'];
		$alamatinstansi = $_POST['alamatinstansi'];
		$kontak = $_POST['kontak'];
		$uname = $_SESSION['username'];

		$data['profil'] = $this->user_model->getProfile($username);

        $_SESSION['haria'] = $data['profil']['haria'];
        $_SESSION['panggilana'] = $data['profil']['namapanggilana'];
        $_SESSION['jka'] = $data['profil']['jeniskelamina'];
        $_SESSION['gola'] = $data['profil']['golongandaraha'];
        $_SESSION['tinggia'] = $data['profil']['tinggibadana'];
        $_SESSION['berata'] = $data['profil']['beratbadana'];
        $_SESSION['saudaraa'] = $data['profil']['saudaraa'];
        $_SESSION['alamata'] = $data['profil']['alamata'];
        $_SESSION['nomorhpa'] = $data['profil']['nomorhpa'];

        // arahkan untuk me reload halaman
		$this->user_model->insertPekerjaan($jenis, $instansi, $alamatinstansi, $kontak, $uname);
		redirect('user/pendidikan');
	}

	// method untuk registrasi keluarga santri
	public function keluarga(){
		$uname = $_SESSION['username'];
		$ayah = $_POST['ayah'];
		$ibu = $_POST['ibu'];
		$kerjaayah = $_POST['kerjaayah'];
		$kerjaibu = $_POST['kerjaibu'];
		$gajiayah = $_POST['gajiayah'];
		$gajiibu = $_POST['gajiibu'];
		$domisili = $_POST['domisili'];
		$telp = $_POST['telp'];

		$data['profil'] = $this->user_model->getProfile($username);

        // arahkan untuk me reload halaman
		if ($status == "Santri"){
			$this->user_model->insertKel($ayah, $ibu, $kerjaayah, $kerjaibu, $gajiayah, $gajiibu, $domisili, $telp, $uname);
			redirect('user/profil');
			
		} else {
			$this->user_model->insertKel($ayah, $ibu, $kerjaayah, $kerjaibu, $gajiayah, $gajiibu, $domisili, $telp, $uname);
			redirect('user/profilalumni');
		}
	}
}
?>