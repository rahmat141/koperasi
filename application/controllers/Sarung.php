<?php
class Sarung extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
        $this->load->model('model_sarung');
        $this->load->library('form_validation');
	}

    public function penjualan_sarung(){
        $this->load->view('v_penjualansarung');
    }

    public function simpan_penjualan(){
        $tanggal = $this->input->post('tanggal');
        $sales = $this->input->post('sales');
        $no_Nota = $this->input->post('no_Nota');
        $item = $this->input->post('item');
        $qyt = $this->input->post('qyt');
        $harga_perqyt = $this->input->post('harga_perqyt');
        $keterangan = $this->input->post('keterangan');

        $data   = array('tanggal' => $tanggal,
                    'sales' => $sales,
                    'no_Nota' => $no_Nota,
                    'item' => $item,
                    'qyt' => $qyt,
                    'harga_perqyt' => $harga_perqyt,
                    'keterangan' => $keterangan,
                    );

        $this->model_sarung->insert($data,"penjualan_sarung");
        redirect('Sarung/daftarPenjualan');
    }

    public function daftarPenjualan(){
        $data['penjualan'] = $this->model_sarung->tampil();
        $this->load->view('v_daftarpenjualan',$data);
    }

    public function editKehadiran($id_pegawai){
        $where = array('id_pegawai' => $id_pegawai);
        $data['data'] = $this->model_kehadiran->edit_kehadiran($where,'kehadiran')->result();
        $this->load->view('v_edit_kehadiran',$data);
    }

    public function update_kehadiran(){
        $id_pegawai = $this->input->post('id_pegawai');
        $nama = $this->input->post('nama');
        $tanggal = $this->input->post('tanggal');
        $jam_datang = $this->input->post('jam_datang');
        $jam_pulang = $this->input->post('jam_pulang');
 
        $data = array(
        'nama' => $nama,
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
}