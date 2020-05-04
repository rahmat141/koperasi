<?php
class sekertaris extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
        $this->load->model('model_kehadiran');
        $this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('dashboard');
	}

    public function kehadiran(){
        $data['pegawai'] = $this->model_kehadiran->pegawai();
        $this->load->view('v_kehadiran',$data);
    }

    public function simpan_kehadiran(){
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan','<font color=red>Form Tidak Boleh Kosong</font>');
            $this->load->view('v_kehadiran');
            
        }
        else{
        $id_pegawai = $this->input->post('id_pegawai');
        $tanggal = $this->input->post('tanggal');
        $jam_datang = $this->input->post('jam_datang');
        $jam_pulang = $this->input->post('jam_pulang');
        $jam_kerja = $this->input->post('jam_kerja');

        $data   = array('id_pegawai' => $id_pegawai,
                    'jam_datang' => $jam_datang,
                    'tanggal' => $tanggal,
                    'jam_pulang' => 0,
                    'jam_kerja' => 80000
                    );

        $this->model_kehadiran->insert($data,"kehadiran");
        redirect('sekertaris/daftarKehadiran');
        }
    }

    public function daftarKehadiran(){
        $data['data'] = $this->model_kehadiran->tampil();
        $this->load->view('v_daftarkehadiran',$data);
    }

    public function editKehadiran($id_pegawai){
        $where = array('id_pegawai' => $id_pegawai);
        $data['data'] = $this->model_kehadiran->edit_kehadiran($where,'kehadiran')->result();
        $this->load->view('v_edit_kehadiran',$data);
    }

    public function update_kehadiran(){
        $id_pegawai = $this->input->post('id_pegawai');
        $tanggal = $this->input->post('tanggal');
        $jam_datang = $this->input->post('jam_datang');
        $jam_pulang = $this->input->post('jam_pulang');
 
        $data = array(
        'tanggal' => $tanggal,
        'jam_datang' => $jam_datang,
        'jam_pulang' => $jam_pulang
        );
 
        $where = array(
        'id_pegawai' => $id_pegawai
        ); 
        $this->model_kehadiran->update_kehadiran($where,$data,'kehadiran');
        redirect('sekertaris/daftarKehadiran');
    }

    public function hapus_kehadiran($id_pegawai){
        $where = array('id_pegawai' => $id_pegawai);
        $this->model_kehadiran->hapus_kehadiran($where,'kehadiran');
        redirect('sekertaris/daftarKehadiran');
    }

    //Bulan
    public function v_januari(){
        $data['data'] = $this->model_kehadiran->get_januari()->result();
        $this->load->view('v_daftarkehadiran',$data);
    }

    public function v_februari(){
        $data['data'] = $this->model_kehadiran->get_februari()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_maret(){
        $data['data'] = $this->model_kehadiran->get_maret()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_april(){
        $data['data'] = $this->model_kehadiran->get_april()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_mei(){
        $data['data'] = $this->model_kehadiran->get_mei()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_juni(){
        $data['data'] = $this->model_kehadiran->get_juni()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_juli(){
        $data['data'] = $this->model_kehadiran->get_juli()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_agustus(){
        $data['data'] = $this->model_kehadiran->get_agustus()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_september(){
        $data['data'] = $this->model_kehadiran->get_september()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_oktober(){
        $data['data'] = $this->model_kehadiran->get_oktober()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_november(){
        $data['data'] = $this->model_kehadiran->get_november()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_desember(){
        $data['data'] = $this->model_kehadiran->get_desember()->result();
        $this->load->view('v_daftarkehadiran',$data);
    }
}