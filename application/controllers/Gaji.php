<?php

class Gaji extends CI_Controller
{
    function __construct(){
        parent::__construct();      
        $this->load->model('m_dataGaji');
        $this->load->helper('url');
 
    }

    public function daftarGaji(){
        $data['pegawai']=$this->m_dataGaji->get_pegawai();
        $data['penggajian'] = $this->m_dataGaji->tampil_data()->result();
        $this->load->view('v_tampilGaji',$data);
    }

    public function tambah() 
    {
        $data['pegawai']=$this->m_dataGaji->get_pegawai();
        $this->load->view('v_inputGaji',$data);
    }
    
    public function tambahAksi() 
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $tgl = $this->input->post('tgl');
        $gapok = $this->input->post('gapok');
        $lembur = $this->input->post('lembur');
        $lainnya = $this->input->post('lainnya');
 
        $data = array(
            'id_pegawai' => $id_pegawai,
            'tgl' => $tgl,
            'gapok' => $gapok,
            'lembur' => $lembur,
            'lainnya' => $lainnya
            );
        $this->m_dataGaji->input_data($data,'penggajian');
        redirect('gaji/daftarGaji');
    }
     public function edit($id_gaji){
        $data['pegawai']=$this->m_dataGaji->get_pegawai();
        $data['penggajian'] = $this->m_dataGaji->get($id_gaji);
        $this->load->view('v_editGaji',$data);
    }

     public function editAksi(){
        $id_gaji = $this->input->post('id_gaji');
        $id_pegawai = $this->input->post('id_pegawai');
        $tgl = $this->input->post('tgl');
        $gapok = $this->input->post('gapok');
        $lembur = $this->input->post('lembur');
        $lainnya = $this->input->post('lainnya');
 
        $data = array(
        'id_pegawai' => $id_pegawai,
            'tgl' => $tgl,
            'gapok' => $gapok,
            'lembur' => $lembur,
            'lainnya' => $lainnya
        );
        $this->m_dataGaji->update($data,$id_gaji);
        redirect('Gaji/daftarGaji');
    }

    public function hapus($id_gaji){
        $where = array('id_gaji' => $id_gaji);
        $this->m_dataGaji->hapus_data($where,'penggajian');
        redirect('Gaji/daftarGaji');
    }

    public function cetak($id_gaji)
    {
        $dataArray['penggajian'] = $this->m_dataGaji->tampilGaji($id_gaji);
        $this->load->view('cetakGaji',$dataArray);
    }
}