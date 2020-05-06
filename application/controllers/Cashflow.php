<?php 
    class Cashflow extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form', 'url','file'));
            $this->load->model('Model_cashflow');
            $this->load->library('form_validation');

        }
        public function index(){
            $this->load->view('home');
        }

        public function input_pemasukan(){
            $this->load->view('input_pemasukan');
        }
        public function input_pengeluaran(){
            $this->load->view('input_pengeluaran');
        }


        public function simpan_pemasukan(){
            $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
            $this->form_validation->set_rules('nama_transaksi', 'nama_transaksi', 'required');
            $this->form_validation->set_rules('pemasukan', 'pemasukan', 'required');


            if ($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('pesan','<font color=red>Form Tidak Boleh Kosong</font>');
                $this->load->view('input_pemasukan');
            }
            else{
                $tanggal = $this->input->post('tanggal');
                $nama_transaksi = $this->input->post('nama_transaksi');
                $pemasukan= $this->input->post('pemasukan');
                $kategori = $this->input->post('kategori');

                $data   = array('tanggal' => $tanggal,
                        'nama_transaksi' => $nama_transaksi,
                        'debit' => $pemasukan,
                        'kategori' => $kategori
                        );
                $this->Model_cashflow->insert($data,'cashflow');
                $this->session->set_flashdata('msg',
                '<div class="alert alert-success">
                <h4>Berhasil</h4>
                <p> Anda berhasil input data pemasukan</p>
                </div>');
                $this->load->view('input_pemasukan');
                
            }
        }
        public function simpan_pengeluaran(){
            $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
            $this->form_validation->set_rules('nama_transaksi', 'nama_transaksi', 'required');
            $this->form_validation->set_rules('pengeluaran', 'pengeluaran', 'required');


            if ($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('pesan','<font color=red>Form Tidak Boleh Kosong</font>');
                $this->load->view('input_pengeluaran');
            }
            else{
                $tanggal = $this->input->post('tanggal');
                $nama_transaksi = $this->input->post('nama_transaksi');
                $pemasukan= $this->input->post('pengeluaran');
                $kategori = $this->input->post('kategori');

                $data   = array('tanggal' => $tanggal,
                        'nama_transaksi' => $nama_transaksi,
                        'kredit' => $pemasukan,
                        'kategori' => $kategori
                        );
                $this->Model_cashflow->insert($data,'cashflow');
                $this->session->set_flashdata('msg',
                '<div class="alert alert-success">
                <h4>Berhasil</h4>
                <p> Anda berhasil input data pengeluaran</p>
                </div>');
                $this->load->view('input_pengeluaran');
                
            }
        }
        public function tampil_data(){
            $data['pemasukan'] = $this->Model_cashflow->getTotalPemasukan()->result();
            $data['pengeluaran'] = $this->Model_cashflow->getTotalPengeluaran()->result();
            $data['total'] = $this->Model_cashflow->getTotal()->result();
            $data['data'] = $this->Model_cashflow->getData()->result();
            $this->load->view('tampil_cashflow',$data);
        }

        public function laporan_pemasukan(){
            $data['data'] = $this->Model_cashflow->getPemasukan()->result();
            $data['total'] = $this->Model_cashflow->getTotalPemasukan()->result();
            // print_r($data);
            $this->load->view('laporan_pemasukan',$data);
        }
        public function laporan_pengeluaran(){
            $data['data'] = $this->Model_cashflow->getPengeluaran()->result();
            $data['total'] = $this->Model_cashflow->getTotalPengeluaran()->result();
            // print_r($data);
            $this->load->view('laporan_pengeluaran',$data);
        }
        public function cetak(){
            // ob_start();
            $tgl_awal = $this->input->post('tgl_awal');
            $tgl_akhir = $this->input->post('tgl_akhir');
            print_r($tgl_awal);
            $data['data'] = $this->Model_cashflow->cetakData($tgl_awal,$tgl_akhir)->result();
            print_r($data);
            // $this->load->view('tampil_cashflow',$data);
            // ob_end_clean();
        }
        public function edit_pemasukan($id){
            $where = array('id_transaksi' => $id);
            $data['data'] = $this->Model_cashflow->edit_pemasukan($where,'cashflow')->result();
            $this->load->view('edit_pemasukan',$data);
        }
    }

?>