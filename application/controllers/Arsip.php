<?php
// Metode yang digunakan untuk melakukan proses CRUD pada arsip

class Arsip extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	// method untuk tambah data buku
	public function insertbuku(){

		// baca data dari form insert buku
		$idkategori = $_POST['idkategori'];
		$nomor = $_POST['kode'] .'.'. $_POST['lantai'].'.' . $_POST['lemari'] .'.'. $_POST['rak'] .'.'. $_POST['urut'];
		$lokasi = 'Lantai '. $_POST['lantai'].' Lemari ke-' . $_POST['lemari'] .' Rak ke-'. $_POST['rak'] .' Nomor ke-'. $_POST['urut'];
		$departemen = $_POST['departemen'];
		$status = "Tersedia";
		$judul = $_POST['judul'];
		$thn = $_POST['thn'];
		$tglmasuk = date('j F Y');
		

		// panggil method insertBook() di model 'book_model' untuk menjalankan query insert
		$this->book_model->insertBuku($idkategori, $nomor, $departemen, $status, $judul, $thn, $tglmasuk, $lokasi);

		redirect('administrator/add');
	}

	// method untuk tambah data dokumen
	public function insertdoc(){

		// baca data dari form insert buku
		$idkategori = $_POST['idkategori'];
		$nomor = $_POST['kode'] .'.'. $_POST['lantai'] .'.'. $_POST['lemari'] .'.'. $_POST['rak'] .'.'. $_POST['urut'];
		$lokasi = 'Lantai '. $_POST['lantai'].' Lemari ke-' . $_POST['lemari'] .' Rak ke-'. $_POST['rak'] .' Nomor ke-'. $_POST['urut'];
		$departemen = $_POST['departemen'];
		$status = "Tersedia";
		$judul = $_POST['judul'];
		$thn = $_POST['thn'];
		$tglmasuk = date('j F Y');
		

		// panggil method insertDoc() di model 'book_model' untuk menjalankan query insert
		$this->book_model->insertDoc($idkategori, $nomor, $departemen, $status, $judul, $thn, $tglmasuk, $lokasi);

		redirect('administrator/add');
	}

	// method untuk tambah data laporan
	public function insertlap(){

		// baca data dari form insert buku
		$idkategori = $_POST['idkategori'];
		$nomor = $_POST['kode'] .'.'. $_POST['lantai'] .'.'. $_POST['lemari'] .'.'. $_POST['rak'] .'.'. $_POST['urut'];
		$lokasi = 'Lantai '. $_POST['lantai'].' Lemari ke-' . $_POST['lemari'] .' Rak ke-'. $_POST['rak'] .' Nomor ke-'. $_POST['urut'];
		$departemen = $_POST['departemen'];
		$status = "Tersedia";
		$judul = $_POST['judul'];
		$thn = $_POST['thn'];
		$tglmasuk = date('j F Y');

		// panggil method insertLap() di model 'book_model' untuk menjalankan query insert
		$this->book_model->insertLap($idkategori, $nomor, $departemen, $status, $judul, $thn, $tglmasuk, $lokasi);

		redirect('administrator/add');
	}

	// method untuk tambah data lainnya
	public function insertlain(){

		// baca data dari form insert buku
		$idkategori = $_POST['idkategori'];
		$nomor = $_POST['kode'] .'.'. $_POST['lantai'] .'.'. $_POST['lemari'] .'.'. $_POST['rak'] .'.'. $_POST['urut'];
		$lokasi = 'Lantai '. $_POST['lantai'].' Lemari ke-' . $_POST['lemari'] .' Rak ke-'. $_POST['rak'] .' Nomor ke-'. $_POST['urut'];
		$departemen = $_POST['departemen'];
		$status = "Tersedia";
		$judul = $_POST['judul'];
		$keterangan = $_POST['keterangan'];
		$thn = $_POST['thn'];
		$tglmasuk = date('j F Y');
		

		// panggil method insertLain() di model 'book_model' untuk menjalankan query insert
		$this->book_model->insertLain($idkategori, $nomor, $departemen, $status, $judul, $keterangan, $thn, $tglmasuk, $lokasi);

		redirect('administrator/add');
	}

	// method untuk tambah data surat
	public function insertsurat(){

		// baca data dari form insert buku
		$idkategori = $_POST['idkategori'];
		$nomor = $_POST['kode'] .'.'. $_POST['lantai'] .'.'. $_POST['lemari'] .'.'. $_POST['rak'] .'.'. $_POST['urut'];
		$lokasi = 'Lantai '. $_POST['lantai'].' Lemari ke-' . $_POST['lemari'] .' Rak ke-'. $_POST['rak'] .' Nomor ke-'. $_POST['urut'];
		$departemen = $_POST['departemen'];
		$status = "Tersedia";
		$nomorsurat = $_POST['nomorsurat'];
		$jenis = $_POST['jenis'];
		$dari = $_POST['dari'];
		$kepada = $_POST['kepada'];
		$judul = $_POST['judul'];
		$lampiran = $_POST['lampiran'];
		$thn = $_POST['thn'];
		$tglsurat = $_POST['hari'] . $_POST['bulan'] . $_POST['tahun'];
		$tglmasuk = date('j F Y');
		

		// panggil method insertSurat() di model 'book_model' untuk menjalankan query insert
		$this->book_model->insertSurat($idkategori, $nomor, $departemen, $status, $dari, $kepada, $nomorsurat, $jenis, $judul, $lampiran, $thn, $tglsurat, $tglmasuk, $lokasi);

		redirect('administrator/add');
	}

	// method untuk record peminjam
	public function insertpinjam(){

  		// baca data dari form insert buku
		$nomor = $_POST['nomor'];
		$departemen = $_POST['departemen'];
		$namapeminjam = $_POST['namapeminjam'];
		$nip = $_POST['nip'];
		$kontak = $_POST['kontak'];
		$tglpinjam = date('j F Y');

		// panggil method insertPinjam() di model 'book_model' untuk menjalankan query insert
		$this->book_model->insertPinjam($nomor, $departemen, $namapeminjam, $nip, $kontak, $tglpinjam);

		$key = $_SESSION['key'];

		$data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        $data['totalArsip'] = $this->book_model->hitungJumlah();
       
        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);    
        
        // tampilkan hasil pencarian di view 'dashboard/admin'
        redirect('administrator/search');
	}

	// method untuk update data buku
	public function ubuku(){

		// baca data dari form
		$lokasi = $_POST['lokasi'];
		$nomor = $_POST['nomor'];
		$departemen = $_POST['departemen'];
		$judul = $_POST['judul'];
		$thn = $_POST['thn'];
		$tglmasuk = $_POST['tglmasuk'];
		

		// panggil method uBuku() di model 'book_model' untuk menjalankan query insert
		$this->book_model->uBuku($nomor, $departemen, $judul, $thn, $tglmasuk, $lokasi);

		$key = $_SESSION['key'];

		$data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        $data['totalArsip'] = $this->book_model->hitungJumlah();
        
        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);    
        
        // tampilkan hasil pencarian di view 'dashboard/admin'
        redirect('administrator/search');
	}

	// method untuk update data dokumen
	public function udoc(){

		// baca data dari form 
		$lokasi = $_POST['lokasi'];
		$nomor = $_POST['nomor'];
		$departemen = $_POST['departemen'];
		$judul = $_POST['judul'];
		$thn = $_POST['thn'];
		$tglmasuk = $_POST['tglmasuk'];
		

		// panggil method uDoc() di model 'book_model' untuk menjalankan query update
		$this->book_model->uDoc($nomor, $departemen, $judul, $thn, $tglmasuk, $lokasi);

		$key = $_SESSION['key'];

		$data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        $data['totalArsip'] = $this->book_model->hitungJumlah();
        
        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);    
        
        // tampilkan hasil pencarian di view 'dashboard/admin'
        redirect('administrator/search');
	}
	
	// method untuk update data laporan
	public function ulap(){

		// baca data dari form
		$lokasi = $_POST['lokasi'];
		$nomor = $_POST['nomor'];
		$departemen = $_POST['departemen'];
		$judul = $_POST['judul'];
		$thn = $_POST['thn'];
		$tglmasuk = $_POST['tglmasuk'];
		

		// panggil method uDoc() di model 'book_model' untuk menjalankan query update
		$this->book_model->uLap($nomor, $departemen, $judul, $thn, $tglmasuk, $lokasi);

		$key = $_SESSION['key'];

		$data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        $data['totalArsip'] = $this->book_model->hitungJumlah();
        
        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);    
        
        // tampilkan hasil pencarian di view 'dashboard/admin'
        redirect('administrator/search');
	}

	// method untuk update data lainnya
	public function ulain(){

		// baca data dari form
		$lokasi = $_POST['lokasi'];
		$nomor = $_POST['nomor'];
		$departemen = $_POST['departemen'];
		$judul = $_POST['judul'];
		$keterangan = $_POST['keterangan'];
		$thn = $_POST['thn'];
		$tglmasuk = $_POST['tglmasuk'];
		

		// panggil method uLain() di model 'book_model' untuk menjalankan query update
		$this->book_model->uLain($nomor, $departemen, $judul, $keterangan, $thn, $tglmasuk, $lokasi);

		$key = $_SESSION['key'];

		$data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        $data['totalArsip'] = $this->book_model->hitungJumlah();
        
        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);    
        
        // tampilkan hasil pencarian di view 'dashboard/admin'
        redirect('administrator/search');
	}

	// method untuk update data surat
	public function usurat(){

		// baca data dari form
		$lokasi = $_POST['lokasi'];
		$nomor = $_POST['nomor'];
		$departemen = $_POST['departemen'];
		$nomorsurat = $_POST['nomorsurat'];
		$jenis = $_POST['jenis'];
		$judul = $_POST['judul'];
		$klasifikasi = $_POST['klasifikasi'];
		$dari = $_POST['dari'];
		$kepada = $_POST['kepada'];
		$lampiran = $_POST['lampiran'];
		$thn = $_POST['thn'];
		$tglsurat = $_POST['tglsurat'];
		$tglmasuk = $_POST['tglmasuk'];
		

		// panggil method uSurat() di model 'book_model' untuk menjalankan query update
		$this->book_model->uSurat($nomor, $departemen, $nomorsurat, $jenis, $klasifikasi, $dari, $kepada, $judul, $lampiran, $thn, $tglsurat, $tglmasuk, $lokasi);

		$key = $_SESSION['key'];

		$data['nama'] = $_SESSION['full'];
        $data['role'] = $_SESSION['role'];
        $data['totalArsip'] = $this->book_model->hitungJumlah();
        
        // panggil method findBook() dari model book_model untuk menjalankan query cari data
        $data['book'] = $this->book_model->findBook($key);    
        
        // tampilkan hasil pencarian di view 'dashboard/admin'
        redirect('administrator/search');
	}
	
}
?>