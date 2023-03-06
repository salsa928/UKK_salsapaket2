<?php

class M_generate extends CI_Model{
    public function getPengaduanByTgl($tglAwal, $tglAkhir){
        $query = "SELECT tbl_pengaduan.id_pengaduan, tbl_pengaduan.nik, tbl_pengaduan.isi_laporan, tbl_pengaduan.status, tbl_masyarakat.nama FROM tbl_pengaduan, tbl_masyarakat WHERE tbl_pengaduan.nik = tbl_masyarakat.nik AND tbl_pengaduan.tgl_pengaduan BETWEEN '".$tglAwal."' AND '".$tglAkhir."' ORDER BY tbl_pengaduan.tgl_pengaduan ASC";
        return $this->db->query($query)->result(); 
    }

    public function getMasyarakatAll(){
        return $this->db->get('tbl_masyarakat')->result();
    }
    
    public function getPetugasAll(){
        return $this->db->get_where('tbl_admin',['level' => 2])->result();
    }

    public function getTanggapanAll(){
        // return $this->db->get('tbl_tanggapan')->result();
        $this->db->select('*');
        $this->db->from('tbl_tanggapan');
        $this->db->join('tbl_admin', 'tbl_admin.id_admin = tbl_tanggapan.id_admin');
        return $this->db->get()->result();
    }
}