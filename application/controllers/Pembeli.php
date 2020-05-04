<?php
class Pembeli extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
        $this->load->model('model_pembeli');
        $this->load->library('form_validation');
	}

	 public function pembeli(){
        $this->load->view('v_pembeli');
    }

    public function simpanPembeli(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');


        $data   = array('nama' => $nama,
                        'alamat' => $alamat,
                        'no_hp' => $no_hp,
                    );

        $this->model_pembeli->insert_pembeli($data,"pembeli");
        redirect('Pembeli/daftarPembeli');
    }
    public function daftarPembeli(){
        $data['pembeli'] = $this->model_pembeli->tampil_pembeli();
        $this->load->view('v_daftarPembeli',$data);
    }

    public function editPembeli($id_pembeli){
        $where = array('id_pembeli' => $id_pembeli);
        $data['pembeli'] = $this->model_pembeli->edit_pembeli($where,'pembeli')->result();
        $this->load->view('v_edit_pembeli',$data);
    }

     public function updatePembeli(){
        $id_pembeli = $this->input->post('id_pembeli');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
 
        $data = array(
        'nama' => $nama,
        'alamat' => $alamat,
        'no_hp' => $no_hp,

        );
 
        $where = array(
        'id_pembeli' => $id_pembeli
        ); 
        $this->model_pembeli->update_pembeli($where,$data,'pembeli');
        redirect('Pembeli/daftarPembeli');
    }

    public function hapusPembeli($id_pembeli){
        $where = array('id_pembeli' => $id_pembeli);
        $this->model_pembeli->hapus_pembeli($where,'pembeli');
        redirect('Pembeli/daftarPembeli');
    }
}
?>