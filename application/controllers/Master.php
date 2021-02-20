<?php  
/**
 * 
 */
class Master extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		cek_only_admin();
		$this->load->model('M_master');
	}

	public function masyarakat(){
		$data['title'] = 'Management Data Masyarakat';
		$data['pengguna'] = $this->db->get_where('tbl_admin',['username' => $this->session->userdata('username')])->row_array();
		$data['masyarakat'] = $this->M_master->getAllMasyarakat();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('master/masyarakat/index', $data);
		$this->load->view('templates/footer');
	}

	public function del_masyarakat($nik){
		return $this->M_master->del_masyarakat($nik);
	}

	public function nonaktif_masyarakat($nik){
		return $this->M_master->nonaktif_masyarakat($nik);
	}

	public function aktif_masyarakat($nik){
		return $this->M_master->aktif_masyarakat($nik);
	}

	public function petugas(){
		$data['title'] = 'Management Data Petugas';
		$data['pengguna'] = $this->db->get_where('tbl_admin',['username' => $this->session->userdata('username')])->row_array();
		$data['petugas'] = $this->M_master->getOnlyPetugas();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('master/petugas/index', $data);
		$this->load->view('templates/footer');
	}

	public function add_petugas(){
		$data['title'] = 'Tambah Data Petugas';
		$data['pengguna'] = $this->db->get_where('tbl_admin',['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('nama','Nama','required|trim|min_length[3]',[
			'required' => 'Nama harus di isi',
			'min_length' => 'Nama min 3 huruf'
		]);
		$this->form_validation->set_rules('telp','No telp','required|trim|min_length[11]|max_length[13]|is_unique[tbl_admin.no_telp]|numeric',[
			'required' => 'No Telp harus di isi',
			'min_length' => 'No Telp min 11 angka',
			'max_length' => 'No Telp max 13 angka',
			'is_unique' => 'No Telp sudah terdaftar',
			'numeric' => 'No Telp harus angka'
		]);
		$this->form_validation->set_rules('username','Username','required|trim|min_length[5]|is_unique[tbl_admin.username]',[
			'required' => 'Username harus di isi',
			'min_length' => 'Username min 5 karakter',
			'is_unique' => 'Username sudah terdaftar'
		]);
		$this->form_validation->set_rules('password','Password','required|trim|min_length[5]|matches[repassword]',[
			'required' => 'Password harus di isi',
			'min_length' => 'Password min 5 karakter',
			'matches' => 'Password harus sama dengan Ulangi Password'
		]);
		$this->form_validation->set_rules('repassword','Ulangi Password','required|trim|matches[password]',[
			'required' => 'Ulangi Password harus di isi',
			'matches' => 'Ulangi Password harus sama dengan Password'
		]);
		$this->form_validation->set_rules('level','Level','required',['required' => 'Harap pilih salah satu']);

		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar', $data);
			$this->load->view('master/petugas/add');
			$this->load->view('templates/footer');
		} else {
			$this->M_master->add_petugas();
		}
	}

	public function del_petugas($id){
		return $this->M_master->del_petugas($id);
	}

	public function nonaktif_petugas($id){
		return $this->M_master->nonaktif_petugas($id);
	}

	public function aktif_petugas($id){
		return $this->M_master->aktif_petugas($id);
	}

	public function getPetugasId(){
		$id = $_POST['id'];
		echo json_encode($this->M_master->getPetugasId($id));
	}

	public function editLevelPetugas(){
		$this->form_validation->set_rules('level','level','required|trim');
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('false','Harap pilih salah satu level');
			redirect('master/petugas');
		} else {
			$this->M_master->editLevelPetugas();
		}
	}
}