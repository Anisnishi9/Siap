<?php
// Metode yang digunakan untuk melakukan proses CRUD pada kategori

class Kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kategori_model'); # <- add this

		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){

			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
	}

	// method hapus data buku berdasarkan id
	public function delete($id){
		$this->kategori_model->delKate($id);
		redirect('admin/kategori');
	}

	// method hapus data buku berdasarkan id
	public function deletea($id){
		$this->kategori_model->delKate($id);
		redirect('administrator/kategori');
	}

	// method untuk tambah data kategori
	public function insert(){

		// baca data dari form
		$kate = $_POST['kate'];

		// panggil method insertKate() di model 'kategori_model' untuk menjalankan query insert
		$this->kategori_model->insertKate($kate);
		redirect('admin/kategori');
	}

	// method untuk tambah data kategori
	public function inserta(){

		// baca data dari form
		$kate = $_POST['kate'];

		// panggil method insertKate() di model 'kategori_model' untuk menjalankan query insert
		$this->kategori_model->insertKate($kate);
		redirect('administrator/kategori');
	}
}
?>