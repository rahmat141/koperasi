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

//################################### PRODUKSI ################################

     public function produksi(){
        $data['produk'] = $this->model_produk->produk();
        $data['pegawai'] = $this->model_produk->pegawai();
        $this->load->view('v_produksi',$data);
    }

    public function simpanProduksi(){
        $id_produk = $this->input->post('id_produk');
        $id_pegawai = $this->input->post('id_pegawai');
        $tanggal_produksi = $this->input->post('tanggal_produksi');
        $jumlah = $this->input->post('jumlah');

        $data   = array('id_produk' => $id_produk,
                        'id_pegawai' => $id_pegawai,
                        'tanggal_produksi' => $tanggal_produksi,
                        'jumlah' => $jumlah,
                    );

        $this->model_produk->insert_produksi($data,"produksi");
        redirect('Produk/daftarProduksi');
    }
    public function daftarProduksi(){
        $data['produksi'] = $this->model_produk->tampil_produksi();
        $this->load->view('v_daftarProduksi',$data);
    }

    public function editProduksi($id_produk){
        $where = array('id_produk' => $id_produk);
        $data['produksi'] = $this->model_produk->edit_produksi($where,'produksi')->result();
        $this->load->view('v_edit_produksi',$data);
    }

     public function updateProduksi(){
        $id_produk = $this->input->post('id_produk');
        $id_pegawai = $this->input->post('id_pegawai');
        $tanggal_produksi = $this->input->post('tanggal_produksi');
        $jumlah = $this->input->post('jumlah');

 
        $data = array(
        'tanggal_produksi' => $tanggal_produksi,
        'jumlah' => $jumlah
        );
 
        $where = array(
        'id_produk' => $id_produk,
        'id_pegawai' => $id_pegawai
        ); 
        $this->model_produk->update_produksi($where,$data,'produksi');
        redirect('Produk/daftarProduksi');
    }

    public function hapusProduksi($id_produk){
        $where = array('id_produk' => $id_produk);
        $this->model_produk->hapus_produksi($where,'produksi');
        redirect('Produk/daftarProduksi');
    }

}
?>