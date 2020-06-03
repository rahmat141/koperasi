<?php
	class pack_controller extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper('form', 'url');
			$this->load->model('pack_model');
		  	$this->load->library('session', 'form_validation');
		}

		public function index() {
			$data1['pack'] = $this->pack_model->tampil_data()->result();
			$this->load->view('pack/tampil_data',$data1);
		}

		public function tambah() {
			$data['pack'] = $this->pack_model->ambil_data()->result();
			$this->load->view('pack/input_data', $data);
		}

		public function aksi() {
			$id_brg_pack = $this->input->post('id_brg_pack');
			$nama_barang = $this->input->post('nama_barang');

			$data = array(
					'id_brg_pack' => $id_brg_pack,
					'nama_barang' => $nama_barang
			);
			$this->form_validation->set_rules('id_brg_pack', 'Kode Barang', 'required');
			$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');

				if ($this->form_validation->run() != FALSE) {
					$data = array(
							'id_brg_pack' => $id_brg_pack,
							'nama_barang' => $nama_barang
					);

					$this->pack_model->input_data($data, 'pack');
					$this->pack_model->ambil_data($data, 'pack');
					redirect('pack_controller/lihat');
				}
				else {
					$this->load->view('pack/input_data');
					echo "Data yang diinputkan salah! <br>";
				}
		}

		public function lihat() {
			$data1['pack'] = $this->pack_model->tampil_data()->result();
			$this->load->view('pack/tampil_data', $data1);
		}

		public function edit($id_brg_pack) {
			$where = array('id_brg_pack' => $id_brg_pack);
			$data['pack'] = $this->pack_model->edit_data($where, 'pack')->result();
			$this->load->view('pack/edit_data', $data);
		}

		public function aksi2() {
			$id_brg_pack = $this->input->post('id_brg_pack');
			$nama_barang = $this->input->post('nama_barang');

			$data = array(
						'id_brg_pack' => $id_brg_pack,
						'nama_barang' => $nama_barang,
			);

			$where = array('id_brg_pack' => $id_brg_pack);
			$this->pack_model->update_data($where, $data, 'pack');
			$this->pack_model->ambil_data($data, 'pack');
			redirect('pack_controller/lihat');
		}

		public function hapus($id_brg_pack) {
			$where = array('id_brg_pack' => $id_brg_pack);
			$this->pack_model->hapus_data($where, 'pack');
			redirect('pack_controller/lihat');
		}
	}
?>
