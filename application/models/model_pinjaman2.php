<?php 
    class model_pinjaman extends CI_Model{

        public function insert($data,$table){
            $this->db->insert($table,$data);
        }

        public function tampil_pinjaman($where){
    		$this->db->select("id_pinjaman,a.nama,jml_pinjaman, status, tgl_pinjaman, tenor, bunga, angsuran,denda");
    		$this->db->from('pinjaman2 p');
            $this->db->join('anggota a','p.id_anggota = a.id_anggota');
            $this->db->where('a.id_anggota',$where);
            $this->db->order_by('p.tgl_pinjaman','ASC');
    		$query = $this->db->get();
    		return $query->result();
    	}

        public function tampil_riwayatPinjaman($where){
            $this->db->select("id_pinjaman,jml_pinjaman, status, tgl_pinjaman, tenor, bunga, (jml_pinjaman*bunga/100) as pengembalian");
            $this->db->from('histori_pinjaman2');
            $this->db->where('id_anggota',$where);
            $this->db->order_by('tgl_pinjaman','ASC');
            $query = $this->db->get();
            return $query->result();
        }

        public function tampil_pinjaman_petugas(){
            $this->db->select("p.id_anggota,id_pinjaman,a.nama,jml_pinjaman, status, tgl_pinjaman, tenor,plafon, bunga,denda");
            $this->db->from('pinjaman2 p');
            $this->db->join('anggota a','p.id_anggota = a.id_anggota');
            $this->db->order_by('status','DESC');
            $query = $this->db->get();
            return $query->result();
        }

        public function laporan_pinjaman(){
            $this->db->select("p.id_anggota,id_pinjaman,a.nama,count(a.nama) as totalpinjam,sum(jml_pinjaman) as jml_pinjaman, status, tgl_pinjaman, tenor, bunga, sum(angsuran) as angsuran");
            $this->db->from('pinjaman2 p');
            $this->db->join('anggota a','p.id_anggota = a.id_anggota');
            $this->db->group_by('a.nama');
            $this->db->where('status','Accepted');
            $query = $this->db->get();
            return $query->result();
        }

        public function laporan_pinjaman2($where){
            $this->db->select("p.id_anggota,id_pinjaman,a.nama,count(a.nama) as totalpinjam,sum(jml_pinjaman) as jml_pinjaman, status, tgl_pinjaman, tenor, bunga");
            $this->db->from('pinjaman2 p');
            $this->db->join('anggota a','p.id_anggota = a.id_anggota');
            $this->db->where('status','Accepted');
            $this->db->where('p.id_anggota',$where);
            $query = $this->db->get();
            return $query->result();
        }

        public function laporan_pinjaman_petugas(){
            $query = $this->db->query("SELECT SUM(angsuran) as total From pinjaman2 WHERE status='Accepted'");
            //$query = $this->db->get();
            return $query->result();
        }

        public function total($where){
            $query = $this->db->query("SELECT SUM(jml_pinjaman) as total From pinjaman2 WHERE status='Accepted' AND id_anggota='$where'");
            //$this->db->where('namaLengkap',$nama);
            return $query->result();
        }

        public function totalAngsuran($where){
            $query = $this->db->query("SELECT SUM(angsuran) as total From pinjaman2 WHERE status='Accepted' AND id_anggota='$where'");
            //$this->db->where('namaLengkap',$nama);
            return $query->result();
        }

        public function pinjaman(){
            $this->db->select('*');
            $this->db->from('pinjaman2');
            $query = $this->db->get();
            return $query->result();
        }

    	public function edit_pinjaman($where,$table){      
        	return $this->db->get_where($table,$where);
    	}

    	public function update_pinjaman($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

    	public function hapus_pinjaman($where,$table){
        	$this->db->delete($table,$where);
    	}

        public function searchAcc($keyword){
            $this->db->select("p.id_anggota,p.id_pinjaman,a.nama, jml_pinjaman, p.status, p.tgl_pinjaman, p.tenor, p.bunga,p.plafon");
            $this->db->from('pinjaman2 p');
            $this->db->join('anggota a','p.id_anggota = a.id_anggota');
            $this->db->like('a.nama',$keyword);
            $query = $this->db->get();
            return $query->result();
        }

        public function resi($id_pinjaman){
            $this->db->select("p.id_anggota,id_pinjaman,a.nama,sum(jml_pinjaman) as jml_pinjaman, status, tgl_pinjaman, tenor, bunga");
            $this->db->from('pinjaman2 p');
            $this->db->join('anggota a','p.id_anggota = a.id_anggota');
            $this->db->where('id_pinjaman',$id_pinjaman);
            $query = $this->db->get();
            return $query;
        }

        function cekPinjaman($where){
        $sql = "SELECT tenor, jml_pinjaman FROM pinjaman2 WHERE id_anggota = $where";
        $query = $this->db->query($sql);
        return $query;
    }
    }
?>