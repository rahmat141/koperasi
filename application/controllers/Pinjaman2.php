<?php

class Pinjaman extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session','mpdf');
		$this->load->model('model_pinjaman2');
        $this->load->helper(array('form', 'url','file'));

	}
	
	public function pinjaman(){
		$this->load->view('form_pinjaman');
	}

	public function simpan_pinjaman(){
        $this->form_validation->set_rules('jml_pinjaman', 'Jumlah Pinjaman', 'trim|required|max_length[255]|numeric');
        $this->form_validation->set_rules('tgl_pinjaman', 'Tanggal Pinjam', 'required');
        $this->form_validation->set_rules('tenor', 'Lama Pinjaman','required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan','<font color=red>Harus Menggunakan Angka</font>');
            $this->session->set_flashdata('pesan','<font color=red>Form Tidak Boleh Kosong</font>');
            $this->load->view('form_pinjaman');
        }
        else{

		$post 			= $this->input->post();
		$jml_pinjaman	= $post['jml_pinjaman'];
		$tenor			= $post['tenor'];
		$plafon			= 0;
        $angsuran       = 2/100 * $jml_pinjaman;
		$bunga			= 2;
		$tgl_pinjaman	= $post['tgl_pinjaman'];
		$id_anggota		= $post['id_anggota'];
		$status			= "On Going";

		$data = array(
			'jml_pinjaman'	=> $jml_pinjaman,
			'tenor'			=> $tenor,
			'plafon'		=> $plafon,
            'angsuran'      => $angsuran+$jml_pinjaman,
			'bunga'			=> $bunga,
			'tgl_pinjaman'	=> $tgl_pinjaman,
			'id_anggota'	=> $id_anggota,
			'status'		=> $status
		);

		$this->model_pinjaman->insert($data, 'pinjaman');
        //$this->model_pinjaman->insert($data, 'histori_pinjaman');
        $this->session->set_flashdata('sukses','<font color=green>Berhasil Menambahkan Pinjaman</font>');
		redirect('Pinjaman/pinjaman');
        }
	}

    public function riwayatPinjaman($where){
        $where = $this->session->id_anggota;
        $data['pinjaman'] = $this->model_pinjaman->tampil_riwayatPinjaman($where);
        $this->load->view('v_riwayatPinjaman',$data);
    }

	public function show_pinjaman($where){
        $where = $this->session->id_anggota;
        $cekPinjaman   = $this->model_pinjaman2->cekPinjaman($where)->result();
        if ($cekPinjaman[0]->tenor < date("Y-m-d")) {
            $jml_pinjaman = $cekPinjaman[0]->jml_pinjaman * 2;
            $data = array(
            'jml_pinjaman'  => $jml_pinjaman);
            $where = array('id_anggota' => $this->session->id_anggota, 'jml_pinjaman'=>$cekPinjaman[0]->tenor < date("Y-m-d"));
            $this->model_pinjaman2->update_pinjaman($where,$data, 'pinjaman2');
            $where = $this->session->id_anggota;
            $data['totalPinjaman'] = $this->model_pinjaman2->total($where);
            $data['totalAngsuran'] = $this->model_pinjaman2->totalAngsuran($where);
            $data['pinjaman'] = $this->model_pinjaman2->tampil_pinjaman($where);
            $this->load->view('v_daftarPinjaman2',$data);

        }else{
        $where = $this->session->id_anggota;
        $data['totalPinjaman'] = $this->model_pinjaman2->total($where);
        $data['totalAngsuran'] = $this->model_pinjaman2->totalAngsuran($where);
		$data['pinjaman'] = $this->model_pinjaman2->tampil_pinjaman($where);
        $this->load->view('v_daftarPinjaman2',$data);

	   }
    }

    public function show_pinjamanku(){
        $this->load->view('v_daftarPinjaman2');
    }

    public function daftarPinjaman($id_anggota){
        #$where = array('id_anggota' => $id_anggota);
        $data['pinjaman'] = $this->model_pinjaman->tampil_pinjaman($id_anggota);
        $this->load->view('v_daftarPinjaman_pengurus',$data);
    }


	public function acc_pinjaman(){
		$data['pinjaman'] = $this->model_pinjaman->tampil_pinjaman_petugas();
        $this->load->view('acc_pinjaman',$data);
	}

	public function laporan_pinjaman(){
		$data['pinjaman'] = $this->model_pinjaman->laporan_pinjaman();
        $this->load->view('laporan_pinjaman',$data);
	}

    public function denda($id_pinjaman){
        $where = array('id_pinjaman' => $id_pinjaman);
        $data['pinjaman'] = $this->model_pinjaman->edit_pinjaman($where,'pinjaman')->result();
        $this->load->view('v_denda',$data);
    }

    public function simpan_denda(){
        $post           = $this->input->post();
        $jml_pinjaman   = $post['jml_pinjaman'];
        $tenor          = $post['tenor'];
        $plafon         = 0;
        $bunga          = 2;
        $tgl_pinjaman   = $post['tgl_pinjaman'];
        $id_anggota     = $post['id_anggota'];
        $id_pinjaman    = $post['id_pinjaman'];
        $status         = $post['status'];
        $denda          = $post['denda'];
 
        $data = array(
            'jml_pinjaman'  => $jml_pinjaman,
            'tenor'         => $tenor,
            'plafon'        => $plafon,
            'bunga'         => $bunga,
            'tgl_pinjaman'  => $tgl_pinjaman,
            'id_anggota'    => $id_anggota,
            'id_pinjaman'   => $id_pinjaman,
            'status'        => $status,
            'denda'         => $denda
        );

        $where = array('id_pinjaman' => $id_pinjaman);
        $this->model_pinjaman->update_pinjaman($where,$data,'pinjaman');
        redirect('Pinjaman/daftarPinjaman/'.$id_anggota);
    }
	public function editPinjaman($id_pinjaman){
        $where = array('id_pinjaman' => $id_pinjaman);
        $data['pinjaman'] = $this->model_pinjaman->edit_pinjaman($where,'pinjaman')->result();
        $this->load->view('v_edit_pinjaman',$data);
    }

    public function updatePinjaman(){
        $id_pinjaman = $this->input->post('id_pinjaman');
        $jml_pinjaman = $this->input->post('jml_pinjaman');
        $tenor = $this->input->post('tenor');
        $tgl_pinjaman = $this->input->post('tgl_pinjaman');
        $bunga	= $this->input->post('bunga');
        $angsuran =  2/100 * $jml_pinjaman;
 
        $data = array(
        'jml_pinjaman' => $jml_pinjaman,
        'tenor' => $tenor,
        'tgl_pinjaman' => $tgl_pinjaman,
        'angsuran' => $angsuran+$jml_pinjaman,
        'bunga' => $bunga
        );
 
        $where = array(
        'id_pinjaman' => $id_pinjaman
        ); 
        $this->model_pinjaman->update_pinjaman($where,$data,'pinjaman');
        redirect('Pinjaman/show_pinjaman/'.$this->session->id_anggota);
    }

    public function approval($id_pinjaman){
        $post           = $this->input->post();
        $jml_pinjaman   = $post['jml_pinjaman'];
        $tenor          = $post['tenor'];
        $plafon         = 0;
        $bunga          = 2;
        $tgl_pinjaman   = $post['tgl_pinjaman'];
        $id_anggota     = $post['id_anggota'];
        $id_pinjaman    = $post['id_pinjaman'];
        $status         = "Accepted";

        $data = array(
                'status' => $status
        );
 
        $data2 = array(
            'jml_pinjaman'  => $jml_pinjaman,
            'tenor'         => $tenor,
            'plafon'        => $plafon,
            'bunga'         => $bunga,
            'tgl_pinjaman'  => $tgl_pinjaman,
            'id_anggota'    => $id_anggota,
            'id_pinjaman'   => $id_pinjaman,
            'status'        => $status
        );
 
        $where = array(
        'id_pinjaman' => $id_pinjaman
        ); 
        $this->model_pinjaman->update_pinjaman($where,$data,'pinjaman');
        $this->model_pinjaman->insert($data2, 'histori_pinjaman');
        redirect('Pinjaman/acc_pinjaman');
    }

    public function hapusPinjaman($id_pinjaman){
        $where = array('id_pinjaman' => $id_pinjaman);
        $this->model_pinjaman->hapus_pinjaman($where,'pinjaman');
        redirect('Pinjaman/show_pinjaman/'.$this->session->id_anggota);
    }

    public function tolak($id_pinjaman){
        $where = array('id_pinjaman' => $id_pinjaman);
        $this->model_pinjaman->hapus_pinjaman($where,'pinjaman');
        redirect('Pinjaman/acc_pinjaman/');
    }

    public function searchAcc(){
        $keyword = $this->input->post('search');
        $data['pinjaman'] = $this->model_pinjaman->searchAcc($keyword);
        $this->load->view('acc_pinjaman',$data);
    }

    public function cetak_resi($id_pinjaman){ 
        //$where = array('id_pinjaman' => $id_pinjaman);
        $data['pinjaman'] = $this->model_pinjaman->resi($id_pinjaman)->result();
        $this->load->library('pdf');
        $this->load->view('resi',$data);
    }
}