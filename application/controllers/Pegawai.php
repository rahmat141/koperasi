<?php
class Pegawai extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
        $this->load->model('model_pegawai');
        $this->load->library('form_validation');
	}

	 public function pegawai(){
        $this->load->view('v_pegawai');
    }

    public function simpanPegawai(){
        $nama = $this->input->post('nama');
        $pekerjaan = $this->input->post('pekerjaan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');


        $data   = array('nama' => $nama,
                        'pekerjaan' => $pekerjaan,
                        'jenis_kelamin' => $jenis_kelamin,
                        'alamat' => $alamat,
                        'no_hp' => $no_hp,

                    );

        $this->model_pegawai->insert_pegawai($data,"pegawai");
        redirect('Pegawai/daftarPegawai');
    }
    public function daftarPegawai(){
        $data['pegawai'] = $this->model_pegawai->tampil_pegawai();
        $this->load->view('v_daftarPegawai',$data);
    }

    public function editPegawai($id_pegawai){
        $where = array('id_pegawai' => $id_pegawai);
        $data['pegawai'] = $this->model_pegawai->edit_produk($where,'pegawai')->result();
        $this->load->view('v_edit_pegawai',$data);
    }

     public function updatePegawai(){
        $id_pegawai = $this->input->post('id_produk');
        $nama = $this->input->post('nama');
        $pekerjaan = $this->input->post('pekerjaan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
 
        $data = array(
        'nama' => $nama,
        'pekerjaan' => $pekerjaan,
        'jenis_kelamin' => $jenis_kelamin,
        'alamat' => $alamat,
        'no_hp' => $no_hp
        );
 
        $where = array(
        'id_pegawai' => $id_pegawai
        ); 
        $this->model_pegawai->update_pegawai($where,$data,'pegawai');
        redirect('Pegawai/daftarPegawai');
    }

    public function hapusPegawai($id_pegawai){
        $where = array('id_pegawai' => $id_pegawai);
        $this->model_pegawai->hapus_pegawai($where,'pegawai');
        redirect('Pegawai/daftarPegawai');
    }

}
?>