<?php
class Produk extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
        $this->load->model('model_produk');
        $this->load->library('form_validation');
	}

	 public function produk(){
        $this->load->view('v_produk');
    }

    public function simpanProduk(){
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $ukuran = $this->input->post('ukuran');
        $kualitas = $this->input->post('kualitas');

        $data   = array('nama' => $nama,
                    'harga' => $harga,
                    'ukuran' => $ukuran,
                    'kualitas' => $kualitas,
                    );

        $this->model_produk->insert_produk($data,"produk");
        redirect('Produk/daftarProduk');
    }
    public function daftarProduk(){
        $data['produk'] = $this->model_produk->tampil_produk();
        $this->load->view('v_daftarProduk',$data);
    }

    public function editProduk($id_produk){
        $where = array('id_produk' => $id_produk);
        $data['produk'] = $this->model_produk->edit_produk($where,'produk')->result();
        $this->load->view('v_edit_produk',$data);
    }

     public function updateProduk(){
        $id_produk = $this->input->post('id_produk');
        $nama = $this->input->post('nama');
        $ukuran = $this->input->post('ukuran');
        $kualitas = $this->input->post('kualitas');
        $harga = $this->input->post('harga');
 
        $data = array(
        'nama' => $nama,
        'ukuran' => $ukuran,
        'kualitas' => $kualitas,
        'harga' => $harga
        );
 
        $where = array(
        'id_produk' => $id_produk
        ); 
        $this->model_produk->update_produk($where,$data,'produk');
        redirect('Produk/daftarProduk');
    }

    public function hapusProduk($id_produk){
        $where = array('id_produk' => $id_produk);
        $this->model_produk->hapus_produk($where,'produk');
        redirect('Produk/daftarProduk');
    }

}
?>