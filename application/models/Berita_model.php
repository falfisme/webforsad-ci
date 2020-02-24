<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    // buat masukin berita ke database
	function simpan_berita($jdl,$berita,$gambar,$departemen, $penulis, $keterangan){
        $hsl=$this->db->query("INSERT INTO berita (judul,isi,gambar,departemen,penulis,keterangan) VALUES ('$jdl','$berita','$gambar','$departemen','$penulis','$keterangan')");
        return $hsl;
    }

    // buat edit berita ke database
    function edit2($id_berita,$judul,$berita,$gambar,$departemen, $penulis, $keterangan){
        $hsl        =$this->db->query("UPDATE berita SET ( judul = '$judul', isi = '$isi', gambar = '$gambar', departemen = '$departemen', penulis = '$penulis', keterangan = '$keterangan' WHERE id_berita = '$id_berita'");
        return $hsl;
    }

    public function edit($id_berita)
    {
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->update('berita', $data);  
    }
 
    // buat nyari berita detail
    function get_berita_by_kode($kode){
        $hsl=$this->db->query("SELECT * FROM berita WHERE id_berita='$kode'");
        return $hsl;
    }
    public function get_berita($id_berita){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id_berita', $id_berita);
        $query = $this->db->get();
        return $query->row();
    }

    // ambil semua data berita
    public function listing(){
    	$this->db->select('*');
    	$this->db->from('berita');
    	$this->db->order_by('id_berita', 'desc');
    	$query = $this->db->get();
		return $query->result();
    }
    function get_all_berita(){
        $hsl=$this->db->query("SELECT * FROM berita ORDER BY id_berita DESC");
        return $hsl;
    }



	

}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */