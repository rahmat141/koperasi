<?php
	class issuing_controller extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper('form', 'url');
			$this->load->model('issuing_model');
		  	$this->load->library('session', 'form_validation');
		}

		public function index() {
			$data1['issuing'] = $this->issuing_model->tampil_data()->result();
			$this->load->view('issuing/tampil_data',$data1);
		}

		public function tambah() {
			$data['issuing'] = $this->issuing_model->data_barang()->result();
			// print_r($data);
			$this->load->view('issuing/input_data', $data);
		}

		public function aksi() {
			

			// $data = array(
			// 		'id_packing'  => $id_packing,
			// 		'id_brg_pack' => $id_brg_pack,
			// 		'nama_barang' => $nama_barang,
			// 		'jumlah'	  => $jumlah,
			// 		'tgl_masuk'	  => $tgl_masuk
			// );

			// $this->form_validation->set_rules('id_brg_pack', 'Kode Barang', 'required');
			$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
			$this->form_validation->set_rules('jumlah', 'Jumlah Barang', 'required');
			$this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required');

				if ($this->form_validation->run() != FALSE) {

					$id_issuing  = $this->input->post('id_issuing');
					$id_brg_pack = $this->input->post('id_brg_pack');
					$nama_barang = $this->input->post('nama_barang');
					$jumlah		 = $this->input->post('jumlah');
					$tgl_masuk	 = $this->input->post('tgl_masuk');

					$data = array(
						    'id_issuing'  => $id_issuing,
							'id_brg_pack' => $nama_barang,
							// 'nama_barang' => $nama_barang,
							'jumlah'	  => $jumlah,
							'tgl_masuk' => $tgl_masuk
					);			
					print_r($data);
					$this->issuing_model->input_data($data);
					redirect('issuing_controller/lihat');
				}
				else {
					$data['issuing'] = $this->issuing_model->data_barang()->result();
					$this->load->view('issuing/input_data',$data);
					echo "Data yang diinputkan salah! <br>";
				}
		}

		public function lihat() {
			$data1['issuing'] = $this->issuing_model->tampil_data()->result();
			$this->load->view('issuing/tampil_data', $data1);
		}

		public function edit($id_issuing) {
			$where = array('id_issuing' => $id_issuing);
			$data['issuing'] = $this->issuing_model->edit_data($where, 'issuing')->result();
			$this->load->view('issuing/edit_data', $data);
		}

		public function aksi2() {
			$id_issuing  = $this->input->post('id_issuing');
			$id_brg_pack = $this->input->post('id_brg_pack');
			//$nama_barang = $this->input->post('nama_barang');
			$jumlah		 = $this->input->post('jumlah');
			$tgl_masuk	 = $this->input->post('tgl_masuk');

			$data = array(
					'id_issuing'  => $id_issuing,
					'id_brg_pack' => $id_brg_pack,
					//'nama_barang' => $nama_barang,
					'jumlah'	  => $jumlah,
					'tgl_masuk'	  => $tgl_masuk
			);

			$where = array('id_issuing' => $id_issuing);
			$this->issuing_model->update_data($where, $data, 'issuing');
			$this->issuing_model->ambil_data($data, 'issuing');
			redirect('issuing_controller/lihat');
		}

		public function hapus($id_issuing) {
			$where = array('id_issuing' => $id_issuing);
			$this->issuing_model->hapus_data($where, 'issuing');
			redirect('issuing_controller/lihat');
		}

		// public function stok_packing() {
		// 	 $data1['packing'] = $this->packing_model->updateJumlah()->result();
		// 	//  $data1['penjualan'] = $this->packing_model->prod_keluar()->result();

		//  	$this->load->view('packing/stok_packing', $data1);
		// }
	}
?>
