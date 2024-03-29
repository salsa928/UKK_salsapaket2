<?php
class Pengaduan extends CI_Controller{

    public function __construct(){
        parent::__construct();
        cek_admin_all_level();
        $this->load->model('M_pengaduan');
    }

    public function index(){
        $data['title'] = 'Management Data Pengaduan';
		$data['pengguna'] = $this->db->get_where('tbl_admin',['username' => $this->session->userdata('username')])->row_array();
        $data['pengaduan'] = $this->M_pengaduan->getAllPengaduan();
        $data['notif'] = $this->db->get('tbl_pengaduan')->result();

        
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('pengaduan/index', $data);
		$this->load->view('templates/footer');
    }

    public function detail($id = null){
        $pengaduan = $this->db->get_where('tbl_pengaduan',['md5(id_pengaduan)' => $id])->row();
        $idp = md5($pengaduan->id_pengaduan);
        if($this->uri->segment(3) == null){
            redirect('pengaduan/error404');
        }  else {
            if($id != $idp){
                redirect('pengaduan/error404');
            }
        }
    
        $data['title'] = 'Detail Data Pengaduan';
		$data['pengguna'] = $this->db->get_where('tbl_admin',['username' => $this->session->userdata('username')])->row_array();
        $data['pengaduan'] = $this->M_pengaduan->getPengaduanByIdJoinMasyarakat($id);
        $data['tanggapan'] = $this->M_pengaduan->getTanggapanByIdJoinAdmin($id);
        $data['notif'] = $this->db->get('tbl_pengaduan')->result();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengaduan/detail', $data);
        $this->load->view('templates/footer');

    }

    public function verifikasi($id){
        $pengaduan = $this->db->get_where('tbl_pengaduan',['md5(id_pengaduan)' => $id])->row_array();
    
        $data['title'] = 'Detail Data Pengaduan';
		$data['pengguna'] = $this->db->get_where('tbl_admin',['username' => $this->session->userdata('username')])->row_array();
        $data['pengaduan'] = $this->M_pengaduan->getPengaduanByIdJoinMasyarakat($id);
        $data['tanggapan'] = $this->M_pengaduan->getTanggapanByIdJoinAdmin($id);
        $data['notif'] = $this->db->get('tbl_pengaduan')->result();
        $data['notif'] = $this->db->get('tbl_pengaduan')->result();

        // var_dump($data['pengaduan']); die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengaduan/verifikasi', $data);
        $this->load->view('templates/footer');

    }



    public function add_tanggapan($id){
        $admin = $this->db->get_where('tbl_admin',['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('tanggapan','tanggapan','required|trim');
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('false','Tanggapan wajib di isi');
            redirect('pengaduan/detail/' . md5($id));
        } else {
            $this->M_pengaduan->add_tanggapan($id, $admin['id_admin']);
        }
    }


    public function del_tanggapan($id_pengaduan, $id_tanggapan){
       return $this->M_pengaduan->del_tanggapan($id_pengaduan, $id_tanggapan);
    }

    public function del_pengaduan($id){
        return $this->M_pengaduan->del_pengaduan($id);
    }

    public function edit_status(){
        return $this->M_pengaduan->edit_status();
    }

    public function status_notif($id)
    {
        $this->db->set('status_notif', 1);
        $this->db->where('md5(id_pengaduan)', $id);
        if ($this->db->update('tbl_pengaduan')) {
            // $this->session->set_flashdata('true', 'Status pengaduan berhasil di edit');
            // redirect('pengaduan/detail/' . $id);
            redirect('pengaduan/verifikasi/' . $id);
        } else {
            // $this->session->set_flashdata('false', 'Status pengaduan gagal di edit');
            // redirect('pengaduan/detail/' . $id);
        }


    }

    public function terima_pengaduan($id_pengaduan){
        $this->db->set('verifikasi', 'diterima')
                ->set('status', 'proses')
                ->where('id_pengaduan', $id_pengaduan)
                ->update('pengaduan');
        redirect('pengaduan/verifikasi/' . md5($id_pengaduan));
    }

    public function tolak_pengaduan($id_pengaduan){
        $this->db->set('verifikasi', 'ditolak')
                ->set('status', 'ditolak')
                ->where('id_pengaduan', $id_pengaduan)
                ->update('pengaduan');
        redirect('pengaduan/verifikasi/' . md5($id_pengaduan));
    }

    public function error404(){
        $this->load->view('error/404');
    }

}