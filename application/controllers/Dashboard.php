<?php
//rtes
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'file'));
        $this->load->library('form_validation');
        $this->load->model('model_pinjaman');
        $this->load->model('model_simpanan');
        $this->load->model('model_angsuran');

    }

    public function index()
    {
        $where = $this->session->id_anggota;
        $data['angsuran'] = $this->model_pinjaman->totalAngsuran($where);
        $data['pinjaman'] = $this->model_pinjaman->laporan_pinjaman2($where);
        $data['simpanan'] = $this->model_simpanan->total_simpan($where);
        $data['totalSimpananSukarela'] = $this->model_simpanan->total_simpanSukarela($where);
        $data['simpananW'] = $this->model_simpanan->total_simpanWajib($where);
        $data['simpananP'] = $this->model_simpanan->total_simpanPokok($where);
        $data['total_angsuran'] = $this->model_pinjaman->getAngsuranOnGOing($where);
        $data['notifikasi'] = $this->model_pinjaman->getNotif($where);
        $data['countNotif'] = $this->model_pinjaman->getNotifNotRead($where);
        $this->load->view('v_dashboard', $data);
    }

    public function dashboard_petugas()
    {
        $data['angsuran'] = $this->model_pinjaman->laporan_pinjaman_petugas();
        $data['simpanan'] = $this->model_simpanan->laporan_simpanan_petugas();
        $data['simpanan'] = $this->model_simpanan->total_simpanPetugas();
        $data['simpananW'] = $this->model_simpanan->total_simpanWajibPetugas();
        $data['simpananP'] = $this->model_simpanan->total_simpanPokokPetugas();
        $data['simpananAll'] = $this->model_simpanan->AllSimpanan();
        $data['anggota'] = $this->model_simpanan->laporan_anggota_petugas();
        $data['anggota2'] = $this->model_simpanan->laporan_anggota_petugas2();
        $data['anggota3'] = $this->model_simpanan->laporan_anggota_petugas3();
        $petugas = 'petugas';
        $data['notifikasi'] = $this->model_pinjaman->getNotif($petugas);
        $data['countNotif'] = $this->model_pinjaman->getNotifNotRead($petugas);
        $this->load->view('v_dashboard_petugas', $data);
    }

    public function readNotif()
    {
        $where = $this->input->post('untuk');
        $read = $this->input->post('is_read');

        $this->db->set('is_read', $read);
        $this->db->where('untuk', $where);
        $this->db->update('notifikasi');
    }

    public function dashboard_supervisor()
    {
        $data['angsuran'] = $this->model_pinjaman->laporan_pinjaman_petugas();
        $data['simpanan'] = $this->model_simpanan->laporan_simpanan_petugas();
        $data['simpanan'] = $this->model_simpanan->total_simpanPetugas();
        $data['simpananW'] = $this->model_simpanan->total_simpanWajibPetugas();
        $data['simpananP'] = $this->model_simpanan->total_simpanPokokPetugas();
        $data['simpananAll'] = $this->model_simpanan->AllSimpanan();
        $data['anggota'] = $this->model_simpanan->laporan_anggota_petugas();
        $data['anggota2'] = $this->model_simpanan->laporan_anggota_petugas2();
        $data['anggota3'] = $this->model_simpanan->laporan_anggota_petugas3();
        $this->load->view('v_dashboard_supervisor', $data);
    }

}