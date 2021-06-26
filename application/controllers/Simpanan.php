<?php

class Simpanan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
		$this->load->model('model_simpanan');

	}
	
	public function simpanan(){
        $data['simpanan'] = $this->model_simpanan->tipe_simpanan();
        $data['anggota'] = $this->model_simpanan->simpanan_anggota();
		$this->load->view('form_simpanan_petugas',$data);
	}

    public function ambilSimpanan($id_anggota){
        $data = array('id_anggota' => $id_anggota);
		$data['simpananSuka'] = $this->model_simpanan->total_simpan($id_anggota);
        $this->load->view('form_ambilSimpanan',$data);
    }

    public function ambilSimpananW($id_anggota){
        $data = array('id_anggota' => $id_anggota);
        $this->load->view('form_ambilSimpananW',$data);
    }

	public function simpan_simpanan(){
		$this->form_validation->set_rules('nominal', 'Jumlah Simpanan', 'trim|required|max_length[255]|numeric');
        $this->form_validation->set_rules('tanggal_simpanan', 'Tanggal Simpan', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan','<font color=red>Harus Menggunakan Angka</font>');
            $this->session->set_flashdata('pesan','<font color=red>Form Tidak Boleh Kosong</font>');
            $data['simpanan'] = $this->model_simpanan->tipe_simpanan();
            $this->load->view('form_simpanan',$data);
        }
        else{
        date_default_timezone_set("Asia/Jakarta");
		$post 				= $this->input->post();
		$nominal			= $post['nominal'];
		$tanggal_simpanan	= date('Y-m-d');
        $created_at         = date('Y-m-d H:i:s');;
		$id_anggota			= $post['id_anggota'];
        $id_tipeSimpanan    = $post['id_tipeSimpanan'];

		$data = array(
			'nominal'			=> $nominal,
			'tanggal_simpanan'	=> $tanggal_simpanan,
            'created_at'        => $created_at,
			'id_anggota'		=> $id_anggota,
            'id_tipeSimpanan'   => $id_tipeSimpanan
		);

		$this->model_simpanan->insert($data, 'simpanan');
		$this->session->set_flashdata('sukses','<h4><font color=green>Berhasil Menambahkan Data Simpanan !</font></h4>');
		redirect('Simpanan/print_simphlm');
		}
	}

    public function simpan_ambil($id_anggota){
        $this->form_validation->set_rules('nominal', 'Nominal', 'trim|required|max_length[255]|numeric');
        $this->form_validation->set_rules('tanggal_ambil', 'Tanggal Ambil', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan','<font color=red>Harus Menggunakan Angka</font>');
            $this->session->set_flashdata('pesan','<font color=red>Form Tidak Boleh Kosong</font>');
            $this->load->view('form_simpanan');
        }
        else{
        $post               = $this->input->post();
        $nominal            = $post['nominal'];
        $tanggal_ambil      = $post['tanggal_ambil'];
        $id_anggota         = $id_anggota;

        $data = array(
            'nominal'           => $nominal,
            'tanggal_ambil'     => $tanggal_ambil,
            'id_anggota'        => $id_anggota,
            'id_tipeSimpanan'   => 2
        );

        $dataanggota = array('id_anggota' => $id_anggota);
        $this->model_simpanan->insert($data, 'riwayat_simpanan');
        $this->session->set_flashdata('sukses','<font color=green>Berhasil Mengambil Simpanan</font>');
        redirect('Simpanan/show_simpanan/'.$id_anggota);
        }
    }

    public function simpan_ambilWajib($id_anggota){
        $this->form_validation->set_rules('nominal', 'Nominal', 'trim|required|max_length[255]|numeric');
        $this->form_validation->set_rules('tanggal_ambil', 'Tanggal Ambil', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan','<font color=red>Harus Menggunakan Angka</font>');
            $this->session->set_flashdata('pesan','<font color=red>Form Tidak Boleh Kosong</font>');
            $this->load->view('form_simpanan');
        }
        else{
        $post               = $this->input->post();
        $nominal            = $post['nominal'];
        $tanggal_ambil      = $post['tanggal_ambil'];
        $id_anggota         = $id_anggota;

        $data = array(
            'nominal'           => $nominal,
            'tanggal_ambil'     => $tanggal_ambil,
            'id_anggota'        => $id_anggota,
            'id_tipeSimpanan'   => 1
        );
        $dataanggota = array('id_anggota' => $id_anggota);
        $this->model_simpanan->insert($data, 'riwayat_simpanan');
        $this->session->set_flashdata('sukses','<font color=green>Berhasil Mengambil Simpanan</font>');
        redirect('Simpanan/show_simpananWajibSupervisor/'.$id_anggota); #tersangka
        }
    }

    public function ambil_simpanan($where){
        $where = $this->session->id_anggota;
        $data['simpanan'] = $this->model_simpanan->ambil_simpanan($where);
        $this->load->view('v_ambilSimpanan',$data);
    }

	public function show_simpanan($where){
		$where = $this->session->id_anggota;
		$data['totalSimpanan'] = $this->model_simpanan->total($where);
		$data['simpanan'] = $this->model_simpanan->tampil_simpanan($where);
        $this->load->view('v_daftarsimpanan',$data);
	}

    public function show_simpananSupervisor($id_anggota){
        $where = array('id_anggota' => $id_anggota);
        $data = array('id_anggota' => $id_anggota);
        $data['simpanan'] = $this->model_simpanan->tampil_simpananS($id_anggota);
        $this->load->view('v_daftarsimpananSupervisor',$data);
    }

    public function show_simpananPokok($where){
        $where = $this->session->id_anggota;
        $data['simpanan'] = $this->model_simpanan->tampil_simpananPokok($where);
        $this->load->view('v_simpananPokok',$data);
    }

    public function show_simpananWajib($id_anggota){
        $where = $this->session->id_anggota;
        $data['totalSimpanan'] = $this->model_simpanan->total($where);
        $data['simpanan'] = $this->model_simpanan->tampil_simpananWajib($where);
        $this->load->view('v_daftarsimpananWajib',$data);
    }

    public function show_simpananPokokSupervisor($id_anggota){
        $where = array('id_anggota' => $id_anggota);
        $data = array('id_anggota' => $id_anggota);
        $data['simpanan'] = $this->model_simpanan->tampil_simpananPokokS($id_anggota);
        $this->load->view('v_daftarsimpananPokokSupervisor',$data);
    }

    public function show_simpananWajibSupervisor($id_anggota){
        $where = array('id_anggota' => $id_anggota);
        $data = array('id_anggota' => $id_anggota);
        $data['simpanan'] = $this->model_simpanan->tampil_simpananWajibS($id_anggota);
        $this->load->view('v_daftarsimpananWajibSupervisor',$data);
    }

    // public function show_simpananWajibSupervisor2($id_anggota){
    //     //$id_anggota = $this->input->post('id_anggota');
    //     //$where = array('id_anggota' => $id_anggota);
    //     $data['simpanan'] = $this->model_simpanan->tampil_simpananWajibS($id_anggota);
    //     $this->load->view('v_daftarsimpananWajibSupervisor/'.$id_anggota,$data);
    //     //print_r($id_anggota);
    // }

	public function laporan_simpanan(){
		$data['simpanan'] = $this->model_simpanan->laporan_simpanan2();
        $this->load->view('laporan_simpanan',$data);
	}

    public function laporan_simpananWajib(){
        $data['simpanan'] = $this->model_simpanan->laporan_simpananWajib();
        $this->load->view('laporan_simpananWajib',$data);
    }

    public function laporan_simpananPokok(){
        $data['simpanan'] = $this->model_simpanan->laporan_simpananPokok();
        $this->load->view('laporan_simpananPokok',$data);
    }

	public function riwayat_simpanan(){
		$data['simpanan'] = $this->model_simpanan->riwayat_simpanan();
        $this->load->view('riwayat_simpanan',$data);
	}

	public function riwayat_simpananS(){
		$data['simpanan'] = $this->model_simpanan->riwayat_simpanan();
        $this->load->view('riwayat_simpananS',$data);
	}

    public function riwayat_pengambilan(){
        $data['simpanan'] = $this->model_simpanan->ambil_simpananPetugas();
        $this->load->view('v_riwayat_pengambilan',$data);
    }

    public function riwayat_pengambilanSupervisor(){
        $data['simpanan'] = $this->model_simpanan->ambil_simpananPetugas();
        $this->load->view('v_riwayat_pengambilanSupervisor',$data);
    }

	public function editsimpanan($id_simpanan){
        $where = array('id_simpanan' => $id_simpanan);
        $data['simpanan'] = $this->model_simpanan->edit_simpanan($where,'simpanan')->result();
        $this->load->view('v_edit_simpanan',$data);
    }

    public function editsimpananS($id_simpanan,$id_anggota){
        $where = array('id_simpanan' => $id_simpanan);
        $data = array('id_simpanan' => $id_simpanan);
        $data = array('id_anggota' => $id_anggota);
        $data['simpanan'] = $this->model_simpanan->edit_simpananS($where, 'simpanan')->result();
        $this->load->view('v_edit_simpananS',$data);


        // $where = array('id_simpanan' => $id_simpanan);
        // $data['simpanan'] = $this->model_simpanan->edit_simpanan($where,'simpanan')->result();
        // $this->load->view('v_edit_simpananS',$data);
    }

    public function editsimpananWajib($id_simpanan){
        $where = array('id_simpanan' => $id_simpanan);
        $data['simpanan'] = $this->model_simpanan->edit_simpanan($where,'simpanan')->result();
        $this->load->view('v_edit_simpananWajib',$data);
    }

    public function editsimpananPokokS($id_simpanan,$id_anggota){ #pelakunya
        $where = array('id_simpanan' => $id_simpanan);
        $data = array('id_simpanan' => $id_simpanan);
        $data = array('id_anggota' => $id_anggota);
        $data['simpanan'] = $this->model_simpanan->edit_simpananS($where, 'simpanan')->result();
        $this->load->view('v_edit_simpananPokokS',$data);
    }

    public function editsimpananWajibS($id_simpanan,$id_anggota){ #pelakunya
        $where = array('id_simpanan' => $id_simpanan);
        $data = array('id_simpanan' => $id_simpanan);
        $data = array('id_anggota' => $id_anggota);
        $data['simpanan'] = $this->model_simpanan->edit_simpananS($where, 'simpanan')->result();
        $this->load->view('v_edit_simpananWajibS',$data);
    }

    public function updatesimpanan($id_anggota){
        $id_simpanan = $this->input->post('id_simpanan');
        $nominal = $this->input->post('nominal');
        $tanggal_simpanan = $this->input->post('tanggal_simpanan');

        $data = array(
        'nominal' => $nominal,
        'tanggal_simpanan' => $tanggal_simpanan
        );
 
        $where = array(
        'id_simpanan' => $id_simpanan
        ); 
        $this->model_simpanan->update_simpanan($where,$data,'simpanan');
        redirect('simpanan/show_simpananSupervisor/'.$id_anggota,$id_anggota);
    }

    public function updatesimpananWajib($id_anggota){
        $id_simpanan = $this->input->post('id_simpanan');
        $nominal = $this->input->post('nominal');
        $tanggal_simpanan = $this->input->post('tanggal_simpanan');

        $data = array(
        'nominal' => $nominal,
        'tanggal_simpanan' => $tanggal_simpanan
        );
 
        $where = array(
        'id_simpanan' => $id_simpanan
        ); 

        $this->model_simpanan->update_simpanan($where,$data,'simpanan');
        redirect('simpanan/show_simpananWajibSupervisor/'.$id_anggota,$id_anggota);
    }

    public function updatesimpananPokok($id_anggota){
        $id_simpanan = $this->input->post('id_simpanan');
        $nominal = $this->input->post('nominal');
        $tanggal_simpanan = $this->input->post('tanggal_simpanan');

        $data = array(
        'nominal' => $nominal,
        'tanggal_simpanan' => $tanggal_simpanan
        );
 
        $where = array(
        'id_simpanan' => $id_simpanan
        ); 

        $this->model_simpanan->update_simpanan($where,$data,'simpanan');
        redirect('simpanan/show_simpananPokokSupervisor/'.$id_anggota,$id_anggota);
    }

    public function hapussimpanan($id_simpanan,$id_anggota){
        $where = array('id_simpanan' => $id_simpanan);
        $this->model_simpanan->hapus_simpanan($where,'simpanan');
        redirect('simpanan/show_simpananSupervisor/'.$id_anggota);
    }

    public function hapussimpananWajib($id_simpanan,$id_anggota){
        $where = array('id_simpanan' => $id_simpanan);
        $this->model_simpanan->hapus_simpanan($where,'simpanan');
        redirect('simpanan/show_simpananWajibSupervisor/'.$id_anggota);
    }

    public function hapussimpananPokok($id_simpanan,$id_anggota){
        $where = array('id_simpanan' => $id_simpanan);
        $this->model_simpanan->hapus_simpanan($where,'simpanan');
        redirect('simpanan/show_simpananPokokSupervisor/'.$id_anggota);
    }

    public function lihat_anggota(){
        $data['totalAnggota'] = $this->model_simpanan->laporan_anggota_petugas();
		$data['anggota'] = $this->model_simpanan->tampil_anggota();
        $this->load->view('v_anggota',$data);
	}

    public function lihat_anggotaS(){ #UNTUK ANGGOTA SUPERVISOR
        $data['totalAnggota'] = $this->model_simpanan->laporan_anggota_petugas();
        $data['anggota'] = $this->model_simpanan->tampil_anggota();
        $this->load->view('v_anggotaS',$data);
    }

    public function lihat_SisaHU($id_anggota){ 
        $data['shu'] = $this->model_simpanan->total_shu($id_anggota);
		//$data['simpanan'] = $this->model_simpanan->riwayat_simpanan();
        $this->load->view('v_lihatSHU',$data);
    }

    public function lihat_anggotaSupervisor(){ #UNTUK MASTER SIMPANAN
        $data['totalAnggota'] = $this->model_simpanan->laporan_anggota_supervisor();
        $data['anggota'] = $this->model_simpanan->tampil_anggota();
        $this->load->view('v_anggotaSupervisor',$data);
    }

	public function hapusAnggota($id_anggota){
        $where = array('id_anggota' => $id_anggota);
        $this->model_simpanan->hapus_simpanan($where,'anggota');
        redirect('Simpanan/lihat_anggota');
    }

    public function hapusAnggotaS($id_anggota){
        $where = array('id_anggota' => $id_anggota);
        $this->model_simpanan->hapus_simpanan($where,'anggota');
        redirect('Simpanan/lihat_anggotaS');
    }

    public function bukti_simpanan($id_simpanan){ 

		// $data['simpanan'] = $this->model_simpanan->riwayat_simpanan();
        $data['simpanan'] = $this->model_simpanan->bukti($id_simpanan)->result();
        $this->load->view('bukti_simpanan',$data);
    }

    public function searchRiwayat_Pengambilan(){
        $keyword = $this->input->post('search');
        $data['simpanan'] = $this->model_simpanan->searchRiwayat_Pengambilan($keyword);
        $this->load->view('v_riwayat_pengambilan',$data);
    }

    public function searchRiwayat_simpanan(){
        $keyword = $this->input->post('search');
        $data['simpanan'] = $this->model_simpanan->searchRiwayat_simpanan($keyword);
        $this->load->view('riwayat_simpanan',$data);
    }

    public function jaminan_anggota($id_anggota){
        //$where = array('id_anggota' => $id_anggota);
        $data['jaminan'] = $this->model_simpanan->jaminan_anggota($id_anggota);
        $this->load->view('v_jaminan_anggota',$data);
    }

    public function readNotif()
    {
        $where = $this->input->post('untuk');
        $read = $this->input->post('is_read');

        $this->db->set('is_read', $read);
        $this->db->where('untuk', $where);
        $this->db->update('notifikasi');
    }

    public function lihat_statusanggota(){
        $data['anggota'] = $this->model_simpanan->tampil_statusanggota();
        $this->load->view('v_statusanggota',$data);
    }

    public function lihat_statusanggotaS(){ #supervisor
        $data['anggota'] = $this->model_simpanan->tampil_statusanggota();
        $this->load->view('v_statusanggotaS',$data);
    }

    public function aktifkan($id_anggota){
        $status_anggota         = 1;
        $pokok = 35000;
        $Tanggal = date('Y-m-d');

        $data = array(
                'status_anggota' => $status_anggota
        );
 
        $where = array(
        'id_anggota' => $id_anggota
        ); 

        $this->model_simpanan->insert2($id_anggota,$pokok,$Tanggal);
        $this->model_simpanan->update_simpanan($where,$data,'anggota');
        redirect('Simpanan/lihat_statusanggota');
    }

    public function nonaktifkan($id_anggota){
        $status_anggota         = 2;
        $data = array(
                'status_anggota' => $status_anggota
        );
 
        $where = array(
        'id_anggota' => $id_anggota
        ); 
        $this->model_simpanan->update_simpanan($where,$data,'anggota');
        redirect('Simpanan/lihat_statusanggota');
    }

    public function edit_simpananSupervisor($id_anggota){
        //$id_anggota = $this->input->post('id_anggota');
        $data = array(
                'id_anggota' => $id_anggota
        );
        $this->load->view('v_edit_simpananSupervisor', $data);
    }

    public function print_simphlm(){
        $data['simpanan'] = $this->model_simpanan->riwayat_simpananPrint();
        $this->load->view('v_printformPetugas', $data);
    }

     public function print_Petugastombol(){
        $data['simpanan'] = $this->model_simpanan->riwayat_simpananPrint();
        $this->load->view('v_printPetugastombol', $data);
    }

    public function caritanggal(){
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        $data['simpananSuka'] = $this->model_simpanan->total_simpanPetugas();
		$data['simpananW'] = $this->model_simpanan->total_simpanWajibPetugas();
		$data['simpananP'] = $this->model_simpanan->total_simpanPokokPetugas();
		$data['simpananAll'] = $this->model_simpanan->AllSimpanan();

        $data['simpanan'] = $this->model_simpanan->get_date($tanggal_mulai, $tanggal_akhir);
        $this->load->view('v_rekapHSupervisor',$data);
    }

    public function rekapHSupervisor(){
    	$tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        $data['simpananSuka'] = $this->model_simpanan->total_simpanPetugas();
		$data['simpananW'] = $this->model_simpanan->total_simpanWajibPetugas();
		$data['simpananP'] = $this->model_simpanan->total_simpanPokokPetugas();
		$data['simpananAll'] = $this->model_simpanan->AllSimpanan();

		$data['simpanan'] = $this->model_simpanan->riwayat_simpanan();
        $this->load->view('v_rekapHSupervisor', $data);
    }

    public function rekapBSupervisor(){
        $data['simpanan'] = $this->model_simpanan->rekapBsimpanan();
        $this->load->view('v_rekapBSupervisor', $data);
    }
}