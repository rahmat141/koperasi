<?php 
    class model_kehadiran extends CI_Model{

        public function insert($data,$table){
            $this->db->insert($table,$data);
        }

        public function tampil(){
    		$this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
    		$this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
    		$query = $this->db->get();
    		return $query->result();
    	}

        public function pegawai(){
            $this->db->select('*');
            $this->db->from('pegawai');
            $query = $this->db->get();
            return $query->result();
        }

    	public function edit_kehadiran($where,$table){      
        	return $this->db->get_where($table,$where);
    	}

    	public function update_kehadiran($where,$data,$table){
        	$this->db->where($where);
        	$this->db->update($table,$data);
    	} 

    	public function hapus_kehadiran($where,$table){
        	$this->db->delete($table,$where);
    	}

        public function get_januari(){
            $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 01');
            $query = $this->db->get();
            return $query;
    }

    public function get_februari(){
            $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 02');
            $query = $this->db->get();
            return $query;
    }

    public function get_maret(){
        $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 03');
            $query = $this->db->get();
            return $query;
    }

    public function get_april(){
        $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 04');
            $query = $this->db->get();
            return $query;
    }

    public function get_mei(){
        $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 05');
            $query = $this->db->get();
            return $query;
    }

    public function get_juni(){
        $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 06');
            $query = $this->db->get();
            return $query;
    }

    public function get_juli(){
        $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 07');
            $query = $this->db->get();
            return $query;
    }

    public function get_agustus(){
        $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 08');
            $query = $this->db->get();
            return $query;
    }

    public function get_september(){
       $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 09');
            $query = $this->db->get();
            return $query;
    }

    public function get_oktober(){
        $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 10');
            $query = $this->db->get();
            return $query;
    }

    public function get_november(){
        $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 11');
            $query = $this->db->get();
            return $query;
    }

    public function get_desember(){
        $this->db->select("k.id_pegawai,p.nama,k.tanggal,k.jam_datang,k.jam_pulang, SUBSTRING((timediff(jam_pulang,jam_datang) - jam_kerja),1,1) AS lembur");
            $this->db->from('kehadiran k');
            $this->db->join('pegawai p',' k.id_pegawai = p.id_pegawai');
            $this->db->WHERE('MONTH(tanggal) = 12');
            $query = $this->db->get();
            return $query;
    }

    }
?>