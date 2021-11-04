<?php

class Book_model extends CI_Model {


	// method untuk insert data buku ke tabel 'books'
	public function insertBuku($idkategori, $nomor, $departemen, $status, $judul, $thn, $tglmasuk, $lokasi){
		$data = array(
			"idkategori" => $idkategori,
			"nomor" => $nomor,
			"departemen" => $departemen,
			"status" => $status,
			"judul" => $judul,
			"thn" => $thn,
			"tglmasuk" => $tglmasuk,
			"lokasi" => $lokasi,
		);
		$query = $this->db->insert('buku', $data);
	}

	public function insertDoc($idkategori, $nomor, $departemen, $status, $judul, $thn, $tglmasuk, $lokasi){
		$data = array(
			"idkategori" => $idkategori,
			"nomor" => $nomor,
			"departemen" => $departemen,
			"status" => $status,
			"judul" => $judul,
			"thn" => $thn,
			"tglmasuk" => $tglmasuk,
			"lokasi" => $lokasi,
		);
		$query = $this->db->insert('doc', $data);
	}

	public function insertLap($idkategori, $nomor, $departemen, $status, $judul, $thn, $tglmasuk, $lokasi){
		$data = array(
			"idkategori" => $idkategori,
			"nomor" => $nomor,
			"departemen" => $departemen,
			"status" => $status,
			"judul" => $judul,
			"thn" => $thn,
			"tglmasuk" => $tglmasuk,
			"lokasi" => $lokasi,
		);
		$query = $this->db->insert('lap', $data);
	}

	public function insertLain($idkategori, $nomor, $departemen, $status, $judul, $keterangan, $thn, $tglmasuk, $lokasi){
		$data = array(
			"idkategori" => $idkategori,
			"nomor" => $nomor,
			"departemen" => $departemen,
			"status" => $status,
			"judul" => $judul,
			"keterangan" => $keterangan,
			"thn" => $thn,
			"tglmasuk" => $tglmasuk,
			"lokasi" => $lokasi,
		);
		$query = $this->db->insert('lain', $data);
	}

	public function insertSurat($idkategori, $nomor, $departemen, $status, $klasifikasi, $dari, $kepada, $nomorsurat, $jenis, $judul, $lampiran, $thn, $tglsurat, $tglmasuk, $lokasi){
		$data = array(
			"idkategori" => $idkategori,
			"nomor" => $nomor,
			"departemen" => $departemen,
			"status" => $status,
			"klasifikasi" => $klasifikasi,
			"nomorsurat" => $nomorsurat,
			"jenis" => $jenis,
			"dari" => $dari,
			"kepada" => $kepada,
			"judul" => $judul,
			"lampiran" => $lampiran,
			"thn" => $thn,
			"tglsurat" => $tglsurat,
			"tglmasuk" => $tglmasuk,
			"lokasi" => $lokasi,
		);
		$query = $this->db->insert('surat', $data);
	}

	public function insertPinjam($nomor, $departemen, $namapeminjam, $nip, $kontak, $tglpinjam){
		$datainsert = array(
			"nomorarsip" => $nomor,
			"departemen" => $departemen,
			"namapeminjam" => $namapeminjam,
			"nippeminjam" => $nip,
			"kontak" => $kontak,
			"tglpinjam" => $tglpinjam,
		);

		$this->db->insert('peminjaman', $datainsert);
		$this->db->query("UPDATE buku SET status = 'Terpinjam' WHERE nomor = '$nomor'");
		$this->db->query("UPDATE doc SET status = 'Terpinjam' WHERE nomor = '$nomor'");
		$this->db->query("UPDATE lap SET status = 'Terpinjam' WHERE nomor = '$nomor'");
		$this->db->query("UPDATE lain SET status = 'Terpinjam' WHERE nomor = '$nomor'");
		$this->db->query("UPDATE surat SET status = 'Terpinjam' WHERE nomor = '$nomor'");
	}

	public function kembali($id, $tglkembali){
		$dataupdate = array(
			"tglkembali" => $tglkembali,
		);

		$this->db->query("UPDATE peminjaman SET tglkembali = '$tglkembali' WHERE nomorarsip LIKE '%$id%' AND tglkembali IS NULL ");
		$this->db->query("UPDATE buku SET status = 'Tersedia' WHERE nomor LIKE '%$id%'");
		$this->db->query("UPDATE doc SET status = 'Tersedia' WHERE nomor LIKE '%$id%'");
		$this->db->query("UPDATE lap SET status = 'Tersedia' WHERE nomor LIKE '%$id%'");
		$this->db->query("UPDATE lain SET status = 'Tersedia' WHERE nomor LIKE '%$id%'");
		$this->db->query("UPDATE surat SET status = 'Tersedia' WHERE nomor LIKE '%$id%'");
	}

	// method untuk hapus data buku berdasarkan id
	public function delBook($id){
		$this->db->delete('buku', array("nomor" => $id));
		$this->db->delete('doc', array("nomor" => $id));
		$this->db->delete('lain', array("nomor" => $id));
		$this->db->delete('lap', array("nomor" => $id));
		$this->db->delete('surat', array("nomor" => $id));
	}

	// method untuk hapus data buku berdasarkan id
	public function delHis($id){
		$this->db->delete('peminjaman', array("nomorarsip" => $id));
	}

	// method untuk mencari data buku berdasarkan key
	public function findBook($key){

		$query = $this->db->query("SELECT nomor, judul, departemen, thn, tglmasuk, status, idkategori, lokasi, keterangan FROM buku WHERE judul LIKE '%$key%' 
			OR nomor LIKE '%$key%'
			OR status LIKE '%$key%'  
			OR lokasi LIKE '%$key%'
			OR thn LIKE '%$key%'
			OR tglmasuk LIKE '%$key%'
			OR departemen LIKE '%$key%'
			OR idkategori LIKE '%$key%'
			UNION SELECT nomor, judul, departemen, thn, tglmasuk, status, idkategori, lokasi, keterangan FROM doc WHERE judul LIKE '%$key%' 
			OR nomor LIKE '%$key%' 
			OR status LIKE '%$key%'  
			OR thn LIKE '%$key%'
			OR tglmasuk LIKE '%$key%'
			OR lokasi LIKE '%$key%'
			OR departemen LIKE '%$key%' 
			OR idkategori LIKE '%$key%'
			UNION SELECT nomor, judul, departemen, thn, tglmasuk, status, idkategori, lokasi, keterangan FROM lain WHERE judul LIKE '%$key%' 
			OR nomor LIKE '%$key%' 
			OR thn LIKE '%$key%'
			OR status LIKE '%$key%'  
			OR lokasi LIKE '%$key%'
			OR tglmasuk LIKE '%$key%'
			OR departemen LIKE '%$key%' 
			OR idkategori LIKE '%$key%'
			UNION SELECT nomor, judul, departemen, thn, tglmasuk, status, idkategori, lokasi, keterangan FROM lap WHERE judul LIKE '%$key%' 
			OR nomor LIKE '%$key%' 
			OR thn LIKE '%$key%'
			OR status LIKE '%$key%'  
			OR tglmasuk LIKE '%$key%'
			OR departemen LIKE '%$key%' 
			OR lokasi LIKE '%$key%'
			OR idkategori LIKE '%$key%'
			UNION SELECT nomor, judul, departemen, thn, tglmasuk, status, idkategori, lokasi, keterangan FROM surat WHERE judul LIKE '%$key%' 
			OR nomor LIKE '%$key%' 
			OR thn LIKE '%$key%'
			OR status LIKE '%$key%'
			OR lokasi LIKE '%$key%'  
			OR tglmasuk LIKE '%$key%'
			OR departemen LIKE '%$key%'
			OR idkategori LIKE '%$key%'");
		return $query->result_array();
	}	

	// method untuk menghitung data arip
	public function hitungJumlah(){   
		$query = $this->db->query("SELECT nomor FROM lain UNION ALL SELECT nomor FROM buku UNION ALL SELECT nomor FROM doc UNION ALL SELECT nomor FROM lap UNION ALL SELECT nomor FROM surat");
		if($query->num_rows()>0){
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	// method untuk menampilkan data buku
	public function showBook($id){
		// membaca semua data buku dari tabel 'books'
		$query =$this->db->query("SELECT nomor, judul, departemen, thn, tglmasuk, status, idkategori, lokasi, keterangan FROM lain WHERE nomor LIKE '%$id%' UNION ALL SELECT nomor, judul, departemen, thn, tglmasuk, status, idkategori, lokasi, keterangan FROM buku WHERE nomor LIKE '%$id%' UNION ALL SELECT nomor, judul, departemen, thn, tglmasuk, status, idkategori, lokasi, keterangan FROM doc WHERE nomor LIKE '%$id%' UNION ALL SELECT nomor, judul, departemen, thn, tglmasuk, status, idkategori, lokasi, keterangan FROM lap WHERE nomor LIKE '%$id%' UNION ALL SELECT nomor, judul, departemen, thn, tglmasuk, status, idkategori, lokasi, keterangan FROM surat WHERE nomor LIKE '%$id%'");

		return $query->row_array();
	}

	public function ddoc($id){
		$query=$this->db->query("SELECT * FROM doc WHERE nomor LIKE '%$id%'");
		return $query->row_array();
	}

	public function llap($id){
		$query=$this->db->query("SELECT * FROM lap WHERE nomor LIKE '%$id%' ");
		return $query->row_array();
	}

	public function ssurat($id){
		$query=$this->db->query("SELECT * FROM surat WHERE nomor LIKE '%$id%' ");
		return $query->row_array();
	}

	public function llain($id){
		$query=$this->db->query("SELECT * FROM lain WHERE nomor LIKE '%$id%' ");
		return $query->row_array();
	}

	public function getpe($id){
		$query=$this->db->query("SELECT * FROM peminjaman WHERE nomorarsip LIKE '%$id%' AND tglkembali IS NULL");
		return $query->result_array();
	}

	public function searchist($law){
		$query=$this->db->query("SELECT nomorarsip, departemen, namapeminjam, nippeminjam, kontak, tglpinjam, tglkembali FROM peminjaman WHERE nomorarsip LIKE '%$law%' 
			OR departemen LIKE '%$law%' 
			OR namapeminjam LIKE '%$law%'
			OR nippeminjam LIKE '%$law%'
			OR kontak LIKE '%$law%'  
			OR tglpinjam LIKE '%$law%'
			OR tglkembali LIKE '%$law%'");
		return $query->result_array();
	}

	public function gethis(){
		$this->db->order_by("tglkembali", "asc");
		$query = $this->db->get('peminjaman');
		return $query->result_array();
	}

	public function getsurat($id){
		$query=$this->db->query("SELECT * FROM surat WHERE nomor LIKE '%$id%' ");
		return $query->result_array();
	}

	public function uBuku($nomor, $departemen, $judul, $thn, $tglmasuk, $lokasi){
		$this->db->where('nomor', $nomor);
		$data = array(
			"judul" => $judul,
			"lokasi" => $lokasi,
			"nomor" => $nomor,
			"departemen" => $departemen,
			"thn" => $thn,
			"tglmasuk" => $tglmasuk,
		);
		$query =$this->db->update('buku', $data);
	}

	public function uDoc($nomor, $departemen, $judul, $thn, $tglmasuk, $lokasi){
		$this->db->where('nomor', $nomor);
		$data = array(
			"judul" => $judul,
			"lokasi" => $lokasi,
			"nomor" => $nomor,
			"departemen" => $departemen,
			"thn" => $thn,
			"tglmasuk" => $tglmasuk,
		);
		$query =$this->db->update('doc', $data);
	}

	public function uLap($nomor, $departemen, $judul, $thn, $tglmasuk, $lokasi){
		$this->db->where('nomor', $nomor);
		$data = array(
			"judul" => $judul,
			"lokasi" => $lokasi,
			"nomor" => $nomor,
			"departemen" => $departemen,
			"thn" => $thn,
			"tglmasuk" => $tglmasuk,
		);
		$query =$this->db->update('lap', $data);
	}
	
	public function uLain($nomor, $departemen, $judul, $keterangan, $thn, $tglmasuk, $lokasi){
		$this->db->where('nomor', $nomor);
		$data = array(
			"judul" => $judul,
			"lokasi" => $lokasi,
			"nomor" => $nomor,
			"departemen" => $departemen,
			"keterangan" => $keterangan,
			"thn" => $thn,
			"tglmasuk" => $tglmasuk,
		);
		$query =$this->db->update('lain', $data);
	}

	public function uSurat($nomor, $departemen, $nomorsurat, $jenis, $klasifikasi, $dari, $kepada, $judul, $lampiran, $thn, $tglsurat, $tglmasuk, $lokasi){
		$this->db->where('nomor', $nomor);
		$data = array(
			"judul" => $judul,
			"lokasi" => $lokasi,
			"nomor" => $nomor,
			"departemen" => $departemen,
			"klasifikasi" => $klasifikasi,
			"nomorsurat" => $nomorsurat,
			"thn" => $thn,
			"dari" => $dari,
			"kepada" => $kepada,
			"tglmasuk" => $tglmasuk,
			"tglsurat" => $tglsurat,
			"jenis" => $jenis,
			"lampiran" => $lampiran,
		);
		$query =$this->db->update('surat', $data);
	}
}
?>