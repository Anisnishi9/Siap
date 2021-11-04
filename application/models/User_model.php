<?php

class User_model extends CI_Model {

	public function getUserProfile($username){
		$query = $this->db->get_where('pengguna', array('uname' => $username));
		return $query->row_array();
	}

	public function getProfile($username){
		$query = $this->db->get_where('biodata', array('uname' => $username));
		return $query->row_array();
	}

	public function getPendi($username){
		$query = $this->db->get_where('pendidikan', array('uname' => $username));
		return $query->row_array();
	}

	public function getKerja($username){
		$query = $this->db->get_where('pekerjaan', array('uname' => $username));
		return $query->row_array();
	}




	public function insertUser($full, $uname, $pass, $status, $jk){
		$data = array(
			'uname' => $uname,
			'pass' => $pass,
			'full' => $full,
			'status' => $status,
			'jk' => $jk,
		 );
		$query = $this->db->insert('pengguna', $data);
	}

	public function insertProfil($full, $uname, $status, $jk){
		$data = array(
			'uname' => $uname,
			'namalengkap' => $full,
			'status' => $status,
			'jeniskelamin' => $jk,
		 );
		$query = $this->db->insert('biodata', $data);
	}



	public function insertPend($uname){
		$data = array(
			'uname' => $uname,
		 );
		$query = $this->db->insert('pendidikan', $data);
	}

	public function insertPekerja($uname){
		$data = array(
			'uname' => $uname,
		 );
		$query = $this->db->insert('pekerjaan', $data);
	}




	public function insertBio($lengkap, $uname, $panggilan, $gol, $tinggi, $berat, $saudara, $nomorhp, $alamat, $jk, $hari, $status){
		$this->db->where('uname', $uname);
		$data = array(
			'namalengkap'=> $lengkap,
			'namapanggilan'=> $panggilan,
			'jeniskelamin'=> $jk,
			'ttl'=> $hari,
			'golongandarah'=> $gol,
			'tinggibadan'=> $tinggi,
			'beratbadan'=> $berat,
			'saudara'=> $saudara,
			'alamat'=> $alamat,
			'nomorhp'=> $nomorhp,
			'uname'=> $uname,
			'status'=> $status,
		 );
		$query = $this->db->update('biodata', $data);
	}

	public function insertPendidikan($univ, $fakultas, $prodi, $semester, $alamat, $pesantren, $uname){
		$this->db->where('uname', $uname);
		$data = array(
			'universitas'=> $univ,
			'fakultas'=> $fakultas,
			'prodi'=> $prodi,
			'semester'=> $semester,
			'pesantren'=> $pesantren,
			'alamat'=> $alamat,
			'uname'=> $uname,
		 );
		$query = $this->db->update('pendidikan', $data);
	}

	public function insertPekerjaan($jenis, $instansi, $alamatinstansi, $kontak, $uname){
		$this->db->where('uname', $uname);
		$data = array(
			'jenispekerjaan'=> $jenis,
			'namainstansi'=> $instansi,
			'alamatinstansi'=> $alamatinstansi,
			'kontak'=> $kontak,
		 );
		$query = $this->db->update('pekerjaan', $data);
	}

	public function insertKel($ayah, $ibu, $kerjaayah, $kerjaibu, $gajiayah, $gajiibu, $domisili, $telp, $uname){
		$this->db->where('uname', $uname);
		$data = array(
			'ayah'=> $ayah,
			'ibu'=> $ibu,
			'pekerjaanayah'=> $kerjaayah,
			'pekerjaanibu'=> $kerjaibu,
			'penghasilanayah'=> $gajiayah,
			'penghasilanibu'=> $gajiibu,
			'domisili'=> $domisili,
			'telp'=> $telp,
		 );
		$query = $this->db->update('biodata', $data);
	}




	public function delUser($id){
		$this->db->delete('users', array("username" => $id));
	}

	public function getAdmin(){
		$query = $this->db->get('users');
		return $query->result_array();
	}

	public function detailP($dat){
		$query = $this->db->query("SELECT namapeminjam, nippeminjam, departemen FROM peminjaman WHERE nomorarsip LIKE '$dat' ");
		return $query->result_array();
	}
}
?>


