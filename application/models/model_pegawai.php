<?php 
    class model_pegawai extends CI_Model{

        public function insert_pegawai($data,$table){
            $this->db->insert($table,$data);
        }

        public function tampil_pegawai(){
    		$this->db->select('id_pegawai,nama,pekerjaan, jenis_kelamin, alamat,no_hp');
    		$this->db->from('pegawai');
    		$query = $this->db->get();
    		return $query->result();
    	}

        public function tampil_pegawai2(){
            $this->db->select('count(id_pegawai) as jumlah_pegawai, id_pegawai,nama,pekerjaan, jenis_kelamin, alamat,no_hp');
            $this->db->from('pegawai');
            $query = $this->db->get();
            return $query->result();
        }

    	public function edit_pegawai($where,$table){      
        	return $this->db->get_where($table,$where);
    	}

    	public function update_pegawai($where,$data,$table){
        	$this->db->where($where);
        	$this->db->update($table,$data);
    	} 

    	public function hapus_pegawai($where,$table){
        	$this->db->delete($table,$where);
    	}
    }
?>