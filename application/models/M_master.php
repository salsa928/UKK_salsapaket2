<?php

/**
 * 
 */
class M_master extends CI_Model
{
	// Ambil semua data masyarakat
	public function getAllMasyarakat()
	{
		$this->db->order_by('nama', 'ASC');
		return $this->db->get('tbl_masyarakat')->result();
	}

	// Ambil data petugas yang levelnya 2
	public function getOnlyPetugas()
	{
		$this->db->order_by('nama', 'ASC');
		return $this->db->get_where('tbl_admin', ['level !=' => 1])->result();
	}
	public function getOnlyadmin()
	{
		$this->db->order_by('nama', 'ASC');
		return $this->db->get_where('tbl_admin', ['level !=' => 2])->result();
	}

	// Untuk menghapus data masyarakat
	public function del_masyarakat($nik)
	{
		$q = "SELECT * FROM tbl_pengaduan INNER JOIN tbl_tanggapan ON tbl_pengaduan.id_pengaduan = tbl_tanggapan.id_pengaduan WHERE tbl_pengaduan.nik = $nik";
		$hasil_join = $this->db->query($q)->result();
		if ($this->db->delete('tbl_masyarakat', ['nik' => $nik])) {
			$this->db->delete('tbl_tanggapan', ['id_pengaduan' => $hasil_join->id_pengaduan]);
			$pengaduan = $this->db->get_where('tbl_pengaduan', ['nik' => $nik])->row();
			unlink(FCPATH . 'asset/upload/' . $pengaduan->foto);
			$this->db->delete('tbl_pengaduan', ['nik' => $nik]);
			$this->session->set_flashdata('true', 'Data masyarakat berhasil di hapus');
			redirect('master/masyarakat');
		} else {
			$this->session->set_flashdata('false', 'Data masyarakat gagal di hapus');
			redirect('master/masyarakat');
		}
	}

	// Untuk Menonaktifkan Akun Masyarakat
	public function nonaktif_masyarakat($nik)
	{
		$this->db->set('aktif', 0);
		$this->db->where('nik', $nik);
		if ($this->db->update('tbl_masyarakat')) {
			$this->session->set_flashdata('true', 'Akun masyarakat berhasil di nonaktifkan');
			redirect('master/masyarakat');
		} else {
			$this->session->set_flashdata('false', 'Akun masyarakat gagal di nonaktifkan');
			redirect('master/masyarakat');
		}
	}

	// Untuk Mengaktifkan akun masyarakat
	public function aktif_masyarakat($nik)
	{
		$this->db->set('aktif', 1);
		$this->db->where('nik', $nik);
		if ($this->db->update('tbl_masyarakat')) {
			$this->session->set_flashdata('true', 'Akun masyarakat berhasil di aktifkan');
			redirect('master/masyarakat');
		} else {
			$this->session->set_flashdata('false', 'Akun masyarakat gagal di aktifkan');
			redirect('master/masyarakat');
		}
	}

	// Untuk Menambahkan akun petugas / Admin
	public function add_petugas()
	{
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama')),
			'username' => htmlspecialchars($this->input->post('username')),
			'password' => md5($this->input->post('password')),
			'no_telp' => htmlspecialchars($this->input->post('telp')),
			'level' => htmlspecialchars($this->input->post('level'))
		];

		if ($this->db->insert('tbl_admin', $data)) {
			$this->session->set_flashdata('true', 'Akun petugas baru berhasil ditambahkan');
			redirect('master/petugas');
		} else {
			$this->session->set_flashdata('false', 'Akun petugas baru gagal ditambahkan');
			redirect('master/petugas');
		}
	}
	public function add_admin()
	{
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama')),
			'username' => htmlspecialchars($this->input->post('username')),
			'password' => md5($this->input->post('password')),
			'no_telp' => htmlspecialchars($this->input->post('telp')),
			'level' => htmlspecialchars($this->input->post('level'))
		];

		if ($this->db->insert('tbl_admin', $data)) {
			$this->session->set_flashdata('true', 'Akun admin baru berhasil ditambahkan');
			redirect('master/admin');
		} else {
			$this->session->set_flashdata('false', 'Akun admin baru gagal ditambahkan');
			redirect('master/admin');
		}
	}

	public function edit_admin($id)
	{
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama')),
			'username' => htmlspecialchars($this->input->post('username')),
			'no_telp' => htmlspecialchars($this->input->post('telp')),
		];

		$this->db->where('id_admin', $id);
		
		if ($this->db->update('tbl_admin', $data)) {
			$this->session->set_flashdata('true', 'Akun admin baru berhasil diedit');
			redirect('master/admin');
		} else {
			$this->session->set_flashdata('false', 'Akun admin baru gagal diedit');
			redirect('master/admin');
		}
	}
	
	public function edit_petugas($id)
	{
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama')),
			'username' => htmlspecialchars($this->input->post('username')),
			'no_telp' => htmlspecialchars($this->input->post('telp')),
		];

		$this->db->where('id_admin', $id);
		
		if ($this->db->update('tbl_admin', $data)) {
			$this->session->set_flashdata('true', 'Akun petugas baru berhasil diedit');
			redirect('master/petugas');
		} else {
			$this->session->set_flashdata('false', 'Akun petugas baru gagal diedit');
			redirect('master/petugas');
		}
	}

	// Untuk menghapus akun petugas
	public function del_petugas($id)
	{
		if ($this->db->delete('tbl_admin', ['id_admin' => $id])) {
			$this->db->delete('tbl_tanggapan', ['id_admin' => $id]);
			$this->session->set_flashdata('true', 'Akun petugas berhasil di hapus');
			redirect('master/petugas');
		} else {
			$this->session->set_flashdata('false', 'Akun petugas gagal di hapus');
			redirect('master/petugas');
		}
	}
}
